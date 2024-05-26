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
				$categories = get_categories(array(
					'taxonomy' => 'product_cat',
					'orderby' => 'name',
					'number' => 3,
					'parent' => 16,
					'order'   => 'ASC'
				));

				foreach($categories as $category) {
					echo "<div class='category_title'><h2>". $category->name ."</h2> <a href=". get_term_link($category->slug, 'product_cat') .">Ver mais</a></div>";
					echo do_shortcode('[products limit="3" category="'. $category->slug .'" columns="3" orderby="date" order="desc"]');
				}
			?>
		</div>

	</div>		

</div>
<!-- end content container -->

<?php get_footer(); ?>
