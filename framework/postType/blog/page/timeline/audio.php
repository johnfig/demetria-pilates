<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Blog Page Timeline Audio Post Format Template
 * Created by CMSMasters
 * 
 */
 
 
global $cmsms_metadata;


$cmsms_post_metadata = explode(',', $cmsms_metadata);

$date = (in_array('date', $cmsms_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsms_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsms_post_metadata) || is_home()) ? true : false;
$tags = (get_the_tags() && (in_array('tags', $cmsms_post_metadata) || is_home())) ? true : false;
$more = (in_array('more', $cmsms_post_metadata) || is_home()) ? true : false;


$cmsms_post_audio_links = get_post_meta(get_the_ID(), 'cmsms_post_audio_links', true);

?>

<!--_________________________ Start Audio Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_timeline_type'); ?>>
	<?php $date ? cmsms_post_date('page', 'timeline') : ''; ?>
	<div class="cmsms_timeline_margin">
		<div class="cmsms_post_cont">
			<?php 
			if ($author || $categories || $tags) {
				echo '<div class="cmsms_post_cont_info entry-meta">';
				
					$author ? cmsms_post_author('page') : '';
					
					$categories ? cmsms_post_category('page') : '';
					
					$tags ? cmsms_post_tags('page') : '';
					
				echo '</div>';
			}
			?>
			<div class="cmsms_post_cont_inner">
			<?php 
				if (!post_password_required() && !empty($cmsms_post_audio_links) && sizeof($cmsms_post_audio_links) > 0) {
					$attrs = array(
						'preload' => 'none'
					);
					
					
					foreach ($cmsms_post_audio_links as $cmsms_post_audio_link_url) {
						$attrs[substr(strrchr($cmsms_post_audio_link_url, '.'), 1)] = $cmsms_post_audio_link_url;
					}
					
					
					echo '<div class="cmsms_audio">' . 
						wp_audio_shortcode($attrs) . 
					'</div>';
				}
				
				cmsms_post_heading(get_the_ID(), 'h4');
				
				cmsms_post_exc_cont(); 
			?>
			</div>
			<?php
			if ($likes || $comments || $more) {
				echo '<footer class="cmsms_post_footer entry-meta">';
					
					$comments ? cmsms_post_comments('page') : '';
					
					$likes ? cmsms_post_like('page') : '';
					
					$more ? cmsms_post_more(get_the_ID(), 'masonry') : '';
					
				echo '</footer>';
			}
			?>
		</div>
	</div>
</article>
<!--_________________________ Finish Audio Article _________________________ -->

