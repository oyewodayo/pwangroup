<!DOCTYPE html>
<html lang="en">

<head>
  @include('head')
  <title>Our Founders: PWANHOMES - A home for everyone</title>

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
        <h3>Our <span>Founders</span></h3>
      </div>
      {{-- <div class="container">
        <div class="col-md-6">
          <input type="text" class="form-control">
        </div>
      </div> --}}
    </div>
    <div class="container">
        <div class="row founders">
            <div class="col-md-6 ">
                <img src="{{asset('assets/img/chairman.png')}}" alt="Augustine">
                <div class="text-bold-600">Dr. Augustine Ozioma Onwumere </div>
                <div class="text-danger">Chairman, PWAN HOMES</div>
            </div>

            <div class="col-md-6 my-auto">
                <div>
                    Dr. Augustine Ozioma Onwumere also known as MR Empowerment is a self-made billionaire whose source of wealth is majorly providing service across several fronts like Real Estate, Technology, and Logistics startups.He is a graduate of the University of Lagos Akoka, and his interest in business made him take on several courses in Lagos Business School and other learning institutions to equip him to continually develop himself to be able to empower others
                </div>
                <div class="mt-5"><a href="/about/chairman" class="btn-custom "> See more </a></div>
            </div>
     
         <hr class="mt-4">
        </div>   
        
        
        <div class="row founders">
            <div class="col-md-6">
                <img src="{{asset('assets/img/president.jpeg')}}" alt="Jayne">
                <div class="text-bold-600">DR Jayne Obioma onwumere  </div>
                <div class="text-danger">president and co-founder PWAN HOMES</div>
            </div>

            <div class="col-md-6 my-auto">
                <div>
                Dr. Jayne Obioma Onwumere is a high-end realtor, an ingenious network marketer, and a top businesswoman. She is a co-founder of PWAN Group, and the brain behind several creatively savvy ideas that have made PWAN Group a multi-billion company with multinational reach in top countries like the United States.
            </div>
                <div class="mt-5"><a href="/about/president" class="btn-custom "> See more </a></div>
            </div>
                
           
     
         <hr class="mt-4">
        </div> 
    </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->

  @include('scripts')
</body>

</html>