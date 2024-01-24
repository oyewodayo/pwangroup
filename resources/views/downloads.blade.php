<!DOCTYPE html>
<html lang="en">

<head>  
  @include('head')
  <title>Flyers and Promos: PWANHOMES - A home for everyone</title>
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
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
          <div class="container mt-5">
    
            <div class="section-title">
          
              <h3>Flyers & <span>Promos</span></h3>
           </div>
    
            <div class="row">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-flyer">Flyers</li>
                  <li data-filter=".filter-promo">Promos</li>
                </ul>
              </div>
            </div>
    
            <div class="row portfolio-container">
            
              <div class="col-lg-6 col-md-6 portfolio-item filter-flyer">
                <img src="{{asset('assets/buytosell-flyer-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ asset('assets/buytosell-flyer-1.jpg')}}</h4>
                 
                  <a href="{{asset('assets/buytosell-flyer-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Expand"><i class="bx bx-plus"></i></a>
                  <a href="{{asset('assets/buytosell-flyer-1.jpg')}}" download="{{asset('assets/buytosell-flyer-1.jpg')}}" class="details-link" title="Download"><i class="bx bx-download"></i></a>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 portfolio-item filter-flyer">
                <img src="{{asset('assets/buytosell-flyer-2.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ asset('assets/buytosell-flyer-2.jpg')}}</h4>
                 
                  <a href="{{asset('assets/buytosell-flyer-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Expand"><i class="bx bx-plus"></i></a>
                  <a href="{{asset('assets/buytosell-flyer-2.jpg')}}" download="{{asset('assets/buytosell-flyer-2.jpg')}}" class="details-link" title="Download"><i class="bx bx-download"></i></a>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 portfolio-item filter-flyer">
                <img src="{{asset('assets/buytosell-flyer-3.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ asset('assets/buytosell-flyer-3.jpg')}}</h4>
                 
                  <a href="{{asset('assets/buytosell-flyer-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Expand"><i class="bx bx-plus"></i></a>
                  <a href="{{asset('assets/buytosell-flyer-3.jpg')}}" download="{{asset('assets/buytosell-flyer-3.jpg')}}" class="details-link" title="Download"><i class="bx bx-download"></i></a>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 portfolio-item filter-flyer">
                <img src="{{asset('assets/buytosell-flyer-4.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ asset('assets/buytosell-flyer-4.jpg')}}</h4>
                 
                  <a href="{{asset('assets/buytosell-flyer-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Expand"><i class="bx bx-plus"></i></a>
                  <a href="{{asset('assets/buytosell-flyer-4.jpg')}}" download="{{asset('assets/buytosell-flyer-4.jpg')}}" class="details-link" title="Download"><i class="bx bx-download"></i></a>
                </div>
              </div>
    
              
              {{-- <div class="col-lg-6 col-md-6 portfolio-item filter-web">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
    
              <div class="col-lg-6 col-md-6 portfolio-item filter-app">
                <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>App</p>
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
    
              <div class="col-lg-6 col-md-6 portfolio-item filter-card">
                <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 2</h4>
                  <p>Card</p>
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
    
              <div class="col-lg-6 col-md-6 portfolio-item filter-web">
                <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 2</h4>
                  <p>Web</p>
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
    
              <div class="col-lg-6 col-md-6 portfolio-item filter-app">
                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>App</p>
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
    
              <div class="col-lg-6 col-md-6 portfolio-item filter-card">
                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 1</h4>
                  <p>Card</p>
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
    
              <div class="col-lg-6 col-md-6 portfolio-item filter-card">
                <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 3</h4>
                  <p>Card</p>
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
    
              <div class="col-lg-6 col-md-6 portfolio-item filter-web">
                <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Web 3</h4>
                  <p>Web</p>
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
     --}}
            </div>
    
          </div>
        </section><!-- End Portfolio Section -->
    
    <!-- ======= President Talk Section ======= -->
    <section id="portfolio" class="portfolio" style="background-color: #0A1229;">
      <div class="container">

        <div class="section-title">
        </div>
          <div class="row">
            <div class="col-md-6 text-white">
              <div style="padding: 50px;">
                <div class="" style="font-size: 22px;font-weight: 600;">
                Subscribe to get our newsletter
                </div>
                <div class="mt-2" style="font-size:12px">
                    Be the first to know about releases and industry news insights.
             
                </div>
              </div>
              </div>
            <div class="col-md-6 my-auto">
              <div class="d-flex">
                <input type="text" placeholder="Enter your email" class="form-control">
                <button class="" style="background-color: #FFFFFF;color: #000000;padding-left: 20px;padding-right: 20px;padding-top: 10px;padding-bottom: 10px;outline: none;border: none;border-radius: 5px;margin-left: 3px;font-weight:600">Subscribe</button>
              </div>
              <div class="text-white" style="font-size:12px;padding-top: 16px;">
                We care about your data in our <a href="" style="text-decoration: underline;"> privacy policy</a>
              </div>
            </div>           
          </div>
      </div>
    </section><!-- End President Talk Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/assets/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/assets/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/assets/swiper/swiper-bundle.min.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/modal-script.js')}}"></script>
  <script src='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js'></script>
</body>

</html>