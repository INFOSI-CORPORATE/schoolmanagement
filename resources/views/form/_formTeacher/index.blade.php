<div class="row">
    <div class="col-md-6 py-2">
        <label for="title">Nome </label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digite o Nome"
            required value="{{ isset($teacher->name) ? $teacher->name : old('name') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="nBi">Nº do BI</label>
        <input class="form-control" type="text" name="nBi" id="nBi"
            placeholder="Digite o nº do Bilhete de Identidade" required
            value="{{ isset($teacher->nBi) ? $teacher->nBi : old('nBi') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="email">Endereço de E-mail</label>
        <input class="form-control" type="email" name="email" id="email"
            placeholder="Digite o E-mail" required
            value="{{ isset($teacher->email) ? $teacher->email : old('email') }}">
    </div>
    <div class="col-md-6 py-2">
        <div class="row">
            <div class="col-6">
                <label for="contact">Contacto</label>
                <input class="form-control" type="text" name="contact" id="contact"
                    placeholder="Digite o Número" required
                    value="{{ isset($teacher->contact) ? $teacher->contact : old('contact') }}">
            </div>
            <div class="col-6">
                <label for="contactAlter">Contacto</label>
                <input class="form-control" type="text" name="contactAlter" id="contactAlter"
                    placeholder="Digite o Número Alternativo" required
                    value="{{ isset($teacher->contactAlter) ? $teacher->contactAlter : old('contactAlter') }}">
            </div>
        </div>
    </div>
    <div class="col-md-6 py-2">
        <label for="literary">Habilitações Literária</label>
        <input class="form-control" type="text" name="literary" id="literary" placeholder="Digite a habilitação Literária"
            required value="{{ isset($teacher->literary) ? $teacher->literary : old('literary') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="specialty">Especialidade</label>
        <input class="form-control" type="text" name="specialty" id="specialty" placeholder="Digite a Especialidade"
            required value="{{ isset($teacher->specialty) ? $teacher->specialty : old('specialty') }}">
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($teacher) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
