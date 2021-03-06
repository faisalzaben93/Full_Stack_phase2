<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/shop/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
  
   
     public function register(Request $request)
    {
         /** @var User $user */
         $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $validatedData['password'] = Hash::make(array_get($validatedData, 'password'));
        $user = app(User::class)->create($validatedData);
         if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $filename =time().$name;
            $file->move('storage/users/', $filename);
            $user->image = $filename;
        }
         $user->save();
        auth()->guard()->login($user);
         return redirect()->to('/');
    }
}

   