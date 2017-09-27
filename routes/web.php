<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',['uses'=>'CategoryController@manageCategory']);

Route::get('category-tree-view',['uses'=>'CategoryController@manageCategory']);
Route::post('add-category',['as'=>'add.category','uses'=>'CategoryAdminController@addCategory']);
Route::post('edit-category',['as'=>'edit.category','uses'=>'CategoryAdminController@editCategory']);

Route::resource('admin', 'DocController',['names'=>[
    'index'  => 'admin.docs.index',
    'create' => 'admin.docs.create',
    'store'  => 'admin.docs.store',
    'edit'   => 'admin.docs.edit'
]]);



Route::resource('zapisi', 'NeusagController',['names'=>[
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
//    'lista'         => 'zapisi.dobavljaci.lista',
//    'ocena'         => 'zapisi.dobavljaci.ocena',
    'index'         => 'zapisi.dobavljaci.id_list.index',
    'create'        => 'zapisi.dobavljaci.id_list.create',
    'store'          => 'zapisi.dobavljaci.id_list.store',
    'edit'          => 'zapisi.dobavljaci.id_list.edit',
]]);

Route::post('ocena',['as'=>'ocena','uses'=>'DobavljacController@ocena']);
Route::post('ocena_upd',['as'=>'ocena_upd','uses'=>'DobavljacController@ocena_upd']);
Route::post('reklamacija',['as'=>'reklamacija','uses'=>'DobavljacController@reklamacija']);
Route::post('reklamacija_upd',['as'=>'reklamacija_upd','uses'=>'DobavljacController@reklamacija_upd']);

