<?php


function templateDir() {
  return get_template_directory_uri();
}

/* Get image alt text
/* If used within the loop, it will pull the alt text of the featured image by default
/* You can also pass an ID to get the alt text for a specific image */

function getAltText($image_id = '') {
  if (empty($image_id)) :
    global $post;
    $image_id     = get_post_thumbnail_id();
  endif;

  $image_alt    = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
  return $image_alt;
}

/**
 * Phone number functions
 */

function phoneNumber($number = 'phone_number_1') { 
  if (class_exists('ACF') && get_field($number, 'option')) :
    return get_field($number, 'option');
  else:
    return '555-555-5555'; 
  endif;
}

/* Strip special characters and spaces from phone number and add +1 */
function stripNumber($number) {
    $replace = array('-', ' ', '(', ')');
    $phoneNumber = str_replace($replace, '', $number);
    return '+1' . $phoneNumber;
}



function getAttorneyImage($array = false) {
  if ($array) :
    $img = get_the_post_thumbnail_url();
    if (empty($img)) : $img = templateDir() . '/assets/images/default-attorney.png'; endif;

    $thumb = array(
      'url' => $img,
      'id'  => get_post_thumbnail_id(),
    );
  else :

    $thumb = get_the_post_thumbnail_url();
    if (empty($thumb)) : $thumb = templateDir() . '/assets/images/default-attorney.png'; endif;

  endif;

  return $thumb;
}



function featuredImage() {
  $thumb = get_the_post_thumbnail_url();
  return !empty($thumb) ? 'style="background-image: url(\'' . $thumb . '\');"' : ''; 
}



function getAddress($linebreak = false) {
  $address = get_field('address', 'option');

  $fullAddress  = $address['street_address_1'];
  $fullAddress .= (!empty($address['street_address_2'])) ? ' ' . $address['street_address_2'] : ''; 

  if ($linebreak) :
    $fullAddress .= '<br />';
  else :
    $fullAddress .= ', ';
  endif;

  $fullAddress .= (!empty($address['city'])) ? $address['city'] . ', ' . $address['state'] . ' ' . $address['zip'] : '';

  return $fullAddress;
}


function embedGoogleMap() {
  // Get address from site options
  $address = get_field('address', 'option');

  // Return if there is no address
  if (empty($address)) return;

  // Create address string
  $string = '';
  foreach($address as $key => $value) :
    // Skip Address Line 2
    if ($key == 'street_address_2') continue;

    // Replace spaces with %20 and add to string
    $string .= str_replace(' ', '%20', $value) . '%20';
  endforeach;

  // Create full GMap embed URL
  $url = 'https://maps.google.com/maps?q=' . $string . '&t=&z=13&ie=UTF8&iwloc=&output=embed';

  // Create full embed
  $map  = '<div class="map-wrapper">';
  $map .= '<iframe id="gmap_canvas" src="' . $url . '" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>';
  $map .= '</div>';

  return $map;
}

?>