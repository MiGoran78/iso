<?php

namespace App\Http\Controllers;
use App\Izvestaj8d;
use App\Neusag;
use App\KorektivnaMera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class NeusagController extends Controller {

    public function index() {
        $datas = Neusag::all();
        $kms = KorektivnaMera::all();
        $izv8d = Izvestaj8d::all();
        return view('zapisi.neusag_proizod.admin.index', compact('datas', 'kms', 'izv8d'));
    }


    public function create() {
        $datum = date("Y-m-d");
        $ref = date("ymdhms");
        return view('zapisi.neusag_proizod.admin.create', compact('','datum','ref'));
    }


    public function store(Request $request) {
        $input = $request->all();
        Neusag::create($input);
        Session::flash('message','Zapis je kreiran');
        return redirect('/neusaglasenost');
    }


    public function show($id) {
    }


    public function edit($id) {
        $datas = Neusag::findOrFail($id);
        return view('zapisi.neusag_proizod.admin.edit', compact('datas'));
    }


    public function update(Request $request, $id) {
        $input = $request->all();
        $datas = Neusag::findOrFail($id);

        $datas['id'] = $id;
        $datas['datum'] = $input['datum'];
        $datas['idRef'] = $input['idRef'];
        $datas['kupac_poreklo'] = empty($input['kupac_poreklo']) ? '' : $input['kupac_poreklo'];
        $datas['provera_poreklo'] = empty($input['provera_poreklo']) ? '' : $input['provera_poreklo'];
        $datas['proces_poreklo'] = empty($input['proces_poreklo']) ? '' : $input['proces_poreklo'];
        $datas['neusag_std1'] = empty($input['neusag_std1']) ? '' : $input['neusag_std1'];
        $datas['neusag_std2'] = empty($input['neusag_std2']) ? '' : $input['neusag_std2'];
        $datas['neusag_std3'] = empty($input['neusag_std3']) ? '' : $input['neusag_std3'];
        $datas['neusag_std4'] = empty($input['neusag_std4']) ? '' : $input['neusag_std4'];
        $datas['opis'] = empty($input['opis']) ? '' : $input['opis'];
        $datas['uzrok'] = empty($input['uzrok']) ? '' : $input['uzrok'];

        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/neusaglasenost');
    }


    public function destroy($id) {
        $doc = Neusag::findOrFail($id);

        $doc->delete();
        Session::flash('message','Zapis je obrisan');
        return redirect('/neusaglasenost');
    }
}
