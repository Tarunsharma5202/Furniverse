<!doctype html>
<html lang="en">

<head>
    <title>FurniVerse</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="Important ext/flaticon/font/flaticon.css" rel="stylesheet">

<body>

    <!-- nav start -->

    <nav style="background-color: #6987A4;" class="navbar navbar-expand-lg navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
    <a class="navbar-brand" href="#">
    <img src="images/logo.png" alt="Logo" style="width:70px;">
  </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="design navbar-design ml-auto px-3" id="navbardesign">
            <div class="navbar-nav ml-auto py-1">
                <a href="Main.php" class="btn nav-item nav-link active m-1">Home</a>
                <a href="service.php" class="btn nav-item nav-link m-1">Service</a>
                <a href="about.php" class="btn nav-item nav-link m-1">About</a>
                <a href="project.php" class="btn nav-item nav-link m-1">Project</a>
                <li class="nav-item dropdown">
                    <a class="btn nav-link dropdown-toggle m-1" data-toggle="dropdown" href="#">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
                <a href="contact.php" class="btn nav-item nav-link m-1">Contact</a>
                <div class="row">
                    <form class="form-inline ml-2" action="/search.php">
                        <input class="form-control mr-sm-2 ml-2" type="text" placeholder="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                    <a href="order.php" class="nav-item nav-link ml-2"><img src="images/tracking.png" height="40"
                            width="40"></a>
                    <a href="shopping.php" class="nav-item nav-link"><img src="images/shopping-cart.png" height="35"
                            width="35"></a>
                    <a href="user_signup.php" class="nav-item nav-link"><img src="images/user.png" height="35" width="35"></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- nav end -->

    <!-- Start carousel-->

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/main Carousel/1.png" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="Images/main Carousel/2.png" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img src="Images/main Carousel/3.jpg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    <!-- End Carousel>


