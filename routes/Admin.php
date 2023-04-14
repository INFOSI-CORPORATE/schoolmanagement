<?php


use Illuminate\Support\Facades\Route;

/** Extension  */

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/** Student   */
Route::get('/admin/student/list',['as'=>'admin.student.list','uses'=>'Admin\StudentController@index', 'middleware' => 'auth']);
Route::post('/admin/student',['as'=>'admin.student.store','uses'=>'Admin\StudentController@store', 'middleware' => 'auth']);
Route::get('/admin/student/create',['as'=>'admin.student.create','uses'=>'Admin\StudentController@create', 'middleware' => 'auth']);
Route::get('/admin/student/show/{id}',['as'=>'admin.student.show','uses'=>'Admin\StudentController@show', 'middleware' => 'auth']);
Route::post('/admin/student/update/{id}',['as'=>'admin.student.update','uses'=>'Admin\StudentController@update', 'middleware' => 'auth']);
Route::get('/admin/student/destroy/{id}',['as'=>'admin.student.destroy','uses'=>'Admin\StudentController@destroy', 'middleware' => 'auth']);
Route::get('/admin/student/edit/{id}',['as'=>'admin.student.edit','uses'=>'Admin\StudentController@edit', 'middleware' => 'auth']);
/** End Student   */


/** Teacher   */

Route::get('/admin/teacher/list',['as'=>'admin.teacher.list','uses'=>'Admin\TeacherController@index', 'middleware' => 'auth']);
Route::post('/admin/teacher',['as'=>'admin.teacher.store','uses'=>'Admin\TeacherController@store', 'middleware' => 'auth']);
Route::get('/admin/teacher/create',['as'=>'admin.teacher.create','uses'=>'Admin\TeacherController@create', 'middleware' => 'auth']);
Route::get('/admin/teacher/show/{id}',['as'=>'admin.teacher.show','uses'=>'Admin\TeacherController@show', 'middleware' => 'auth']);
Route::post('/admin/teacher/update/{id}',['as'=>'admin.teacher.update','uses'=>'Admin\TeacherController@update', 'middleware' => 'auth']);
Route::get('/admin/teacher/destroy/{id}',['as'=>'admin.teacher.destroy','uses'=>'Admin\TeacherController@destroy', 'middleware' => 'auth']);
Route::get('/admin/teacher/edit/{id}',['as'=>'admin.teacher.edit','uses'=>'Admin\TeacherController@edit', 'middleware' => 'auth']);

/** End Teacher   */

/** Classe   */

Route::get('/admin/classe/list',['as'=>'admin.classe.list','uses'=>'Admin\ClasseController@index', 'middleware' => 'auth']);
Route::post('/admin/classe',['as'=>'admin.classe.store','uses'=>'Admin\ClasseController@store', 'middleware' => 'auth']);
Route::get('/admin/classe/create',['as'=>'admin.classe.create','uses'=>'Admin\ClasseController@create', 'middleware' => 'auth']);
Route::get('/admin/classe/show/{id}',['as'=>'admin.classe.show','uses'=>'Admin\ClasseController@show', 'middleware' => 'auth']);
Route::post('/admin/classe/update/{id}',['as'=>'admin.classe.update','uses'=>'Admin\ClasseController@update', 'middleware' => 'auth']);
Route::get('/admin/classe/destroy/{id}',['as'=>'admin.classe.destroy','uses'=>'Admin\ClasseController@destroy', 'middleware' => 'auth']);
Route::get('/admin/classe/edit/{id}',['as'=>'admin.classe.edit','uses'=>'Admin\ClasseController@edit', 'middleware' => 'auth']);

/** End Classe  */

