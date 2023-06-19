<div class="row">
    <div class="col-md-4 py-2">
        <label for="title">Nome</label>
        <input class="form-control" type="text" name="title" id="title" placeholder="Digite o Título" required
            value="{{ isset($ativitie->title) ? $ativitie->title : old('title') }}">
    </div>

    <div class="col-md-4 py-2">
        <label for="location">Local</label>
        <input class="form-control" type="text" name="location" id="location" placeholder="Digite o Local" required
            value="{{ isset($ativitie->location) ? $ativitie->location : old('location') }}">
    </div>

    <div class="col-md-4 py-2">
        <label for="duration">Duração</label>
        <input class="form-control" type="text" name="duration" id="duration" placeholder="Digite a Duração"
            required value="{{ isset($ativitie->duration) ? $ativitie->duration : old('duration') }}">
    </div>

    <div class="col-md-4 py-2">
        <label for="price">Preço</label>
        <input class="form-control" type="text" name="price" id="price" placeholder="Digite o Preço" maxlength="999999" max="999999" required
            value="{{ isset($ativitie->price) ? $ativitie->price : old('price') }}">
    </div>

    <div class="col-md-4 py-2">
        <label for="price">Estado</label>
        <input class="form-control" type="text" name="status" id="status" placeholder="Digite o Estado" required
            value="{{ isset($ativitie->status) ? $ativitie->status : old('status') }}">
    </div>


    <div class="col-md-4 py-2">
        <label for="start">Data</label>
        <input type="datetime-local" class="form-control" name="start" id="start" required
            value="{{ isset($ativitie->start) ? $ativitie->start : old('start') }}">
    </div>

    <div class="col-md-12 py-2">
        <label for="details">Descrição</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="10"
            placeholder="Digite a descrição">{{ isset($ativitie->details) ? $ativitie->details : old('details') }}</textarea>
    </div>


    <div class="col-md-4 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($ativitie) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>
