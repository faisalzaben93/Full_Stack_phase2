<?php

namespace App\Http\Controllers\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Comment;

class CommentController extends Controller
{
    public function showProduct($id)
    {
        $item = Item::find($id);
        $comments = Comment::all()->where('item_id', $id);
        return view('product')->with('item', $item)->with('comments', $comments);
    }
    public function index()
    {

    }


    public function create()
    {
   }


    public function store(Request $request,$item_id)

    {
        $userID = Auth::id();
        $comment = new Comment();
        $comment->comment = $request->input('comment') ;
        $comment->user_id_fk = $userID;
        $comment->item_id_fk = $item_id;
        $comment->save();
        return back(); 
    }

}
