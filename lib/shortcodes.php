<?php

  // [saltbag bag_img='http://imgurl.com/img.jpg' bag_alt='Name of bag' bag_info='Some info on bag']

  function saltbag_func($atts) {
    $a = shortcode_atts( array(
      'bag_img'   =>    '#',
      'bag_alt'   =>    'HotRocks',
      'bag_info'  =>    'Lorem Ipsum',
    ), $atts );

    return "<div class='salt-bag'><img src='" . $a['bag_img'] . "' class='img-fluid bag-img' alt='" . $a['bag_alt'] . "'  /><div class='bag-info'><div class='show-info-button'><i class='fa fa-info'></i></div><ul> " . $a['bag_info'] . " </ul></div></div>";
  }

  add_shortcode( 'saltbag', 'saltbag_func' );

 ?>
