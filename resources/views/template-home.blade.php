{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    {{-- @include('partials.content-page') --}}

    <div class="gradContainer">
    	<h3>Color Test</h3>
    <p class="textGreen">Green</p>
    <p class="textLightBlue">Light Blue</p>
    <p class="textPurple">Purple</p>
    <p class="textMaroon">Maroon</p>
    <p class="textOrange">Orange</p>
    <p class="textRed">Red</p>

    <h3 class="quickSand bold">Font Test</h3>
    <p class="quickSand light">Light</p>
    <p class="quickSand regular">Regular</p>
    <p class="quickSand medium">Medium</p>
    <p class="quickSand semiBold">Semi-Bold</p>
    <p class="quickSand bold">Bold</p>
    </div>

  @endwhile
@endsection