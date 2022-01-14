 <!-- Banner Section -->
 <div id="home" class="banner_wrapper" style="background-image: url('{{ asset('backend/images/'.$all_banner_data['0']->cover_photos) }}')">
  <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center text-md-start">
          <h6>WELCOME TO MY WORLD</h6>
          <h1 class="d-inline-block">I'm</h1>
          <h1 class="d-inline-block">{{$all_banner_data['0']['Profile']['user_name'] }}</h1>
          <h1><span>{{ $all_banner_data['0']->skills }} Developer.</span></h1>
          <h1>based in {{ $all_banner_data['0']->area }}.</h1>
          <!-- <h1>I'm Yeasin Arafat<br><span>PHP Developer.</span><br>based in BANGLADESH.</h1> -->
          <div class="mt-4">
            <a href="" class="main-btn">Download Cv</a>
          </div>
        </div>
      </div>
    </div>
</div>