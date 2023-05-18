<div class="row">
    <div class="col-md-6 py-2">
        <label for="name">Nome</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digite o Nome"
            required value="{{ isset($course->name) ? $course->name : old('name') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="duration">Duração</label>
        <input class="form-control" type="text" name="duration" id="duration" placeholder="Digite o tempo de Duração"
            required value="{{ isset($course->duration) ? $course->duration : old('duration') }}">
    </div>
    <div class="col-md-12 py-2">
        <label for="details">Detalhes</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="5"
            placeholder="Digite os Detalhes">{{ isset($course->details) ? $course->details : old('details') }}</textarea>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($course) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
