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
    <span class="form_span-normal"><img src=<?=IMAGES_PATH.'icon-erro.svg'?>>E-mail ou senha incorreta </span>
    <span class="form_span">Esqueceu sua senha?</span>
    <div class="center">
        <input type="submit" value="Enviar" class="form__button">
    </div>
</form>
