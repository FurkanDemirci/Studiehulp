<div class="navbar-fixed">
  <nav class="teal lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{ URL::route ('home') }}" class="brand-logo"><b>ROC Ter AA</b> <i>studiehulp</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ URL::route ('home') }}">Home</a></li>
        <li><a href="#">Test</a></li>
        <li><a class="red darken-4 waves-effect waves-light btn" href="{{ URL::route('login') }}">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">Menu</i></a>
    </div>
  </nav>
</div>