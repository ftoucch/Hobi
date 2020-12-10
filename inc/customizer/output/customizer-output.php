<?php 
function HOBI_get_customizer_css()
{
    ob_start();

    /*
    ==================================================
              HEADER CONTROLS
    =============================================
    
    */


    $header_preset = get_theme_mod('HOBI_header_preset','ButtonItem');
    if($header_preset == 'Classic')
    {
      ?>
      .button-move-right
      {
        display:none;
      }
      .search-bar
      {
        display:flex;
      }
      
      <?php
    }
    elseif($header_preset == 'Inverted')
      {
        ?>
        nav
        {
          flex-direction:row-reverse;
        }
        .button-move-right
        {
          display:none;
        }
        .search-bar
        {
          display:flex;
        }
        .menu-icons
        {
          left:2rem;
        }
        <?php
      }
      elseif ($header_preset == 'Centered')
      {
        ?>
        nav
        {
          flex-direction:column;
        }
        .button-move-right
        {
          display:none;
        }
        .search-bar
        {
          display:none;
        }
        .menu-icons
        {
          right:2rem;
        }

      <?php
      }

      else
      {
        ?>
        .menu-icons
        {
          right:2rem;
        }
        <?php
      }
    $Header_bg_color = get_theme_mod('header_bg_color','rgba(255, 255, 255,1);');
    if(! empty('Header_bg_color'))
    {
      ?>
      header
      {
          background:<?php echo $Header_bg_color; ?>
      } 

      ul ul
      {
        background-color:<?php echo $Header_bg_color; ?>
      }

      <?php 
    }

    $header_text_color = get_theme_mod('header_text_color','#0a0a0a');
    $header_link_col  = get_theme_mod('header_link_hover_color','#d1d1d1');
    if(! empty('header_text_color'))
    {
      ?>
      ul a,
      h2 a,
      nav i
      {
        color:<?php echo $header_text_color; ?>
      }

      ul a:hover,
      h2 a:hover
      {
        color:<?php echo $header_link_col; ?>
      }
      
      <?php
    }


     /*
    ==================================================
              HEADER HERO CONTROLS
    =============================================
    
    */

    $hero_toggle = get_theme_mod('HOBI_Hero_toggle', 'checked');
    $hero_bg  = get_theme_mod('HERO_bg_color', '#ffffff');
    $header_text_color = get_theme_mod('HERO_Header_text_color', '#000000');
    $header_subtitle_text_color = get_theme_mod('HERO_subtitle_text_color', '#000000');
    if($hero_toggle == '')
    {
      ?>
      .hero-container
      {
        display: none;
      }
      <?php
    }
    else
    {
      ?>
      .hero-container
      {
        background:<?php echo $hero_bg ?>
      }

      .hero-header-text
      {
        color:<?php echo $header_text_color ?>
      }
      .hero-header-subtitle
      {
        color: <?php echo $header_subtitle_text_color ?>
      }
      <?php
    }
   
       /*
    ==================================================
              FOOTER CONTROLS
    =============================================
    
    */


    $footer_bg_color  = get_theme_mod('footer_bg_color','rgba(0, 0, 0,1)');
    if(! empty('footer_bg_color'))
    {
      ?>
      footer
      {
          background:<?php echo $footer_bg_color; ?>
      } 

      <?php 
    }

    $css = ob_get_clean();
    return $css;
} 