<!DOCTYPE html>
<html lang="en">

<head>

  <title>Gallery:Pictures - A home for everyone</title>
  @include('head')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('navigation')
  <div id="player" style="width: 100%;">
    <div class="owl-carousel">
      <div>
        <img src="{{asset('assets/image-slides/image-slide-1.png')}}" style="position: relative;width:100%;" alt="Slide">
      </div>
      <div>
        <img src="{{asset('assets/image-slides/image-slide-2.png')}}" style="position: relative;width:100%" alt="Slide">
      </div>
      <div>
        <img src="{{asset('assets/image-slides/image-slide-3.png')}}" style="position: relative;width:100%" alt="Slide">
      </div>
      <div>
        <img src="{{asset('assets/image-slides/image-slide-4.png')}}" style="position: relative;width:100%" alt="Slide">
      </div>
      <div>
        <img src="{{asset('assets/image-slides/image-slide-5.png')}}" style="position: relative;width:100%" alt="Slide">
      </div>
      <div>
        <img src="{{asset('assets/image-slides/image-slide-6.png')}}" style="position: relative;width:100%" alt="Slide">
      </div>
    </div>
  </div>

  <main id="main">
    <div class="container mb-5">
      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-between">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-visionary">Visionary speak</li>
                <li data-filter=".filter-convention">Annual Convention</li>
                <li data-filter=".filter-allocation">Allocation</li>
                <li data-filter=".filter-summit">Summit</li>
                <li data-filter=".filter-estates">Estates</li>

              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary" >
              <img src="{{asset('assets/visionary/speak-1-min.png')}}" class="img-fluid" alt="">
              {{-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/dXQRs6ARmfE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
                  
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-1-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="View"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
              <img src="{{asset('assets/visionary/speak-2-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-2-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Visionary speak"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
              <img src="{{asset('assets/visionary/speak-3-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-3-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Visionary speak"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary" data-aos="fade-right">
              <img src="{{asset('assets/visionary/speak-4-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-4-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Visionary speak"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary" data-aos="fade-up">
              <img src="{{asset('assets/visionary/speak-5-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-5-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Visionary speak"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary" data-aos="fade-up">
              <img src="{{asset('assets/visionary/speak-6-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-6-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Visionary speak"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary" data-aos="fade-right">
              <img src="{{asset('assets/visionary/speak-7-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-7-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Visionary speak"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary" data-aos="fade-right">
              <img src="{{asset('assets/visionary/speak-8-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-8-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Visionary speak"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary" data-aos="fade-right">
              <img src="{{asset('assets/visionary/speak-9-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-9-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary" data-aos="fade-right">
              <img src="{{asset('assets/visionary/speak-10-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-10-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary" data-aos="fade-right">
              <img src="{{asset('assets/visionary/speak-11-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-11-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary" data-aos="fade-right">
              <img src="{{asset('assets/visionary/speak-12-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-12-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary" data-aos="fade-right">
              <img src="{{asset('assets/visionary/speak-13-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-13-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
              <img src="{{asset('assets/visionary/speak-14-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Visionary speak</p>
                <a href="{{asset('assets/visionary/speak-14-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-1-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-1-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-2.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-3-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-3-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-4-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-4-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention" >
              <img src="{{asset('assets/convention/convention-5-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-5-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-6-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-6-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-7-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-7-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention" >
              <img src="{{asset('assets/convention/convention-8-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-8-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-9-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-9-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-10-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-10-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-11-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-11-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-12-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-12-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-13-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-13-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-14-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-14-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-15-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-15-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-16-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-16-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-17-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-17-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
              <img src="{{asset('assets/convention/convention-18-min.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pwan Homes: April 24th 2023</h4>
                <p>Annual Convention</p>
                <a href="{{asset('assets/convention/convention-18-min.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.00 PM (1).jpeg')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: June 17th 2023</h4>
                <p>Flourish Luxury Villa Monastry</p>
                <a href="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.00 PM (1).jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish Luxury Villa Monastry"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.02 PM.jpeg')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: June 17th 2023</h4>
                <p>Flourish Luxury Villa Monastry</p>
                <a href="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.02 PM.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish Luxury Villa Monastry"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.01 PM (1).jpeg')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: June 17th 2023</h4>
                <p>Flourish Luxury Villa Monastry</p>
                <a href="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.01 PM (1).jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish Luxury Villa Monastry"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 3.04.05 PM (1).jpeg')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: June 17th 2023</h4>
                <p>Flourish Luxury Villa Monastery</p>
                <a href="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 3.04.05 PM (1).jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish Luxury Villa Monastery"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.00 PM.jpeg')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: June 17th 2023</h4>
                <p>Flourish Luxury Villa Monastry</p>
                <a href="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.00 PM.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish Luxury Villa Monastry"><i class="bx bx-plus"></i></a>
              </div>
            </div>



            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.01 PM.jpeg')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: June 17th 2023</h4>
                <p>Flourish Luxury Villa Monastry</p>
                <a href="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.01 PM.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish Luxury Villa Monastry"><i class="bx bx-plus"></i></a>
              </div>
            </div>




            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.03 PM (1).jpeg')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: June 17th 2023</h4>
                <p>Flourish Luxury Villa Monastry</p>
                <a href="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.03 PM (1).jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish Luxury Villa Monastry"><i class="bx bx-plus"></i></a>
              </div>
            </div>
        

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.07 PM.jpeg')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: June 17th 2023</h4>
                <p>Flourish Luxury Villa Monastery</p>
                <a href="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.07 PM.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish Luxury Villa Monastery"><i class="bx bx-plus"></i></a>
              </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.42.58 PM.jpeg')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: June 17th 2023</h4>
                <p>Flourish Luxury Villa Monastry</p>
                <a href="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.42.58 PM.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish Luxury Villa Monastry"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.14 PM (1).jpeg')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: June 17th 2023</h4>
                <p>Flourish Luxury Villa EPE</p>
                <a href="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.14 PM (1).jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish Luxury Villa Epe"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            
            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.13 PM (1).jpeg')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: June 17th 2023</h4>
                <p>Flourish Luxury Villa EPE</p>
                <a href="{{asset('assets/allocations/epe-luxury/Image 2023-06-19 at 1.43.13 PM (1).jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish Luxury Villa Epe"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-1.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-1.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-2.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-3.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-3.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-4.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-4.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-5.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-5.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-6.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-6.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          
            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-7.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-7.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-8.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-8.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-9.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-9.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-10.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-10.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-11.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-11.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-12.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-12.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-12.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-12.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-13.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-13.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-14.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-14.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-15.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-15.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-16.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-16.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-17.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-17.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-18.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-18.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-19.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-19.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-allocation">
              <img src="{{asset('assets/allocations/imedu/imedu-20.png')}}" class="img-fluid" alt="Epe Allocation">
              <div class="portfolio-info">
                <h4>Pwan Homes: May 2023</h4>
                <p>Flourish City Imedu</p>
                <a href="{{asset('assets/allocations/imedu/imedu-20.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Flourish City Imedu"><i class="bx bx-plus"></i></a>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Section -->   
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->

  @include('scripts')
  <script>
      $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        items: 1,
        margin:5,
        lazyLoad: true,
        dots:false,
        autoPlay: true,
        responsive:{
          0:{
            items:1,
            nav:true
          },
          600:{
            items:1,
          },
          1000:{
            items:1,
          }
        }
      });
  </script>
 </body>

</html>