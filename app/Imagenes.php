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

		 public static $rules = [
        'file' => 'required|mimes:png,gif,jpeg,jpg,bmp'
    ];
    public static $messages = [
        'file.mimes' => 'Uploaded file is not in image format',
        'file.required' => 'Image is required'
    ];
		
    protected $fillable = [
        'id','name', 'status', 'id_user'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
