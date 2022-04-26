
</head>
<body>
    <form action="api/registrar" method="POST" class="form">
        <div class="center">
            <h1 class="form__heading">Cadastro</h1>
        </div>
        <input type="text" name="nome" placeholder="Nome" required class="form__input">
        <span class="form_span-normal"><img src=<?=IMAGES_PATH.'icon-erro.svg'?>>Campo inválido - preencha o campo</span>
        <input type="text" name="sobrenome" placeholder="Sobrenome" required class="form__input">
        <span class="form_span-normal"><img src=<?=IMAGES_PATH.'icon-erro.svg'?>>Campo inválido - preencha o campo</span>
        <input type="email" name="email" placeholder="Email" required class="form__input">
        <span class="form_span-normal"><img src=<?=IMAGES_PATH.'icon-erro.svg'?>>Campo inválido - preencha o campo</span>
        <input type="text" name="cpf" placeholder="CPF" required class="form__input" id="cpf">
        <span class="form_span-normal"><img src=<?=IMAGES_PATH.'icon-erro.svg'?>>Campo inválido - preencha o campo</span>
        <input type="password" name="senha" placeholder="Senha" required class="form__input">
        <span class="form_span-normal"><img src=<?=IMAGES_PATH.'icon-erro.svg'?>>Campo inválido - preencha o campo</span>
        <input type="password" name="passwordConfm" placeholder="Confirmar senha" required class="form__input">
        <span class="form_span-normal"><img src=<?=IMAGES_PATH.'icon-erro.svg'?>>Campo inválido - preencha o campo</span>
        <div class="center">
            <input type="submit"class="form__button" value="REGISTRAR">
        </div>
    </form>
</body>
</html>