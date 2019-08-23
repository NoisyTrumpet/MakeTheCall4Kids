<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="{{ home_url('/') }}">
    <img src="@asset('images/MtC4KLogo.png')" alt="Make the Call 4 Kids Logo" style="max-width: 200px;" >
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu($primarymenu) !!}
    @endif
  </div>
</nav>