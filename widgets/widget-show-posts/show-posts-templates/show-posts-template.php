<?php
    $post_selector_pseudo_query = $instance['posts'];
    $processed_query = siteorigin_widget_post_selector_process_query($post_selector_pseudo_query);
    $query_result = new WP_Query($processed_query);

    if($query_result->have_posts()) :
?>

<div class="show-posts-widget widget-seperator">
    <div class="container">
        <?php if($instance['title']) : ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="block-title"><h2><?php echo $instance['title'] ?></h2></div>
                </div>
            </div>
        <?php endif; ?>
            <div class="row">
                <?php while($query_result->have_posts()) : $query_result->the_post(); ?>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="show-posts-container">
                        <?php
                        if( has_post_thumbnail() ) : ?>
                        <div class="thumbnails-container">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail()?>
                            </a>
                        </div><!-- .thumbnails-container -->
                        <?php endif; ?>
                        <div class="absolute-text-container">
                        <div class="text-container">
                            <h5><?php echo $instance['post_sub_title'] ?></h5>
                          <!--  <h5><?php //if(has_excerpt()) : echo get_the_excerpt(); endif; ?></h5> -->
                         <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        </div><!-- .absolute-text-container -->
                        </div><!-- .text-container -->
                        </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
<?php if($instance['button']['button_url']) :?>
        <div class="row button-row">
            <div class="col-lg-12">
                <div class="cta">
                    <a class="cta-button" href="<?php echo $instance['button']['button_url']; ?>"><?php echo $instance['button']['button_text']; ?></a>
                </div>
            </div>
        </div><!-- .button-row -->
        <?php endif; ?>
    </div>
</div>

<?php endif; ?>