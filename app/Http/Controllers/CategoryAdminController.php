<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use Illuminate\Support\Facades\File;


class CategoryAdminController extends Controller
{
    public function addCategory(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'parent_id' => 'required',
        ]);

        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        $input['level'] = Category::findOrFail($input['parent_id'])->level;

        //add new record
        Category::create($input);

        //upload new file
        $folderName = Category::findOrFail($input['level'])->title;
        $oldFile = 'qms_podaci/'.$input['path'];
        $newFile = 'qms_podaci/'.$folderName.'/'.$input['path'];

        if ($input['path']) {
            File::move($oldFile, $newFile);
        }

//        return back()->with('success', 'Uspešno dodat zapis');
        return redirect('/admin');
    }



    public function editCategory(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'parent_id' => 'required',
        ]);
        $input = $request->all();

        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        $input['level'] = Category::findOrFail($input['parent_id'])->level;

        //rename old file
        $folderName = Category::findOrFail($input['level'])->title;
        $oldLevel = Category::findOrFail($input['id'])->level;
        $oldLevel = Category::findOrFail($oldLevel)->title;
        $oldFN = Category::findOrFail($input['id'])->path;
        $oldBackupFile = 'qms_podaci/'.$oldLevel.'/'.$oldFN;
        $newBackupFile = 'qms_podaci/'.$oldLevel.'/! ['.time().'] '.$oldFN;

        //upload new file
        $oldFile = 'qms_podaci/'.$input['path'];
        $newFile = 'qms_podaci/'.$folderName.'/'.$input['path'];

        //move file
        $oldCateg = 'qms_podaci/'.$oldLevel.'/'.$input['path'];
        $newCateg = 'qms_podaci/'.$folderName.'/'.$input['path'];
//echo dd(empty(public_path($oldFile)));

        //promena dokumenta (rename + move)
        if ($oldFN != $input['path'])  {
            File::move($oldFile, $newFile);                  //upload new file
            if (! empty($oldFN)) {
                File::move($oldBackupFile, $newBackupFile);      //rename old file
            }
        }

        //promena kategorije (move)
//        echo dd($oldLevel.'-'.$folderName.'-'.$input['path']);
        if (($oldLevel != $folderName) and ($oldFN == $input['path'])) {
            File::move($oldCateg, $newCateg);      //move file
        }

        //update record
        $tmp = Category::findOrFail($input['id']);
        $tmp['level'] = $input['level'];
        $tmp['title'] = $input['title'];
        $tmp['parent_id'] = $input['parent_id'];
        $tmp['path'] = $input['path'];
        $tmp->save();

//        return back()->with('success', 'Uspešno dodat zapis');
        return redirect('/admin');
    }
}
