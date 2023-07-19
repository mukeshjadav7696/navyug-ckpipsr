<div>
  <div class="modal is-active" id="modal-popup">
    <div class="modal-background"></div>
    <div class="modal-content">
      <p class="image">
        <img src="{{ asset("/images/Mpharm_2.jpg") }}" />
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