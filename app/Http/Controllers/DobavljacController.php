<?php

namespace App\Http\Controllers;
use App\Dobavljac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class DobavljacController extends Controller
{
    public function lista() {
        return view('zapisi.dobavljaci.lista');
    }


    public function index() {
        $datas = Dobavljac::all();
//        echo dd($datas);
        return view('zapisi.dobavljaci.lista', compact('datas'));
    }


    public function create() {
        $idRef = date("ymdhms");
        return view('zapisi.dobavljaci.id_list.create', compact('idRef'));
    }


    public function store(Request $request) {
        $input = $request->all();
        Dobavljac::create($input);
        Session::flash('message','Zapis je kreiran');
        return redirect('/dobavljaci');
    }


    public function show($id) {
    }


    public function edit($id) {
        $datas = Dobavljac::findOrFail($id);
        return view('zapisi.dobavljaci.id_list.edit', compact('datas'));
    }


    public function update(Request $request, $id) {
        $input = $request->all();
        $datas = Dobavljac::findOrFail($id);

        $datas['id'] = $id;
        $datas['idRef'] = $input['idRef'];
        $datas['dobavljac_tip'] = $input['dobavljac_tip'];
        $datas['dobavljac'] = $input['dobavljac'];
        $datas['ulica'] = $input['ulica'];
        $datas['mesto'] = $input['mesto'];
        $datas['zemlja'] = $input['zemlja'];
        $datas['kontakt1'] = $input['kontakt1'];
        $datas['kontakt2'] = $input['kontakt2'];
        $datas['telefon1'] = $input['telefon1'];
        $datas['telefon2'] = $input['telefon2'];
        if (!empty($input['sert_1'])) {$datas['sert_1']=$input['sert_1'];} else {$datas['sert_1']='';}
        if (!empty($input['sert_2'])) {$datas['sert_2']=$input['sert_2'];} else {$datas['sert_2']='';}
        if (!empty($input['sert_3'])) {$datas['sert_3']=$input['sert_3'];} else {$datas['sert_3']='';}
        if (!empty($input['sert_4'])) {$datas['sert_4']=$input['sert_4'];} else {$datas['sert_4']='';}
        if (!empty($input['sert_5'])) {$datas['sert_5']=$input['sert_5'];} else {$datas['sert_5']='';}
        $datas['sert_6'] = $input['sert_6'];
        $datas['sert_7'] = $input['sert_7'];
        $datas['sert_8'] = $input['sert_8'];
        $datas['sert_br_1'] = $input['sert_br_1'];
        $datas['sert_br_2'] = $input['sert_br_2'];
        $datas['sert_br_3'] = $input['sert_br_3'];
        $datas['sert_br_4'] = $input['sert_br_4'];
        $datas['sert_br_5'] = $input['sert_br_5'];
        $datas['sert_br_6'] = $input['sert_br_6'];
        $datas['sert_br_7'] = $input['sert_br_7'];
        $datas['sert_br_8'] = $input['sert_br_8'];
        $datas['sert_rok_1'] = $input['sert_rok_1'];
        $datas['sert_rok_2'] = $input['sert_rok_2'];
        $datas['sert_rok_3'] = $input['sert_rok_3'];
        $datas['sert_rok_4'] = $input['sert_rok_4'];
        $datas['sert_rok_5'] = $input['sert_rok_5'];
        $datas['sert_rok_6'] = $input['sert_rok_6'];
        $datas['sert_rok_7'] = $input['sert_rok_7'];
        $datas['sert_rok_8'] = $input['sert_rok_8'];

        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/dobavljaci');
    }


    public function destroy($id) {
        $input = Dobavljac::findOrFail($id);
        $input->delete();
        Session::flash('message','Zapis je obrisan');
        return redirect('/dobavljaci');
    }




    public function reklamacija(Request $request) {
        return view('zapisi.dobavljaci.reklamacija');
    }

    public function reklamacija_upd(Request $request) {
        return view('zapisi.dobavljaci.reklamacija');
    }



    public function ocena(Request $request) {
        return view('zapisi.dobavljaci.ocena');
    }

    public function ocena_upd(Request $request) {
        return view('zapisi.dobavljaci.ocena');
    }

}
