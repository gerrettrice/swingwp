<!-- sidebar -->
<aside id="widget_sidebar" class="sidebar" role="complementary">

    <div class="sidebar_odd">category 1</div>
    <div class="sidebar_even">category 2</div>
    <div class="sidebar_odd">category 2</div>
    <div class="sidebar_even">category 2</div>
    <div class="sidebar_odd">category 2</div>
    <div class="sidebar_even">category 2</div>
    <div class="sidebar_odd">category 2</div>
    <div class="sidebar_even">category 2</div>
    <div class="sidebar_odd">category 2</div>
    <div class="sidebar_even">category 2</div>

	<?php get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
