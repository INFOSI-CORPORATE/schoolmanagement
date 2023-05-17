<div class="row">
    <div class="col-md-6 py-2">
        <label for="nProcess">Nº de Processo</label>
        <input class="form-control" type="number" name="nProcess" id="nProcess"
            placeholder="Digite o Nº de Processo do Estudante"
            value="{{ isset($student->nProcess) ? $student->nProcess : ($total + 1) }}" readonly>
    </div>
    <div class="col-md-6 py-2">
        <label for="title">Nome de Estudante</label>
        <input class="form-control" type="text" name="name" id="name"
            placeholder="Digite o Nome do Estudante" required value="{{ isset($student->name) ? $student->name : old('name') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="nBi">Nº do BI</label>
        <input class="form-control" type="text" name="nBi" id="nBi"
            placeholder="Digite o nº do Bilhete de Identidade" required
            value="{{ isset($student->nBi) ? $student->nBi : old('nBi') }}">
    </div>

    <div class="col-md-6 py-2">
        <label for="dateBirth">Data de Nascimento</label>
        <input class="form-control" type="date" name="dateBirth" id="dateBirth"
            placeholder="Digite a data de Nascimento" required
            value="{{ isset($student->dateBirth) ? $student->dateBirth : old('dateBirth') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="email">Endereço de E-mail</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="Digite o E-mail do Aluno"
            required value="{{ isset($student->email) ? $student->email : old('email') }}">
    </div>
    <div class="col-md-6 py-2">
        <div class="row">
            <div class="col-6">
                <label for="contact">Contacto do Aluno</label>
                <input class="form-control" type="text" name="contact" id="contact"
                    placeholder="Digite o Número do Aluno" required
                    value="{{ isset($student->contact) ? $student->contact : old('contact') }}">
            </div>
            <div class="col-6">
                <label for="contactAlter">Contacto Alternativo</label>
                <input class="form-control" type="text" name="contactAlter" id="contactAlter"
                    placeholder="Digite o Número do Aluno" required
                    value="{{ isset($student->contactAlter) ? $student->contactAlter : old('contactAlter') }}">
            </div>
        </div>
    </div>
    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($student) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
