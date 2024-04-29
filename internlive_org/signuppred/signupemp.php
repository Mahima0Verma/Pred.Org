<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Sign Up Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <style>
        body {
            background-color: #fbfaf8f4;
            color: #0f231c;
        }

        .h-01-bold {
            font-size: larger;
            font-family: monospace;
            font-weight: bolder;
            color: #1e4738;
            /* font-family: Brush Script MT, Brush Script Std, cursive; */

        }

        .h-02-bold {
            text-align: center;
            font-size: larger;
            color: #1e4738;
            /* font-family: mon
    ospace; */
            /* font-weight: bold; */
            font-family: Brush Script MT, Brush Script Std, cursive;
        }

        .h-03-bold {
            /* font-family: Stencil Std, fantasy; */
            font-family: New Century Schoolbook, TeX Gyre Schola, serif;
            font-size: 40px;
        }

        .h-04-bold {
            font-family: Jazz LET;
        }

        /* .text1{
    box-shadow:   inset 0.3em 0.1em 1em#b8dfd1,
                0.111em 0.1em 1em#3f8c71;;
    margin-left: 105px;
} */

        .nav-section {
            background-color: #c9d9e8;
        }

        .navbar-brand {
            /* position: absolute; */
            left: 0;
            text-align: left;
        }

        .nav {
            width: 100%;
            height: 100px;
            position: fixed;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e7f2f5;
            z-index: 999;
            padding: 10px 120px;


        }


        /* -----------------Hero Section------------------ */

        .hero-section {
            background-color: #f1fdff;
            padding-top: 40px;
            min-height: 750px;
        }

        .registration-section {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-top: 80px;

        }

        .registration-section .registration-form h3 {
            text-align: center;
            /* padding-bottom: 10px; */
        }


        .registration-form {
            background-color: #dbefe8;
            margin: 40px 0px 5px 0px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* --------Responsive---------- */
        @media screen and (max-width: 767px) {
            .registration-section {
                padding: 70px 20px;
                display: flex;
                justify-content: center;
            }

            .nav {
                padding: 10px 20px;
            }
        }

        /* ****************Hero-Section****************** */
        .banner {
            position: relative;
            height: 100%;
            margin-top: 20px;

        }


        .welcome-banner {
            border-radius: 10px;
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
            width: 100%;
            /* or any other desired width */
            max-width: 100%;
            /* ensure it doesn't go beyond the container */
            /* height: 0;
    padding-bottom: calc(100% * (1 / 2));  */
            position: relative;
            overflow: hidden;
        }

        .welcome-banner img {
            /* position: absolute; */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .subheading-00 {
            color: #efe8db;
            text-align: center;
            font-size: 28px;

        }

        .subheading-00 .h-07-bold {
            font-weight: bold;
            color: #1f4638;
        }

        /* ******Hassle-Free Section********** */
        .hassle-free {
            padding-top: 60px;
            padding-bottom: 60px;
            /* padding: 20px; */
        }

        /* Styles for large screens */
        @media (min-width: 980px) {
            .hassle-free .h-07-bold {
                font-weight: bold;
                /* color:#d7e0dc; */
                font-size: xx-large;
            }

            .features-div {
                text-align: center;
                display: block;
                /* margin-top: 20px; */
            }

            .feature-card {
                display: flex;
                align-items: center;
                justify-content: space-around;
                text-align: left;
                padding: 10px;
                cursor: pointer;
            }

            .features {
                margin-top: 40px;
                padding-top: 20px;
                font-size: 14px;
                color: #333;

            }

            .feature-card-body {
                display: flex;
                align-items: center;
                /* padding: 10px 20px; */
            }

            .feature-card-body .text {
                padding: 10px 20px 10px 20px;
            }

            .sidebar-div {
                /* padding: 20px; */
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                flex-grow: 1;
                border: 1px solid #ddd;
                border-radius: 10px;

            }

            .feature-card:hover {
                border-left: solid 3px #4faf8e;
                border-radius: 4px;
                background-color: #95cfbb30;
            }

            .feature-card:active {
                /* padding: 0px; */
                border-left: solid 3px #4faf8e;
                border-radius: 4px;
                background-color: #ddd;
                /* border: width 10% ; */

            }

            .feature-card .icon i {
                font-size: 2em;
                /* color: #ffcc00; Color of the icon */
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .feature-card .icon:hover {
                background-color: #ddd;
            }

            .mainbar-div {
                /* padding: 20px; */
                position: relative;
                /* border: 1px solid #ddd; */
                /* border-radius: 50px; */
                /* width: 100%;
        height: 100%; */
                /* background-color: #dbefe8; */
                display: flex;
                align-items: center;
                justify-content: center;
                /* min-height: 200px;  */
            }

            .mainbar-div img {
                overflow: hidden;
                border: 1px solid #ddd;
                border-radius: 50px;

            }

            .features {
                display: flex;
                justify-content: space-between;
            }

            .sidebar-div {
                flex-grow: 1;
                margin-right: 20px;
            }

            .main-feature {
                flex-basis: 30%;
                background-color: #f0f0f0;
            }

            .main-feature-animated {
                flex-basis: 20%;
                display: flex;
                justify-content: space-between;
                background-color: #f0f0f0;
            }

            .img-1,
            .img-2,
            .img-3 {
                flex-basis: 30%;
                height: 100px;
                background-color: #ccc;
            }

            .feature-heading-main h2 {
                font-size: 2rem;
            }

            .features-small-screen {
                display: none;
            }


        }

        @media (max-width: 980px) {


            .hassle-free {
                padding-bottom: 30px;
                display: block;
                background-color: #b7e0d1;
            }

            .hassle-free .h-07-bold {
                font-weight: bold;
                color: #d7e0dc;
                font-size: x-large;
            }

            .features {
                margin-top: 40px;
            }

            .features-description {
                margin-top: 10px;
                display: flex;
                align-items: center;
                justify-content: flex-start;
                gap: 1rem;

            }

            .features-small-screen .feature-card {
                margin-bottom: 20px;
            }

            .feature-card-body {
                display: flex;
                justify-content: center;


            }

            .features-small-screen .feature-img-div {
                margin-bottom: 10px;
            }

            .feature-img-div img {
                width: 100%;
                padding: 10px 0;
                border-radius: 10px;
                position: relative;
                overflow: overlay;
                box-sizing: border-box;
                object-fit: contain;
            }

            .features-large-screen {
                display: none;
            }

            .feature-heading-main h2 {
                font-size: 1.5rem;
            }

        }


        /* ************whyhire*********** */
        .whyhire {
            background-color: #dbefe8;
            /* margin-top: 10px;
    margin-bottom:10px; */
            padding: 40px 10px;
            text-align: left;
            font-family: 'Inter var', sans-serif;
        }

        .whyhire h2 {
            color: #0f231c;
            font-family: 'Inter var', sans-serif;
            font-weight: 600;
            line-height: 1.4;
            letter-spacing: -0.03em;
        }

        .candidates {
            background-color: #ffffff;
            position: relative;
            display: flex;
            justify-content: space-around;
            align-items: center;
            border: 1px solid #DDD;
            border-radius: 8px;
            margin-bottom: 30px;
            margin-top: 46px;
            padding: 40px 2px;
        }

        .candidates h4 {
            font-weight: bold;
            color: #257ea1;
        }

        .candidate1 {
            text-align: center;
            padding: 2px;
            border-right: 1px solid #DDD;
        }

        .candidate2 {
            padding: 2px;
            text-align: center;
        }

        /* --------Responsive---------- */
        @media screen and (max-width: 767px) {
            .candidates {
                border-radius: 20px;
                padding: 10px 2px;
                align-items: start;
            }
        }

        /* **********Sponsors************ */

        .h-07-bold {
            text-align: left;
            color: #0f231c !important;
            font-family: 'Inter var', sans-serif;
            font-weight: 600;
        }

        .sponsors {
            background-color: #f8f8f8d7;
            height: 275px;
            display: block;
            text-align: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .sponsors h2 {
            margin-bottom: 20px;

        }

        .wrapper {
            background-color: #f8f8f8d7;
            height: 125px;
            overflow: hidden;
            position: relative;
            width: 100%;
            display: flex;
            align-items: flex-end;
            padding: 0;
        }

        .wrapper:before,
        .wrapper:after {
            content: "";
            position: absolute;
            height: 130px;
            width: 150px;
            z-index: 2;
        }

        .wrapper:after {
            right: 0;
            top: 0;
            transform: rotateZ(180deg);
        }

        .wrapper:before {
            left: 0;
            top: 0;
        }

        .wrapper .track {
            display: flex;
            width: calc(150px * 10);
            animation: scroll 15s 0.5s linear infinite;
        }

        .wrapper .logo {
            width: 150px;
        }

        .wrapper .logo img {
            height: 90px;
        }

        @keyframes scroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(calc(-150px * 5));
            }
        }


        /* ************faq **********************/
        .faq {
            margin: 0;
            padding: 40px 20px 40px 20px;
            background-color: #dbefe8;

        }

        .faq .faqheader {
            color: #0f231c;
            font-family: 'Inter var', sans-serif;
            font-weight: 600;
            line-height: 1.4;
            letter-spacing: -0.03em;
        }

        .questions {
            padding-top: 25px;
            padding-bottom: 25px;

        }
    </style>
</head>

<body>
    <section class="nav-section">
        <nav class="nav">
            <a class="text1 navbar-brand" href="/index.html">
                <span class="h-01-bold"> PREDU</span>
                <span class="h-02-bold">live</span>
            </a>

            <div class="loginButton">
                <button type="button" class="btn btn-primary" data-mdb-ripple-init>Log In</button>
            </div>

        </nav>
    </section>

<div class="container mt-3">
<div class="row">
        <div class="col-sm-12 p-0 mt-5">
            
                    <!-- php start -->
                    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $contact = $_POST['contact'];

        // connecting to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "signup";

        // create a connection

        $conn = mysqli_connect($servername, $username, $password, $dbname);


        // Die if connection was not successful

        if (!$conn) {
            die("Sorry we failed to connect: " . mysqli_connect_error());
        } else {

            // submit these data to the database

            // sql query to be executed
            $sql = " INSERT INTO `signupemp` (`email`, `password`, `firstname`, `lastname`, `contact`) VALUES ('$email', '$password', '$firstname', '$lastname', '$contact');";
            $result = mysqli_query($conn, $sql);


            // add a new record to the signuoform table
            if ($result) {
                echo '<div class="alert alert-success mt-5 d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                  An example success alert with an icon
                </div>
              </div>';
            } else {
                echo '<div class="alert mt-5 p-0 alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
    }
    ?>
    <!-- php over -->
        </div>
    </div>
</div>

    <section class="hero-section">
        <div class="container">
            <div class="row registration-section">
                <div class="col-xs-10 col-lg-4 col-md-5 col-xl-4 registration-form order-2 order-lg-1">
                    <h3 class="border-bottom">Sign Up</h3>


                    <form action="signupemp.php" method="POST">
                        <div class="form-group">
                            <label for="officialEmail">Official Email:</label>
                            <input type="email" name="email" class="form-control" id="officialEmail" placeholder="name@company.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Minimum 6 characters">
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="firstName">First Name:</label>
                                <input type="text" name="firstname" class="form-control" id="firstName" placeholder="Your First Name">
                            </div>
                            <div class="col">
                                <label for="lastName">Last Name:</label>
                                <input type="text" name="lastname" class="form-control" id="lastName" placeholder="Your Last Name">
                            </div>
                        </div>
                        <label for="mobileNumber">Mobile Number:</label>
                        <div class="form-row">

                            <div class="col-lg-2 ">
                                <select class="form-control" id="countryCode">
                                    <option>+91 (India)</option>
                                    <option>+1 (USA)</option>
                                    <option>+44 (UK)</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="contact" class="form-control" id="mobileNumber" placeholder="Enter mobile number">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Register</button>
                    </form>
                    <div class="mt-3" style="text-align: center;">Already registered? <a href="">Login here</a></div>
                </div>
                <div class="col-xs-10 col-lg-7 col-md-6 banner order-1 order-lg-2">
                    <div class="welcome-banner">
                        <img src="..\assets/img/Sponsors-logos/PREDULIVE_WELCOMEBANNER.gif" alt="img-welcome-banner" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="hassle-free">
        <div class="container">
            <div class="features-div">
                <div class="feature-heading-main">
                    <h2 class="h-07-bold"> A One-Stop Solution for Quick & Hassle-Free Hiring
                    </h2>
                </div>
                <div class="row features features-large-screen">
                    <div class="col-md-4">
                        <div class="sidebar-div">
                            <div onclick="displayImage('FIRST.gif')" id="first" class="feature-card border-bottom">
                                <div class="feature-icon">
                                    <i class="fab fa-amazon"></i>
                                </div>
                                <div class="feature-card-body">
                                    <div class="text">
                                        <div class="heading1">
                                            <h3 class="h-09-semi-bold">Features Section</h3>
                                        </div>
                                        <div class="sub-heading1">World-class ATS with filters to shortlist candidates
                                            faster.
                                        </div>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                            <div onclick="displayImage('SECOND.gif')" id="second" class="feature-card border-bottom">
                                <div class="feature-icon">
                                    <i class="fab fa-amazon-pay"></i>
                                </div>
                                <div class="feature-card-body">
                                    <div class="text">
                                        <div class="heading1">
                                            <h3 class="h-09-semi-bold">Quick Shortlisting Process</h3>
                                        </div>
                                        <div class="sub-heading1">World-class ATS with filters to shortlist candidates
                                            faster.
                                        </div>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>
                            <div onclick="displayImage('THIRD.gif')" id="third" class="feature-card">
                                <div class="feature-icon">
                                    <i class="fab fa-adversal"></i>
                                </div>
                                <div class="feature-card-body">
                                    <div class="text">
                                        <div class="heading1">
                                            <h3 class="h-09-semi-bold">Ace the test</h3>
                                        </div>
                                        <div class="sub-heading1">World-class ATS with filters to shortlist candidates
                                            faster.
                                        </div>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="mainbar-div">
                            <img id="displayedImage" src="" alt="Displayed Image">
                        </div>
                    </div>
                </div>
                <div class="row features features-small-screen">
                    <div id="first" class="feature-card border-bottom">
                        <div class="features-description">
                            <div class="feature-icon">
                                <i class="fab fa-amazon"></i>
                            </div>
                            <div class="feature-card-body">
                                <div class="text">
                                    <div class="heading1">
                                        <h3 class="h-09-semi-bold">Features Section</h3>
                                    </div>
                                    <div class="sub-heading1">World-class ATS with filters to shortlist candidates
                                        faster.
                                    </div>
                                </div>
                            </div>
                            <div class="icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                        <div class="feature-img-div faster-shortlisting-2">
                            <img src="..\assets/img/Sponsors-logos/FIRST.gif" alt="Feature Logo 1">
                        </div>
                    </div>
                    <div id="second" class="feature-card border-bottom">
                        <div class="features-description">
                            <div class="feature-icon">
                                <i class="fab fa-amazon-pay"></i>
                            </div>
                            <div class="feature-card-body">
                                <div class="text">
                                    <div class="heading1">
                                        <h3 class="h-09-semi-bold">Quick Shortlisting Process</h3>
                                    </div>
                                    <div class="sub-heading1">World-class ATS with filters to shortlist candidates
                                        faster.
                                    </div>
                                </div>
                            </div>
                            <div class="icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                        <div class="feature-img-div seamless-communication-2">
                            <img src="..\assets/img/Sponsors-logos/SECOND.gif" alt="Feature Logo 2">
                        </div>
                    </div>
                    <div id="third" class="feature-card">
                        <div class="features-description">
                            <div class="feature-icon">
                                <i class="fab fa-adversal"></i>
                            </div>
                            <div class="feature-card-body">
                                <div class="text">
                                    <div class="heading1">
                                        <h3 class="h-09-semi-bold">Ace the test</h3>
                                    </div>
                                    <div class="sub-heading1">World-class ATS with filters to shortlist candidates
                                        faster.
                                    </div>
                                </div>
                            </div>
                            <div class="icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                        <div class="feature-img-div hiring-tools-2">
                            <img src="..\assets/img/Sponsors-logos/THIRD.gif" alt="Feature Logo 3">
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
        </div>

    </section>

    <section class="whyhire">
        <div class="container">
            <h2> Why Hire from Predulive?</h2>
            <p>Post your intern requirements and build your dream team with ease.</p>

            <div class="candidates">
                <div class="candidate1 col-lg-4-col-md-4">
                    <h4>
                        25Mn+
                    </h4>
                    <p>
                        candidates looking for Internships
                    </p>
                </div>
                <div class="candidate1 col-lg-4-col-md-4">
                    <h4>
                        1.7 Mn+
                    </h4>
                    <p>
                        candidates hired
                        PAN India
                    </p>
                </div>
                <div class="candidate2 col-lg-4-col-md-4">
                    <h4>
                        250 K+
                    </h4>
                    <p>
                        associate companies
                    </p>
                </div>
                <!-- <div class="candidate2 col-lg-4-col-md-4">
                    <h4>
                        250 K+
                    </h4>
                    <p>
                        associate companies
                    </p>
                </div> -->

            </div>
        </div>
    </section>

    <section class="sponsors">
        <h4>Trusted by 3 Lakh+ Startups, SMEs, & MNCs</h4>
        <div class="wrapper">
            <div class="track">

                <div class="logo">
                    <img src="..\assets\img\Sponsors-logos\1.png" />
                </div>
                <div class="logo">
                    <img src="..\assets\img\Sponsors-logos\11.jpeg" />
                </div>
                <div class="logo">
                    <img src="..\assets\img\Sponsors-logos\2.png" />
                </div>

                <div class="logo">
                    <img src="..\assets\img\Sponsors-logos\3.png" />
                </div>
                <div class="logo">
                    <img src="..\assets\img\Sponsors-logos\4.png" />
                </div>

                <div class="logo">
                    <img src="..\assets\img\Sponsors-logos\7.jpg" />
                </div>
                <div class="logo">
                    <img src="..\assets\img\Sponsors-logos\8.png" />
                </div>
                <div class="logo">
                    <img src="..\assets\img\Sponsors-logos\1.png" />
                </div>
                <div class="logo">
                    <img src="..\assets\img\Sponsors-logos\6.png" />
                </div>
                <div class="logo">
                    <img src="..\assets\img\Sponsors-logos\12.png" />
                </div>
                <div class="logo">
                    <img src="..\assets\img\Sponsors-logos\5.png" />
                </div>

            </div>
        </div>

    </section>

    <section class="faq">
        <div class="container">
            <h2 class="faqheader"> Frequently asked questions? </h2>
            <p> Can't find the answer to your questions? <a href="#">Send us a message!</a></p>
            <div class="questions accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            How can I contact Predulive?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-mdb-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>You can contact us by writing a mail at employer@internshala.com or call us at +91
                                8448444852, in case you wish to hire freshers or hire employees for your company. If you
                                are a student, you can write to us at helpdesk@internshala.com. We are always happy to
                                help!
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What is your privacy policy?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-mdb-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we use to
                            style each element. These classes control the overall appearance, as well as the
                            showing and hiding via CSS transitions. You can modify any of this with custom CSS
                            or overriding our default variables. It's also worth noting that just about any
                            HTML can go within the <strong>.accordion-body</strong>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How to become a partner?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-mdb-parent="#accordionExample">
                        <div class="accordion-body">
                            You can contact us by writing a mail at employer@internshala.com or call us at +91
                            8448444852, in case you wish to hire freshers or hire employees for your company. If you are
                            a student, you can write to us at helpdesk@internshala.com. We are always happy to help!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What are the topics often discussed in the meeting?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-mdb-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>You can contact us by writing a mail at employer@internshala.com or call us at +91
                                8448444852, in case you wish to hire freshers or hire employees for your company. If you
                                are a student, you can write to us at helpdesk@internshala.com. We are always happy to
                                help!
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            What is the security measures taken by us?
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-mdb-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by
                            default, until the collapse plugin adds the appropriate classes that we use to
                            style each element. These classes control the overall appearance, as well as the
                            showing and hiding via CSS transitions. You can modify any of this with custom CSS
                            or overriding our default variables. It's also worth noting that just about any
                            HTML can go within the <strong>.accordion-body</strong>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button data-mdb-collapse-init class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            How to become more accesible?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-mdb-parent="#accordionExample">
                        <div class="accordion-body">
                            You can contact us by writing a mail at employer@internshala.com or call us at +91
                            8448444852, in case you wish to hire freshers or hire employees for your company. If you are
                            a student, you can write to us at helpdesk@internshala.com. We are always happy to help!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
    <script type="text/javascript" src="..\assets\js\SignUp_Bhupesh_T9.js" defer> </script>
    <script>
        // HASSLE FREE SECTION
        function displayImage(imageName) {
            const imagePath = `../assets/img/Sponsors-logos/${imageName}`;
            document.getElementById("displayedImage").src = imagePath;
        }

        // Set the first image as default
        window.onload = function() {
            displayImage("FIRST.gif");
        };
    </script>
</body>

</html>