<?php

namespace App\Http\Controllers;
use App\OstecenjeImovine;
use Illuminate\Http\Request;


class OstecenjeImovineController extends Controller {

    public function index() {
        $datas = OstecenjeImovine::all();
        return view('zapisi.ostec_imovine.admin.index', compact('datas'));
    }


    public function create() {
        return view('zapisi.ostec_imovine.admin.create');
    }


    public function store(Request $request) {
    }


    public function show($id) {
    }


    public function edit($id) {
        return view('zapisi.ostec_imovine.admin.edit');
    }


    public function update(Request $request, $id) {
    }


    public function destroy($id) {
    }

}
