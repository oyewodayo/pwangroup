<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
    <title>Contact Us: PWANHOMES - A home for everyone</title>
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
      <div class="section-title">
        <h3>Contact <span>Us</span></h3>
      </div>

    </div>
    <div class="container">
        <section id="contact" class="contact" style="background-color: #ffffff">
            <div class="container">      
              <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.510989914539!2d3.530968810718574!3d6.456751400000025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf731ad7e6633%3A0x9569a736c5cd2631!2sPWAN%20GROUP!5e0!3m2!1sen!2sng!4v1682591666111!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
              </div>
              
      
              <div class="row mt-5">
      
                <div class="col-lg-4">
                  <div class="info px-3 py-3">
                    <div class="address">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Head Office:</h4>
                      <p>
                        2nd Floor, Bridge View Building, Opposite Access Bank,Admiralty Way, Lekki , Lagos 
                      </p>
                    </div>
      
                    <div class="email">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p>buytosell@pwangroup.com</p>
                    </div>
      
                    <div class="phone">
                      <i class="bi bi-phone"></i>
                      <h4>Call:</h4>
                      <p>09087666649</p>
                      <p>09080000259</p>
                     
                    </div>
      
                  </div>
      
                </div>
      
                <div class="col-lg-8 mt-5 mt-lg-0 px-5 py-5">
      
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center float-right">
                      <button type="submit">Send Message</button>
                    </div>
                  </form>      
                </div>                 
              </div>                 
            </div>
          </section><!-- End Contact Section -->
       
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
    @include('scripts')
</body>

</html>