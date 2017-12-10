<?php

Route::get('/',['uses'=>'CategoryController@manageCategory']);

Route::get('fs',['uses'=>'FileSystemController@index']);


//Route::get('category-tree-view',['uses'=>'CategoryController@manageCategory']);
Route::get('tree-view',['uses'=>'CategoryController@manageCategory']);
Route::post('add-category',['as'=>'add.category','uses'=>'CategoryAdminController@addCategory']);
Route::post('edit-category',['as'=>'edit.category','uses'=>'CategoryAdminController@editCategory']);



Route::resource('admin', 'DocController',['names'=>[
    'index'  => 'admin.docs.index',
    'create' => 'admin.docs.create',
    'store'  => 'admin.docs.store',
    'edit'   => 'admin.docs.edit'
]]);



Route::resource('neusaglasenost', 'NeusagController',['names'=>[
    'index'  => 'zapisi.neusag_proizod.admin.index',
    'create' => 'zapisi.neusag_proizod.admin.create',
    'store'  => 'zapisi.neusag_proizod.admin.store',
    'edit'   => 'zapisi.neusag_proizod.admin.edit',
]]);

Route::resource('km', 'KorMeraController',['names'=>[
    'index'  => 'zapisi.korektivna_mera.admin.index',
    'create' => 'zapisi.korektivna_mera.admin.create',
    'store'  => 'zapisi.korektivna_mera.admin.store',
    'edit'   => 'zapisi.korektivna_mera.admin.edit',
]]);

Route::post('newKM',['as'=>'newKM','uses'=>'KorMeraController@newKM']);
Route::post('show',['as'=>'show','uses'=>'KorMeraController@show']);
Route::post('izvestaj_8D',['as'=>'izvestaj_8D','uses'=>'KorMeraController@izvestaj_8D']);
Route::post('izvestaj_8D_update',['as'=>'izvestaj_8D','uses'=>'KorMeraController@izvestaj_8D_update']);



Route::resource('dobavljaci', 'DobavljacController',['names'=>[
    'lista'         => 'zapisi.dobavljaci.lista',
    'index'         => 'zapisi.dobavljaci.id_list.index',
    'create'        => 'zapisi.dobavljaci.id_list.create',
    'store'         => 'zapisi.dobavljaci.id_list.store',
    'edit'          => 'zapisi.dobavljaci.id_list.edit',
]]);

Route::post('ocena',['as'=>'ocena','uses'=>'DobavljacController@ocena']);
Route::post('ocena_upd',['as'=>'ocena_upd','uses'=>'DobavljacController@ocena_upd']);
Route::post('reklamacija',['as'=>'reklamacija','uses'=>'DobavljacController@reklamacija']);
Route::post('reklamacija_upd',['as'=>'reklamacija_upd','uses'=>'DobavljacController@reklamacija_upd']);
Route::get('print_lista',['as'=>'print_lista','uses'=>'DobavljacController@print_lista']);


//Route::get('/menu',function(){
//    $categories = Menu::with('children')->where('parent_id','=',0)->get();
//    return view('menu',['categories'=>$categories]);
//});


Route::resource('ostecenje_imovine', 'OstecenjeImovineController',['names'=>[
    'index'         => 'zapisi.ostec_imovine.admin.index',
    'create'        => 'zapisi.ostec_imovine.admin.create',
    'edit'          => 'zapisi.ostec_imovine.admin.edit',
]]);


Route::resource('preispit_rukov', 'PreispitRukController',['names'=>[
    'index'         => 'zapisi.preispit_rukov.admin.index',
    'create'        => 'zapisi.preispit_rukov.admin.create',
    'edit'          => 'zapisi.preispit_rukov.admin.edit',
]]);


//Route::resource('uskl_sa_zakonima', 'UsklSaZakonimaController',['names'=>[
//    'index'         => 'zapisi.uskl_sa_zakonima.admin.index',
//    'lista'         => 'zapisi.uskl_sa_zakonima.admin.lista',
////    'create'        => 'zapisi.preispit_rukov.admin.create',
////    'edit'          => 'zapisi.preispit_rukov.admin.edit',
//]]);
Route::get('uskl_sa_zakonima_lista',['uses'=>'UsklSaZakonimaController@uskl_sa_zakonima_lista']);
Route::post('uskl_sa_zakonima_lista',['uses'=>'UsklSaZakonimaController@uskl_sa_zakonima_lista_upd']);
Route::get('uskl_sa_zakonima_vrednovanje',['uses'=>'UsklSaZakonimaController@uskl_sa_zakonima_vrednovanje']);
Route::post('uskl_sa_zakonima_vrednovanje',['uses'=>'UsklSaZakonimaController@uskl_sa_zakonima_vrednovanje_upd']);


Route::resource('upravljanje_dok', 'UpravljanjeDokController',['names'=>[
    'index'         => 'zapisi.upravljanje_dok.admin.index',
    'create'        => 'zapisi.upravljanje_dok.admin.create',
    'edit'          => 'zapisi.upravljanje_dok.admin.edit',
]]);


Route::resource('obuke', 'ObukeController',['names'=>[
    'index'         => 'zapisi.obuke.admin.index',
    'create'        => 'zapisi.obuke.admin.create',
    'store'         => 'zapisi.obuke.admin.store',
    'edit'          => 'zapisi.obuke.admin.edit',
]]);


//Route::get('calibration_cert',function () {
//    return view('kalibracija/calibration_cert');
//});


Route::resource('calibration', 'CalibrationController',['names'=>[
    'index'         => 'zapisi.kalibracija.index',
    'create'        => 'zapisi.kalibracija.calibration_cert',
    'edit'          => 'zapisi.kalibracija.calibration_cert',
]]);


Auth::routes();

Route::get('/home', 'HomeController@index');
