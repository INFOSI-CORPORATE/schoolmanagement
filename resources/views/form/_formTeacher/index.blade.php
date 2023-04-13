<div class="row">
    <div class="col-md-6">
        <label for="title">Nome do Professor</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digita o Nome do Professor"
            required value={{ isset($teacher->name) ? $teacher->name : '' }}>
    </div>
    <div class="col-md-6">
        <label for="nBi">Nº do BI</label>
        <input class="form-control" type="text" name="nBi" id="nBi"
            placeholder="Digita o nº do Bilhete de Identidade" required
            value={{ isset($teacher->nBi) ? $teacher->nBi : '' }}>
    </div>
    <div class="col-md-6">
        <label for="email">Endereço de E-mail</label>
        <input class="form-control" type="email" name="email" id="email"
            placeholder="Digita o E-mail do Professor" required
            value={{ isset($teacher->email) ? $teacher->email : '' }}>
    </div>
    <div class="col-md-6">
        <label for="contact">Contacto</label>
        <input class="form-control" type="text" name="contact" id="contact" placeholder="Contacto do Professor"
            required value={{ isset($teacher->contact) ? $teacher->contact : '' }}>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($teacher) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
