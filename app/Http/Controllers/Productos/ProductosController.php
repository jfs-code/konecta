<?php

namespace App\Http\Controllers\Productos;

use App\Models\Productos\Productos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $productos = Productos::all();        
        return view('Productos.index', compact('productos'));
    }

    public function crear(){
        return view('Productos.crear');
    }

    public function guardar(Request $request){       
        request()->validate([
            'nombre_producto' => 'required',
            'referencia' => 'required',
            'precio' => 'required',
            'peso' => 'required',
            'categoria' => 'required',
            'stock' => 'required'
        ]);        
        $producto = Productos::create([
            'nombre_producto' => $request->nombre_producto,
            'referencia' => $request->referencia,
            'precio' => $request->precio,
            'peso' => $request->peso,
            'categoria' => $request->categoria,
            'stock' => $request->stock,
            'estado' => '1',
            'fecha_creacion' => date("Y-m-d H:i:s"),
            'fecha_modificacion' => date("Y-m-d H:i:s"),
        ]);
        return redirect()->route('index.producto')->with('guardar', 'ok');
    }

    public function editar(Productos $producto){
        return view('Productos.editar', compact('producto'));
    }

    public function modificar(Request $request){
        request()->validate([
            'nombre_producto' => 'required',
            'referencia' => 'required',
            'precio' => 'required',
            'peso' => 'required',
            'categoria' => 'required',
            'stock' => 'required'
        ]);
        $id = $request->route('id');
        $nombre_producto = $request->input("nombre_producto");
        $referencia = $request->input("referencia");
        $precio = $request->input("precio");
        $peso = $request->input("peso");
        $categoria = $request->input("categoria");
        $stock = $request->input("stock");

        $producto = Productos::where("id", $id)->update([
            'nombre_producto' => $request->nombre_producto,
            'referencia' => $request->referencia,
            'precio' => $request->precio,
            'peso' => $request->peso,
            'categoria' => $request->categoria,
            'stock' => $request->stock,
            'fecha_modificacion' => date("Y-m-d H:i:s"),
        ]);
        $producto = Productos::find($id);
        return redirect()->route('index.producto')->with('actualizar', 'ok');
    }

    public function eliminar(Request $request){
        $id = $request->route('id');
        $producto = Productos::find($id);
        // $producto->roles()->detach();
        $producto->delete();
        return redirect()->route('index.producto')->with('eliminar', 'ok');
    }
}
