@extends('Template')

@sectioN('conteudo')


        <div style="overflow-x: auto" /  align="center">
            <h1 >Escolha seu Pedido</h1>
            <br><br/>


          <div class="conteudo">
            <div class="card" id = 'centralizar-itens'>

                  <h3 id = "cor"><p >Delivery - Sanduiche</p></h3><hr/>
                  <img src="imagem/x-tudo.jpg" alt="img" width="185" height="112">
                  <hr/>
                  <p id = "cor-fonte" id = 'tamanho-fonte'>Pão Bola 150g, Alface, Tomate, 2 Fatias de Queijo Mussarela, 2 Fatias de Presunto, 2 Hambúrgueres Artesanais, 3 Fatias de Bacon, Calabresa, 1 Ovo, Cheddar, Catupiry, 80g de Frango Desfiado.</p>
                  <form action="http://www2.correios.com.br/encomendas/malote/simular_preco.cfm"/ target="_blank"> <hr/>
                    <h3>De <s>R$ 39,00</s> por <mark><strong id = 'cor-fonte'>R$ 34,00<strong></mark></h3><hr/>
                  <p>  <input type="submit" id = 'cor-fonte' value="Calcular frete" class="submit"> <br><br/>
                  <button type="button" onclick=><a href="{{ route('Carrinho') }}"/ target="_blank" id = 'cor-fonte'>Comprar</a></button>    </p>
              </form>
            </div>
            <div class="card"  id = 'centralizar-itens'>

                        <h3 id = "cor"><p >Delivery - Açaí</p></h3><hr/>
                        <img src="imagem/acai.jpg" alt="img" width="385" height="112">
                        <hr/>
                        <p id = "cor-fonte">AÇAÍ TRADICIONAL 500ML + GRANOLA + BANANA + LEITE CONDENSADO
                          Aproveite nossas promoções!! Imagem ilustrativa.
                          Serve 1 pessoa</p><hr/>
                        <form action="http://www2.correios.com.br/encomendas/malote/simular_preco.cfm"/ target="_blank"> <hr/>
                            <h3>De <s>R$ 26,90</s> por <mark><strong id = 'cor-fonte'>R$ 18,90<strong></mark></h3><hr/>
                            <p>  <input type="submit" id = 'cor-fonte' value="Calcular frete" class="submit"> <br><br/>
                            <button type="button" onclick=><a href="{{ route('Carrinho') }}"/ target="_blank" id = 'cor-fonte'>Comprar</a></button>    </p>
                        </form>
            </div>
            <div class="card"  id = 'centralizar-itens'>

                        <h3 id = "cor"><p >Delivery - Diet</p></h3>
                        <img src="imagem/saudavel-1.jpeg" alt="img" width="185" height="185">

                        <p id = "cor-fonte">FRANGO AGRIDOCE + ARROZ INTEGRAL + OVO COZIDO + LEGUMES COZIDO REFOGADO - 1 UNIDADE DISPONIVEL
                          Frango em cubos ao molho agridoce com arroz integral e legumes cozido refogado no azeite e ervas (maxixe, cenoura e repolho) - peso 400g
                          </p>
                        <form action="http://www2.correios.com.br/encomendas/malote/simular_preco.cfm"/ target="_blank"> <hr/>
                            <h3>De <s>R$ 29,00</s> por <mark><strong id = 'cor-fonte'>R$ 17,00<strong></mark></h3><hr/>
                            <p>  <input type="submit" id = 'cor-fonte' value="Calcular frete" class="submit"> <br><br/>
                            <button type="button" onclick=><a href="{{ route('Carrinho') }}"/ target="_blank" id = 'cor-fonte'>Comprar</a></button>    </p>
                        </form>
            </div>

          </div>
        </div>
        <div style="overflow-x: auto">
            <div class="conteudo">
              <div class="card"  id = 'centralizar-itens'>
                <h3 id = "cor"><p >Delivery - Jantar</p></h3>
                <img src="imagem/mesa-saudavel-2.jpeg" alt="img" width="385" height="212">

                <p >ESCONDIDINHO DE MACAXEIRA C/CARNE SECA E QUEIJO QUALHO + BATATA GRATINADA + MACARRÃO DE LEGUMES AO MOLHO BRANCO + ARROZ INTEGRAL C/LEGUMES + ARROZ BRANCO + SALADA CRUA + SUCO DE LARANJA - Serve 8 Pessoas</p>
                <form action="http://www2.correios.com.br/encomendas/malote/simular_preco.cfm"/ target="_blank"> <hr/>

                  <h3>De <s>R$ 399,00</s> por <mark><strong id = 'cor-fonte'>R$ 299,00<strong></mark></h3>
                    <hr/>
                    <p>  <input type="submit" id = 'cor-fonte' value="Calcular frete" class="submit"> <br><br/>
                    <button type="button" onclick=><a href="{{ route('Carrinho') }}"/ target="_blank" id = 'cor-fonte'>Comprar</a></button>    </p>
                </form>
              </div>
              <div class="card"  id = 'centralizar-itens'>
                <h3 id = "cor"><p >Delivery - Café Regional</p></h3>
                <img src="imagem/cafe da manhã.jpeg" alt="img" width="185" height="212">

                <p id = "cor-fonte">MACAXEIRA + CUZCUZ C/LEITE + CALABRESA + OVO FRITO + QUEIJO COALHO + PÃO + MAMÃO + BOLO + LEITE + IOGURTE - Serve 8 Pessoas</p>
                <form action="http://www2.correios.com.br/encomendas/malote/simular_preco.cfm"/ target="_blank"> <hr/>

                  <h3>De <s>R$ 299,00</s> por <mark><strong id = 'cor-fonte'>R$ 199,00<strong></mark></h3><hr/>
                    <p>  <input type="submit" id = 'cor-fonte' value="Calcular frete" class="submit"> <br><br/>
                    <button type="button" onclick=><a href="{{ route('Carrinho') }}"/ target="_blank" id = 'cor-fonte'>Comprar</a></button>    </p>
                </form>
              </div>

              <div class="card"  id = 'centralizar-itens'>
                <h3 id = "cor"><p >Delivery - Almoço</p></h3>
                <img src="imagem/feijoada.jpeg" alt="img" width="285" height="212">
                <hr/>
                <p id = "cor-fonte">Feijoada - Arroz,couve,torresmo e farofa - Serve 1 pessoa</p>
                <form action="http://www2.correios.com.br/encomendas/malote/simular_preco.cfm"/ target="_blank"> <hr/>
                    <h3>De <s>R$ 49,90</s> por <mark><strong id = 'cor-fonte'>R$ 40,00<strong></mark></h3>
                      <hr/>
                    <p>  <input type="submit" id = 'cor-fonte' value="Calcular frete" class="submit"> <br><br/>
                    <button type="button" onclick=><a href="{{ route('Carrinho') }}"/ target="_blank" id = 'cor-fonte'>Comprar</a></button>    </p>
                </form>
              </div>

            </div>
          </div>

  </body>
</html>
