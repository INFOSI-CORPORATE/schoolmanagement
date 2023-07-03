<div class="row">
    <div class="col-md-8 py-2">
        <div class="row">

            <div class="col-md-4">
                <label for="nProcess">Escolha Nº de Processo</label>
                <input class="form-control" type="text" name="nProcess" id="nProcess" placeholder="Nº de Processo"
                    value="{{ old('nProcess') }}">
            </div>
            <div class="col-md-8">
                <label for="fk_students_id">Escolha Aluno</label>
                <select class="form-control" name="fk_students_id" id="fk_students_id" required>
                    <option {{ isset($bedroomStudent) ? '' : 'selected' }}></option>
                    @foreach ($registrations as $item)
                    <option value="{{ $item->students->id }}" {{ isset($bedroomStudent) && $bedroomStudent->students->id == $item->students->id ? 'selected' : (old('fk_students_id') == $item->students->id ? 'selected' : '') }}> {{ $item->students->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12 text-muted">Poderá escolher pelo nome ou pelo nº de processo, as duas opções são
                válidas.</div>
        </div>
    </div>

    <div class="col-md-4 py-2">
        <label for="fk_bedrooms_id">Escolha o Quarto</label>
        <select class="form-control" name="fk_bedrooms_id" id="fk_bedrooms_id" required>
            <option {{ isset($bedroomStudent) ? '' : 'selected' }}></option>
            @foreach ($bedrooms as $bedroom)
                <option value="{{ $bedroom->id }}"
                    {{ isset($bedroomStudent) && $bedroomStudent->bedrooms->id == $bedroom->id ? 'selected' : (old('fk_bedrooms_id') == $bedroom->id ? 'selected' : '') }}>
                    {{ $bedroom->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="fk_schoolyears_id">Escolha o Ano lectivo</label>
        <select class="form-control" name="fk_schoolyears_id" id="fk_schoolyears_id" required>
            <option {{ isset($bedroomStudent) ? '' : 'selected' }}></option>
            @foreach ($schoolyears as $schoolyear)
                <option value="{{ $schoolyear->id }}"
                    {{ isset($bedroomStudent) && $bedroomStudent->schoolyears->id == $schoolyear->id ? 'selected' : (old('fk_schoolyears_id') == $schoolyear->id ? 'selected' : '') }}>
                    {{ $schoolyear->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-2">
        <label for="state">Escolha o Estado</label>
        <input class="form-control" type="text" name="state" id="state" value="{{ isset($bedroomStudent) ? $bedroomStudent->state : old('state') }}">
        
    </div>

    <div class="col-md-12 py-2">
        <label for="details">Detalhes do Aluno ao Dormitório</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="5"
            placeholder="Digite os Detalhes do Quarto">{{ isset($bedroomStudent->description) ? $bedroomStudent->description : old('description') }}</textarea>
    </div>


    <div class="col-md-4 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($bedroomStudent) ? 'Atualizar' : 'Cadastrar' }}</button>
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
                url: '/get/registration/' + nProcess,
                type: 'GET',
                dataType: 'json',
                success: function(data) {

                    $('#fk_students_id').empty();
                    if (data) {
                        $('#fk_students_id').append($('<option>').text(data.name).attr('value', data
                            .id));
                    } else {
                        $('#fk_students_id').append($('<option>').text('Nenhum aluno encontrado neste processo')
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
