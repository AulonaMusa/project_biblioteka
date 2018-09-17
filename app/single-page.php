<!DOCTYPE html>
<html>
<head>
	<title>Single Page</title>
	<!-- <link rel="stylesheet" type="text/css" href="style/single-page.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="style/footer.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="style/header.css"> -->
	<link rel="stylesheet" type="text/css" href="style/css/buildd.css">
 
</head>

<body>

<div class="container">

<?php
     include('header.php');
?>

	<main>
		<div class="content">

			<div class="single_page-article">

				<div class="article-content">
					<div class="article-content-photo">
						<img class="article-content-img" src="img/article-photo-1.jpg">
					</div>
					<div class="article-content-paragraph_1">
						<p class="article-content-title">LOREM IPSUM IS SIMPLY DUMMY TEXT</p>
						<p class="article-content-text">
							<i>What is Lorem Ipsum?</i> <br>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
						<p class="article-content-text">
							<i>Where does it come from?</i> <br>
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. <br>

							The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
					    </p>
					</div>
					<div class="article-content-paragraph_2">
						<p class="article-content-text">
							<i>Why do we use it?</i> <br>
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). <br>
						</p>
						<p class="article-content-text">
							<i>Where can I get some?</i><br>
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
						</p>
					</div>
					<div class="article-content-author-date">
						<i><p>By: Lorem Ipsum</p></i>
						<i><p>1st January 2018</p></i>
					</div>
					<div class="article-content-tags">
						<a href="article-tags.php" target="_blank"><p class="article-content-tags-item">lorem</p></a>
						<a href="article-tags.php" target="_blank"><p class="article-content-tags-item">ipsum</p></a>
					</div>
				</div>

				<div class="content-comments">
					<div class="content-comments-title">Comments</div>
					<div class="content--comments">
						<p class="content--comments-author">By: Lorem Ipsum</p>
						<p class="content--comments-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<span class="content--comments-date">02.08.2018</span>
					</div>
					<div class="content--comments">
						<p class="content--comments-author">By: Lorem Ipsum</p>
						<p class="content--comments-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<span class="content--comments-date">02.08.2018</span>
					</div>
					<div class="content--comments">
						<p class="content--comments-author">By: Lorem Ipsum</p>
						<p class="content--comments-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<span class="content--comments-date">02.08.2018</span>
					</div>
			    </div>
				
			    <div class="content-write_comment">
					<div class="content-write_comment-title">Write a comment
				    </div>
					<div class="content-write_comment-send-comment-form">
						<textarea class="content-write_comment-txtmessage"></textarea>
						<button class="content-write_comment-submit" type="submit">Send</<button>
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



