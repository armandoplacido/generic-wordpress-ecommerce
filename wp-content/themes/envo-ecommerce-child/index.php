<?php get_header(); ?>


<?php
if ( !is_paged() && is_front_page() ) {
	get_template_part( 'template-parts/homepage', 'widgets' );
}
?>

<?php get_template_part( 'template-parts/template-part', 'head' ); ?>
<!-- start content container -->
<div class="row">

	<div class="col-md-<?php envo_ecommerce_main_content_width_columns(); ?>">

		<div class="store-categories-content">
			<?php 
				do_shortcode('[show_products number_of_categories="3" parent_category_id="16"]');
			?>
		</div>

	</div>		

</div>
<!-- end content container -->

<?php get_footer(); ?>
