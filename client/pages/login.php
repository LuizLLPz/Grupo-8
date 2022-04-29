<style>
    html {
        overflow: hidden;
    }
</style>
<form action="api/login" method="POST" class="form">
    <div class="center">
        <h1 class="form__heading">Login</h1>
    </div>
    <input type="email" name="email" placeholder="email" class="form__input" required>
    <input type="password" name="password" placeholder="password" class="form__input" required>
    <div class="form_erro-cont">
        <span class="span-erro"><img src=<?=IMAGES_PATH.'icon-erro.svg'?>>E-mail ou senha incorreta </span>
    </div>
    <span class="form_span">Esqueceu sua senha?</span>
    <div class="center form_buttons">
        <input type="submit" value="Enviar" class="form__button">
        <h3 class="form__subTxt-login">Não possui uma conta?</h3>
    </div>
</form>
<a href="./cadastro" class="link_btn"><button class="form__button">Cadastre-se</button></a
