<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            return back()->withErrors([$validation], 'insert');
        }
    }
}