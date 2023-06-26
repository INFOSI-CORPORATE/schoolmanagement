<div class="row">
    <div class="col-md-6 py-2">
        <label for="fk_employees_id">Escolha o Funcionário</label>
        <select class="form-control" name="fk_employees_id" id="fk_employees_id" required>
            <option {{ isset($departmentBoss) ? '' : 'selected' }}></option>
            @foreach ($employees as $item)
                <option value="{{ $item->id }}"
                    {{ isset($departmentBoss) && $departmentBoss->employees->id == $item->id ? 'selected' : (old('fk_employees_id') == $item->id ? 'selected' : '') }}>
                    {{ $item->name }} </option>
            @endforeach
        </select>

    </div>

    <div class="col-md-6 py-2">
        <label for="fk_departments_id">Escolha o Departamento</label>
        <select class="form-control" name="fk_departments_id" id="fk_departments_id" required>
            <option {{ isset($departmentBoss) ? '' : 'selected' }}></option>
            @foreach ($departments as $item)
                <option value="{{ $item->id }}"
                    {{ isset($departmentBoss) && $departmentBoss->departments->id == $item->id ? 'selected' : (old('fk_departments_id') == $item->id ? 'selected' : '') }}>
                    {{ $item->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-4 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($departmentBoss) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>
</div>
