<!DOCTYPE html>
<?php 
              include("./db_connect.php");
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SHOPIQ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!--
    <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
      <i class="icofont-phone"></i> +1 5589 55488 55
      <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM
    </div>
  </section>
  -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!--<h1 class="text-light"><a href="index.html"><span>EINIG</span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="assets/img/Logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#why-us">About</a></li>
          <li><a href="#v">Vision</a></li>
          <li><a href="#v">Mission</a></li>
          <!--<li><a href="services.php">Services</a></li>
          <li><a href="#about">Notifications</a></li>-->
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="loginpage.php">Login</a></li>

          <!--
          <li><a href="#specials">Specials</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#contact">Contact</a></li>
          -->

          <li class="book-a-table text-center"><a href="#about">Contact</a></li>
        </ul>
      </nav><!--.nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" >
            <div class="carousel-background"><img src="assets/img/bg1.jpg" style="width: 100%;" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
              
                
                <img class="animate__animated animate__fadeInDown" style="width:200px;height:100px" src="assets/img/Logo.png"/>
                <h4 style="color: #ffc56e;">- - -</h4>
                <p class="animate__animated animate__fadeInUp"><br>SHOPIQ is a government authorised ecommerce company based in Kerala, India.</p>
                <div>
                  <!--<a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>-->
                  <a href="#contact" class="btn-book animate__animated animate__fadeInUp scrollto">Contact Us</a>
                </div>
              </div>
            </div>
          </div>

          

          <!-- Slide 3 -->
          <div class="carousel-item" >
            <!--<div class="carousel-background"><video autoplay muted loop id="myVideo">
              <source src="http://vps001.qubehost.com/dmac/assets/img/videos/9.mp4" type="video/mp4">
              Your browser does not support HTML5 video.
            </video></div>-->
            <div class="carousel-background"><img src="assets/img/sliderbg.jpg" style="width: 100%;" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">What are you waiting for?!</h2>
                <p class="animate__animated animate__fadeInUp">Keen to know more about us?!</p>
                <div>
                  <!--<a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>-->
                  <a href="#contact" class="btn-book animate__animated animate__fadeInUp scrollto">Enquire now</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->


<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us abb">
  <div class="container abbinx">

    <div class="section-title">
      <h2 style="padding-top: 50px;">About <span style="color: #2B79BC"> Us</span></h2>
      <p>
      <strong>SHOPIQ </strong>is an e-commerce company registered with the Government of India.
The Company has been placed in the category of Ministry of Micro Small Medium Enterprises.The Company operates with the support of the 
''Vyapari Vyavasayi ekopana samithi''.
      </p>

      <p>
      Today, buying and selling of goods online have become an integral part of 
everyday life. Typically, E-commerce is the process of transaction 
of goods and services over the internet. For offline shops
A platform for advertising and selling online is an essential component. 
It usually costs a fortune. But the company operates with the aim of 
marketing company merchants for a nominal fee and thereby obtaining the 
products at a discount to the customers who purchase the products directly 
or indirectly through the company's platform.
</p>
    </div>
<section id="v" >
    <div class="row">

      <div class="col-lg-6">
        <div class="box">
          <span style="color: #2B79BC">VISION</span>
         <h4>Better Business Space</h4>
          <p>Make commerce better for everyone, so businesses can focus on what they do best: building and selling their products.</p>
        </div>
      </div>

      <div class="col-lg-6 mt-6 mt-lg-0">
        <div class="box2">
          <span style="color: #444444">MISSION</span>
          <h4>Access to Products</h4>
          <p>Offer a wide range of well-designed products at prices so low that as many people as possible will be able to afford them.
           </p>
        </div>
      </div>
        

    </div>
  </section>
  </div>
