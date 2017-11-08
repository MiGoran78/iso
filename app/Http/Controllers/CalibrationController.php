<?php

namespace App\Http\Controllers;
use App\Calibration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CalibrationController extends Controller {

    public function index() {
        $datas = Calibration::all();
        return view('zapisi.kalibracija.index', compact('datas'));
    }


    public function create() {
        $datas = date("ymdhms");
        return view('zapisi.kalibracija.calibration_cert', compact('datas'));
    }


    public function store(Request $request) {
        $input = $request->all();
        $datas = new Calibration();
        $datas = $input;
        $datas['date'] = $input['date']=='' ? '' : date('Y-m-d', strtotime($input['date']));

echo dd($datas);
        Calibration::create($datas);
        Session::flash('message','Zapis je kreiran');
        return redirect('/kalibracija');
    }


//    public function show($id) {
//    }


    public function edit($id) {
        $datas = Calibration::findOrFail($id);
        return view('zapisi.kalibracija.calibration_cert', compact('datas'));
    }


    public function update(Request $request, $id) {
        $input = $request->all();
        $datas = Calibration::findOrFail($id);
        $datas['id'] = $id;
        $datas['idRef'] = $input['idRef'];

echo dd($input);
        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/kalibracija');
    }


    public function destroy($id) {
        $input = Calibration::findOrFail($id);
        $input->delete();

        Session::flash('message','Zapis je obrisan');
        return redirect('/kalibracija');
    }
}
