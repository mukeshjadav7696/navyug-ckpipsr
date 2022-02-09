require('./bootstrap');
require('alpinejs');

/**
 * Custom 
 */
import { Custom, showMessage } from "./custom"
window.CustomComponents = new Custom()
window.showMessage = showMessage

/**
 * Filter panel
 */
import Filter from "./filter"
window.FilterPanel = new Filter()

/**
 * Check whether client browser is mobile or desktop
 * 
 * @returns Boolean
 */
window.isMobile = function () {
  if (/Mobi/.test(navigator.userAgent)) {
    return true
  } else {
    return false
  }
}