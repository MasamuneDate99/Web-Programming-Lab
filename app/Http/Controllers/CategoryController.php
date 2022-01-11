<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function addCategory(Request $req){
        $rules = [
            'name' => 'required|unique:products_category,name|min:2'
        ];

        $validation = Validator::make($req->all(), $rules);

        if($validation->fails()){
            return back()->withErrors($validation, 'insert');
        }
        
        $productCategory = new Category();
        $productCategory->name = $req->category;
        $productCategory->save();
        
        return redirect()->intended('addCategory');
    }
}
