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
	Echo "<a href= '../logout.php'> Not you? or Do you want to logout? </a>";
	
} else {
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
			<h2>Shellshock</h2>
				<p>Shellshock, also known as Bashdoor,[1] is a family of securitybugs[2] in the Unix Bash shell, the first of which was disclosed on24 September 2014. Shellshock could enable an attacker to causeBash to execute arbitrary commands and gain unauthorizedaccess[3] to many Internet-facing services, such as web servers,that use Bash to process requests.On 12 September 2014, Stéphane Chazelas informed Bash'smaintainer Chet Ramey [1] of his discovery of the original bug,which he called "Bashdoor". Working with security experts, hedeveloped a patch for the issue, which by then had been assignedthe vulnerability identifier CVE-2014-6271 (https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-6271).[1][4] The existenceof the bug was announced to the public on 24 September 2014when Bash updates with the patch were ready for distribution.[5]The bug Chazelas discovered caused Bash to unintentionallyexecute commands when the commands are concatenated to theend of function definitions stored in the values of environmentvariables.[1][6] Within days of its publication a variety of relatedvulnerabilities were discovered (CVE-2014-6277 (https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-6277), CVE-2014-6278 (https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-6278), CVE-2014-7169 (https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-7169), CVE-2014-7186 (https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-7186) and CVE-2014-7187 (https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-7187)). Ramey addressed these with a series of furtherpatches.[7][8]Attackers exploited Shellshock within hours of the initialdisclosure by creating botnets of compromised computers toperform distributed denial-of-service attacks and vulnerabilityscanning.[9][10] Security companies recorded millions of attacksand probes related to the bug in the days following thedisclosure.[11][12]Because of the potential to compromise millions of unpatchedsystems Shellshock was compared to the Heartbleed bug in itsseverity.[3][13] </p>
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
			<h2><span id="comments_count">2</span> Comment(s)</h2>
			<hr>
			<!-- comments wrapper -->
			<div id="comments-wrapper">
				<div class="comment clearfix">
						<img src="profile.png" alt="" class="profile_pic">
						<div class="comment-details">
							<span class="comment-name">Melvine</span>
							<span class="comment-date">DEC 5</span>
							<p>W0W!</p>
							<a class="reply-btn" href="#" >reply</a>
						</div>
						<div>
							<!-- reply -->
							<div class="comment reply clearfix">
								<img src="profile.png" alt="" class="profile_pic">
								<div class="comment-details">
									<span class="comment-name">Test</span>
									<span class="comment-date">Apr 24, 2018</span>
									<p>Cool test</p>
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