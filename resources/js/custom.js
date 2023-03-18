
export class Custom {

  constructor() {

  }

  init = () => {
    $('form.form-confirm').on('submit', function () {
      return confirm('Are you sure you want to perform this operation?');
    })
    this.initDate();

    this.initTabs();

    //bulma tags input
    bulmaTagsinput.attach();

    //bulma quick view
    bulmaQuickview.attach();

    //bulma collapsible
    bulmaCollapsible.attach('.is-collapsible');

    //initialize modal actions
    this.initModalActions();
  }

  /**
 * Initialize tabs view
 */
  initTabs = () => {
    $('li.tab').on('click', function () {
      const $this = $(this);
      const $context = $this.closest('ul')
      const contentPanel = $context.data('content')
      if (contentPanel) {
        //reset 
        $('li.tab', $context).removeClass('is-active');
        $(`#${contentPanel} > div.tab-content`).addClass('is-hidden');
      } else {
        $(`li.tab`).removeClass('is-active');
        $(`div.tab-content`).addClass('is-hidden');
      }

      //show selected
      $this.addClass('is-active');
      const content = $this.data('content');
      $(`#${content}`).removeClass('is-hidden');
    })
  }

  initModalActions = () => {
    //active
    $('.open-modal').click(function () {
      const $parent = $(this).parents('div.modal-container');
      const $modal = $('.modal', $parent);
      $modal.addClass('is-active');
    });

    //close
    $('.modal-close, .modal-background').click(function () {
      const $parent = $(this).parents('div.modal');
      $parent.removeClass('is-active');
    });
  }

  initDate = () => {
    const dateOptions = {
      type: 'date',
      dateFormat: 'yyyy-MM-dd',
      displayMode: 'dialog'
    }
    // Initialize all input of type date
    let datePickers = bulmaCalendar.attach('[type="date"]', dateOptions);

    const timeOptions = {
      type: 'time',
      timeFormat: 'HH:mm',
      closeOnSelect: false,
      validateLabel: "Done",
      minuteSteps: 15
    }
    let timePickers = bulmaCalendar.attach('[type="time"]', timeOptions);

    const dtOptions = {
      type: 'datetime',
      dateFormat: 'yyyy-MM-dd',
      timeFormat: 'HH:mm',
      closeOnSelect: false,
      validateLabel: "Done",
      minuteSteps: 15,
      displayMode: 'dialog'
    }
    let dtPickers = bulmaCalendar.attach('[type="datetime"]', dtOptions);

    // Loop on each calendar initialized
    /*
    for(var i = 0; i < calendars.length; i++) {
        // Add listener to date:selected event
        calendars[i].on('select', date => {
            console.log(date);
        });
    }
    // To access to bulmaCalendar instance of an element    
    var element = document.querySelector('#my-date');
    if (element) {
        // bulmaCalendar instance is available as element.bulmaCalendar
        element.bulmaCalendar.on('select', function(datepicker) {
            console.log(datepicker.data.value());
        });
    }*/
  };

  /**
   * Renders errors receved in ajax response
   * 
   * @param {object} response 
   */
  showAjaxErrors = (response) => {
    var errors;
    if (response.responseJSON.hasOwnProperty('errors')) {
      errors = response.responseJSON.errors
    } else {
      errors = response.responseJSON
    }
    for (var i in errors) {
      var e = errors[i];
      showMessage(e, 'error');
    }
  }

  /**
   * Prevent submit form on enter
   */
  preventSubmitOnEnter = ($form) => {
    $form.bind("keypress", function (e) {
      if (e.keyCode == 13) {
        return false;
      }
    });
  }

}

/**
   * Show toast
   * @param {string} message 
   * @param {string} type 
   */
export const showMessage = (message, type) => {
  let dismissible = false;
  let pauseOnHover = true;
  let duration = 2000;
  switch (type) {
    case "warning":
      type = "is-warning";
      dismissible = true;
      duration = 3000;
      break;
    case "error":
      type = "is-danger";
      dismissible = true;
      duration = 4000;
      break;
    case "success":
      type = "is-success";
      break;
    default:
      type = "is-info";
      break;
  }
  toast({
    message: "<p class='subtitle'>" + message + "</p>",
    type: type,
    duration: duration,
    position: "top-right",
    dismissible: dismissible,
    pauseOnHover: pauseOnHover,
    opacity: 0.9,
    animate: { in: 'fadeIn', out: 'fadeOut' }
  });
}

export const showLoader = () => {
  console.log('show')
  $('div#pageloader').addClass('is-active')
}

export const hideLoader = () => {
  $('div#pageloader').removeClass('is-active')
}