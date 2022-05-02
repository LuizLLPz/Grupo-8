<style>
    <?php 
        include STYLES_PATH.'perfilSize.css';
    ?>
</style>

<div class=".modal_editar">
    <h1>Editar editar editar</h1>
</div>
<div class="perfil_baner">
    <div class="perfil_img-cont">
        <img src=<?=IMAGES_PATH.'pfpadrao.png'?> class="perfil_img">
    </div>
    
    <div class="perfil_txt-cont">
        <h3 class="perfil_nome"><?= $context['user']['nome'].' '.$context['user']['sobrenome']?></h3>
        <h3 class="perfil_email"><?= $context['user']['email']?></h3>
        <h3 class="perfil_status"><?= $context['user']['tipo']?></h3>
    </div>
    <div onClick="iniciarModoEditar()">
        Editar Perfil!
    </div>
</div>
<div id="open_config">Open config</div>
<button onclick="logout()">
    Deslogar!!!
</button>

<button onClick="setUser()">
    Setar usuário
</button>

<div id="perfil_config" class="perfil_config perfil_config-dados-ativado"><!-- perfil_config-dados-ativado -->
    <img src=<?= IMAGES_PATH.'close.png' ?> alt="fechar" class="config_fechar" id="config_fechar">
    <div class="perfil_config-list">
        <ul>
            <li class="">Dados da conta</li>
            <li class="press">Editar dados</li>
        </ul>
    </div>
    <div class="perfil_config-dados">
        <form action="" method="post" class="form">
        <div class="center">
            <h1 class="form__heading">Dados</h1>
        </div>
        <div class="config_div-inputs">
            <input type="text" name="nome" placeholder="Nome" 
            required class="form__input" data-type="nome">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>

        <div class="config_div-inputs">
            <input type="text" name="sobrenome" placeholder="Sobrenome"
            value=<?= $context['user']['sobrenome']?>
            required class="form__input" data-type="sobrenome">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>

        <div class="config_div-inputs">
            <input type="email" name="email" placeholder="Email"
            value=<?= $context['user']['email']?>
            required class="form__input" data-type="email">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>    

        <div class="config_div-inputs">
            <input type="text" name="cpf" placeholder="CPF"
            value=<?= $context['user']['cpf']?>
            required class="form__input" id="cpf" data-type="cpf">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>

        <div class="center">
            <button class="config_btn">EDITAR SENHA</button>
        </div>
        
        <div class="center">
            <input type="submit"class="form__button" value="EDITAR">
        </div>
        </form>
    </div>
</div>