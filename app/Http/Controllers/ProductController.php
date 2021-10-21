<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
      return Product::create([
          "name" => "Papa",
          "status" => "Activo"
      ]);
    }
    
    public function read() 
    {
      return Product::all();
    }
    public function find($id)
    {
      return Product::find($id);
    }
    
    public function update(Request $request)
    {
      $product = Product::find($request->id);
      $product->name = $request->name;
      $product->save();
      return $product;
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return "El Producto Fue Eliminado";
    }
  }

