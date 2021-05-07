@extends('Template')

@sectioN('conteudo')
<br><br/>

<h1>Delivery de Comidas - Faça seu Pedido Online!</h1>
        <br><br/>
    <div align = 'center'>
      <div id="carouselExampleIndicators" class="carousel slide tamanho" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagem/feijoada.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagem/cafe da manhã.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagem/moqueca de peixe.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagem/mesa-saudavel-2.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <br><br/>
    <div>

        <a href="{{ route('login') }}"  target="_blank" id = 'cor-fonte'> Clik Aqui - Faça Seu Pedido</a>
@endsection
