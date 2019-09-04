{{-- Default Case --}}
@if(!isset($_SESSION['selectedMarket']))
  <img src="@asset('images/MtC4KLogo.png')" alt="Make the Call 4 Kids Logo" style="max-width: 200px;" >
@endif
{{-- San Antonio --}}
@if(isset($_SESSION['selectedMarket']) && $_SESSION['selectedMarket'] == 'san-antonio')
  <img src="@asset('images/logos/MAKETHECALL_final_Brighton.png')" alt="Make the Call 4 Kids Logo" style="max-width: 200px;" >
@endif
{{-- Austin --}}
@if(isset($_SESSION['selectedMarket']) && $_SESSION['selectedMarket'] == 'austin')
  <img src="@asset('images/logos/MAKETHECALL_final_SAFE.png')" alt="Make the Call 4 Kids Logo" style="max-width: 200px;" >
@endif
{{-- Corpus Christi --}}
@if(isset($_SESSION['selectedMarket']) && $_SESSION['selectedMarket'] == 'corpus-christi')
  <img src="@asset('images/logos/MAKETHECALL_final_CASA.png')" alt="Make the Call 4 Kids Logo" style="max-width: 200px;" >
@endif
