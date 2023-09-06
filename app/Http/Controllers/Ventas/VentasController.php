<?php

namespace App\Http\Controllers\Ventas;

use App\Models\Ventas\Ventas;
use App\Http\Controllers\Controller;
use App\Models\Productos\Productos;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index(){
        $ventas = Ventas::all();        
        return view('Ventas.index', compact('ventas'));
    }

    public function crear(){
        $productos = Productos::all();
        return view('Ventas.crear',compact('productos'));
    }

    public function guardar(Request $request){        
        request()->validate([
            'nombre_producto' => 'required',
            'cantidad' => 'required'
        ]);   
        
        $producto = Productos::find($request->id);
        
        $venta = Ventas::create([
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

    public function eliminar(){

    }

    public function consultar(){

    }
}
