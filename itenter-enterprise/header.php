php
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<div class="site-wrapper">


<header class="itenter-header" id="itenter-header">


<div class="container header-container">


<div class="site-logo">


<a href="<?php echo esc_url(home_url('/')); ?>">


<?php
if(has_custom_logo()){


the_custom_logo();


}

else{


echo '<span class="logo-text">ITENTER</span>';


}


?>


</a>


</div>




<nav class="main-navigation">


<?php
wp_nav_menu([

'theme_location'=>'primary_menu',

'menu_class'=>'itenter-menu',

'container'=>false,

'fallback_cb'=>false

]);


?>


</nav>





<div class="header-button">


<a href="#contact"
class="btn-primary">

Get Started

</a>


</div>
<button class="mobile-menu-toggle"
aria-label="Menu">


<span></span>

<span></span>

<span></span>


</button>



</div>


</header>
