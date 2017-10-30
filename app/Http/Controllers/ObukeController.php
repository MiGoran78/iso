<?php

namespace App\Http\Controllers;
use App\Obuke;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ObukeController extends Controller
{

    public function index() {
//        $datas = Obuke::all()->sortByDesc('verzija')->sortBy('id');
        $datas = Obuke::all();
        return view('zapisi.obuke.admin.index', compact('datas'));
    }


    public function create() {
        return view('zapisi.obuke.admin.create');
    }


    public function store(Request $request) {
        $input = $request->all();
        echo dd($input);

        //        DND
//        $file = $request->file('file');
//        $fileName = $file->getClientOriginalName();
//        $file->move(public_path('qms_podaci'), $fileName);
        return back();



//        $input = $request->all();
//        $datas = new Obuke();
//        $datas = $input;
//
//        $datas['datum'] = $input['datum']=='' ? '' : date('Y-m-d', strtotime($input['datum']));
//
//        Obuke::create($datas);
//        Session::flash('message','Zapis je kreiran');
//        return redirect('/obuke');
    }


    public function show($id) {
    }


    public function edit($id) {
        $datas = Obuke::findOrFail($id);

        $datas['datum'] = $datas['datum']=='' ? '' : date('d.m.Y', strtotime($datas['datum']));

        return view('zapisi.obuke.admin.edit', compact('datas'));
    }


    public function update(Request $request, $id) {
        $input = $request->all();
//        $datas = Obuke::findOrFail($id);

//        $datas['datum'] = $input['datum']=='' ? '' : date('Y-m-d', strtotime($input['datum']));
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];
//        $datas[''] = $input[''];

echo dd($input);
//        $datas->save();
//        Session::flash('message','Zapis je snimljen');
//        return redirect('/obuke');
    }


    public function destroy($id) {
        $input = Obuke::findOrFail($id);
        $input->delete();

        Session::flash('message','Zapis je obrisan');
        return redirect('/obuke');
    }
}
