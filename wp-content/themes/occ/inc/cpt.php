<?php

function occ_meta_box($meta_boxes)
{
    $prefix = 'rw_';

    $meta_boxes[] = array(
        'id' => 'additional',
        'title' => esc_html__('Additional Information', 'occ'),
        'post_types' => array('product'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
            array(
                'id' => $prefix . 'specs_image',
                'name' => esc_html__('Specs Image', 'occ'),
                'type' => 'image_advanced',
                'image_size' => 'thumbnail'
            ),
            array(
                'id' => $prefix . 'features',
                'name' => esc_html__('Features', 'occ'),
                'type' => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 10,
                ),
            ),
            array(
                'id' => $prefix . 'specifications',
                'name' => esc_html__('Specifications', 'occ'),
                'type' => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 10,
                ),
            ),
            array(
                'id' => $prefix . 'options',
                'name' => esc_html__('Options', 'occ'),
                'type' => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 10,
                ),
            ),
        ),
    );

    $meta_boxes[] = array(
        'id' => 'additional',
        'title' => esc_html__('Additional Information', 'occ'),
        'post_types' => array('testimonial'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
            // array(
            //     'id' => $prefix . 'author_image',
            //     'name' => esc_html__('Author Image', 'occ'),
            //     'type' => 'image_advanced',
            //     'image_size' => 'thumbnail'
            // ),
            array(
                'id' => $prefix . 'author_name',
                'name' => esc_html__('Author Name', 'occ'),
                'type' => 'text',
                
            ),
            array(
                'id' => $prefix . 'author_company',
                'name' => esc_html__('Author Company', 'occ'),
                'type' => 'text',

            ),
           
        ),
    );

    $meta_boxes[] = array(
        'id' => 'additional',
        'title' => esc_html__('Additional Information', 'occ'),
        'post_types' => array('page'),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => false,
        'fields' => array(
            array(
                'id' => $prefix . 'page_banner',
                'name' => esc_html__('Banners', 'occ'),
                'type' => 'image_advanced',
                'image_size' => 'thumbnail'
            ),
           

        ),
    );


    return $meta_boxes;
}
add_filter('rwmb_meta_boxes', 'occ_meta_box');