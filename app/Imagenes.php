<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
	protected $table = 'imagenes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'status', 'id_user'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }

    public function pedido(){
        return $this->belongsTo('App\PedidoImagen', 'id');
    }

    public function imagenEditada()
    {
        return $this->hasOne('App\ImagenEditada');
    }
}
