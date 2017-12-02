<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FileSystemController extends Controller {

    public function index() {
//        Storage::disk('qms')->makeDirectory('tmp');
//        echo dd(Storage::disk('qms')->Directories('/'));

        $allDirs = Storage::disk('qms')->directories('/');
        $dir1 = Storage::disk('qms')->directories('I NIVO');
        $dir2 = Storage::disk('qms')->directories('PROCEDURE');
        $dir3 = Storage::disk('qms')->directories('UPUTSTVA');

        return view('fileSystem', compact('dir1', 'dir2', 'dir3'));
    }


    public function create() {
    }


    public function store(Request $request) {
    }


    public function show($id) {
    }


    public function edit($id) {
    }


    public function update(Request $request, $id) {
    }


    public function destroy($id) {
    }
}

