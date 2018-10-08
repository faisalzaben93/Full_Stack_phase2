<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','image',
    ];// create tabel user

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
        public function items(){
        return $this->hasMany('App\Item');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public static function edit($request, $image)
    {
    
        $user = User::find(Auth::id());
        $user->username= $request['username'];
        $user->email = $request['email'];
        $user->image = $image;
        if($user->password != $request['password'])
        {
            $user->password = $request['password'];
        }
        $user->save();

    }
}
