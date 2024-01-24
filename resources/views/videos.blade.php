<!DOCTYPE html>
<html lang="en">

<head>
  @include('head')
  <title>Gallery: Videos PWANHOMES - A home for everyone</title>
</head>

<body>

  <!-- ======= Header ======= -->
  @include('navigation')
  <div id="player" style="width: 100%;heigth:90vh"></div>
  <main id="main">

    <div class="container mb-5">
        <div class="row">
             <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    

    <script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '590',
          width: '640',
          videoId: 'dXQRs6ARmfE',
          playerVars: {
            'autoplay': 1,
            'controls': 0 
          },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>
        </div>

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

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-1.png')}}" class="img-fluid" alt="">
            {{-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/dXQRs6ARmfE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
                
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-1.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="View"><i class="bx bx-plus"></i></a>
              {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-2.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-2.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-3.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-3.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/assets/visionary/speak-4.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-4.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-5.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-5.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-6.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-6.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-7.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-7.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-8.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-8.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-9.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-9.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-10.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-10.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-11.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-11.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-12.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-12.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-13.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-13.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-visionary">
            <img src="{{asset('assets/visionary/speak-14.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Visionary speak</p>
              <a href="{{asset('assets/visionary/speak-14.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-1.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-1.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
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
            <img src="{{asset('assets/convention/convention-3.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-3.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-4.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-4.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-5.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-5.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-6.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-6.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-7.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-7.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-8.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-8.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-9.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-9.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-10.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-10.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-11.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-11.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-12.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-12.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-13.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-13.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-14.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-14.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-15.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-15.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-16.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-16.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-17.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-17.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-convention">
            <img src="{{asset('assets/convention/convention-18.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pwan Homes: April 24th 2023</h4>
              <p>Annual Convention</p>
              <a href="{{asset('assets/convention/convention-18.png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
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
 </body>

</html>