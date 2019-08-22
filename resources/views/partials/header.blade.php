<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <a class="navbar-brand" href="{{ home_url('/') }}">
      <img src="@asset('images/MtC4KLogo.png')" alt="Make the Call 4 Kids Logo" style="max-width: 200px;" >
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($primarymenu) !!}
      @endif
    </nav>
  </div>
</header>