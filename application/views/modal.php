<!-- login modal -->
<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h2 class="text-center">
          <img src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle">
          <br>Login</h2>
      </div>
      <div class="modal-body">
        <!-- signin form -->
        <form id="signin-form" class="form col-md-12 center-block">
          <div class="form-group">
            <input type="email" name="email" class="form-control input-lg" placeholder="Email" required autofocus>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control input-lg" placeholder="Password" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
            <span class="pull-right"><a href="#">Register</a></span>
            <span><a href="#">Need help?</a></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- about modal -->
<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h2 class="text-center">About</h2>
      </div>
      <div class="modal-body">
        <div class="col-md-12 text-center">
          <a href="http://bootply.com/90113">This Bootstrap Template</a>
          <br>was made with <i class="glyphicon glyphicon-heart"></i> by <a href="http://bootply.com/templates">Bootply</a>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">OK</button>
      </div>
    </div>
  </div>
  
</div>

<!-- Modal -->
<div class="modal fade" id="return-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Thank you!</h4>
      </div>
      <div class="modal-body">
        Book returned successfully!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reload()">Close</button>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function reload () {
      parent.location.reload();
    }
  </script>
</div>

<!-- Modal -->
<div class="modal fade" id="stock-in-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Thank you!</h4>
      </div>
      <div class="modal-body">
        Book stocked in successfully!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="reload()">Close</button>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function reload () {
      parent.location.reload();
    }
  </script>
</div>