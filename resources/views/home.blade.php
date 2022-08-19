@extends('layout.app')

@section('body')
<style>
  @media only screen 
  and (min-width : 1224px) {
      .zoom {
        transition: transform .2s; /* Animation */
        margin: 0 auto;
      }
      
      .zoom:hover {
        transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
      }
  }

  /* @media only screen
  and (min-width : 576px)
  and (max-width : 767px) {
    .desktop-img {
      width: 100%;
      height: 100%;
    }
  } */

  @media only screen 
  and (min-width : 768px)
  and (max-width : 1224px) {
      .desktop-img {
        width: 300px;
        height: 300px;
      }
  }
  @media only screen
  and (min-width : 1224px) {
    .desktop-img {
      width: 200px;
      height: 200px;
    }
  }
    </style>
<div id="landingPage" style="padding-top:50px;height:100%;background-image: radial-gradient(#f6ad68, #e48632);" class="container-fluid d-flex justify-content-center">
    @include('layout.landing')
</div>

<div id="popGanesh" style="padding-top:70px;" class="container">
    @include('layout.pop')
</div>

<div id="shaduGanesh" style="padding-top:70px;" class="container">
    @include('layout.shadu')
</div>
@endsection