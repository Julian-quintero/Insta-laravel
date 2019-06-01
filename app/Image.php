<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 // uso modelo imagen
 
class Image extends Model
{
    protected $table = 'images';
    
     public function user() {
        return $this->belongsTo('App\User','user_id');
    }
}
