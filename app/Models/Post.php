<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
    //
    public  function category(){
        $this->belongsTo('App\Models\Category');
    }

    public function user(){
        return $this->belongsTo('User');
    }
}
