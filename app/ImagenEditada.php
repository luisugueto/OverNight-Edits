<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenEditada extends Model
{
    protected $table = 'imagen_editadas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'id_imagen', 'id_user'
    ];

    public function imagen()
    {
        return $this->belongsTo('App\Imagenes', 'id_imagen');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
