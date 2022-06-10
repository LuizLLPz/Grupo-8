<div class= "fundo_branco" >
    
    <!-- <div id="open_config">Open config</div> -->
    <!-- <button onClick="setUser()">
        Setar usuário
    </button> -->


    <div class="a">
        <div class="e">
            <div class="d">
                <img src=<?=IMAGES_PATH.'perfil-de-usuario.png'?> class="profile_usr-pic">
            </div>
        </div>
        
        <div class="b">
            <h3 class="perfil_nome"><?= $context['user']['nome'].' '.$context['user']['sobrenome']?></h3>
            <p class="perfil_email"><?= $context['user']['email']?></p>
            <p class="perfil_status"><?= $context['user']['tipo']?></p>
        </div>        
        
        <div class="perfil_icones">
            <img src=<?=IMAGES_PATH.'user.png'?> class="c" id="open_config">  
            <img src=<?=IMAGES_PATH.'log-out.png'?> class="c" id="" onclick="logout()">  
        </div>
        
    </div>

    <div>
        <?= $_SESSION['user']['tipo'] == 'Donatário' ? '<button id="seTornarDoador">Se tornar doador</button>' : '' ?>
        <?= $_SESSION['user']['tipo'] == 'Doador' ? '<button id="adicionarAnuncio">Adicionar Anúncio de doação</button>': '' ?>
        <br>
        <br>
    </div>

    <!-- <div class="perfil_content-interesses">
        <h1 class="perfil_content-titulo">Anuncios</h1>
        <div class= "perfil_card-anuncios">
            <div class= "perfil_card-exemplo">
                <button id="editarAnuncio">editar</button>
                card
            </div>
            <div class= "perfil_card-exemplo">
                <button id="editarAnuncio">editar</button>
                card
            </div>
            <div class= "perfil_card-exemplo">
                <button id="editarAnuncio">editar</button>
                card
            </div>
            
        </div>

    </div> -->

    <div class="perfil_content-anuncios">
        <h1 class="perfil_content-titulo">Publicações</h1>
        <div class= "perfil_card-anuncios" id= 'perfil_card-anuncios'>
            <div class="card_anuncio">

                <div class= "card_anuncio-botoes">
                    <img src= 'pencilpng'>
                    <img src= 'trash-bin.png'>                    
                </div>

                <div class="card_anuncio-texto"> 
                    <h1 class="texto_card titulo">Titulo</h1>
                    <h3 class="texto_card categoria"  >Categoria</h3>
                    <h3 class="texto_card data">xx/xx/xxxx</h3>
                    <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illo ea impedit quaerat ab totam similique placeat excepturi nihil quo velit incidunt debitis saepe veritatis quos labore porro, dicta iste?</p>
                </div>
                <div class="card_anuncio-img">
                    <div class="azul">
                        <img class="imagem_doacao" src="">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- <div class="perfil_content-participacao">
        <h1 class="perfil_content-titulo">Participações do fórum</h1>
        <div class= "perfil_card-participacao">
            <div class= "perfil_card-exemplo">
                card
            </div>

        </div>

    </div> -->

    

</div>

<!-- Editar card -->

<div id="editar_card" class="editar_card editar_card-dados-ativado">
    <img src=<?= IMAGES_PATH.'close.png' ?> alt="fechar" class="config_fechar" id="editarCard_fechar">
    <h2>Editar Anúncio de Doação</h2>
    <form action="" class="editar_form">
        <div>
            <input type="text" name="nome" placeholder="Título" required class="form__input" data-type="nome">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>
        <div>
            <textarea name="descricao" placeholder="Descrição" required class="form__input" data-type="descricao"></textarea>
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>
        <div>
            <input type="text" name="categoria" placeholder="Categoria" required class="form__input" data-type="categoria">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>
        <div>
            <input type="text" name="cep" placeholder="CEP" required class="form__input" data-type="cep">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>
        <div>
            <input type="text" name="cidade" placeholder="Cidade" required class="form__input" data-type="cidade">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>
        <div>
            <input type="text" name="estado" placeholder="Estado" required class="form__input" data-type="estado">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>
        
        <div class = "form_doacao-input">   
            <input type= 'file' src=<?=IMAGES_PATH.'perfil-de-usuario.png'?> name='imagem' required class= 'form__input'
            id="img_produto" data_type = 'imagem' accept="image/png,image/jpeg">
            <div class='form_erro-cont'>
                <img src= <?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class= 'span-erro'> campo inválido - Selecione uma imagem </span>
            </div>
        </div>

        <div class="center editarCar_contener-btn">
            <input type="submit">Editar</input>
        </div>
    </form>
    <div class="center editarCar_contener-btn">
        <button id="btn_sair">Sair</button>
    </div>

</div>










<!-- Config -->
<div id="perfil_config" class="perfil_config perfil_config-dados-ativado"><!-- perfil_config-dados-ativado -->
    <img src=<?= IMAGES_PATH.'close.png' ?> alt="fechar" class="config_fechar" id="config_fechar">
    <div class="perfil_config-list">
        <ul>
            <li class="perfil_aba" data-type="dados_conta">Dados da conta</li>
            <!-- <li class="perfil_aba press" data-type="editar_dados">Editar dados</li> -->
        </ul>
    </div>

    <div class="perfil_config-dados" id="dados_conta">
        <div class="pefil_dados-conta">
            <h1>Dados da conta</h1>    
            <div>
                <h3>Nome:  <?= $context['user']['nome'].' '.$context['user']['sobrenome']?></h3>
                <h3>Email: <?= $context['user']['email']?></h3>
                <h3>Tipo:  <?= $context['user']['tipo']?></h3>

            </div>
            <div>
                <button class="perfil_aba config_btn" data-type="editar_dados">Editar dados</button>
            </div>
            <br>
            <h1>Senha</h1>
            <div>
                <button class="perfil_aba config_btn" data-type="editar_senha">Mudar senha</button>
            </div>
            <br>
            <br>
            <div>
                <button class="config_btn config_btn-red deletar_usuario">Deletar conta</button>    
            </div>
        </div>

    </div>

    <div class="perfil_config-dados none" id="editar_dados">
        <form class="form form_atualizar">
        <div class="center">
            <h1 class="form__heading">Dados</h1>
        </div>
        <div class="config_div-inputs">
            <input type="text" name="nome" placeholder="Nome" 
            value="<?= $context['user']['nome']?>"
            required class="form__input" data-type="nome">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>

        <div class="config_div-inputs">
            <input type="text" name="sobrenome" placeholder="Sobrenome"
            value="<?= $context['user']['sobrenome']?>"
            required class="form__input" data-type="sobrenome">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>

        <div class="config_div-inputs">
            <input type="email" name="email" placeholder="Email"
            value="<?= $context['user']['email']?>"
            required class="form__input" data-type="email">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>    

        <div class="config_div-inputs">
            <input type="text" name="cpf" placeholder="CPF"
            value="<?= $context['user']['cpf']?>"
            required class="form__input" id="cpf" data-type="cpf">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>
        
        <div class="center">
            <input type="submit"class="form__button" value="EDITAR">
        </div>
    </form>
    <div class="center">
        <button type='submit' class="perfil_aba config_btn" data-type="dados_conta">Cancelar</button>
    </div>
    </div>

</div>