			<!-- footer -->
			<footer class="footer" role="contentinfo">

                <h2>Keep Up With Us</h2>

                <!-- Subscribe Form -->

                <form id="contact_form" name="contact_form" method="post" action="form.php">

                        <div>
                            <input type="text" name="first_name" value="" placeholder="First Name" />
                        </div>

                        <div>
                            <input type="text" name="last_name" value="" placeholder="Last Name" />
                        </div>

                        <div>
                            <input type="email" name="email" value="" placeholder="Email Address"/>
                        </div>

                        <input id="submit" type="submit" name="submit" value="Subscribe" />

                </form>

                <!-- Social Media -->

                <div class="social_bar">

                    <a href="https://www.facebook.com/pages/Swing-Baseball-and-Softball-Training-Center/678470655687358" target="_blank">
                        <img class="social_media_icon" alt="Facebook" src="http://localhost/wp-content/uploads/2017/07/facebook.png">
                    </a>
                    <a href="http://www.twitter.com/" target="_blank">
                        <img class="social_media_icon" alt="Twitter" src="http://localhost/wp-content/uploads/2017/07/twitter.png">
                    </a>
                    <a href="http://www.instagram.com/" target="_blank">
                        <img class="social_media_icon" alt="Instagram" src="http://localhost/wp-content/uploads/2017/07/instagram.png">
                    </a>

                </div>

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
