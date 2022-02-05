/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/filter.js":
/*!********************************!*\
  !*** ./resources/js/filter.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Filter; });
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Create filter
 * @param string - route
 * @param string - namedPara (json encoded named parameter
 * @returns null
 */
var Filter = /*#__PURE__*/_createClass(function Filter() {
  var _this = this;

  _classCallCheck(this, Filter);

  _defineProperty(this, "initFilterPanel", function (context, route, namedPara) {
    var filterPanel = $('#quickviewDefault', context);
    _this.$inputs = $('input, select', filterPanel).not(':input[type=button], :input[type=submit], :input[type=reset]');
    _this.namedPara = namedPara;
    _this.route = route; //Bind click event to search button

    var onSearch = function onSearch() {
      _this.search();
    };

    $('#FilterSearch', filterPanel).on('click', onSearch); //Bind click event to clear all filters

    var onClear = function onClear() {
      if (_this.route.includes("?")) {
        window.location = _this.route;
      } else {
        window.location = _this.route + "/";
      }
    };

    $('#FilterClear', context).on('click', onClear);

    _this.populateFilter(namedPara);
  });

  _defineProperty(this, "search", function () {
    var params = _this.getFilterParameters();

    var old = JSON.parse(_this.namedPara);
    var noParam = true;

    for (var field in params) {
      if (old.hasOwnProperty(field)) {
        if (params[field] != old[field]) {
          noParam = false;
          break;
        }
      } else {
        if (params[field] !== '') {
          noParam = false;
          break;
        }
      }
    }

    var prevRPP = $('#rpp-prev').val();
    var currentRPP = $('#rpp').val();

    if (noParam && prevRPP === currentRPP) {
      showMessage('No need to refresh', 'warning');
      return;
    }

    params['rpp'] = currentRPP;
    var url;

    if (_this.route.includes("?")) {
      url = _this.route + "&" + _this.prepareURL(params);
    } else {
      url = _this.route + "/" + "?" + _this.prepareURL(params);
    } //console.log(url);


    window.location = url;
  });

  _defineProperty(this, "prepareURL", function (param) {
    var url = "";

    for (var name in param) {
      var value = param[name]; //console.log(value);

      if (name === 'undefined' || value === '') continue;
      url = url + name + "=" + value + "&";
    } //url.slice(0, -1);


    return url.slice(0, -1);
  });

  _defineProperty(this, "getFilterParameters", function () {
    var param = new Object();

    _this.$inputs.each(function () {
      var $this = $(this);
      var data = undefined;

      if ($this.is('input')) {
        switch ($this.attr("type")) {
          case "email":
          case "text":
            if (!$this.hasClass('select-dropdown')) data = $this.val();
            break;

          case "number":
            if ($this.val() !== '') data = [$this.val()];
            break;

          case "checkbox":
            if ($this.is(':checked')) data = ['1'];
            break;
        }
      } else {
        //data = [$this.val()];
        if ($this.val() !== null) data = $this.val();
      }

      if (data !== undefined) {
        if (param[$this.attr('name')] === undefined) param[$this.attr('name')] = data;else param[$this.attr('name')] = $.merge(param[$this.attr('name')], data);
      }
    });

    return param;
  });

  _defineProperty(this, "populateFilter", function (para) {
    var namedPara = JSON.parse(para);

    var _loop = function _loop(name) {
      _this.$inputs.each(function () {
        var $this = $(this);
        var fieldName = $this.attr('name');

        if (fieldName === name) {
          if ($this.is('input')) {
            if ($this.attr("type") == 'checkbox') {
              $this.prop('checked', true);
            } else {
              $this.val(namedPara[name]);
            }
          }

          if ($this.is('select')) {
            var selectedOption = $("option[value='" + namedPara[name] + "']", $this);

            if (selectedOption) {
              selectedOption.attr('selected', 'selected');
            }
          }
        }
      });
    };

    for (var name in namedPara) {
      _loop(name);
    }
  });
}
/**
  * Initialise filter panel
  * @returns null
  */
);



/***/ }),

/***/ 2:
/*!**************************************!*\
  !*** multi ./resources/js/filter.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/aroyal/workspace/excellence/navyug-app/resources/js/filter.js */"./resources/js/filter.js");


/***/ })

/******/ });