<div id="tab_menu_content" class="hidden">
    <?php get_template_part( 'template-parts/navigation/nav', 'tab_menu' ); ?>
</div>
    
<div id="search_menu_content" class="hidden">
    <div class="container">
        <div class="sub-nav">
            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                 <input type="text" value="" name="s" id="s"  class="navInput" placeholder="Search..." required><br>
                 <input type="submit" value="Search" id="search" class="navSubmit">
            </form>

            <h4>Common Searches</h4>
            <ul>
                <li><a href="[pre]go/undergraduate/departments/index.html">What majors and concentrations are offered?</a></li>
                <li><a href="[pre]/go/graduate/mba/index.html">What MBA programs are offered?</a></li>
                <!---<li><a href="#">What financial aid packages are available?</a></li> -->
                <li><a href="[pre]/go/undergraduate/current_students/index.html">Where can I find my course scheme?</a></li>
                <li><a href="[pre]/go/special_programs/21cap.html">What is the 21 CAP Program?</a></li> 
                <li><a href="[pre]/go/special_programs/sbel.html">What is the SBEL program?</a></li>            
            </ul>
        </div>
    </div>
</div>

    <div class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 menu">
					<div>
						<h2>Programs</h2>
                        <?wp_nav_menu( array( 'theme_location' => 'footer_programs', 'container_class' => 'new_menu_class' ) ); ?>
					</div>
				</div>
				<div class="col-sm-3 menu">
					<div>
						<h2>Faculty &amp; Research</h2>
                        <?wp_nav_menu( array( 'theme_location' => 'footer_fr', 'container_class' => 'new_menu_class' ) ); ?>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div>
						<h2>Info for</h2>
						<?wp_nav_menu( array( 'theme_location' => 'footer_info', 'container_class' => 'new_menu_class' ) ); ?>
						<br>
					</div>
				</div>
				<div class="col-sm-3 menu">
					<div class="footer-widget" id="footer-white">
						<h2>Contact us</h2>
						<address>
							<p>2600 6th St NW<br>
							Washington, DC 20059<br>
							202-806-1500<br>
							<a href="mailto:BusinessDean@howard.edu">BusinessDean@howard.edu</a></p>
						</address><!--===div class="">
                            <a class="facebook" href="https://www.facebook.com/HowardHUSB?ref=hl" target="_blank" title="facebook"> <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
                            <a class="twitter" href="%20https://twitter.com/howardhusb" target="_blank" title="twitter"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                            <a class="gplus" href="https://www.linkedin.com/edu/school?id=162185&trk=edu-up-nav-menu-home" target="_blank" title="gplus"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                    </div====-->
					</div>
				</div>
				<div class="col-md-2 hidden-sm text-center">
					<div class="footer-widget"><img alt="Howard School of Business Logo" class="img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/howard_logo.png"></div>
				</div>
			</div>
			<div class="bottom">
				<a class="active" href="#" title="Copyright 2017 Howard University School of Business">Copyright 2017</a> <a href="search.html" title="search">Search</a> <!--a href="#" title="">Disclaimer</a=-->
				 <a href="go/info/donors.html" title="">Give</a> <a href="go/info/developers.html" title="">Web Team @ Howard School of Business</a>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="creds">
						<a href="https://www.efmd.org/" target="_blank"><img alt="Howard School of Business Logo" class="img-responsive logo1" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/efmd.jpg" width="100px;"></a> <a href="http://www.aacsb.edu/" target="_blank"><img alt="Howard School of Business Logo" class="img-responsive logo2" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/aacsb.jpeg" width="100px;"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.min.js">
	</script> 
	<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js">
	</script> 
	<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.scrollTo.js">
	</script> 
	<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/w3data.js">
	</script> 
	<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/custom.js">
	</script> 
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

	<script>
	       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');     ga('create', 'UA-67868915-1', 'auto');     ga('send', 'pageview');  
        
        

    
	</script>
	<?php wp_footer(); ?> 
</body>
</html>