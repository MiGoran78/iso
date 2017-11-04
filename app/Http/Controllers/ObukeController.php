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
//        $datas = new Obuke() ;

        $datas['idRef'] = empty($input['idRef'])                    ? '' : $input['idRef'];
        $datas['naziv'] = empty($input['naziv'])                    ? '' : $input['naziv'];
        $datas['vrsta'] = empty($input['vrsta'])                    ? '0' : $input['vrsta'];
        $datas['izdao'] = empty($input['izdao'])                    ? '' : $input['izdao'];
        $datas['dat_pocetka'] = $input['dat_pocetka']==''           ? '' : date('Y-m-d', strtotime($input['dat_pocetka']));
        $datas['dat_zavrsetka'] = $input['dat_zavrsetka']==''       ? '' : date('Y-m-d', strtotime($input['dat_zavrsetka']));
        $datas['polaznik'] = empty($input['polaznik'])              ? '' : $input['polaznik'];
        $datas['plan'] = empty($input['plan_path'])                 ? '' : $input['plan_path'];
        $datas['plan_path'] = empty($input['plan_path'])            ? '' : $input['plan_path'];
        $datas['izvestaj'] = empty($input['izvestaj_path'])         ? '' : $input['izvestaj_path'];
        $datas['izvestaj_path'] = empty($input['izvestaj_path'])    ? '' : $input['izvestaj_path'];
        $datas['ocena'] = empty($input['ocena'])                    ? '0' : $input['ocena'];
        $datas['ocena_napomena'] = empty($input['ocena_napomena'])  ? '' : $input['ocena_napomena'];
        $datas['status'] = empty($input['status'])                  ? '0' : $input['status'];

        $datas['sektor'] = empty($input['sektor'])                  ? '' : $input['sektor'];
        $datas['mentor'] = empty($input['mentor'])                  ? '' : $input['mentor'];
        $datas['instruktor'] = empty($input['instruktor'])          ? '' : $input['instruktor'];
        $datas['komisija'] = empty($input['komisija'])              ? '' : $input['komisija'];
//echo dd($datas);
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

        $datas['naziv'] = empty($input['naziv'])                    ? '' : $input['naziv'];
        $datas['vrsta'] = empty($input['vrsta'])                    ? '0' : $input['vrsta'];
        $datas['izdao'] = empty($input['izdao'])                    ? '' : $input['izdao'];
        $datas['dat_pocetka'] = $input['dat_pocetka']==''           ? '' : date('Y-m-d', strtotime($input['dat_pocetka']));
        $datas['dat_zavrsetka'] = $input['dat_zavrsetka']==''       ? '' : date('Y-m-d', strtotime($input['dat_zavrsetka']));
        $datas['polaznik'] = empty($input['polaznik'])              ? '' : $input['polaznik'];
        $datas['plan'] = empty($input['plan_path'])                 ? '' : $input['plan_path'];
        $datas['plan_path'] = empty($input['plan_path'])            ? '' : $input['plan_path'];
        $datas['izvestaj'] = empty($input['izvestaj_path'])         ? '' : $input['izvestaj_path'];
        $datas['izvestaj_path'] = empty($input['izvestaj_path'])    ? '' : $input['izvestaj_path'];
        $datas['ocena'] = empty($input['ocena'])                    ? '0' : $input['ocena'];
        $datas['ocena_napomena'] = empty($input['ocena_napomena'])  ? '' : $input['ocena_napomena'];
        $datas['status'] = empty($input['status'])                  ? '0' : $input['status'];

        $datas['sektor'] = empty($input['sektor'])                  ? '' : $input['sektor'];
        $datas['mentor'] = empty($input['mentor'])                  ? '' : $input['mentor'];
        $datas['instruktor'] = empty($input['instruktor'])          ? '' : $input['instruktor'];
        $datas['komisija'] = empty($input['komisija'])              ? '' : $input['komisija'];

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
