<?php

$categories = get_the_category();
$category_name = $categories[0]->name;
$category_description = $categories[0]->category_description;

if ( !empty( $category_description ) ) : ?>
<div class="category-description">  

	<h4><?php echo esc_html( $category_name ); ?></h4>
	<p><?php echo esc_html( $category_description ); ?></p>

</div>
<?php endif; ?>