<?php

namespace App\Models\Ventas;

use App\Models\Productos\Productos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "ventas";
    protected $fillable = [
        'id_producto',
        'cantidad',
        'estado',
        'fecha_creacion',
        'fecha_modificacion',
    ];

    public function producto(){
        return $this->belongsTo(Productos::class);
    }
}
