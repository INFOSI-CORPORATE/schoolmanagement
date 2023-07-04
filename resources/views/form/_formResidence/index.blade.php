<div class="row">
    <div class="col-md-6 py-2">
        <label for="plate">Nome da Residência</label>
        <input class="form-control" type="text" name="nameResidence" id="name" placeholder="Digite o Nome da Residência"
            required value="{{ isset($residences->nameResidence) ? $residences->nameResidence : old('nameResidence') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="model">Tipologia</label>
        <select class="form-control" name="typology" id="typology" required="">
            <option></option>
            <option value="t1">t1</option>
            <option value="t2">t2</option>
            <option value="t3">t3</option>
            <option value="t4">t4</option>
            <option value="t5">t5</option>
        </select>
    </div>
    <div class="col-md-6 py-2">
        <label for="tel">Número do Telefone</label>
        <input class="form-control" type="text" name="tel" id="tel" placeholder="Digite o Telefone da Casa"
            required value="{{ isset($residences->tel) ? $residences->tel : old('tel') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="model">Endereço da Casa</label>
        <input class="form-control" type="text" name="address" id="address" placeholder="Digite o Endereço da Casa"
            required value="{{ isset($residences->address) ? $residences->address : old('address') }}">
    </div>
    <div class="col-md-12 py-2">
        <label for="details">Detalhes da Casa</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="5"
            placeholder="Digite os Detalhes da casa">{{ isset($residences->description) ? $residences->description : old('description') }}</textarea>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($residences) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>
