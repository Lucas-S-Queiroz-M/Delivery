@extends('Template')

@sectioN('conteudo')
<br><br/>

    <div >

        <h1 style="margin: 5%;">Cadastrado Com Sucesso!</h1>


    </div>

        <div >
        <br/>
        <button type="button" ><a href="{{ route('index') }}" target="_blank" id = 'cor-fonte'> Voltar para o inicio</a></button>
        <button type="button" ><a href="{{ route('CadastroCardapio') }}" target="_blank" id = 'cor-fonte'> Cadastrar Cardapio</a></button>
        </form>

        <h2 style="margin: 5%;">Seja bem vindo!</h2>

        </div>
        <script src="acesso.js" type="text/javascript"></script>
@endsection
