<?php

namespace App\Http\Controllers;
use App\UpravljanjeDok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UpravljanjeDokController extends Controller {

    public function index() {
        $datas = UpravljanjeDok::all();
        return view('zapisi.upravljanje_dok.admin.index');
    }


    public function create() {
        $logopath = '/pic/qg_logo_1.png';
        return view('zapisi.upravljanje_dok.admin.create', compact('logopath'));
    }


    public function store(Request $request) {
        $input = $request->all();
        $datas = new UpravljanjeDok();
        $datas = $input;
        $datas['potpis'] = '';

        UpravljanjeDok::create($datas);
        Session::flash('message','Zapis je kreiran');
        return redirect('/upravljanje_dok');
    }


    public function show($id) {
    }


    public function edit($id) {
        $datas = UpravljanjeDok::findOrFail($id);
        return view('zapisi.upravljanje_dok.admin.edit', compact('datas'));
    }


    public function update(Request $request, $id) {
        $input = $request->all();
        $datas = PreispitRuk::findOrFail($id);

        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];
        $datas[''] = $input[''];

echo dd($datas);
        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/preispit_rukov');
    }


    public function destroy($id) {
    }
}

//id
//idRef
//logo
//sifra
//verzija
//naziv
//naslov
//potpis
//sadrzaj
//uvod
//ref_dokumenta
//definicije
//opis
//izmene
//pracenje
//prilozi
