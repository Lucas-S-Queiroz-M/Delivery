@extends('TemplateFornecedor')

@sectioN('conteudo')
<br><br/>

        <div id="alinhar-centro">

            <h1 > CADASTRO CARDÁPIO</h1>

        </div>
            <div id="margem">
                <h4 >Preencha os dados dos Produtos:</h4><br/>
                <!-- CATEGORIA -->
                <div class="form-group">
                    <label for="campo-categoria">Categoria:</label>
                    <select class="form-control" name="categoria" id="campo-categoria">
                        <option value="1">Sanduiche</option>
                        <option value="2">Pizza</option>
                        <option value="3">Tapioca</option>
                        <option value="4">Açaí</option>
                        <option value="5">Petiscos</option>
                    </select>
                </div>
                <br/>

                <p >Sabor:</p>
                <input name="nome" type="text" size="40" placeholder="Sabor:"/></p>
                <!-- Ingredientes -->
                  <div class="form-group">
                    <label for="campo-ingredientes">Ingredientes:</label>
                    <textarea class="form-control" id="campo-ingredientes" name="ingredientes"></textarea>
                  </div>
                  <br/>
                <p >Serve Quantas Pessoas:</p>
                <input name="nome" type="text" size="8" placeholder="Quantidade:"/></p>
                <br/><br/>

                <!-- Imagem -->
                <div class="form-group">
                    <label>Insira uma foto ou imagem do Prato:</label><br/><br/>
                    <input type="file" class="form-control" name="capa">
                </div>
                <br/><br/>

                <button type="button" ><a href="{{ route('index') }}" target="_blank" id = 'cor-fonte'> Cancelar</a></button>
                <button type="button" ><a href="{{ route('CadastradoComSucessoCardapio') }}" target="_blank" id = 'cor-fonte'> Confirmar</a></button>


            </div>

            <br/>





        <script src="acesso.js" type="text/javascript"></script>
@endsection
