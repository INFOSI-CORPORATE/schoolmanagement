<div class="row">

    <div class="col-md-6 py-2">
        <label for="plate">Nome do Quarto</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digite o Nome do Quarto"
            required value="{{ isset($bedrooms->name) ? $bedrooms->name : old('name') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="model">Nº de Estudante</label>
        <input class="form-control" type="text" name="numberStudent" id="numberStudent"
            placeholder="Digite o modelo do transporte" required
            value="{{ isset($bedrooms->numberStudent) ? $bedrooms->numberStudent : old('numberStudent') }}">
    </div>
    <div class="col-md-12 py-2">
        <label for="capacity">Nº de Cama</label>
        <input class="form-control" type="number" name="numberBad" id="numberBad"
            placeholder="Digite a quantidade de Camas" required
            value="{{ isset($bedrooms->numberBad) ? $bedrooms->numberBad : old('numberBad') }}">
    </div>

<div class="col-md-12 py-2">
    <label for="details">Detalhes do Quarto</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="5"
        placeholder="Digite os Detalhes do Quarto">{{ isset($bedrooms->description) ? $bedrooms->description : old('description') }}</textarea>
</div>



    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($bedrooms) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
