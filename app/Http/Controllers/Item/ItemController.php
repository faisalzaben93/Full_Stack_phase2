<?php

namespace App\Http\Controllers\Item;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Item;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Redirect;
use App\Http\Controllers\Comment\CommentController;

use Illuminate\Support\Facades\Auth;



//use Illuminate\Foundation\Auth\RegistersUsers;

//use App\Http\Controllers\Auth;
//use lluminate\Http\UploadedFile;
use RegistersUsers;

//must be app/user
class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories_Array['categories'] = Category::all();
        $items_Array['items'] = Item::all()->where('user_id_fk',Auth::id());

        return view('account.product.index')->with($categories_Array)->with($items_Array);
    }

    public function create()
    {
        $categories_Array['categories'] = Category::all();
        return view('account.product.create')->with($categories_Array);
    }
 
    public function store(Request $request,Item $item)
    {
         if($request->hasfile('item_image'))
        {
            $file = $request->file('item_image');
            $name = $file->getClientOriginalName();
            $filename =time().$name;
            $file->move('storage/items/', $filename);
            $item->item_image = $filename;
        }
        
        $item->item_name = $request->input('item_name');
        $item->item_description = $request->input('item_description');
        $item->item_price = $request->input('item_price');
        $item->item_country = $request->input('item_country');
        $item->category_id_fk = $request->input('category');
       if (isset($filename))
       {
          $item->item_image = $filename;
        }else
         {
             $item->item_image = 'storage\defaultUser.png';
         }
    
        $item->user_id_fk =Auth::id();
        $item->save();
        return redirect()->route('account.product.index');  
    
      }
  
    public function show($item_id)
    {
        $item = Item::where('item_id',$item_id)->first();
        $category= Category::where('category_id',$item->category_id_fk)->first();
        $name=$category->category_name;
        $user=User::where('id',$item->user_id_fk)->first();
        $username=$user->username;

        return view('shop.category.list')->with('item',$item)->with('name',$name)->with('username',$username);


        //
    }


    public function edit($item_id)
    {
       // $items_Array['item'] = Item::all()->where('user_id_fk',Auth::id());
        $categories = Category::all();
        $item= Item::find($item_id);
        return view('account.product.edit')->with('item',$item)->with('categories',$categories);
    }


    public function update(Request $request,$item_id)
    {
        $item = Item::find($item_id);

        $filename =  $item->item_image;
        if($request->hasfile('item_image'))
        {
            $file = $request->file('item_image');
            $name = $file->getClientOriginalName();
            $filename =time().$name;
            $file->move('storage/items/', $filename);
            $item->item_image = $filename;
        }
        
        $item->item_name = $request->input('item_name');
        $item->item_description = $request->input('item_description');
        $item->item_price = $request->input('item_price');
        $item->item_country = $request->input('item_country');
        $item->category_id_fk = $request->input('category');
        $item->item_image = $filename;
        $item->category_id_fk = $request->input('category');
        $item->user_id_fk =Auth::id();
        $item->save();
        return redirect()->route('account.product.index');    
    }


    public function destroy($id)
    {
        //
    }


    
}







