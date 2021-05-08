@extends('Template')

@sectioN('conteudo')
<br><br/>

        <div align="center">
            <br/><br/>
            <h1 > CADASTRO DE PARCEIRO</h1>
            <br/>
            @if(session('sucesso'))
                <!-- LOGIN ou SENHA INCORRETA -->
                <div class="alert alert-secess">
                    {{session('sucesso')}}
               </div>
                <!-- FIM [LOGIN OU SENHA INCORRETA] -->
            @endif
            <br/>

            <h4 >Preencha seus dados:</h4><br/>
            <p >Empresa: Razão Social:</p>
            <input name="nome" type="text" size="40" placeholder="Razão Social:"/></p><br/>
            <p >Empresa: Nome Fantasia:</p>
            <input name="nome" type="text" size="40" placeholder="Nome Fantasia:"/></p>
            <br/>
            <p >Empresa: CNPJ:</p>
            <input name="nome" type="text" size="40" placeholder="CNPJ:"/></p>
            <br/>
            <p >Nome: Pessoa Fisica completo:</p>
            <input name="nome" type="text" size="40" placeholder="Nome completo:"/></p>

            <label>Idade:</label>
            <input name="nome" type="text" size="2" placeholder="Idade:"/></p><br/>

            <label>CPF:</label>
            <input name="nome" type="text" size="10" placeholder="CPF:"/></p><br/>

            <label>Telefone:</label>
            <input name="nome" type="text" size="20" placeholder="N° Telefone:"/></p><br/>


            <label>E-mail:</label>
            <input name="email" type="text" size="40" placeholder="e-mail:"/></p><br/>

            <h4 >Criar Senha</h4>
            <label for="senha" >Insira  sua   senha:</label>
            <input type="password" name="senha" placeholder="Insira sua senha:"><br/><br/>
            <label for="senha"  >Confirme sua senha:</label>
            <input type="password" name="senha" placeholder="Confirme sua senha:"><br/><br/>


            <h4 >Endereço:</h4>
            <html>

            <head>

                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

                <!-- Adicionando Javascript -->
                <script>
                    function limpa_formulário_cep() {
                        //Limpa valores do formulário de cep.
                        document.getElementById('rua').value = ("");
                        document.getElementById('bairro').value = ("");
                        document.getElementById('cidade').value = ("");
                        document.getElementById('uf').value = ("");
                        document.getElementById('país').value = ("");
                    }

                    function meu_callback(conteudo) {
                        if (!("erro" in conteudo)) {
                            //Atualiza os campos com os valores.
                            document.getElementById('rua').value = (conteudo.logradouro);
                            document.getElementById('bairro').value = (conteudo.bairro);
                            document.getElementById('cidade').value = (conteudo.localidade);
                            document.getElementById('uf').value = (conteudo.uf);
                            document.getElementById('país').value = (conteudo.país);
                        } //end if.
                        else {
                            //CEP não Encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    }

                    function pesquisacep(valor) {

                        //Nova variável "cep" somente com dígitos.
                        var cep = valor.replace(/\D/g, '');

                        //Verifica se campo cep possui valor informado.
                        if (cep != "") {

                            //Expressão regular para validar o CEP.
                            var validacep = /^[0-9]{8}$/;

                            //Valida o formato do CEP.
                            if (validacep.test(cep)) {

                                //Preenche os campos com "..." enquanto consulta webservice.
                                document.getElementById('rua').value = "...";
                                document.getElementById('bairro').value = "...";
                                document.getElementById('cidade').value = "...";
                                document.getElementById('uf').value = "...";
                                document.getElementById('país').value = "...";

                                //Cria um elemento javascript.
                                var script = document.createElement('script');

                                //Sincroniza com o callback.
                                script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                                //Insere script no documento e carrega o conteúdo.
                                document.body.appendChild(script);

                            } //end if.
                            else {
                                //cep é inválido.
                                limpa_formulário_cep();
                                alert("Formato de CEP inválido.");
                            }
                        } //end if.
                        else {
                            //cep sem valor, limpa formulário.
                            limpa_formulário_cep();
                        }
                    };
                </script>
            </head>

            <body>
                <!-- Inicio do formulario -->
                <form method="get" action=".">
                    <br/>
                    <label >Cep:</label>
                    <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                           onblur="pesquisacep(this.value);" placeholder="CEP:"/></label><br/>
                    <br/>
                    <label >Rua:</label>
                    <input name="rua" type="text" id="rua" size="60" placeholder="Rua:"/></label><br/>
                    <br/>
                    <label >Bairro:</label>
                    <input name="bairro" type="text" id="bairro" size="40" placeholder="Bairro:"/></label><br/>
                    <br/>

                    <label >Complemento:</label>
                    <input name="nome" type="text" size="50" placeholder="Complemento:"/>

                    <br/><br/>
                    <label >Cidade:</label>
                    <input name="cidade" type="text" id="cidade" size="40" placeholder="Cidade:"/></label><br/>
                    <br/>
                    <label >Estado:</label>
                    <input name="uf" type="text" id="uf" size="2" placeholder="Estado:"/></label><br/><br/>

                    <label >País:</label>
                    <input name="pais" type="text" id="país" size="10" placeholder="País: Brasil"/></label><br/>
                    <br/>

                    <button type="button" ><a href="{{ route('index') }}" target="_blank" id = 'cor-fonte'> Cancelar</a></button>
                    <button type="button" ><a href="{{ route('CadastradoComSucessoFornecedor') }}" target="_blank" id = 'cor-fonte'> Confirmar</a></button>
                </form>
            </body>

            </html>

        </div>
        <script src="acesso.js" type="text/javascript"></script>

@endsection
