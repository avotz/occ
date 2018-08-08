 <?php rewind_posts(); ?>
        <?php query_posts('post_type=page&page_id=187'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_title('<h2 class="block-title">', '</h2>'); ?>
                    <?php the_content(); ?>
                

            <?php endwhile; ?>
            <!-- post navigation -->
            
        <?php endif; ?>