<?php
?>

<div class="HOBI-dashboard">
    <header>
        <div class="container">
            <div class="top">
                <h1 class="heading"> HOBI Options</h1>
                <span class="version"> v1.0.0 </span>
                <img width="" src="<?php echo get_template_directory_uri().'/assets/img/logo.jpg'; ?>" alt="logo">
            </div>
            <div class="navigation">
            </div>
        </div>
    </header>
            <div class="admin-content">
            <div class="left-content">
                <div class="content-card">
                    <div class="content-card-heading">
                    <span><i class="fa fa-adn" style="font-size:48px;"></i></span>
                    <h2>bout HOBI</h2>
                    </div>
                    <p class="admin-page-content">
                    HOBI is a super fast, easily customizable, multi-purpose theme. 
                    It’s perfect for small business, startups, agencies, firms, e-commerce shops (WooCommerce storefront).
                    A fully AMP optimized and responsive theme,  While it is lightweight and has a minimalist design, the theme is highly extendable,
                    it has a highly SEO optimized code, resulting in top rankings in Google search results.
                    HOBI is also WooCommerce ready, responsive, RTL & translation ready. Look no further. HOBI is the perfect theme for your Business!
                    </p>
                </div>
                <div class="content-card">
                    <div class="content-card-heading">
                    <span><i class="fa fa-cogs" style="font-size:48px;"></i></span>
                    <h2>Customize HOBI</h2>
                    </div>
                    <ul class="customization">

                    <?php 
                    $query['autofocus[section]'] = 'title_tagline';
                    $query2['autofocus[panel]']  = 'HOBI_options';
                    $section_link = add_query_arg( $query, admin_url( 'customize.php' ) );
                    $section_link2 = add_query_arg( $query2, admin_url( 'customize.php' ) );
                    
                    
                    ?>
                        <li><a href="<?php echo esc_url( $section_link ); ?>">Upload Logo </a></li>
                        <li><a>Set Colors </a></li>
                        <li><a href="<?php echo esc_url( $section_link2 ); ?>">HOBI Options </a></li>
                        <li><a>Customize Font </a></li>
                        <li><a>Layout Options</a></li>
                    </ul>
                </div>
            </div>
            <div class="right-content">
            <div class="content-card-right">
                <div class="content-card-heading">
                <span><i class="fa fa-heart" style="font-size:48px;"></i></span>
                <h2><a>Leave us a rating</a></h2>
                </div>

                <div class="content-card-heading">
                <span><i class="fa fa-github" style="font-size:48px;"></i></span>
                <h2><a>Extend Our Theme</a></h2>
                </div>

                <div class="content-card-heading">
                <span><i class="fa fa-facebook-square" style="font-size:48px;"></i></span>
                <h2><a>  Join us on facebook</a></h2>
                </div>
                
            </div>
            </div>
        
            </div>

</div>