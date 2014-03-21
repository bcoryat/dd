<h3><i class="icon-calendar"></i> Archive</h3>
<ul>
<?php $args = array(
	'type'            => 'monthly',
	'limit'           => '',
	'format'          => 'custom', 
	'before'          => '<li class="list-group-item">',
	'after'           => '</li>',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC'
); 

 wp_get_archives($args);

?>

</ul>