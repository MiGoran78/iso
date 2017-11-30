<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FileSystemController extends Controller {

    public function index() {
//        Storage::disk('qms')->makeDirectory('tmp');
//        echo dd(Storage::disk('qms')->Directories('/'));

        $allDirs = Storage::disk('qms')->Directories('/');

        return view('fileSystem', compact('allDirs'));
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

