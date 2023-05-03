<div class="row">
    <div class="col-md-12 py-2">
        <label for="title">Ano lectivo</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digita o Ano Lectivo"
            required value={{ isset($schoolyear->name) ? $schoolyear->name : old('name') }}>
    </div>
    <div class="col-md-12 py-2">
        <label for="nBi">Detalhes</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="5" placeholder="Detalhes do Ano Lectivo">{{ isset($schoolyear->details) ? $schoolyear->details : old('details') }}</textarea>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($schoolyear) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
