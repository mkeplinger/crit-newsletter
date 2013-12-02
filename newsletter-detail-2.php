<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Crittenden | Home</title>
    <meta name="author" content="SmashBrand">
    <meta name="viewport" content="960px">
    <link href="http://crittenden-dev.smashbrand.com/media/twitter-bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://crittenden-dev.smashbrand.com/media/twitter-bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://crittenden-dev.smashbrand.com/media/css/_global.css" rel="stylesheet">
    <link href="http://crittenden-dev.smashbrand.com/media/css/page-index.css" rel="stylesheet">
    <link href="http://crittenden-dev.smashbrand.com/media/js/subscriber/chosen/chosen/chosen.css" rel="stylesheet">    
	<link href="http://crittenden-dev.smashbrand.com/media/js/subscriber/jquery-ui-1.9.0/css/start/jquery-ui-1.9.0.custom.min.css" rel="stylesheet">

	<link href="assets/css/newsletter.css" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    	<style type="text/css">
		.container-fluid {
			max-width: 960px;
			margin: 0 auto;
		}
	</style>
    <![endif]-->

    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
    
<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript">

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  function get_current_directory(){
    var url_array = window.location.href.split("/");


    if(searchStringInArray("admin", url_array) == -1){
        // do not record admin pages
        return false;
    }

    else{
        if(searchStringInArray ("retail-space-users", url_array)){
            return "Retail Space Users";
        }
        else if(searchStringInArray ("real-estate-pros", url_array)){
            return "Real Estate Pros";
        }
        else if(searchStringInArray ("insurance", url_array)){
            return "Insurance";
        }
    }

  }

  function searchStringInArray (str, strArray) {
    for (var j=0; j<strArray.length; j++) {
        if (strArray[j].match(str)) return true;
    }
    return false;
  }

  var current_dir = get_current_directory();
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-45735259-1']);
  _gaq.push(['_setDomainName', 'crittenden-dev.smashbrand.com']);
  _gaq.push(['_setCustomVar', 1, 'User Role', 'admin ,cs ,editor ', 1 ]); // Sets a visitor-level (1) variable in slot #1

  if(current_dir){
    _gaq.push(['_setCustomVar', 2, 'Directory', current_dir, 3 ]);
  }

  _gaq.push(['_trackPageview']);

</script>

</head>

<body class="newsletter">

<?php include 'inc/header-newsletter.php'; ?>

<div class="content-wrapper">

	<div class="container-fluid content-area" role="main">

		<div class="news-searchbox">
			<div class="news-searchbox-inner2">
				<h1 class="newsletter-title-inner">Crittenden Newsletter Article Search</h1>
				<form action="#" method="post">
					<div class="top-search">
						<input type="text" name="news-search-input" placeholder="search articles">
						<input type="submit">
						<div class="clear"></div> <!-- .clear -->
					</div> <!-- .top-search -->
					<div class="bottom-search">
						<span><input type="radio" name="newsletter-type" checked="checked"> All Newsletters </span>
						<span><input type="radio" name="newsletter-type"> Crittenden Report Real Estate Financing </span>
						<span><input type="radio" name="newsletter-type"> Retail Space News  </span>
						<span><input type="radio" name="newsletter-type"> Apartment Report </span>
						<span class="advance-search"><a href="#">Advance Search</a></span>
						<div class="clear"></div> <!-- .clear -->
					</div> <!-- .bottom-search -->
				</form>
			</div> <!-- .news-searchbox-inner -->
		</div> <!--- .news-searchbox -->
		
		<div class="add-menu">
			<span class="n-edit"><a href="#">Edit</a></span>
			<span class="f-right"><a href="#">Back to Newsletter Archives</a></span>
			<div class="clear"></div> <!-- .clear -->
		</div> <!-- .add-menu -->
		
		<div class="content-inner">
		
			<div class="vol-head">
				<span class="v-bold">Vol. 29, No. 18</span>
				<span>published Nov 11,2013</span>
			</div> <!-- .vol-head -->
			
			<div class="vol-headline">Crittenden’s</div> <!-- .vol-headline -->
			
			<div class="title-box">
				<h1>Insurance Markets</h1>
				<p>Crittenden Research Inc., P.O. BOX 1150, Novato, California 94948, (800) 421 - 3483</p>
			</div>
			
			<div class="content-text-inner">
			
				<h3>Market Opens For Sub-$4m Multifamily Loans</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
				<br/>
				<h3>Market Opens For Sub-$4m Multifamily Loans</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
				<br/>
				<h3>Market Opens For Sub-$4m Multifamily Loans</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

				<b>Headline about something</b>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
				<br/>
				<h3>Market Opens For Sub-$4m Multifamily Loans</h3>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
			
			</div> <!-- .content-text-inner -->
			
			<div class="clear"></div> <!-- .clear -->
		</div> <!-- .news-offers -->

	</div><!-- .container-fluid .content-area -->

</div> <!-- .content-wrapper -->

<?php include 'inc/footer.php'; ?>

<?php include 'inc/footer_js.php'; ?>

</body>

</html>