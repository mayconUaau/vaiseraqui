<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<div class='col-xs-12 col-md-6'>
						<h4 class="box-title"><?= $tipo ?></h4>
					</div>
					<div class='col-xs-12 col-md-6 text-right form-group'>
						<a href="<?= PATHSITE ?>admin/<?= $tabela ?>/form?tipo=<?= $get['tipo'] ?>">
							<button type="button" class="btn btn-violet btn-rounded waves-effect waves-light">Adicionar</button>
						</a>
						<button onclick='$("#form").submit()' type="button" class="btn btn-danger btn-rounded waves-effect waves-light">Excluir</button>
					</div>

					<? if ($lista) {  ?>
						<div class='col-xs-12 paddingZeroM'>
							<form method='post' id='form'>

								<div class="table-responsive">
									<table class="table  sortable">
										<thead>
											<tr>
												<th class='menorTh'>Excluir</th>
												<th>Nome</th>
												<th>Galeria</th>
												<th>Vídeos</th>
												<th>Ordenar</th>
											</tr>
										</thead>
										<tbody>
											<? foreach ($lista as $elemento) { ?>
												<tr class="ui-state-default sort" rel="<?= $elemento->id ?>">
													<td><input type="checkbox" name="excluir[]" value="<?= $elemento->id ?>" /> </td>
													<td>
														<a href="<?= PATHSITE ?>admin/<?= $tabela ?>/form/<?= encode($elemento->id) ?>/<?= arruma_url($elemento->titulo) ?>?tipo=1">
															<?= $elemento->titulo ?>
														</a>
													</td>
													<td>
														<a href="<?= PATHSITE ?>admin/<?= $tabela ?>/fotos/<?= encode($elemento->id) ?>?tipo=<?= $get['tipo'] ?>" class="subdivisao">
															Ver Fotos <i class="bi bi-image-fill"></i>
														</a>
													</td>
													<td>
														<a href="<?= PATHSITE ?>admin/<?= $tabela ?>/videos/<?= encode($elemento->id) ?>?tipo=<?= $get['tipo'] ?>" class="subdivisao">
															Vídeos <i class="bi bi-collection-play-fill"></i>
														</a>
													</td>
													<td><img src="<?= PATHSITE ?>admins/assets/images/ordenar.png" /> </td>
												</tr>
											<? } ?>
										</tbody>
									</table>
								</div>
								<input type="hidden" name="nexc" value="1">
							</form>
						</div>
					<? } ?>
				</div>
			</div>
		</div>