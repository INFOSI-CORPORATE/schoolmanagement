<?php


use Illuminate\Support\Facades\Route;

/** Extension  */

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/** Student   */
Route::get('/admin/student/list',['as'=>'admin.student.list','uses'=>'Admin\StudentController@index']);
Route::post('/admin/student',['as'=>'admin.student.store','uses'=>'Admin\StudentController@store']);
Route::get('/admin/student/create',['as'=>'admin.student.create','uses'=>'Admin\StudentController@create']);
Route::get('/admin/student/show/{id}',['as'=>'admin.student.show','uses'=>'Admin\StudentController@show']);
Route::post('/admin/student/update/{id}',['as'=>'admin.student.update','uses'=>'Admin\StudentController@update']);
Route::get('/admin/student/destroy/{id}',['as'=>'admin.student.destroy','uses'=>'Admin\StudentController@destroy']);
Route::get('/admin/student/edit/{id}',['as'=>'admin.student.edit','uses'=>'Admin\StudentController@edit']);
/** End Student   */


/** Teacher   */

Route::get('/admin/teacher/list',['as'=>'admin.teacher.list','uses'=>'Admin\TeacherController@index']);
Route::post('/admin/teacher',['as'=>'admin.teacher.store','uses'=>'Admin\TeacherController@store']);
Route::get('/admin/teacher/create',['as'=>'admin.teacher.create','uses'=>'Admin\TeacherController@create']);
Route::get('/admin/teacher/show/{id}',['as'=>'admin.teacher.show','uses'=>'Admin\TeacherController@show']);
Route::post('/admin/teacher/update/{id}',['as'=>'admin.teacher.update','uses'=>'Admin\TeacherController@update']);
Route::get('/admin/teacher/destroy/{id}',['as'=>'admin.teacher.destroy','uses'=>'Admin\TeacherController@destroy']);
Route::get('/admin/teacher/edit/{id}',['as'=>'admin.teacher.edit','uses'=>'Admin\TeacherController@edit']);

/** End Teacher   */

/** Classe   */

Route::get('/admin/classe/list',['as'=>'admin.classe.list','uses'=>'Admin\ClasseController@index']);
Route::post('/admin/classe',['as'=>'admin.classe.store','uses'=>'Admin\ClasseController@store']);
Route::get('/admin/classe/create',['as'=>'admin.classe.create','uses'=>'Admin\ClasseController@create']);
Route::get('/admin/classe/show/{id}',['as'=>'admin.classe.show','uses'=>'Admin\ClasseController@show']);
Route::post('/admin/classe/update/{id}',['as'=>'admin.classe.update','uses'=>'Admin\ClasseController@update']);
Route::get('/admin/classe/destroy/{id}',['as'=>'admin.classe.destroy','uses'=>'Admin\ClasseController@destroy']);
Route::get('/admin/classe/edit/{id}',['as'=>'admin.classe.edit','uses'=>'Admin\ClasseController@edit']);

/** End Classe  */

/** Course   */
Route::get('/admin/course/list',['as'=>'admin.course.list','uses'=>'Admin\CourseController@index']);
Route::post('/admin/course',['as'=>'admin.course.store','uses'=>'Admin\CourseController@store']);
Route::get('/admin/course/create',['as'=>'admin.course.create','uses'=>'Admin\CourseController@create']);
Route::get('/admin/course/show/{id}',['as'=>'admin.course.show','uses'=>'Admin\CourseController@show']);
Route::post('/admin/course/update/{id}',['as'=>'admin.course.update','uses'=>'Admin\CourseController@update']);
Route::get('/admin/course/destroy/{id}',['as'=>'admin.course.destroy','uses'=>'Admin\CourseController@destroy']);
Route::get('/admin/course/edit/{id}',['as'=>'admin.course.edit','uses'=>'Admin\CourseController@edit']);

/** End Course   */

/** Subject   */

Route::get('/admin/subject/list',['as'=>'admin.subject.list','uses'=>'Admin\SubjectController@index']);
Route::post('/admin/subject',['as'=>'admin.subject.store','uses'=>'Admin\SubjectController@store']);
Route::get('/admin/subject/create',['as'=>'admin.subject.create','uses'=>'Admin\SubjectController@create']);
Route::get('/admin/subject/show/{id}',['as'=>'admin.subject.show','uses'=>'Admin\SubjectController@show']);
Route::post('/admin/subject/update/{id}',['as'=>'admin.subject.update','uses'=>'Admin\SubjectController@update']);
Route::get('/admin/subject/destroy/{id}',['as'=>'admin.subject.destroy','uses'=>'Admin\SubjectController@destroy']);
Route::get('/admin/subject/edit/{id}',['as'=>'admin.subject.edit','uses'=>'Admin\SubjectController@edit']);
/** End Subject   */

/** Grade   */
Route::get('/admin/grade/list',['as'=>'admin.grade.list','uses'=>'Admin\GradeController@index']);
Route::post('/admin/grade',['as'=>'admin.grade.store','uses'=>'Admin\GradeController@store']);
Route::get('/admin/grade/create',['as'=>'admin.grade.create','uses'=>'Admin\GradeController@create']);
Route::get('/admin/grade/show/{id}',['as'=>'admin.grade.show','uses'=>'Admin\GradeController@show']);
Route::post('/admin/grade/update/{id}',['as'=>'admin.grade.update','uses'=>'Admin\GradeController@update']);
Route::get('/admin/grade/destroy/{id}',['as'=>'admin.grade.destroy','uses'=>'Admin\GradeController@destroy']);
Route::get('/admin/grade/edit/{id}',['as'=>'admin.grade.edit','uses'=>'Admin\GradeController@edit']);
/** End Grade   */

