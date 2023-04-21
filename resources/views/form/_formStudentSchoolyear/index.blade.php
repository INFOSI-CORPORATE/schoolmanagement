<div class="row">
    <div class="col-md-6 py-2">
        <label for="fk_students_id">Escolha o Aluno</label>
        <select class="form-control" name="fk_students_id" id="fk_students_id">
            <option {{ isset($studentSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($students as $student)
                <option value="{{ $student->id }}" {{ (isset($studentSchoolyear) && $studentSchoolyear->students->id == $student->id ) ? 'selected' : '' }}>{{ $student->name }}</option>
            @endforeach

        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_schoolyears_id">Escolha o Ano Lectivo</label>
        <select class="form-control" name="fk_schoolyears_id" id="fk_schoolyears_id">
            <option {{ isset($studentSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($schoolyears as $schoolyear)
                <option value="{{ $schoolyear->id }}" {{ (isset($studentSchoolyear) && $studentSchoolyear->schoolyears->id == $schoolyear->id ) ? 'selected' : '' }}>{{ $schoolyear->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($studentSchoolyear) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

