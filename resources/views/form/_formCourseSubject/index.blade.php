<div class="row">
    <div class="col-md-6 py-2">
        <label for="fk_courses_id">Escolha o Curso</label>
        <select class="form-control" name="fk_courses_id" id="fk_courses_id">
            <option {{ isset($courseSubject) ? '' : 'selected' }}></option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}" {{ (isset($courseSubject) && $courseSubject->courses->id == $course->id ) ? 'selected' : '' }}>{{ $course->name }}</option>
            @endforeach

        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_subjects_id">Escolha a Disciplina</label>
        <select class="form-control" name="fk_subjects_id" id="fk_subjects_id">
            <option {{ isset($courseSubject) ? '' : 'selected' }}></option>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}" {{ (isset($courseSubject) && $courseSubject->subjects->id == $subject->id ) ? 'selected' : '' }}>{{ $subject->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($courseSubject) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

