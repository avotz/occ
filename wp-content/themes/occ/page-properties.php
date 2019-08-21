<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Page Properties 
 * @package occ
 */
get_header();

$q = get_query_var('q');

$locationSelected = get_query_var('location');
$bedroomsSelected = get_query_var('bedrooms');
$guestsSelected = get_query_var('guests');

$termsLocations = get_terms('pa_location', array(
    'hide_empty' => false,
));
$termsBedrooms = get_terms('pa_bedrooms', array(
    'hide_empty' => false,
));
$termsGuests = get_terms('pa_guests', array(
    'hide_empty' => false,
));

?>

<div class="main">


    <section class="title">
        <div class="title-wrapper">
            <h1>Our Properties</h1>
            <?php get_template_part('template-parts/title-links-properties'); ?>
        </div>

    </section>
    <section class="filters">
        <form action="">
            <div class="filters-container flex-container-sa">

                <!-- <div class="filters-item">
                    <input type="search" name="q" placeholder="search by name" value="<?php echo $q ?>">
                </div> -->
                <div class="filters-item">
                    <select name="location">
                        <option value="">-- Filter Location --</option>
                        <?php foreach ($termsLocations as $key => $location) : ?>
                            <option value="<?php echo $location->slug ?>" <?php if ($locationSelected == $location->slug) echo 'selected' ?>><?php echo $location->name ?></option>
                        <?php endforeach ?>

                    </select>
                </div>
                <div class="filters-item">
                    <select name="bedrooms">
                        <option value="">-- Filter Bedrooms --</option>
                        <?php foreach ($termsBedrooms as $key => $bed) : ?>
                            <option <?php if ($bedroomsSelected == $bed->slug) echo 'selected' ?>><?php echo $bed->name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="filters-item">
                    <select name="guests">
                        <option value="">-- Filter Guests --</option>
                        <?php foreach ($termsGuests as $key => $guest) : ?>
                            <option <?php if ($guestsSelected == $guest->slug) echo 'selected' ?>><?php echo $guest->name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="filters-item">
                    <button type="submit" class="btn-success">Search</button>
                </div>
            </div>

        </form>

    </section>
    <section class="listing">
        <div class="listing-container">

            <?php

            $paged = get_query_var('paged', 1);

            if ($locationSelected && $bedroomsSelected && $guestsSelected) {
                $args = array(
                    'post_type' => 'product',
                    's' => $q,
                    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'tax_query' => array(
                        'relation' => 'AND',

                        array(
                            'taxonomy' => 'pa_location',
                            'field' => 'slug',
                            'terms' => $locationSelected,
                        ),
                        array(
                            'taxonomy' => 'pa_bedrooms',
                            'field' => 'slug',
                            'terms' => $bedroomsSelected,

                        ),
                        array(
                            'taxonomy' => 'pa_guests',
                            'field' => 'slug',
                            'terms' => $guestsSelected,

                        ),
                    )

                );
            } elseif ($locationSelected && $bedroomsSelected) {
                $args = array(
                    'post_type' => 'product',
                    's' => $q,
                    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'tax_query' => array(
                        'relation' => 'AND',

                        array(
                            'taxonomy' => 'pa_location',
                            'field' => 'slug',
                            'terms' => $locationSelected,
                        ),
                        array(
                            'taxonomy' => 'pa_bedrooms',
                            'field' => 'slug',
                            'terms' => $bedroomsSelected,

                        ),

                    )

                );
            } elseif ($bedroomsSelected && $guestsSelected) {
                $args = array(
                    'post_type' => 'product',
                    's' => $q,
                    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'tax_query' => array(
                        'relation' => 'AND',


                        array(
                            'taxonomy' => 'pa_bedrooms',
                            'field' => 'slug',
                            'terms' => $bedroomsSelected,

                        ),
                        array(
                            'taxonomy' => 'pa_guests',
                            'field' => 'slug',
                            'terms' => $guestsSelected,
                        ),

                    )

                );
            } elseif ($locationSelected && $guestsSelected) {
                $args = array(
                    'post_type' => 'product',
                    's' => $q,
                    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'tax_query' => array(
                        'relation' => 'AND',


                        array(
                            'taxonomy' => 'pa_location',
                            'field' => 'slug',
                            'terms' => $locationSelected,

                        ),
                        array(
                            'taxonomy' => 'pa_guests',
                            'field' => 'slug',
                            'terms' => $guestsSelected,
                        ),

                    )

                );
            } elseif ($locationSelected) {
                $args = array(
                    'post_type' => 'product',
                    's' => $q,
                    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'tax_query' => array(

                        array(
                            'taxonomy' => 'pa_location',
                            'field' => 'slug',
                            'terms' => $locationSelected,

                        ),


                    )

                );
            } elseif ($guestsSelected) {
                $args = array(
                    'post_type' => 'product',
                    's' => $q,
                    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'tax_query' => array(

                        array(
                            'taxonomy' => 'pa_guests',
                            'field' => 'slug',
                            'terms' => $guestsSelected,

                        ),


                    )

                );
            } elseif ($bedroomsSelected) {
                $args = array(
                    'post_type' => 'product',
                    's' => $q,
                    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'tax_query' => array(

                        array(
                            'taxonomy' => 'pa_bedrooms',
                            'field' => 'slug',
                            'terms' => $bedroomsSelected,

                        ),


                    )

                );
            } else {
                $args = array(
                    'post_type' => 'product',
                    's' => $q,
                    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                    'posts_per_page' => 5,
                    'paged' => $paged


                );
            }

            $items = new WP_Query($args);
            // Pagination fix
            $temp_query = $wp_query;
            $wp_query   = NULL;
            $wp_query   = $items;
            $left_or_right = '';
            if ($items->have_posts()) {
                while ($items->have_posts()) {
                    $items->the_post();

                    ?>

                    <div class="listing-item <?php echo $left_or_right ?>">
                        <div class="listing-item-container">
                            <?php if (has_post_thumbnail()) :

                                $id = get_post_thumbnail_id($post->ID);
                                $thumb_url = wp_get_attachment_image_src($id, 'item-thumb', true);
                                ?>

                                <div class="listing-item-img" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>


                            <?php endif; ?>

                            <div class="listing-item-content">
                                <div>
                                    <h3><?php the_title(); ?></h3>
                                    <div class="features">
                                        <?php woocommerce_get_template('single-product/stats.php'); ?>

                                    </div>


                                    <?php the_excerpt() ?>
                                    <a href="<?php the_permalink(); ?>" class="btn-success">More Info</a>
                                </div>

                            </div>
                            <a href="<?php the_permalink(); ?>" class="listing-item-link"></a>
                        </div>
                    </div>


                    <?php
                    $left_or_right = ('reversed' == $left_or_right) ? '' : 'reversed';
                }
            }

           
            ?>




        </div>
        <?php  the_posts_pagination(array('mid_size' => 2));
            wp_reset_postdata(); ?>
    </section>
    <?php get_template_part('template-parts/testimonials', 'accommodations'); ?>




</div>

<?php

get_footer();
