<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public $fillable = ['title','parent_id','path','level','sifra'];

    public function childs() {
        return $this->hasMany('App\Category','parent_id','id', 'path', 'title', 'level', 'sifra') ;
    }
}

