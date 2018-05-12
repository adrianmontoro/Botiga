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

  public function create()
  {
      $category = null;
      return view("categories.create",["category"=>$category]);

  }


  public function show($id)
  {
    $slug = Category::where('id',$id)->first();
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
      $categoria->name=$request->name;
      $categoria->description=$request->description;

      if($categoria->save()){
          return redirect("/categories");
      }else{
          return view("categories.create");
      }
  }

  public function update(Request $request, $id)
  {


    $category = Category::find($id);
    $category->name=$request->name;
    $category->description=$request->description;

    if($category->save()){
        return redirect("/categories");
    }else{

        return view("categories.edit");
    }
  }

  public function destroy($id)
  {
      $category = Category::find($id);
      Category::destroy($id);

      return redirect('/categories');
  }

}
