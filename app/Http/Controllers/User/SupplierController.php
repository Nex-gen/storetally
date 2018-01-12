<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $suppliers = Supplier::all();
      return view('user.shop.supplier.supplier', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->all();
      $this->validate($request,[
        'companyName'=>'required',
        'email'=>'required',
        'phonenumber'=>'required',
        'contactsPerson'=>'required',
        'address'=>'required'
      ]);

      $supplier = new Supplier;
      $supplier->companyName = $request->companyName;
      $supplier->email = $request->email;
      $supplier->phonenumber = $request->phonenumber;
      $supplier->contactsPerson = $request->contactsPerson;
      $supplier->address = $request->address;
      $supplier->save();
      return response()->json($supplier);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $supplier = Supplier::find($id);
      return response()->json($supplier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // return $request->all();
      $this->validate($request,[
        'companyName'=>'required',
        'email'=>'required',
        'phonenumber'=>'required',
        'contactsPerson'=>'required',
        'address'=>'required'
      ]);

      $supplier = Supplier::findOrFail($id);
      $supplier->companyName = $request->companyName;
      $supplier->email = $request->email;
      $supplier->phonenumber = $request->phonenumber;
      $supplier->contactsPerson = $request->contactsPerson;
      $supplier->address = $request->address;
      $supplier->update();
      return response()->json($supplier);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $supplier = Supplier::findOrFail($id);
      $supplier->delete();
      return response()->json($supplier);
    }
}
