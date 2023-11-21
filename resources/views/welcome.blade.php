<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Orkiya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/theme/img/favicon.png" rel="icon">
  <link href="assets/theme/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/theme/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/theme/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/theme/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/theme/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/theme/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/theme/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Appland
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <script>
      (function(d,t) {
        var BASE_URL="https://app.chatwoot.com";
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        console.log(BASE_URL);
        g.src=BASE_URL+"/packs/js/sdk.js";
        g.defer = true;
        g.async = true;
        s.parentNode.insertBefore(g,s);
        g.onload=function(){
          window.chatwootSDK.run({
            websiteToken: 'rHjGUvNvHheeqMkAvRFWrBRf',
            baseUrl: BASE_URL
          })
        }
      })(document,"script");
    </script>
    
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
    <h1><a href="/">Orkiya</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="/"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
</div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#faq">F.A.Q</a></li>
         
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{ url('login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Orkiya! The Key to business Success</h1>
            <h2>Where Efficiency Meets Profitability - Unlock Your Inner Business Superhero</h2>
<a href="{{ url('login') }}" class="download-btn"><i ></i> Login</a>
<a href="{{ url('signup') }}" class="download-btn"><i ></i> Join</a>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/theme/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>🤔 Facing Challenges Growing Your Offline Business?</h2>
          <h3>Many businesses that remain offline face significant challenges in today's digital age</h3>
        </div>

        <div class="row no-gutters">
          <div class="col-xl- d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>market access & Customer Acquisition</h4>
                  <p>Local merchants face difficulties in reaching a broader market and acquiring new customers because they primarily operate offline.
This limitation makes it challenging to compete with well-established brands and attract new clientele.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Business-Product Discovery and trustworthiness</h4>
                  <p>Due to limited or no online presence, consumers cannot easily discover local businesses or their products online, which limits footfall and reach.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>Social Media Dependence on Ads and Ineffective Sharing</h4>
                  <p>Local businesses heavily rely on social media for promotion, often through paid ads.
However, without a well-defined sales funnel, the effectiveness of such promotion is limited, as it may not result in converting viewers into regular customers.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>Digital Transformation</h4>
                  <p>Many traditional retailers in Pakistan do not have an online presence, missing out on the vast digital market.
Additionally, they struggle with the technical complexities and face a steep learning curve when trying to adopt digital solutions.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-atom"></i>
                  <h4>Limited Business Growth and Business Insights</h4>
                  <p>Manual data management and lack of digital tools hinder local businesses from gaining valuable insights and impede their potential for growth.
Addressing these challenges by embracing digital solutions and establishing an online presence can help local merchants in Pakistan expand their reach, improve efficiency, and compete effectively in today's market.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-id-card"></i>
                  <h4>Efficiency and Cost of Doing Business</h4>
                  <p>Merchants encounter problems related to managing inventory, transactions, and data.
These issues result in inefficiencies and increased operational expenses.
Without digitalization, they miss out on the benefits of streamlined operations and data-driven decision-making.</p>
                </div>
              </div>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/theme/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Unlock Your Business Potential with Orkiya</h3>
            <p class="fst-italic">
              Welcome to Orkiya, your gateway to thriving in the digital era. We're dedicated to empowering merchants like you with a comprehensive suite of business-friendly features. With Orkiya by your side, you can take your business to new heights and provide an exceptional experience for your customers.</p>
         <ul>
              <li><i class="bi bi-check"></i> E-commerce Capabilities</li>
              <li><i class="bi bi-check"></i> Integrated Store Hub for In-store Check-ins</li>
              <li><i class="bi bi-check"></i> Live Analytics Dashboard</li>
              <li><i class="bi bi-check"></i> Digital Invoicing</li>
              <li><i class="bi bi-check"></i> One Click Social Sharing</li>
              <li><i class="bi bi-check"></i> Sell on Your Own Terms</li>
              <li><i class="bi bi-check"></i> Customer Engagement and Support</li>

            </ul>
            
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/theme/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Delight your customers with seamless digital shopping experiance</h3>
            <p class="fst-italic">
              
            </p>
            <ul>
<ol>
  <li><b>Enhanced Discovery:</b> Effortlessly find and explore products and services with trustworthiness</li>
  <li><b>Comparison:</b> Easily compare prices and features for informed decisions.</li>
  <li><b>Social Sharing:</b> Encourage sharing for a seamless shopping experience.</li>
  <li><b>QR Code Convenience:</b> Discover with ease through QR codes.</li>
  <li><b>Effortless Check-ins:</b> Conveniently check in at physical stores.</li>
  <li><b>Online Purchase, Offline Returns:</b> Flexible shopping, convenient  exchanges and returns.</li>
  <li><b>Real Ratings and Reviews:</b> Valuable insights for informed choices.</li>
</ol>



          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/theme/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Supercharge Your Business with Orkiya</h3>
            <p>Elevate your brand's reach and reputation on a global scale. Leverage competitive advantages, unlock customer insights, and embrace 24/7 accessibility to supercharge your business success</p>
           <ul>
  <li><b><i class="bi bi-check"></i> Market Expansion:</b> Instantly tap into a vast customer base beyond your local area, reaching potential buyers from different regions and even globally.</li>
  <li><b><i class="bi bi-check"></i> Trust and Credibility:</b> Gain credibility and trust among consumers as your presence within a reputable online marketplace vouches for the authenticity of your business.</li>
  <li><b><i class="bi bi-check"></i> Competitive Edge:</b> Stay competitive by harnessing the marketplace's built-in tools for pricing analysis and competitor research, allowing you to adjust your strategy in real-time.</li>
  <li><b><i class="bi bi-check"></i> 24/7 Accessibility:</b> Enjoy the convenience of round-the-clock sales, allowing customers to browse and shop at their convenience, leading to potential sales at any time of day or night.</li>
</ul>


          
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/theme/img/details-4.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Elevate Your Business to New Heights with Orkiya's Dynamic Commerce Accelerator</h3>
            <p class="fst-italic">
            Fuel Sales and Igniting Growth for Your Business
            </p>
            
           <ol>
  <li><b>Merchant Portal:</b> Orkiya streamlines merchant's online and offline operations with e-commerce capabilities, point-of-sale efficiency, analytics, inventory management, digital invoicing, and custom policies.</li>
  <li><b>Merchant Terminal:</b> Orkiya significantly enhances a retailer's online engagement and sales by providing tools for efficient customer acquisition. Through features like social sharing, location services, self-check-ins, and QR code access to product details, ratings, and reviews, merchants can attract, engage, and convert online consumers effectively.</li>
  <li><b>Online to Offline Marketplace:</b> Orkiya empowers both consumers and retailers through a dynamic marketplace. Consumers benefit from seamless product discovery, authentic retailer choices, efficient product comparison, digital invoicing, and valuable organic ratings and reviews. Retailers, on the other hand, gain access to a thriving marketplace, expanding their reach and customer base.</li>
</ol>

          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up">
        <div class="gallery-slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-1.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-1.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-2.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-2.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-3.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-3.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-4.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-4.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-5.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-5.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-6.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-6.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-7.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-7.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-8.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-8.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-9.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-9.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-10.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-10.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-11.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-11.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="assets/theme/img/gallery/gallery-12.png" class="gallery-lightbox" data-gall="gallery-carousel"><img src="assets/theme/img/gallery/gallery-12.png" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section 
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/theme/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/theme/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/theme/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/theme/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/theme/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>-->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Orkiya is committed to maintaining transparent pricing practices, ensuring that our valued users encounter no hidden charges or commissions. With a straightforward and upfront approach, Orkiya operates on a yearly subscription fee model, providing our users with a clear understanding of the costs associated with our services. Our dedication to transparent pricing reflects our commitment to building trust and delivering excellent value to our customers, making their experience with Orkiya as straightforward and cost-effective as possible.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="fade-right">
            <h3>basic</h3>
            <h4>10,000PKR<span> Per Year</span></h4>
            <h4>5,000<span>per Quarter(3month)</span></h4>
            <ul>
             <li><i class="bx bx-check"></i> Business profile</li>
              <li><i class="bx bx-check"></i> Product Showcase and Listing</li>
              <li><i class="bx bx-check"></i> Self Managed</li>
              <li><i class="bx bx-check"></i> Live Analytics Dashboard</li>
              <li><i class="bx bx-check"></i> 24/7 Suport</li>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box featured" data-aos="fade-up">
            <h3>Business</h3>
            <h4>25,000KR<span>per Year</span></h4>
           <h4>10,000<span>per Quarter(3month)</h4>


            <ul>
              <li><i class="bx bx-check"></i> All included in Basic</li>
              <li><i class="bx bx-check"></i> Onboarding & Trainings</li>
              <li><i class="bx bx-check"></i> Online & Offline Sales</li>
              <li><i class="bx bx-check"></i> Store Management Support</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box" data-aos="fade-left">
            <h3>Pro</h3>
            <h4>50,000PKR<span>per Year</span></h4>
           <h4>15,000<span>per Quarter(3month)</h4>
            <ul>
              <li><i class="bx bx-check"></i> All included in Business</li>
              <li><i class="bx bx-check"></i> Content Creation</li>
              <li><i class="bx bx-check"></i> Key Account Manager</li>
              <li><i class="bx bx-check"></i> Managed By Orkiya</li>
              <li><i class="bx bx-check"></i> Featured Merchant</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2>Frequently Asked Questions</h2>
          <p></p>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">What is Orkiya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                <p>
                  Orkiya is a comprehensive platform that empowers local businesses with a range of digital tools and services. It helps businesses expand their reach, improve efficiency, and compete effectively in the digital era.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">How can Orkiya benefit my business?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>
                 Orkiya offers features like E-commerce capabilities, integrated store hubs, live analytics dashboards, digital invoicing, and more. These tools enhance customer engagement, improve product discovery, and boost your online and offline sales.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">What Orkiya pricing plans are Quarterly and Yearly? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
Orkiya charges on a quarterly and yearly basis to address the fluctuations in the dollar exchange rate. Many of our tech infrastructure costs are dollar-based, and charging periodically allows us to stabilize prices for our customers. It ensures that our customers benefit from flat and affordable pricing, providing them with cost predictability in an ever-changing market.                 </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">Is Orkiya suitable for my business, even if it's not fully online? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                <p>
Absolutely! Orkiya is designed to benefit both online and offline businesses. It helps offline businesses establish an online presence, attract new customers, and streamline operations.                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed">How do I get started with Orkiya?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                <p>
Getting started with Orkiya is easy. Simply choose a pricing plan that suits your business needs, sign up, and unlock the potential of your business in the digital age.                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
<h6>Reach Out to Our Team</h6>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info">
                <i class="bx bx-map"></i>
                <h4>Address</h4>
                <p> 46-CCA, Sector DD Dha Phase 4<br>Lahore, Pakistan 54972</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>+923136662226</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>kashif@orkiya.com<br>info@orkiya.com</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Mon - Fri: 10AM to 7PM</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea placeholder="Message" class="form-control" name="message" rows="5" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Orkiya</h3>
            <p>
              46-CCA, Sector DD DHA Phase 4 <br>
               Lahore, Punjab<br>
              Pakistan <br><br>
              <strong>Phone:</strong> +933136662226<br>
              <strong>Email:</strong> kashif@orkiya.com.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Orkiya</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/theme/vendor/aos/aos.js"></script>
  <script src="assets/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/theme/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/theme/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/theme/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/theme/js/main.js"></script>

</body>

</html>