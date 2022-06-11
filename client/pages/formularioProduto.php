<div class= "fundo_branco">
    <div class="info-geral"> <!-- info do anuncio -->
        <h2 class="info-geral_titulo info-geral_titulo-principal">Adicionar anúncio de doação</h2>
        <form class="form_produto" enctype="multipart/form-data">
        <div class= 'informacao_produto'> 
            <h3 class= 'info-geral_titulo'>Informações do anúncio</h3>
            <div class = "form_doacao-input"> <!-- Nome do anuncio -->
                <input type="text" name="titulo" placeholder="Título" required class="form__input" data-type="titulo">
                <div class="form_erro-cont">
                    <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                    <span class='span-erro'>Campo inválido - preencha o campo</span>
                </div>
            </div>

            <div class = "form_doacao-input"> <!-- Descrição -->
                <textarea name="descricao" placeholder="Descrição" class="form__input" data-type="descricao" id="descricao" maxlength="150"></textarea>
                <p id="descricaoContador">0/150</p>
            </div>
            
            <div class = "form_doacao-input"> <!-- Categoria -->
                <input type="text" name="categoria" placeholder="Categoria" class="form__input" data-type="categoria">
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
            </div>  
            <hr class="some">
            <div class="informacao_endereco">
                <h3 class="info-geral_titulo">Informações de localização</h3>
                <div class = "form_doacao-input"> <!-- CEP -->
                <input type="text" name="CEP" placeholder="CEP" required class="form__input cep" data-type="CEP" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57)) && event.target.value.length < 8 ">
                <div class="form_erro-cont">
                    <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                    <span class='span-erro'>Campo inválido - preencha o campo</span>
                </div>
            </div>
            
            <div class = "form_doacao-input"> <!-- Cidade -->
                <input type="text" name="cidade" placeholder="Cidade" required class="form__input" data-type="cidade" id="cidade">
                <div class="form_erro-cont">
                    <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                    <span class='span-erro'>Campo inválido - preencha o campo</span>
                </div>
            </div>
                
            <div class = "form_doacao-input"> <!-- Estado -->
                <input type="text" name="estado"  placeholder="Estado" required class="form__input" data-type="estado" id="estado">
                <div class="form_erro-cont">
                    <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                    <span class='span-erro'>Campo inválido - preencha o campo</span>
                </div>
            </div>
                
            </div>
            <hr class="some">
            <div class="informacao_pessoal"> <!-- pessoal -->
            <h3 class="info-geral_titulo">Informações de Contato</h3>
            <div class = "form_doacao-input"><!-- Nome do vendedor -->
                <input type="text" name="nome" placeholder="Nome Completo" required class="form__input" data-type="nome">
                <div class="form_erro-cont">
                    <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                    <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
                
            <div class = "form_doacao-input"> <!-- n° de telefone -->
                <input type="text" name="telefone" placeholder="Telefone" required class="form__input" data-type="telefone">
                <div class="form_erro-cont">
                        <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                        <span class='span-erro'>Campo inválido - preencha o campo</span>
                </div>
                </div>
            </div>
        </div>
        <div class="center">
            <button type='submit'> Publicar </button>
        </div>
        </form>
        <div class="center-btn ">
            <button id='voltarPerfil' type='reset'> Cancelar </button>
        </div>
    </div>
</div>
</div>