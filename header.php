<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head();?>
</head>

<body>

<!-- <div class="blog-masthead">
	<div class="container">
		<nav class="blog-nav">
			<a class="blog-nav-item active" href="#">Home</a> -->

		<!-- </nav>
	</div>
</div> -->

<div>
    <img id="header-img" class="img-fluid" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/SUtest.png" />
</div>
<nav id="header-nav" class="navbar navbar-expand-lg navbar-light">
    <div class="navbar-nav sticky-top mr-auto">
        <a class="navbar-brand" href="/wordpress" rel="home">Home</a>
        <a class="nav-item nav-link" href="#">Posts</a>
        <a class="nav-item nav-link" href="#">About</a>
    </div>
    <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link disabled" href="#"><?php echo get_bloginfo( 'description' ); ?></a>
    </div>
</nav>

<div class="container container-fluid">
    <div class="blog-header">
        <h1><a class="text-rust" href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
    </div>