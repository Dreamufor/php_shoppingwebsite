<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ProductController extends Controller
{

    public function index(){
        $products = Products::all();
        return view('products.index',['products' => $products]);
    }

    public function details(Products $products){
        return view('products.show', compact('products'));
    }

    public function show(Products $products)
    {
        $products = Products::all();
        $categories = Category::all();
        return view('products.show',
            ['products' => $products,
             'categories' => $categories,
            ]);
    }


    public function create(Products $products)
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        return view('products.create',
            [
                'products' => $products,
                'categories' => $categories,
                'suppliers' => $suppliers,
            ]);
    }

    public function destroy($id){
        Products::destroy($id);
        return redirect('/products/index');
    }




}

