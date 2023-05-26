<div class="modal-header">
    <h4 class="modal-title">Imprimir Lista</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
    <label for="schoolyear">Imprimir pelo ano lectivo.</label>
    <label for="schoolyear">Escolha o Ano lectivo</label>
        <select class="form-control" name="schoolyear" id="schoolyear" required>
            opt
            @foreach ($schoolyears as $schoolyear)
                <option value="{{ $schoolyear->name }}" (old('fk_schoolyears_id') == $schoolyear->name) ? 'selected' : ''>
                    {{ $schoolyear->name }}</option>
            @endforeach
        </select>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
    <button type="submit" class="btn btn-primary">Imprimir</button>
</div>