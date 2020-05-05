<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Adda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css" rel="text/css">
    <script src="C:/Stud/Bootstrap/jquery-3.4.1.js"></script>
    <script>
        $(function () {
            $('a[href*=\\#]:not([href=\\#])').on('click', function () {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            });
        });
    </script>

</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                <?php
                    session_start();
                    echo "Welocome back " . $_SESSION["name"] . "!";
                ?>
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="registration_form.html">List with us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <center>
        <div class="header2">
            <ul>
                <li>
                    <a href="After_login_colleges.html" class="asbutton1">Colleges</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li>
                    <a href="schools.html" class="asbutton1">Schools</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li>
                    <a href="universities.html"  class="asbutton1">Universities</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li>
                    <a href="blogs.html" class="asbutton1">Educational Blogs</a>
                </li>
            </ul>
        </div>
    </center>

    <div  class="alert alert-secondary" role="alert" id="about">
        <p>
            The Admission Portal is an application where an applicant or student can apply to any of the university's
            course offerings. The Admission Portal application redirects the applicant to a logon page. If the applicant
            is a new user, they must register first and then log on to the application. If the applicant is an existing
            user, they can log on directly to the application. The Admission Portal User Management is where user
            management tasks can be performed.
        </p>
        <p>
            The admission administrator at the university defines the admission procedures. These admission procedures
            are linked to one or more course offerings. An admission administrator designs the forms using the
            Application Form Designer application. All the forms that a student can view are designed and published by
            the admission administrator.
        </p>
        <p>
            After logging on, the applicant can create applications using the Admission Application Form solution to
            gain admission to a specific course offering. The applicant answers a preliminary questionnaire. Based on
            the course offering selected in the preliminary questionnaire, the applicant is redirected to a main form.
            The applicant answers the questions and submits the form. Forms submitted by the student reach the Decision
            Framework application, where the admission administrator can view the forms and either approve or reject the
            admission or registration form. If the application is approved, the applicant needs to accept or reject the
            offer of the admission.

            The registered or admitted students of the university use the My Request application to request some of the
            most common student activities.
        </p>
    </div>
   
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">
                        <div class="logo">
                            <a href="">
                                <i class="fa fa-home"></i>
                                <span>School</span>
                            </a>
                            <p> Education is what remains after one has forgotten <br>
                                what one has learned in school.

                                <br><i>Albert Einstein</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">college</a></li>
                                <li><a href="#">schools</a></li>
                                <li><a href="#">contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <span class="social-icon">
                        <a href="#">Phone: +91 999999999 </a><br>       
                        <a href="#">Mail:  abc@xyz.co.in </a>
                    </span>
        </div>
    </footer>
</body>

</html>