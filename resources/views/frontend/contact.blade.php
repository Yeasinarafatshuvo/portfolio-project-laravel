 <!-- contact section -->
 <div id="contact" class="contact-wrapper">
    <div class="container">
      <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 order-2 order-lg-1 pe-lg-5 text-lg-start text-center">
        <div class="subtitle">MY Completed Project</div>
        <h2>Hire Me.</h2>
        <div class="row call_details mb-4">
          <label for="" class="col-sm-3 col-lg-4">Call me Directly</label>
           <div class="col-sm-9  col-lg-8 mb-3 mb-lg-2 text-md-start">
            <a href="javascript:void(0)">+8801779930077</a>
           </div>
          <label for="" class="col-sm-3 col-lg-4">Contact Email</label>
          <div class="col-sm-9 col-lg-8 mb-3 mb-lg-2 text-md-start">
            <a href="">yeasinshuvo76@gmail.com</a>
          </div>
        </div>
        <form action="{{ route('contact.post') }}" method="POST">
          @csrf
          @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
          @endif
          <div class="mb-4">
            <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="Your Name..." autocomplete="off">
            <span class="text-danger">
              @error('customer_name')
                  {{ $message }}
              @enderror
            </span>
          </div>
          <div class="mb-4">
            <input type="text" id="customer_phone" name="customer_phone" class="form-control" placeholder="Your Phone..." autocomplete="off">
            <span class="text-danger">
              @error('customer_phone')
                  {{ $message }}
              @enderror
            </span>
          </div>
          <div class="mb-4">
            <input id="customer_email" type="text" name="customer_email" class="form-control" placeholder="Your Email..." autocomplete="off">
            <span class="text-danger">
              @error('customer_email')
                  {{ $message }}
              @enderror
            </span>
          </div>
          <div class="mb-4">
            <textarea id="customer_message" name="customer_message" id="" cols="40" rows="4" class="form-control" placeholder="Write a Message..." autocomplete="off"></textarea>
          </div>
          <span class="text-danger">
            @error('customer_phone')
                {{ $message }}
            @enderror
          </span><br>
          <button  type="submit" class="btn main-btn">Submit</button>     
        </form>
      </div>
      <div class="col-lg-6 order-1 mb-4 order-lg-1 mb-lg-0">
        <img src="./images/contact.jpg" alt="" class="img-fluid">
      </div>
      </div>
    </div>
 </div>