<!-- bootstrap and jquery -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- page javascript -->
<script type='text/javascript'>
  $('#signin-form').submit(function (evt) {
    var inputs = $('#signin-form :input');
    var values = {};

    inputs.each(function() {
      values[this.name] = $(this).val();
    });

    console.log(values['email'] + ':' + values['password']);
    evt.preventDefault();
  });

  $(document).ready(function() {

    /* toggle layout */
    $('#btnToggle').click(function() {
      if ($(this).hasClass('on')) {
        $('#main .col-md-6').addClass('col-md-4').removeClass('col-md-6');
        $(this).removeClass('on');
      } else {
        $('#main .col-md-4').addClass('col-md-6').removeClass('col-md-4');
        $(this).addClass('on');
      }
    });

  });
</script>
</body>
</html>
