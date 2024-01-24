<!DOCTYPE html>
<html lang="en">

<head>

  @include('head')
  <title>Chairman: PWANHOMES - A home for everyone</title>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color:#000000;height:100px">
    <div class="container d-flex align-items-center justify-content-between" >

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
                <img src="{{asset('assets/img/chairman.png')}}" alt="Augustine">
                <div class="text-bold-600">Dr. Augustine ozioma onwumere  </div>
                <div class="text-danger">Chairman, Pwan HOMES</div>
            </div>

            <div class="col-md-6 my-auto">
                <h5 class="text-bold-800">Biography</h5>
                <div>
                    <p>Dr. Augustine Ozioma Onwumere also known as MR Empowerment is a self-made billionaire whose source of wealth is majorly providing service across several fronts like Real Estate, Technology, and Logistics startups. He is a graduate of the University of Lagos Akoka, and his interest in business made him take on several courses in Lagos Business School and other learning institutions to equip him to continually develop himself to be able to empower others. He was conferred with an Honorary Doctorate Degree by the European-American University, Commonwealth of Dominica, following his contributions to making homeownership dream a reality for as many people as possible. Marc Austine as he is fondly called is a true businessman and philanthropist in every sense of the word. He is a strategic businessman who defies the odds always with his never say die attitude and his strong ability to perform effectively even within high-pressure situations. He co-founded PWAN HOMES, the first Real Estate Network Marketing company in the world. In the course of a decade, with his enthusiastic leadership and dynamic practical display of unbridled passion for getting this done the right way, the company has grown to spread all over Nigeria and beyond with offices in the United States and other countries. 
                    </p> 
                    <p>
                    Dr. Augustine’s energy and enthusiasm have never ceased to motivate people around him, and his determination to empower people has led to the amazing growth of PWAN HOMES as a Real Estate force in Nigeria and beyond. The company currently creates jobs for about a thousand young Nigerians across more than 30 affiliate companies. Multiple tens of thousands of people from different walks of life also have a partnership with the company as business owners who earn a sturdy steady income and experience life-changing opportunities through the PWAN Business Opportunity program. He is a well-decorated man who has received honorary awards both personally and in the name of the institution that he co-founded. Some of these awards are: African Quality Achievement Award, Global Quality Excellence Award, and many more. He is married, with three children to Jayne Obioma Onwumere - the woman he fondly refers to as the brain behind the massive success of his business
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/assets/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/assets/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/assets/swiper/swiper-bundle.min.js')}}"></script>
 
  <!-- Template Main JS File -->
  
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
 
</body>

</html>