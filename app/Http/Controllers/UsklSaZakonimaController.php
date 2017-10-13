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
        return back();
    }


    public function uskl_sa_zakonima_vrednovanje() {
        return view('zapisi.uskl_sa_zakonima.admin.vrednovanje');
    }

    public function uskl_sa_zakonima_vrednovanje_upd() {
        return view('zapisi.uskl_sa_zakonima.admin.vrednovanje');
    }

}
