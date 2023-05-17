<div class="row">
    <div class="col-md-12 py-2">
        <label for="title">Nome do Cargo</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digite o Nome da Classe"
            required value="{{ isset($rule->name) ? $rule->name : old('name') }}">
    </div>
    <div class="col-md-12 py-2">
        <label for="nBi">Detalhes</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="5" placeholder="Detalhes da Classe">{{ isset($rule->details) ? $rule->details : old('details') }}</textarea>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($rule) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
