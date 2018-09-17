<!DOCTYPE html>
<html>
<head>
	<title>Links</title>
	<link rel="stylesheet" type="text/css" href="style/css/build.css">
	<link rel="stylesheet" type="text/css" href="style/css/build.min.css">
	<script src="js/build.min.js"></script>
</head>
<body>

	<main>
		
		<div class="content">
			<?php include('header.php'); ?>

			<div class="page-content">
				<div class="page--content">

					<div class="add_button-modal">

						<button type="button" class="btn add-button" data-toggle="modal" data-target="#demoModal">Add Link</button>

						<div class="modal fade bs-example-modal-lg" id="demoModal">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<div class="modal-row">
											<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
											</button>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="name">Name: </label>
											<input class="modal-input_item" type="text" required autofocus>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="link">Link: </label>
											<input class="modal-input_item" type="url" required>
										</div>
										<div class="modal-row">
											<button type="button" class="btn btn-save">Save</button>
											<button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<table class="table table-bordered table-hover table-content">

						<thead>
							<tr>
								<th>Name</th>
								<th>Link</th>
								<th class="edit">Edit</th>
								<th class="delete">Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>#</td>
								<td>#</td>
								<td><button type="button" class="btn btn-edit">
									<span class="oi oi-pencil edit-icon"></span>
								</button></td>
								<td><button type="button" class="btn btn-delete">
									<span class="oi oi-trash delete-icon"></span>
								</button></td>
							</tr>
							<tr>
								<td>#</td>
								<td>#</td>
								<td><button type="button" class="btn btn-edit">
									<span class="oi oi-pencil edit-icon"></span>
								</button></td>
								<td><button type="button" class="btn btn-delete">
									<span class="oi oi-trash delete-icon"></span>
								</button></td>
							</tr>
						</tbody>
						
					</table>

				</div>
			</div>
		</div>
	</main>
	
</body>
</html>