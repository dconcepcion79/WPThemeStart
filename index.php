<?php
if (get_option_tree('select_blog_header', '')) {
$blog_header_element = get_option_tree('select_blog_header', '');
if ($blog_header_element == 'Post Slider'){
get_header('post-slider'); }
if ($blog_header_element == 'Orbit slider'){
get_header('orbit-slider'); }
if ($blog_header_element == 'Custom Header Element (NO background)'){
get_header('custom-element'); }
if ($blog_header_element == 'Custom Header Element (1st background)'){
get_header('custom-element-bg'); }
if ($blog_header_element == 'Custom Header Element (2st background)'){
get_header('custom-element-special-bg'); }
if ($blog_header_element == 'Custom Header Element (Full width)'){
get_header('custom-element-full'); }

if ($blog_header_element == 'None'){
get_header(); } 
} else {get_header();} 
?>
<div id="container_bg">
<?php if (get_option_tree('blog_layout_sidebar', '')) { echo '<div id="content_full" >'; } else {echo '<div id="content" class="left">';} ?> 

<?php get_template_part( 'loop', 'index' ); ?>

</div><!-- #content -->
<?php if (get_option_tree('blog_layout_sidebar', '')) {} else {echo '<div id="sidebar_right">', get_sidebar() . '</div>';}?>
<div class="clear"></div>
</div><!-- #container -->
<?php get_footer(); ?>