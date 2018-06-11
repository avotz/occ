<?php


function get_availability($request)
{

    $post = get_post($request['id']);

    if (empty($post)) {
        return null;
    }

    $availability = get_post_meta($post->ID, '_wc_booking_availability', true);
    
    $response = new WP_REST_Response($availability);
  
    return $response;
}


function update_availability($request)
{

    $post = get_post($request['id']);

    if (empty($post)) {
        return new WP_Error('no_property', 'Property Not Found', array('status' => 404));
    }
    if(!$request['from'] && !$request['to']){
        return new WP_Error('no_dates', 'Invalid From and To dates', array('status' => 422));
    }
    
    $newData = [
        [
            "type" => $request['type'],
            "bookable" => $request['bookable'],
            "priority" => $request['priority'],
            "from" => $request['from'],
            "to" => $request['to']
        ]
    ];

    update_post_meta($post->ID, '_wc_booking_availability', $newData);


    return ['message' => 'Disponibilidad actualizada'];
}


add_action('rest_api_init', function () {
    register_rest_route('alo/v1', '/properties/(?P<id>\d+)/availability', array(
        'methods' => 'GET',
        'callback' => 'get_availability',
    ));

    register_rest_route('alo/v1', '/properties/(?P<id>\d+)/availability', array(
        'methods' => 'PUT',
        'callback' => 'update_availability',
        'permission_callback' => function ($request) {
            //die(var_dump($request['id']));
            if (current_user_can('edit_others_posts')){
                return true;

            }
        }
    ));
});