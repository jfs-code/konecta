<?php

namespace App\Models\Productos;

use App\Models\Ventas\Ventas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "productos";
    protected $fillable = [
        'nombre_producto',
        'referencia',
        'precio',
        'peso',
        'categoria',
        'stock',
        'estado',
        'fecha_creacion',
        'fecha_modificacion',
    ];

    public function ventas(){
        return $this->hasMany(Ventas::class);
    }
}
