<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Item;
class Category extends Model
{
    protected $fillable = [
        'category_id', 'category_name'
    ];
    public function items(){
        return $this->hasMany('App\Item');
    }
}
