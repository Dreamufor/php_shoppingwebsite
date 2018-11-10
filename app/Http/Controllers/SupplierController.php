<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $supplier = Supplier::where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('phoneNumber', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $supplier = Supplier::latest()->paginate($perPage);
        }

        return view('supplier.index', compact('supplier'));
    }

//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => 'required|string|max:20',
//            'email' => 'required|string|email|max:30|unique:suppliers',
//            'phoneNumber' => 'required|string|min:6|max:8',
//
//        ]);
//    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */

    public function create(Supplier $supplier)
    {
        return view('supplier.create',[
            'supplier' => $supplier,
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
        $requestData = $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:30|unique:suppliers',
            'phoneNumber' => 'required|string|min:6|max:8',
        ]);

        
        Supplier::create($requestData);

        return redirect('supplier')->with('flash_message', 'Supplier added!');
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
        $supplier = Supplier::findOrFail($id);

        return view('supplier.show', compact('supplier'));
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
        $supplier = Supplier::findOrFail($id);

        return view('supplier.edit', compact('supplier'));
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
        
        $supplier = Supplier::findOrFail($id);
        $supplier->update($requestData);

        return redirect('supplier')->with('flash_message', 'Supplier updated!');
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
        try{
            Supplier::destroy($id);
        }

        catch(\Exception $exception){
        //dd($exception);
        $errormsg = 'Cannot delete a supplier with products in order, wrong code ' . $exception->getCode();
        return Response::json(['errormsg'=>$errormsg]);
    }

        return redirect('supplier')->with('flash_message', 'Supplier deleted!');
    }
}
