<div id="login-wrap">
    <div id="login-container">
        <div class="login-container-top">
            <div id="login-container-top-left">
                ОБЫЧНЫЙ<br>АККАУНТ
            </div>
            <div id="login-container-top-right" class="login-container-top-notselect">
                БИЗНЕС<br>АККАУНТ
            </div>
        </div>
        <div id="login-error"><?=$errorLogin;?></div>
        <div class="login-container-body">
            <div id="login-container-body-usual">
                <form method="post" name="login-form-usual" id="login-form-usual">
                    <input type="text" name="login" class="input-text" placeholder="E-mail"><br>
                    <input type="password" name="password" class="input-text" placeholder="Пароль"><br><br>
                    <input type="hidden" name="logintype" value="usual">
                    <input type="button" class="submit-button" id="login-usual" value="Войти">
                </form>
            </div>
            <div id="login-container-body-business">
                <form method="post" name="login-form-business" id="login-form-business">
                    <input type="text" name="companyid" class="input-text" placeholder="Идентификатор компании"><br>
                    <input type="text" name="login" class="input-text" placeholder="E-mail"><br>
                    <input type="password" name="password" class="input-text" placeholder="Пароль"><br><br>
                    <input type="hidden" name="logintype" value="business">
                    <input type="button" class="submit-button" id="login-business" value="Войти">
                </form>
            </div>

            <div id="login-helper">
                <a href="#">Забыли пароль?</a>
                <br>
                <a href="#">Зарегистриоваться</a>
            </div>
        </div>
    </div>
    <div class="login-container-middle"></div>
    <!--<div id="login-container-bg"></div>-->
</div>
<div id="bottom">
    <div id="bottom-left">
        <?=Yii::app()->params['copyrightInfo']?>
    </div>
</div>

<script>
    <?=$jsLoginType;?>
</script>

