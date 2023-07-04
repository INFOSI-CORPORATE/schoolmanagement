<?php


use Illuminate\Support\Facades\Route;



/** Rotas Authenticate */

Route::middleware('auth')->group(function () {

    /** System  */
    Route::get('/admin/home', ['as' => 'admin.home', 'uses' => 'HomeController@index']);
    Route::get('/admin/profile/{id}', ['as' => 'admin.profile', 'uses' => 'Auth\ProfileController@index']);
    Route::post('/admin/profile/{id}', ['as' => 'admin.profile.dados', 'uses' => 'Auth\ProfileController@dados']);
    Route::post('/admin/profile/password/{id}', ['as' => 'admin.profile.password', 'uses' => 'Auth\ProfileController@password']);
    Route::delete('/admin/profile/{id}', ['as' => 'admin.profile.destroy', 'uses' => 'Admin\UserController@destroy']);

    Route::get('admin/pagamentos/fatura/{code}', ['as' => 'admin.payments.invoice', 'uses' => 'Admin\PDFController@print']);

    /** ============================================================================== */
    /** |                                                                            | */
    /** |                                                                            | */
    /** |                            Routes Admin                                    | */
    /** |                                                                            | */
    /** |                                                                            | */
    /** ============================================================================== */


    /** Rotas do Admin */
    Route::middleware(['admin'])->group(function () {

        /** User   */
        Route::get('/admin/user/list', ['as' => 'admin.user.list', 'uses' => 'Admin\UserController@index']);
        Route::post('/admin/user', ['as' => 'admin.user.store', 'uses' => 'Admin\UserController@store']);
        Route::get('/admin/user/create', ['as' => 'admin.user.create', 'uses' => 'Admin\UserController@create']);
        Route::get('/admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show']);
        Route::post('/admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update']);
        Route::delete('/admin/user/destroy/{id}', ['as' => 'admin.user.destroy', 'uses' => 'Admin\UserController@destroy']);
        Route::get('/admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit']);

        /** End User */

        /** Employee   */
        Route::get('/admin/employee/list', ['as' => 'admin.employee.list', 'uses' => 'Admin\EmployeeController@index']);
        Route::post('/admin/employee', ['as' => 'admin.employee.store', 'uses' => 'Admin\EmployeeController@store']);
        Route::get('/admin/employee/create', ['as' => 'admin.employee.create', 'uses' => 'Admin\EmployeeController@create']);
        Route::get('/admin/employee/show/{id}', ['as' => 'admin.employee.show', 'uses' => 'Admin\EmployeeController@show']);
        Route::post('/admin/employee/update/{id}', ['as' => 'admin.employee.update', 'uses' => 'Admin\EmployeeController@update']);
        Route::delete('/admin/employee/destroy/{id}', ['as' => 'admin.employee.destroy', 'uses' => 'Admin\EmployeeController@destroy']);
        Route::get('/admin/employee/edit/{id}', ['as' => 'admin.employee.edit', 'uses' => 'Admin\EmployeeController@edit']);

        /** End Employee */

        /** department   */
        Route::get('/admin/department/list', ['as' => 'admin.department.list', 'uses' => 'Admin\DepartmentController@index']);
        Route::post('/admin/department', ['as' => 'admin.department.store', 'uses' => 'Admin\DepartmentController@store']);
        Route::get('/admin/department/create', ['as' => 'admin.department.create', 'uses' => 'Admin\DepartmentController@create']);
        Route::get('/admin/department/show/{id}', ['as' => 'admin.department.show', 'uses' => 'Admin\DepartmentController@show']);
        Route::post('/admin/department/update/{id}', ['as' => 'admin.department.update', 'uses' => 'Admin\DepartmentController@update']);
        Route::delete('/admin/department/destroy/{id}', ['as' => 'admin.department.destroy', 'uses' => 'Admin\DepartmentController@destroy']);
        Route::get('/admin/department/edit/{id}', ['as' => 'admin.department.edit', 'uses' => 'Admin\DepartmentController@edit']);
        /** End department   */

        /** departmentboss   */
        Route::get('/admin/departmentboss/list', ['as' => 'admin.departmentBoss.list', 'uses' => 'Admin\DepartmentbossController@index']);
        Route::post('/admin/departmentboss', ['as' => 'admin.departmentBoss.store', 'uses' => 'Admin\DepartmentbossController@store']);
        Route::get('/admin/departmentboss/create', ['as' => 'admin.departmentBoss.create', 'uses' => 'Admin\DepartmentbossController@create']);
        Route::get('/admin/departmentboss/show/{id}', ['as' => 'admin.departmentBoss.show', 'uses' => 'Admin\DepartmentbossController@show']);
        Route::post('/admin/departmentboss/update/{id}', ['as' => 'admin.departmentBoss.update', 'uses' => 'Admin\DepartmentbossController@update']);
        Route::delete('/admin/departmentboss/destroy/{id}', ['as' => 'admin.departmentBoss.destroy', 'uses' => 'Admin\DepartmentbossController@destroy']);
        Route::get('/admin/departmentboss/edit/{id}', ['as' => 'admin.departmentBoss.edit', 'uses' => 'Admin\DepartmentbossController@edit']);
        /** End department   */

        /** dormitório   */
        Route::get('/admin/bedroom/list', ['as' => 'admin.bedroom.list', 'uses' => 'Admin\BedroomController@index']);
        Route::post('/admin/bedroom', ['as' => 'admin.bedroom.store', 'uses' => 'Admin\BedroomController@store']);
        Route::get('/admin/bedroom/create', ['as' => 'admin.bedroom.create', 'uses' => 'Admin\BedroomController@create']);
        Route::get('/admin/bedroom/show/{id}', ['as' => 'admin.bedroom.show', 'uses' => 'Admin\BedroomController@show']);
        Route::post('/admin/bedroom/update/{id}', ['as' => 'admin.bedroom.update', 'uses' => 'Admin\BedroomController@update']);
        Route::delete('/admin/bedroom/destroy/{id}', ['as' => 'admin.bedroom.destroy', 'uses' => 'Admin\BedroomController@destroy']);
        Route::get('/admin/bedroom/edit/{id}', ['as' => 'admin.bedroom.edit', 'uses' => 'Admin\BedroomController@edit']);
        /** End dormitório   */

        /** Transport   */
        Route::get('/admin/transport/list', ['as' => 'admin.transport.list', 'uses' => 'Admin\TransportController@index']);
        Route::post('/admin/transport', ['as' => 'admin.transport.store', 'uses' => 'Admin\TransportController@store']);
        Route::get('/admin/transport/create', ['as' => 'admin.transport.create', 'uses' => 'Admin\TransportController@create']);
        Route::get('/admin/transport/show/{id}', ['as' => 'admin.transport.show', 'uses' => 'Admin\TransportController@show']);
        Route::post('/admin/transport/update/{id}', ['as' => 'admin.transport.update', 'uses' => 'Admin\TransportController@update']);
        Route::delete('/admin/transport/destroy/{id}', ['as' => 'admin.transport.destroy', 'uses' => 'Admin\TransportController@destroy']);
        Route::get('/admin/transport/edit/{id}', ['as' => 'admin.transport.edit', 'uses' => 'Admin\TransportController@edit']);
        /** End Transport   */
    });

    //registrador
    Route::middleware(['registrador'])->group(function () {
        /** Student   */
        Route::get('/admin/student/list', ['as' => 'admin.student.list', 'uses' => 'Admin\StudentController@index']);
        Route::post('/admin/student', ['as' => 'admin.student.store', 'uses' => 'Admin\StudentController@store']);
        Route::get('/admin/student/create', ['as' => 'admin.student.create', 'uses' => 'Admin\StudentController@create']);
        Route::get('/admin/student/show/{id}', ['as' => 'admin.student.show', 'uses' => 'Admin\StudentController@show']);
        Route::post('/admin/student/update/{id}', ['as' => 'admin.student.update', 'uses' => 'Admin\StudentController@update']);
        Route::delete('/admin/student/destroy/{id}', ['as' => 'admin.student.destroy', 'uses' => 'Admin\StudentController@destroy']);
        Route::get('/admin/student/edit/{id}', ['as' => 'admin.student.edit', 'uses' => 'Admin\StudentController@edit']);
        /** End Student   */

        /** Teacher   */

        Route::get('/admin/teacher/list', ['as' => 'admin.teacher.list', 'uses' => 'Admin\TeacherController@index']);
        Route::post('/admin/teacher', ['as' => 'admin.teacher.store', 'uses' => 'Admin\TeacherController@store']);
        Route::get('/admin/teacher/create', ['as' => 'admin.teacher.create', 'uses' => 'Admin\TeacherController@create']);
        Route::get('/admin/teacher/show/{id}', ['as' => 'admin.teacher.show', 'uses' => 'Admin\TeacherController@show']);
        Route::post('/admin/teacher/update/{id}', ['as' => 'admin.teacher.update', 'uses' => 'Admin\TeacherController@update']);
        Route::delete('/admin/teacher/destroy/{id}', ['as' => 'admin.teacher.destroy', 'uses' => 'Admin\TeacherController@destroy']);
        Route::get('/admin/teacher/edit/{id}', ['as' => 'admin.teacher.edit', 'uses' => 'Admin\TeacherController@edit']);

        /** End Teacher   */

        /** residencia do professor   */
        Route::get('/admin/residence/list', ['as' => 'admin.residence.list', 'uses' => 'Admin\ResidenceController@index']);
        Route::post('/admin/residence', ['as' => 'admin.residence.store', 'uses' => 'Admin\ResidenceController@store']);
        Route::get('/admin/residence/create', ['as' => 'admin.residence.create', 'uses' => 'Admin\ResidenceController@create']);
        Route::get('/admin/residence/show/{id}', ['as' => 'admin.residence.show', 'uses' => 'Admin\ResidenceController@show']);
        Route::post('/admin/residence/update/{id}', ['as' => 'admin.residence.update', 'uses' => 'Admin\ResidenceController@update']);
        Route::delete('/admin/residence/destroy/{id}', ['as' => 'admin.residence.destroy', 'uses' => 'Admin\ResidenceController@destroy']);
        Route::get('/admin/residence/edit/{id}', ['as' => 'admin.residence.edit', 'uses' => 'Admin\ResidenceController@edit']);
        /** End residencia do professor   */
        /** Classe   */

        Route::get('/admin/classe/list', ['as' => 'admin.classe.list', 'uses' => 'Admin\ClasseController@index']);
        Route::post('/admin/classe', ['as' => 'admin.classe.store', 'uses' => 'Admin\ClasseController@store']);
        Route::get('/admin/classe/create', ['as' => 'admin.classe.create', 'uses' => 'Admin\ClasseController@create']);
        Route::get('/admin/classe/show/{id}', ['as' => 'admin.classe.show', 'uses' => 'Admin\ClasseController@show']);
        Route::post('/admin/classe/update/{id}', ['as' => 'admin.classe.update', 'uses' => 'Admin\ClasseController@update']);
        Route::delete('/admin/classe/destroy/{id}', ['as' => 'admin.classe.destroy', 'uses' => 'Admin\ClasseController@destroy']);
        Route::get('/admin/classe/edit/{id}', ['as' => 'admin.classe.edit', 'uses' => 'Admin\ClasseController@edit']);

        /** End Classe  */

        /** Course   */
        Route::get('/admin/course/list', ['as' => 'admin.course.list', 'uses' => 'Admin\CourseController@index']);
        Route::post('/admin/course', ['as' => 'admin.course.store', 'uses' => 'Admin\CourseController@store']);
        Route::get('/admin/course/create', ['as' => 'admin.course.create', 'uses' => 'Admin\CourseController@create']);
        Route::get('/admin/course/show/{id}', ['as' => 'admin.course.show', 'uses' => 'Admin\CourseController@show']);
        Route::post('/admin/course/update/{id}', ['as' => 'admin.course.update', 'uses' => 'Admin\CourseController@update']);
        Route::delete('/admin/course/destroy/{id}', ['as' => 'admin.course.destroy', 'uses' => 'Admin\CourseController@destroy']);
        Route::get('/admin/course/edit/{id}', ['as' => 'admin.course.edit', 'uses' => 'Admin\CourseController@edit']);

        /** End Course   */

        /** Subject   */

        Route::get('/admin/subject/list', ['as' => 'admin.subject.list', 'uses' => 'Admin\SubjectController@index']);
        Route::post('/admin/subject', ['as' => 'admin.subject.store', 'uses' => 'Admin\SubjectController@store']);
        Route::get('/admin/subject/create', ['as' => 'admin.subject.create', 'uses' => 'Admin\SubjectController@create']);
        Route::get('/admin/subject/show/{id}', ['as' => 'admin.subject.show', 'uses' => 'Admin\SubjectController@show']);
        Route::post('/admin/subject/update/{id}', ['as' => 'admin.subject.update', 'uses' => 'Admin\SubjectController@update']);
        Route::delete('/admin/subject/destroy/{id}', ['as' => 'admin.subject.destroy', 'uses' => 'Admin\SubjectController@destroy']);
        Route::get('/admin/subject/edit/{id}', ['as' => 'admin.subject.edit', 'uses' => 'Admin\SubjectController@edit']);
        /** End Subject   */

        /** Grade   */
        Route::get('/admin/grade/list', ['as' => 'admin.grade.list', 'uses' => 'Admin\GradeController@index']);
        Route::post('/admin/grade', ['as' => 'admin.grade.store', 'uses' => 'Admin\GradeController@store']);
        Route::get('/admin/grade/create', ['as' => 'admin.grade.create', 'uses' => 'Admin\GradeController@create']);
        Route::get('/admin/grade/show/{id}', ['as' => 'admin.grade.show', 'uses' => 'Admin\GradeController@show']);
        Route::post('/admin/grade/update/{id}', ['as' => 'admin.grade.update', 'uses' => 'Admin\GradeController@update']);
        Route::delete('/admin/grade/destroy/{id}', ['as' => 'admin.grade.destroy', 'uses' => 'Admin\GradeController@destroy']);
        Route::get('/admin/grade/edit/{id}', ['as' => 'admin.grade.edit', 'uses' => 'Admin\GradeController@edit']);
        /** End Grade   */

        /** Schoolyear   */
        Route::get('/admin/schoolyear/list', ['as' => 'admin.schoolyear.list', 'uses' => 'Admin\SchoolyearController@index']);
        Route::post('/admin/schoolyear', ['as' => 'admin.schoolyear.store', 'uses' => 'Admin\SchoolyearController@store']);
        Route::get('/admin/schoolyear/create', ['as' => 'admin.schoolyear.create', 'uses' => 'Admin\SchoolyearController@create']);
        Route::get('/admin/schoolyear/show/{id}', ['as' => 'admin.schoolyear.show', 'uses' => 'Admin\SchoolyearController@show']);
        Route::post('/admin/schoolyear/update/{id}', ['as' => 'admin.schoolyear.update', 'uses' => 'Admin\SchoolyearController@update']);
        Route::delete('/admin/schoolyear/destroy/{id}', ['as' => 'admin.schoolyear.destroy', 'uses' => 'Admin\SchoolyearController@destroy']);
        Route::get('/admin/schoolyear/edit/{id}', ['as' => 'admin.schoolyear.edit', 'uses' => 'Admin\SchoolyearController@edit']);
        /** End Schoolyear   */

        /** rule   */
        Route::get('/admin/rule/list', ['as' => 'admin.rule.list', 'uses' => 'Admin\RuleController@index']);
        Route::post('/admin/rule', ['as' => 'admin.rule.store', 'uses' => 'Admin\RuleController@store']);
        Route::get('/admin/rule/create', ['as' => 'admin.rule.create', 'uses' => 'Admin\RuleController@create']);
        Route::get('/admin/rule/show/{id}', ['as' => 'admin.rule.show', 'uses' => 'Admin\RuleController@show']);
        Route::post('/admin/rule/update/{id}', ['as' => 'admin.rule.update', 'uses' => 'Admin\RuleController@update']);
        Route::delete('/admin/rule/destroy/{id}', ['as' => 'admin.rule.destroy', 'uses' => 'Admin\RuleController@destroy']);
        Route::get('/admin/rule/edit/{id}', ['as' => 'admin.rule.edit', 'uses' => 'Admin\RuleController@edit']);
        /** End rule   */
    });



    /** ============================================================================== */
    /** |                                                                            | */
    /** |                            Independent Tables                              | */
    /** |                                                                            | */
    /** ============================================================================== */
    //gerenciador
    Route::middleware(['gerenciador'])->group(function () {
        /** TeacherSchoolyear */

        Route::get('/admin/teacherSchoolyear/list', ['as' => 'admin.teacherSchoolyear.list', 'uses' => 'Admin\TeacherSchoolyearController@index']);
        Route::post('/admin/teacherSchoolyear', ['as' => 'admin.teacherSchoolyear.store', 'uses' => 'Admin\TeacherSchoolyearController@store']);
        Route::get('/admin/teacherSchoolyear/create', ['as' => 'admin.teacherSchoolyear.create', 'uses' => 'Admin\TeacherSchoolyearController@create']);
        Route::get('/admin/teacherSchoolyear/show/{id}', ['as' => 'admin.teacherSchoolyear.show', 'uses' => 'Admin\TeacherSchoolyearController@show']);
        Route::post('/admin/teacherSchoolyear/update/{id}', ['as' => 'admin.teacherSchoolyear.update', 'uses' => 'Admin\TeacherSchoolyearController@update']);
        Route::delete('/admin/teacherSchoolyear/destroy/{id}', ['as' => 'admin.teacherSchoolyear.destroy', 'uses' => 'Admin\TeacherSchoolyearController@destroy']);
        Route::get('/admin/teacherSchoolyear/edit/{id}', ['as' => 'admin.teacherSchoolyear.edit', 'uses' => 'Admin\TeacherSchoolyearController@edit']);

        /** End TeacherSchoolyear */

        /** courseSubjectGrade */

        Route::get('/admin/courseSubjectGrade/list', ['as' => 'admin.courseSubjectGrade.list', 'uses' => 'Admin\CourseSubjectGradeController@index']);
        Route::post('/admin/courseSubjectGrade', ['as' => 'admin.courseSubjectGrade.store', 'uses' => 'Admin\CourseSubjectGradeController@store']);
        Route::get('/admin/courseSubjectGrade/create', ['as' => 'admin.courseSubjectGrade.create', 'uses' => 'Admin\CourseSubjectGradeController@create']);
        Route::get('/admin/courseSubjectGrade/show/{id}', ['as' => 'admin.courseSubjectGrade.show', 'uses' => 'Admin\CourseSubjectGradeController@show']);
        Route::post('/admin/courseSubjectGrade/update/{id}', ['as' => 'admin.courseSubjectGrade.update', 'uses' => 'Admin\CourseSubjectGradeController@update']);
        Route::delete('/admin/courseSubjectGrade/destroy/{id}', ['as' => 'admin.courseSubjectGrade.destroy', 'uses' => 'Admin\CourseSubjectGradeController@destroy']);
        Route::get('/admin/courseSubjectGrade/edit/{id}', ['as' => 'admin.courseSubjectGrade.edit', 'uses' => 'Admin\CourseSubjectGradeController@edit']);

        /** End courseSubjectGrade */

        /** courseClasseGradeStudentSchoolyear */

        Route::get('/admin/courseClasseGradeStudentSchoolyear/list', ['as' => 'admin.courseClasseGradeStudentSchoolyear.list', 'uses' => 'Admin\CourseClasseGradeStudentSchoolyearController@index']);
        Route::post('/admin/courseClasseGradeStudentSchoolyear', ['as' => 'admin.courseClasseGradeStudentSchoolyear.store', 'uses' => 'Admin\CourseClasseGradeStudentSchoolyearController@store']);
        Route::get('/admin/courseClasseGradeStudentSchoolyear/create', ['as' => 'admin.courseClasseGradeStudentSchoolyear.create', 'uses' => 'Admin\CourseClasseGradeStudentSchoolyearController@create']);
        Route::get('/admin/courseClasseGradeStudentSchoolyear/show/{id}', ['as' => 'admin.courseClasseGradeStudentSchoolyear.show', 'uses' => 'Admin\CourseClasseGradeStudentSchoolyearController@show']);
        Route::post('/admin/courseClasseGradeStudentSchoolyear/update/{id}', ['as' => 'admin.courseClasseGradeStudentSchoolyear.update', 'uses' => 'Admin\CourseClasseGradeStudentSchoolyearController@update']);
        Route::delete('/admin/courseClasseGradeStudentSchoolyear/destroy/{id}', ['as' => 'admin.courseClasseGradeStudentSchoolyear.destroy', 'uses' => 'Admin\CourseClasseGradeStudentSchoolyearController@destroy']);
        Route::get('/admin/courseClasseGradeStudentSchoolyear/edit/{id}', ['as' => 'admin.courseClasseGradeStudentSchoolyear.edit', 'uses' => 'Admin\CourseClasseGradeStudentSchoolyearController@edit']);

        /** Get Method */

        Route::get('/get/student/{nProcess}', ['as' => 'get.student', 'uses' => 'Admin\CourseClasseGradeStudentSchoolyearController@getStudent']);
        Route::get('/get/registration/{nProcess}', ['as' => 'get.registration', 'uses' => 'Admin\CourseClasseGradeStudentSchoolyearController@getRegistration']);
        Route::get('/get/nprocess/{student}', ['as' => 'get.nProcess', 'uses' => 'Admin\CourseClasseGradeStudentSchoolyearController@getNProcess']);

        /** End courseClasseGradeStudentSchoolyear */

        /** teacherSubjectClasseRuleSchoolyear */

        Route::get('/admin/teacherSubjectClasseRuleSchoolyear/list', ['as' => 'admin.teacherSubjectClasseRuleSchoolyear.list', 'uses' => 'Admin\TeacherSubjectClasseRuleSchoolyearController@index']);
        Route::post('/admin/teacherSubjectClasseRuleSchoolyear', ['as' => 'admin.teacherSubjectClasseRuleSchoolyear.store', 'uses' => 'Admin\TeacherSubjectClasseRuleSchoolyearController@store']);
        Route::get('/admin/teacherSubjectClasseRuleSchoolyear/create', ['as' => 'admin.teacherSubjectClasseRuleSchoolyear.create', 'uses' => 'Admin\TeacherSubjectClasseRuleSchoolyearController@create']);
        Route::get('/admin/teacherSubjectClasseRuleSchoolyear/show/{id}', ['as' => 'admin.teacherSubjectClasseRuleSchoolyear.show', 'uses' => 'Admin\TeacherSubjectClasseRuleSchoolyearController@show']);
        Route::post('/admin/teacherSubjectClasseRuleSchoolyear/update/{id}', ['as' => 'admin.teacherSubjectClasseRuleSchoolyear.update', 'uses' => 'Admin\TeacherSubjectClasseRuleSchoolyearController@update']);
        Route::delete('/admin/teacherSubjectClasseRuleSchoolyear/destroy/{id}', ['as' => 'admin.teacherSubjectClasseRuleSchoolyear.destroy', 'uses' => 'Admin\TeacherSubjectClasseRuleSchoolyearController@destroy']);
        Route::get('/admin/teacherSubjectClasseRuleSchoolyear/edit/{id}', ['as' => 'admin.teacherSubjectClasseRuleSchoolyear.edit', 'uses' => 'Admin\TeacherSubjectClasseRuleSchoolyearController@edit']);

        /** End teacherSubjectClasseRuleSchoolyear */

        /** Exam */

        Route::get('/admin/exam/list', ['as' => 'admin.exam.list', 'uses' => 'Admin\TeacherClasseCourseGradeSubjetcController@index']);
        Route::post('/admin/exam', ['as' => 'admin.exam.store', 'uses' => 'Admin\TeacherClasseCourseGradeSubjetcController@store']);
        Route::get('/admin/exam/create', ['as' => 'admin.exam.create', 'uses' => 'Admin\TeacherClasseCourseGradeSubjetcController@create']);
        Route::get('/admin/exam/show/{id}', ['as' => 'admin.exam.show', 'uses' => 'Admin\TeacherClasseCourseGradeSubjetcController@show']);
        Route::post('/admin/exam/update/{id}', ['as' => 'admin.exam.update', 'uses' => 'Admin\TeacherClasseCourseGradeSubjetcController@update']);
        Route::delete('/admin/exam/destroy/{id}', ['as' => 'admin.exam.destroy', 'uses' => 'Admin\TeacherClasseCourseGradeSubjetcController@destroy']);
        Route::get('/admin/exam/edit/{id}', ['as' => 'admin.exam.edit', 'uses' => 'Admin\TeacherClasseCourseGradeSubjetcController@edit']);

        /** End Exam */

        /** Ativities */

        Route::get('/admin/ativities/list', ['as' => 'admin.ativities.list', 'uses' => 'Admin\AtivitieController@index']);
        Route::post('/admin/ativities', ['as' => 'admin.ativities.store', 'uses' => 'Admin\AtivitieController@store']);
        Route::get('/admin/ativities/create', ['as' => 'admin.ativities.create', 'uses' => 'Admin\AtivitieController@create']);
        Route::get('/admin/ativities/show/{id}', ['as' => 'admin.ativities.show', 'uses' => 'Admin\AtivitieController@show']);
        Route::post('/admin/ativities/update/{id}', ['as' => 'admin.ativities.update', 'uses' => 'Admin\AtivitieController@update']);
        Route::delete('/admin/ativities/destroy/{id}', ['as' => 'admin.ativities.destroy', 'uses' => 'Admin\AtivitieController@destroy']);
        Route::get('/admin/ativities/edit/{id}', ['as' => 'admin.ativities.edit', 'uses' => 'Admin\AtivitieController@edit']);

        /** End Ativities */

        /** Tuitions */

        Route::get('/admin/tuition/list', ['as' => 'admin.tuition.list', 'uses' => 'Admin\TuitionController@index']);
        Route::post('/admin/tuition', ['as' => 'admin.tuition.store', 'uses' => 'Admin\TuitionController@store']);
        Route::get('/admin/tuition/create', ['as' => 'admin.tuition.create', 'uses' => 'Admin\TuitionController@create']);
        Route::get('/admin/tuition/show/{id}', ['as' => 'admin.tuition.show', 'uses' => 'Admin\TuitionController@show']);
        Route::post('/admin/tuition/update/{id}', ['as' => 'admin.tuition.update', 'uses' => 'Admin\TuitionController@update']);
        Route::delete('/admin/tuition/destroy/{id}', ['as' => 'admin.tuition.destroy', 'uses' => 'Admin\TuitionController@destroy']);
        Route::get('/admin/tuition/edit/{id}', ['as' => 'admin.tuition.edit', 'uses' => 'Admin\TuitionController@edit']);

        /** End Tuitions */

        /** TransportPay */

        Route::get('/admin/transportPay/list', ['as' => 'admin.transportPay.list', 'uses' => 'Admin\TransportPayController@index']);
        Route::post('/admin/transportPay', ['as' => 'admin.transportPay.store', 'uses' => 'Admin\TransportPayController@store']);
        Route::get('/admin/transportPay/create', ['as' => 'admin.transportPay.create', 'uses' => 'Admin\TransportPayController@create']);
        Route::get('/admin/transportPay/show/{id}', ['as' => 'admin.transportPay.show', 'uses' => 'Admin\TransportPayController@show']);
        Route::post('/admin/transportPay/update/{id}', ['as' => 'admin.transportPay.update', 'uses' => 'Admin\TransportPayController@update']);
        Route::delete('/admin/transportPay/destroy/{id}', ['as' => 'admin.transportPay.destroy', 'uses' => 'Admin\TransportPayController@destroy']);
        Route::get('/admin/transportPay/edit/{id}', ['as' => 'admin.transportPay.edit', 'uses' => 'Admin\TransportPayController@edit']);

        /** End TransportPay */

        /** bedroomStudent */

        Route::get('/admin/bedroomStudent/list', ['as' => 'admin.bedroomStudent.list', 'uses' => 'Admin\BedroomStudentController@index']);
        Route::post('/admin/bedroomStudent', ['as' => 'admin.bedroomStudent.store', 'uses' => 'Admin\BedroomStudentController@store']);
        Route::get('/admin/bedroomStudent/create', ['as' => 'admin.bedroomStudent.create', 'uses' => 'Admin\BedroomStudentController@create']);
        Route::get('/admin/bedroomStudent/show/{id}', ['as' => 'admin.bedroomStudent.show', 'uses' => 'Admin\BedroomStudentController@show']);
        Route::post('/admin/bedroomStudent/update/{id}', ['as' => 'admin.bedroomStudent.update', 'uses' => 'Admin\BedroomStudentController@update']);
        Route::delete('/admin/bedroomStudent/destroy/{id}', ['as' => 'admin.bedroomStudent.destroy', 'uses' => 'Admin\BedroomStudentController@destroy']);
        Route::get('/admin/bedroomStudent/edit/{id}', ['as' => 'admin.bedroomStudent.edit', 'uses' => 'Admin\BedroomStudentController@edit']);

        /** End bedroomStudent */

        /** Print Routes */

        Route::get('/pdf/registration/', ['as' => 'pdf.registration', 'uses' => 'Admin\PDFController@registration']);
        Route::get('/pdf/contract/', ['as' => 'pdf.contract', 'uses' => 'Admin\PDFController@contract']);
        Route::get('/pdf/exam', ['as' => 'pdf.exam', 'uses' => 'Admin\PDFController@exam']);
        Route::get('/pdf/ativitie', ['as' => 'pdf.ativitie', 'uses' => 'Admin\PDFController@ativitie']);
        Route::get('/pdf/student/', ['as' => 'pdf.student', 'uses' => 'Admin\PDFController@student']);
        Route::get('/pdf/bedroomStudent/', ['as' => 'pdf.bedroomStudent', 'uses' => 'Admin\PDFController@bedroomStudent']);
        Route::get('/pdf/tuition/', ['as' => 'pdf.tuition', 'uses' => 'Admin\PDFController@tuition']);
        Route::get('/pdf/tuition/student/{id}', ['as' => 'pdf.tuition.student', 'uses' => 'Admin\PDFController@tuitionStudent']);

        Route::get('/pdf/transportPay/', ['as' => 'pdf.transportPay', 'uses' => 'Admin\PDFController@transportPay']);
        Route::get('/pdf/transportPay/student/{id}', ['as' => 'pdf.transportPay.student', 'uses' => 'Admin\PDFController@transportPayStudent']);

        Route::get('/pdf/transportdocumentation/{id}', ['as' => 'pdf.transportdocumentation', 'uses' => 'Admin\PDFController@transportDocumentation']);

        Route::get('/pdf/studentCard/{id}', ['as' => 'pdf.studentCard', 'uses' => 'Admin\PDFController@studentCard']);

        /** Print Routes */
    });
});
