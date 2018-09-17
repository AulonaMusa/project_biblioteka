<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
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
						<button type="button" class="btn add-button" data-toggle="modal" data-target="#demoModal">Add User</button>
						<div class="modal fade bs-example-modal-lg" id="demoModal">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<div class="modal-row">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span>
											</button>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="username">Username: </label>
											<input class="modal-input_item" type="text" required autofocus>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="password">Password: </label>
											<input class="modal-input_item" type="password" required>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="email">Email: </label>
											<input class="modal-input_item" type="email" required>
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
								<th>Username</th>
								<th>Password</th>
								<th>Email</th>
								<th class="edit">Edit</th>
								<th class="delete">Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>#</td>
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