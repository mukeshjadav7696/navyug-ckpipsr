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
export default class Filter {
  constructor() { }

  /**
    * Initialise filter panel
    * @returns null
    */
  initFilterPanel = (context, route, namedPara) => {
    const filterPanel = $('#quickviewDefault', context);
    this.$inputs = $('input, select', filterPanel).not(':input[type=button], :input[type=submit], :input[type=reset]');
    this.namedPara = namedPara
    this.route = route;

    //Bind click event to search button
    const onSearch = () => {
      this.search();
    }
    $('#FilterSearch', filterPanel).on('click', onSearch);

    //Bind click event to clear all filters
    const onClear = () => {
      if (this.route.includes("?")) {
        window.location = this.route;
      } else {
        window.location = this.route + "/";
      }
    }
    $('#FilterClear', context).on('click', onClear);
    this.populateFilter(namedPara);
  };

  /**
   * Generates parameters and send search request
   */
  search = () => {
    const params = this.getFilterParameters();
    const old = JSON.parse(this.namedPara);
    let noParam = true;
    for (let field in params) {
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
    const prevRPP = $('#rpp-prev').val();
    const currentRPP = $('#rpp').val();
    if (noParam && prevRPP === currentRPP) {
      showMessage('No need to refresh', 'warning');
      return;
    }
    params['rpp'] = currentRPP;

    let url;
    if (this.route.includes("?")) {
      url = this.route + "&" + this.prepareURL(params);
    } else {
      url = this.route + "/" + "?" + this.prepareURL(params);
    }
    //console.log(url);
    window.location = url;
  };

  /**
   * Prepare url from param object format name1:value1/name2:value2
   * @param {object} param
   * @returns {String}
   *
   */
  prepareURL = (param) => {
    let url = "";
    for (let name in param) {
      const value = param[name];
      //console.log(value);
      if (name === 'undefined' || value === '')
        continue;
      url = url + name + "=" + value + "&";
    }
    //url.slice(0, -1);
    return url.slice(0, -1);
  };

  /**
   * get filter parametes
   * @returns {object} param - parameter object
   */
  getFilterParameters = () => {
    let param = new Object();
    this.$inputs.each(function () {
      const $this = $(this);
      let data = undefined;
      if ($this.is('input')) {
        switch ($this.attr("type")) {
          case "email":
          case "text":
            if (!$this.hasClass('select-dropdown'))
              data = $this.val();
            break;
          case "number":
            if ($this.val() !== '')
              data = [$this.val()];
            break;
          case "checkbox":
            if ($this.is(':checked'))
              data = ['1'];
            break;
        }
      } else {
        //data = [$this.val()];
        if ($this.val() !== null)
          data = $this.val();
      }
      if (data !== undefined) {
        if (param[$this.attr('name')] === undefined)
          param[$this.attr('name')] = data;

        else
          param[$this.attr('name')] = $.merge(param[$this.attr('name')], data);
      }
    });
    return param;
  };

  //Fill value from named para into filter panel input fields
  populateFilter = (para) => {
    const namedPara = JSON.parse(para);
    for (const name in namedPara) {
      this.$inputs.each(function () {
        const $this = $(this);
        const fieldName = $this.attr('name');
        if (fieldName === name) {
          if ($this.is('input')) {
            if ($this.attr("type") == 'checkbox') {
              $this.prop('checked', true);
            } else {
              $this.val(namedPara[name]);
            }
          }
          if ($this.is('select')) {
            const selectedOption = $("option[value='" + namedPara[name] + "']", $this);
            if (selectedOption) {
              selectedOption.attr('selected', 'selected');
            }
          }
        }
      });
    }
  };
}
