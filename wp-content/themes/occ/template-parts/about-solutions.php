
<!-- <h2 class="block-title">It is not only about <span class="who">who we are</span>,<br> but who do we find <span class="sol">solutions</span> for?</h2> -->
 <?php rewind_posts(); ?>
        <?php query_posts('post_type=page&page_id=201'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php /*the_title('<h2 class="block-title">', '</h2>');*/ ?>
                    <?php the_content(); ?>
                

            <?php endwhile; ?>
            <!-- post navigation -->
            
        <?php endif; ?>


 