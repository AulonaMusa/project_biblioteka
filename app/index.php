<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- <link rel="stylesheet" type="text/css" href="style/index.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="style/footer.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="style/header.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/css/buildd.css">
</head>

<body>

<div class="container">

	<!-- <header id="nav-menu">
		<ul class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="authors.php">Authors</a></li>
			<li><a href="books.php">Books</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="login.php">Login</a></li>	
		</ul>
	</header> -->

	<?php
	     include('header.php');
	?>

	<main>
		<div class="content">


			<div class="content-left">

				<div class="slider">
					<p class="text-slider">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<img class="photo-slider" src="img/foto1slider.jpg">
				</div>  

				<div class="article">
					<div class="article--content article-left">
						<p class="article-title">Lorem Ipsum is simply dummy text</p>
						<img class="article-photo" src="img/article-photo-1.jpg">
						<p class="article-date">January 1st - By Lorem Ipsum</p>
						<p class="article-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><br>
						<a class="article-continue" href="single-page.php" target="_blank">Continue Reading</a>
					</div>
					<div class="article--content article-right">
						<p class="article-title">Lorem Ipsum is simply dummy text</p>
						<img class="article-photo" src="img/article-photo-2.jpg">
						<p class="article-date">January 1st - By Lorem Ipsum</p>
						<p class="article-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p><br>
						<a class="article-continue" href="single-page.php" target="_blank">Continue Reading</a>
					</div>
					<div class="article--content article-left">
						<p class="article-title">Lorem Ipsum is simply dummy text</p>
						<img class="article-photo" src="img/article-photo-3.jpg">
						<p class="article-date">January 1st - By Lorem Ipsum</p>
						<p class="article-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><br>
						<a class="article-continue" href="single-page.php" target="_blank">Continue Reading</a>
					</div>
					<div class="article--content article-right">
						<p class="article-title">Lorem Ipsum is simply dummy text</p>
						<img class="article-photo" src="img/article-photo-4.jpg">
						<p class="article-date">January 1st - By Lorem Ipsum</p>
						<p class="article-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><br>
						<a class="article-continue" href="single-page.php" target="_blank">Continue Reading</a>
					</div>
					<div class="article-all_article">
						<a href="all-articles.php">All listed news, click here.</a>
					</div>
				</div>

		    </div>



            <div class="content-right">

            	<div class="latest-popular">
            		<div class="latest-popular-title">
            			<div class="latest-books">
            					<p class="latest-books-title">Latest</p>
            			</div>
            			<div class="popular-books">
            					<p class="popular-books-title">Popular</p>
            			</div>
            		</div>
	            	<div class="latest-popular--content">
	            		<div class="latest-popular-row">
	            			<p class="latest-popular-row-title"> Look Alive Out There </p>
	            			<img class="latest-popular-photo" src="img/latest-books-photo-1.jpg">
	            			<p class="latest-popular-text"> "Sloane Crosley does the impossible. She stays consistently funny and delivers a book that is alive and jumping." ― Steve Martin </p>
	            		</div>
	            		<div class="latest-popular-row">
	            			<p class="latest-popular-row-title"> Futureface: A Family Mystery, an Epic Quest, and the Secret to Belonging </p>
	            			<img class="latest-popular-photo" src="img/latest-books-photo-2.jpg">
	            			<p class="latest-popular-text"> An acclaimed journalist travels the globe to solve the mystery of her ancestry, confronting the question at the heart of the American experience of immigration, race, and identity: Who are my people? </p>
	            		</div>
	            		<div class="latest-popular-row">
	            			<p class="latest-popular-row-title"> A Long Way from Home: A novel </p>
	            			<img class="latest-popular-photo" src="img/latest-books-photo-3.jpg">
	            			<p class="latest-popular-text"> Irene Bobs loves fast driving. Her husband is the best car salesman in southeastern Australia. Together they enter the Redex Trial, a brutal race around the ancient continent, over roads no car will ever quite survive. </p>
	            		</div>
	            	</div>
                </div>


                <div class="categories-sitepages">
	            	<div class="categories">
	            		<p class="categories-title">Categories</p>
	            		<a href="books.php" target="_blank"><p class="category-name">Biographies</p><a>
	            		<a href="books.php" target="_blank"><p class="category-name">Mysteries</p></a>
	            		<a href="books.php" target="_blank"><p class="category-name">Cooking</p></a>
	            		<a href="books.php" target="_blank"><p class="category-name">Medical</p></a>
	            		<a href="books.php" target="_blank"><p class="category-name">Science & Math</p></a>
	            	</div>
	            	<div class="sitepages">
		            	<p class="sitepages-title">Site Pages</p>
		            	<a href="index.php" target="_blank"><p class="sitepages-name">Home</p></a>
		            	<a href="authors.php" target="_blank"><p class="sitepages-name">Authors</p></a>
		            	<a href="books.php" target="_blank"><p class="sitepages-name">Books</p></a>
		            	<a href="about.php" target="_blank"><p class="sitepages-name">About</p></a>
		            	<a href="login.php" target="_blank"><p class="sitepages-name">Login</p></a>
	                </div>
	            </div>
	            	

                <div class="latestvideos">
                	<a href="videos.php" target="_blank"><p class="latestvideos-title">Latest Videos</p></a>       
                	<iframe class="latestvideos-video" src="https://www.youtube.com/embed/22tF3y_epZs"></iframe>
                </div>


            </div> 


		</div>
	</main>


	<div class="footer_section">


			<div class="footer-misc-links">

				<div class="footer-misc">
					<i class="fa fa-star footer-icon"></i><p class="footer--misc">Misc.</p>
					<a href="login.php" target="_blank"><p class="footer-misc-title">Log In</p></a>
					<a href="create-account.php" target="_blank"><p class="footer-misc-title">Sign Up</p></a>
					<a href="https://www.google.com/" target="_blank"><p class="footer-misc-title">Privacy of Policy</p></a>
					<a href="https://www.google.com/" target="_blank"><p class="footer-misc-title">Get in touch</p></a>
				</div>

				<div class="footer-links">
					<i class="fa fa-link footer-icon"></i><p class="footer--links">Links:</p>
					<a href="https://www.npr.org/2017/07/12/533862948/lets-get-graphic-100-favorite-comics-and-graphic-novels" target="_blank"><p class="footer-links-title">Graphic Novel</p></a>
					<a href="https://www.goodreads.com/genres/chapter-books" target="_blank"><p class="footer-links-title">Chapter Book</p></a>
					<a href="https://en.wikipedia.org/wiki/Anthology" target="_blank"><p class="footer-links-title">Anthology</p></a>
					<a href="https://www.barnesandnoble.com/b/picture-books/_/N-2eg0" target="_blank"><p class="footer-links-title">Picture Book</p></a>
					<a href="https://www.elle.com/culture/books/g13978774/best-coffee-table-books/" target="_blank"><p class="footer-links-title">Coffee table book</p></a>
					<a href="https://www.barnesandnoble.com/b/books/cookbooks-food-wine/_/N-29Z8q8Zy3b" target="_blank"><p class="footer-links-title">Literary cookbook</p></a>
				</div> 

			</div>


			<div class="footer-blog">
				<i class="fa fa-comments footer-icon"></i><p class="footer--blog">From the Blog:</p>
				<div class="footer-blog-row">
					<p class="footer-blog-row-title">Helping Writers Become Authors</p>
					<div class="footer-blog-row-content"> 
						<p class="footer-blog-row-content-author">by Linda Yezak</p>
						<p class="footer-blog-row-content-comments">54 Comments</p>
					</div> 
				</div>
				<div class="footer-blog-row">
					<p class="footer-blog-row-title">The Book Designer</p>
					<div class="footer-blog-row-content""> 
						<p class="footer-blog-row-content-author">by Joel Friedlander </p>
						<p class="footer-blog-row-content-comments">2 Comments</p>
					</div> 
				</div>
				<div class="footer-blog-row">
					<p class="footer-blog-row-title">Bustle Books</p>
					<div class="footer-blog-row-content""> 
						<p class="footer-blog-row-content-author">by Kristian Wilson</p>
						<p class="footer-blog-row-content-comments">40 Comments</p>
					</div> 
				</div>
				<div class="footer-blog-row">
					<p class="footer-blog-row-title">Omnivoracious</p>
					<div class="footer-blog-row-content""> 
						<p class="footer-blog-row-content-author">by Chris Schluep</p>
						<p class="footer-blog-row-content-comments">77 Comments</p>
					</div> 
				</div>
				<div class="footer-blog-row">
					<p class="footer-blog-row-title">The Writing Cooperative</p>
					<div class="footer-blog-row-content""> 
						<p class="footer-blog-row-content-author">by Stella J. McKenna</p>
						<p class="footer-blog-row-content-comments">52 Comments</p>
					</div> 
				</div>
					 
			</div>


			<div class="footer-message">
				<i class="fa fa-envelope footer-icon"></i><p class="footer--message">Message:</p>
				<form>
				<div class="footer-message-row">
					<p class="footer-message-row-name">Name:</p>
					<input class="input-type footer-message-row-input_type" type="text" name="Name">
				</div>
				<div class="footer-message-row">
					<p class="footer-message-row-name">Email:</p>
					<input class="input-type footer-message-row-input_type" type="email" name="Email">
				</div>
				<div class="footer-message-row">
					<p class="footer-message-row-name">Message:</p>
					<textarea rows="5" cols="30" class="footer-message-row-txtmessage" name="Message"></textarea> 
				</div>
				<input class="footer-message-submit" type="submit" value="Submit">
				</form>
		     </div>

 
	</div>


	<?php 
		include('footer_copyrights.php');
	?>


</div>

</body>

</html>