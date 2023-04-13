<div class="row">
    <div class="col-md-6">
        <label for="nProcess">Nº de Processo</label>
        <input class="form-control" type="number" name="nProcess" id="nProcess" placeholder="Digita o Nº de Processo do Estudante" required
            value={{ isset($student->nProcess) ? $student->nProcess : '' }} required>
    </div>
    <div class="col-md-6">
        <label for="title">Nome de Estudante</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digita o Nome do Estudante" required
            value={{ isset($student->name) ? $student->name : '' }}>
    </div>
    <div class="col-md-6">
        <label for="nBi">Nº do BI</label>
        <input class="form-control" type="text" name="nBi" id="nBi" placeholder="Digita o nº do Bilhete de Identidade" required
            value={{ isset($student->nBi) ? $student->nBi : '' }}>
    </div>
    <div class="col-md-6">
        <label for="email">Endereço de E-mail</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="Digita o E-mail do Aluno" required
            value={{ isset($student->email) ? $student->email : '' }}>
    </div>
    <div class="col-md-6">
        <label for="dateBirth">Data de Nascimento</label>
        <input class="form-control" type="date" name="dateBirth" id="dateBirth" placeholder="Digita a data de Nascimento" required
            value={{ isset($student->dateBirth) ? $student->dateBirth : '' }}
            >
    </div>
    <div class="col-md-6">
        <label for="schoolYear">Ano letivo</label>
        <input class="form-control" type="text" name="schoolYear" id="schoolYear" placeholder="Digita o Ano Letivo" required
            value={{ isset($student->schoolYear) ? $student->schoolYear : '' }} >
    </div>
    <div class="col-md-6 py-3">
        <button type="submit" class="btn btn-sm btn-outline-primary shadow-sm text-end">{{ isset($student) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
