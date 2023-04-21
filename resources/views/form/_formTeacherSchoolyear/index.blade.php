<div class="row">
    <div class="col-md-6 py-2">
        <label for="fk_teachers_id">Escolha o Professor</label>
        <select class="form-control" name="fk_teachers_id" id="fk_teachers_id">
            <option {{ isset($teacherSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ (isset($teacherSchoolyear) && $teacherSchoolyear->teachers->id == $teacher->id ) ? 'selected' : '' }}>{{ $teacher->name }}</option>
            @endforeach

        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_schoolyears_id">Escolha o Ano Lectivo</label>
        <select class="form-control" name="fk_schoolyears_id" id="fk_schoolyears_id">
            <option {{ isset($teacherSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($schoolyears as $schoolyear)
                <option value="{{ $schoolyear->id }}" {{ (isset($teacherSchoolyear) && $teacherSchoolyear->schoolyears->id == $schoolyear->id ) ? 'selected' : '' }}>{{ $schoolyear->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($teacherSchoolyear) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

