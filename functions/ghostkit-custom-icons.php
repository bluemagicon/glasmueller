<?php

add_filter( 'gkt_icons_list', 'my_gkt_icons' );
function my_gkt_icons( $icons ) {
    $icons['my-icons-pack'] = array(
        'name' => 'GlasMüller Icons',
        'icons' => array(
            array(
                'keys' => '',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="7.745" height="12" viewBox="0 0 7.745 12"><path id="FontAwsome_angle-right_" data-name="FontAwsome (angle-right)" d="M32.231,102.587l-5.1,5.1a.9.9,0,0,1-1.271,0l-.847-.847a.9.9,0,0,1,0-1.271l3.614-3.614L25.014,98.34a.9.9,0,0,1,0-1.271l.843-.855a.9.9,0,0,1,1.271,0l5.1,5.1A.9.9,0,0,1,32.231,102.587Z" transform="translate(-24.75 -95.95)" fill="#e4032e"/></svg>',
            ),
            array(
                'keys' => '',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="43.688" height="43.688" viewBox="0 0 43.688 43.688"><path id="FontAwsome_check-circle_" data-name="FontAwsome (check-circle)" d="M29.844,8A21.844,21.844,0,1,0,51.688,29.844,21.844,21.844,0,0,0,29.844,8Zm0,4.228A17.616,17.616,0,1,1,12.228,29.844,17.607,17.607,0,0,1,29.844,12.228M42.193,23.7l-1.985-2a1.057,1.057,0,0,0-1.495-.006l-12.45,12.35L21,28.736A1.057,1.057,0,0,0,19.5,28.73l-2,1.985a1.057,1.057,0,0,0-.006,1.495l8,8.061a1.057,1.057,0,0,0,1.495.006l15.2-15.08A1.057,1.057,0,0,0,42.193,23.7Z" transform="translate(-8 -8)" fill="#e4032e"/></svg>',
            ),
        ),
    );

    return $icons;
}
