<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Producto extends Model
{
     use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    

    public $timestamps = false;
    protected $fillable = [
        'id_proveedor',
        'nombre',
        'descripcion',
        'precio',
        'existencia',
    ];

    public function proveedor()
    {
        return $this->hasMany('App\Models\Proveedor', 'id_proveedor','id');
    }

}
