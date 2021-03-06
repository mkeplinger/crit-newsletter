<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Crittenden | Newsletter</title>
<meta name="author" content="SmashBrand">
<meta name="viewport" content="960px">
<link href="assets/twitter-bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/twitter-bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="assets/css/_global.css" rel="stylesheet">
<link href="assets/css/page-index.css" rel="stylesheet">
<link href="assets/js/chosen/chosen/chosen.css" rel="stylesheet">
<link href="assets/css/newsletter.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">


<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

</head>

<body class="newsletter">

<?php include 'inc/header-newsletter.php'; ?>

<div class="content-wrapper">

	<div class="container-fluid content-area" role="main">

		<h1 class="center newsletter-title">Crittenden Newsletter Article Search</h1>

		<div class="news-searchbox news-searchbox-advance">
			<div class="news-searchbox-inner-advance">
				<form action="#" method="post">
					<h3>Find articles with...<span>( feel free to leave some fields blank, and just use what you need )</span></h3>
					<div class="top-search">
						<div class="col-wrap">
							<div class="s1">all these words:</div>
							<div class="s2"><input type="text" name="search" class="search-advance-input"></div>
							<div class="s3">
								<div class="select-wrapper2">
									<select>
										<option>search anywhere in article</option>
										<option>option 1</option>
										<option>option 2</option>
									</select>
								</div>
							</div>
							<div class="clear"></div> <!-- .clear -->
						</div> <!-- .col-wrap -->
						<div class="col-wrap">
							<div class="s1">any of these words:</div>
							<div class="s2"><input type="text" name="search" class="search-advance-input"></div>
							<div class="s3">
								<div class="select-wrapper2">
									<select>
										<option>search only in title</option>
										<option>option 1</option>
										<option>option 2</option>
									</select>
								</div>
							</div>
							<div class="clear"></div> <!-- .clear -->
						</div> <!-- .col-wrap -->
						<div class="col-wrap">
							<div class="s1">this exact word or phrase:</div>
							<div class="s2"><input type="text" name="search" class="search-advance-input"></div>
							<div class="s3">
								<div class="select-wrapper2">
									<select>
										<option>search only in title</option>
										<option>option 1</option>
										<option>option 2</option>
									</select>
								</div>
							</div>
							<div class="clear"></div> <!-- .clear -->
						</div> <!-- .col-wrap -->
					</div> <!-- .top-search -->
					<div class="publish-block">
						<span>published between:</span> 
						<span><input type="checkbox" name="aytime" checked="checked"></span>
						<span><label for="from">anytime</label></span>
						<span><input type="text" id="from" name="from"></span>
						<span><label for="to">and</label></span>
						<span><input type="text" id="to" name="to"></span>
						<div class="clear"></div> <!-- .clear -->
					</div>
					<div class="bottom-search">
						<span class="label">Limit search to...</span>
						<span><input type="radio" name="newsletter-type" checked="checked"> All Newsletters </span>
						<span><input type="radio" name="newsletter-type"> Crittenden Report Real Estate Financing </span>
						<span><input type="radio" name="newsletter-type"> Retail Space News  </span>
						<span><input type="radio" name="newsletter-type"> Apartment Report </span>
						<div class="clear"></div> <!-- .clear -->
					</div> <!-- .bottom-search -->
					<p class="submit"><input type="submit" name="submit" value="Search"></p>
				</form>
			</div> <!-- .news-searchbox-inner -->
		</div> <!--- .news-searchbox -->
		
	</div><!-- .container-fluid .content-area -->

</div> <!-- .content-wrapper -->

<?php include 'inc/footer.php'; ?>

<?php include 'inc/footer_js.php'; ?>

</body>

</html>