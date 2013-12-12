<?php include 'inc/_head.php'; ?>

<!-- NEW CONTENT AREA HERE -->
<div class="content-wrapper container-fluid">

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
						<span>
							<label for="all-newsletters">
								<input type="radio" name="newsletter-type" checked="checked" id="all-newsletters"> All Newsletters 
							</label>
						</span>
						<span>
							<label for="report">
								<input type="radio" name="newsletter-type" id="report"> Crittenden Report Real Estate Financing 
							</label>
						</span>
						<span>
							<label for="retail">
								<input type="radio" name="newsletter-type" id="retail"> Retail Space News 
							</label>
						</span>
						<span class="last">
							<label for="apt-report">
								<input type="radio" name="newsletter-type" id="apt-report"> Apartment Report 
							</label>
						</span>
						<div class="clear"></div> <!-- .clear -->
					</div> <!-- .bottom-search -->
					<p class="submit"><input type="submit" name="submit" value="Search"></p>
				</form>
			</div> <!-- .news-searchbox-inner -->
		</div> <!--- .news-searchbox -->
		
	</div><!-- .container-fluid .content-area -->

</div> <!-- .content-wrapper -->
<!-- END: NEW CONTENT AREA HERE -->

<?php include 'inc/_footer.php'; ?>

</body>

</html>