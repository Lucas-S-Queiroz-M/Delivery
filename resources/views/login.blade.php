@extends('Template')

@sectioN('conteudo')
<br><br/>


    <div >

        <h1 style="margin: 5%;">Tela de Login</h1>
        <hr></hr>

    </div>

        <div >
        </br>
            <label for="nome" /  id = 'cor-fonte'>E-mail:</label>
            <input type="text" id="nome" name="nome" placeholder="e-mail"><br></br>
            <label for="senha" /  id = 'cor-fonte'>Senha:</label>
            <input type="password" name="senha" placeholder="senha"><br></br>
            <button type="button" onclick=><a href="{{ route('CadastroCliente') }}"/ target="_blank" id = 'cor-fonte'> Cadastre-se</a></button>
            <button type="button" onclick=><a href="{{ route('Cardapio') }}"/ target="_blank" id = 'cor-fonte'> Entrar</a></button>
        </form>
        <hr></hr>
        <h2 style="margin: 5%;">Seja bem vindo!</h2>
        <hr></hr>
        </div>
        <script src="acesso.js" type="text/javascript"></script>

@endsection
