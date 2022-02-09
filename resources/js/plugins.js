/**
 * Font Awsome Icons
 */
require('@fortawesome/fontawesome-free/js/all.min.js');
//var $ = require( "jquery/dist/jquery" );

/**
 * Bulma Extensions
 */
try {
  window.$ = require('jquery/dist/jquery.min.js');
  window.toast = require('bulma-toast').toast;
  window.bulmaCalendar = require('bulma-calendar');
  window.bulmaTagsinput = require('@creativebulma/bulma-tagsinput/dist/js/bulma-tagsinput.min.js');
  window.bulmaQuickview = require('bulma-quickview/dist/js/bulma-quickview.min.js');
  window.Cropper = require('cropperjs')
  window.Splide = require('@splidejs/splide').default
} catch (e) { }