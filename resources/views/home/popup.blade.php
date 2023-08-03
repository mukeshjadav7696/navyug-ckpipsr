<div>
  <div class="modal is-active" id="modal-popup">
    <div class="modal-background"></div>
    <div class="modal-content">
      <p class="image" >
        <img src="{{ asset("/images/Mpharm_2.jpg") }}" />
      </p>
    </div>
    <div class="buttons is-centered">
      <p class="content pt-3">
      <a href="https://forms.gle/yQKPF5f32fXiNNAe7" target="_blank" class="button"> Click here for Inquiry Form</a>
      </p>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
  </div>
  <script>         
    $(document).ready(function(){
        setTimeout(() => {
          $('#modal-popup').removeClass('is-active')
        }, 10000);
    });
  </script>
</div>