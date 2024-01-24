<!DOCTYPE html>
<html lang="en">

<head>
  
  @include('head')
  <title>PWANGROUP BUYTOSELL - A home for everyone</title>
  <style>

.slider {
	left: 0;
	min-height: 100vh;
	overflow: hidden;
	position: relative;
	top: 0;
	width: 100%;
}

.slider .slide {
	-webkit-animation: slider 20s linear infinite;
	        animation: slider 20s linear infinite;
	background-color: #000000;
	height: 100%;
	left: 0;
	opacity: 0;
	position: absolute;
	top: 0;
	visibility: hidden;
	width: 100%;
}

.slider .slide:nth-child(1) {
	-webkit-animation-delay: 0s;
	        animation-delay: 0s;
}

.slider .slide:nth-child(2) {
	-webkit-animation-delay: 4s;
	        animation-delay: 4s;
}

.slider .slide:nth-child(3) {
	-webkit-animation-delay: 8s;
	        animation-delay: 8s;
}

.slider .slide:nth-child(4) {
	-webkit-animation-delay: 12s;
	        animation-delay: 12s;
}

.slider .slide:nth-child(5) {
	-webkit-animation-delay: 16s;
	        animation-delay: 16s;
}

.slider .slide img {
	height: 100%;
	left: 0;
	-o-object-fit: cover;
	   object-fit: cover;
	position: absolute;
	top: 0;
	width: 100%;
}

.slider .slide .content {
	background-color: rgba(255, 255, 255, 0.9);
	bottom: 50px;
	left: 50px;
	max-width: 400px;
	padding: 50px;
	position: absolute;
	z-index: 1;
}

.slider .slide .content h2 {
	font-size: 2.5em;
}

.slider .slide .content p {
	font-size: 1em;
	margin: 10px 0 0;
}

@-webkit-keyframes slider {
	0% {
		opacity: 0;
		visibility: hidden;
	}
	
	2% {
		opacity: 1;
		visibility: visible;
	}
	
	18% {
		opacity: 1;
		visibility: visible;
	}
	
	20%,
	100% {
		opacity: 0;
		visibility: hidden;
	}
}

@keyframes slider {
	0% {
		opacity: 0;
		visibility: hidden;
	}
	
	2% {
		opacity: 1;
		visibility: visible;
	}
	
	18% {
		opacity: 1;
		visibility: visible;
	}
	
	20%,
	100% {
		opacity: 0;
		visibility: hidden;
	}
}

@media screen and (max-width: 768px) {
	.slider .slide .content {
		padding: 15px;
	}
	
	.slider .slide .content h2 {
		font-size: 20px;
	}
	
	.slider .slide .content p {
		font-size: 15px;
	}
}

.how-to:hover{
  background-color:#0A1229;
  color: #ffffff; 
}
  </style>
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
</head>

