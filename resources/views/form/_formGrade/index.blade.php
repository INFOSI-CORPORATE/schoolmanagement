<div class="row">
    <div class="col-md-12">
        <label for="title">Nome da Classe</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digita o Nome da Classe"
            required value={{ isset($grade->name) ? $grade->name : '' }}>
    </div>
    <div class="col-md-12">
        <label for="nBi">Detalhes</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="5" placeholder="Detalhes da Classe">{{ isset($grade->details) ? $grade->details : '' }}</textarea>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($grade) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
