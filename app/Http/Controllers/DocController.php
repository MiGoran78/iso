<?php

namespace App\Http\Controllers;
use App\Category;
use App\UpravljanjeDok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;


class DocController extends Controller
{
    public function index() {
        $docs = Category::all();

        $categories = Category::where('parent_id', '=', 0)->get();
        $allCategories = Category::pluck('title','id','level','parent_id')->all();

        $catRoot = Category::where('parent_id',0)->pluck('title');
        $catSubLev1 = Category::where('parent_id',1)->pluck('title')->all();
        $catSubLev2 = Category::where('parent_id',2)->pluck('title')->all();
        $catSubLev3 = Category::where('parent_id',3)->pluck('title')->all();

        return view('admin.docs.index', compact('docs','allCategories','catRoot','catSubLev1','catSubLev2','catSubLev3'));
    }


    public function create() {
        $allCategories = Category::where('parent_id', '<', 4)->pluck('title','id','level','parent_id')->all();
        $selected = '';
        return view('admin.docs.create', compact( 'allCategories','selected'));
    }


    public function store(Request $request) {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('qms_podaci'), $fileName);
        return back();
    }


    public function show($id) {
    }


    public function edit($id) {
        $selected = Category::findOrFail($id);
        $allCategories = Category::where('parent_id', '<', 4)->pluck('title','id','parent_id')->all();
        $doc_sifre = UpravljanjeDok::where('hide',0)->pluck('sifra')->all();

        $test = UpravljanjeDok::where('hide',0)->where('sifra',$selected->sifra)->pluck('verzija')->all();
//        $test = UpravljanjeDok::where('hide',0)->where('sifra',$selected->sifra)->pluck('verzija')->all();
//echo dd($test);

//echo dd($selected->sifra);
        return view('admin.docs.edit', compact( 'allCategories','selected', 'doc_sifre'));
    }


    public function update(Request $request, $id) {
    }


    public function destroy($id) {
        $doc = Category::findOrFail($id);

        $level = Category::findOrFail($doc->level)->title;
        $file = ('qms_podaci/'.$level.'/'.$doc->path);

        $doc->delete();
        File::delete($file);

        Session::flash('deleted_document','Dokument je obrisan');
        return redirect('/admin');
    }
}
