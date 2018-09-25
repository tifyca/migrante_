<!-- Ventana Flotante de Ingreso
================================================== -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#login">Ingresar</a></li>
            <li><a href="#register">Registro</a></li>
        </ul>

        <div class="popup-tabs-container">

            <div class="popup-tab-content" id="login">

                <div class="welcome-text">
                    <h3>Bienvenido!</h3>
                    <span>No tienes una cuenta? <a href="#" class="register-tab">Regístrate!</a></span>
                </div>

                <form method="post" id="login-form">
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Correo electrónico" required/>
                    </div>

                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" name="password" id="password" placeholder="Contraseña" required/>
                    </div>
                    <a href="#" class="forgot-password">¿Has olvidado tu contraseña?</a>
                </form>

                <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Ingresar <i class="icon-material-outline-arrow-right-alt"></i></button>

                <div class="social-login-separator"><span>o</span></div>
                <div class="social-login-buttons">
                    <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Ingresar via Facebook</button>
                    <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Ingresar via Google+</button>
                </div>

            </div>

            <div class="popup-tab-content" id="register">

                <div class="welcome-text">
                    <h3>Creemos tu cuenta!</h3>
                </div>

                <div class="account-type">
                    <div>
                        <input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>
                        <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Postulante</label>
                    </div>

                    <div>
                        <input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
                        <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Empleador</label>
                    </div>
                </div>

                <form method="post" id="register-account-form">
                    <div class="input-with-icon-left">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Correo electrónico" required/>
                    </div>

                    <div class="input-with-icon-left" title="Debe tener al menos 8 caracteres" data-tippy-placement="bottom">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="Contraseña" required/>
                    </div>

                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" class="input-text with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repetir contraseña" required/>
                    </div>
                </form>

                <button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="register-account-form">Registrar <i class="icon-material-outline-arrow-right-alt"></i></button>

                <div class="social-login-separator"><span>o</span></div>
                <div class="social-login-buttons">
                    <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Registrar via Facebook</button>
                    <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Registrar via Google+</button>
                </div>

            </div>

        </div>
    </div>
</div>