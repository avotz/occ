<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package occ
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="title">
        <div class="title-wrapper">
          <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
          <?php get_template_part('template-parts/title-links'); ?>
        </div>
        
      </section>
      <section class="listing">
            <div class="listing-container">
     <?php
      $args = array(
            'post_type' => 'client',
            'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
            'posts_per_page' => 10,
            

        );


        $items = new WP_Query($args);
    $left_or_right = '';
        if ($items->have_posts()) {
               
               while ($items->have_posts()) {
                    $items->the_post();

                    ?>

                    
                    <div class="listing-item dark <?php echo $left_or_right ?>">
                        <div class="listing-item-container">
                             <?php if (has_post_thumbnail()) :

                                $id = get_post_thumbnail_id($post->ID);
                                $thumb_url = wp_get_attachment_image_src($id, 'item-thumb', true);

                            ?>
                                
                                <div class="listing-item-img" style="background-image: url('<?php echo esc_url($thumb_url[0]) ?>');">
                                
                                    
                                
                            <?php endif; ?>
                        
                            
                        </div>
                        <div class="listing-item-content">
                            <div>
                                <h3><?php the_title() ?></h3>
                                <?php the_content() ?>
                            </div>
                            
                        </div>
                        
                        </div>
                    </div>
                                
                                <?php
                                $left_or_right = ('reversed' == $left_or_right) ? '' : 'reversed';
                            } 
              
                }


                ?>
          </div>
    </section>
    
    
	

</article><!-- #post-<?php the_ID(); ?> -->
