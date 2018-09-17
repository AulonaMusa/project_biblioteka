<!DOCTYPE html>
<html>
<head>
	<title>Single Page Books</title>
	<!-- <link rel="stylesheet" type="text/css" href="style/single-page-books.css"> -->
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

			<div class="book-page">

				<div class="book-page-info">
					<div class="book-page-about-info">
						<img class="book-page-info-img" src="img/books-item-photo1.jpg">
						<div class="book-page-info-icon">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
					    </div>
					    <!-- <div class="book-page-info-text"> -->
					    <p class="book-page-info-text-category"><b>Category:</b> Biographies</p>
					    <p class="book-page-info-text-ISBN"><b>ISBN:</b> 123456789</p>
					    <p class="book-page-info-text-dimensions"><b>Dimensions:</b> 9.3 x 6.2 x 0.8</p>
					    <p class="book-page-info-text-pages"><b>Pages:</b> 320</p>
					    <p class="book-page-info-text-date"><b>Date added:</b> 06.08.2018</p>	
					    <!-- </div>  -->
					</div>
				</div>

				<div class="book-page-details">
					<div class="book-page-about-details">
						<h2 class="book-page-details-title">Night</h2>
						<table class="book-page-details-table">
							<tr>
								<th class="book-page-details-table-name">Year:</th>
								<td class="book-page-details-table-value">2016</td>
							</tr>
							<tr>
								<th class="book-page-details-table-name">Author:</th>
								<td class="book-page-details-table-value">Elie Wiesel</td>
							</tr>
							<tr>
								<th class="book-page-details-table-name">Publisher:</th>
								<td class="book-page-details-table-value">Crown</td>
							</tr>
						</table>
						
						<p class="book-page-details-download">Download</p>
						<p class="book-page-details-text">A New Translation From The French By Marion Wiesel Night is Elie Wiesel's masterpiece, a candid, horrific, and deeply poignant autobiographical account of his survival as a teenager in the Nazi death camps. This new translation by Marion Wiesel, Elie's wife and frequent translator, presents this seminal memoir in the language and spirit truest to the author's original intent. And in a substantive new preface, Elie reflects on the enduring importance of Night and his lifelong, passionate dedication to ensuring that the world never forgets man's capacity for inhumanity to man. Night offers much more than a litany of the daily terrors, everyday perversions, and rampant sadism at Auschwitz and Buchenwald; it also eloquently addresses many of the philosophical as well as personal questions implicit in any serious consideration of what the Holocaust was, what it meant, and what its legacy is and will be.</p>
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