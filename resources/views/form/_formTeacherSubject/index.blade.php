<div class="row">
    <div class="col-md-6 py-2">
        <label for="fk_teachers_id">Escolha o Professor</label>
        <select class="form-control" name="fk_teachers_id" id="fk_teachers_id" >
            <option {{ isset($teacherSubject) ? '' : 'selected' }}></option>
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ (isset($teacherSubject) && $teacherSubject->teachers->id == $teacher->id ) ? 'selected' : '' }}>{{ $teacher->name }}</option>
            @endforeach

        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_subjects_id">Escolha a Disciplina</label>
        <select class="form-control" name="fk_subjects_id" id="fk_subjects_id">
            <option {{ isset($teacherSubject) ? '' : 'selected' }}></option>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}" {{ (isset($teacherSubject) && $teacherSubject->subjects->id == $subject->id ) ? 'selected' : '' }}>{{ $subject->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($teacherSubject) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

