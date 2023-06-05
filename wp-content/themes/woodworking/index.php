<?php
get_header();
?>
		<div id="page">
			<div id="page-bgtop">
				<div id="page-bgbtm">
					<div id="content">
						<?php while(have_posts()) {
							the_post();
							?>
						
						<div class="post">
							<h2 class="title"><a href="#"><?php the_title()?></a></h2>
							<p class="meta">Posted by <a href="#">Someone</a> on July 10, 2011
								&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
							<div class="entry">
								<p><img src="<?php bloginfo('template_directory')?>/assets/images/img02.jpg" width="143" height="143" alt="" class="alignleft border" />This is <strong>Wood Working </strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.  The picture in this template is from <a href="#">PDPhoto.org</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
								<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis at sem. Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. </p>
							</div>
						</div>
						<?php } ?>

					</div>
					<!-- end #content -->
					<div id="sidebar">
						<div id="search">
							<h2>Search</h2>
							<form method="get" action="">
								<fieldset>
									<input type="text" name="s" id="search-text" size="15" value="enter keywords here..." />
									<input type="submit" id="search-submit" value="GO" />
								</fieldset>
							</form>
						</div>
						<ul>
							<li>
								<h2>Aliquam tempus</h2>
								<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
							</li>
							<li>
								<h2>Categories</h2>
								<ul>
									<li><a href="#">Aliquam libero</a></li>
									<li><a href="#">Consectetuer adipiscing elit</a></li>
									<li><a href="#">Metus aliquam pellentesque</a></li>
									<li><a href="#">Suspendisse iaculis mauris</a></li>
									<li><a href="#">Urnanet non molestie semper</a></li>
									<li><a href="#">Proin gravida orci porttitor</a></li>
								</ul>
							</li>
							<li>
								<h2>Blogroll</h2>
								<ul>
									<li><a href="#">Aliquam libero</a></li>
									<li><a href="#">Consectetuer adipiscing elit</a></li>
									<li><a href="#">Metus aliquam pellentesque</a></li>
									<li><a href="#">Suspendisse iaculis mauris</a></li>
									<li><a href="#">Urnanet non molestie semper</a></li>
									<li><a href="#">Proin gravida orci porttitor</a></li>
								</ul>
							</li>
							<li>
								<h2>Archives</h2>
								<ul>
									<li><a href="#">Aliquam libero</a></li>
									<li><a href="#">Consectetuer adipiscing elit</a></li>
									<li><a href="#">Metus aliquam pellentesque</a></li>
									<li><a href="#">Suspendisse iaculis mauris</a></li>
									<li><a href="#">Urnanet non molestie semper</a></li>
									<li><a href="#">Proin gravida orci porttitor</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- end #sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			</div>
		</div>

<?php
get_footer();
?>