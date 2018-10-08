<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function addComment(Request $request, $item_id)
    {
   
        $userID = Auth::id();
        $comment = new Comment;
        $comment->comment = $request->input('comment') ;
        $comment->user_id_fk = $userID;
        $comment->item_id_fk = $item_id;
        $comment->save();
        return back();
    }
    public function index(Request $request)
    {
        $items = Item::paginate(6);
    return view('homepage' )->with('items', $items);
    }
    public function category()
    {
        $arr['categories'] = Category::all();
        return view('homepage')->with($arr);
    } 
     public function show($item_id)
    {
        $data = Item::returnData($item_id);
        return view('shop.category.list',  $data);
    }

}
