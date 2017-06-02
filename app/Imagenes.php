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
}
