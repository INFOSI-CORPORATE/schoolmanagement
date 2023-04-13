<
reegt
<?php

Route::get('/admin/grade/list',['as'=>'admin.grade.list','uses'=>'Admin\GradeController@index']);
Route::post('/admin/grade',['as'=>'admin.grade.store','uses'=>'Admin\GradeController@store']);
Route::get('/admin/grade/create',['as'=>'admin.grade.create','uses'=>'Admin\GradeController@create']);
Route::get('/admin/grade/show/{id}',['as'=>'admin.grade.show','uses'=>'Admin\GradeController@show']);
Route::post('/admin/grade/update/{id}',['as'=>'admin.grade.update','uses'=>'Admin\GradeController@update']);
Route::get('/admin/grade/destroy/{id}',['as'=>'admin.grade.destroy','uses'=>'Admin\GradeController@destroy']);
Route::get('/admin/grade/edit/{id}',['as'=>'admin.grade.edit','uses'=>'Admin\GradeController@edit']);


?>
