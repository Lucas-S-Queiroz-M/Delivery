@extends('Template')

@sectioN('conteudo')


    <br><br/>
    <div>
        <br><br/>
        <h1>Usuários Cadastrados</h1>
        <br><br/>

    </div>

    <table style="width:100%">

        <tr>


            <th colspan="1">
                <hr><hr/>Nome
                <hr><hr/>
            </th>

            <th colspan="1">
                <hr><hr/> Endereço
                <hr><hr/>
            </th>

            <th colspan="1">
                <hr><hr/> Telefone
                <hr><hr/>
            </th>

        </tr>
        <tr>

            <td align="center"> Joana </td>
            <td align="center"> Rua S/N </td>
            <td align="center">(82)8989-9898</td>

        </tr>
        <tr>

            <td align="center"> Eve </td>
            <td align="center"> Rua S/N </td>
            <td align="center">(82)9888-9999</td>

        </tr>
    </table>


    @endsection
