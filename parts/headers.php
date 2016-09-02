<div class="utility">
	<div class="wrap"> <!-- This way we can keep a width on the items so that they may not exceed off the screen -->
	<nav class="cotact">
	<?php
	$spine_site_args = array(
		'theme_location'  => 'site',
		'menu'            => 'contact',
		'container'       => false,
		'container_class' => false,
		'container_id'    => false,
		'menu_class'      => null,
		'menu_id'         => null,
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 2,
	);
	wp_nav_menu( $spine_site_args ); ?>
    </nav>
    <div id="sb-search" class="sb-search">
		  <form>
        <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="s" id="search">
        <input class="sb-search-submit" type="submit" value="">
        <span class="sb-icon-search"></span>
      </form>
    </div>
  </div>
</div>

<?php

/**
 * Retrieve an array of values to be used in the header.
 *
 * site_name
 * site_tagline
 * page_title
 * post_title
 * section_title
 * subsection_title
 * posts_page_title
 * sup_header_default
 * sub_header_default
 * sup_header_alternate
 * sub_header_alternate
 */
$spine_main_header_values = spine_get_main_header();

if ( true === spine_get_option( 'main_header_show' ) ) :

?>
<header class="main-header">
	<div class="header-group hgroup guttered padded-bottom short">

		<sup class="sup-header" data-section="<?php echo esc_attr( $spine_main_header_values['section_title'] ); ?>" data-pagetitle="<?php echo esc_attr( $spine_main_header_values['page_title'] ); ?>" data-posttitle="<?php echo esc_attr( $spine_main_header_values['post_title'] ); ?>" data-default="<?php echo esc_html( $spine_main_header_values['sup_header_default'] ); ?>" data-alternate="<?php echo esc_html( $spine_main_header_values['sup_header_alternate'] ); ?>"><span class="sup-header-default"><?php echo wp_kses_post( strip_tags( $spine_main_header_values['sup_header_default'], '<a>' ) ); ?></span></sup>
		<sub class="sub-header" data-sitename="<?php echo esc_attr( $spine_main_header_values['site_name'] ); ?>" data-pagetitle="<?php echo esc_attr( $spine_main_header_values['page_title'] ); ?>" data-posttitle="<?php echo esc_attr( $spine_main_header_values['post_title'] ); ?>" data-default="<?php echo esc_html( $spine_main_header_values['sub_header_default'] ); ?>" data-alternate="<?php echo esc_html( $spine_main_header_values['sub_header_alternate'] ); ?>"><span class="sub-header-default"><?php echo wp_kses_post( strip_tags( $spine_main_header_values['sub_header_default'], '<a>' ) ); ?>
    </span>
    </sub>
	</div>
</header>

<?php
endif;

if ( is_front_page() && ! is_home() && true === spine_get_option( 'front_page_title' ) ) :
?>
<section class="row single gutter pad-ends">
	<div class="column one">
		<h1><?php the_title(); ?></h1>
	</div>
</section>

<?php
endif;
