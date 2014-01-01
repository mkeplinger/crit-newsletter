<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Crittenden | Home</title>
    <meta name="author" content="SmashBrand">
    <meta name="viewport" content="width=960px">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta name = "format-detection" content = "telephone=no">
    <link href="http://crittenden-dev.smashbrand.com/media/twitter-bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://crittenden-dev.smashbrand.com/media/twitter-bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://crittenden-dev.smashbrand.com/media/css/_global.css" rel="stylesheet">
    <link href="http://crittenden-dev.smashbrand.com/media/css/page-index.css" rel="stylesheet">
    <link href="http://crittenden-dev.smashbrand.com/media/js/subscriber/chosen/chosen/chosen.css" rel="stylesheet">
    <link href="assets/css/newsletter.css" rel="stylesheet">

	<link href="http://crittenden-dev.smashbrand.com/media/js/subscriber/jquery-ui-1.9.0/css/start/jquery-ui-1.9.0.custom.min.css" rel="stylesheet">
	<link href="assets/css/jquery-ui.css" rel="stylesheet">

	<script src="assets/js/modernizr-2.6.2.min.js"></script>

    <!--[if lt IE 9]>
	    <link href="assets/css/ie8.css" rel="stylesheet">
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
    
    <script type="text/javascript" async src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript" async src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript">

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

    <body>
        <header class="gradient">

    <div class="container-fluid">

        <a class="header-logo" href="/"></a>

        <div class="header-directory-options">
        
            <span class="header-directory-title">Directory:</span>

            <span class="header-directory-current">

                <span class="dropdown">
                    <a href="#" id="current_dir" class="dropdown-toggle" data-toggle="dropdown">Retail Space Users <img src="http://crittenden-dev.smashbrand.com/media/images/header/drop-down.png" alt="drop-down"></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            

                                
                                    <li><a class="dir_select" tabindex="-1" href="/retail-space-users">Retail Space Users </a></li>
                                
                                    <li><a class="dir_select" tabindex="-1" href="/real-estate-pros">Real Estate Professionals </a></li>
                                
                                    <li><a class="dir_select" tabindex="-1" href="/insurance">Insurance </a></li>
                                
                                    <li><a class="dir_select" tabindex="-1" href="/newsletter">Retail Space Users </a></li>
                                

                            
                    </ul>
                    

                </span><!-- .dropdown -->

            </span><!-- .header-directory-current -->
        


        </div><!-- .header-directory-options -->

        <div class="header-account-functions">

            <ul>
                
                    <li class="header-account-functions-name"><span>Michael</span></li>
                    
                    
                        <li class="header-account-functions-account"><span><a href="/retail-space-users/admin/">Admin Dashboard</a></span></li>
                    
                    <li class="header-account-functions-logout"><a href="/accounts/logout/">Logout</a></li>
                
            </ul>

        </div><!-- .header-account-functions -->

    </div><!-- .container-fluid -->

</header>