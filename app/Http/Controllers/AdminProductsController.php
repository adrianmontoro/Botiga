<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id','ASC')->paginate(5);
        return view("products.index",["products"=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = null;
        $categories = Category::all();
        return view("products.create",["categories"=>$categories, "product"=>$product]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $r="images/noimg.png";
      if($request->file('imatge')!=null){
        //IMATGE
        $image = $request->file('imatge');
        $path = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $image->move($destinationPath, $path);
        $picture=(string)$request->root().'/images/'.''.$path;
        ///IMATGE
      }


        $product = new Product;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->properties=$request->properties;
        $product->picture=$picture;

        if($product->save()){
          $product->afegircate($product->id,$request->categoria);
            return redirect("/products");
        }else{

            return view("products.create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::where('id',$id)->first();
      return view('products.show')->with(['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categories = Category::all();
      $articles = Product::find($id);
      return view("products.edit",["categories"=>$categories,"product"=>$articles]);

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


      $product = Product::find($id);
      $product->name=$request->name;
      $product->description=$request->description;
      $product->properties=$request->properties;
      //IMATGE
      if($request->file('imatge')!=null){
        $image = $request->file('imatge');
        $path = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $image->move($destinationPath, $path);
        $r=(string)$request->root().'/images/'.''.$path;
        $product->imatge=$picture;
      }
      ///IMATGE

      if($product->save()){
        $product->afegircate($product->id,$request->categoria);
          return redirect("/products");
      }else{

          return view("products.edit");
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->deletartcate($id);
        Product::destroy($id);

        return redirect('/products');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
