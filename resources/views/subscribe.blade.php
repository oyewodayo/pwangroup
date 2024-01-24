<!DOCTYPE html>
<html lang="en">

<head>
  @include('head')
  <title>Who We Are: PWANHOMES - A home for everyone</title>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color:#000000;height:100px">
    <div class="container d-flex align-items-center justify-content-between" >

      <!-- Uncomment below if you prefer to use an image logo -->
    
      @include('navigation')

    </div>
  </header><!-- End Header -->

  <main id="main">
    <div class="mt-5 mb-5" style="padding-top:120px">
      <div class="section-title">
        <h3>Subscribe <span>now</span></h3>
      </div>
      {{-- <div class="container">
        <div class="col-md-6">
          <input type="text" class="form-control">
        </div>
      </div> --}}
    </div>

    <div class="mt-5 mb-5" style="background-color: #E8EDFF" data-aos="zoom-in-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-auto pb-5 pt-5">
                    <h2 style="font-weight: 800;font-size:16px">Individual trade in Naira</h2>
                    Sometimes people Trade in Real Estate to sell later or for a quality return on investment. Our understanding of this has made us remodel the real estate market to suit this need to perfection. 
                    <div class="mt-5"> 
                        <a href="{{asset('assets/BUY2SELL IND. FORM 30%.pdf')}}" class="btn-custom">Download Subscription Form</a>
                      </div>
                </div>
                
                <div class="col-md-6 pt-5 pb-5 ml-5"  style="border-left: 1px solid grey">
                  <h2 style="font-weight: 800;font-size:16px">Cooperate trade in Naira</h2>
                  <div>                
                    With our platform, we can give you the opportunity to buy from our Estates and we help you sell the property in 6 months with profits as high as 12.5% and 12 months for as high as 30% profit. This is the best mode of passive income that allows you to earn without risks as your income is certain from the moment you buy.   
                    <div class="mt-5"> 
                        <a href="{{asset('BUY2SELL CORP. FORM 30%.pdf')}}" class="btn-custom">Download Subscription Form</a>
                      </div>
                </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mt-5 mb-5" style="background-color: #E8EDFF" data-aos="zoom-in-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-auto pb-5 pt-5">
                    <h2 style="font-weight: 800;font-size:16px">Individual trade in Dollar</h2>
                    Sometimes people Trade in Real Estate to sell later or for a quality return on investment. Our understanding of this has made us remodel the real estate market to suit this need to perfection. 
                    <div class="mt-5"> 
                        <a href="{{asset('assets/BUY2SELL IND. FORM $.pdf')}}" class="btn-custom">Download Subscription Form</a>
                      </div>
                </div>
                
                <div class="col-md-6 pt-5 pb-5 ml-5"  style="border-left: 1px solid grey">
                    <h2 style="font-weight: 800;font-size:16px">Cooperate trade in Dollar</h2>
                  <div>                
                    With our platform, we can give you the opportunity to buy from our Estates and we help you sell the property in 6 months with profits as high as 12.5% and 12 months for as high as 30% profit. This is the best mode of passive income that allows you to earn without risks as your income is certain from the moment you buy.   
                    <div class="mt-5"> 
                        <a href="{{ asset('assets/BUY2SELL CORP. FORM $.pdf') }}" class="btn-custom">Download Subscription Form</a>
                      </div>  
                </div>
                </div>
            </div>
        </div>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
  @include('scripts')
</body>

</html>