<?php

namespace App\Http\Controllers;
use App\Dobavljac;
use App\Ocena;
use App\Reklamacija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class DobavljacController extends Controller
{
    public function lista() {
        return view('zapisi.dobavljaci.lista');
    }


    public function index() {
        $ocena = Ocena::all();
        $datas = Dobavljac::all();
        $ocene = Ocena::pluck('ocena')->all();
        $naziv = Ocena::pluck('naziv')->all();
        $prihatljiv = Ocena::pluck('prihatljiv')->all();
//        $reklamacija = Reklamacija::pluck('idRef')->all();
        $reklamacija = Reklamacija::get();
        return view('zapisi.dobavljaci.lista', compact('datas', 'naziv', 'ocena', 'ocene', 'prihatljiv', 'reklamacija'));
    }


    public function create() {
        $idRef = date("ymdhms");
        return view('zapisi.dobavljaci.id_list.create', compact('idRef'));
    }


    public function store(Request $request) {
        $input = $request->all();
        $input['dobavljac'] = empty($input['dobavljac']) ? '----' : $input['dobavljac'];
        Dobavljac::create($input);
        Session::flash('message','Zapis je kreiran');

        $input['sert_rok_1'] = $input['sert_rok_1']=='' ? '' : date('Y-m-d', strtotime($input['sert_rok_1']));
        $input['sert_rok_2'] = $input['sert_rok_2']=='' ? '' : date('Y-m-d', strtotime($input['sert_rok_2']));
        $input['sert_rok_3'] = $input['sert_rok_3']=='' ? '' : date('Y-m-d', strtotime($input['sert_rok_3']));
        $input['sert_rok_4'] = $input['sert_rok_4']=='' ? '' : date('Y-m-d', strtotime($input['sert_rok_4']));
        $input['sert_rok_5'] = $input['sert_rok_5']=='' ? '' : date('Y-m-d', strtotime($input['sert_rok_5']));
        $input['sert_rok_6'] = $input['sert_rok_6']=='' ? '' : date('Y-m-d', strtotime($input['sert_rok_6']));
        $input['sert_rok_7'] = $input['sert_rok_7']=='' ? '' : date('Y-m-d', strtotime($input['sert_rok_7']));
        $input['sert_rok_8'] = $input['sert_rok_8']=='' ? '' : date('Y-m-d', strtotime($input['sert_rok_8']));

        $datas = new Ocena;
        $datas['idRef'] = $input['idRef'];
        $datas->save();
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

        $datas['sert_rok_1'] = $input['sert_rok_1']=='' ? '' : date('d-m-Y', strtotime($input['sert_rok_1']));
        $datas['sert_rok_2'] = $input['sert_rok_2']=='' ? '' : date('d-m-Y', strtotime($input['sert_rok_2']));
        $datas['sert_rok_3'] = $input['sert_rok_3']=='' ? '' : date('d-m-Y', strtotime($input['sert_rok_3']));
        $datas['sert_rok_4'] = $input['sert_rok_4']=='' ? '' : date('d-m-Y', strtotime($input['sert_rok_4']));
        $datas['sert_rok_5'] = $input['sert_rok_5']=='' ? '' : date('d-m-Y', strtotime($input['sert_rok_5']));
        $datas['sert_rok_6'] = $input['sert_rok_6']=='' ? '' : date('d-m-Y', strtotime($input['sert_rok_6']));
        $datas['sert_rok_7'] = $input['sert_rok_7']=='' ? '' : date('d-m-Y', strtotime($input['sert_rok_7']));
        $datas['sert_rok_8'] = $input['sert_rok_8']=='' ? '' : date('d-m-Y', strtotime($input['sert_rok_8']));

        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/dobavljaci');
    }


    public function destroy($id) {
        //delete record DOBAVLJAC
        $input = Dobavljac::findOrFail($id);
        $idRef = $input['idRef'];
        $input->delete();

        //delete record OCENA
        $ocena = Ocena::where('idRef','=', $idRef)->get();
        $ocena[0]->delete();

        Session::flash('message','Zapis je obrisan');
        return redirect('/dobavljaci');
    }




    public function ocena(Request $request) {
        $datas = Ocena::where('idRef','=', $request['idRef'])->get();

        if (count($datas)) {
            $datas = $datas[0];
        } else {
            $datas = new Ocena;
            $datas['id'] = $id = $request['id'];
            $datas['idRef'] = $request['idRef'];
        }
        return view('zapisi.dobavljaci.ocena', compact('datas'));
    }

    public function ocena_upd(Request $request) {
        $input = $request->all();
        $datas = Ocena::where('idRef','=', $request['idRef'])->get();

        if (count($datas)) {
            $datas = $datas[0];
        } else {
            $datas = new Ocena();
            $datas['id'] = $request['id'];
            $datas['idRef'] = $request['idRef'];
        }

        $datas['datum'] = empty($input['datum']) ? '' : $input['datum'];
        $datas['rok_vazenja'] = empty($input['rok_vazenja']) ? '' : $input['rok_vazenja'];
        $datas['naziv'] = empty($input['naziv']) ? '' : $input['naziv'];
        $datas['opis'] = empty($input['opis']) ? '' : $input['opis'];
        $datas['status'] = empty($input['status']) ? '' : $input['status'];
        $datas['q'] = empty($input['q']) ? '' : $input['q'];
        $datas['e'] = empty($input['e']) ? '' : $input['e'];
        $datas['r'] = empty($input['r']) ? '' : $input['r'];
        $datas['f'] = empty($input['f']) ? '' : $input['f'];
        $datas['d'] = empty($input['d']) ? '' : $input['d'];
        $datas['o'] = empty($input['o']) ? '' : $input['o'];

        try {
            $ocena = $input['q'] + $input['e'] + $input['r'] + $input['f'] + $input['d'] + $input['o'];
            if ($ocena >= 0  && $ocena <= 13) { $prihvatljiv = 'neprihvatljiv'; }
            if ($ocena >= 14 && $ocena <= 21) { $prihvatljiv = 'privremeno prihvatljiv'; }
            if ($ocena >= 22 && $ocena <= 34) { $prihvatljiv = 'prihvatljiv'; }
        } catch (\Exception $e) {
            $ocena = '';
            $prihvatljiv = '';
        }

        $datas['ocena'] = $ocena;
        $datas['prihatljiv'] = $prihvatljiv;

        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/dobavljaci');
    }




    public function reklamacija(Request $request) {
        $datas = Reklamacija::where('idRef','=', $request['idRef'])->get();

        if (count($datas)) {
            $datas = $datas[0];
        } else {
            $datas = new Reklamacija();
            $datas['id'] = $id = $request['id'];
            $datas['idRef'] = $request['idRef'];
            $datas['reference'] = $request['idRef'];
        }
        return view('zapisi.dobavljaci.reklamacija', compact('datas'));
    }

    public function reklamacija_upd(Request $request) {
        $input = $request->all();
        $datas = Reklamacija::where('idRef','=', $request['idRef'])->get();

        if (count($datas)) {
            $datas = $datas[0];
        } else {
            $datas = new Reklamacija;
            $datas['idRef'] = $request['idRef'];
            $datas['reference'] = $request['reference'];
        }

        $datas['idRef'] = $input['idRef'];
        $datas['supplier'] = $input['supplier'];
        $datas['contact'] = $input['contact'];
        $datas['email'] = $input['email'];
        $datas['subject'] = $input['subject'];
        $datas['description'] = $input['description'];
        $datas['type'] = $input['type'];
        $datas['reference'] = $input['reference'];
        $datas['quantity'] = $input['quantity'];
        $datas['value'] = $input['value'];
        $datas['claimed_qty'] = $input['claimed_qty'];
        $datas['att_1'] = empty($input['att_1']) ? '0' : '1';
        $datas['att_2'] = empty($input['att_2']) ? '0' : '1';
        $datas['att_3'] = empty($input['att_3']) ? '0' : '1';
        $datas['signature'] = $input['signature'];
        $datas['date'] = empty($input['date']) ? '' : date('Y-m-d', strtotime($input['date']));
        $datas['date_sign'] = empty($input['date_sign']) ? '' : date('Y-m-d', strtotime($input['date_sign']));

        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/dobavljaci');
    }




    public function print_lista() {
        // STAMPANJE LISTE
        $ocena = Ocena::all();
        $datas = Dobavljac::all();
        $ocene = Ocena::pluck('ocena')->all();
        $naziv = Ocena::pluck('naziv')->all();
        $prihatljiv = Ocena::pluck('prihatljiv')->all();
        $reklamacija = Reklamacija::get();
        return view('zapisi.dobavljaci.print_lista', compact('datas', 'naziv', 'ocena', 'ocene', 'prihatljiv', 'reklamacija'));
    }

}
