<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    public function index()
    {
        return view('frontend/product');
    }
    public function find($product)
    {
        // Both are same
        // $data['name'] = $product;
        // $data['prod_list'] = ['iphone','onplus','pixels'];

        $data = [
            'name' => $product,
            'prod_list' => ['iphone','onplus','pixels'],
        ];
        return view('frontend/product',$data);
    }
}