<div class="row">
    <div class="col-md-6 py-2">
        <label for="fk_students_id">Escolha Aluno</label>
        <select class="form-control" name="fk_students_id" id="fk_students_id">
            <option {{ isset($courseClasseGradeStudentSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($students as $student)
                <option value="{{ $student->id }}" {{ (isset($courseClasseGradeStudentSchoolyear) && $courseClasseGradeStudentSchoolyear->students->id == $student->id ) ? 'selected' : '' }}>{{ $student->name }}</option>
            @endforeach

        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_courses_id">Escolha o Curso</label>
        <select class="form-control" name="fk_courses_id" id="fk_courses_id">
            <option {{ isset($courseClasseGradeStudentSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}" {{ (isset($courseClasseGradeStudentSchoolyear) && $courseClasseGradeStudentSchoolyear->courses->id == $course->id ) ? 'selected' : '' }}>{{ $course->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_classes_id">Escolha a Turma</label>
        <select class="form-control" name="fk_classes_id" id="fk_classes_id">
            <option {{ isset($courseClasseGradeStudentSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($classes as $classe)
                <option value="{{ $classe->id }}" {{ (isset($courseClasseGradeStudentSchoolyear) && $courseClasseGradeStudentSchoolyear->classes->id == $classe->id ) ? 'selected' : '' }}>{{ $classe->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_grades_id">Escolha a Classe</label>
        <select class="form-control" name="fk_grades_id" id="fk_grades_id">
            <option {{ isset($courseClasseGradeStudentSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($grades as $grade)
                <option value="{{ $grade->id }}" {{ (isset($courseClasseGradeStudentSchoolyear) && $courseClasseGradeStudentSchoolyear->grades->id == $grade->id ) ? 'selected' : '' }}>{{ $grade->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_grades_id">Escolha o Ano lectivo</label>
        <select class="form-control" name="fk_schoolyears_id" id="fk_schoolyears_id">
            <option {{ isset($courseClasseGradeStudentSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($schoolyears as $schoolyear)
                <option value="{{ $schoolyear->id }}" {{ (isset($courseClasseGradeStudentSchoolyear) && $courseClasseGradeStudentSchoolyear->grades->id == $schoolyear->id ) ? 'selected' : '' }}>{{ $schoolyear->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6 py-2">
        <label for="season">Escolha o turno</label>
        <select class="form-control" name="season" id="season">
            <option></option>
            <option value="Manhã" {{ isset($courseClasseGradeStudentSchoolyear) && $courseClasseGradeStudentSchoolyear->season == 'Manhã' ? 'selected' : '' }}>Manhã</option>
            <option value="tarde" {{ isset($courseClasseGradeStudentSchoolyear) && $courseClasseGradeStudentSchoolyear->season == 'tarde' ? 'selected' : '' }}>tarde</option>
            <option value="Noite" {{ isset($courseClasseGradeStudentSchoolyear) && $courseClasseGradeStudentSchoolyear->season == 'Noite' ? 'selected' : '' }}>Noite</option>
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($courseClasseGradeStudentSchoolyear) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

