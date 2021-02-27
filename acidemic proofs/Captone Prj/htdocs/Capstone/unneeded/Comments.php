<?php 
include('mysqlconnection.php'); 
?>
<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blog Post</title>
<?php
session_start();

if ( isset( $_SESSION['username'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
    Echo "<a href=logout.php> Do you want to logout?</a>";
} else {
    // Redirect them to the login page
    header("Location: websitelogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comment and reply system in PHP</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 post">
			<h2>Casper</h2>
			<p>Casper (c. 1997 – 14 January 2010[1]) was a male domestic cat who attracted worldwide media attention in 2009 when it was reported that he was a regular bus commuter in Plymouth in Devon, England.[2] He appeared on BBC News,[3] was the subject of a newspaper editorial in The Guardian,[4] and had a book written about him, Casper the Commuting Cat.[2] </p>
		</div>

		<!-- comments section -->
		<div class="col-md-6 col-md-offset-3 comments-section">
			<!-- comment form -->
			<form class="clearfix" action="./index.php" method="post" id="comment_form">
				<h4>Post a comment:</h4>
				<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
				<button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
			</form>

			<!-- Display total number of comments on this post  -->
			<h2><span id="comments_count">0</span> Comment(s)</h2>
			<hr>
			<!-- comments wrapper -->
			<div id="comments-wrapper">
				<div class="comment clearfix">
						<img src="profile.png" alt="" class="profile_pic">
						<div class="comment-details">
							<span class="comment-name">Melvine</span>
							<span class="comment-date">Apr 24, 2018</span>
							<p>This is the first reply to this post on this website.</p>
							<a class="reply-btn" href="#" >reply</a>
						</div>
						<div>
							<!-- reply -->
							<div class="comment reply clearfix">
								<img src="profile.png" alt="" class="profile_pic">
								<div class="comment-details">
									<span class="comment-name">Awa</span>
									<span class="comment-date">Apr 24, 2018</span>
									<p>Hey, why are you the first to comment on this post?</p>
									<a class="reply-btn" href="#">reply</a>
								</div>
							</div>
						</div>
					</div>
			</div>
			<!-- // comments wrapper -->
		</div>
		<!-- // comments section -->
	</div>
</div>
<!-- Javascripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>