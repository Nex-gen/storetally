<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User\Product;
use App\Models\User\Brand;
use App\Models\User\Category;
use App\Models\User\Supplier;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
      $brands = Brand::all();
      $categories = Category::all();
      $suppliers = Supplier::all();
      return view('user.shop.product.product', compact('products','brands','categories','suppliers'));
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
        $this->validate($request,[
          'productCode'=>'required',
          'name'=>'required',
          'description'=>'required',
          'quantity'=>'required',
          'costPrice'=>'required',
          'sellPrice'=>'required'
        ]);

        // if($request->hasFile('image'))
        // {
        //   $imageName = $request->image->store('public');
        // }

        $product = new Product;
        $product->productCode = $request->productCode;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->categoryID = $request->categoryID;
        $product->supplierID = $request->supplierID;
        $product->brandID = $request->brandID;
        // $product->image = $request->image;
        $product->sizeUnitMeasure = $request->sizeUnitMeasure;
        $product->size = $request->size;
        $product->weightUnitMeasure = $request->weightUnitMeasure;
        $product->weight = $request->weight;
        $product->color = $request->color;
        $product->quantity = $request->quantity;
        $product->reorderLevel = $request->reorderLevel;
        $product->costPrice = $request->costPrice;
        $product->sellPrice = $request->sellPrice;
        $product->status = $request->status;
        $product->save();
        return response()->json($product);
        // return 'Product Added Successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $product = Product::find($product_id);
      // return response()->json($product);
      $product = Product::find($id);
      return response()->json($product);
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
        $this->validate($request,[
          'productCode'=>'required',
          'name'=>'required',
          'description'=>'required',
          'quantity'=>'required',
          'costPrice'=>'required',
          'sellPrice'=>'required'
        ]);

        // if($request->hasFile('image'))
        // {
        //   $imageName = $request->image->store('public');
        // }

        $product = Product::findOrFail($id);
        $product->productCode = $request->productCode;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->categoryID = $request->categoryID;
        $product->supplierID = $request->supplierID;
        $product->brandID = $request->brandID;
        // $product->image = $request->image;
        $product->sizeUnitMeasure = $request->sizeUnitMeasure;
        $product->size = $request->size;
        $product->weightUnitMeasure = $request->weightUnitMeasure;
        $product->weight = $request->weight;
        $product->color = $request->color;
        $product->quantity = $request->quantity;
        $product->reorderLevel = $request->reorderLevel;
        $product->costPrice = $request->costPrice;
        $product->sellPrice = $request->sellPrice;
        $product->status = $request->status;
        $product->update();
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = Product::findOrFail($id);
      $product->delete();
      return response()->json($product);
      // return 'Product Deleted Successfully';
    }
}
