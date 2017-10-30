<?php

namespace App\Http\Controllers;
use App\Obuke;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ObukeController extends Controller
{
    private $dir_obuke = 'qms_podaci/uputstva/obuke';


    public function index() {
//        $datas = Obuke::all()->sortByDesc('dat_pocetka');
        $datas = Obuke::all();
//echo dd($datas);
        return view('zapisi.obuke.admin.index', compact('datas'));
    }


    public function create() {
        $dir_obuke = $this->dir_obuke;
        if (!is_dir($dir_obuke)) {
            mkdir($dir_obuke);
        }

        return view('zapisi.obuke.admin.create', compact('dir_obuke'));
    }


    public function store(Request $request) {
        $input = $request->all();

        // Drag & Drop
//        $file->move(public_path('qms_podaci'), $fileName);

        $input = $request->all();
        $datas = new Obuke();
        $datas = $input;

        $datas['dat_pocetka'] = $input['dat_pocetka']=='' ? '' : date('Y-m-d', strtotime($input['dat_pocetka']));
        $datas['dat_zavrsetka'] = $input['dat_zavrsetka']=='' ? '' : date('Y-m-d', strtotime($input['dat_zavrsetka']));

        Obuke::create($datas);
        Session::flash('message','Zapis je kreiran');
        return redirect('/obuke');
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