<!-- Our Services start-->
    <span class="rounded-lg ">
        <div class="services_section layout_padding ">
            <div class="container ">
                <h1 class="services_taital text-center m-2">OUR SERVICES</h1>
                <p class="many_taital text-center py-4"> "Discover curated furniture collections, expert design
                    guidance, and hassle-free online shopping. Create your dream space with our quality furniture,
                    personalized service, and convenient delivery options. Transform your home today!" </p>
                <div class="services_section2 layout_padding">
                    <div class="row m-4">

                        <div class="col-lg-3 col-sm-6 ml-auto">
                            <div class="icon_1 ">
                                <div class="imgg flex-column align-items-center justify-content-center"><img
                                        src="images/icon img/icon-1.png"></div>
                            </div>
                            <h2 class="furnitures_text ">Furnitures</h2>
                            <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but
                                the</p>
                            <div class="read_bt_main">
                                <div class="read_bt"><a href="display.php" class="btn btn-info ml-5" role="button">Read
                                        More</a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-sm-6 ml-auto">
                            <div class="icon_1">
                                <div class="imgg flex-column align-items-center justify-content-center">
                                    <img src="images/icon img/icon-2.png" class="img-fluid">
                                </div>
                            </div>
                            <h2 class="furnitures_text">Office</h2>
                            <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but
                                the</p>
                            <div class="read_bt_main">
                                <div class="read_bt"><a href="display.php" class="btn btn-info ml-5" role="button">Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 ml-auto">
                            <div class="icon_1 ">
                                <div class="imgg flex-column align-items-center justify-content-center">
                                    <img src="images/icon img/icon-3.png" class="img-fluid">
                                </div>
                            </div>
                            <h2 class="furnitures_text">Home</h2>
                            <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but
                                the</p>
                            <div class="read_bt_main">
                                <div class="read_bt"><a href="display.php" class="btn btn-info ml-5" role="button">Read
                                        More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 ml-auto">
                            <div class="icon_1">
                                <div class="imgg flex-column align-items-center justify-content-center">
                                    <img src="images/icon img/icon-4.png" class="img-fluid">
                                </div>
                            </div>
                            <h2 class="furnitures_text">Bedroom</h2>
                            <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but
                                the</p>
                            <div class="read_bt_main">
                                <div class="read_bt"><a href="display.php" class="btn btn-info ml-5" role="button">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </span>

    <!-- Sevice section end-->

    <!--About us start-->

    <section>
        <span class="rounded-lg">
            <div class="container-fluid bg-light">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-5 bg-dark">
                            <div
                                class="d-flex flex-column align-items-center justify-content-center bg-dark h-100 py-4 px-2">
                                <i class="flaticon-brickwall display-3 font-weight-normal text-primary mb-3 px-3"></i>
                                <h4 class="display-1 mb-3 ">25+</h4>
                                <h1 class="m-0">Years Experience</h1>
                            </div>
                        </div>
                        <div class="about col-lg-7 m-0 my-lg-5 pt-3 pb-5 pb-lg-2 pl-lg-4 align-items-center">
                            <div class="imgg flex-column align-items-center justify-content-center ">
                                <h3 class="txt text-secondary font-weight-bold bg-light">LEARN ABOUT US</h>
                            </div>
                            <h1 class="mb-4 section-title">We Are The Best Interior Designing Firm In Your City</h1>
                            <p>Welcome to FurniVerse, your premier destination for exquisite furniture and inspiring
                                home decor. We are passionate about helping you transform your space into a haven of
                                comfort, style, and functionality.

                                At FurniVerse, we believe that furniture is more than just functional pieces; it's an
                                expression of your unique personality and a reflection of your lifestyle. That's why we
                                carefully curate a diverse collection of furniture that spans a wide range of styles,
                                from classic elegance to contemporary minimalism, ensuring there's something for
                                everyone.</p>

                            <a href="about.php" class="btn btn-info text-dark bg-success text-uppercase"
                                role="button">Read More</a>

                            <br>
                            <div class="row py-2">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-4">
                                        <h1 class="flaticon-house font-weight-normal text-dark m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Project Planning</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-4">
                                        <h1 class="flaticon-stairs font-weight-normal text-dark m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Exterior & Interior</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-4">
                                        <h1 class="flaticon-office font-weight-normal text-dark m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Commercial Design</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center mb-4">
                                        <h1 class="flaticon-living-room font-weight-normal text-dark m-0 mr-3"></h1>
                                        <h5 class="text-truncate m-0">Residential Design</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </span>

    </section>
    <!--About End-->

    <!--Projects starts-->

    <section>
        <div class="container-fluid py-2">
            <div class="container py-3 ">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col text-center mb-4">
                        <h2 class="text-primary font-weight-normal text-uppercase mb-3">OUR PROJECTS</h2>
                        <h1 class="mb-4">Some Of Our Awesome Interior Designing Projects</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mb-2">
                        <ul class="list-inline mb-4" id="portfolio-flters">
                            <li class="btn btn-outline-primary m-1 active" data-filter="*">All</li>
                            <li class="btn btn-outline-primary m-1" data-filter=".first">Complete</li>
                            <li class="btn btn-outline-primary m-1" data-filter=".second">Running</li>
                            <li class="btn btn-outline-primary m-1" data-filter=".third">Upcoming</li>
                        </ul>
                    </div>
                </div>
                <div class="row mx-1 portfolio-container ">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 p-1 py-1 portfolio-item first">
                            <div class="position-relative overflow-hidden">
                                <div class="project-img d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" src="images/project/p1.jpg" alt="">
                                </div>
                                <div
                                    class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                    <h4 class="text-white mb-4">Project Name 1</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-light m-1" href="">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="btn btn-outline-light m-1" href="images/project/p1.jpg"
                                            target="_blank" data-lightbox="project">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 p-1 py-1 portfolio-item second">
                            <div class="position-relative overflow-hidden">
                                <div class="project-img d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" src="images/project/p2.jpg" alt="">
                                </div>
                                <div
                                    class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                    <h4 class="text-white mb-4">Project Name 2</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-light m-1" href="">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="btn btn-outline-light m-1" href="images/project/p2.jpg"
                                            data-lightbox="project">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 p-1 py-1 portfolio-item third">
                            <div class="position-relative overflow-hidden">
                                <div class="project-img d-flex align-items-center justify-content-center">

                                    <img class="img-fluid" src="images/project/p3.jpg" alt="">
                                </div>
                                <div
                                    class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                    <h4 class="text-white mb-4">Project Name 3</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-light m-1" href="">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="btn btn-outline-light m-1" href="images/project/p3.jpg"
                                            data-lightbox="project">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 p-1 py-1 portfolio-item first">
                            <div class="position-relative overflow-hidden">
                                <div class="project-img d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" src="images/project/p4.jpg" alt="">
                                </div>
                                <div
                                    class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                    <h4 class="text-white mb-4">Project Name 4</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-light m-1" href="">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="btn btn-outline-light m-1" href="images/project/p4.jpg"
                                            data-lightbox="project">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 p-1 py-1 portfolio-item second">
                            <div class="position-relative overflow-hidden">
                                <div class="project-img d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" src="images/project/p5.jpg" alt="">
                                </div>
                                <div
                                    class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                    <h4 class="text-white mb-4">Project Name 5</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-light m-1" href="">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="btn btn-outline-light m-1" href="images/project/p5.jpg"
                                            data-lightbox="project">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 p-1 py-1 portfolio-item third">
                            <div class="position-relative overflow-hidden">
                                <div class="project-img d-flex align-items-center justify-content-center">

                                    <img class="img-fluid" src="images/project/p6.jpg" alt="">
                                </div>
                                <div
                                    class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                    <h4 class="text-white mb-4">Project Name 6</h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-light m-1" href="">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="btn btn-outline-light m-1" href="images/project/p6.jpg"
                                            data-lightbox="project">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="display.php"
                        class="btn btn-outline-primary btn-lg btn-block align-items-center py-2  ">OPEN GALLERY</a>
                </div>
            </div>
        </div>
    </section>

    <!--Projects starts-->

    <!-- Team Start -->
    <div class="container-fluid bg-secondary">
        <div class="container">
            <div class="row bg-dark">
                <div class="col-md-4 col-sm-6">
                    <div class="py-2 px-2 h-100 bg-dark d-flex flex-column align-items-center justify-content-center">
                        <h3 class="text-white font-weight-normal text-uppercase mb-3">OUR TEAM</h3>
                        <h1 class="mb-0 text-center text-light">Meet Our Team Members</h1>
                    </div>
                </div>
                <div class="cd py-3 p-3">
                    <div class="card py-3 p-3" style="width:20rem;margin:20px 0 24px 0">
                        <img class="card-img-top" src="images/profile1.png" alt="image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Tstar</h4>
                            <p class="card-text">Tstar, A CEO of this company. He did lots of project based on Interior
                                designing.
                            </p>
                            <a class="btn btn-primary" href="profile1.php" target="_blank">See Profile</a>
                        </div>
                    </div>
                </div>

                <div class="cd py-3 p-3">
                    <div class="card  image/profile1.png" style="width:20rem;margin:20px 0 24px 0">
                        <img class="card-img-top" src="images/profile2.png" alt="image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Juniour</h4>
                            <p class="card-text">Juniour, A CMO of this company. she did lots of project based on
                                Interior designing.
                            </p>
                            <a class="btn btn-primary" href="profile2.php" target="_blank">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <br>

    <!-- Contact Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div
                        class="py-5 px-4 h-100 bg-secondary d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-white align-item-center font-weight-normal text-uppercase mb-3 ">CONTACT DETAILS
                        </h2>
                        <br>
                        <br>
                        <ul align-item-center>
                            <p><i class="fa fa-map-marker mr-2"></i>ABC, New Delhi, India</p>
                            <p><i class="fa fa-phone mr-2"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        </ul>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                style="width: 38px; height: 38px;" href="https://twitter.com/i/flow/login"><i
                                    class="fa fa-twitter" style="color: #3d0179;"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                style="width: 38px; height: 38px;" href="https://www.facebook.com/"><i
                                    class="fa fa-facebook-f" style="color: #3d0179;"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                style="width: 38px; height: 38px;"
                                href="https://in.linkedin.com/?original_referer=https%3A%2F%2Fwww.google.com%2F"><i
                                    class="fa fa-linkedin" style="color: #3d0179;"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                                style="width: 38px; height: 38px;" href="https://www.instagram.com/"><i
                                    class="fa fa-instagram" style="color: #3d0179;"></i></a>
                        </div>
                    </div>
                </div>

                <div class="about col-lg-7 m-0 my-lg-5 pt-3 pb-5 pb-lg-2 pl-lg-4 align-items-center">
                    <div class="imgg flex-column align-items-center justify-content-center ">
                        <h3 class="txt text-secondary font-weight-bold bg-light">CONTACT US</h>
                    </div>
                    <form action="userinfo.php" method="post">
                        <div class="form-group">
                            <i class="fa fa-user mr-1"></i>
                            <label>Name :</label>
                            <input type="name" name="name" id="name" class="form-control" placeholder="Full Name"
                                required="required">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-envelope mr-1"></i>
                            <label>Email ID :</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email ID"
                                required="required">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-phone mr-1"></i>
                            <label>Phone Number :</label>
                            <input type="phone" name="phone" id="phone" class="form-control" placeholder="Phone Number"
                                required="required">
                        </div>
                        <div class="form-group">
                            <i class="fa fa-comment mr-1"></i>
                            <label>Comment :</label>
                            <textarea class="form-control" rows="2" name="comment" type="comment"
                                placeholder="Leave your Comment" id="comment" required="required"></textarea>
                        </div>
                        <div class="container">
                            <button class="btn btn-lg btn-primary btn-block border-0" value="submit" name"submit"
                                type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <br>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-1 px-sm-3 px-md-5">
        <div class="row pt-3">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-3">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>ABC, New Delhi, India</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="https://twitter.com/i/flow/login"><i
                            class="fa fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="https://www.facebook.com/"><i
                            class="fa fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;"
                        href="https://in.linkedin.com/?original_referer=https%3A%2F%2Fwww.google.com%2F"><i
                            class="fa fa-linkedin"></i></a>
                    <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="https://www.instagram.com/"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-3">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="Main.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="About.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="Service.php"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="Project"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="Contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="home.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="office.php"><i class="fa fa-angle-right mr-2"></i>Office</a>
                    <a class="text-white mb-2" href="bedroom.php"><i class="fa fa-angle-right mr-2"></i>Bedroom</a>
                    <a class="text-white mb-2" href="resturant.php"><i class="fa fa-angle-right mr-2"></i>Restaurant</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-3 text-center">CONTACT</h4>
                <form action="homeinfo.php" method="post">
                    <div class="form-group">
                        <input type="name" name="name" id="name" class="form-control border-0 text-center"
                            placeholder="Your Name" required="required">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control border-0 text-center"
                            placeholder="Your Email" required="required">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" name="comment" type="comment"
                            placeholder="Leave your Comment" id="comment" required="required"></textarea>
                    </div>
                    <div class="container">
                        <button class="btn btn-outline-success bg-basic" value="submit" name"submit"
                            type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">furniverse</a>. All Rights Reserved. Designed by
                <a class="text-white font-weight-bold" href="#">Tarun</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/func.js"></script>

</body>
</html>