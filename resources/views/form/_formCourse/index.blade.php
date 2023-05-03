<div class="row">
    <div class="col-md-6 py-2">
        <label for="name">Nome do Curso</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digita o Nome do Curso"
            required value={{ isset($course->name) ? $course->name : old('name') }}>
    </div>
    <div class="col-md-6 py-2">
        <label for="duration">Duração do Curso</label>
        <input class="form-control" type="text" name="duration" id="duration" placeholder="Quanto tempo dura o curso"
            required value={{ isset($course->duration) ? $course->duration : old('duration') }}>
    </div>
    <div class="col-md-12 py-2">
        <label for="details">Detalhes</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="5"
            placeholder="Detalhes do Curso">{{ isset($course->details) ? $course->details : old('details') }}</textarea>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($course) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
