<?php
// utility functions, in order to set in a standalone file to use here
function getDataFromPage($args) {
  if ($args['slug']) {
    $slug = $args['slug'];
    $page = get_page_by_path($args['slug']);
    $post = get_post($page->ID);
    $content = $post->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $image = get_the_post_thumbnail_url($post);
    $title = get_the_title($post);
    $pageData = (object) [
      'slug' => $slug,
      'content' => $content,
      'image' => $image,
      'ID' => $page->ID
    ];
    wp_reset_postdata();
    return $pageData;
  }
}

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
    if( $post['guid'] != null && $nolink == 'false') {
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
    'nolink' => 'false',
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
      $list.= "<li class='faqs-tabs__li faqs-tabs__li-active faqs-tabs__li-".$conteo."' data-tab=".$conteo.">";
    } else {
      $list.= "<li class='faqs-tabs__li faqs-tabs__li-".$conteo."' data-tab=".$conteo.">";
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
      $list.= "<li class='faqs-tabs__content faqs-tabs__content-".$conteo." faqs-tabs__content-active'  data-tab=".$conteo.">";
    } else {
      $list.= "<li class='faqs-tabs__content faqs-tabs__content-".$conteo."' data-tab=".$conteo.">";
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
  $contentHTML .= '   <ul class="faqs-tabs__ul">';
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

function socialNetworks( $atts = array(), $content = null ) {
  $direction = $atts['direction'];
  $page = getDataFromPage(array(
    'slug' => 'redes', 
  ));
  if( get_post_meta($page->ID, 'twitter', TRUE)){
    $twitter = get_post_meta($page->ID, 'twitter', TRUE);
  }
  if( get_post_meta($page->ID, 'facebook', TRUE)){
    $facebook = get_post_meta($page->ID, 'facebook', TRUE);
  }
  if( get_post_meta($page->ID, 'instagram', TRUE)){
    $instagram = get_post_meta($page->ID, 'instagram', TRUE);
  }
  if( get_post_meta($page->ID, 'whatsapp', TRUE)){
    $whatsapp = get_post_meta($page->ID, 'whatsapp', TRUE);
  }
  if( get_post_meta($page->ID, 'linkedin', TRUE)){
    $linkedin = get_post_meta($page->ID, 'linkedin', TRUE);
  }
  if( get_post_meta($page->ID, 'phone', TRUE)){
    $phone = get_post_meta($page->ID, 'phone', TRUE);
  }
  if( get_post_meta($page->ID, 'email', TRUE)){
    $email = get_post_meta($page->ID, 'email', TRUE);
  }
  $socialIcons = '
  <div class="header__icon header__twitter">
    <a href="https://www.twitter.com/'.$twitter.'" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
      </svg>
    </a>
  </div>
  <div class="header__icon header__linkedin">
    <a href="https://www.linkedin.com/'.$linkedin.'" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
      </svg>
    </a>
  </div>
  <div class="header__icon header__instagram">
    <a href="https://www.instagram.com/'.$instagram.'" target="_blank">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </svg></a>
  </div>
  <div class="header__icon header__facebook">
    <a href="https://www.facebook.com/'.$facebook.'" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </svg>
    </a>
  </div>
  <div class="header__icon header__whatsapp">
    <a href="https://web.whatsapp.com/send?phone=57'.$whatsapp.'" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
      </svg>
    </a>
  </div>';
  $headerSocial = '<div class="header__social">';
  $footerSocial = '<div class="footer__social">';
    if( $direction == 'row') {
      $socialHTML = $headerSocial.$socialIcons.
      '<div class="header__phone">
        <a href="tel:57'.$phone.'" target="_blank">'.$phone.'</a>
      </div>
    </div>';

    } else {
      $socialHTML = $footerSocial.$socialIcons.'
  </div>
  <div class="footer__email">
    <a href="mailto:'.$email.'" target="_blank">'.$email.'</a>
  </div>
  <div class="footer__phone">
    <a href="tel:57'.$phone.'" target="_blank">'.$phone.'</a>
  </div>
  ';
    }
  return $socialHTML;
}
add_shortcode('socialNetworks', 'socialNetworks');

function preguntasFrecuentesHome( $atts = array(), $content = null ) {
  extract(shortcode_atts(array(
    'entry_category' => null,
  ), $atts));
  $faqsHTML = '
  <div class="faq">
    <div class="container">
      <div class="faq__content">
        <div class="faq__image">
        </div>
        <div class="faq__info">
          <h3>PREGUNTAS FRECUENTES</h3>
          <p>Resuelva sus dudas relacionadas con nuestros servicios</p>
          <a href="'.get_bloginfo("url").'/preguntas-frecuentes/" target="_blank">CONOCER MÁS</a>
        </div>
      </div>
      <div class="faq__bg"></div>
    </div>
  </div>';
  return $faqsHTML;
};
add_shortcode('preguntasFrecuentesHome', 'preguntasFrecuentesHome');