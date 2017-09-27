<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class KorektivnaMera extends Model {
    public $fillable = ['id', 'idRef', 'date_open', 'date_deadline', 'date_close', 'kor_mera', 'vlasnik', 'preispitivano', 'client_id'];

    public function childs() {
        return $this->hasMany('App\KorektivnaMera',null,'id', 'idRef', 'date_open', 'date_deadline', 'date_close', 'kor_mera', 'vlasnik', 'preispitivano');
    }
}
