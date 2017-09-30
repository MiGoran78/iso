<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Reklamacija extends Model {
    public $fillable = ['id','idRef'];

    public function childs() {
        return $this->hasMany('App\Reklamacija',null,
            'id','idRef') ;
    }

}
