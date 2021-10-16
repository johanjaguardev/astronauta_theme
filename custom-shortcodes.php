<?php function dotiavatar_function( $atts = array() ) {
  // set up default parameters
  extract(shortcode_atts(array(
  'rating' => '5'
  ), $atts));
  return "<img src=\"http://dayoftheindie.com/wp-content/uploads/$rating-star.png\" 
  alt=\"doti-rating\" width=\"130\" height=\"188\" class=\"left-align\" />";
}
add_shortcode('dotiavatar', 'dotiavatar_function');

function dotirating_function( $atts = array() ) {
  
  // set up default parameters
  extract(shortcode_atts(array(
   'rating' => '5'
  ), $atts));
  
  return "<img src=\"http://dayoftheindie.com/wp-content/uploads/$rating-star.png\" 
  alt=\"doti-rating\" width=\"130\" height=\"188\" class=\"left-align\" />";
}

add_shortcode('dotirating', 'dotirating_function');

function dotifollow_function( $atts, $content = null ) {
  return '<a href="https://twitter.com/DayOfTheIndie" target="blank" class="doti-follow">' . $content . '</a>';
}
add_shortcode('dotifollow', 'dotifollow_function');

function dotibutton_function( $atts = array(), $content = null ) {
  
  // set up default parameters
  extract(shortcode_atts(array(
   'link' => '#'
  ), $atts));
  
  return '<a href="'. $link .'" target="blank" class="doti-button">' . $content . '</a>';
}
add_shortcode('dotibutton', 'dotibutton_function');
function getList($category) {
  $list = "";
  $args = array( 'category_name' => $category );
  $posts = wp_get_recent_posts( $args );
  foreach ($posts as $post) {
    $list.= "<li><div class='glide__box'>";
    if( get_the_post_thumbnail_url($post['ID']) != null ) {
      $list.= "<img src='".get_the_post_thumbnail_url($post['ID'])."' class='glide__img' />";
    }
    if( get_the_title($post['ID']) != null ) {
      $list.= "<h4>".get_the_title($post['ID'])."</h4>";
    }
    if( get_the_excerpt($post['ID']) != null ) {
      $list.= "<p>".get_the_excerpt($post['ID'])."</p>";
    }
    if( $post['guid'] != null ) {
      $list.= "<a href='".$post['guid']."'>Ver mas</a>";
    }

  }
  wp_reset_postdata();
  return $list;
}
function glideSlideFunction( $atts = array(), $content = null ) {
  extract(shortcode_atts(array(
    'id' => 'glide',
    'per_view' => 3,
    'focus_at' => 'center',
    'type' => 'carousel',
    'entry_category' => null,
    ), $atts));
  $headerGlideHTML = "
   <div class='${id}_container' id='${id}_container'>
    <div class='glide glide__${id}' id='${id}' data-type='${type}' data-per_view=${per_view} data-focus_at=${focus_at}>
      <div class='glide__track' data-glide-el='track'>
        <ul class='glide__slides'>";
  $footerGlideHTML = "</ul></div></div>
    <div class='glide__arrows' data-glide-el='controls'>
      <button class='glide__arrow glide__arrow--left' data-glide-dir='<'>prev</button>
      <button class='glide__arrow glide__arrow--right' data-glide-dir='>'>next</button>
    </div>
  </div>";
  $ulHTML = getList($entry_category);
  return $headerGlideHTML.$ulHTML.$footerGlideHTML;
};
add_shortcode('glideSlide', 'glideSlideFunction');
?>
