<!DOCTYPE html>
<html>
<head>
	<title>Year</title>
	<link rel="stylesheet" type="text/css" href="style/css/build.css">
	<link rel="stylesheet" type="text/css" href="style/css/build.min.css">
	<link rel="stylesheet" type="text/javascript" href="js/build.min.js">
</head>
<body>

	<main>

		<div class="content">

			<?php include('header.php'); ?>

			<div class="page-content">
				<div class="page--content">

					<div class="add_button-content">
					    <button type="button" class="btn add_button">Add year</button>
				    </div>

					<table class="table table-bordered table-hover table-content">

						<thead>
							<tr>
								<th>Year</th>
								<th class="edit">Edit</th>
								<th class="delete">Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
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

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
	
</body>
</html>