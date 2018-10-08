<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Item;
use App\Comment;

use Illuminate\Database\Eloquent\Builder;
class CategoriesController extends Controller
{

    public function show($category_id)
    {
        $items['items'] = Item::all()->where('category_id_fk',$category_id);
        $categories['categories'] = Category::where('category_id',$category_id)->first();
        return view('shop.category.show')->with($categories)->with($items);
    }


}
