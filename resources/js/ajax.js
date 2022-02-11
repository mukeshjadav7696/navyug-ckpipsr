
class Ajax {

  constructor(type, url, data = {}, datatype = 'json') {

    this.type = type
    this.url = url
    this.data = data
    this.datatype = datatype
    this.onSuccess = () => { }
    this.onError = () => { }
    this.beforeSend = () => { }
  }

  //send ajax request
  send() {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('input[name=_token]').val()
      }
    });

    $.ajax({
      type: this.type,
      url: this.url,
      data: this.data,
      dataType: this.datatype,
      beforeSend: (xhr) => {
        this.beforeSend(xhr)
      },
      success: (response) => {
        this.onSuccess(response)
      },
      error: (error) => {
        // console.error("Ajax Error : ", error)
        this.onError(error)
      }
    });
  }

  //before send callback
  beforeSend(callback) {
    if (callback) {
      this.beforeSend = callback
    } else {
      this.beforeSend = () => { }
    }
  }

  //set success callback
  onSuccess(callback) {
    this.onSuccess = callback
  }

  //set error callback
  onError(callback) {
    this.onError = callback
  }

};

export default Ajax;
