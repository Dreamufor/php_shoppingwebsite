<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Order;
use App\Cart;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Session;
use App\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $order = Order::where('firstName', 'LIKE', "%$keyword%")
                ->orWhere('lastName', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('orderDate', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $order = Order::latest()->paginate($perPage);
        }

        return view('order.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Order $order)
    {
        return view('order.create', [
            'order' => $order,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

//        $oldCart = Session::get('cart');
//        $cart = new Cart($oldCart);
//
//        $order = new Order();
//        $order->cart = serialize($cart);
//
//        Auth::user()->orders()->save($order);
//
//
//        $requestData = $request->all();
//
//        Order::create($requestData);
//
//        return view('order.purchased');

        $order = new Order([
              'firstName' => $_POST['firstName'],
              'lastName' => $_POST['lastName'],
              'address' => $_POST['address'],
              'phone' => $_POST['phone'],
              //'status' => $_POST['status'],
              'orderDate' =>date_format(Carbon::now(), 'Y-m-d H:m:s'),
              'subtotal' => (Session::get('cart')->totalPrice-Session::get('cart')->totalGST),
              'gst' => Session::get('cart')->totalGST,
              'grandtotal' => Session::get('cart')->totalPrice,
              'user_id' => Auth::user()->id,
        ]);
        $order->save();


        Log::info(Auth::user()->email.' Create the order');

        foreach (Session::get('cart')->items as $item) {
            $orderItem = new OrderItem([
                'order_id' => $order->id
                , 'product_id' => $item['item']->id
                , 'unitPrice' => $item['item']->price
                , 'quantity' => $item['qty']
            ]);
            $orderItem->save();
        }

        Session::forget('cart');

        return view('order.purchased');

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
        $order = Order::findOrFail($id);

        $orderItem = OrderItem::all();

        return view('order.show', compact('order'),[
            'orderItem' => $orderItem,
        ]);
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
        $order = Order::findOrFail($id);

        return view('order.edit', compact('order'));
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
        
        $order = Order::findOrFail($id);
        $order->update($requestData);

        return redirect('order')->with('flash_message', 'Order updated!');
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
        Order::destroy($id);

        return redirect('order')->with('flash_message', 'Order deleted!');
    }


    public function changeStatus($id){
        $order = Order::findOrFail($id);

        $order -> status = 'shipped';

        $order -> save();

        return redirect()->back();
    }

}
