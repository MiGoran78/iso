<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Calibration extends Model {
    public $fillable = ['id', 'idRef',
                        'instr_1', 'model', 'manufacturer', 'cert_number', 'date', 'calib_cycle', 'recalib_due',
                        'location', 'id_descr', 'cal_date', 'due_date', 'accuracy', 'reference', 'instr_2',
                        'results', 'calib_by', 'test_condit'
    ];
}


//Instrument
//Model
//Manufacturer
//Certificate Number
//Date
//Calibration Cycle
//Recalibration Due
//Location
//ID Description
//Cal date
//Due date
//Accuracy
//Reference
//Instrument
//Results
//Calibrated by
//Test Conditions