</section><!-- End Whu Us Section -->


  <main id="main">




    

    <!-- ======= Menu Section ======= -->
    <!--<section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check our tasty <span>Menu</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Show All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Lobster Bisque</a><span>$5.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Bread barrel</a><span>$6.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Crab Cake</a><span>$7.95</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Caesar Selections</a><span>$8.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Tuscan Grilled</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <div class="menu-content">
              <a href="#">Mozzarella Stick</a><span>$4.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Greek Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <div class="menu-content">
              <a href="#">Spinach Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <div class="menu-content">
              <a href="#">Lobster Roll</a><span>$12.95</span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <!--<section id="specials" class="specials">
      <div class="container">

        <div class="section-title">
          <h2>Check our <span>Specials</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Modi sit est</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>--><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <!--<section id="events" class="events">
      <div class="container">

        <div class="section-title">
          <h2>Organize Your <span>Events</span> in our Restaurant</h2>
        </div>

        <div class="owl-carousel events-carousel">

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Birthday Parties</h3>
              <div class="price">
                <p><span>$189</span></p>
              </div>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Private Parties</h3>
              <div class="price">
                <p><span>$290</span></p>
              </div>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Custom Parties</h3>
              <div class="price">
                <p><span>$99</span></p>
              </div>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <!--<section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section>--><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Gallery</h2>
        </div>

       <!-- <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/1.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/2.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/3.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/4.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/5.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/6.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/7.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/8.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>-->
          <!-- added -->
         <!-- <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/6.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/9.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/7.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/10.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/8.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/11.jpg" alt="" class="img-fluid">
              </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="assets/img/6.jpg" class="venobox" data-gall="gallery-item">
              <img src="assets/img/12.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>->
        <?php
        
       $q = "select * from banner"; 
       $result = $conn->query($q);
      while($row = $result->fetch_assoc()){ ?>
      
      <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href=<?php echo $row["image"] ?> class="venobox" data-gall="gallery-item">
              <img src=<?php echo $row["image"] ?> alt="" class="img-fluid">
            </a>
          </div>
        </div>
<?php } ?>
      </div>
    </section><!-- End Gallery Section -->

    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        

         <center><h1 style="color: #2B79BC">Registration Details<br><br></h1></center> 
        
          

        
        <!--<div class="row">

              <div class="col-sm-3" style=" width: 100%;background-color: #fff;
              box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12); border-color:#ffb03b ;
              padding: 3px;">
                 <center> <h4 style="background-color:#EF4233 ; color:#fff;padding: 10px;  box-shadow: 0px 0px 10px 2px rgba(127, 137, 161, 0.25); transition: ease all 0.3s; border-radius: 5px;overflow: hidden;">
                  Notification Panel</h4></center>
                 <marquee behaviour="scroll" direction="up" style="padding: 20px 30px;" scrollamount="4" onmouseover="this.setAttribute('scrollamount',0,0);this.stop();"
                 onmouseout="this.setAttribute('scrollamount',4,0);this.start();">
                --> 
                      
                    
               <!--  <p style="background-color: white; color: #444444;padding: 15px 10px; box-shadow: 0px 0px 10px 2px rgba(127, 137, 161, 0.25); border-radius: 10px;"> 
                
                 
                        <p style="background-color: #444444; color: white;padding: 15px 10px; box-shadow: 0px 0px 10px 2px rgba(127, 137, 161, 0.25); border-radius: 10px;"> 

                
                 <p><br><br></p>  </marquee> 
              </div>
              <div class="col-sm-9">
              <form action="forms/contact.php" method="post" role="form1" class="php-email-form">
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" class="prim_button">Send Message</button></div>
              </form>
            </div>
            
              </div></div>
            </div>
        </div>-->
      
        

         <!-- <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                 </div> 

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">-->

            <div class="content">

            <div class="info-wrap">
          <div class="row">
            <div class="col-lg-6 col-md-6 info">
              
              <h4 >MSME Registration No:</h4>
              <p>UDYAM-KL-06-0001248</p>
            </div>

            <!--<div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>-->

            <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0">
              
              <h4>Vyapari Vyavasayi Ekopana Samithi Reg No :</h4>
              <p>18361</p>
            </div>

            
          </div><!--
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>

          </div>

        -->

      </div>
    </section><!-- End About Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2 style="color: #fff;">Our <span>Members</span></h2>
        </div>

        <div class="row">

        <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/man.jpg" class="img-fluid memberphoto" alt=""></div>
              <div class="member-info">
                <h4>Dummy</h4>
                <span>Chairman</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/man.jpg" class="img-fluid memberphoto" alt=""></div>
              <div class="member-info">
                <h4>Dummy</h4>
                <span>Vice-Chairman</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/man.jpg" class="img-fluid memberphoto" alt=""></div>
              <div class="member-info">
                <h4>Dummy</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/man.jpg" class="img-fluid memberphoto" alt=""></div>
              <div class="member-info">
                <h4>Dummy</h4>
                <span>CEO</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Chefs Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span style="color: #2B79BC">Contact</span> Us</h2>
          
        </div>
      </div>

      <!--<div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>-->

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <!--<div class="col-lg-4 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>MSME Registration No:</h4>
              <p>UDYAM-KL-06-0001248</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-clock-time icofont-rotate-90"></i>
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>-->

            <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email :</h4>
              <p>myshopiq.in@gmail.com</p>
            </div>

            <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+91-7736952314 </p>
            </div>
          </div>
        </div>
<br><br><br>
        <div class="text-center"><a href=" https://wa.me/message/MC6T4UHXVMGPD1"><button type="submit" class="prim_button">Send Message</button></a></div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3 style="font-style: normal; font-family: Arial, Helvetica, sans-serif;">SHOPIQ</h3>
      <p>---</p>
      <div class="social-links">
        <a href="https://twitter.com/DmacStudio" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/groups/967210420324340/?ref=share" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/dmac_india/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCQ_90kRAGILMCvzjOeUjyMw?view_as=subscriber" class="google-plus"><i class="bx bxl-youtube"></i></a>
        <a href="https://g.page/dmac_india?gm" class="linkedin"><i class="bx bxl-google"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>SHOPIQ</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://tomercon.xyz/">Tomercon Developers</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>

    
    $("form").submit(function(e) {
      
      var f = $(this).find('.form-group'),
      ferror = false,
      emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    f.children('input').each(function() { // run all inputs
     
      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;

          case 'email':
            if (!emailExp.test(i.val())) {
              ferror = ierror = true;
            }
            break;

          case 'checked':
            if (! i.is(':checked')) {
              ferror = ierror = true;
            }
            break;

          case 'regexp':
            exp = new RegExp(exp);
            if (!exp.test(i.val())) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validate').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    f.children('textarea').each(function() { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validate').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    if (ferror) return false;

    
      e.preventDefault();    
      var formData = new FormData(this);
      var this_form = $(this);
      var action = $(this).attr('action');
  
      if( ! action ) {
        this_form.find('.loading').slideUp();
        this_form.find('.error-message').slideDown().html('The form action property is not set!');
        
      }
      
      this_form.find('.sent-message').slideUp();
      this_form.find('.error-message').slideUp();
      this_form.find('.loading').slideDown();
  
      $.ajax({
          url: action,
          type: 'POST',
          data: formData,
          success: function (data) {
              if (data == 'OK') {
            this_form.find('.loading').slideUp();
            this_form.find('.sent-message').slideDown();
            this_form.find("input:not(input[type=submit]), textarea").val('');
          } else {
            this_form.find('.loading').slideUp();
            this_form.find('.error-message').slideDown().html(data);
          }
             
          },
          cache: false,
          contentType: false,
          processData: false
      });
  });</script>

</body>

</html>