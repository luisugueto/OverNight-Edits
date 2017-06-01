<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'price', 'description', 'created'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }

    public function pedido(){
        return $this->belongsTo('App\PedidoImagen', 'id');
    }
}
