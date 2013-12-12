<div class="send-us-comments">

	<div class="container-fluid">

		<div class="row-fluid">

			<div class="span12">

				<p><b>If you have any comments or suggestions please send your comments to the editor.</b></p>

				<a href="mailto:awilson@crittendenonline.com?bcc=patrick@crittendenonline.com&amp;subject=User%20Feedback%20Regarding%20Insurance%20Program%20Directory." class="btn" target="_blank">Send Comments</a>

			</div><!-- .span12 -->

		</div><!-- .row-fluid -->

	</div><!-- .container-fluid -->

</div><!-- .send-us-comments -->



        <footer>

    <div class="footer-top">

        <div class="container-fluid">

            <p>Your source for Advanced Information and In-Depth Analysis</p>

        </div><!-- .container-fluid -->

    </div><!-- .footer-top -->

    <div class="footer-middle">

        <div class="container-fluid">

            <div class="footer-middle-content-left">

                <p><b>Crittenden Research, Inc.</b> is a leading source of forecast and analysis on financial markets, insurance and real estate, with members nationwide. Since 1972 we have provided to our members inside information that is overlooked by advertising-driven news sources, helping our members plan strategies that keep them and their companies ahead of the competition.</p>

                <p>Our editorial team includes reporters, researchers, and financial analysts. This inside information and forecasts are delivered through reports, directories, special real estate briefs, special insurance briefs and e-mails. We utilize many forms of delivery for our publications to ensure our unique analysis and insight is delivered as quickly and early as possible. Relevant contacts and other information are included with many stories.</p>

            </div><!-- .footer-middle-content-left -->

            <img class="footer-middle-badge" src="http://crittenden-dev.smashbrand.com/media/images/footer/footer-badge.png" alt="footer-badge">

            <div class="footer-middle-right">

                <p>To subscribe or inquire<br>Call: (800) 421-3483</p>
                <p><a href="mailto:awilson@crittendenonline.com?bcc=patrick@crittendenonline.com&amp;subject=User%20Feedback%20Regarding%20Insurance%20Program%20Directory." target="_blank">Contact Editor</a></p>

            </div><!-- .footer-middle-right -->

        </div><!-- .container-fluid -->

    </div><!-- .footer-middle -->

    <div class="footer-bottom">

        <div class="container-fluid">

            <p class="pull-left">Copyright &copy; 2012 Crittenden.com All Rights Reserved.</p>
            <p class="pull-right">Developed by <a href="http://www.smashbrand.com" target="_blank">SmashBrand</a></p>
        </div><!-- .container-fluid -->

    </div><!-- .footer-bottom -->

</footer>

        <!-- Javascript
================================================== -->
<script src="http://crittenden-dev.smashbrand.com/media/twitter-bootstrap/js/jquery.js"></script>
<script src="http://crittenden-dev.smashbrand.com/media/twitter-bootstrap/js/bootstrap-dropdown.js"></script>
<script src="http://crittenden-dev.smashbrand.com/media/twitter-bootstrap/js/bootstrap-modal.js"></script>
<script src="http://crittenden-dev.smashbrand.com/media/js/subscriber/chosen/chosen/chosen.jquery.js"></script>
<script src="http://crittenden-dev.smashbrand.com/media/js/jquery.placeholder.min.js"></script>
<script src="http://crittenden-dev.smashbrand.com/media/js/subscriber/functions.js"></script>
<script src="http://crittenden-dev.smashbrand.com/media/js/search.js"></script>
<script src="http://crittenden-dev.smashbrand.com/media/js/secure-content.js"></script>
<script src="assets/twitter-bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/respond.src.js"></script>
<script src="assets/js/functions.js"></script>
<script>
    function goBack(){
        window.history.back();
    }
</script>


        
        	<script type="text/javascript">

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
