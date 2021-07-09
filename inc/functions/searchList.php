<?php 
add_action('wp_ajax_nopriv_search', 'searchList');
add_action('wp_ajax_search', 'searchList');

function searchList() {
    global $wpdb;
    $content = $_POST;
    $searchCurrent = $content['search'];
    if ($searchCurrent != '') {
        $response = '';
        

        $argsTips = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            's' => $searchCurrent
        );
        $listTips = new WP_Query($argsTips);
        if ($listTips->have_posts()) {
            $response .= '<div class="autosuggest-tip autosuggest-single"><h3>Matérias</h3><div class="list-tips list-content row d-flex" id="autosuggest-tip">';
            while ($listTips->have_posts()) {
                $listTips->the_post();
               $response .= '<div class="single-tip col-12 my-1"><a href="' . get_the_permalink() . '"><div class="row d-flex justify-content-center align-items-center"><div class="col-3"><img src="' . get_the_post_thumbnail_url() . '" class="img-tip img-fluid" alt=""></div><div class="col-9"><h4>' . get_the_title() . '</h4></div></div></a></div>';
            }
            $response .= '</div></div>';
        }


        if ($response == '') {
            $response = '<div class="autosuggest-pre"><div class="p-3 text-center"><h4>Nenhum resultado encontrado</h4></div></div>';
        }
    }
    else {
        $response = '<div class="autosuggest-pre"><div class="p-3 text-center"><h4>Insira sua pesquisa</h4></div></div>';
    }
    echo $response;
    exit;
}
?>