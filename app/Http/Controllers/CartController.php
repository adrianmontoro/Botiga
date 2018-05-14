<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*$product = Product::where('id',$id)->first();
        Cart::add($product->id,$product->name,1,$product->price);
        return view('cart.index')->with(['product','$product']);
      */

      $content = Cart::content();
      //dd($content);
      return view('cart.index')->with(['content' => $content]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
      $request = Product::find($id);
      Cart::add($request->id,$request->name,1,$request->price);
      return redirect()-> route('shop',['product','$product']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
      $rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
      $request = Product::find($id);

      Cart::update($rowId, 2);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $rowid
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
      Cart::remove($rowId);
      return redirect()->route('cart_index');
    }


    public function store(Request $request, $rowid)
    {
        $qty = $request->only(['qty']);
        Cart::update($rowid, $qty['qty']);

        return redirect()->route('cart_index');
    }
}
