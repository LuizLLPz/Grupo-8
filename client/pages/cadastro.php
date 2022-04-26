
</head>
<body>
    <form action="./api/registrar" method="POST" class="form">
        <div class="center">
            <h1 class="form__heading">Cadastrar</h1>
        </div>
        <input type="text" name="nome" placeholder="Nome" required class="form__input">
        <input type="text" name="sobrenome" placeholder="Sobrenome" required class="form__input">
        <input type="email" name="email" placeholder="Email" required class="form__input">
        <input type="text" name="cpf" placeholder="CPF" required class="form__input" id="cpf">
        <input type="password" name="senha" placeholder="Senha" required class="form__input">
        <input type="password" name="passwordConfm" placeholder="Confirmar senha" required class="form__input">
        <div class="center">
            <input type="submit"class="form__button" value="REGISTRAR">
        </div>
    </form>
</body>
</html>