<div class="row">
    <div class="col-md-6 py-2">
        <label for="fk_courses_id">Escolha o Curso</label>
        <select class="form-control" name="fk_courses_id" id="fk_courses_id">
            <option {{ isset($courseSubjectGrade) ? '' : 'selected' }}></option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}" {{ (isset($courseSubjectGrade) && $courseSubjectGrade->courses->id == $course->id ) ? 'selected' : ((old('fk_courses_id') == $course->id) ? 'selected' : '') }}>{{ $course->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_grades_id">Escolha a Classe</label>
        <select class="form-control" name="fk_grades_id" id="fk_grades_id">
            <option {{ isset($courseSubjectGrade) ? '' : 'selected' }}></option>
            @foreach ($grades as $grade)
                <option value="{{ $grade->id }}" {{ (isset($courseSubjectGrade) && $courseSubjectGrade->grades->id == $grade->id ) ? 'selected' : ((old('fk_grades_id') == $grade->id) ? 'selected' : '') }}>{{ $grade->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_subjects_id">Escolha a Disciplina</label>
        <select class="form-control" name="fk_subjects_id" id="fk_subjects_id">
            <option {{ isset($courseSubjectGrade) ? '' : 'selected' }}></option>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}" {{ (isset($courseSubjectGrade) && $courseSubjectGrade->subjects->id == $subject->id ) ? 'selected' : ((old('fk_subjects_id') == $subject->id) ? 'selected' : '') }}>{{ $subject->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2"></div>

    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-md btn-primary shadow-sm text-end">{{ isset($courseSubjectGrade) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

