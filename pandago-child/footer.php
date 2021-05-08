<footer class="site-footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 logoRip" <?php if(has_block('acf/supporters')) :?> style="background-color: #FFCB66" <?php endif ?> <?php if(has_block('acf/sparkleheartmap')) :?>style="display: none"<?php endif ?>>
			</div>
			<div class="col-md-12">
			</div>
			<div class="col-md-2">
				<img class="goldenLogo" src="/wordpress/wp-content/themes/pandago-child/resources/img/GoldenV2Logo3.png" alt="Golden Logo">
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<nav class="footer-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-nav', 'menu_id' => 'footer-menu' ) );?>
				</nav>
			</div>
			<div class="col-md-4">
				<ul class="footerLeftRightColumn">
					<li><span class="titleFooterElements">Biedrība SparkleHeart</span></li>
					<li>Reģistrācijas nr. 40008293119</li>
					<li>Banka: SWEDBANK A/S</li>
					<li>LV52HABA0551047652465</li>
				</ul>
			</div>
			<div class="col-md-3 footerRowRightColumn">
				<ul>
					<li><span class="titleFooterElements">Juris Gogulis</span></li>
					<li>juris.gogulis@sparkleheart.org</li>
					<li>+37126890034</li>
					<li>Biķernieku iela 24a - 5, LV-1006</li>
					<li class="requisites">Skatīt rekvizītus</li>
				</ul>
				<div class="socialMediaGrid">
					<div></div>
					<div><img src="/wordpress/wp-content/themes/pandago-child/resources/img/facebook.png" alt="Facebook"></div>
					<div><img src="/wordpress/wp-content/themes/pandago-child/resources/img/ig.png" alt="Instagram"></div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-md-3 copyrightRow">
				<p class="copyright">&copy;SparkleHeart 2020.<br>
				VisasTiesības aizsargātas</p>
			</div>
			<div class="col-md-7">			
			</div>
			<div class="col-md-2">
				<p class="privacy">Privātuma politika</p>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
	    <div id="fixedAnchorLink" onclick="window.scrollTo(0, 0);"></div>
</footer>
</body>
<?php get_template_part( 'template-parts/foot' ); ?>