<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form</title>
</head>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="Important ext/flaticon/font/flaticon.css" rel="stylesheet">

<body>


    <!-- nav start -->

    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
        <a href="" class="navbar-brand">
            <h1 class="m-0 display-5 text-white"><span class="text-primary"></span>FurniVerse</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="design navbar-design ml-auto px-3" id="navbardesign">
            <div class="navbar-nav ml-auto py-0">
                <a href="Main.php" class="nav-item nav-link active m-1">Home</a>
                <a href="service.php" class="nav-item nav-link m-1">Service</a>
                <a href="about.php" class="nav-item nav-link m-1">About</a>
                <a href="project.php" class="nav-item nav-link m-1">Project</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle m-1" data-toggle="dropdown" href="#">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
                <a href="contact.php" class="nav-item nav-link m-1">Contact</a>
                <form class="form-inline ml-2" action="/search.php">
                    <input class="form-control mr-sm-2 ml-4" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                <a href="order.php" class="nav-item nav-link ml-4"><img src="images/tracking.png" height="40"
                        width="40"></a>
                <a href="shopping.php" class="nav-item nav-link"><img src="images/shopping-cart.png" height="35"
                        width="35"></a>
                <a href="user.php" class="nav-item nav-link"><img src="images/user.png" height="35" width="35"></a>

            </div>
        </div>
    </nav>

    <!-- nav end -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark py-1">
        <div class="container ">
            <div class="row align-items-center py-2">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">ABOUT US</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="main.php">Home</a>
                        <i class="fa fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Login In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!--login Start-->

    <section>
        <div class="container-fluid col-lg-5 col-md-4">
            <div class="form">
                <ul class="tab-group ">
                    <li class="tab active text-center "><a href="#login" class="btn btn-info text-uppercase "
                            style="background-color:rgba(59, 59, 59, 0.8);">Log In</a></li>
                    <li class="tab text-center "><a href="#signup" class="btn btn-info text-uppercase "
                            style="background-color:rgba(59, 59, 59, 0.8);">Sign Up</a></li>
                </ul>

                <div class="tab-content py-3 pt-3">
                    <div id="login">
                        <h1>Login Here</h1>

                        <form action="/" method="post">

                            <div class="field-wrap">
                                <input type="email" placeholder="Email" required autocomplete="off" />
                            </div>

                            <div class="field-wrap">
                                <input type="password" placeholder="Password" required autocomplete="off" />
                            </div>

                            <p class="forgot"><a href="#">Forgot Password?</a></p>

                            <button class="button button-block" style="background-color:rgba(43, 102, 54, 0.5);" />Log
                            In</button>

                        </form>
                    </div>

                    <div id="signup">
                        <h1>Sign Up Here</h1>

                        <form action="/" method="post">

                            <div class="top-row">
                                <div class="field-wrap">
                                    <input type="text" placeholder="First Name" required autocomplete="off" />
                                </div>

                                <div class="field-wrap">
                                    <input type="text" placeholder="Last Name" required autocomplete="off" />
                                </div>
                            </div>

                            <div class="field-wrap">
                                <input type="email" placeholder="Email Address" required autocomplete="off" />
                            </div>

                            <div class="field-wrap">
                                <input type="password" placeholder="Set A Password" required autocomplete="off" />
                            </div>

                            <button type="submit" class="button button-block "
                                style="background-color:rgba(43, 102, 54, 0.5);" />Sign Up</button>

                        </form>
                    </div>
                </div>
            </div>

            <style>
                .tab-group {
                    list-style: none;
                    padding: 0;
                    margin: 0 0 40px 0;

                    opacity: 0.8;
                }

                li a {
                    display: block;
                    text-decoration: none;
                    padding: 15px;
                    background: rgba($gray-light, .25);
                    color: $gray-light;
                    font-size: 20px;
                    float: left;
                    width: 50%;
                    text-align: center;
                    cursor: pointer;
                    transition: .5s ease;

                    &:hover {
                        background: $main-dark;
                        color: $white;
                    }
                }

                .active a {
                    background: $main;
                    color: $white;
                }


                .tab-content>div:last-child {
                    display: none;
                }


                h1 {
                    text-align: center;
                    color: $white;
                    font-weight: $thin;
                    margin: 0 0 40px;
                }

                label {
                    position: absolute;
                    transform: translateY(6px);
                    left: 13px;
                    color: rgba($white, .5);
                    transition: all 0.25s ease;
                    -webkit-backface-visibility: hidden;
                    pointer-events: none;
                    font-size: 22px;

                    .req {
                        margin: 2px;
                        color: $main;
                    }
                }

                label.active {
                    transform: translateY(50px);
                    left: 2px;
                    font-size: 14px;

                    .req {
                        opacity: 0;
                    }
                }

                label.highlight {
                    color: $white;
                }

                input,
                textarea {
                    font-size: 22px;
                    display: block;
                    width: 100%;
                    height: 100%;
                    padding: 5px 10px;
                    background: none;
                    background-image: none;
                    border: 1px solid $gray-light;
                    color: $white;
                    border-radius: 0;
                    transition: border-color .25s ease, box-shadow .25s ease;

                    &:focus {
                        outline: 0;
                        border-color: $main;
                    }
                }

                textarea {
                    border: 2px solid $gray-light;
                    resize: vertical;
                }

                .field-wrap {
                    position: relative;
                    margin-bottom: 40px;
                }

                .top-row {
                    &:after {
                        content: "";
                        display: table;
                        clear: both;
                    }

                    >div {
                        float: left;
                        width: 48%;
                        margin-right: 4%;

                        &:last-child {
                            margin: 0;
                        }
                    }
                }

                .button {
                    border: 0;
                    outline: none;
                    border-radius: 0;
                    padding: 15px 0;
                    font-size: 2rem;
                    font-weight: $bold;
                    text-transform: uppercase;
                    letter-spacing: .1em;
                    background: $main;
                    color: &black;
                    transition: all.5s ease;
                    -webkit-appearance: none;

                    &:hover,
                    &:focus {
                        background: $main-dark;
                    }
                }

                .button-block {
                    display: block;
                    width: 100%;
                }

                .forgot {
                    margin-top: -20px;
                    text-align: right;
                }
            </style>
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

    </section>

    <!--login End-->
    <br>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-1 px-sm-3 px-md-5">
        <div class="row pt-3">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-3">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>ABC, New Delhi, India, 110019</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" charset="utf-8"></script>

    <script src="jss/func.js"></script>
    <script src="jss/fff.js"></script>

</body>

</html>