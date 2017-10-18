<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class UsklSaZakonima extends Model {
    public $fillable = ['standard', 'naziv', 'preispitivano', 'datum', 'popunio'];

}
