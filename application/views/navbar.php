<!-- fixed nav bar -->
<div class="navbar navbar-fixed-top header">
  <div class="col-md-12">
    <div class="navbar-header">

      <a href="#" class="navbar-brand">Bootstrap</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse1">
        <i class="glyphicon glyphicon-search"></i>
      </button>

    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse1">
      <form class="navbar-form pull-left">
        <div class="input-group" style="max-width:470px;">
          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          <div class="input-group-btn">
            <button class="btn btn-default btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.bootply.com" target="_ext">Bootply+</a></li>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-bell"></i></a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">
                <span class="badge pull-right">40</span>Link</a>
            </li>
            <li>
              <a href="#">
                <span class="badge pull-right">2</span>Link</a>
            </li>
            <li>
              <a href="#">
                <span class="badge pull-right">0</span>Link</a>
            </li>
            <li>
              <a href="#">
                <span class="label label-info pull-right">1</span>Link</a>
            </li>
            <li>
              <a href="#">
                <span class="badge pull-right">13</span>Link</a>
            </li>
          </ul>
        </li>
        <li><a href="#" id="btnToggle"><i class="glyphicon glyphicon-th"></i></a></li>
        <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
      </ul>
    </div>
  </div>
</div>

<!-- sub nav bar -->
<div class="navbar navbar-default" id="subnav">
  <div class="col-md-12">
    <div class="navbar-header">

      <a href="#" style="margin-left:15px;" class="navbar-btn btn btn-default btn-plus dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-home" style="color:#dd1111;"></i> Home <small><i class="glyphicon glyphicon-chevron-down"></i></small></a>
      <ul class="nav dropdown-menu">
        <li><a href="#"><i class="glyphicon glyphicon-home" style="color:#dd1111;"></i> Home </a></li>
        <li><a href="#"><i class="glyphicon glyphicon-user" style="color:#1111dd;"></i> Profile</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-dashboard" style="color:#0000aa;"></i> Dashboard</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-inbox" style="color:#11dd11;"></i> Pages</a></li>
        <li class="nav-divider"></li>
        <li><a href="#"><i class="glyphicon glyphicon-cog" style="color:#dd1111;"></i> Settings</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-plus"></i> More..</a></li>
      </ul>


      <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->

    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse2">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Posts</a></li>
        <li><a href="#loginModal" role="button" data-toggle="modal">Login</a></li>
        <li><a href="#aboutModal" role="button" data-toggle="modal">About</a></li>
      </ul>
    </div>
  </div>
</div>
