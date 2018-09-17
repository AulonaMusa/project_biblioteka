<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
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

						<button type="button" class="btn add-button" data-toggle="modal" data-target="#demoModal">Add book</button>

						<div class="modal fade bs-example-modal-lg" id="demoModal">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<div class="modal-row">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>&times;</span>
											</button>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="title">Title: </label>
											<input class="modal-input_item" type="text" required autofocus>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="category">Category: </label>
											<select name="" class="modal-input_item-sm">
												<option value="biographies">Biographies</option>
												<option value="mysteries">Mysteries</option>
												<option value="cooking">Cooking</option>
												<option value="medical">Medical</option>
												<option value="science-math">Science & Math </option>
											</select>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="isbn">ISBN: </label>
											<input class="modal-input_item" type="text" required>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="description">Description: </label>
											<textarea class="modal-input_item" type="textarea" required></textarea>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="author">Author: </label>
											<input class="modal-input_item" type="text" required>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="photo">Photo: </label>
											<input class="modal-input_item" type="file" name="Choose File" accept="image/*">
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="publisher">Publisher: </label>
											<select name="" class="modal-input_item-sm">
												<option value="crown">Crown</option>
												<option value="word">Word</option>
												<option value="dutton">Dutton</option>
												<option value="penguin-press">Penguin Press</option>
												<option value="pearson">Pearson</option>
											</select>
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="year">Year: </label>
											<input class="modal-input_item-sm date" type="month">
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="pages">Pages: </label>
											<input class="modal-input_item-sm" type="number" min="1" max="2000">
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="dimensions">Dimensions: </label>
											<input class="modal-input_item" type="text">
										</div>
										<div class="modal-row">
											<label class="modal-label_item" name="date">Date added: </label>
											<input class="modal-input_item-sm" type="date">
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
								<th>Title</th>
								<th>Category</th>
								<th>ISBN</th>
								<th>Description</th>
								<th>Author</th>
								<th>Photo</th>
								<th>Publisher</th>
								<th>Year</th>
								<th>Pages</th>
								<th>Dimensions</th>
								<th class="edit">Edit</th>
								<th class="delete">Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>#</td>
								<td>#</td>
								<td>#</td>
								<td>#</td>
								<td>#</td>
								<td>#</td>
								<td>#</td>
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
								<td>#</td>
								<td>#</td>
								<td>#</td>
								<td>#</td>
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