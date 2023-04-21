<div class="row">
    <div class="col-md-6 py-2">
        <label for="title">Nome do Professor</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digita o Nome do Professor"
            required value={{ isset($teacher->name) ? $teacher->name : '' }}>
    </div>
    <div class="col-md-6 py-2">
        <label for="nBi">Nº do BI</label>
        <input class="form-control" type="text" name="nBi" id="nBi"
            placeholder="Digita o nº do Bilhete de Identidade" required
            value={{ isset($teacher->nBi) ? $teacher->nBi : '' }}>
    </div>
    <div class="col-md-6 py-2">
        <label for="email">Endereço de E-mail</label>
        <input class="form-control" type="email" name="email" id="email"
            placeholder="Digita o E-mail do Professor" required
            value={{ isset($teacher->email) ? $teacher->email : '' }}>
    </div>
    <div class="col-md-6 py-2">
        <div class="row">
            <div class="col-6">
                <label for="contact">Contacto do Prof</label>
                <input class="form-control" type="text" name="contact" id="contact"
                    placeholder="Digita o Número do Professor" required
                    value={{ isset($teacher->contact) ? $teacher->contact : '' }}>
            </div>
            <div class="col-6">
                <label for="contactAlter">Contacto do Prof</label>
                <input class="form-control" type="text" name="contactAlter" id="contactAlter"
                    placeholder="Digita o Número Alternativo" required
                    value={{ isset($teacher->contactAlter) ? $teacher->contactAlter : '' }}>
            </div>
        </div>
    </div>
    <div class="col-md-6 py-2">
        <label for="literary">Habilitações Literária</label>
        <input class="form-control" type="text" name="literary" id="literary" placeholder="Digita a habilitação Literária do Prof"
            required value={{ isset($teacher->literary) ? $teacher->literary : '' }}>
    </div>
    <div class="col-md-6 py-2">
        <label for="specialty">Especialidade</label>
        <input class="form-control" type="text" name="specialty" id="specialty" placeholder="Digita o que o prof sabe fazer"
            required value={{ isset($teacher->specialty) ? $teacher->specialty : '' }}>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($teacher) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
