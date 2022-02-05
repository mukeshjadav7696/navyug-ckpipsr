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