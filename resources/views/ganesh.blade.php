@extends('layout.app')

@section('body')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<main class="container" style="padding: 70px">

    <!-- Left Column / Headphones Image -->
    {{-- @php
      $img = Request()->query('data')[1];
      $img = explode($img, '/');
      $img = explode($img[1], '.');
      $img = $img[0];
    @endphp --}}
    <div class="left-column">
      {{-- @foreach ( Request()->query('data')[4] as $colorData)
        @if ($loop->first) --}}
          <img class="active" src="../popImages/{{ Request()->query('data')[0]}}.jpeg" alt="">
        {{-- @else --}}
          {{-- <img data-image="{{ $colorData }}" src="../images/{{ Request()->query('data')[0]}}.jpeg" alt="">
        @endif
      @endforeach --}}
      {{-- <img data-image="red" class="active" src="../images/red.jpeg" alt="">
      <img data-image="black" src="../images/black.png" alt="">
      <img data-image="blue" src="../images/blue.png" alt=""> --}}
    </div>


    <!-- Right Column -->
    <div class="right-column">

      <!-- Product Description -->
      <div class="product-description">
        @if(Request()->query('data')[1] == 'pop')
            <span>Plaster of Paris</span>
        @else
            <span>Shadu Mati</span>
        @endif
        <h1>Ganesh Murti</h1>
      </div>

      <form action="{{ route('cart.create') }}">
      {{-- <!-- Product Configuration -->
      <div class="product-configuration"> --}}

        {{-- <!-- Product Color -->
        <div class="product-color">
          <span>Color</span>

          <div class="color-choose">
            @foreach (Request()->query('data')[4] as $colorData )
            {{-- {{ dd($colorData) }} --}}
                {{-- @if ($loop->first)
                    <div>
                        <input data-image="{{ $colorData }}" type="radio" id="{{ $colorData }}" name="color" value="{{ $colorData }}" checked>
                        <label for="{{ $colorData }}"><span></span></label>
                    </div>
                @else
                    <div>
                        <input data-image="{{ $colorData }}" type="radio" id="{{ $colorData }}" name="color" value="{{ $colorData }}" >
                        <label for="{{ $colorData }}"><span></span></label>
                    </div> --}}
                {{-- @endif
            @endforeach --}} 
            {{-- <div>
              <input data-image="red" type="radio" id="red" name="color" value="red" checked>
              <label for="red"><span></span></label>
            </div>
            <div>
              <input data-image="blue" type="radio" id="blue" name="color" value="blue">
              <label for="blue"><span></span></label>
            </div>
            <div>
              <input data-image="black" type="radio" id="black" name="color" value="black">
              <label for="black"><span></span></label>
            </div> --}}
          {{-- </div> --}}

        {{-- </div> --}}

      <!-- Product Pricing -->
      <div class="product-price">
        <span>₹{{ Request()->query('data')[3] }}</span>
        <input type="text" name="id" value="{{ Request()->query('data')[0] }}" hidden>
        <input type="text" name="type" value="{{ Request()->query('data')[1] }}" hidden>
        <input type="text" name="image" value="{{ Request()->query('data')[2] }}" hidden>
        <input type="text" name="price" value="{{ Request()->query('data')[3] }}" hidden>
        <input type="submit" class="cart-btn btn" value="Add to Cart">
      </div>
    </form>
      @if (Request()->session()->has('success'))
        <div class="alert alert-success mt-4">
            {{ Request()->session()->get('success') }}
      </div>
      @endif
      
    </div>
  </main>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
  <script src="{{ asset('js/script.js') }}"></script>
@endsection