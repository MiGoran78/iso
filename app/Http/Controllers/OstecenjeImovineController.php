<?php

namespace App\Http\Controllers;
use App\OstecenjeImovine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class OstecenjeImovineController extends Controller {

    public function index() {
        $datas = OstecenjeImovine::all();
        return view('zapisi.ostec_imovine.admin.index', compact('datas'));
    }


    public function create() {
        return view('zapisi.ostec_imovine.admin.create');
    }


    public function store(Request $request) {
        $input = $request->all();
        $datas = new OstecenjeImovine;
        $datas = $input;

        $datas['datum_prijema'] = $input['datum_prijema']=='' ? '' : date('Y-m-d', strtotime($input['datum_prijema']));
        $datas['uzrok_datum'] = $input['uzrok_datum']=='' ? '' : date('Y-m-d', strtotime($input['uzrok_datum']));
        $datas['nacin_obav_datum'] = $input['nacin_obav_datum']=='' ? '' : date('Y-m-d', strtotime($input['nacin_obav_datum']));
        $datas['nacin_resavanja_datum'] = $input['nacin_resavanja_datum']=='' ? '' : date('Y-m-d', strtotime($input['nacin_resavanja_datum']));

        OstecenjeImovine::create($datas);
        Session::flash('message','Zapis je kreiran');
        return redirect('/ostecenje_imovine');
    }


    public function show($id) {
    }


    public function edit($id) {
        $datas = OstecenjeImovine::findOrFail($id);

        $datas['datum_prijema'] = $datas['datum_prijema']=='' ? '' : date('d.m.Y', strtotime($datas['datum_prijema']));
        $datas['uzrok_datum'] = $datas['uzrok_datum']=='' ? '' : date('d.m.Y', strtotime($datas['uzrok_datum']));
        $datas['nacin_obav_datum'] = $datas['nacin_obav_datum']=='' ? '' : date('d.m.Y', strtotime($datas['nacin_obav_datum']));
        $datas['nacin_resavanja_datum'] = $datas['nacin_resavanja_datum']=='' ? '' : date('d.m.Y', strtotime($datas['nacin_resavanja_datum']));

        return view('zapisi.ostec_imovine.admin.edit', compact('datas'));
    }


    public function update(Request $request, $id) {
        $input = $request->all();
        $datas = OstecenjeImovine::findOrFail($id);

        $datas['id'] = $id;
        $datas['idRef'] = $input['idRef'];
        $datas['narucilac'] = $input['narucilac'];
        $datas['primalac'] = $input['primalac'];
        $datas['datum_prijema'] = $input['datum_prijema'];
        $datas['naziv'] = $input['naziv'];
        $datas['rn'] = $input['rn'];
        $datas['stanje'] = $input['stanje'];
        $datas['uzrok'] = $input['uzrok'];
        $datas['uzrok_datum'] = $input['uzrok_datum'];
        $datas['nacin_obav'] = $input['nacin_obav'];
        $datas['nacin_obav_datum'] = $input['nacin_obav_datum'];
        $datas['nacin_resavanja'] = $input['nacin_resavanja'];
        $datas['nacin_resavanja_datum'] = $input['nacin_resavanja_datum'];

        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/ostecenje_imovine');
    }


    public function destroy($id) {
        $input = OstecenjeImovine::findOrFail($id);
        $input->delete();

        Session::flash('message','Zapis je obrisan');
        return redirect('/ostecenje_imovine');
    }

}
