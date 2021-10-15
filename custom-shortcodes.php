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

function glideSlideFunction( $atts = array(), $content = null ) {
  extract(shortcode_atts(array(
    'id' => 'glide',
    'per_view' => 3,
    'focus_at' => 'center',
    'type' => 'carousel',
    'entry_category' => null,
   ), $atts));
  return "
  <div class='${id}_container' id='${id}_container'>
    <div class='glide glide__${id}' id='${id}' data-type='${type}' data-per_view=${per_view} data-focus_at=${focus_at}>
      <div class='glide__track' data-glide-el='track'>
        <ul class='glide__slides'>
          <li class='glide__slide'>0</li>
          <li class='glide__slide'>1</li>
          <li class='glide__slide'>2</li>
        </ul>
      </div>
    </div>
    <div class='glide__arrows' data-glide-el='controls'>
      <button class='glide__arrow glide__arrow--left' data-glide-dir='<'>prev</button>
      <button class='glide__arrow glide__arrow--right' data-glide-dir='>'>next</button>
    </div>
  </div>";
};
add_shortcode('glideSlide', 'glideSlideFunction');
?>
