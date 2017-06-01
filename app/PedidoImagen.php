<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoImagen extends Model
{
    protected $table = 'pedido_imagens';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pedido', 'id_imagen'
    ];
}
