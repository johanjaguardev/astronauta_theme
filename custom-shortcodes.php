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

function getList($category, $nolink) {
  $list = "";
  $args = array( 'category_name' => $category );
  $posts = wp_get_recent_posts( $args );

  foreach ($posts as $post) {
    $list.= "<li class='glide__li'><div class='glide__box'>";
    if( get_the_post_thumbnail_url($post['ID']) != null ) {
      $list.= "<img src='".get_the_post_thumbnail_url($post['ID'])."' class='glide__img' />";
    } else {
      $list.= "<img src='https://martialartsplusinc.com/wp-content/uploads/2017/04/default-image.jpg' class='glide__img' />";
    }
    if( get_the_title($post['ID']) != null ) {
      $list.= "<h4 class='glide__title'>".get_the_title($post['ID'])."</h4>";
    }
    if( get_the_excerpt($post['ID']) != null ) {
      $list.= "<p class='glide__excerpt'>".get_the_excerpt($post['ID'])."</p>";
    }
    if( $post['guid'] != null && $nolink == false) {
      $list.= "<a class='glide__readmore' href='".$post['guid']."'>Leer más</a>";
    }
    $list.= "</div></li>";
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
    'classes' => 'default',
    'nolink' => false,
  ), $atts));
  $headerGlideHTML = "
   <div class='${id}_container glide__container glide__${classes}' id='${id}_container'>
    <div class='glide glide__${id}' id='${id}' data-type='${type}' data-per_view=${per_view} data-focus_at='${focus_at}'>
      <div class='glide__track' data-glide-el='track'>
        <ul class='glide__slides'>";
  $footerGlideHTML = "</ul></div></div>
    <div class='glide__arrows' data-glide-el='controls'>
      <a class='glide__arrow glide__arrow--left' data-glide-dir='<'><</a>
      <a class='glide__arrow glide__arrow--right' data-glide-dir='>'>></a>
    </div>
  </div>";
  $ulHTML = getList($entry_category, $nolink);
  return $headerGlideHTML.$ulHTML.$footerGlideHTML;
};
add_shortcode('glideSlide', 'glideSlideFunction');

function getListFAQSTitles($category) {
  $list = "";
  $args = array( 'category_name' => $category );
  $posts = wp_get_recent_posts( $args );
  $conteo = 0;
  foreach ($posts as $post) {
    if($conteo == 0) {
      $list.= "<li class='faqs-tabs__li faqs-tabs__li-active' data-tab=".$conteo.">";
    } else {
      $list.= "<li class='faqs-tabs__li' data-tab=".$conteo.">";
    }
    $list.= get_the_title($post['ID']);
    $list.= "</li>";
    $conteo++;
  }
  wp_reset_postdata();
  return $list;
}
function getListFAQSContent($category) {
  $list = "";
  $args = array( 'category_name' => $category );
  $posts = wp_get_recent_posts( $args );
  $conteo = 0;
  foreach ($posts as $post) {
    if($conteo == 0) {
      $list.= "<li class='faqs-tabs__content faqs-tabs__content-".$conteo." faqs-tabs__content-active' data-tab=".$conteo.">";
    } else {
      $list.= "<li class='faqs-tabs__content' data-tab=".$conteo.">";
    }
    $list.= get_post_field('post_content', $post['ID']);
    $list.= "</li>";
    $conteo++;
  }
  wp_reset_postdata();
  return $list;
}
function faqsTabsFunction( $atts = array(), $content = null ) {
  extract(shortcode_atts(array(
    'entry_category' => null,
  ), $atts));
  $headerHTML = '<div class="faqs-tabs">';
  $contentHTML = '  <div class="faqs-tabs__izquierda">';
  $contentHTML .= '   <ul class="faqs-tabs_ul">';
  $contentHTML .= getListFAQSTitles($entry_category);
  $contentHTML .= '   </ul>';
  $contentHTML .= ' </div>';
  $contentHTML .= ' <div class="faqs-tabs__derecha">';
  $contentHTML .= '   <ul class="faqs-tabs_ul-content">';
  $contentHTML .= getListFAQSContent($entry_category);
  $contentHTML .= '   </ul>';
  $contentHTML .= ' </div>';
  $footerHTML = '</div>';
  $entireHTML = $headerHTML.$contentHTML.$footerHTML;
  return $entireHTML;
};
add_shortcode('faqsTabs', 'faqsTabsFunction');
?>
