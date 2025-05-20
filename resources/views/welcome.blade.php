<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/favicon.png">
    <title>Personal Portfolio </title>

   @include('layouts.css')

</head>

<body>

    <!-- loader -->
    @include('layouts.loader')
    <!-- loader -->

    <!-- header -->
    @include('layouts.header')
    <!-- end header -->

    <!-- about -->
    <div id="about" class="about segments">
        <div class="container">
            <div class="box-content">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="content-left">
                            <div class="section-title section-title-left">
                                <h3>About Me</h3>
                            </div>
                            <div class="content">
                                <h2>I am a Laravel Developer</h2>
                                <p>I am Awantika Kumari, a passionate Full Stack Laravel Developer currently pursuing a B.Tech in Computer Science at Budge Budge Institute of Technology. With strong expertise in Laravel, MySQL, JavaScript, HTML, CSS, and React, I build dynamic and scalable web applications. I have developed several projects, including an E-commerce website, a Tic-Tac-Toe game, and a Student Attendance Management System using fingerprint recognition. My work spans both frontend and backend development, ensuring seamless user experiences and robust functionality. I enjoy turning ideas into real-world applications and continuously strive to grow as a developer by learning new technologies and improving my skills.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="content-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <!-- resume -->
    <div id="resume" class="resume segments">
        <div class="container">
            <div class="box-content">
                <div class="section-title">
                    <h3>My Resume</h3>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="content">
                        <!-- my experience -->
                        <div class="row ">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="content-left">
                                    <div class="title-resume">
                                        <h3>Experience</h3>
                                        <h2>3 Months internships experience as a <span>Software Developer</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="content-right">
                                    <ul class="timeline">
                                        <li>
                                            <h4>Digital Startups</h4>
                                            <span>Software Developer (Feb 2025 - May 2025)</span>
                                        </li>
                                        {{-- <li>
                                            <h4>Animate Studio</h4>
                                            <span>Graphic Designer (2015 - 2017)</span>
                                        </li>
                                        <li>
                                            <h4>Cute Studio</h4>
                                            <span>Graphic Designer (2014 - 2015)</span>
                                        </li>
                                        <li>
                                            <h4>City Printing</h4>
                                            <span>Graphic Designer (2013 - 2014)</span>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end my experience -->
                    </div>
                    <div class="content">
                        <!-- my education -->
                        <div class="row ">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="content-left">
                                    <div class="title-resume">
                                        <h3>Education</h3>
                                        <h2>Educational journey through a few <span>Prestigious Institutions</span></h2>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="content-right">
                                    <ul class="timeline">
                                        <li>
                                            <h4>Budge Budge Institute of Technology</h4>
                                            <span>Computer Science & Engineering (2021 - 2025)</span>
                                        </li>
                                        <li>
                                            <h4>Holy Cross school, Balidih</h4>
                                            <span>Intermediate with Science (2019 - 2021)</span>
                                        </li>
                                        <li>
                                            <h4>Sardar Patel Public School B.S.City, Bokaro</h4>
                                            <span>10th (2018 - 2019)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end my education -->
                    </div>
                    <div class="content">
                        <!-- my skill -->
                        <div class="my-skill">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="content-left">
                                        <div class="title-resume">
                                            <h3>Skills</h3>
                                            <h2>Equipped with strong <span>Technical</span> and <span>Soft Skills</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="content-right">
                                        <div id="accordionSkill" class="accordion">
                                            <div class="card">
                                                <div id="personalSkill" class="card-header">
                                                    <h2>
                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                            <i class="fas fa-circle"></i>Soft Skills
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse1" class="collapse collapse-show" aria-labelledby="personalSkill" data-parent="#accordionSkill">
                                                    <div class="card-body">
                                                        <ul class="personalSkill">
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>Problem Solving</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>Communication</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>Team Collaboration</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>Adaptability</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div id="proSkill" class="card-header">
                                                    <h2>
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                            <i class="fas fa-circle"></i>Technical Skills
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapse2" class="collapse" aria-labelledby="proSkill" data-parent="#accordionSkill">
                                                    <div class="card-body">
                                                        <ul class="pro-skill">
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>Laravel</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>MySQL</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>HTML & CSS</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>JavaScript</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>React</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="skill-title">
                                                                    <span>PHP</span>
                                                                </div>
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end my skill -->
                    </div>

                </div>                
            </div>
        </div>
    </div>
    <!-- end resume -->

    <!-- portfolio -->
    <div id="portfolio" class="portfolio segments">
        <div class="container">
            <div class="box-content">
                <div class="section-title">
                    <h3>My Projects</h3>
                </div>
                {{-- <div class="portfolio-filter-menu">
                    <ul>
                        <li data-filter="all" class="active">
                            <span>See All</span>
                        </li>
                        <li data-filter="1">
                            <span>House Plant</span>
                        </li>
                        <li data-filter="2">
                            <span>Flowers</span>
                        </li>
                        <li data-filter="3">
                            <span>Photography</span>
                        </li>
                    </ul>
                </div> --}}

                <div class="row no-gutters filtr-container">
                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="3">
                        <div class="content-image">
                            <a href="images/portfolio1.png" class="portfolio-popup">
                                <img src="images/portfolio1.png" alt="">
                                <div class="image-overlay"></div>
                                <div class="portfolio-caption">
                                    <div class="title">
                                        <h4>Hotel Management Website</h4>
                                    </div>
                                    <div class="subtitle">
                                        <span>HTML, CSS, JavaScript, laravel, mysql</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="1">
                        <div class="content-image">
                            <a href="images/portfolio2.png" class="portfolio-popup">
                                <img src="images/portfolio2.png" alt="">
                                <div class="image-overlay"></div>
                                <div class="portfolio-caption">
                                    <div class="title">
                                        <h4>Terravita website</h4>
                                    </div>
                                    <div class="subtitle">
                                        <span>HTML, CSS, JavaScript, Tailwind</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="2, 1">
                        <div class="content-image">
                            <a href="images/portfolio3.png" class="portfolio-popup">
                                <img src="images/portfolio3.png" alt="">
                                <div class="image-overlay"></div>
                                <div class="portfolio-caption">
                                    <div class="title">
                                        <h4>Hill Cab</h4>
                                    </div>
                                    <div class="subtitle">
                                        <span>HTML, CSS, JavaScript</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="3">
                        <div class="content-image">
                            <a href="images/portfolio4.png" class="portfolio-popup">
                                <img src="images/portfolio4.png" alt="">
                                <div class="image-overlay"></div>
                                <div class="portfolio-caption">
                                    <div class="title">
                                        <h4>Tic Tac Toe</h4>
                                    </div>
                                    <div class="subtitle">
                                        <span>HTML, CSS, JavaScript</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="1, 2">
                        <div class="content-image">
                            <a href="images/portfolio5.png" class="portfolio-popup">
                                <img src="images/portfolio5.png" alt="">
                                <div class="image-overlay"></div>
                                <div class="portfolio-caption">
                                    <div class="title">
                                        <h4>Boutique Fashion Website</h4>
                                    </div>
                                    <div class="subtitle">
                                        <span>HTML, CSS, JavaScript</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 filtr-item" data-category="3, 1">
                        <div class="content-image">
                            <a href="images/portfolio6.png" class="portfolio-popup">
                                <img src="images/portfolio6.png" alt="">
                                <div class="image-overlay"></div>
                                <div class="portfolio-caption">
                                    <div class="title">
                                        <h4>Password Generator</h4>
                                    </div>
                                    <div class="subtitle">
                                        <span>HTML, CSS, JavaScript</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end portfolio -->

    <!-- blog -->
    <div id="certifications" class="certifications segments">
    <div class="container">
        <div class="section-title">
            <h3>My Certifications</h3>
        </div>
        <div class="row">
            <div class="col-md-6"  style="width:40%;">
                <div class="content">
                    <div class="image">
                        <img src="images/cert1.png" alt="Laravel Certification" style="width:100%;">
                    </div>
                    <div class="blog-title">
                        <h4><a href="#">Introduction to Front-End Development</a></h4>
                        <div class="date">
                            March 12, 2024 <i class="fas fa-circle"></i> <a href="#"><span>Introduction to Frontend Development</span></a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="image">
                        <img src="images/cert3.png" alt="Laravel Certification" style="width:100%;">
                    </div>
                    <div class="blog-title">
                        <h4><a href="#">HTML and CSS in depth</a></h4>
                        <div class="date">
                            March 12, 2024 <i class="fas fa-circle"></i> <a href="#"><span>Html, Css in Depth</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="width:40%;">
                <div class="content no-mb">
                    <div class="image">
                        <img src="images/cert22.png" alt="JavaScript Certification" style="width:100%;">
                    </div>
                    <div class="blog-title">
                        <h4><a href="#">Software Development Internship</a></h4>
                        <div class="date">
                            February 8, 2022 <i class="fas fa-circle"></i> <a href="#"><span>Software Development</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- end blog -->

    <!-- contact -->
    <div id="contact" class="contact segments">
        <div class="container">
            <div class="box-content">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="content-left">
                            <div class="section-title section-title-left">
                                <h3>Contact Me</h3>
                            </div>
                            <h2>Realize your dream with us</h2>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="content-right">
                            <form action="#" class="contact-form" id="contact-form" method="post">
                                <div class="row">
                                    <div class="col">
                                        <div id="first-name-field">
                                            <input type="text" placeholder="First Name" class="form-control" name="form-name">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div id="last-name-field">
                                            <input type="text" placeholder="Last Name" class="form-control" name="form-name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div id="email-field">
                                            <input type="email" placeholder="Email Address" class="form-control" name="form-email">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div id="subject-field">
                                            <input type="text" placeholder="Subject" class="form-control" name="form-subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div id="message-field">
                                            <textarea cols="30" rows="5" class="form-control" id="form-message" name="form-message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="button" type="submit" id="submit" name="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- footer -->
    @include('layouts.footer')
    <!-- end footer -->

    
    @include('layouts.js')

</body>

</html>