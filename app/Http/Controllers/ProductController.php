<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function productVerification(Request $req){
        $rules = [
            'productName' => 'required|unique:products,name|min:5',
            'description' => 'required|min:5',
            'price' => 'required|numeric|gt:0',
            'category' => 'required',
            'image' => 'required|mimes:jpg'
        ];

        $validation = Validator::make($req->all(), $rules);

        if($validation->fails()){
            return back()->withErrors($validation, 'insert');
        }
        else{
            return redirect()->intended('registerProduct');
        }

        $file = $req->file('image');
        $imageName = time().'.'.$file->getClientOriginalExtension();

        Storage::putFileAs('public/images', $file, $imageName);
        $imageName = 'images/'.$imageName;

        $product = new Products();
        $product->productName = $req->productName;
        $product->description = $req->productDesc;
        $product->price = $req->productPrice;
        $product->category = $req->productCategory;
        $product->image = $req->$imageName;

        $product->save();
    }

    public function showProduct(){
        $products = Products::all();
        
        return view('test', ['products' => $products]);
    }

    public function searchItem(Request $req){
        $keyword = null;
        $keyword = $req->$keyword;
        $products = DB::table('products')->where('name', 'like', "&".$keyword."&")->paginate();

        return view('test', ['products' => $products]);
    }
}