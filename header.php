<nav id="topbar">
	<img src="<?php bloginfo('template_url' );?>/img/logo2.png" alt="logo" id="logo">
	
	<div class="user">
		<?php wp_loginout(); ?>
		<?php wp_register('', ''); ?>
	</div>
	<ul class="menu">
		<li><a href="index.php">Home</a></li>
		<li class="dropdown"><a href="">About</a> 
			<ul>
				<li class="dropdown-menu"><a href="<?php bloginfo('url');?>/aboutMe.html">aboutme</a></li>
				<li class="dropdown-menu"><a href="#">aboutblog</a></li>	
			</ul>
		</li>
		<li><a href="#">Links</a></li>
	</ul>
	<form  method="get" id="search" action="<?php echo home_url( '/' ) ?>">
		<img id="find" src="<?php bloginfo('template_url' );?>/img/find.png" alt="">
		<input type="text" placeholder="Search something?" name="s" id="s">
	</form>
</nav>