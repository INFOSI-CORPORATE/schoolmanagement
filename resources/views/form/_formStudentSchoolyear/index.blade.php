<div class="row">
    <div class="col-md-6">
        <select class="form-control" name="fk_students_id" id="fk_students_id">

            <option {{ isset($studentSchoolyear) ? '' : 'selected' }}>Escolha o Aluno</option>
            @foreach ($students as $student)
                <option value="{{ $student->id }}" {{ ($studentSchoolyear->students->id == $student->id ) ? 'selected' : '' }}>{{ $student->name }}</option>
            @endforeach

        </select>
    </div>

    <div class="col-md-6">
        <select class="form-control" name="fk_schoolyears_id" id="fk_schoolyears_id">
            <option {{ isset($studentSchoolyear) ? '' : 'selected' }}>Escolha o Ano Lectivo</option>
            @foreach ($schoolyears as $schoolyear)
                <option value="{{ $schoolyear->id }}" {{ ($studentSchoolyear->schoolyears->id == $schoolyear->id ) ? 'selected' : '' }}>{{ $schoolyear->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($studentSchoolyear) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

