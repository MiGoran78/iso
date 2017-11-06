<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Reklamacija extends Model {
    public $fillable = ['id','idRef'];

    public function childs() {
        return $this->hasMany('App\Reklamacija',null,
            'id','idRef',
            'supplier','contact','email','subject','description','type','reference','quantity',
            'value','date','claimed_qty','att_1','att_2','att_3','date_sign','signature'
            );
    }

}



















