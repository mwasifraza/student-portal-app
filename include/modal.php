<style>
.modal-content{
    background-color: #212121;
}
.modal-header{
    border-bottom-color: #424242;
}
.modal-header button.close{
    color: #fff;
    text-shadow: none;
    outline: none;
    transition: .3s;
}
.modal-header button:hover{
    color: #fff;
    transform: scale(1.3);
}
.modal-footer{
    border-top-color: #424242;
    justify-content: center;
}
</style>

<!-- Enroll Form -->
<div class="modal fade" id="Modal-Enroll"
     tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title uppercase" id="ModalLabel">
          SELECT YOUR COURSE
        </h5>
        <button type="button" class="close"
                data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
            {{ enroll_form.hidden_tag() }}
            
            {{ enroll_form.courses.label() }}
            {{ enroll_form.courses(class='form-control') }}
            
            {{ enroll_form.submit(class='btn btn-warning btn-block') }}
            <p>Note: You can only enroll in one of these courses at the moment.</p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-dismiss="modal">Not Right Now!
        </button>
      </div>
    </div>
  </div>
</div>


<!-- Unenroll Form -->
<div class="modal fade" id="Modal-Unenroll"
     tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title uppercase" id="ModalLabel">
          CONFIRM BOX
        </h5>
        <button type="button" class="close"
                data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        <form method="POST">
            {{ enroll_form.hidden_tag() }}
            <h4>Are you sure you want to unenroll from this course?</h4>
            <small>Note: If you unenroll, you will not be able to enroll in the same course again for two days!</small>
            {{ unenroll_form.submit(class='btn btn-danger btn-block') }}
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
                data-dismiss="modal">Not Now! Close
        </button>
      </div>
    </div>
  </div>
</div>