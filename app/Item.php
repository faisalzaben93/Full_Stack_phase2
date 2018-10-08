<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Item;
use App\User;
class Item extends Model
{
    protected $fillable = [
        'item_id', 'item_name', 'item_description', 'item_price', 'item_country', 'item_image',
    ];

    protected $primaryKey = 'item_id';
    protected $table = 'items';

    //forginkey refrence
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public static function returnData($item_id)
    {
        $item = Item::where('item_id',$item_id)->first();
        $category= Category::where('category_id',$item->category_id_fk)->first();
        $name=$category->category_name;
        $user=User::where('id',$item->user_id_fk)->first();
        $username=$user->username;
        $user = User::find($item->user_id_fk)->first();
        $comments = Comment::all()->where('item_id_fk', $item_id);

        foreach ($comments as $comment) {
            $comment['user'] = User::find($comment->user_id_fk);
        }
        $data = [
            'item' => $item,
             'name' => $name,
              'username' => $username,
               'user' => $user,
                'comments' => $comments
        ];

        return $data;
    }
}
