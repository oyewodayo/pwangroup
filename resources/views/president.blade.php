<!DOCTYPE html>
<html lang="en">

<head>

  @include('head')
  <title>President: PWANHOMES - A home for everyone</title>

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
      {{-- <div class="section-title">
        <h3>Our <span>Founders</span></h3>
      </div> --}}
      {{-- <div class="container">
        <div class="col-md-6">
          <input type="text" class="form-control">
        </div>
      </div> --}}
    </div>
    <div class="container">
        
        <div class="row founders">
            <div class="col-md-6 mb-4">
                <img src="{{asset('assets/img/president.jpeg')}}" alt="Jayne">
                <div class="text-bold-600">DR Jayne Obioma onwumere  </div>
                <div class="text-danger">president and co-founder PWAN HOMES</div>
            </div>

            <div class="col-md-6 my-auto">
                <h5 class="text-bold-800">Biography</h5>
                <div>
                    <p>
                        Dr. Jayne Obioma Onwumere is a high-end realtor, an ingenious network marketer, and a top businesswoman. She is a co-founder of PWAN HOMES, and the brain behind several creatively savvy ideas that have made PWAN HOMES a multi-billion company with multinational reach in top countries like the United States.
                        Dr. Jayne Obioma Onwumere studied Management at the Prestigious Harvard University, Boston Massachusetts, USA, and is also an Alumnus of Lagos Business School. She was conferred with an Honorary Doctorate Degree by the European-American University, Commonwealth of Dominica, following her contributions to making homeownership dream a reality for as many people as possible. She is the President of The PWAN HOMES, leading the pack of the first Real Estate Network Marketing company in the world from the front. 
                    </p>
                    
                    <p> 
                        Jayne Onwumere is a woman with laser focus and determination. At a time when Nigeria’s employment market was dwindling and some families losing their homes due to a lack of funds to pay rent, Jayne and her darling husband Augustine Onwumere received a God-given vision to make homeownership dream a reality for as many people as possible.
                        This dream birthed the Real Estate Network Marketing Company in March 2012 with the Pioneer Company known as PWAN HOMES. Through her distinguished skills, she made groundbreaking impacts in the property market with the sole determination to make homeownership as accessible and easy as possible. Her tenacity and doggedness carried the dream many a time and three years into its operation, PWAN HOMES began to open other Companies in partnership with Independent Consultants which today form the PWAN HOMES of more than thirty affiliates. 
                    </p>
                </div>
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