/** Course   */
Route::get('/admin/course/list',['as'=>'admin.course.list','uses'=>'Admin\CourseController@index', 'middleware' => 'auth']);
Route::post('/admin/course',['as'=>'admin.course.store','uses'=>'Admin\CourseController@store', 'middleware' => 'auth']);
Route::get('/admin/course/create',['as'=>'admin.course.create','uses'=>'Admin\CourseController@create', 'middleware' => 'auth']);
Route::get('/admin/course/show/{id}',['as'=>'admin.course.show','uses'=>'Admin\CourseController@show', 'middleware' => 'auth']);
Route::post('/admin/course/update/{id}',['as'=>'admin.course.update','uses'=>'Admin\CourseController@update', 'middleware' => 'auth']);
Route::get('/admin/course/destroy/{id}',['as'=>'admin.course.destroy','uses'=>'Admin\CourseController@destroy', 'middleware' => 'auth']);
Route::get('/admin/course/edit/{id}',['as'=>'admin.course.edit','uses'=>'Admin\CourseController@edit', 'middleware' => 'auth']);

/** End Course   */

/** Subject   */

Route::get('/admin/subject/list',['as'=>'admin.subject.list','uses'=>'Admin\SubjectController@index', 'middleware' => 'auth']);
Route::post('/admin/subject',['as'=>'admin.subject.store','uses'=>'Admin\SubjectController@store', 'middleware' => 'auth']);
Route::get('/admin/subject/create',['as'=>'admin.subject.create','uses'=>'Admin\SubjectController@create', 'middleware' => 'auth']);
Route::get('/admin/subject/show/{id}',['as'=>'admin.subject.show','uses'=>'Admin\SubjectController@show', 'middleware' => 'auth']);
Route::post('/admin/subject/update/{id}',['as'=>'admin.subject.update','uses'=>'Admin\SubjectController@update', 'middleware' => 'auth']);
Route::get('/admin/subject/destroy/{id}',['as'=>'admin.subject.destroy','uses'=>'Admin\SubjectController@destroy', 'middleware' => 'auth']);
Route::get('/admin/subject/edit/{id}',['as'=>'admin.subject.edit','uses'=>'Admin\SubjectController@edit', 'middleware' => 'auth']);
/** End Subject   */

/** Grade   */
Route::get('/admin/grade/list',['as'=>'admin.grade.list','uses'=>'Admin\GradeController@index', 'middleware' => 'auth']);
Route::post('/admin/grade',['as'=>'admin.grade.store','uses'=>'Admin\GradeController@store', 'middleware' => 'auth']);
Route::get('/admin/grade/create',['as'=>'admin.grade.create','uses'=>'Admin\GradeController@create', 'middleware' => 'auth']);
Route::get('/admin/grade/show/{id}',['as'=>'admin.grade.show','uses'=>'Admin\GradeController@show', 'middleware' => 'auth']);
Route::post('/admin/grade/update/{id}',['as'=>'admin.grade.update','uses'=>'Admin\GradeController@update', 'middleware' => 'auth']);
Route::get('/admin/grade/destroy/{id}',['as'=>'admin.grade.destroy','uses'=>'Admin\GradeController@destroy', 'middleware' => 'auth']);
Route::get('/admin/grade/edit/{id}',['as'=>'admin.grade.edit','uses'=>'Admin\GradeController@edit', 'middleware' => 'auth']);
/** End Grade   */

/** Schoolyear   */
Route::get('/admin/schoolyear/list',['as'=>'admin.schoolyear.list','uses'=>'Admin\SchoolyearController@index', 'middleware' => 'auth']);
Route::post('/admin/schoolyear',['as'=>'admin.schoolyear.store','uses'=>'Admin\SchoolyearController@store', 'middleware' => 'auth']);
Route::get('/admin/schoolyear/create',['as'=>'admin.schoolyear.create','uses'=>'Admin\SchoolyearController@create', 'middleware' => 'auth']);
Route::get('/admin/schoolyear/show/{id}',['as'=>'admin.schoolyear.show','uses'=>'Admin\SchoolyearController@show', 'middleware' => 'auth']);
Route::post('/admin/schoolyear/update/{id}',['as'=>'admin.schoolyear.update','uses'=>'Admin\SchoolyearController@update', 'middleware' => 'auth']);
Route::get('/admin/schoolyear/destroy/{id}',['as'=>'admin.schoolyear.destroy','uses'=>'Admin\SchoolyearController@destroy', 'middleware' => 'auth']);
Route::get('/admin/schoolyear/edit/{id}',['as'=>'admin.schoolyear.edit','uses'=>'Admin\SchoolyearController@edit', 'middleware' => 'auth']);
/** End Schoolyear   */


