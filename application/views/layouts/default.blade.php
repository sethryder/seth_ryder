<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="en" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	
		<title>Watercolor</title>
		
		<!-- JS -->
		{{ Asset::scripts() }}
		<!-- ENDS JS -->

		<!-- superfish -->
		{{ Asset::container('superfish')->styles() }}
		{{ Asset::container('superfish')->scripts() }}

		<!-- ENDS superfish -->
	
		<!-- CSS -->
		{{ Asset::styles() }}
		<!--[if IE 6]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie-hacks.css" />
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
          		/* EXAMPLE */
          		DD_belatedPNG.fix('*');
        	</script>
		<![endif]-->
		<!-- ENDS CSS -->

		<!-- Cufon -->
		{{ Asset::container('cufon')->scripts() }}
		<script type="text/javascript">
			Cufon.replace('.custom', { fontFamily: 'bebas', hover: true });
		</script>
        <!-- /Cufon -->

	</head>
	<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	
	<!-- navigation -->
	<ul id="nav" class="sf-menu">
		
		<li class="custom"><a href="contact.html">CONTACT</a></li>
		<li class="custom"><a href="blog.html">BLOG</a></li>
		<li class="custom"><a href="gallery.html">GALLERY</a></li>
		<li class="custom"><a href="about.html" >ABOUT</a>
			<ul>
				<li><a href="#">Sub page 1</a></li>
				<li><a href="#">Sub page 2</a></li>
				<li><a href="#">Sub page 3</a></li>
			</ul>
		</li>
	</ul>
	<!-- ENDS navigation -->
	
	<!-- HEADER -->
	<div id="header">
		<a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="Logo" id="logo" /></a>
		<img src="{{ asset('img/nav-arrow.png') }}" alt="Active" id="arrow" class="arrow-home" />
		<form action="" method="post" id="search">
			<p><input type="text" onfocus="defaultInput(this)" onblur="clearInput(this)" name="keyword" id="keyword" title="Search..." value="Search..."/></p>
			<p><input type="submit" id="go" value="" /></p>
			<div class="clear"></div>
		</form>
	</div>
	<!-- ENDS HEADER -->
	
	<!-- MAIN -->
	<div id="main">
			@yield('content');			
	</div>
	<!-- ENDS MAIN -->
	
	</div>
	<!-- ENDS WRAPPER -->
		
	<!-- FOOTER -->
	<div id="footer">
		<div id="footer-wrapper">
			
			<ul id="follow">
				<li><p>Follow us: </p></li>
				<li><a href="#"><img src="{{ asset('img/twitter.png') }}" alt="Twitter" /></a></li>
				<li><a href="#"><img src="{{ asset('img/facebook.png') }}" alt="Facebook" /></a></li>
				<li><a href="#"><img src="{{ asset('img/linkedln.png') }}" alt="Facebook" /></a></li>
				<li><a href="#"><img src="{{ asset('img/rss.png') }}" alt="Facebook" /></a></li>
			</ul>
		
			<div class="footer-cols">
				<div>
					<ul>
						<li><a href="#" class="custom">Skins</a></li>
						<li><a href="../spring/">Spring</a></li>
						<li><a href="../summer/">Summer</a></li>
						<li><a href="../autumn/">Autumn</a></li>
						<li><a href="../winter/">Winter</a></li>
					</ul>
				</div>
				<div>
					<ul>
						<li><a href="gallery.html" class="custom">Gallery</a></li>
						<li><a href="../spring/">Spring</a></li>
						<li><a href="../summer/">Summer</a></li>
						<li><a href="../autumn/">Autumn</a></li>
						<li><a href="../winter/">Winter</a></li>
					</ul>
				</div>
				<div>
					<ul>
						<li><a href="blog.html" class="custom">Blog</a></li>
						<li><a href="../spring/">Spring</a></li>
						<li><a href="../summer/">Summer</a></li>
						<li><a href="../autumn/">Autumn</a></li>
						<li><a href="../winter/">Winter</a></li>
					</ul>
				</div>
				<div class="last">
					<ul>
						<li><a href="about.html" class="custom">Text Styles</a></li>
						<li><a href="../spring/">Spring</a></li>
						<li><a href="../summer/">Summer</a></li>
						<li><a href="../autumn/">Autumn</a></li>
						<li><a href="../winter/">Winter</a></li>
					</ul>
				</div>
			</div>
			
			<div class="footer-bottom">
				<p class="legal">Code by Seth Ryder | Template by <a href="http://www.luiszuno.com" >luiszuno.com</a></p>
			</div>

		</div>
	</div>
	<!-- ENDS FOOTER -->
	
	<!-- start cufon -->
	<script type="text/javascript"> Cufon.now(); </script>
	<!-- ENDS start cufon -->
	
	</body>
</html>
