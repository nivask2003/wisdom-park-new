<?php

function template_header(){
    echo <<< EOT
        <header>
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 column-1">
                            <a href="blog.php">Blogs / Newsletter</a>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 column-2">
                            <a href="mandatory-disclosure.php">Mandatory Disclosure</a>
                        </div>
                    </div>
                </div>

            </div>
            <section class="admission-announcement">
                        <div class="announcement-track">
                            <div class="announcement-content">
                                <span class="icon">
                                    <i class="bi bi-megaphone-fill"></i>
                                </span>

                                <span>
                                    Empowering Muslim girls to become confident, independent, and responsible women through holistic education.
                                </span>



                                <!-- Duplicate for seamless loop -->
                                <span class="icon">
                                    <i class="bi bi-megaphone-fill"></i>
                                </span>

                                <span>
                                    Encouraging higher education and lifelong learning to build successful futures and meaningful careers.
                                </span>


                            </div>
                        </div>
                    </section>
            <div class="middle-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-5 col-lg-5">
                            <a href="index.php">
                                <img src="images/logo.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-12 col-md-7 col-lg-7">
                            <div class="row">
                                <div class="col-12 col-md-5 col-lg-5">
                                    <div class="total">
                                        <i class="fa fa-phone"></i>

                                        <div class="text">
                                            <h4>Call Anytime:</h4>

                                            <p>
                                                <a href="tel:+917639651222">
                                                    +91 763 965 1222
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7 col-lg-7">
                                    <div class="total">
                                        <i class="fa fa-envelope"></i>

                                        <div class="text">
                                            <h4>Email Us:</h4>

                                            <p>
                                                <a href="mailto:office@wisdomparkschool.com">
                                                    office@wisdomparkschool.com
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="bottom-header">
                <nav class="navbar">
                    <div class="container-fluid">
                        <div class="navbar-brand">
                            <h5>Menu</h5>
                        </div>
                        <!-- Brand and toggle -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li>
                                    <a href="about.php">About <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        Academics <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a href="academics.php">Academics Procedure</a></li>
                                        <li><a href="images/CALENDAR PDF.pdf">Academic Calender</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        Activities <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">Exam</a></li>
                                        <li><a href="events.php">Events</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="facilities.php">Facilities <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        Admission <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">Admission Procedure</a></li>
                                        <li><a href="#">Admission Form</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="gallery.php">Gallery <span class="sr-only">(current)</span></a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </nav>
            </div>
        </header>
            <script>
            $(document).ready(function () {

        $('.navbar-toggle').click(function () {
            $(this).toggleClass('open');
        });

        $('.navbar-collapse').on('hidden.bs.collapse', function () {
            $('.navbar-toggle').removeClass('open');
        });

    });
        </script>
    EOT;
}

function template_footer(){
    echo <<< EOT
        <section class="title" id="footer">
        <div class="container">
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-12">
                    <div class="col-md-3 fr">
                        <img src="images/logo.png" class="img-responsive">
                        <p class="footer-content">Wisdom Park International School is dedicated to academic excellence and
                            holistic development through modern learning, values, creativity, and student-centered
                            education.</p>

                    </div>
                    <div class="col-md-3">
                        <h4>Quick Links</h4>
                        <ul class="ser">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="academics.php">Academics</a></li>
                            <li><a href="facilities.php">Facilities</a></li>
                            <li><a href="admisssion-procedure.php">Admission</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>

                    </div>
                    <div class="col-md-3 det">
                        <h4>Working Hours</h4>
                        <p class="hh"><b>School Timing</b></p>
                        <p class="hh-desc">KG - 9:30 AM to 1:00 PM<br>Grade (I-V) - 9:30 AM to 3:30 PM<br>Grade (VI-XII) - 8:30 AM to 4:30 PM</p>
                        <p class="hh"><b>Office Timing</b></p>
                        <p class="hh-desc">10:00 AM – 4:00 PM</p>
                    </div>
                    <div class="col-md-3 loc">
                        <h4>Location</h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3891.879392480462!2d78.6654145913937!3d12.72129024771156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad078cd3fb9cab%3A0xbd80354333de6ecd!2sWisdom%20Park%20International%20School!5e0!3m2!1sen!2sin!4v1778749344530!5m2!1sen!2sin"
                            width="300" height="200" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="contact-box">
                <div class="row">
                <div class="col-md-4">
                    <div class="row icon-box ">
                        <div class="col-md-3 contact-icon">
                            <i class="bi bi-geo-alt-fill icon"></i>
                        </div>
                        <div class="col-md-6">
                            <h3 class="contact-box-title">Address</h5>
                            <h5 class="contact-box-description">Chengilikuppam, NH 48, Ambur, Tirupathur (Dt).</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row icon-box ">
                        <div class="col-md-3 contact-icon">
                            <i class="bi bi-envelope-fill icon"></i>
                        </div>
                        <div class="col-md-6">
                            <h3 class="contact-box-title">Email</h3>
                            <h5 class="contact-box-description"><a href="mailto:office@wisdomparkschool.com">office@wisdomparkschool.com</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row icon-box ">
                        <div class="col-md-3 contact-icon">
                            <i class="bi bi-telephone-fill icon"></i>
                        </div>
                        <div class="col-md-6">
                            <h3 class="contact-box-title">Support us</h3>
                            <h5 class="contact-box-description">
                                <a href="tel:+917639651222">+91 7639651222</a><br>
                                <a href="tel:+919513332152">+91 9513332152</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="row copy">
                <p>Copyright &copy; 2026 Wisdom Park International School.</p>
            </div>
        </div>
    </section>

    <div class="fix">
        <ul>
            <li><a href="https://www.facebook.com/WisdomParkSchool/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/wisdomparkintlschool/" target="_blank"><i
                        class="fa fa-instagram"></i></a></li>
            <li><a href="https://wa.me/+917639651222/?text=Hi.Enquiry-for-Wisdom-park" target="_blank" id="wh"
                    title="Whatsapp Chat"><i class="fa fa-whatsapp"></i></a></li>
            <li><a href="https://www.youtube.com/@wisdomparkinternationalsch3974" target="_blank"><i
                        class="fa fa-youtube"></i></a></li>
        </ul>
    </div>
    EOT;
}
?>