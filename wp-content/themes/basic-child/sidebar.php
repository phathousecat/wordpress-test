<?php

$no_sidebar = in_array( basic_get_layout(), array('full','center') );

$mob_sidebar = basic_get_theme_option('show_sidebar', false );
$class = ( $mob_sidebar ) ? 'block' : '';
//$class = ( $no_sidebar && is_customize_preview() ) ? $class .' hide' : $class;
$categories =  get_categories();

?>

<!-- BEGIN #sidebar -->
<aside id="sidebar" class="<?php echo $class; ?>">
	<ul id="widgetlist">
		<img src="<?php echo get_option('sidebar_img'); ?>"></img>
		<p class="sidebar-description"><?php echo get_option('sidebar_summary'); ?></p>
		<i class="fa fa-twitter" aria-hidden="true"></i>
		<i class="fa fa-youtube-play" aria-hidden="true"></i>
		<i class="fa fa-instagram" aria-hidden="true"></i>
		<li class="widget widget_search">
			<?php get_search_form(); ?>
		</li>
		<li class="widget categories">
			<ul>
			<?php foreach ($categories as $category) { ?>
			  <li><?php $category->cat_name ?></li>
			<?php } ?>
			</ul>
		</li>
	</ul>
</aside>
<!-- END #sidebar -->
