<?php


use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

/** Extension  */
Route::get('/admin/home',['as'=>'admin.home','uses'=>'HomeController@index']);
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

/** Schoolyear   */
Route::get('/admin/schoolyear/list',['as'=>'admin.schoolyear.list','uses'=>'Admin\SchoolyearController@index']);
Route::post('/admin/schoolyear',['as'=>'admin.schoolyear.store','uses'=>'Admin\SchoolyearController@store']);
Route::get('/admin/schoolyear/create',['as'=>'admin.schoolyear.create','uses'=>'Admin\SchoolyearController@create']);
Route::get('/admin/schoolyear/show/{id}',['as'=>'admin.schoolyear.show','uses'=>'Admin\SchoolyearController@show']);
Route::post('/admin/schoolyear/update/{id}',['as'=>'admin.schoolyear.update','uses'=>'Admin\SchoolyearController@update']);
Route::get('/admin/schoolyear/destroy/{id}',['as'=>'admin.schoolyear.destroy','uses'=>'Admin\SchoolyearController@destroy']);
Route::get('/admin/schoolyear/edit/{id}',['as'=>'admin.schoolyear.edit','uses'=>'Admin\SchoolyearController@edit']);
/** End Schoolyear   */


/** ============================================================================== */
/** |                                                                            | */
/** |                                                                            | */
/** |                            Independent Tables                              | */
/** |                                                                            | */
/** |                                                                            | */
/** ============================================================================== */

/** StudentSchoolyear */

Route::get('/admin/studentsSchoolyear/list',['as'=>'admin.studentsSchoolyear.list','uses'=>'Admin\StudentSchoolyearController@index']);
Route::post('/admin/studentsSchoolyear',['as'=>'admin.studentsSchoolyear.store','uses'=>'Admin\StudentSchoolyearController@store']);
Route::get('/admin/studentsSchoolyear/create',['as'=>'admin.studentsSchoolyear.create','uses'=>'Admin\StudentSchoolyearController@create']);
Route::get('/admin/studentsSchoolyear/show/{id}',['as'=>'admin.studentsSchoolyear.show','uses'=>'Admin\StudentSchoolyearController@show']);
Route::post('/admin/studentsSchoolyear/update/{id}',['as'=>'admin.studentsSchoolyear.update','uses'=>'Admin\StudentSchoolyearController@update']);
Route::get('/admin/studentsSchoolyear/destroy/{id}',['as'=>'admin.studentsSchoolyear.destroy','uses'=>'Admin\StudentSchoolyearController@destroy']);
Route::get('/admin/studentsSchoolyear/edit/{id}',['as'=>'admin.studentsSchoolyear.edit','uses'=>'Admin\StudentSchoolyearController@edit']);

/** End StudentSchoolyear */


/** TeacherSubject */

Route::get('/admin/teacherSubject/list',['as'=>'admin.teacherSubject.list','uses'=>'Admin\TeacherSubjectController@index']);
Route::post('/admin/teacherSubject',['as'=>'admin.teacherSubject.store','uses'=>'Admin\TeacherSubjectController@store']);
Route::get('/admin/teacherSubject/create',['as'=>'admin.teacherSubject.create','uses'=>'Admin\TeacherSubjectController@create']);
Route::get('/admin/teacherSubject/show/{id}',['as'=>'admin.teacherSubject.show','uses'=>'Admin\TeacherSubjectController@show']);
Route::post('/admin/teacherSubject/update/{id}',['as'=>'admin.teacherSubject.update','uses'=>'Admin\TeacherSubjectController@update']);
Route::get('/admin/teacherSubject/destroy/{id}',['as'=>'admin.teacherSubject.destroy','uses'=>'Admin\TeacherSubjectController@destroy']);
Route::get('/admin/teacherSubject/edit/{id}',['as'=>'admin.teacherSubject.edit','uses'=>'Admin\TeacherSubjectController@edit']);

/** End TeacherSubject */

/** CourseTeacher */

Route::get('/admin/courseTeacher/list',['as'=>'admin.courseTeacher.list','uses'=>'Admin\CourseTeacherController@index']);
Route::post('/admin/courseTeacher',['as'=>'admin.courseTeacher.store','uses'=>'Admin\CourseTeacherController@store']);
Route::get('/admin/courseTeacher/create',['as'=>'admin.courseTeacher.create','uses'=>'Admin\CourseTeacherController@create']);
Route::get('/admin/courseTeacher/show/{id}',['as'=>'admin.courseTeacher.show','uses'=>'Admin\CourseTeacherController@show']);
Route::post('/admin/courseTeacher/update/{id}',['as'=>'admin.courseTeacher.update','uses'=>'Admin\CourseTeacherController@update']);
Route::get('/admin/courseTeacher/destroy/{id}',['as'=>'admin.courseTeacher.destroy','uses'=>'Admin\CourseTeacherController@destroy']);
Route::get('/admin/courseTeacher/edit/{id}',['as'=>'admin.courseTeacher.edit','uses'=>'Admin\CourseTeacherController@edit']);

/** End CourseTeacher */

/** CourseSubject */

Route::get('/admin/courseSubject/list',['as'=>'admin.courseSubject.list','uses'=>'Admin\CourseSubjectController@index']);
Route::post('/admin/courseSubject',['as'=>'admin.courseSubject.store','uses'=>'Admin\CourseSubjectController@store']);
Route::get('/admin/courseSubject/create',['as'=>'admin.courseSubject.create','uses'=>'Admin\CourseSubjectController@create']);
Route::get('/admin/courseSubject/show/{id}',['as'=>'admin.courseSubject.show','uses'=>'Admin\CourseSubjectController@show']);
Route::post('/admin/courseSubject/update/{id}',['as'=>'admin.courseSubject.update','uses'=>'Admin\CourseSubjectController@update']);
Route::get('/admin/courseSubject/destroy/{id}',['as'=>'admin.courseSubject.destroy','uses'=>'Admin\CourseSubjectController@destroy']);
Route::get('/admin/courseSubject/edit/{id}',['as'=>'admin.courseSubject.edit','uses'=>'Admin\CourseSubjectController@edit']);

/** End CourseSubject */

/** CourseClasseGradeStudent */

Route::get('/admin/courseClasseGradeStudent/list',['as'=>'admin.courseClasseGradeStudent.list','uses'=>'Admin\CourseClasseGradeStudentController@index']);
Route::post('/admin/courseClasseGradeStudent',['as'=>'admin.courseClasseGradeStudent.store','uses'=>'Admin\CourseClasseGradeStudentController@store']);
Route::get('/admin/courseClasseGradeStudent/create',['as'=>'admin.courseClasseGradeStudent.create','uses'=>'Admin\CourseClasseGradeStudentController@create']);
Route::get('/admin/courseClasseGradeStudent/show/{id}',['as'=>'admin.courseClasseGradeStudent.show','uses'=>'Admin\CourseClasseGradeStudentController@show']);
Route::post('/admin/courseClasseGradeStudent/update/{id}',['as'=>'admin.courseClasseGradeStudent.update','uses'=>'Admin\CourseClasseGradeStudentController@update']);
Route::get('/admin/courseClasseGradeStudent/destroy/{id}',['as'=>'admin.courseClasseGradeStudent.destroy','uses'=>'Admin\CourseClasseGradeStudentController@destroy']);
Route::get('/admin/courseClasseGradeStudent/edit/{id}',['as'=>'admin.courseClasseGradeStudent.edit','uses'=>'Admin\CourseClasseGradeStudentController@edit']);

/** End CourseClasseGradeStudent */


});