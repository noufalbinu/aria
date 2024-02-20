
<!DOCTYPE html>
<html lang='en' class="maze">
<head>
   <title><?php wp_title(''); ?><?php if (!(is_404()) && (is_single()) || (is_page()) || (is_archive())) { ?> &raquo; <?php } ?> - <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/base.css"/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/footer.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/header.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/oz.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/single.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/sidebar.css"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/archive.css"/>
	

    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2?styles=54222,54221" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,700&family=Lato:wght@100&display=swap" rel="stylesheet">

    <!----- JS ------>	
    <?php wp_head(); ?>
    <!----- JS ------>	
</head>
<body>
    <header>
	  <div class="header-wrap container-width-1100">
        <div class="logo">
           <a class="link-secondary" href="/">
              <img src="<?php header_image(); ?>" alt="Aria Holding" >
           </a>
        </div>
        <nav class="navbar bg-primary">
		    <div class="nav-icon-contianer" style="display:none">
		        <div class="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
			</div>
			<div class="nav-container">
		        <ul class="navbar-nav">
		        	<li class="nav-item">
		        		<a href="/portfolio" class="nav-link">Portfolio</a>
		        	</li>
		        	<li class="nav-item">
		        		<a href="/our-story" class="nav-link">Our Story </a>
		        	</li>
		        	<li class="nav-item">
		        		<a href="/careers" class="nav-link">Careers</a>
		        	</li>		
		        	<li class="nav-item">
		        		<a href="/news" class="nav-link">News</a>
		        	</li>
		        </ul>
			</div>
	    </nav>
		<a class="contact-button" href="/contact">CONTACT</a>
      </div>
    </header>
   
  


