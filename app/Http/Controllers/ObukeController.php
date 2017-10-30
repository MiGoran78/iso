<?php

namespace App\Http\Controllers;
use App\Obuke;
use Illuminate\Http\Request;


class ObukeController extends Controller
{

    public function index() {
//        $datas = Obuke::all()->sortByDesc('verzija')->sortBy('id');
        return view('zapisi.obuke.admin.index', compact('datas'));
    }


    public function create() {
        return view('zapisi.obuke.admin.create');
    }


    public function store(Request $request) {
    }


    public function show($id) {
    }


    public function edit($id) {
//        $datas = Obuke::findOrFail($id);
        return view('zapisi.obuke.admin.edit', compact('datas'));
    }


    public function update(Request $request, $id) {
    }


    public function destroy($id) {
    }
}
