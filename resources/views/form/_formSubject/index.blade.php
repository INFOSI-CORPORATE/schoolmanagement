<div class="row">
    <div class="col-md-12 py-2">
        <label for="title">Nome da Disciplina</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digita o Nome da Disciplina"
            required value={{ isset($subject->name) ? $subject->name : '' }}>
    </div>
    <div class="col-md-12 py-2">
        <label for="nBi">Detalhes</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="5" placeholder="Detalhes da Disciplina">{{ isset($subject->details) ? $subject->details : '' }}</textarea>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($subject) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
