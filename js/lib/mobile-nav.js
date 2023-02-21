import $ from 'jquery'

const $doc = $(document)
const $header = $('.js-header')
const $mobileNav = $('.js-mobile-nav')
const $hamburger = $('.js-hamburger')

function showMobileNav(event) {
  event.preventDefault()
  $mobileNav.toggleClass('is-active')
  $hamburger.toggleClass('is-active')
  $header.toggleClass('mobile-nav-active')
  if ( $mobileNav.hasClass('is-active')) {
    $hamburger.attr('aria-expanded', 'true')
  } else {
    $hamburger.attr('aria-expanded', 'false')
  }
}

export default function initMobileNav(){
  $doc.on('click', '.js-hamburger', showMobileNav )
  $doc.on('keydown', function(event) {
    if ( $mobileNav.hasClass('is-active') && (event.key == "Escape") ) {
      $hamburger.attr('aria-expanded', 'false')
      $mobileNav.toggleClass('is-active')
      $hamburger.toggleClass('is-active')
      $header.toggleClass('mobile-nav-active')
    }
  })
  $doc.on('focusin', function (event) {
    var $target = $(event.target);
    if (!$target.closest('.js-header-wrapper').length) {
      if ( $mobileNav.hasClass('is-active') ) {
        $hamburger.attr('aria-expanded', 'false')
        $mobileNav.toggleClass('is-active')
        $hamburger.toggleClass('is-active')
        $header.toggleClass('mobile-nav-active')
      }
    }
  })
}
