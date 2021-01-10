<?php
function template_form($atts)
{
    ob_start(); ?>
    <link rel="stylesheet" href="<?= plugins_url('../assets/css/styles.css', __FILE__); ?>">
    <form class="form__layoutForm" id="formContact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <label for="inputName">Nombre Completo*</label>
                    <input type="text" id="inputName" class="form-control" placeholder="Ej: Juan Soto" aria-label="Ej: Juan Soto" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputEmail">Correo electrónico*</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Ej: mail@mail.com" aria-label="Ej: mail@mail.com" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <label for="inputFono">Telefono*</label>
                    <input type="text" id="inputFono" class="form-control" placeholder="Ej: +569 00000000" aria-label="Ej: +569 00000000" required>
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputPais">País*</label>
                    <select id="inputPais" class="form-control" required>
                        <option value="0">Selecciona tu país</option>
                        <option value="Chile">Chile</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="México">México</option>
                        <option value="Panamá">Panamá</option>
                        <option value="Perú">Perú</option>
                        <option value="Republica Dominicana">Republica Dominicana</option>
                        <option value="Uruguay">Uruguay</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <label for="inputEmpresa">Empresa (opcional)</label>
                    <input type="text" id="inputEmpresa" class="form-control" placeholder="Ej: Company Corporation" aria-label="Ej: Company Corporation">
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputIndustria">¿A qué industria perteneces? *</label>
                    <select id="inputIndustria" class="form-control" required>
                        <option value="0">Selecciona tu industria</option>
                        <option value="Banca">Banca</option>
                        <option value="Servicios Financieros">Servicios Financieros</option>
                        <option value="Retail">Retail</option>
                        <option value="Telecomunicaciones">Telecomunicaciones</option>
                        <option value="Gobierno">Gobierno</option>
                        <option value="Seguridad">Seguridad</option>
                        <option value="Agricultura">Agricultura</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="boxMensaje">
                        <label for="inputMensaje">Mensaje (opcional)</label>
                        <span class="boxMensaje__legal">Máximo 1000 caracteres</span>
                    </div>
                    <textarea class="form-control" id="inputMensaje" cols="10" rows="10" maxlength="1000" placeholder="Escribe tu mensaje..."></textarea>
                </div>
                <div class="col-12">
                    <div class="formFooter">
                        <span>* Campos obligatorios</span>
                        <button class="btn_send" id="btn_send" href="javascript:void(0);">Enviar</button>
                    </div>
                </div>
                <div class="col-12">
                    <div class="alert alert-success successMessage" role="alert">¡Registrado con éxito!</div>
                </div>
            </div>
        </div>
    </form>
    <script src="<?= plugins_url('../assets/js/app.js', __FILE__); ?>"></script>
<?php
    return ob_get_clean();
} ?>