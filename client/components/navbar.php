<style>
<?php require STYLES_PATH . 'navbar.css'; ?>
</style>
<header class="cabecalho">
        <img src=<?=IMAGES_PATH.'logo.svg'?> alt="" class="cabecalho_logo">
        <img src=<?=IMAGES_PATH.'home.svg'?> alt="Botão da home" class="cabecalho_icon-home" id="icon-home">
        <script src="./client/assets/js/api.js" defer></script>
        <script src="./client/assets/js/navbarFunc.js" defer></script>
        <div class="cabecalho_conteudo" id="cabecalho_conteudo">
            <?php if(!array_key_exists('user', $_SESSION)): ?> 
                <a href="./login" class="link_btn "><button class="cabecalho_btn">Login</button></a>
            <?php else : ?>
                <a href="./perfil" class="link_btn "><button class="cabecalho_btn">Perfil</button></a>
            <?php endif; ?>
            <ul class="cabecalho_itens">
                <li class="cabecalho_itens-item"><a class="cabecalho_itens-link" href="./">Início</a></li>
                <li class="cabecalho_itens-item"><a class="cabecalho_itens-link" href="./forum">Fórum</a></li>
                <li class="cabecalho_itens-item"><a class="cabecalho_itens-link" href="./doacoes">Doações</a></li>
            </ul>
        </div>
</header>
<div>
</div>
