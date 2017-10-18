<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UsklSaZakonimaController extends Controller {

    public function index() {}
    public function create() {}
    public function store(Request $request) {}
    public function show($id) {}
    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}



    public function uskl_sa_zakonima_lista() {
        return view('zapisi.uskl_sa_zakonima.admin.lista');
    }

    public function uskl_sa_zakonima_lista_upd(Request $request) {
        $datas = $request->all();

        $input['standard'] =  empty($datas['standard']) ? '' : $datas['standard'];
        $input['naziv'] = empty($datas['naziv']) ? '' : $datas['naziv'];
        $input['preispitivano'] = empty($datas['preispitivano']) ? '' : $datas['preispitivano'];
        $input['popunio'] = empty($datas['popunio']) ? '' : $datas['popunio'];
        $input['datum'] = empty($datas['datum']) ? '' : date('Y-m-d', strtotime($datas['datum']));

        return view('zapisi.uskl_sa_zakonima.admin.lista');
    }


    public function uskl_sa_zakonima_vrednovanje() {
        return view('zapisi.uskl_sa_zakonima.admin.vrednovanje');
    }

    public function uskl_sa_zakonima_vrednovanje_upd(Request $request) {
        $datas = $request->all;
        $input[''] = empty($datas['']) ? '' : $datas[''];

        return view('zapisi.uskl_sa_zakonima.admin.vrednovanje');
    }

}
