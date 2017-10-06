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
    }


    public function show($id) {
    }


    public function edit($id) {
        $datas = PreispitRuk::findOrFail($id);
        $datas[''] = $datas['']=='' ? '' : date('d.m.Y', strtotime($datas['']));

        return view('zapisi.preispit_rukov.admin.edit', compact('datas'));
    }


    public function update(Request $request, $id) {
    }


    public function destroy($id) {
        $input = PreispitRuk::findOrFail($id);
        $input->delete();

        Session::flash('message','Zapis je obrisan');
        return redirect('/preispit_rukov');
    }
}
