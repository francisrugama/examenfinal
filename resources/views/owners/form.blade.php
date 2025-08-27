<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del dueño"
                    value="{{ old('name', $owners->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Edad</label>
                <input type="number" id="age" name="age" class="form-control form-control-alternative"
                    placeholder="Ingresar la edad del dueño"
                    value="{{ old('age', $owners->age) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="birth_date">Fecha de nacimiento</label>
                <input type="date" id="birth_date" name="birth_date" class="form-control form-control-alternative"
                    placeholder="Ingresar la fecha del nacimiento del dueño"
                    value="{{ old('birth_date', $owners->birth_date) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mail">Correo</label>
                <input type="text" id="mail" name="mail" class="form-control form-control-alternative"
                    placeholder="Ingresar el correo del dueño"
                    value="{{ old('mail', $owners->mail) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="sex">sexo</label>
                <select name="sex" id="sex" class="form-control">
                    <option value="" disabled>seleccione su sexo</option>
                    <option value="Femenino" {{ old('sex', $owners->sex ?? '') == 'Femenino' ? 'selected' : ''}}>Femenino</option>
                    <option value="Masculino" {{ old('sex', $owners->sex ?? '') == 'Masculino' ? 'selected' : ''}}>Masculino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="phone_number">Teléfono</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control form-control-alternative"
                    placeholder="Ingresar teléfono del dueño"
                    value="{{ old('phone_number', $owners->phone_number) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="card">Identificación</label>
                <input type="text" id="card" name="card" class="form-control form-control-alternative"
                    placeholder="Ingresar el numero de cédula del cliente"
                    value="{{ old('card', $owners->card) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="ethnicity">Etnia</label>
                <select name="ethnicity" id="ethnicity" class="form-control">
                    <option value="" disabled>seleccione su etnia</option>
                    <option value="Mestizo" {{ old('ethnicity', $owners->ethnicity ?? '') == 'Mestizo' ? 'selected' : ''}}>Mestizo</option>
                    <option value="Criollo" {{ old('ethnicity', $owners->ethnicity ?? '') == 'Criollo' ? 'selected' : ''}}>Criollo</option>
                    <option value="Miskito" {{ old('ethnicity', $owners->ethnicity ?? '') == 'Miskito' ? 'selected' : ''}}>Miskito</option>
                    <option value="Garifuna" {{ old('ethnicity', $owners->ethnicity ?? '') == 'Garifuna' ? 'selected' : ''}}>Garifuna</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="nationality">Nacionalidad</label>
                <select name="nationality" id="nationality" class="form-control">
                    <option value="" disabled>seleccione su nacionalidad</option>
                    <option value="Nicaraguense" {{ old('nacionality', $owners->nationality ?? '') == 'Nicaraguense' ? 'selected' : ''}}>Nicaraguense</option>
                    <option value="Costarricense" {{ old('nacionality', $ownerts->nationality ?? '') == 'Costarricense' ? 'selected' : ''}}>Costarricense</option>
                    <option value="Hondureño" {{ old('nacionality', $owners->nationality ?? '') == 'Hondureño' ? 'selected' : ''}}>Hondureño</option>
                    <option value="Salvadoreño" {{ old('nacionality', $owners->nationality ?? '') == 'Salvadoreño' ? 'selected' : ''}}>Salvadoreño</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code">Código de dueño</label>
                <input type="text" id="code" name="code" class="form-control form-control-alternative"
                    placeholder="Ingresar el código del dueño"
                    value="{{ old('code', $owners->code) }}">
            </div>
        </div>
    </div>

</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Dueño
        </button>
    </div>
</div>