<body>

  <!-- ======= Header ======= -->
  @include('navigation')
  <!-- End Header -->

  <main id="man">
      <!-- ======= Hero Section ======= -->
  {{-- <section id="hero" style="background-image: url('assets/landing-page.png')">    
    <div class="hero-container">
      <div class="row ">      
          <div class="col-xl-10 col-md-10 col-sm-10 text-center" data-aos="fade-up">
            <h1 style="line-height: 1.2">Start Trading <span class="text-danger"> Real Estate </span> Today</h1>
            <h3>Achieve Effortless and Dependable Income While Trading with Us!</h3>
            <div class="mt-5">
              <a href="/subscribe" class="btn btn-danger mt-5 text-center px-5 py-3" id="booking"> Get Started </a>
             
            </div>
          </div>
          
      </div>
      
   </div>
  
  </section> --}}

  <div class="slider">
    <div class="slide">
      <div class="content">
        <h2>
          Slide 1
        </h2>
        
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis esse cupiditate dolore repellat, illo necessitatibus molestiae suscipit iusto rerum asperiores assumenda, molestias enim laboriosam quisquam culpa repellendus. Nostrum, maiores reprehenderit?
        </p>
      </div>
      <img src="{{asset('assets/slides/hero-bg-2.jpg')}}" alt="Code" title="Code">
    </div>
    
    <div class="slide">
      <div class="content">
        <h2>
          Slide 2
        </h2>
        
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis esse cupiditate dolore repellat, illo necessitatibus molestiae suscipit iusto rerum asperiores assumenda, molestias enim laboriosam quisquam culpa repellendus. Nostrum, maiores reprehenderit?
        </p>
      </div>
      <img src="{{asset('assets/slides/hero-bg-1.jpg')}}" alt="Code" title="Code">
   
      {{-- <img src="https://nt.global.ssl.fastly.net/binaries/content/gallery/website/national/regions/oxfordshire-buckinghamshire-berkshire/places/buscot-and-coleshill-estates/library/carpenters-canteen-cafe--secondhand-bookshop-coleshill-estate-oxfordshire-1578664.jpg" alt="Code" title="Code"> --}}
    </div>
    
    <div class="slide">
      <div class="content">
        <h2>
          Slide 3
        </h2>
        
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis esse cupiditate dolore repellat, illo necessitatibus molestiae suscipit iusto rerum asperiores assumenda, molestias enim laboriosam quisquam culpa repellendus. Nostrum, maiores reprehenderit?
        </p>
      </div>
      <img src="{{asset('assets/slides/hero-bg-3.jpg')}}" alt="Code" title="Code">
     </div>
    
    <div class="slide">
      <div class="content">
        <h2>
          Slide 4
        </h2>
        
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis esse cupiditate dolore repellat, illo necessitatibus molestiae suscipit iusto rerum asperiores assumenda, molestias enim laboriosam quisquam culpa repellendus. Nostrum, maiores reprehenderit?
        </p>
      </div>
      <img src="{{asset('assets/slides/hero-bg-4.jpg')}}" alt="Code" title="Code">
    </div>
  </div>
  
  <!-- End Hero -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about" data-aos="zoom-in-up" style="z-index: -1">
      <div class="container">
        <div class="row">        

          <div class="col-md-6 text-center">
           <img class="text-center" width="90%" src="assets/coins-grass 1.png" alt="Buy To Sell">
          </div>  
          
          <div class="col-md-6 mt-5">
            <h2 style="font-size: 12px;color:#16238B;font-weight:600">SAFE, RELIABLE AND SECURE</h2>
            <h1>What is buy to sell?</h1>
            Buy to Sell is a fast and reliable source of income while trading with PWAN Group. Real Estate serves more than residential purposes. With Buy to Sell, you can buy from our Estates and we help you sell the property  in 6 or 12 months for as high as 30% profit. This is the best mode of passive income that allows you to earn without risks as your income is certain from the moment you buy.
          
            <div class="mt-5"> 
              <a href="{{route('about')}}" class="btn-custom">Learn More ></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="simpleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">         
          <div class="modal-body" >
          
            <div class="owl-carousel">
              <div class="item">             
                <div>
                  <img src="{{asset('assets/slides/slide-1.jpg')}}" class="w-80" alt="Estate">
                </div>  
              
              </div>
              
              <div class="item">             
                <div class="">
                  <img src="{{asset('assets/slides/slide-2.jpg')}}" class="w-80"  alt="Estate">
                </div>
              </div>

              <div class="item">             
                <div class="">
                  <img src="{{asset('assets/slides/slide-3.jpg')}}" class="w-80"  alt="Estate">
                </div>
              </div>


              <div class="item">             
                <div class="">
                  <img src="{{asset('assets/slides/slide-4.jpg')}}" class="w-80"  alt="Estate">
                </div>
              </div>

              <div class="item">             
                <div class="">
                  <img src="{{asset('assets/slides/slide-5.jpg')}}" class="w-80"  alt="Estate">
                </div>
              </div>

              <div class="item">             
                <div class="">
                  <img src="{{asset('assets/slides/slide-6.jpg')}}" class="w-80"  alt="Estate">
                </div>
              </div>

              <div class="item">             
                <div class="">
                  <img src="{{asset('assets/slides/slide-7.jpg')}}" class="w-80"  alt="Estate">
                </div>
              </div>

              <div class="item">             
                <div class="">
                  <img src="{{asset('assets/slides/slide-8.jpg')}}" class="w-80"  alt="Estate">
                </div>
              </div>

            </div>
        
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->



    <!-- End About Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about" data-aos="zoom-in-up" style="z-index: -1">
      <div class="container">
        <div class="row">        

          <div class="col-md-12">
          <div class="col-md-6 mx-auto text-center">
            <h2 style="font-size: 12px;color:#16238B;font-weight:600">INSTANT AND ASSURED</h2>
            <h1>Our subscription plans</h1>
              We understand that each customer has unique requirements. Therefore, we are introducing customizable options that allow you to tailor your subscription plan according to your specific needs. You can now choose the features and services that matter most to you.
            <div class="mt-5 mb-5"> 
              <a href="/subscribe" class="btn-custom">Download Subscription Forms ></a>
            </div>
          </div> 
          </div> 
          
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
              

                <div class="card px-3 py-3 mt-2">
                  <div class="row">
                    <div class="col-md-8">
                      <h2 class="py-2 px-2" style="font-size: 12px;color:#16238B;font-weight:600; background-image: url('assets/bg-1.png');background-repeat: no-repeat;background-size: 300px 30px;">Buytosell - #Naira</h2>
                      <h4 style="font-weight:600;font-size:18px">12 MONTHS Subscription Plan</h4>
                      <h4 style="font-weight:600;font-size:16px"><span class="text-danger">30%</span> Profit Per Annum</h4>
                      <div class="" style="font-size:12px">365 days is worth the wait to sit and relax as we work for you</div>
                    </div>
                    <div class="col-md-4">
                      <a href="{{ asset('assets/BUY2SELL IND. FORM 30%.pdf') }}" class="btn btn-danger mt-5 text-center" id="booking">Subscribe now</a>
                    </div>
                  </div>
                </div>

                <div class="card px-3 py-3 mt-2">
                  <div class="row">
                    <div class="col-md-8">
                      <h2 class="py-2 px-2" style="font-size: 12px;color:#16238B;font-weight:600; background-image: url('assets/bg-1.png');background-repeat: no-repeat;background-size: 300px 30px;">Buytosell - #Naira</h2>
                      <h4 style="font-weight:600;font-size:18px">18 MONTHS Subscription Plan</h4>
                      <h4 style="font-weight:600;font-size:16px"><span class="text-danger">50%</span> Profit Per Annum</h4>
                      <div class="" style="font-size:12px">365 days is worth the wait to sit and relax as we work for you</div>
                    </div>
                    <div class="col-md-4">
                      <a href="{{ asset('assets/BUY2SELL IND. FORM 30%.pdf') }}" class="btn btn-danger mt-5 text-center" id="booking">Subscribe now</a>
                    </div>
                  </div>
                </div>

                <div class="card px-3 py-3 mt-2">
                  <div class="row">
                    <div class="col-md-8">
                      <h2 class="py-2 px-2" style="font-size: 12px;color:#16238B;font-weight:600; background-image: url('assets/bg-1.png');background-repeat: no-repeat;background-size: 300px 30px;">Buytosell - #Naira</h2>
                      <h4 style="font-weight:600;font-size:18px">24 MONTHS Subscription Plan</h4>
                      <h4 style="font-weight:600;font-size:16px"><span class="text-danger">70%</span> Profit Per Annum</h4>
                      <div class="" style="font-size:12px">365 days is worth the wait to sit and relax as we work for you</div>
                    </div>
                    <div class="col-md-4">
                      <a href="{{ asset('assets/BUY2SELL IND. FORM 30%.pdf') }}" class="btn btn-danger mt-5 text-center" id="booking">Subscribe now</a>
                    </div>
                  </div>
                </div>
               
              </div>
              <div class="col-md-6">
                

                <div class="card px-3 py-3 mt-2">
                  <div class="row">
                    <div class="col-md-8">
                      <h2 class="py-2 px-2" style="font-size: 12px;color:#16238B;font-weight:600; background-image: url('assets/bg-2.png');background-repeat: no-repeat;background-size: 300px 30px;">Buytosell - #Dollar</h2>
                      <h4 style="font-weight:600;font-size:18px">24 MONTHS Subscription Plan</h4>
                      <h4 style="font-weight:600;font-size:16px"><span class="text-danger">22%</span> Profit Per Annum</h4>
                      <div class="" style="font-size:12px">Be amazed what you reap in 24 months</div>
                    </div>
                    <div class="col-md-4">
                      <a href="{{ asset('assets/BUY2SELL IND. FORM 30%.pdf') }}" class="btn btn-danger mt-5 text-center" id="booking">Subscribe now</a>
                    </div>
                  </div>
                </div>

                <div class="card px-3 py-3 mt-2">
                  <div class="row">
                    <div class="col-md-8">
                      <h2 class="py-2 px-2" style="font-size: 12px;color:#16238B;font-weight:600; background-image: url('assets/bg-2.png');background-repeat: no-repeat;background-size: 300px 30px;">Buytosell - #Dollar</h2>
                      <h4 style="font-weight:600;font-size:18px">18 MONTHS Subscription Plan</h4>
                      <h4 style="font-weight:600;font-size:16px"><span class="text-danger">15%</span> Profit Per Annum</h4>
                      <div class="" style="font-size:12px">Be amazed what you reap in 18 months</div>
                    </div>
                    <div class="col-md-4">
                      <a href="{{ asset('assets/BUY2SELL IND. FORM 30%.pdf') }}" class="btn btn-danger mt-5 text-center" id="booking">Subscribe now</a>
                    </div>
                  </div>
                </div>

                <div class="card px-3 py-3 mt-2">
                  <div class="row">
                    <div class="col-md-8">
                      <h2 class="py-2 px-2" style="font-size: 12px;color:#16238B;font-weight:600; background-image: url('assets/bg-2.png');background-repeat: no-repeat;background-size: 300px 30px;">Buytosell - #Dollar</h2>
                      <h4 style="font-weight:600;font-size:18px">12 MONTHS Subscription Plan</h4>
                      <h4 style="font-weight:600;font-size:16px"><span class="text-danger">10%</span> Profit Per Annum</h4>
                      <div class="" style="font-size:12px">Be amazed what you reap in 12 months</div>
                    </div>
                    <div class="col-md-4">
                      <a href="{{ asset('assets/BUY2SELL IND. FORM 30%.pdf') }}" class="btn btn-danger mt-5 text-center" id="booking">Subscribe now</a>
                    </div>
                  </div>
                </div>

               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->


      <!-- ======= Our Services Section ======= -->
      <section id="our-services" class="our-services">
        <div class="container">
          <div class="text-center" style="font-size:12px; color:#16238B;font-weight:600;text-transform:uppercase">You can start earning  through 3 easy steps</div>
          <div class="section-title">
            <h3>How do I start trading?</h3>
          </div>
          <div class="row">
            <div class="col-md-4 mb-5 " data-aos="zoom-in-up"> 
              <div class="card shadow pb-4 how-to">
                <div>
                  <img src="{{asset('assets/page-2.png')}}" class="w-100" alt="Estate">
                </div>
                <div class="card-body how-to">
                  <h5 class="text-bold-900"  style="font-size: 18px">Client documentation</h5>
                  <div>
                    Understand the form by clearly reading through, after which you pick an estate then choose what subscription plan is suitable for you and then you download and fill the form
                  </div>
                  <div class="mt-4"><small>Reward:</small> <small class="text-bold-600">Contract of sale</small></div>
                </div>
              </div> 
            </div>
            <div class="col-md-4 mb-3 " data-aos="zoom-in-up"> 
              <div class="card shadow pb-4 how-to">
                <div>
                  <img src="{{asset('assets/page-1.png')}}" class="w-100" alt="Estate">
                </div>
                <div class="card-body">
                  <h5 class="text-bold-900"  style="font-size: 18px">Making payments</h5>
                  <div>
                    All our account numbers will be provided With the name PWAN GROUP LIMITED for Payments. you can pay through bank transfers with your mobile phone or cash deposit at the banks.
                  </div>
                  <div class="mt-4"><small>Reward:</small> <small class="text-bold-600">Official Receipt</small></div>
                
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3 " data-aos="zoom-in-up"> 
              <div class="card shadow pb-4 how-to">
                <div>
                  <img src="{{asset('assets/page-3.png')}}" class="w-100" alt="Estate">
                </div>
                <div class="card-body">
                  <h5 class="text-bold-900" style="font-size: 18px">Submission</h5>
                  <div>
                    Attach your evidence of payment (physical or emailed copy) and submit at the office, attaching your valid form of identity and bring to the office
                  </div> 
                  <div class="mt-5"><small>Reward:</small> <small class="text-bold-600">Post Dated Cheque</small></div>
                 
                </div>
              </div> 
            </div>

          </div>
        </div>
      </section>
      <!-- End Our Service Section -->

    <section style="background-color:#0A1229;" data-aos="zoom-in-up">
      <div class="container">
      <div class="row mt-md-3">
        <div class="col-md-6 text-white">
          <div class="mb-5">
            <h2 style="font-size: 12px;font-weight:600">TESTIMONIALS</h2>
            <h5>What Clients say about us</h5>
            <div class="mt-4 " style="font-size:14px">
              These are true testimonies from some our Clients who have been using this platform. </div>
          </div>
        </div>
       <div class="col-md-6 text-white">
     
      
            During the 2020 covid pandemic, things beacme very difficult for me and i had to sell my house. Not knowing what to do with the money left after setteling debts, i decided to put the money into trading, that is when i found out about the buy to sell and till date things have really be good for me.
       
          <div class="mt-5"><span>Olabisi Bakare</span></div>
          <div><span>Lagos, Nigeria</span></div>
     
       </div>
      </div>
    </div>
    </section>


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Who are the owners of these products? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                We discover the best lands in fast-developing areas and make these known to you and also show you ways to conveniently finance your private properties in budget-friendly manners.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Are the roads motorable to these Estates? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Yes, the roads to our estates are motorable.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Is PWAN Homes LTD AML/CFT Compliant? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Yes. PWAN HOMES LTD is AML/CFT Compliant. Any form of fraudulent activities will be reported to the authorities.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">What do i get after payment? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                We are the first Real Estate Network marketing company in the world. We are a property marketing and information company with more than a decade of experience in the real estate industry. Our driving purpose is not just to make homeownership dream a reality for everyone, but to also make the process as easy as possible.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Can i decide to keep my plot/property?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Its an initiative from PWAN HOMES, which gives you an opportunity to trade real estate and make profits up to 30% over a period of 12 months.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Can i pay to  your agent?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Pwan homes owns all the products that we advertize
               </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">What is buy to sell?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq7" class="collapse" data-bs-parent=".faq-list">
              <p>
                Yes, we provide room for a 6 months plan and a 12 months installment payment plan for most of our estates for individuals who cannot buy outright.
               </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="background-color: #ffffff">
      <div class="container">

        <div class="section-title">        
          <h3>Contact <span>Us</span></h3>
      </div>

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.510989914539!2d3.530968810718574!3d6.456751400000025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf731ad7e6633%3A0x9569a736c5cd2631!2sPWAN%20GROUP!5e0!3m2!1sen!2sng!4v1682591666111!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        
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
  </main>
  <!-- End #main -->

  @include('footer')
  <!-- Vendor JS Files -->
  @include('scripts')
  <script>
    var booking = document.querySelector('#booking');
    var inspection = document.querySelector('#inspection');
    
    var close_inspection = document.querySelector('.close-inspection');

    if (booking) {
      booking.addEventListener('click',()=>{
        inspection.classList.toggle("d-none");
        // hero_left.classList.toggle('margin-top-80');
      });  
    }

    if (close_inspection) {
      close_inspection.addEventListener('click',()=>{
        inspection.classList.add("d-none");
    
      }); 
    }

    var inspection_btn = document.querySelector('#inspection-btn');
    var inspection_firstname = document.querySelector('#inspection-firstname');
    var inspection_lastname = document.querySelector('#inspection-lastname');
    var inspection_email = document.querySelector('#inspection-email');
    var inspection_phone = document.querySelector('#inspection-phone');
    var inspection_referee = document.querySelector('#inspection-referee');
    var inspection_estates = document.querySelector('#inspection-estates');
    var inspection_date = document.querySelector('#inspection-date');
    var inspection_time = document.querySelector('#inspection-time');
    var inspection_time = document.querySelector('#inspection-time');
    var inspection_response = document.querySelector('.response');
    var token                   = document.querySelector('input[name="_token"]'); 
    if (inspection_btn) {
      inspection_btn.addEventListener('click',async ()=>{

        inspection_btn.innerHTML = "Processing...";

        if (inspection_firstname.value == "") {
          inspection_btn.innerHTML = "Submit";
          inspection_firstname.style.border = "2px solid #d44141";
          var error_name = document.createElement("div");
          error_name.innerHTML += `<span> Enter your first Name </span>`;
         
          inspection_firstname.appendChild(error_name);

          setTimeout(() => {
            inspection_firstname.style.border = "none";
          }, 3000);

        }

        if (inspection_lastname.value == "") {
          inspection_lastname.style.border = "1px solid #d44141";
    
          setTimeout(() => {
            inspection_lastname.style.border = "none";
          }, 3000);

        }

        if (inspection_email.value == "") {
          inspection_email.style.border = "1px solid #d44141";
    
          setTimeout(() => {
            inspection_email.style.border = "none";
          }, 3000);

        }
        if (inspection_phone.value == "") {
          inspection_phone.style.border = "1px solid #d44141";
    
          setTimeout(() => {
            inspection_phone.style.border = "none";
          }, 3000);

        }

        if (inspection_estates.value == "") {
  
          inspection_estates.style.border = "1px solid #d44141";
    
          setTimeout(() => {
            inspection_estates.style.border = "none";
          }, 3000);

        }

        if (inspection_date.value == "") {
          inspection_date.style.border = "1px solid #d44141";
    
          setTimeout(() => {
            inspection_date.style.border = "none";
          }, 3000);

        }

        if (inspection_firstname.value == "" || inspection_lastname.value == "" || inspection_email.value == "" || inspection_phone.value == "" || inspection_estates.value == "" || inspection_date.value == "") {
          inspection_feedback.innerHTML = `<span class="text-danger"> Complete the missing field </span>`;
          inspection_btn.innerHTML = "Submit";
        }
        else{
          var payload = {
            firstname:inspection_firstname.value,
            lastname:inspection_lastname.value,
            email:inspection_email.value,
            phone:inspection_phone.value,
            referee:inspection_referee.value,
            estate:inspection_estates.value,
            inspection_date:inspection_date.value,
            inspection_time:inspection_time.value
          }
          console.log(JSON.stringify(payload));
          await fetch('/inspections/store',{
                method:"POST",
                mode:"cors",
                cache:"no-cache",
                credentials:"same-origin",
                headers:{
                    "Content-Type":"application/json",
                    'X-CSRF-TOKEN':token.value,
                },
                body: JSON.stringify(payload)
            })
            .then((response)=>response.json())
            .then(response=>{
              if (response.error == false) {
                inspection_btn.innerHTML = "Submit";
                inspection_response.innerHTML = `<div style="background-color:green;color:#ffffff;padding:5px;border-radius:5px"> ${response.message}</div>`;
              }
              else{

                inspection_btn.innerHTML = "Submit";
                inspection_response.innerHTML = `<div style="background-color:red;color:#ffffff;padding:5px;border-radius:5px"> ${response.message}</div>`;
             
              }
            })
            .catch((error)=>{
              inspection_btn.innerHTML = "Submit";
              inspection_response.innerHTML = `<div style="background-color:red;color:#ffffff;padding:5px;border-radius:5px">Something went wrong.</div>`;
             
            })
        }
        

      });
    }
   
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        items: 1,
        margin:20,
        lazyLoad: true,
        dots:false,
        autoPlay: true,
        nav: true,
        // navTxet: ["<div class='nav-button owl-prev' >‹</div>", "<div class='nav-button owl-next'>›</div>"],
     
        responsive:{
          0:{
            items:1,
            nav:true
          },
          600:{
            items:2,
          },
          1000:{
            items:1,
          }
        }
      }); 
  </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
  window.onload = function () {
    setTimeout(() => {
      OpenBootstrapPopup();
    }, 3000);
      
  };

  function OpenBootstrapPopup() {
      $("#simpleModal").modal('show');
  }
</script>
</body>

</html>