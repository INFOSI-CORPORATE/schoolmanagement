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
                    <option {{ isset($transportPay) ? '' : 'selected' }}></option>
                    @foreach ($registrations as $item)
                    <option value="{{ $item->students->id }}" {{ isset($transportPay) && $transportPay->students->id == $item->students->id ? 'selected' : (old('fk_students_id') == $item->students->id ? 'selected' : '') }}> {{ $item->students->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12 text-muted">Poderá escolher pelo nome ou pelo nº de processo, as duas opções são
                válidas.</div>
        </div>
    </div>

    <div class="col-md-4 py-2">
        <label for="fk_transports_id">Escolha o Transporte</label>
        <select class="form-control" name="fk_transports_id" id="fk_transports_id" required>
            <option {{ isset($transportPay) ? '' : 'selected' }}></option>
            @foreach ($transports as $transport)
                <option value="{{ $transport->id }}"
                    {{ isset($transportPay) && $transportPay->transports->id == $transport->id ? 'selected' : (old('fk_transports_id') == $transport->id ? 'selected' : '') }}>
                    {{ $transport->plate }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4 py-2">
        <label for="fk_schoolyears_id">Escolha o Ano lectivo</label>
        <select class="form-control" name="fk_schoolyears_id" id="fk_schoolyears_id" required>
            <option {{ isset($transportPay) ? '' : 'selected' }}></option>
            @foreach ($schoolyears as $schoolyear)
                <option value="{{ $schoolyear->id }}"
                    {{ isset($transportPay) && $transportPay->schoolyears->id == $schoolyear->id ? 'selected' : (old('fk_schoolyears_id') == $schoolyear->id ? 'selected' : '') }}>
                    {{ $schoolyear->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4 py-2">
        <label for="month">Escolha o Mês</label>

        <select class="form-control" name="month" id="month" required>
            <option {{ isset($transportPay) ? '' : 'selected' }}></option>
            @php
                $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
                $selectedMonth = isset($transportPay) ? $transportPay->month : old('month');
            @endphp

            @foreach ($meses as $mes)
                <option value="{{ $mes }}" {{ $selectedMonth == $mes ? 'selected' : '' }}>
                    {{ $mes }}
                </option>
            @endforeach
        </select>

    </div>

    <div class="col-md-4 py-2">
        <label for="state">Escolha o Estado</label>
        <select class="form-control" name="state" id="state" required>
            <option {{ isset($transportPay) ? '' : 'selected' }}></option>
            @php
                $states = ['Pago', 'Pendente', 'Cancelado'];
                $selectedState = isset($transportPay) ? $transportPay->state : old('state');
            @endphp

            @foreach ($states as $state)
                <option value="{{ $state }}" {{ $selectedState == $state ? 'selected' : '' }}>
                    {{ $state }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4 py-2">
        <label for="price">Digite o preço</label>
        <input class="form-control" type="text" name="price" id="price" placeholder="Preço do mês"
            value="{{ isset($transportPay->price) ? $transportPay->price : old('price') }}">
    </div>

    <div class="col-md-8 py-2">
    </div>


    <div class="col-md-4 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($transportPay) ? 'Atualizar' : 'Cadastrar' }}</button>
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
