<div class="row">

    <div class="col-md-6 py-2">
        <label for="title">Nome Completo</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Digite o Nome" required
            value="{{ isset($user->name) ? $user->name : old('name') }}">
    </div>

    <div class="col-md-6 py-2">
        <label for="email">Endereço de E-mail</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="Digite o E-mail" required
            value="{{ isset($user->email) ? $user->email : old('email') }}">
    </div>


    <div class="col-md-6 py-2">
        <label for="password">Palavra-Passe</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Digite a Palavra-Passe"
            required value="{{ old('password') }}">
    </div>
    <div class="col-md-6 py-2">
        <label for="password_confirmation">Confirmar Palavra-Passe</label>
        <input class="form-control" type="password" name="password_confirmation" id="password_confirmation"
            placeholder="Digite a Palavra-Passe Novamente" required value="{{ old('password_confirmation') }}">
    </div>

    <div class="col-md-12 py-2">
        <label for="roles">Nível de Acesso</label>
        <select class="form-control" name="roles" id="roles" required>
            <option {{ isset($user->roles) ? '' : 'selected' }}></option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}"
                    {{ isset($user->roles) && $user->roles instanceof Illuminate\Support\Collection && $user->roles->contains('id', $role->id) ? 'selected' : (old('roles') == $role->id ? 'selected' : '') }}>
                    {{ $role->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 py-3">
        <button type="submit"
            class="btn btn-md btn-primary shadow-sm text-end">{{ isset($user) ? 'Atualizar' : 'Cadastrar' }}</button>
    </div>

</div>
