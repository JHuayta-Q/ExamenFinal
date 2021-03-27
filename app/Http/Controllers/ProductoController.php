<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductoController extends Controller
{
    public function index(){
        $Producto = Producto::all();
        //dd($student);
        return view('index')->with('Producto', $Producto); 
    }

    public function form(){
        return view('create');
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'price'=>'required',
            'stok'=>'required',
        ]);
        $newProducto = new Producto(); 
        $newProducto->name = $request->name;
        $newProducto->price = $request->price;
        $newProducto->stok = $request->stok;
        $newProducto->save();

        return redirect()->route('producto.index')->with('mensaje', 'Estudiante Agregado Correctamente');
    }
}
