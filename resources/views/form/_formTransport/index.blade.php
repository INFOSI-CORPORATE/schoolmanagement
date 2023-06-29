<div class="row">

    <div class="col-md-6 py-2">
        <label for="plate">Placa</label>
        <input class="form-control" type="text" name="plate" id="plate" placeholder="Digite a placa do transporte"
            required value="{{ isset($transport->plate) ? $transport->plate : old('plate') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="model">Modelo</label>
        <input class="form-control" type="text" name="model" id="model"
            placeholder="Digite o modelo do transporte" required
            value="{{ isset($transport->model) ? $transport->model : old('model') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="capacity">Capacidade de Alunos</label>
        <input class="form-control" type="number" name="capacity" id="capacity"
            placeholder="Digite a quantidade de lugares" required
            value="{{ isset($transport->capacity) ? $transport->capacity : old('capacity') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="route">Rota de viajem</label>
        <input class="form-control" type="text" name="route" id="route"
            placeholder="Digite a Rota que este transporte percorre" required
            value="{{ isset($transport->route) ? $transport->route : old('route') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="state">Estado do Transporte</label>
        <input class="form-control" type="text" name="state" id="state"
            placeholder="Digite o Estado em que se encontra o transporte" required
            value="{{ isset($transport->state) ? $transport->state : old('state') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="safe">Seguro</label>
        <input class="form-control" type="text" name="safe" id="safe"
            placeholder="Digite o seguro inclusíve a data de validade" required
            value="{{ isset($transport->safe) ? $transport->safe : old('safe') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="documentation">Documentação</label>
        <input class="form-control" type="file" name="documentation" id="documentation" {{ isset($transport) ? '' : 'required' }}>
    </div>
    <div class="col-md-6 py-2">
        <label for="details">Detalhes</label>
        <input class="form-control" type="text" name="details" id="details"
            placeholder="Digite algum detalhe sobre o transporte" required
            value="{{ isset($transport->details) ? $transport->details : old('details') }}">
    </div>
    

    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($transport) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
