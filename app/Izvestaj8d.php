<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Izvestaj8d extends Model {
    public $fillable = [
        'id','idRef','Concern_title','Quantity_claimed','Supplier','Order_no','Claim_number','Nonconformity','Names','Departments','Contacts',
        'D2','D3','D4','D5','D6','D7','D8','Finish_d3','Finish_d4','Finish_d5','Finish_d6','Finish_d7','Finish_d8','Close_date','Reported_by'
    ];

    public function childs() {
        return $this->hasMany('App\Izvestaj8d',null, 'id','idRef','Concern_title','Quantity_claimed','Supplier','Order_no',
            'Claim_number','Nonconformity','Names','Departments','Contacts','D2','D3','D4','D5','D6','D7','D8',
            'Finish_d3','Finish_d4','Finish_d5','Finish_d6','Finish_d7','Finish_d8','Close_date','Reported_by'
            );
    }

}
