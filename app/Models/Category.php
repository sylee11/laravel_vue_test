<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Category extends Model
{
    //
    protected $fillable = [
      'title'
    ];

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }




}
