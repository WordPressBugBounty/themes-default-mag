<?php
if (!function_exists('default_mag_single_related_post')) :
    /**
     * Main Banner Section
     *
     * @since default-mag 1.0.0
     *
     */
    function default_mag_single_related_post()
    {
        if (1 != default_mag_get_option('enable_related_post_on_single_page')) {
            return;
        }
        ?>
        <div class="twp-related-post">
            <?php
            global $post;
            $categories = get_the_category(get_the_ID());
            $related_section_title = esc_html(default_mag_get_option('single_related_post_title'));
            $number_of_related_posts = absint(default_mag_get_option('number_of_single_related_post'));

            if ($categories) {
                $cat_ids = array();
                foreach ($categories as $category) $cat_ids[] = $category->term_id;
                $default_mag_related_post_args = array(
                    'posts_per_page' => absint($number_of_related_posts),
                    'category__in' => $cat_ids,
                    'post__not_in' => array(get_the_ID()),
                    'order' => 'ASC',
                    'orderby' => 'rand'
                ); ?>
                <div class="twp-single-page-related-article-section">
                    <h2 class="twp-title"><?php echo esc_html($related_section_title); ?></h2>
                    <ul class="twp-single-related-post-list twp-row">
                        <?php
                        $default_mag_related_post_post_query = new WP_Query($default_mag_related_post_args);
                        if ($default_mag_related_post_post_query->have_posts()) :
                            while ($default_mag_related_post_post_query->have_posts()) : $default_mag_related_post_post_query->the_post();
                                    if(has_post_thumbnail()){
                                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' );
                                        $url = $thumb['0'];
                                    }
                                    else{
                                        $url = '';
                                    }?>
                                    <li class="twp-single-related-post twp-post twp-col twp-col-xs-6 twp-col-sm-4 twp-col-md-6 twp-col-lg-4">
                                        <div class="twp-image-section twp-image-hover-effect twp-image-150">
                                            <a class="img-link" href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>" tabindex="0"></a>
                                            <div class="twp-image data-bg" style="background-image:url(<?php echo esc_url($url); ?>)"></div>
                                            <?php echo esc_attr(default_mag_post_format(get_the_ID())); ?>
                                        </div>
                                        <div class="twp-desc twp-wrapper">
                                            <div class="twp-meta-style-1  twp-author-desc twp-primary-text">
                                                <?php default_mag_post_date(); ?>
                                            </div>
                                            <h3 class="twp-post-title twp-line-limit-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                    </li>
                                <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div><!--col-->
            <?php } ?>
        </div><!--/twp-news-main-section-->
        <?php
}  
endif;
add_action('default_mag_action_related_post', 'default_mag_single_related_post', 10);
