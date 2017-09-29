<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Ocena extends Model {
    public $fillable = ['id','idRef','proizvod','datum','rok_vazenja','opis','status','prihatljiv','ocena','q','e','r','f','d','o'];

    public function childs() {
        return $this->hasMany('App\Ocena',null,
            'id','idRef','proizvod','datum','rok_vazenja','opis','status','prihatljiv','ocena','q','e','r','f','d','o') ;
    }

}
