<?php 
include('../mysqlconnection.php'); 
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
	$user = $_SESSION['username'];
	echo "Currently Logined in as: $user";
	Echo "<a href= '../logout.php'> Not you? or Do you want to logout? </a>";} else {
    // Redirect them to the login page
    header("Location: ../websitelogin.php");
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
			<h2>Windows 10 November 2019 Update</h2>
				<p>Microsoft’s John Cable explains that this update “will be a scoped set of features for select performance improvements, enterprise features, and quality enhancements.” In other words, expect a select set of bug fixes, performance tweaks, and a handful of business features.If you’re sick of big Windows 10 updates every six months, Windows 10’s November 2019 Update (19H2) is the update for you! Installing this update will be more like installing a standard cumulative update like the updates that arrive on Patch Tuesday. It should be a small download with a fast installation process—no long reboot and purging of old Windows installations necessary.Computers with the May 2019 Update (also known as 19H1) installed will get a small patch via Windows Update and quickly update themselves to the November 2019 Update (19H2.) This will likely arrive sometime in November 2019, as the name suggests.With Windows 7’s end of life looming on January 14, 2020, Microsoft clearly wants to avoid a repeat of last year’s buggy October 2018 Update.It’s already out there and being tested. As of September 5, Microsoft says every Windows Insider in the “Release Preview” ring has been offered Windows 10 version 1909. A year ago, Windows 10’s October 2018 Update was released without any testing in the Release Preview ring at all. On October 10, Microsoft said Windows Insiders in the Release Preview ring already had what Microsoft expects is the final build. </p>
			</div>

		<!-- comments section -->
		<div class="col-md-6 col-md-offset-3 comments-section">
			<!-- comment form -->
			<form class="clearfix" action=".././index.php" method="post" id="comment_form">
				<h4>Post a comment:</h4>
				<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
				<button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
			</form>

			<!-- Display total number of comments on this post  -->
			<h2><span id="comments_count">2</span> Comment(s)</h2>
			<hr>
			<!-- comments wrapper -->
			<div id="comments-wrapper">
				<div class="comment clearfix">
						<img src="profile.png" alt="" class="profile_pic">
						<div class="comment-details">
							<span class="comment-name">Melvine</span>
							<span class="comment-date">DEC 5, 2019</span>
							<p>post 1</p>
							<a class="reply-btn" href="#" >reply</a>
						</div>
						<div>
							<!-- reply -->
							<div class="comment reply clearfix">
								<img src="profile.png" alt="" class="profile_pic">
								<div class="comment-details">
									<span class="comment-name">Brandon</span>
									<span class="comment-date">DEC 5, 2019</span>
									<p>Thats neat</p>
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