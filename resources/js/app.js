require('./bootstrap');
require('alpinejs');

/**
 * Custom 
 */
import { Custom, showMessage, showLoader, hideLoader } from "./custom"
window.CustomComponents = new Custom()
window.showMessage = showMessage
window.showLoader = showLoader
window.hideLoader = hideLoader

/**
 * Filter panel
 */
import Filter from "./filter"
window.FilterPanel = new Filter()

import Ajax from './ajax'
window.Ajax = Ajax

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