/** ============================================================================== */
/** |                                                                            | */
/** |                                                                            | */
/** |                            Independent Tables                              | */
/** |                                                                            | */
/** |                                                                            | */
/** ============================================================================== */

/** StudentSchoolyear */

Route::get('/admin/studentsSchoolyear/list',['as'=>'admin.studentsSchoolyear.list','uses'=>'Admin\StudentSchoolyearController@index', 'middleware' => 'auth']);
Route::post('/admin/studentsSchoolyear',['as'=>'admin.studentsSchoolyear.store','uses'=>'Admin\StudentSchoolyearController@store', 'middleware' => 'auth']);
Route::get('/admin/studentsSchoolyear/create',['as'=>'admin.studentsSchoolyear.create','uses'=>'Admin\StudentSchoolyearController@create', 'middleware' => 'auth']);
Route::get('/admin/studentsSchoolyear/show/{id}',['as'=>'admin.studentsSchoolyear.show','uses'=>'Admin\StudentSchoolyearController@show', 'middleware' => 'auth']);
Route::post('/admin/studentsSchoolyear/update/{id}',['as'=>'admin.studentsSchoolyear.update','uses'=>'Admin\StudentSchoolyearController@update', 'middleware' => 'auth']);
Route::get('/admin/studentsSchoolyear/destroy/{id}',['as'=>'admin.studentsSchoolyear.destroy','uses'=>'Admin\StudentSchoolyearController@destroy', 'middleware' => 'auth']);
Route::get('/admin/studentsSchoolyear/edit/{id}',['as'=>'admin.studentsSchoolyear.edit','uses'=>'Admin\StudentSchoolyearController@edit', 'middleware' => 'auth']);

/** End StudentSchoolyear */


/** TeacherSubject */

Route::get('/admin/teacherSubject/list',['as'=>'admin.teacherSubject.list','uses'=>'Admin\TeacherSubjectController@index', 'middleware' => 'auth']);
Route::post('/admin/teacherSubject',['as'=>'admin.teacherSubject.store','uses'=>'Admin\TeacherSubjectController@store', 'middleware' => 'auth']);
Route::get('/admin/teacherSubject/create',['as'=>'admin.teacherSubject.create','uses'=>'Admin\TeacherSubjectController@create', 'middleware' => 'auth']);
Route::get('/admin/teacherSubject/show/{id}',['as'=>'admin.teacherSubject.show','uses'=>'Admin\TeacherSubjectController@show', 'middleware' => 'auth']);
Route::post('/admin/teacherSubject/update/{id}',['as'=>'admin.teacherSubject.update','uses'=>'Admin\TeacherSubjectController@update', 'middleware' => 'auth']);
Route::get('/admin/teacherSubject/destroy/{id}',['as'=>'admin.teacherSubject.destroy','uses'=>'Admin\TeacherSubjectController@destroy', 'middleware' => 'auth']);
Route::get('/admin/teacherSubject/edit/{id}',['as'=>'admin.teacherSubject.edit','uses'=>'Admin\TeacherSubjectController@edit', 'middleware' => 'auth']);

/** End TeacherSubject */

/** CourseTeacher */

