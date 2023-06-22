<div class="row">
    <div class="col-md-12 py-2">
        <label for="title">Departamento</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digite o Departamento"
            required value="{{ isset($department->name) ? $department->name : old('name') }}">
    </div>
    <div class="col-md-12 py-2">
        <label for="details">Detalhes</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="5" required placeholder="Digite os Detalhes">{{ isset($department->details) ? $department->details : old('details') }}</textarea>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($department) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
