<div class="row">

    <div class="col-md-6 py-2">
        <label for="name">Nome do Exame</label>
        <input class="form-control" type="text" name="name" id="duration"
            placeholder="Digita a duração do exame" required value={{ isset($exam->name) ? $exam->duration : old('name') }}>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_teachers_id">Escolha Professor</label>
        <select class="form-control" name="fk_teachers_id" id="fk_teachers_id" required>
            <option {{ isset($exam) ? '' : 'selected' }}></option>
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->teachers->id }}"
                    {{ isset($exam) && $exam->teachers->id == $teacher->teachers->id ? 'selected' : ((old('fk_teachers_id') == $teacher->id) ? 'selected' : '') }}>{{ $teacher->teachers->name }}
                </option>
            @endforeach

        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_classes_id">Escolha a Turma</label>
        <select class="form-control" name="fk_classes_id" id="fk_classes_id" required>
            <option {{ isset($exam) ? '' : 'selected' }}></option>
            @foreach ($classes as $classe)
                <option value="{{ $classe->id }}"
                    {{ isset($exam) && $exam->classes->id == $classe->id ? 'selected' : ((old('fk_classes_id') == $classe->id) ? 'selected' : '') }}>{{ $classe->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_courses_id">Escolha a Curso</label>
        <select class="form-control" name="fk_courses_id" id="fk_courses_id" required>
            <option {{ isset($exam) ? '' : 'selected' }}></option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}"
                    {{ isset($exam) && $exam->courses->id == $course->id ? 'selected' : ((old('fk_courses_id') == $course->id) ? 'selected' : '') }}>{{ $course->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_grades_id">Escolha a Classe</label>
        <select class="form-control" name="fk_grades_id" id="fk_grades_id" required>
            <option {{ isset($exam) ? '' : 'selected' }}></option>
            @foreach ($grades as $grade)
                <option value="{{ $grade->id }}"
                    {{ isset($exam) && $exam->grades->id == $grade->id ? 'selected' : ((old('fk_grades_id') == $grade->id) ? 'selected' : '') }}>{{ $grade->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_subjects_id">Escolha o Disciplina</label>
        <select class="form-control" name="fk_subjects_id" id="fk_subjects_id" required>
            <option {{ isset($exam) ? '' : 'selected' }}></option>
            @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}"
                    {{ isset($exam) && $exam->subjects->id == $subject->id ? 'selected' : ((old('fk_subjects_id') == $subject->id) ? 'selected' : '') }}>
                    {{ $subject->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="season">Escolha o período</label>
        <select class="form-control" name="season" id="season" required>
            <option></option>
            <option value="Manhã" {{ isset($exam) && $exam->season == 'Manhã' ? 'selected' : ((old('season') == 'Manhã') ? 'selected' : '') }}>Manhã</option>
            <option value="tarde" {{ isset($exam) && $exam->season == 'tarde' ? 'selected' : ((old('season') == 'tarde') ? 'selected' : '') }}>tarde</option>
            <option value="Noite" {{ isset($exam) && $exam->season == 'Noite' ? 'selected' : ((old('season') == 'Noite') ? 'selected' : '') }}>Noite</option>
        </select>
    </div>


    <div class="col-md-6 py-2">
        <label for="start">Data de Exame</label>
        <input type="date" class="form-control" name="start" id="start" required
            value="{{ isset($exam->start) ? $exam->start : '' }}">
    </div>

    <div class="col-md-6 py-2">
        <label for="duration">Duração da Prova</label>
        <input class="form-control" type="text" name="duration" id="duration"
            placeholder="Digita a duração do exame" required value="{{ isset($exam->duration) ? $exam->duration : old('duration') }}">
    </div>

    <div class="col-md-6 py-2"></div>

    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($exam) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>


<script>

</script>