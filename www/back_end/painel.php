<?php include "../layout/back/header.php"; ?>

<?php include "../layout/back/menus/menu_usuario.php"; ?>

<div class="col-xs-12 col-sm-12 col-md-9 pages">
	<h1 class="cor-titulo size_24">Meu Plano</h1>

	<!-- Seção para a tabela de listagem de planos adiquiridos -->
	<div class="sessao_dados">
		<h2 class="laranja-claro size_16">Perfis atualmente contratados</h2>
		<div class="table-responsive">
			<table class="table size_16 cor_titulo_tabela">
				<thead>
					<tr>
						<td colspan="2">Negócio</td>
						<td> Perfil adquirido</td>
						<td>Valor unitário</td>
					</tr>
				</thead>
				<tr>
					<td><input type="radio"></td>
					<td>Negócio 1</td>
					<td>Plano Ultra Certo</td>
					<td>R$ 60,00</td>
				</tr>
				<tr>
					<td><input type="radio"></td>
					<td>Negócio 2</td>
					<td>Plano Siper Certo</td>
					<td>R$ 40,00</td>
				</tr>
				<tr>
					<td><input type="radio"></td>
					<td>Negócio 3</td>
					<td>Plano Certo</td>
					<td>R$ 10,00</td>
				</tr>
				<tr><td colspan="4" class="espaco"></td></tr>
				<tr class="rodape">
					<td colspan="4">
						<a href="" name="editar_perfil" id="editar_perfil" class="btn btn-amarelo">
							<i class="icon-pencil2"></i>Editar perfil
						</a>
						<a href="" name="cancelar_perfil" id="cancelar_perfil" class="btn btn-laranja">
							<i class="icon-cancel"></i>Cancelar perfil
						</a>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<!-- Seção para a tabela de Fatura  -->
	<div class="sessao_dados">
		<h2 class="laranja-claro size_16">Fatura atual</h2>
		<div class="table-responsive">
			<table class="table size_16 cor_titulo_tabela">
				<thead>
					<tr>
						<td colspan="2">Data de Vencimento</td>
						<td> Situação</td>
						<td>Valor da fatura</td>
						<td>Referente à</td>
					</tr>
				</thead>
				<tr>
					<td><input type="radio"></td>
					<td>21/11/2014</td>
					<td>Pagamento confirmado</td>
					<td>R$ 80,00</td>
					<td>1 Plano ultra Certo <br/>1 Plano Super Certo</td>
				</tr>
				<tr><td colspan="5" class="espaco"></td></tr>
				<tr class="rodape">
					<td colspan="5">
						<a href="" name="editar_perfil" id="editar_perfil" class="pagseguro">
							<img src="../imgs/pag_seguro.png">
						</a>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<!-- Seção para a tabela de Proxima Fatura  -->
	<div class="sessao_dados">
		<h2 class="laranja-claro size_16">Próxima fatura</h2>
		<div class="table-responsive">
			<table class="table size_16 cor_titulo_tabela">
				<thead>
					<tr>
						<td colspan="2">Data de Vencimento</td>
						<td> Situação</td>
						<td>Valor da fatura</td>
						<td>Referente à</td>
					</tr>
				</thead>
				<tr>
					<td><input type="radio"></td>
					<td>21/11/2014</td>
					<td>Pagamento confirmado</td>
					<td>R$ 80,00</td>
					<td>1 Plano ultra Certo <br/>1 Plano Super Certo <br/>1 Plano Certo</td>
				</tr>
				<tr><td colspan="5" class="espaco"></td></tr>
				<tr class="rodape">
					<td colspan="5">
						<a href="" name="editar_perfil" id="editar_perfil" class="pagseguro">
							<img src="../imgs/pag_seguro.png">
						</a>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="row-fluid list-inline botoes">
		
		<a href="" class="btn btn-amarelo col-md-3"><i class="icon-undo2"></i>Voltar</a>
		<a href="" class="btn btn-cinza col-md-3">Ver faturas anteriores</a>
		<a href="" class="btn btn-laranja col-md-3">Adquirir mais perfis</a>
		
	</div>

</div>



<?php include "../layout/back/footer.php"; ?>