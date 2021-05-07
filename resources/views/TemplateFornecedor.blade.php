<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #09cf1959;
            margin: 0px;
            text-align: center;
        }
        #conteudo-principal {
            background-color: rgb(219, 230, 228);
        }

        .conteudo{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .card{
            background-color: #09cf1959;
            width: 650px;
            margin: 30px;
            height: 670px;
            text-align: center;

        }
        .imagem {
            border-radius: 10px;
        }

        .btn-branco {
            border: 3px solid white;
            border-radius: 30px;
        }
        #fonte{
            font-family:Arial, Helvetica, sans-serif;
            text-align: center;
            color: rgba(0, 100, 0);
            text-decoration: none;
            font-size: 20px
        }
        .tamanho{
            width: 300px;
        }
        #cor-fonte{
            color: rgba(0, 100, 0);
        }
        #cor{
            background-color: #09cf1959;
        }
        #tamanho-fonte{
            font-size: 20px
        }
        #centralizar-itens{
            align-items: center;
        }
        #margem{
            margin: 150px;
        }

        #fixo{
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            z-index: ;

        }
    </style>

</head>

<body id ='fonte'>
    <div>

    <nav id='fixo' class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(106, 209, 120);">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('index') }}">Delivery de Comidas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Entrar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <li><a class="dropdown-item" href="{{ route('login') }}">Cliente</a></li>
                  <li><a class="dropdown-item" href="{{ route('loginParceiro') }}">Fornecedor</a></li>


                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Faça seu cadastro
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <li><a class="dropdown-item" href="{{ route('CadastroCliente') }}">Cliente</a></li>
                  <li><a class="dropdown-item" href="{{ route('CadastroParceiro') }}">Fornecedor</a></li>

                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dúvidas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <li><a class="dropdown-item" href="{{ route('FaleConosco') }}">Fale Conosco</a></li>


                </ul>
              </li>

            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
              <button class="btn btn-outline-success" type="button" onclick=><a href="https://www.google.com.br/"/ target="_blank" id = 'cor-fonte'>Buscar</a></button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <br><br/>

    @yield('conteudo')

        <br><br/>
        <header>

        </header>
    </div>
</body>

</html>
