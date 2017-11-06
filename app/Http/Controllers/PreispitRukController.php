<?php

namespace App\Http\Controllers;
use App\PreispitRuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PreispitRukController extends Controller {

    public function index() {
        $datas = PreispitRuk::all();
        return view('zapisi.preispit_rukov.admin.index', compact('datas'));
    }


    public function create() {
        return view('zapisi.preispit_rukov.admin.create');
    }


    public function store(Request $request) {
        $input = $request->all();
        $datas = new PreispitRuk();
        $datas = $input;
        $datas['datum'] = $input['datum']=='' ? '' : date('Y-m-d', strtotime($input['datum']));
        $datas['odobrio_datum'] = $input['odobrio_datum']=='' ? '' : date('Y-m-d', strtotime($input['odobrio_datum']));
        PreispitRuk::create($datas);
        Session::flash('message','Zapis je kreiran');
        return redirect('/preispit_rukov');
    }


    public function show($id) {
    }


    public function edit($id) {
        $datas = PreispitRuk::findOrFail($id);
        $datas['datum'] = $datas['datum']=='' ? '' : date('d.m.Y', strtotime($datas['datum']));
        $datas['odobrio_datum'] = $datas['odobrio_datum']=='' ? '' : date('d.m.Y', strtotime($datas['odobrio_datum']));
        return view('zapisi.preispit_rukov.admin.edit', compact('datas'));
    }


    public function update(Request $request, $id) {
        $input = $request->all();
        $datas = PreispitRuk::findOrFail($id);

        $datas['datum'] = $input['datum']=='' ? '' : date('Y-m-d', strtotime($input['datum']));
        $datas['clan_1'] = $input['clan_1'];
        $datas['clan_2'] = $input['clan_2'];
        $datas['clan_3'] = $input['clan_3'];
        $datas['clan_4'] = $input['clan_4'];
        $datas['clan_5'] = $input['clan_5'];
        $datas['funkcija_1'] = $input['funkcija_1'];
        $datas['funkcija_2'] = $input['funkcija_2'];
        $datas['funkcija_3'] = $input['funkcija_3'];
        $datas['funkcija_4'] = $input['funkcija_4'];
        $datas['funkcija_5'] = $input['funkcija_5'];
        $datas['karakter'] = $datas['karakter']==null ? '0' : $datas['karakter'];

        $datas['ul_1'] = $input['ul_1'];
        $datas['ul_2'] = $input['ul_2'];
        $datas['ul_2_1'] = $input['ul_2_1'];
        $datas['ul_2_2'] = $input['ul_2_2'];
        $datas['ul_3_1'] = $input['ul_3_1'];
        $datas['ul_3_2'] = $input['ul_3_2'];
        $datas['ul_3_3'] = $input['ul_3_3'];
        $datas['ul_3_4'] = $input['ul_3_4'];
        $datas['ul_3_5'] = $input['ul_3_5'];
        $datas['ul_3_6'] = $input['ul_3_6'];
        $datas['ul_3_7'] = $input['ul_3_7'];
        $datas['ul_3_8'] = $input['ul_3_8'];
        $datas['ul_3_9'] = $input['ul_3_9'];
        $datas['ul_4'] = $input['ul_4'];
        $datas['ul_5'] = $input['ul_5'];
        $datas['ul_6'] = $input['ul_6'];
        $datas['ul_7'] = $input['ul_7'];
        $datas['ul_8'] = $input['ul_8'];
        $datas['ul_9'] = $input['ul_9'];
        $datas['ul_10'] = $input['ul_10'];
        $datas['iz_1'] = $input['iz_1'];
        $datas['iz_2'] = $input['iz_2'];
        $datas['iz_3'] = $input['iz_3'];
        $datas['iz_4'] = $input['iz_4'];
        $datas['iz_5'] = $input['iz_5'];

//        $datas['politika'] = $input['politika'];
//        $datas['ciljevi'] = $input['ciljevi'];
//        $datas['rezultat'] = $input['rezultat'];
//        $datas['informacije'] = $input['informacije'];
//        $datas['efektivnost'] = $input['efektivnost'];
//        $datas['status'] = $input['status'];
//        $datas['vrednovanje'] = $input['vrednovanje'];
//        $datas['reakcija'] = $input['reakcija'];
//        $datas['ucinak'] = $input['ucinak'];
//        $datas['mere'] = $input['mere'];
//        $datas['izmene'] = $input['izmene'];
//        $datas['preporuke'] = $input['preporuke'];
//        $datas['ostalo'] = $input['ostalo'];
//        $datas['rez_efikas'] = $input['rez_efikas'];
//        $datas['rez_zahte'] = $input['rez_zahte'];
//        $datas['rez_potreba'] = $input['rez_potreba'];
//        $datas['rez_ciljevi'] = $input['rez_ciljevi'];

        $datas['ciljevi_izvestaj'] = $input['ciljevi_izvestaj'];
        $datas['odobrio_ime'] = $input['odobrio_ime'];
        $datas['odobrio_datum'] = $input['odobrio_datum']=='' ? '' : date('Y-m-d', strtotime($input['odobrio_datum']));

//echo dd($datas);
        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/preispit_rukov');
    }


    public function destroy($id) {
        $input = PreispitRuk::findOrFail($id);
        $input->delete();

        Session::flash('message','Zapis je obrisan');
        return redirect('/preispit_rukov');
    }
}
