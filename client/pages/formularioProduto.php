<div class= "perfil_fundo-branco" >
    <div class="info-geral"> <!-- info do anuncio -->
        <h1 class="info-geral_titulo">Adicionar anúncio de doação</h1>
        <form>
            <div class= 'informacao_produto'> 
                <h3 class= 'info-geral_titulo'>Informações do anúncio</h3>
                <div> <!-- Nome do anuncio -->
                    <input type="text" name="nome" placeholder="Título" required class="form__input" data-type="titulo">
                    <div class="form_erro-cont">
                        <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                        <span class='span-erro'>Campo inválido - preencha o campo</span>
                    </div>
                </div>

                <div> <!-- Descrição -->
                <textarea name="descricao" placeholder="Descrição" required class="form__input" data-type="descricao"></textarea>
                <div class="form_erro-cont">
                        <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                        <span class='span-erro'>Campo inválido - preencha o campo</span>
                    </div>
                </div>

                <div> <!-- Categoria -->
                    <input type="text" name="categoria" placeholder="Categoria" required class="form__input" data-type="categoria">
                    <div class="form_erro-cont">
                        <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                        <span class='span-erro'>Campo inválido - preencha o campo</span>
                    </div>
                </div>

                <div>   <!-- Imagem -->
                    <input type= 'file' src=<?=IMAGES_PATH.'perfil-de-usuario.png'?> name= 'imagem' placeholder= 'foto do produto' required    class= 'form__input' data_type = 'imagem' accept="image/png,image/jpeg">
                    <div class='form_erro-cont'>
                        <img src= <?=IMAGES_PATH.'icon-erro.svg'?>>
                        <span class= 'span-erro'> campo inválido - Selecione uma imagem </span>
                    </div>
                </div>
            </div>
            <hr class="some">
            <div class="informacao_endereco">
                <h3 class="info-geral_titulo">Informações de localização</h3>
                <div> <!-- CEP -->
                    <input type="text" name="CEP" placeholder="CEP" required class="form__input" data-type="CEP">
                    <div class="form_erro-cont">
                        <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                        <span class='span-erro'>Campo inválido - preencha o campo</span>
                    </div>
                </div>

                <div> <!-- Cidade -->
                    <input type="text" name="cidade" placeholder="Cidade" required class="form__input" data-type="cidade">
                    <div class="form_erro-cont">
                        <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                        <span class='span-erro'>Campo inválido - preencha o campo</span>
                    </div>
                </div>

                <div> <!-- Estado -->
                    <input type="text" name="estado" placeholder="Estado" required class="form__input" data-type="estado">
                    <div class="form_erro-cont">
                        <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                        <span class='span-erro'>Campo inválido - preencha o campo</span>
                    </div>
                </div>

            </div>
<hr class="some">
            <div class="informacao_pessoal"> <!-- pessoal -->
                <h3 class="info-geral_titulo">Informações de Contato</h3>
                <div>
                    <div> <!-- Nome do vendedor -->
                    <input type="text" name="nome" placeholder="Nome Completo" required class="form__input" data-type="nome">
                        <div class="form_erro-cont">
                            <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                            <span class='span-erro'>Campo inválido - preencha o campo</span>
                        </div>
                    </div>

                    <div> <!-- n° de telefone -->
                        <input type="text" name="telefone" placeholder="Telefone" required class="form__input" data-type="telefone">
                        <div class="form_erro-cont">
                            <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                            <span class='span-erro'>Campo inválido - preencha o campo</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="center">

                <button type='button'> Publicar </button>

            </div>

        </form>
        <div class="center">
                <button type='button'> Cancelar </button>
        </div>
    </div>
</div>