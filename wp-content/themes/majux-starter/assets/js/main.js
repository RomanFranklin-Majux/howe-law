// Check window width
function checkWidth() {
  var mobile;
  windowSize = window.innerWidth;
  if (windowSize < 992)    mobile = true;
  else                      mobile = false;

  return mobile;
  console.log('Mobile: ' + mobile);
}


function toggleDropdownIndicators() {
  var mobile = checkWidth();
  if (mobile && jQuery('.dropdown-btn').length == 0) {
    jQuery('.menu-item-has-children').append('<div class="dropdown-btn"></div>');
  } 

  if (!mobile && jQuery('.dropdown-btn').length > 0) { jQuery('.dropdown-btn').remove(); }
}


jQuery(document).ready(function($) {
  // Check window width on load
  var mobile = checkWidth;
  toggleDropdownIndicators();

  $(window).on('load resize', function() {
    mobile = checkWidth();
    toggleDropdownIndicators();
  });

  // Toggle Mobile Menu
  $(document).on('click', '.mobile-menu-button', function() { $('.mobile-menu-wrapper').toggleClass('open'); })
  $(document).on('click', '.close-menu-button, .page-overlay', function() { $('.mobile-menu-wrapper').removeClass('open'); })

  // Mobile Menu dropdowns
  $(document).on('click', '.dropdown-btn', function() { $(this).parent().toggleClass('sub-menu-open'); });
})





/*--------------------------------------------------------------
# Swipers
--------------------------------------------------------------*/

// Featured In slider
const swiperFeatured = new Swiper('.swiper-featured-in', {
  // Optional parameters
  loop: true,
  speed: 1200,
  // Default
  slidesPerView: 1,
  spaceBetween: 15,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-featured-in-next',
    prevEl: '.swiper-featured-in-prev',
  },
  breakpoints: {
    992: {
      slidesPerView: 5,
      spaceBetween: 25,
    },
  },
});

// Featured In slider
const swiperAwards = new Swiper('.swiper-awards', {
  // Optional parameters
  loop: true,
  speed: 1200,
  // Default
  slidesPerView: 2,
  spaceBetween: 15,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-awards-next',
    prevEl: '.swiper-awards-prev',
  },
  enabled: true,
  breakpoints: {
    992: {
      enabled: false,
      slidesPerView: 5,
    },
  },
});


// Testimonials slider
const swiperTestimonials = new Swiper('.swiper-testimonials', {
  // Optional parameters
  loop: true,
  speed: 1200,
  // Default
  slidesPerView: 1,
  spaceBetween: 15,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-testimonials-next',
    prevEl: '.swiper-testimonials-prev',
  },
  enabled: true,
});