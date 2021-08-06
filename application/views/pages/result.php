<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"> <?= $title ?></h1>
		<div class="btn-group mr-2">
			<a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Price</th>
					<th>Developer</th>
					<th>Release Date</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>

				<?php foreach($result as $game) { ?>
					<tr>
						<td><?= $game['id'] ?></td>
						<td><?= $game['name'] ?></td>
						<td><?= $game['price'] ?></td>
						<td><?= $game['developer'] ?></td>
						<td><?= $game['release_date'] ?></td>
						<td>
							<a href="<?= base_url('games/edit/') ?><?= $game['id']?>"
								class="btn btn-warning tbn-sm"><i class="fas fa-pencil-alt"></i>Edit</a>
								<a href="<?= base_url('games/delete/') ?><?= $game['id']?>"
								class="btn btn-danger tbn-sm"><i class="fas fa-trash"></i>Delete</a>
						</td>
						
					</tr>
				
				<?php }?>
			</tbody>
		</table>
	</div>
</main>