Route::get('/admin/courseTeacher/list',['as'=>'admin.courseTeacher.list','uses'=>'Admin\CourseTeacherController@index', 'middleware' => 'auth']);
Route::post('/admin/courseTeacher',['as'=>'admin.courseTeacher.store','uses'=>'Admin\CourseTeacherController@store', 'middleware' => 'auth']);
Route::get('/admin/courseTeacher/create',['as'=>'admin.courseTeacher.create','uses'=>'Admin\CourseTeacherController@create', 'middleware' => 'auth']);
Route::get('/admin/courseTeacher/show/{id}',['as'=>'admin.courseTeacher.show','uses'=>'Admin\CourseTeacherController@show', 'middleware' => 'auth']);
Route::post('/admin/courseTeacher/update/{id}',['as'=>'admin.courseTeacher.update','uses'=>'Admin\CourseTeacherController@update', 'middleware' => 'auth']);
Route::get('/admin/courseTeacher/destroy/{id}',['as'=>'admin.courseTeacher.destroy','uses'=>'Admin\CourseTeacherController@destroy', 'middleware' => 'auth']);
Route::get('/admin/courseTeacher/edit/{id}',['as'=>'admin.courseTeacher.edit','uses'=>'Admin\CourseTeacherController@edit', 'middleware' => 'auth']);

/** End CourseTeacher */

/** CourseSubject */

Route::get('/admin/courseSubject/list',['as'=>'admin.courseSubject.list','uses'=>'Admin\CourseSubjectController@index', 'middleware' => 'auth']);
Route::post('/admin/courseSubject',['as'=>'admin.courseSubject.store','uses'=>'Admin\CourseSubjectController@store', 'middleware' => 'auth']);
Route::get('/admin/courseSubject/create',['as'=>'admin.courseSubject.create','uses'=>'Admin\CourseSubjectController@create', 'middleware' => 'auth']);
Route::get('/admin/courseSubject/show/{id}',['as'=>'admin.courseSubject.show','uses'=>'Admin\CourseSubjectController@show', 'middleware' => 'auth']);
Route::post('/admin/courseSubject/update/{id}',['as'=>'admin.courseSubject.update','uses'=>'Admin\CourseSubjectController@update', 'middleware' => 'auth']);
Route::get('/admin/courseSubject/destroy/{id}',['as'=>'admin.courseSubject.destroy','uses'=>'Admin\CourseSubjectController@destroy', 'middleware' => 'auth']);
Route::get('/admin/courseSubject/edit/{id}',['as'=>'admin.courseSubject.edit','uses'=>'Admin\CourseSubjectController@edit', 'middleware' => 'auth']);

/** End CourseSubject */

/** CourseClasseGradeStudent */

Route::get('/admin/courseSubject/list',['as'=>'admin.courseSubject.list','uses'=>'Admin\CourseClasseGradeStudentController@index', 'middleware' => 'auth']);
Route::post('/admin/courseSubject',['as'=>'admin.courseSubject.store','uses'=>'Admin\CourseClasseGradeStudentController@store', 'middleware' => 'auth']);
Route::get('/admin/courseSubject/create',['as'=>'admin.courseSubject.create','uses'=>'Admin\CourseClasseGradeStudentController@create', 'middleware' => 'auth']);
Route::get('/admin/courseSubject/show/{id}',['as'=>'admin.courseSubject.show','uses'=>'Admin\CourseClasseGradeStudentController@show', 'middleware' => 'auth']);
Route::post('/admin/courseSubject/update/{id}',['as'=>'admin.courseSubject.update','uses'=>'Admin\CourseClasseGradeStudentController@update', 'middleware' => 'auth']);
Route::get('/admin/courseSubject/destroy/{id}',['as'=>'admin.courseSubject.destroy','uses'=>'Admin\CourseClasseGradeStudentController@destroy', 'middleware' => 'auth']);
Route::get('/admin/courseSubject/edit/{id}',['as'=>'admin.courseSubject.edit','uses'=>'Admin\CourseClasseGradeStudentController@edit', 'middleware' => 'auth']);

/** End CourseClasseGradeStudent */
