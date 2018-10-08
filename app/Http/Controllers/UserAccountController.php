<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\Redirect;

class UserAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('account.profile.main')->with('user', $user);
    }
    public function store(Request $request)
    {
     
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        echo"store user";
       // return redirect()->route('account.profile');
    }
  
        public function edit($userID)
        {

            $user = User::find($userID);
   
             return view('account.profile.edit')->with('user',$user);
  
        }     
        public function update(Request $request,$userID)
        {            
            $user  = User::find($userID);
            $filename =$user->image;
             if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $filename =time().$name;
                $file->move('storage/users/', $filename);
                $user->image = $filename;
            }
             User::edit($request->all(),$filename);
             return redirect()->back();
        }     
}




