<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_user','name', 'final'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
