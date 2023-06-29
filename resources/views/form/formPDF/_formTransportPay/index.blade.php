<div class="modal-header">
    <h4 class="modal-title">Imprimir Lista</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <label>Imprimir pelo ano lectivo.</label>

    <div class="row">
        <div class="col-md-6 py-2">
            <label for="schoolyear">Escolha o Ano lectivo</label>
            <select class="form-control" name="schoolyear" id="schoolyear" required>
                <option value=""></option>
                @foreach ($schoolyears as $schoolyear)
                    <option value="{{ $schoolyear->name }}">{{ $schoolyear->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 py-2">
            <label for="month">Escolha o Mês</label>
            <select class="form-control" name="month" id="month" required>
                <option value=""></option>
                @php
                    $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
                @endphp
                @foreach ($meses as $mes)
                    <option value="{{ $mes }}">
                        {{ $mes }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row d-flex m-2 align-items-center justify-content-between">

        <div class="col-md-4 form-check">
            <input class="form-check-input" name="pay" type="checkbox" value="pay" id="pay" checked>
            <label class="form-check-label" for="pay">
                Pago
            </label>
        </div>
        <div class="col-md-4 form-check">
            <input class="form-check-input" name="cancel" type="checkbox" value="cancel" id="cancel" checked>
            <label class="form-check-label" for="cancel">
                Cancelado
            </label>
        </div>
        <div class="col-md-4 form-check">
            <input class="form-check-input" name="pending" type="checkbox" value="pending" id="pending" checked>
            <label class="form-check-label" for="pending">
                Pendente
            </label>
        </div>

    </div>


</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
    <button type="submit" class="btn btn-primary">Imprimir</button>
</div>
