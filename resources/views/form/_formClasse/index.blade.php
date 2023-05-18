<div class="row">
    <div class="col-md-12 py-2">
        <label for="title">Nome</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digite o Nome"
            required value="{{ isset($classe->name) ? $classe->name : old('name') }}">
    </div>
    <div class="col-md-12 py-2">
        <label for="nBi">Detalhes</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="5" placeholder="Digite os Detalhes">{{ isset($classe->details) ? $classe->details : old('details') }}</textarea>
    </div>
    <div class="col-md-6 py-2">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($classe) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
