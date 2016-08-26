		</div>
		<!-- /Wrapper -->

			<!-- Footer -->
			<footer class="footer" role="contentinfo">

				<!-- Copyright -->
			<div class="copyright">
				<p> 
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. Powered by
					<a href="//wordpress.org" title="WordPress">WordPress</a>. Theme by <a href="http://michaelthai.net">Mike Thai</a>.
				</p>
			</div>
				<!-- /Copyright -->

			</footer>
			<!-- /Footer -->

		<?php wp_footer(); ?>

		<!-- Analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<script>
			jQuery(".handle").on('click', function(){
				jQuery(".nav ul").toggleClass('showing');
			});

		</script>
	</body>
</html>
