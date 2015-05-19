<!DOCTYPE>
<html>
    <head>
        <title><?php  wp_title(' | ', true,'right'); ?></title>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="">
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
         <?php wp_head(); ?>
    </head>
        
    <body>
		  <nav class="navbar navbar-default">
				  <div class="container-fluid">
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
						    </div>

						     <form class="navbar-form navbar-left" role="search">
								        <div class="form-group">
								          <input type="text" class="form-control" placeholder="Search">
								        </div>
								        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						      </form>

						      	<!-- snipet for for linking the custome menu with wordpress backend , available on github-->
								     <?php
							            wp_nav_menu( array(
							                'menu'              => 'primary',
							                'theme_location'    => 'primary',
							                'depth'             => 2,
							                'container'         => 'div',
							                'container_class'   => 'collapse navbar-collapse',
							                'container_id'      => 'bs-example-navbar-collapse-1',
							                'menu_class'        => 'nav navbar-nav pull-right',
							                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							                'walker'            => new wp_bootstrap_navwalker())
							            );
							        ?>  

				   
				  </div><!-- /.container-fluid -->
		   </nav>

			
