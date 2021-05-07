@extends('Template')

@sectioN('conteudo')
<br><br/>

          <div id="cor-fonte">
            <table width="100%">

                <tr>
                    <!-- LOGOS -->
                    <td>
                        <h1>Agradecemos pela preferência!</h1>
                        <br></br>
                        <h5>Em breve você receberá o código de rastreio !</h5>
                        <br></br>
                        <h6>Por e-mail ou por sms do seu telefone cadastrado!</h6>
                        <br></br>
                    </td>

                </tr>
            </table>
            </div>
            <br></br>

            <div align = 'center'>
                <div id="carouselExampleIndicators" class="carousel slide tamanho" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                   </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="imagem/fome-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="imagem/fome-2.jpg" class="d-block w-100" alt="...">
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
              <br></br>
              <h1 id = 'cor-fonte'>Bom Apetite!</h1>

@endsection
