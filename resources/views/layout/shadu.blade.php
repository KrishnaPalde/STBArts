<div class="text-center display-6">
   Shadu Mati Ganesh Murti
</div>
<hr style="border: 2px solid ;border-radius: 5px;margin-left:35%;margin-right:35%">
<div class="d-flex justify-content-center flex-sm-row flex-column flex-md-wrap ">
    @foreach ($popData as $data )
        {{-- <div class="flex-column mx-2 my-2 zoom">
            <img class="img-fluid" src="{{ $data[0] }}" >
            <p>{{ $data[1] }}</p>
        </div> --}}
        @if ($data[1] == 'shadu')
        <div class="flex-column mx-4 my-2 zoom card">
            <a href="{{ route('single-ganesh', ['data' => $data]) }}">
                <img class="img-fluid card-img" src="{{ $data[2] }}" >
                <div class="card-img-overlay">
                  <h5 class="card-title text-light"><b>₹{{ $data[3] }}</b></h4> 
                </div>
              </div>
            </a>
        @endif
    @endforeach
</div>