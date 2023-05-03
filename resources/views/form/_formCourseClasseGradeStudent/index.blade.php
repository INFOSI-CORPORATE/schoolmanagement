<div class="row">
    <div class="col-md-6 py-2">
        <label for="fk_students_id">Escolha Aluno</label>
        <select class="form-control" name="fk_students_id" id="fk_students_id" >
            <option {{ isset($courseClasseGradeStudent) ? '' : 'selected' }}></option>
            @foreach ($studentsSchoolyears as $studentSchoolyear)
                <option value="{{ $studentSchoolyear->students->id }}" {{ (isset($courseClasseGradeStudent) && $courseClasseGradeStudent->students->id == $studentSchoolyear->students->id ) ? 'selected' : '' }}>{{ $studentSchoolyear->students->name }}</option>
            @endforeach

        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_courses_id">Escolha o Curso</label>
        <select class="form-control" name="fk_courses_id" id="fk_courses_id">
            <option {{ isset($courseClasseGradeStudent) ? '' : 'selected' }}></option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}" {{ (isset($courseClasseGradeStudent) && $courseClasseGradeStudent->courses->id == $course->id ) ? 'selected' : '' }}>{{ $course->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_classes_id">Escolha a Turma</label>
        <select class="form-control" name="fk_classes_id" id="fk_classes_id">
            <option {{ isset($courseClasseGradeStudent) ? '' : 'selected' }}></option>
            @foreach ($classes as $classe)
                <option value="{{ $classe->id }}" {{ (isset($courseClasseGradeStudent) && $courseClasseGradeStudent->classes->id == $classe->id ) ? 'selected' : '' }}>{{ $classe->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_grades_id">Escolha a Classe</label>
        <select class="form-control" name="fk_grades_id" id="fk_grades_id">
            <option {{ isset($courseClasseGradeStudent) ? '' : 'selected' }}></option>
            @foreach ($grades as $grade)
                <option value="{{ $grade->id }}" {{ (isset($courseClasseGradeStudent) && $courseClasseGradeStudent->grades->id == $grade->id ) ? 'selected' : '' }}>{{ $grade->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($courseClasseGradeStudent) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

