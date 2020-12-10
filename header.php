<?php 
$logo_size  = get_theme_mod('HOBI_logo_options');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>

<div class="menu-container">
<nav>
		<div class="menu-icons" id="menu-icons">
		<i class="fa fa-bars"></i>
		<i class="fa fa-times"></i>
		</div>
<div class="site-identity">
	<?php
		$blog_title  = get_theme_mod('HOBI_site_title_toggle','checked');
		$blog_desc =  get_theme_mod ('HOBI_site_description_toggle','checked');
		?>
<?php  if(has_custom_logo()) : 
		$custom_logo_id = get_theme_mod('custom_logo');
		$custom_logo_data = wp_get_attachment_image_src($custom_logo_id,'full');
		$custom_logo_url  = $custom_logo_data[0];
		?>
<div class="logo">
<a href="<?php echo esc_url( home_url( '/', 'https' ) ); ?>" 
                        title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
                        rel="home">
<img class="site-logo" src="<?php echo esc_url($custom_logo_url); ?>" width="<?php echo $logo_size; ?>" >
</a>
</div>

<div class="site-info">
				<?php
				if($blog_title == '') : ?>
	<h2 class="header-title" style="display:none"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="display:none"><?php bloginfo( 'name' ); ?></a></h2>
	<?php
				else: ?>

<h2 class="header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
<?php 
endif; 
?>
	
	<?php 
	if($blog_desc == '') : ?>
             <p class="site-description" style="display:none"> <?php bloginfo('description'); ?> </p>
				<?php
				else: ?>
					  <p class="site-description"> <?php bloginfo('description'); ?> </p>
					  <?php
					 endif; 
					  ?>
</div>
<?php
else:
	?>
<div class="site-info">
				<?php
				if($blog_title == '') : ?>
	<h2 class="header-title" style="display:none"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="display:none"><?php bloginfo( 'name' ); ?></a></h2>
	<?php
				else: ?>

<h2 class="header-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
<?php 
endif; 
?>
	
	<?php 
	if($blog_desc == '') : ?>
             <p class="site-description" style="display:none"> <?php bloginfo('description'); ?> </p>
				<?php
				else: ?>
					  <p class="site-description"> <?php bloginfo('description'); ?> </p>
					  <?php
					 endif; 
					  ?>
</div>

<?php
endif;
?>


</div>
<div class="links">
<?php

wp_nav_menu(array(
	'theme_location' => 'main_menu',
	'menu_class' => 'nav-list',
	'link_before'          => ' ',
	'link_after'           => ' ',
))

?>

<div class="button-move-right" >
	<?php
	$button1_link = get_theme_mod('HOBI_button1_text_link','#');
	$button2_link = get_theme_mod('HOBI_button2_text_link','#');
	$buttoncolor1 = get_theme_mod('header_button1_bg','#0a0a0a');
	$buttoncolor2 = get_theme_mod('header_button2_bg','#000000');
	$buttontext1= get_theme_mod('header_button1_text_color','#ffffff');
	$buttontext2= get_theme_mod('header_button2_text_color','#0a0a0a');
	?>
	<a href="<?php echo $button2_link ?>" >

<button class="btn btn-primary btn-mobile" id="btn1" style="background:<?php echo $buttoncolor1 ?>; color:<?php echo $buttontext1 ?>">
	<?php
	$btn1 = get_theme_mod('HOBI_button1_text','BUTTON 1');
	if(! empty ($btn1))
	{
	echo $btn1;
	}
	else
	{
		?>
		BUTTON 1
		<?php
	}
	?>
</button>
</a>
<a href="<?php echo $button2_link ?>">
<button class="btn btn-mobile hero-button" id="btn2" style="border: 1px solid <?php echo $buttoncolor2 ?> ; color:<?php echo $buttontext2 ?>">
	<?php
	$btn2 = get_theme_mod('HOBI_button2_text', 'BUTTON 2');
	if(! empty ($btn2))
	{
	echo $btn2;
	}
	else
	{
		?>
		BUTTON 2
		<?php
	};
	?></button>
	</a>
</div>
<div class="search-bar">
<?php get_search_form() ?>
</div>
</div>
</nav>
</div>
</header>
<?php
// hero 
if(is_front_page()):
get_template_part('template-parts/hero');
endif;
?>


