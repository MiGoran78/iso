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
        $dir_obuke = $this->dir_obuke;

        $datas['dat_pocetka'] = $datas['dat_pocetka']=='' ? '' : date('d.m.Y', strtotime($datas['dat_pocetka']));
        $datas['dat_zavrsetka'] = $datas['dat_zavrsetka']=='' ? '' : date('d.m.Y', strtotime($datas['dat_zavrsetka']));

        return view('zapisi.obuke.admin.edit', compact('datas', 'dir_obuke'));
    }


    public function update(Request $request, $id) {
        $input = $request->all();
        $datas = Obuke::findOrFail($id);
//echo dd($input);
        $datas['naziv'] = $input['naziv'];
        $datas['vrsta'] = $input['vrsta'];
        $datas['izdao'] = $input['izdao'];
        $datas['dat_pocetka'] = $input['dat_pocetka']=='' ? '' : date('Y-m-d', strtotime($input['dat_pocetka']));
        $datas['dat_zavrsetka'] = $input['dat_zavrsetka']=='' ? '' : date('Y-m-d', strtotime($input['dat_zavrsetka']));
        $datas['polaznik'] = $input['polaznik'];
        $datas['plan_path'] = $input['plan_path'];
        $datas['izvestaj_path'] = $input['izvestaj_path'];
        $datas['ocena'] = $input['ocena'];
        $datas['ocena_napomena'] = $input['ocena_napomena'];
        $datas['status'] = $input['status'];

        $datas->save();
        Session::flash('message','Zapis je snimljen');
        return redirect('/obuke');
    }


    public function destroy($id) {
        $input = Obuke::findOrFail($id);
        $input->delete();

        Session::flash('message','Zapis je obrisan');
        return redirect('/obuke');
    }
}
