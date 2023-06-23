<div class="modal-header">
    <h4 class="modal-title">Imprimir Lista</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <label for="schoolyear">Imprimir pelo ano lectivo.</label>

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
            <label for="classe">Escolha a turma</label>
            <select class="form-control" name="classe" id="classe" required>
                <option value=""></option>
                @foreach ($classes as $classe)
                    <option value="{{ $classe->name }}">{{ $classe->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
    <button type="submit" class="btn btn-primary" id="printButton">Imprimir</button>
</div>
