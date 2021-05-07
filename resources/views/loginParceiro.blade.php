@extends('Template')

@sectioN('conteudo')
<br><br/>


    <div >

        <h1 style="margin: 5%;">Tela de Login Fornecedor</h1>
        <hr><hr/>

    </div>

        @if(session('erro'))
        <!-- LOGIN ou SENHA INCORRETA -->
        <div class="alert alert-danger">
            <strong>Erro!</strong> {{session('erro')}}
        </div>
        <!-- FIM [LOGIN OU SENHA INCORRETA] -->
        @endif

        <div >
        <br/>
        <form action="{{ route('acessar') }}" method="POST">
            @csrf
            <div class="form-group">
            <label for="email"  id = 'cor-fonte'>E-mail:</label>
            <input type="email"  id="campo-email" name="email" placeholder="e-mail">
            </div>
            <br><br/>
            <div class="form-group">
            <label for="senha"   id = 'cor-fonte'>Senha:</label>
            <input type="password" name="senha" placeholder="senha">
            </div>
            <br><br/>
            <button type="button" ><a href="{{ route('CadastroCliente') }}" target="_blank" id = 'cor-fonte'> Cadastre-se</a></button>
            <button id='cor-fonte'> Entrar</button>
        </form>
        <hr><hr/>
        <h2 style="margin: 5%;">Seja bem vindo!</h2>
        <hr><hr/>
        </div>
        <script src="acesso.js" type="text/javascript"></script>

@endsection
