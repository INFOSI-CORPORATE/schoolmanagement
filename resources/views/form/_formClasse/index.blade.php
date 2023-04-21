<div class="row">
    <div class="col-md-12 py-2">
        <label for="title">Nome da Turma</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digita o Nome da Turma"
            required value={{ isset($classe->name) ? $classe->name : '' }}>
    </div>
    <div class="col-md-12 py-2">
        <label for="nBi">Detalhes</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="5" placeholder="Detalhes da Turma">{{ isset($classe->details) ? $classe->details : '' }}</textarea>
    </div>
    <div class="col-md-6 py-2">
        <button type="submit"
            class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($classe) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
