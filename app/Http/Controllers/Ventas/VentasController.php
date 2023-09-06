<?php

namespace App\Http\Controllers\Ventas;

use App\Models\Ventas\Ventas;
use App\Http\Controllers\Controller;
use App\Models\Productos\Productos;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index(){
        // $ventas = Ventas::all(); 'ventas.fecha_creacion',
        $ventas = Ventas::join('productos', 'ventas.id_producto', '=', 'productos.id')
            ->select('ventas.id',
                     'ventas.cantidad',
                     'ventas.fecha_creacion',
                     'productos.nombre_producto as producto'
                     )->orderBy('ventas.id','desc')->get();
        return view('Ventas.index', compact('ventas'));
    }

    public function crear(){
        $productos = Productos::all();
        return view('Ventas.crear',compact('productos'));
    }

    public function guardar(Request $request){   
        request()->validate([
            'producto' => 'required',
            'cantidad' => 'required'
        ]);   
        
        $producto = Productos::find($request->producto);
        if($producto->stock < $request->cantidad){
            return redirect()->route('crear.venta')->with('error', 'No se pudo guardar, porque no hay la cantidad suficiente para la venta');
        }
        $stock = $producto->stock - $request->cantidad;
        Ventas::create([
            'id_producto' => $request->producto,
            'cantidad' => $request->cantidad,
            'estado' => '1',
            'fecha_creacion' => date("Y-m-d H:i:s"),
            'fecha_modificacion' => date("Y-m-d H:i:s"),
        ]);

        $producto = Productos::where("id", $producto->id)->update([            
            'stock' => $stock,
            'fecha_modificacion' => date("Y-m-d H:i:s"),
        ]);
        return redirect()->route('index.venta')->with('guardar', 'ok');               
    }
}
