<div class="row">
    <div class="col-md-6 py-2">
        <label for="fk_teachers_id">Escolha Professor</label>
        <select class="form-control" name="fk_teachers_id" id="fk_teachers_id">
            <option {{ isset($teacherSubjectClasseRuleSchoolyear) ? '' : 'selected'}}></option>
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ (isset($teacherSubjectClasseRuleSchoolyear) && $teacherSubjectClasseRuleSchoolyear->teachers->id == $teacher->id ) ? 'selected' :  ((old('fk_teachers_id') == $teacher->id) ? 'selected' : '')  }}>{{ $teacher->name }}</option>
            @endforeach

        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_subjects_id">Escolha o Disciplina</label>
        <select class="form-control" name="fk_subjects_id" id="fk_subjects_id">
            <option {{ isset($teacherSubjectClasseRuleSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}" {{ (isset($teacherSubjectClasseRuleSchoolyear) && $teacherSubjectClasseRuleSchoolyear->subjects->id == $subject->id ) ? 'selected' : ((old('fk_subjects_id') == $subject->id) ? 'selected' : '') }}>{{ $subject->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_classes_id">Escolha a Turma</label>
        <select class="form-control" name="fk_classes_id" id="fk_classes_id">
            <option {{ isset($teacherSubjectClasseRuleSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($classes as $classe)
                <option value="{{ $classe->id }}" {{ (isset($teacherSubjectClasseRuleSchoolyear) && $teacherSubjectClasseRuleSchoolyear->classes->id == $classe->id ) ? 'selected' : ((old('fk_classes_id') == $classe->id) ? 'selected' : '') }}>{{ $classe->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_rules_id">Escolha a Cargo</label>
        <select class="form-control" name="fk_rules_id" id="fk_rules_id">
            <option {{ isset($teacherSubjectClasseRuleSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($rules as $rule)
                <option value="{{ $rule->id }}" {{ (isset($teacherSubjectClasseRuleSchoolyear) && $teacherSubjectClasseRuleSchoolyear->rules->id == $rule->id ) ? 'selected' : ((old('fk_rules_id') == $rule->id) ? 'selected' : '') }}>{{ $rule->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_schoolyears_id">Escolha o Ano lectivo</label>
        <select class="form-control" name="fk_schoolyears_id" id="fk_schoolyears_id">
            <option {{ isset($teacherSubjectClasseRuleSchoolyear) ? '' : 'selected' }}></option>
            @foreach ($schoolyears as $schoolyear)
                <option value="{{ $schoolyear->id }}" {{ (isset($teacherSubjectClasseRuleSchoolyear) && $teacherSubjectClasseRuleSchoolyear->schoolyears->id == $schoolyear->id ) ? 'selected' : ((old('fk_schoolyears_id') == $schoolyear->id) ? 'selected' : '') }}>{{ $schoolyear->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6 py-2">
        <label for="season">Escolha o turno</label>
        <select class="form-control" name="season" id="season">
            <option></option>
            <option value="Manhã" {{ isset($teacherSubjectClasseRuleSchoolyear) && $teacherSubjectClasseRuleSchoolyear->season == 'Manhã' ? 'selected' : ((old('season') == 'Manhã') ? 'selected' : '') }}>Manhã</option>
            <option value="tarde" {{ isset($teacherSubjectClasseRuleSchoolyear) && $teacherSubjectClasseRuleSchoolyear->season == 'tarde' ? 'selected' : ((old('season') == 'tarde') ? 'selected' : '') }}>tarde</option>
            <option value="Noite" {{ isset($teacherSubjectClasseRuleSchoolyear) && $teacherSubjectClasseRuleSchoolyear->season == 'Noite' ? 'selected' : ((old('season') == 'Noite') ? 'selected' : '') }}>Noite</option>
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-md btn-primary shadow-sm text-end">{{ isset($teacherSubjectClasseRuleSchoolyear) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

