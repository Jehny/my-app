<?php include "../layout/back/header.php"; ?>

<?php include "../layout/back/menus/menu_usuario.php"; ?>

<div class="col-xs-12 col-sm-12 col-md-9 pages">
	<div class="row-fluid dados_perfil">
		<div class="col-xs-6 col-sm-4 col-md-3">
			<p class="foto"><img src="../imgs/foto_prefil.png"></p>
			<p class="botao_alterar"><a href="" class="btn btn-laranja"><i class="icon-camera"></i>Alterar minha imagem</a></p>
		</div>
		<div class="col-xs-6 col-sm-8 col-md-9 informacoes">
			<p class="nome size_26">Camila Ramalho</p>
			<p class="info size_16">CPF: <span>123.456.789-01</span></p>
			<p class="info size_16">E-mail: <span>teste@teste.com.br</span></p>
			<p class="info size_16">Telefone: <span>(085) 98888-8888</span></p>
			<p class="info size_16">Celular: <span>(085) 98888-8888</span></p>
		</div>
	</div>
	
	<!-- Seção para a tabela de listagem de planos adiquiridos -->
	<div class="sessao_dados">
		<h1 class="cor-titulo size_24">Plano(s)</h1>
		<div class="row-fluid">
			<div class="col-xs-8 col-sm-9 col-md-10 perfis_contratados">
				<p>Perfi(s) contratado(s) <span>2</span></p>
				<p>Valor total: <span>R$ 90,00</span></p>
				<p>Data de vencimento da fatura: <span>20/09/2015</span></p>
				<p>Situação: <span>Pendente pagamento</span></p>
			</div>
			<div class="col-xs-4 col-sm-3 col-md-2 detalhes_planos">
				<p><a href="" class="btn btn-amarelo"><i class="icon-eye"></i>Ver detalhes</a></p>
			</div>
			
		</div>
	</div>

	<!-- Seção de avisos -->
	<div class="sessao_dados">
		<h1 class="cor-titulo size_24">Aviso(s)</h1>
		<div class="row-fluid aviso">
			<div class="col-xs-12 col-sm-9 col-md-10 descricao">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 botao">
				<p><a href="" class="btn btn-laranja">Ver comentário</a></p>
			</div>
		</div>
		<div class="row-fluid aviso">
			<div class="col-xs-12 col-sm-9 col-md-10 descricao">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 botao">
				<p><a href="" class="btn btn-laranja">Ver fatura</a></p>
			</div>
		</div>
		<div class="row-fluid aviso">
			<div class="col-xs-12 col-sm-9 col-md-10 descricao">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-2 botao">
				<p><a href="" class="btn btn-laranja">Ver comentário</a></p>
			</div>
		</div>
	</div>

	<!-- Seção de favoritos -->
	<div class="sessao_dados favoritos_perfil">
		<h1 class="cor-titulo size_24">Meu(s) favorito(s)</h1>
		<div class="row-fluid lista">
			<div class="col-xs-6 col-sm-3 col-md-3">
				<p class="image"><img src="../imgs/img_favoritos.png"></p>
				<p class="nome size_18"><a href="">Negócio 1</a></p>
				<p class="resumo">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<p class="image"><img src="../imgs/img_favoritos.png"></p>
				<p class="nome size_18"><a href="">Negócio 1</a></p>
				<p class="resumo">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<p class="image"><img src="../imgs/img_favoritos.png"></p>
				<p class="nome size_18"><a href="">Negócio 1</a></p>
				<p class="resumo">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<p class="image"><img src="../imgs/img_favoritos.png"></p>
				<p class="nome size_18"><a href="">Negócio 1</a></p>
				<p class="resumo">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>

		<div class="row-fluid botao">
				<p><a href="" class="btn btn-amarelo"><i class="icon-eye"></i>Ver todos</a></p>
			</div>
	</div>

</div>



<?php include "../layout/back/footer.php"; ?>