<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 * 
 * @cmsms_package 	Yoga Fit
 * @cmsms_version 	1.1.4
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;


// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php post_class(); ?>>
	<article class="product_inner">
		<?php 
			woocommerce_show_product_loop_sale_flash();
			
			$availability = $product->get_availability();

			if (esc_attr($availability['class']) == 'out-of-stock') {
				echo apply_filters('woocommerce_stock_html', '<span class="' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</span>', $availability['availability']);
			}
		?>	
		<div class="cmsms_product_img_wrap">
			<div class="cmsms_product_footer entry-meta">
				<div class="cmsms_product_footer_inner">
				<?php 
					cmsms_woocommerce_add_to_cart_button();
					
					cmsms_woocommerce_rating('cmsms_theme_icon_star_empty', 'cmsms_theme_icon_star_full');
				?>
				</div>
			</div>
			<figure class="cmsms_product_img preloader">
				<?php woocommerce_template_loop_product_thumbnail(); ?>
				<span class="product_hover"></span>
			</figure>
		</div>
		<header class="entry-header cmsms_product_header">
			<h4 class="entry-title cmsms_product_title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h4>
		</header>
		<div class="cmsms_product_info">
		<?php
			woocommerce_template_loop_price();
		?>
		</div>
	</article>
</li>