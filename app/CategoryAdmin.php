<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class CategoryAdmin extends Model
{
    public $fillable = ['title','parent_id','path','level'];

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function childs() {
        return $this->hasMany('App\Category','parent_id','id', 'path', 'title', 'level');
    }
}
