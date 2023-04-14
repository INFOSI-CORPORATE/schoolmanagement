<div class="row">
    <div class="col-md-6">
        <select class="form-control" name="fk_teachers_id" id="fk_teachers_id">

            <option {{ isset($teacherSubject) ? '' : 'selected' }}>Escolha o Professor</option>
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ ($teacherSubject->teachers->id == $teacher->id ) ? 'selected' : '' }}>{{ $teacher->name }}</option>
            @endforeach

        </select>
    </div>

    <div class="col-md-6">
        <select class="form-control" name="fk_subjects_id" id="fk_subjects_id">
            <option {{ isset($teacherSubject) ? '' : 'selected' }}>Escolha a Disciplina</option>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}" {{ ($teacherSubject->subjects->id == $subject->id ) ? 'selected' : '' }}>{{ $subject->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($teacherSubject) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

