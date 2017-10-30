<?php

namespace App\Http\Controllers;
use App\UpravljanjeDok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UpravljanjeDokController extends Controller {

    public function index() {
        $datas = UpravljanjeDok::all()->sortByDesc('verzija')->sortBy('sifra');
        return view('zapisi.upravljanje_dok.admin.index', compact('datas'));
    }


    public function create() {
        $logopath = '/pic/qg_logo_1.png';
        return view('zapisi.upravljanje_dok.admin.create', compact('logopath'));
    }


    public function store(Request $request) {
        $input = $request->all();
        $datas = new UpravljanjeDok();
        $datas = $input;

//        $datas['verzija'] = '1';
        $datas['naziv'] = '';

        UpravljanjeDok::create($datas);
        Session::flash('message','Zapis je kreiran');
        return redirect('/upravljanje_dok');
    }


    public function show($id) {
        $datas = UpravljanjeDok::findOrFail($id);
        return view('zapisi.upravljanje_dok.admin.print', compact('datas'));
    }


    public function edit($id) {
        $datas = UpravljanjeDok::findOrFail($id);
        return view('zapisi.upravljanje_dok.admin.edit', compact('datas'));
    }


    public function update(Request $request, $id) {
        $input = $request->all();
//        $datas = UpravljanjeDok::findOrFail($id);
        $datas = new UpravljanjeDok();
        $datas = $input;

        $datas['idRef'] = $input['idRef'];
        $datas['logo'] = $input['logo'];
        $datas['sifra'] = $input['sifra'];
        $datas['verzija'] = (int)$input['verzija'] + 1;
        $datas['naziv'] = '';
//        $datas['naziv'] = $input['naziv'];
        $datas['naslov'] = $input['naslov'];
        $datas['potpis'] = $input['potpis'];
        $datas['sadrzaj'] = $input['sadrzaj'];
        $datas['uvod'] = $input['uvod'];
        $datas['ref_dokumenta'] = $input['ref_dokumenta'];
        $datas['definicije'] = $input['definicije'];
        $datas['opis'] = $input['opis'];

        $izmena = $input['izmene'] . PHP_EOL . $input['sifra'] . '(' . $input['verzija'] . ') - ' . date("d.m.Y");
        $datas['izmene'] = $izmena;

        $datas['pracenje'] = $input['pracenje'];
        $datas['prilozi'] = $input['prilozi'];
        $datas['potpis'] = $input['potpis'];

        UpravljanjeDok::create($datas);
//        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/upravljanje_dok');
    }


    public function destroy($id) {
        $input = UpravljanjeDok::findOrFail($id);
        $input->delete();

        Session::flash('message','Zapis je obrisan');
        return redirect('/upravljanje_dok');
    }
}

