<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<!-- <link rel="stylesheet" type="text/css" href="style/books.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="style/footer.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="style/header.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/css/buildd.css">
</head>

<body>

	<div class="container">
		<?php
		     include('header.php');
		?>
		<main>

			<div class="content">
				<div class="books-content">

					<div class="search">
						<select class="dropdown">
							<option class="dropdown-item" value="" hidden="true">Choose by category</option>
							<option class="dropdown-item" value="Biographies">Biographies</option>
							<option class="dropdown-item" value="Mysteries">Mysteries</option>
							<option class="dropdown-item" value="Cooking">Cooking</option>
							<option class="dropdown-item" value="Medical">Medical</option>
							<option class="dropdown-item" value="Science & Math">Science & Math</option>
							<option class="dropdown-item" value="All">All</option>
						</select>
						<input class="search-books" type="search" name="search" placeholder="Search books..">
						<i class="fa fa-search search-button"></i>
			        </div> 

			        <div class="books">
			        	<div class="books-row">
			        		<div class="books-row-item-1">
			        			<img class="books-row-item-photo" src="img/books-item-photo1.jpg">
			        			<a href="single-page-books.php"><i class="fa fa-eye books-row-item-icon"></i></a>
			        			<p class="books-row-item-title">Night</p>
			        			<p class="books-row-item-author">By: Elie Wiesel</p>
			        			<p class="books-row-item-category">Category: Biographies</p>
			        			<p class="books-row-item-text">Night -- A terrifying account of the Nazi death camp horror that turns a young Jewish boy into an agonized witness to the death of his family...the death of his innocence...and the death of his God.</p>
			        		</div>
			        		<div class="books-row-item-2">
			        			<img class="books-row-item-photo" src="img/books-item-photo2.jpg">
			        			<a href="single-page-books.php"><i class="fa fa-eye books-row-item-icon"></i></a>
			        			<p class="books-row-item-title">The Girl with the Dragon Tattoo</p>
			        			<p class="books-row-item-author">By: Stieg Larsson</p>
			        			<p class="books-row-item-category">Category: Mysteries</p>
			        			<p class="books-row-item-text">"The Girl in the Spider s Web," the new book in the Millennium Series, is available now Murder mystery, family saga, love story, and financial intrigue combine into one satisfyingly complex and entertainingly atmospheric novel.</p>
			        		</div>
			        		<div class="books-row-item-3">
			        			<img class="books-row-item-photo" src="img/books-item-photo3.jpg">
			        			<a href="single-page-books.php"><i class="fa fa-eye books-row-item-icon"></i></a>
			        			<p class="books-row-item-title">Eat to Live</p>
			        			<p class="books-row-item-author">By: Joel Fuhrman</p>
			        			<p class="books-row-item-category">Category: Cooking</p>
			        			<p class="books-row-item-text">Hailed a "medical breakthrough" by Dr. Mehmet Oz, EAT TO LIVE offers a highly effective, scientifically proven way to lose weight quickly. The key to Dr. Joel Fuhrman's revolutionary six-week plan is simple: health = nutrients / calories.</p>
			        		</div>
			        	</div>
			        	<div class="books-row">
			        		<div class="books-row-item-1">
			        			<img class="books-row-item-photo" src="img/books-item-photo4.jpg">
			        			<a href="single-page-books.php"><i class="fa fa-eye books-row-item-icon"></i></a>
			        			<p class="books-row-item-title">Healthy Sleep Habits, Happy Child</p>
			        			<p class="books-row-item-author">By: Marc Weissbluth</p>
			        			<p class="books-row-item-category">Category: Medical</p>
			        			<p class="books-row-item-text">A pediatrician outlines his program to help parents ensure a good night's sleep for their children by working with their natural sleep cycles.</p>
			        		</div>
			        		<div class="books-row-item-2">
			        			<img class="books-row-item-photo" src="img/books-item-photo5.jpg">
			        			<a href="single-page-books.php"><i class="fa fa-eye books-row-item-icon"></i></a>
			        			<p class="books-row-item-title">Number the Stars</p>
			        			<p class="books-row-item-author">By: Lois Lowry</p>
			        			<p class="books-row-item-category">Category: Science & Math</p>
			        			<p class="books-row-item-text">As the German troops begin their campaign to "relocate" all the Jews of Denmark, Annemarie Johansen’s family takes in Annemarie’s best friend, Ellen Rosen, and conceals her as part of the family.</p>
			        		</div>
			        		<div class="books-row-item-3">
			        			<img class="books-row-item-photo" src="img/books-item-photo6.jpg">
			        			<a href="single-page-books.php"><i class="fa fa-eye books-row-item-icon"></i></a>
			        			<p class="books-row-item-title">Heart of Darkness</p>
			        			<p class="books-row-item-author">By: Joseph Conrad</p>
			        			<p class="books-row-item-category">Category: Travel</p>
			        			<p class="books-row-item-text">Heart of Darkness (1899) is a short novel by Polish novelist Joseph Conrad, written as a frame narrative, about Charles Marlow's experience as an ivory transporter down the Congo River in Central Africa.</p>
			        		</div>
			        	</div>
			        </div>

			    </div>
		        
		    </div>

		</main>


		<?php 
			include('footer_copyrights.php');
		?>

	</div>

</body>

</html>



