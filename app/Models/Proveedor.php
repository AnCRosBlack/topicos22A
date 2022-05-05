<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Proveedor extends Model
{
    public $table = "proveedores";
    public $timestamps = false;
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'ciudad',
        'estado',
        'pais',

    ];
}
