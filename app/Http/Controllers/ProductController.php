<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Supplier;
use App\Product;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $product = Product::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->orWhere('supplier_id', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('imgUrl', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $product = Product::latest()->paginate($perPage);
        }

        return view('product.index', compact('product'));
    }

    public function display(Request $request)
    {
        $keyword = $request->get('search');

        $perPage = 8;

        if(Route::current()-> parameter('id') != null){

            $product = Product::where('category_id', '=', Route::current()-> parameter('id'));
        }
        else{
            $product = Product::orderby('id');
        }

//        if (!empty($keyword)) {
//            $souvenir = new Collection();
//
//            foreach ($product as $p){
//                if(stripos($p->name,$keyword)){
//                    $souvenir -> push($p);
//                }
//            }
//
//            $product = $souvenir;
////            dd($product);
//        }
//             $product=$product ->latest()->paginate($perPage);
        $min = $request->get('minPrice')?:0;
        $max = $request->get('maxPrice')?:999999999;

//        if(!empty($min)){
//            $product = $product -> where('price','>',$min);
//        }
//        if(!empty($max)){
//            $product = $product -> where('price','<','88');
//        }
        $product = $product -> where('price','>',$min);
        $product = $product -> where('price','<',$max);

        if (!empty($keyword)) {
            $product = $product-> where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $product = $product-> latest()->paginate($perPage);
        }

        $category = Category::all();






        return view('product.display',compact('product','category'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Product $product)
    {
        $category = Category::all();
        $supplier = Supplier::all();


        return view('product.create',
            [
                'product' => $product,
                'category' => $category,
                'supplier' => $supplier,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
//        try {
//            $this->validate($request, [
//                'name' => 'required|string|max:20',
//                'description' => 'required|string|max:50',
//                'price' => 'required|number|min:1|max:9999999',
//                'imgUrl' => 'required',
//            ]);
//        } catch (ValidationException $e) {
//        }

        $requestData = $request->validate([
            'name' => 'required|string|max:20',
            'description' => 'required|string|max:50',
            'price' => 'required|numeric',
        ]);

        if($_FILES['_files']['error'] > 0){
            echo('');
        }
        elseif (isset($_FILES['_files'])){
            move_uploaded_file($_FILES['_files']['tmp_name'],'images/products/'.$_FILES['_files']['name']);
        }


        $product = new Product([
           'name' => $_POST['name'],
           'description' => $_POST['description'],
           'supplier_id' => $_POST['supplier_id'],
           'category_id' => $_POST['category_id'],
           'price' => $_POST['price'],
          'imgUrl' => 'images/products/'.$_FILES['_files']['name'],
        ]);




        $product->save($requestData);

//
//        $requestData = $request->all();
//
//        Product::create($requestData);

        return redirect('product')->with('flash_message', 'Product added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {

$product= Product::findOrFail($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $category = Category::all();
        $supplier = Supplier::all();

        return view('product.edit', compact('product','category','supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $product = Product::findOrFail($id);
        $product->update($requestData);

        return redirect('product')->with('flash_message', 'Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('product')->with('flash_message', 'Product deleted!');
    }


    public function getAddToCart(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        //dd($request->session()->get('cart'));
        $request->session()->put('cart', $cart);
         return redirect()->route('display');

    }

    public function getAddItem($id){

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addItem($id);

        Session::put('cart', $cart);
        return redirect()->back();

    }

    public function getRemoveItem($id){

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        Session::put('cart', $cart);
        return redirect()->back();

    }

    public function getRemoveAll(){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        Session::forget('cart', $cart);

        return redirect()->back();
    }





}
