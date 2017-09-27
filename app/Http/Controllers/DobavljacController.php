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
        return view('zapisi.dobavljaci.lista');
    }


    public function create() {
        $idRef = date("ymdhms");
        return view('zapisi.dobavljaci.id_list.create', compact('idRef'));
    }


    public function store(Request $request) {
        $input = $request->all();
//        echo dd($input);

        Dobavljac::create($input);
        Session::flash('message','Zapis je kreiran');
        return redirect('/dobavljaci');
    }


    public function show($id) {
    }


    public function edit($id) {
        return view('zapisi.dobavljaci.id_list.edit');
    }


    public function update(Request $request, $id) {
//        return view('zapisi.dobavljaci.id_list.edit');
    }


    public function destroy($id) {
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
