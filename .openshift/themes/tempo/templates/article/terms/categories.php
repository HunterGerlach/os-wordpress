<?php
	if( !tempo_options::get( 'blog-categories' ) )
		return;

	global $post;
	
	if( has_category( null, $post ) ){
?>
		<div class="tempo-categories">

			<?php tempo_the_post_categories( $post -> ID, '<span>/</span>' ) ?>
			
		</div>
<?php
	}
?>