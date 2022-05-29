<div class= "perfil_fundo-branco" >
    <div class="info-geral"> <!-- info do anuncio -->
        
        <div> <!--separar os inputs em grupo-->
            <h1>Informações do Anúncio</h1>
            <div> <!-- Nome do anuncio -->
                <input type="text" name="nome" placeholder="Título" required class="form__input" data-type="nome">
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
        </div>

        <!--colocar o input de imagem em cima de categoria-->
        <div> <!-- Categoria -->
            <input type="text" name="categoria" placeholder="Categoria" required class="form__input" data-type="categoria">
            <div class="form_erro-cont">
                <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                <span class='span-erro'>Campo inválido - preencha o campo</span>
            </div>
        </div>

        <div>
            <!--dar espaçamento do topo aqui-->

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


    </div>
<hr>
    <div > <!-- pessoal -->
        <h1>Contato</h1>
        <div class='info-geral'>
            <div> <!-- Nome do vendedor -->
                <input type="text" name="nome" placeholder="Nome Completo" required class="form__input" data-type="nome">
                <div class="form_erro-cont">
                    <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                    <span class='span-erro'>Campo inválido - preencha o campo</span>
                </div>
            </div>

            <div> <!-- n° de telefone -->
                <input type="tel" name="telefone" placeholder="Telefone" required class="form__input" data-type="telefone">
                <div class="form_erro-cont">
                    <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                    <span class='span-erro'>Campo inválido - preencha o campo</span>
                </div>
            </div>

            <div> <!-- redes sociais, outras formas de contato, etc -->
                <input type="text" name="adicional" placeholder="Adicional*" required class="form__input" data-type="adicional">
                <div class="form_erro-cont">
                    <img src=<?=IMAGES_PATH.'icon-erro.svg'?>>
                    <span class='span-erro'>Campo inválido - preencha o campo</span>
                </div>
            </div>

            
        </div>
        <div class="center"> 
                <input class="form__button" id="postarProduto" type="submit" value="Postar doação">
        </div>
    </div>
    
    
</div>