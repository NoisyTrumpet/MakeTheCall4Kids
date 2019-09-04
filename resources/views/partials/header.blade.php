<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="{{ home_url('/') }}">
    @include('partials/logos')
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    {{-- <span class="navbar-toggler-icon"></span> --}}
    <i class="fas fa-bars textPurple"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu($primarymenu) !!}
    @endif
  </div>
</nav>

{{-- San Antonio --}}
{{-- @if(isset($_SESSION['selectedMarket']) && $_SESSION['selectedMarket'] == 'san-antonio')
  <img src="@asset('images/logos/MAKETHECALL_final_Brighton.png')" alt="Make the Call 4 Kids Logo" style="max-width: 200px;" >
@endif --}}
{{-- Austin --}}
{{-- @if(isset($_SESSION['selectedMarket']) && $_SESSION['selectedMarket'] == 'austin')
  <img src="@asset('images/logos/MtC4KLogo.png')" alt="Make the Call 4 Kids Logo" style="max-width: 200px;" >
@endif --}}
{{-- Corpus Christi --}}
{{-- @if(isset($_SESSION['selectedMarket']) && $_SESSION['selectedMarket'] == 'corpus-christi')
  <img src="@asset('images/logos/MAKETHECALL_final_CASA.png')" alt="Make the Call 4 Kids Logo" style="max-width: 200px;" >
@endif --}}
