<div class="row">
    <div class="col-md-6 py-2">
        <div class="row">
            
            <div class="col-md-6">
                <label for="nProcess">Escolha Nº de Processo (Não obrigatório)</label>
                <input class="form-control" type="text" name="nProcess" id="nProcess" placeholder="Nº de Processo"
                    value="{{ old('nProcess') }}">
            </div>
            <div class="col-md-6">
                <label for="fk_students_id">Escolha Aluno</label>
                <select class="form-control" name="fk_students_id" id="fk_students_id" required>
                    <option {{ isset($tuition) ? '' : 'selected' }}></option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}"
                            {{ isset($tuition) && $tuition->students->id == $student->id ? 'selected' : (old('fk_students_id') == $student->id ? 'selected' : '') }}>
                            {{ $student->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12 text-muted">Poderá escolher pelo nome ou pelo nº de processo, as duas opções são válidas.</div>
        </div>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_courses_id">Escolha o Curso</label>
        <select class="form-control" name="fk_courses_id" id="fk_courses_id" required>
            <option {{ isset($tuition) ? '' : 'selected' }}></option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}"
                    {{ isset($tuition) && $tuition->courses->id == $course->id ? 'selected' : (old('fk_courses_id') == $course->id ? 'selected' : '') }}>
                    {{ $course->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_classes_id">Escolha o Mês</label>
        <select class="form-control" name="fk_classes_id" id="fk_classes_id" required>
            <option {{ isset($tuition) ? '' : 'selected' }}></option>
            @foreach ($classes as $classe)
                <option value="{{ $classe->id }}"
                    {{ isset($tuition) && $tuition->classes->id == $classe->id ? 'selected' : (old('fk_classes_id') == $classe->id ? 'selected' : '') }}>
                    {{ $classe->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_grades_id">Escolha a Classe</label>
        <select class="form-control" name="fk_grades_id" id="fk_grades_id" required>
            <option {{ isset($tuition) ? '' : 'selected' }}></option>
            @foreach ($grades as $grade)
                <option value="{{ $grade->id }}"
                    {{ isset($tuition) && $tuition->grades->id == $grade->id ? 'selected' : (old('fk_grades_id') == $grade->id ? 'selected' : '') }}>
                    {{ $grade->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="price">Digite o preço</label>
                <input class="form-control" type="text" name="price" id="price" placeholder="Preço do mês"
                    value="{{ old('price') }}">
    </div>

    <div class="col-md-6 py-2">
        <label for="season">Escolha o Mês</label>
        
        <select class="form-control" name="month" id="month" required>
            @php
            $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
            $selectedMonth = isset($tuition) ? $tuition->month : old('month');
            @endphp
            
            @foreach ($meses as $mes)
                <option value="{{ $mes }}" {{ $selectedMonth == $mes ? 'selected' : '' }}>
                    {{ $mes }}
                </option>
            @endforeach
        </select>
        

    </div>

    <div class="col-md-6 py-2">
        <label for="fk_schoolyears_id">Escolha o Ano lectivo</label>
        <select class="form-control" name="fk_schoolyears_id" id="fk_schoolyears_id">
            <option {{ isset($tuition) ? '' : 'selected' }}></option>
            @foreach ($schoolyears as $schoolyear)
                <option value="{{ $schoolyear->id }}" {{ (isset($tuition) && $tuition->schoolyears->id == $schoolyear->id ) ? 'selected' : ((old('fk_schoolyears_id') == $schoolyear->id) ? 'selected' : '') }}>{{ $schoolyear->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($tuition) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>

<script>
    var students = []; // variável global para armazenar os dados do select

    $(document).ready(function() {
        // Salva os dados do select na variável global
        $('#fk_students_id option').each(function() {
            students.push({
                value: $(this).val(),
                text: $(this).text()
            });
        });
    });

    // Preencher o nome

    $('#nProcess').on('input', function() {
        var nProcess = $(this).val();

        if (nProcess === '') { // Se o input estiver vazio, usa os dados armazenados na variável global
            $('#fk_students_id').empty();
            $.each(students, function(key, value) {
                $('#fk_students_id').append($('<option>').text(value.text).attr('value', value.value));
            });
        } else {
            $.ajax({
                url: '/get/student/' + nProcess,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#fk_students_id').empty();
                    if (data) {
                        $('#fk_students_id').append($('<option>').text(data.name).attr('value', data
                            .id));
                    } else {
                        $('#fk_students_id').append($('<option>').text('Nenhum aluno encontrado')
                            .attr('value', ''));
                    }
                }
            });
        }
    });

    // Preencher o id

    $('#fk_students_id').on('change', function() {
        var student = $(this).val();
    
        if (student === '') {
            $('#nProcess').empty();
            $.each(students, function(key, value) {
                $('#nProcess').append($('<input>').text(value.text).attr('value', value.value));
            });
        } else {
            $.ajax({
                url: '/get/nprocess/' + student,
                type: 'get',
                datatype: 'json',
                success: function(data) {
                    console.log(data);
                    $('#nProcess').empty();
    
                    $('#nProcess').val(data); 
                }
            });
        }
    });
</script>
