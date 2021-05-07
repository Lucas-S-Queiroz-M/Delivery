@extends('Template')

@sectioN('conteudo')


    <br><br/>
    <div>
        <br><br/>
        <h1>Produtos adicionados ao carrinho</h1>
        <br><br/>

    </div>

    <table style="width:100%" >

        <tr align="center">


            <th colspan="1">
                <hr><hr/>Código do Produto
                <hr><hr/>
            </th>

            <th colspan="1">
                <hr><hr/> Nome do Produto
                <hr><hr/>
            </th>

            <th colspan="1">
                <hr><hr/> Quantidade
                <hr><hr/>
            </th>

            <th colspan="1">
                <hr><hr/> Valor
                <hr><hr/>
            </th>

        </tr>
        <tr>

            <td align="center"> 100 </td>
            <td align="center"> Açaí </td>
            <td align="center">(1)</td>
            <td align="center">R$18,90</td>

        </tr>
        <tr>

            <td align="center"> 200 </td>
            <td align="center"> Sanduiche </td>
            <td align="center">(1)</td>
            <td align="center">R$34,00</td>

        </tr>
    </table>

    <table style="width:100%">
        <tr align="center">


            <th colspan="1">
                <hr><hr/>Resumo do Pedido
                <hr><hr/>
            </th>

            <th colspan="1">
                <hr><hr/> Frete
                <hr><hr/>
            </th>

            <th colspan="1">
                <hr><hr/> Prazo de Entrega
                <hr><hr/>
            </th>

            <th colspan="1">
                <hr><hr/> Total
                <hr><hr/>
            </th>

        </tr>
        <tr>

            <td align="center"> Produto (2)</td>
            <td align="center"> R$10,00 </td>
            <td align="center">(50)min</td>
            <td align="center">R$62,90</td>

        </tr>

    </table>
    <hr><hr/>
    <br><br/>
    <table style="width:100%">
        <tr align="center">
            <td><button type="button" onclick=><a href="{{ route('index') }}"/ target="_blank" id = 'cor-fonte'>Cancelar</a></button>    </p></td>
            <td><button type="button" onclick=><a href="{{ route('Cardapio') }}"/ target="_blank" id = 'cor-fonte'>Adicionar mais Produtos</a></button>    </p></td>
            <td><button type="button" onclick=><a href="{{ route('Pagamento') }}"/ target="_blank" id = 'cor-fonte'>Finalizar Compra</a></button>    </p></td>
        </tr>
    </table>
    <br><br/>
    @endsection
