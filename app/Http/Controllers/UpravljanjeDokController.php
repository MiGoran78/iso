<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UpravljanjeDokController extends Controller {

    public function index() {
        return view('zapisi.upravljanje_dok.admin.index');
    }


    public function create() {
        return view('zapisi.upravljanje_dok.admin.create');
    }


    public function store(Request $request) {
    }


    public function show($id) {
    }


    public function edit($id) {
        return view('zapisi.upravljanje_dok.admin.edit');
    }


    public function update(Request $request, $id) {
    }


    public function destroy($id) {
    }
}
