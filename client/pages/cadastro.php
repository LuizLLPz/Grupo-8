<body>
    <form action="./api/registrar" method="POST" class="form">
        <div class="center">
            <h1 class="form__heading">Cadastro</h1>
        </div>
        <div>
            <input type="text" name="nome" placeholder="Nome" required class="form__input" data-type="nome">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>

        <div>
            <input type="text" name="sobrenome" placeholder="Sobrenome" required class="form__input" data-type="sobrenome">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>

        <div>
            <input type="email" name="email" placeholder="Email" required class="form__input" data-type="email">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>    

        <div>
            <input type="text" name="cpf" placeholder="CPF" required class="form__input" id="cpf" data-type="cpf">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>

        <div>
            <input type="password" name="senha" placeholder="Senha" required class="form__input" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?!.*[ !@#$%&*_=+-]).{6,12}" data-type="senha">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>   

        <div>
            <input type="password" name="passwordConfm" placeholder="Confirmar senha" required class="form__input" data-type="confSenha">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>    
        
        <div class="center">
            <input type="submit"class="form__button" value="REGISTRAR">
        </div>
    </form>
    
</body>
</html>