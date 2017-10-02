<?php

namespace App\Http\Controllers;
use App\KorektivnaMera;
use App\Neusag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Izvestaj8d;


class KorMeraController extends Controller
{
    public function index() {
        $datas = KorektivnaMera::all();
        return view('zapisi.korektivna_mera.admin.index', compact('datas'));
    }


//    public function create() {
//        $datum = date("Y-m-d");
//        $ref = date("ymdhms");
//        return view('zapisi.korektivna_mera.admin.create', compact('','datum','ref'));
//    }

    public function newKM(Request $request) {
        $id = $request['id'];
        $datum = date("Y-m-d");
        $ref = $request['idRef'];
//        $ref = date("ymdhms");
        return view('zapisi.korektivna_mera.admin.create', compact('','datum', 'ref', 'id'));
    }


    public function store(Request $request) {
        $input = $request->all();

        $input['date_open'] = $input['date_open']=='' ? '' : date('Y-m-d', strtotime($input['date_open']));
        $input['date_close'] = $input['date_close']=='' ? '' : date('Y-m-d', strtotime($input['date_close']));
        $input['date_deadline'] = $input['date_deadline']=='' ? '' : date('Y-m-d', strtotime($input['date_deadline']));
//        echo dd($input);

        KorektivnaMera::create($input);
        Session::flash('message','Zapis je kreiran');
        return redirect('/zapisi');
    }


    public function show(Request $request) {
        $input = $request->all();
        $id = $input['id'];
        $idRef = $input['idRef'];
        $datas = KorektivnaMera::where('idRef', '=',$idRef)->get();
        return view('zapisi.korektivna_mera.admin.index', compact('datas', 'id', 'idRef'));
    }


    public function edit($id) {
        $datas = KorektivnaMera::findOrFail($id);

        $datas['date_close'] = $datas['date_close']=='' ? '' : date('d.m.Y', strtotime($datas['date_close']));
        $datas['date_deadline'] = $datas['date_deadline']=='' ? '' : date('d.m.Y', strtotime($datas['date_deadline']));
        return view('zapisi.korektivna_mera.admin.edit', compact('datas'));
    }


    public function update(Request $request, $id) {
        $input = $request->all();
        $datas = KorektivnaMera::findOrFail($id);

        $datas['id'] = $id;
        $datas['idRef'] = $input['idRef'];
        $datas['date_open'] = $input['date_open']=='' ? '' : date('Y-m-d', strtotime($input['date_open']));
        $datas['date_close'] = $input['date_close']=='' ? '' : date('Y-m-d', strtotime($input['date_close']));
        $datas['date_deadline'] = $input['date_deadline']=='' ? '' : date('Y-m-d', strtotime($input['date_deadline']));
        $datas['kor_mera'] = empty($input['kor_mera']) ? '' : $input['kor_mera'];
        $datas['vlasnik'] = empty($input['vlasnik']) ? '' : $input['vlasnik'];
        $datas['preispitivano'] = empty($input['preispitivano']) ? '' : $input['preispitivano'];

        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/zapisi');
    }


    public function destroy($id) {
        $doc = KorektivnaMera::findOrFail($id);

        $doc->delete();
        Session::flash('message','Zapis je obrisan');
        return redirect('/zapisi');
    }


    public function izvestaj_8D(Request $request) {
        $datas = Izvestaj8d::where('idRef','=', $request['idRef'])->get();

        if (count($datas)) {
            $datas = $datas[0];
        } else {
            $datas = new Izvestaj8d;
            $datas['id'] = $id = $request['id'];
            $datas['Nonconformity'] = $request['idRef'];
        }

        return view('zapisi.korektivna_mera.admin.izvestaj_8D', compact('datas'));
    }


    public function izvestaj_8D_update(Request $request) {
        $input = $request->all();
        $datas = Izvestaj8d::where('idRef','=', $request['idRef'])->get();

        if (count($datas)) {
            $datas = $datas[0];
        } else {
            $id = $request['id'];
            $idRef = $request['idRef'];
            $datas = new Izvestaj8d;
            $datas['idRef'] = $request['idRef'];
            $datas['Nonconformity'] = $idRef;
        }

//        $datas['id'] = $id;
        $datas['idRef'] = $input['idRef'];
        $datas['Concern_title'] = empty($input['Concern_title']) ? '' : $input['Concern_title'];
        $datas['Quantity_claimed'] = empty($input['Quantity_claimed']) ? '' : $input['Quantity_claimed'];
        $datas['Supplier'] = empty($input['Supplier']) ? '' : $input['Supplier'];
        $datas['Order_no'] = empty($input['Order_no']) ? '' : $input['Order_no'];
        $datas['Claim_number'] = empty($input['Claim_number']) ? '' : $input['Claim_number'];
        $datas['Nonconformity'] = empty($input['Nonconformity']) ? '' : $input['Nonconformity'];
        $datas['Names'] = empty($input['Names']) ? '' : $input['Names'];
        $datas['Departments'] = empty($input['Departments']) ? '' : $input['Departments'];
        $datas['Contacts'] = empty($input['Contacts']) ? '' : $input['Contacts'];
        $datas['D2'] = empty($input['D2']) ? '' : $input['D2'];
        $datas['D3'] = empty($input['D3']) ? '' : $input['D3'];
        $datas['D4'] = empty($input['D4']) ? '' : $input['D4'];
        $datas['D5'] = empty($input['D5']) ? '' : $input['D5'];
        $datas['D6'] = empty($input['D6']) ? '' : $input['D6'];
        $datas['D7'] = empty($input['D7']) ? '' : $input['D7'];
        $datas['D8'] = empty($input['D8']) ? '' : $input['D8'];
        $datas['Finish_d3'] = empty($input['Finish_d3']) ? '' : date('Y-m-d', strtotime($input['Finish_d3']));
        $datas['Finish_d4'] = empty($input['Finish_d4']) ? '' : date('Y-m-d', strtotime($input['Finish_d4']));
        $datas['Finish_d5'] = empty($input['Finish_d5']) ? '' : date('Y-m-d', strtotime($input['Finish_d5']));
        $datas['Finish_d6'] = empty($input['Finish_d6']) ? '' : date('Y-m-d', strtotime($input['Finish_d6']));
        $datas['Finish_d7'] = empty($input['Finish_d7']) ? '' : date('Y-m-d', strtotime($input['Finish_d7']));
        $datas['Finish_d8'] = empty($input['Finish_d8']) ? '' : date('Y-m-d', strtotime($input['Finish_d8']));
        $datas['Close_date'] = empty($input['Close_date']) ? '' : date('Y-m-d', strtotime($input['Close_date']));
        $datas['Reported_by'] = empty($input['Reported_by']) ? '' : $input['Reported_by'];

        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/neusaglasenost');
    }

}
