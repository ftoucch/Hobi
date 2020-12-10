<?php
$header_text = get_theme_mod('HOBI_hero_header_text', 'LOREM IPSUM ');
$header_subtitle_text = get_theme_mod('HOBI_hero_subtitle_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
$hero_btn_text1 = get_theme_mod('hero_btn1_text','SIGN UP');
$hero_btn_text2 = get_theme_mod('hero_btn2_text', 'LEARN MORE');
$hero_btn1_link = get_theme_mod('hero_btn1_text_link', '#');
$hero_btn2_link = get_theme_mod('hero_btn1_text_link', '#');
$hbuttoncolor1 = get_theme_mod('hero_btn1_bg','#0a0a0a');
$hbuttoncolor2 = get_theme_mod('hero_btn2_bg','#000000');
$hbuttontext2= get_theme_mod('hero_btn2_text_color','#ffffff');
$hbuttontext1= get_theme_mod('hero_btn1_text_color','#0a0a0a');
$hero_image  = get_theme_mod('hero_custom_image');
?>
<div class="hero-container">
<div class="hero-text-content">
<h2 class="hero-header-text"><?php echo ($header_text) ?></h2>
<p class="hero-header-subtitle"><?php echo ($header_subtitle_text) ?> </p>
<div class="hero-button-div">
  <a href="<?php echo ($hero_btn1_link) ?>">
    <button class="btn hero-button " id="hbtn1" style="border: 1px solid <?php echo $hbuttoncolor1 ?> ;color:<?php echo $hbuttontext1 ?>"><?php echo ($hero_btn_text1) ?></button>
 </a>
  <a href="<?php echo ($hero_btn2_link) ?>">
    <button class="btn hero-button btn-on" id="hbtn2" style="background:<?php echo $hbuttoncolor2 ?>; border:none; color:<?php echo $hbuttontext2 ?> "><?php echo ($hero_btn_text2) ?></button>
  </a>
</div>
</div>
<div class="hero-image">
<img class="hero-image-element" src="<?php if(! empty($hero_image)) {
    echo($hero_image);
 }
 else
 {
     echo get_template_directory_uri().'/assets/img/hobi-black.png' ;
 }
  ?>" width=350> 
</div>
</div>