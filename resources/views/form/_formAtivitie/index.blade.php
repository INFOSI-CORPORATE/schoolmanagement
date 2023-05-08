<div class="row">
    <div class="col-md-6 py-2">
        <label for="title">Nome da Atividade</label>
        <input class="form-control" type="text" name="title" id="title" placeholder="Digita o título da atividade"
            required value={{ isset($ativitie->title) ? $ativitie->title : old('title') }}>
    </div>

<div class="col-md-6 py-2">
        <label for="details">Descrição da Atividade</label>
        <input class="form-control" type="text" name="details" id="details"
            placeholder="Digita a descrição da Atividade" required
            value={{ isset($ativitie->details) ? $ativitie->details : old('details') }}>
    </div>

    <div class="col-md-6 py-2">
        <label for="location">Local da Atividade</label>
        <input class="form-control" type="text" name="location" id="location"
            placeholder="Digita o local da atividade" required
            value={{ isset($ativitie->location) ? $ativitie->location : old('location') }}>
    </div>

    <div class="col-md-6 py-2">
        <label for="duration">Duração da Atividade</label>
        <input class="form-control" type="text" name="duration" id="duration"
            placeholder="Digita o local da atividade" required
            value={{ isset($ativitie->duration) ? $ativitie->duration : old('duration') }}>
    </div>

    <div class="col-md-6 py-2">
        <label for="price">Preço da Atividade</label>
        <input class="form-control" type="text" name="price" id="price"
            placeholder="Digita o local da atividade" required
            value={{ isset($ativitie->price) ? $ativitie->price : old('price') }}>
    </div>

    <div class="col-md-6 py-2">
        <label for="price">Estado da Atividade</label>
        <input class="form-control" type="text" name="status" id="status"
            placeholder="Digita o local da atividade" required
            value={{ isset($ativitie->status) ? $ativitie->status : old('status') }}>
    </div>
    

    <div class="col-md-6 py-2">
        <label for="start">Data da atividade</label>
        <input type="date" class="form-control" name="start" id="start" required
            value={{ isset($ativitie->start) ? $ativitie->start : '' }}>
    </div>

    <div class="col-md-6 py-2"></div>

    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($ativitie) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>
