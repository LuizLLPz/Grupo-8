<style>
    <?php 
        include STYLES_PATH.'perfilSize.css';
        include STYLES_PATH.'form.css';
    ?>
</style>

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
<button onclick="logout()">
    Deslogar!!!
</button>

<button onClick="setUser()">
    Setar usuário
</button>