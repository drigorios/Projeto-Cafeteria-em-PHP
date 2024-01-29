<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php
	include 'header.php';
	?>

<body>
	<div class="wrapper">
		<?php include 'menu.php' ?>

		<div class="main">
			<?php include 'topo.php' ?>

			<main class="content">
				<form action="cadastroproduto.php" method="post">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Cadastro de Produtos</h1>

						<div class="row">
							<div class="mb-3 col-6">
								<label for="nome" class="form-label">Produto</label>
								<input type="text" class="form-control" name="nomeproduto" id="nomeproduto" placeholder="Digite o nome do produto">
							</div>
							<div class="mb-3 col-6">
								<label for="descricao" class="form-label">Descrição</label>
								<textarea class="form-control" name="descricao" id="descricao" rows="1"></textarea>
							</div>
							<div class="mb-3">
								<label for="categoria" class="form-label">Categoria de Produto</label>
								<select class="form-select form-select-sm" name="categoria" id="categoria">
									<option value="Bebida Quente">Bebida quente</option>
									<option value="Bebida Gelada">Bebida Gelada</option>
									<option value="Bolo e sobremesa">Bolo e Sobremesa</option>
									<option value="Sanduiche e Salgado">Sanduiche e Salgado</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="estoque" class="form-label">Estoque</label>
								<input type="number" class="form-control" name="estoque" id="estoque" min="0" max="200" step="1">
							</div>
							<div class="mb-3">
								<label for="estoque" class="form-label">Preço</label>

								<input type="number" class="form-control" name="preco" id="preco" min="1" max="200" step="0.50">

							</div>

						</div>


					</div>
					<input type="submit" class="btn btn-primary btn-lg" value="Salvar">
				</form>
			</main>
			<div class="main">
				<div class="container-fluid p-0">
					<div class="container">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">Nome</th>
										<th scope="col">Descrição</th>
										<th scope="col">Preço</th>
										<th scope="col">Categoria</th>
										<th scope="col">Estoque</th>
										<th scope="col" colspan="2">Ações</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include 'conexao.php';

									//DB VARIÁVEIS
									$sql = "SELECT * FROM produtos";
									$busca = mysqli_query($conexao, $sql);


									//WHILE

									while ($dados = mysqli_fetch_array($busca)) {
										$nomeproduto = $dados['nomeproduto'];
										$descricao = $dados['descricao'];
										$preco = $dados['preco'];
										$categoria = $dados['categoria'];
										$estoque = $dados['estoque'];
									?>
										<tr>
											<td><?php echo $nomeproduto ?></<< /td>
											<td><?php echo $descricao ?></td>
											<td><?php echo "R$" .number_format($preco,0,",","."); ?></td>
											<td><?php echo $categoria ?></td>
											<td><?php echo $estoque ?></td>


											<!-- Modal trigger button -->
											<td>
												<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modaleditar">
													Editar<i class="bi bi-pencil-fill"></i></button>

												<!-- Modal Body -->
												<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
												<div class="modal fade" id="modaleditar" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
													<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="modalTitleId">
																	Atualize as informações abaixo:
																</h5>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body">Body</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
																	Fechar
																</button>
																<button type="button" class="btn btn-primary">Salvar</button>
															</div>
														</div>
													</div>
												</div>
											<td>
												<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalexcluir">
													Excluir<i class="bi bi-trash-fill"></i></button>

												<!-- Modal Body -->
												<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
												<div class="modal fade" id="modalexcluir" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
													<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="modalTitleId">
																	Deseja excluir o perfil abaixo?
																</h5>
																<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div class="modal-body">Body</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
																	Cancelar
																</button>
																<button type="button" class="btn btn-danger">Excluir</button>
															</div>
														</div>
													</div>
												</div>

												<!-- Optional: Place to the bottom of scripts -->
												<script>
													const myModal = new bootstrap.Modal(
														document.getElementById("modalId"),
														options,
													);
												</script>
											</td>
											<?php
										}
											?>
										</tr>
								</tbody>
							</table>
						</div>

					</div>

				</div>
			</div>
			<!-- Modal trigger button -->
			<td>
				<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modaleditar">
					Editar<i class="bi bi-pencil-fill"></i></button>

				<!-- Modal Body -->
				<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
				<div class="modal fade" id="modaleditar" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalTitleId">
									Edite as informações do pedido abaixo:
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">Body</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
									Fechar
								</button>
								<button type="button" class="btn btn-primary">Salvar</button>
							</div>
						</div>
					</div>
				</div>
			<td>
				<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalexcluir">
					Excluir<i class="bi bi-trash-fill"></i></button>

				<!-- Modal Body -->
				<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
				<div class="modal fade" id="modalexcluir" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalTitleId">
									Deseja excluir o pedido abaixo?
								</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">Body</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
									Cancelar
								</button>
								<button type="button" class="btn btn-danger">Excluir</button>
							</div>
						</div>
					</div>
				</div>

				<!-- Optional: Place to the bottom of scripts -->
				<script>
					const myModal = new bootstrap.Modal(
						document.getElementById("modalId"),
						options,
					);
				</script>

			</td>
			</tr>
			</tbody>
			</table>
		</div>

	</div>

	</div>
	</div>

	<footer class="footer">
		<?php include 'footer.php' ?>
	</footer>
	</div>
	</div>

	<script src="js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>