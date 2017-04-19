var s = skrollr.init({
  smoothScrolling: true,
  forceHeight: false
});

jQuery(document).ready( function($) {

  /* Text Decoration for Nav Menu */
  var coolUnderline = "<span class='coolUnderline'></span>";
  $('.menu-item').append(coolUnderline);

  // Sidebar Functionality
  $('.show-button').click( function() {
      $('.sidebar').addClass('show');
  });

  $('body > *').not('header').click( function() {
      $('.sidebar').removeClass('show');
  });

  $('.close-button').click( function() {
      $('.sidebar').removeClass('show');
  });

  // Mark Submenu

  $('.menu-item-has-children').prepend('<span class="sub-menu-sign">+</span>');

});
