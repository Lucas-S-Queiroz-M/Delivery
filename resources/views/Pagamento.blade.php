@extends('Template')

@sectioN('conteudo')

<br><br/>

	<div>
		<table width="100%">

			<tr>
				<!-- LOGOS -->
				<td>
					<h1>Delivery de Comidas</h1>
					<h2>Bem Vindo!</h2>
				</td>

			</tr>
		</table>
	</div>

	<div id="conteudo-principal">
	<table id = 'cor' width="100%">

		<tr>

			<td valign="top">




				<hr/>



				<details>
					<summary>Horário de atendimento</summary>
					<p>Segunda a sexta das 8h as 20h</p>
				</details>


				<hr/>

				<!-- FORMULARIO -->
				<h3>Pague com o Cartão</h3>
                <img src="imagem/cartões.jpg" alt="img" width="185" height="112">
				<fieldset>
					<legend>Dados do Cartão</legend>
					<form action="">
						<label for="nome">Informe seu nome:</label>
						<input type="text" id="nome" name="nome" placeholder="Igual ao cartão"/>
						<br><br/>

						<label for="num-cartao">Número do Cartão:</label>
						<input type="text" id="cartao" name="num-cartao" placeholder="0000 0000 0000 0000"/>
						<br><br/>
                        <label for="cod-cartao">Código do Cartão:</label>
						<input type="text" id="cartao" name="cod-cartao" placeholder="  000  "/>
						<br><br/>

						<label for="data">Validade do cartão</label>
						<input type="date" id="data" name="data"/>
						<br><br/>

						<label>Cartão:</label>
						<input type="radio" value="credito" name="cartao" checked="true" /> Crédito
						<input type="radio" value="debito"  name="cartao"/> Débito
						<input type="radio" value="pix"  name="cartao"/> Pix
						<br><br/>

						<label for="parcela">Número de Parcelas:</label>
						<input type="text" list="parcela" name="parcela" placeholder="1x"/>
						<datalist id="parcela">
							<option>1x</option>
							<option>2x</option>
							<option>3x</option>
							<option>4x</option>
						</datalist>
						<br><br/>

						<button type="button" onclick=><a href="{{ route('Finalizar') }}"/ target="_blank" id = 'cor-fonte'>Confirmar Pagamento</a></button>    </p>
                        <br></br>
                        <br></br>
					</form>
				</fieldset>
			</td>
	</table>
	</div>

    @endsection
