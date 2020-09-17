<footer class="site-footer clearfix">
			<p>All Rights Reserved, <a href="http://facebook.com/delowarsikder.108">delowarsikder099@gmail.com</a> &copy; 2020</p>
			<nav id="footer_nav">
                <?php
                $args=array(
                    'theme_location'=>'footer_menu'
                );
                wp_nav_menu($args);
                ?>
			</nav>
		</footer>
	</div>
	<?php wp_footer();?> <!--add hoop for fotter-->
</body>

</html>