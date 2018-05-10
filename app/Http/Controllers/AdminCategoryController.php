<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdminCategoryController extends Controller
{
  public function index()
  {
        $categories = Category::get();
        return view('categories.index')->with(['categories' => $categories]);
  }

  public function show($name)
  {
    $slug = Category::where('name',$name)->get();
    return view('categories.show')->with(['category' => $slug]);
  }

  public function edit($id)
  {
    $categories = Category::all();
    $categoria = Category::find($id);
    return view("categories.edit",["category"=>$categoria]);
  }

  public function store(Request $request)
  {
      $categoria = new Category;
      $categoria->nom=$request->nom;
      $categoria->description=$request->description;

      if($categoria->save()){
          return redirect("/categories");
      }else{
          return view("categories.create");
      }
  }

}
