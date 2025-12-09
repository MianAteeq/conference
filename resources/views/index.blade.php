<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<style>
    .events-section-title h2 {
    font-size: 2rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #222;
}

.sponsors h3 {
    font-size: 1.2rem;
    margin-bottom: 15px;
    color: #333;
}

.partner-box {
    width: 70%;
    margin: 0 auto;
    transition: transform 0.3s ease;
}

.partner-box:hover {
    transform: scale(1.05);
}

.partner-logo {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
}

.white-bg {
    background: #fff;
    padding: 6px;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Responsive Adjustments */
@media (max-width: 992px) {
    .partner-box {
        width: 80%;
    }
}

@media (max-width: 768px) {
    .events-section-title h2 {
        font-size: 1.6rem;
    }

    .sponsors h3 {
        font-size: 1.1rem;
    }

    .partner-box {
        width: 85%;
    }
    .navbar-brand>img{
        width:230px!important;
    }
}
@media (min-width: 1200px) {
    .container {
        width: 1200px;
    }
}

.event-schedules .tab-list li {
    width: 24.33%;
    float: left;
    padding-right: 16px;
}
.event-schedules .tab-list li span {
    text-transform: uppercase;
    color: #000;
    font-size: 14px;
}
</style>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper" id="home">

        <!-- start preloader -->
        <div class="preloader">
            <div>
                <img src="/assets/logo.gif" alt>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header class="events-header">
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="https://conference.fissionmonster.com/final_logo.png" alt
                                class="img img-responsive" style="width: 280px;"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <!--<li><a href="#speakers">Speakers</a></li>-->
                            <li><a href="#schedules">Schedules</a></li>
                            <li><a href="#ticket">Register</a></li>
                            <li><a href="#quiz">Student Competitions</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start of hero -->
        <section class="hero parallax events-hero" data-bg-image="/assets/images/events/hero-bg.jpg">
            <div class="hero-title">
                <span>Dec 26 - 28 . Expo Center, Lahore 2025</span>
                <h1>PDA International Conference</h1>
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/profile.php?id=61581195661341&sk=reels_tab"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a
                            href="https://www.linkedin.com/posts/pda-conference-06b76b388_pdaconference25-dentalconference-pakistandentalassociation-activity-7379932139036860416-JDoi?utm_source=share&utm_medium=member_android&rcm=ACoAADXc-X4BSCHfeBanwTZ_yNBcgem7Qtnhxh4">
                            <i class="fa fa-linkedin"></i></a></li>
                    <li><a
                            href="https://www.instagram.com/pdaconference?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D"><i
                                class="fa fa-instagram"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=923334214214"><i class="fa fa-whatsapp"></i></a>
                    </li>

                </ul>
                <img src="https://conference.fissionmonster.com/logo_white.png" alt="" class="img img-responsive" style="text-align: center;margin: 0 auto;width: 50%;">
            </div>
        </section>
        <!-- end of hero -->


        <!-- start events-about -->
        <section class="events-about section-padding" id="about">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 col-lg-offset-1">
                        <div class="row">
                            <div class="col col-md-5 left-col">
                                <div class="img-holder">
                                    <img src="/assets/images/events/about.jpg" alt class="img img-responsive">

                                    <div class="date">
                                        <span>26-28</span> Dec '2025
                                    </div>
                                </div>
                            </div>

                            <div class="col col-md-7 right-col">
                                <div class="title">
                                    <span>Pakistan Dental Association presents</span>
                                    <h2>PDA International Dental Conference 2025</h2>
                                </div>
                                <div class="details">
                                    <p>
                                        Join us for Pakistan’s largest dental gathering at <strong>Expo Center,
                                            Lahore</strong> from
                                        <strong>26–28 December 2025</strong>. Experience three days of cutting-edge
                                        research, live workshops,
                                        scientific sessions, and networking with global dental experts.
                                    </p>
                                    <p>
                                        Discover the future of dentistry through innovation, technology, and
                                        collaboration —
                                        all under one roof. Don’t miss this opportunity to connect with leaders shaping
                                        modern dentistry.
                                    </p>
                                    <div class="btns">
                                        <a href="{{ route('register.page') }}" class="btn events-theme-btn-red">Register Now</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end events-about -->


        <!-- start event-speakers -->
        <section class="event-speakers section-padding" id="speakers"  style="display:none;">
            <div class="container">
                <div class="row events-section-title">
                    <h2>Event speakers</h2>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-md-5 left-col">
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/assets/images/events/speakers/img-1.jpg" alt class="img img-responsive">
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Hasib sharif</h3>
                                <span>Keynote speaker</span>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-7 right-col">
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/assets/images/events/speakers/img-2.jpg" alt class="img img-responsive">
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Hasib sharif</h3>
                                <span>Keynote speaker</span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/assets/images/events/speakers/img-3.jpg" alt
                                        class="img img-responsive">
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Hasib sharif</h3>
                                <span>Keynote speaker</span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/assets/images/events/speakers/img-4.jpg" alt
                                        class="img img-responsive">
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Hasib sharif</h3>
                                <span>Keynote speaker</span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/assets/images/events/speakers/img-5.jpg" alt
                                        class="img img-responsive">
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Hasib sharif</h3>
                                <span>Keynote speaker</span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/assets/images/events/speakers/img-6.jpg" alt
                                        class="img img-responsive">
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Hasib sharif</h3>
                                <span>Keynote speaker</span>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-holder-social">
                                <div class="img-holder">
                                    <img src="/assets/images/events/speakers/img-7.jpg" alt
                                        class="img img-responsive">
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <h3>Hasib sharif</h3>
                                <span>Keynote speaker</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end event-speakers -->


        <!-- start event-schedules -->
        <section class="event-schedules section-padding" id="schedules">
    <div class="container">
        <div class="row events-section-title">
            <h2>Event Schedules</h2>
        </div> <!-- end section-title -->

        <div class="row">
            <div class="col col-xs-12">
                <div class="event-schedules-content">
                    <ul class="tab-list">
                        <li class="active">
                            <a href="#tab-pre" data-toggle="tab">
                                <span>Pre-Conference Plenary </span>
                                <h4>Dec 21</h4>
                            </a>
                        </li>
                       
                        <li class="">
                            <a href="#tab-1" data-toggle="tab">
                                <span>Day 01</span>
                                <h4>Dec 26</h4>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-2" data-toggle="tab">
                                <span>Day 02</span>
                                <h4>Dec 27</h4>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-3" data-toggle="tab">
                                <span>Day 03</span>
                                <h4>Dec 28</h4>
                            </a>
                        </li>
                    </ul>

                  <div class="tab-content">

<!-- ========================================================= -->
<!-- ====================  DAY 1 — DEC 26  ==================== -->
<!-- ========================================================= -->

<div class="tab-pane fade in active" id="tab-pre">
<div class="event">
        <div class="sidebar">
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-clock-o"></i></span>
                    <div class="info">
                        <ul><li>Time</li><li>11:00 - 13:00</li></ul>
                    </div>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-map-marker"></i></span>
                    <div class="info">
                        <ul><li>Location</li><li>Expo Center</li></ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="event-details">
            <h3>Pre-Conference Plenary</h3>

            <ul class="talk-list">

                <li>
                    <strong>Complications of Fixed Prosthodontics</strong><br>
                    <span class="speaker">Dr. Mohsin Ali</span><br>
                    <span class="time">11:00 – 11:30</span>
                </li>

               

            </ul>
        </div>
    </div>

</div>
<div class="tab-pane fade in " id="tab-1">

    <!-- Opening Plenary -->
    <div class="event">
        <div class="sidebar">
            <ul>
                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                    <div class="info"><ul><li>Time</li><li>14:30 - 16:00</li></ul></div>
                </li>
                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                    <div class="info"><ul><li>Location</li><li>Hall A</li></ul></div>
                </li>
            </ul>
        </div>

        <div class="event-details">
            <h3>Conference Opening Plenary</h3>
            <ul class="talk-list">
                <li>
                    <strong>Opening Session</strong><br>
                    <span class="speaker">Dr. Mohsin Chaudhry</span>
                </li>
                <li>
                    <strong>Differential Diagnosis in Orofacial Pain: A Patient-Centered Approach</strong><br>
                    <span class="speaker">Dr. Hamad Al Balgeah</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Opening Ceremony -->
    <div class="event">
        <div class="sidebar">
            <ul>
                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                    <div class="info"><ul><li>Time</li><li>16:00 - 17:00</li></ul></div>
                </li>
                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                    <div class="info"><ul><li>Location</li><li>Hall A</li></ul></div>
                </li>
            </ul>
        </div>
        <div class="event-details">
            <h3>Opening Ceremony</h3>
        </div>
    </div>

</div>

<!-- ========================================================= -->
<!-- ====================  DAY 2 — DEC 27  ==================== -->
<!-- ========================================================= -->

<div class="tab-pane fade" id="tab-2">

    <!-- Hall A — General Dentistry I -->
    <div class="event">
        <div class="sidebar">
            <ul>
                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                    <div class="info"><ul><li>Time</li><li>10:00 - 12:00</li></ul></div>
                </li>
                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                    <div class="info"><ul><li>Location</li><li>Hall A</li></ul></div>
                </li>
            </ul>
        </div>

        <div class="event-details">
            <h3>General Dentistry Session I</h3>
            <ul class="talk-list">
                <li><strong>An overview of endodontics for general practitioners</strong><br><span class="speaker">Dr. Shahid Mehmood</span></li>
                <li><strong>Managing endodontic emergencies</strong><br><span class="speaker">Dr. Rubab Sherazi</span></li>
                <li><strong>Latest methods of BDRs removal</strong><br><span class="speaker">Dr. Arshad Malik</span></li>
                <li><strong>Separated file removal — Myths & Misconceptions</strong><br><span class="speaker">Dr. Arshad Hassan</span></li>
                <li><strong>Anatomical Variations of Second Molars</strong><br><span class="speaker">Dr. Irfan Maqbool</span></li>
                <li><strong>Digital Guided Implant Placement</strong><br><span class="speaker">Dr. Kashif Hafeez</span></li>
                <li><strong>Body–Mouth Connection: Periodontitis & Systemic Health</strong><br><span class="speaker">Dr. Kashif Ikram</span></li>
            </ul>
        </div>
    </div>

    <!-- Hall A — General Dentistry II -->
    <div class="event">
        <div class="sidebar">
            <ul>
                <li><span class="icon"><i class="fa fa-clock-o"></i></span>
                    <div class="info"><ul><li>Time</li><li>12:00 - 13:00</li></ul></div>
                </li>
                <li><span class="icon"><i class="fa fa-map-marker"></i></span>
                    <div class="info"><ul><li>Location</li><li>Hall A</li></ul></div>
                </li>
            </ul>
        </div>

        <div class="event-details">
            <h3>General Dentistry Session II</h3>
            <ul class="talk-list">
                <li><strong>Digital era in paediatric dentistry</strong><br><span class="speaker">Dr. Miraat Anser</span></li>
                <li><strong>Pediatric dentistry — 30 years on</strong><br><span class="speaker">Dr. Noeen Arshad</span></li>
                <li><strong>Contemporary Bonded Restorations</strong><br><span class="speaker">Dr. Salman Ashraf</span></li>
                <li><strong>Dental Ceramics — Aesthetic & Functional Demands</strong><br><span class="speaker">Dr. Rashid Habib</span></li>
            </ul>
        </div>
    </div>

    <!-- Lunch -->
    <div class="event">
        <div class="sidebar"><ul>
            <li><span class="icon"><i class="fa fa-clock-o"></i></span><div class="info"><ul><li>13:00 - 14:00</li></ul></div></li>
            <li><span class="icon"><i class="fa fa-map-marker"></i></span><div class="info"><ul><li>Expo Center</li></ul></div></li>
        </ul></div>
        <div class="event-details"><h3>Lunch & Prayer Break</h3></div>
    </div>

    <!-- Hall A — General Dentistry III -->
    <div class="event">
        <div class="sidebar"><ul>
            <li><span class="icon"><i class="fa fa-clock-o"></i></span><div class="info"><ul><li>14:00 - 17:00</li></ul></div></li>
            <li><span class="icon"><i class="fa fa-map-marker"></i></span><div class="info"><ul><li>Hall A</li></ul></div></li>
        </ul></div>

        <div class="event-details">
            <h3>General Dentistry Session III</h3>
            <ul class="talk-list">
                <li><strong>Maxillofacial Surgery — Lessons from Each Fall</strong><br><span class="speaker">Dr. Jawad Kundi</span></li>
                <li><strong>Lecture</strong><br><span class="speaker">Ghulam Rasool</span></li>
                <li><strong>Lecture</strong><br><span class="speaker">Irfan Qureshi</span></li>
                <li><strong>Lecture</strong><br><span class="speaker">Tariq Ali Khan</span></li>
                <li><strong>Retainers & Inadvertent Movements</strong><br><span class="speaker">Dr. M. Azeem</span></li>
            </ul>
        </div>
    </div>

</div>

<!-- ========================================================= -->
<!-- ====================  DAY 3 — DEC 28  ==================== -->
<!-- ========================================================= -->

<div class="tab-pane fade" id="tab-3">

    <!-- Hall A — General Dentistry III -->
    <div class="event">
        <div class="sidebar"><ul>
            <li><span class="icon"><i class="fa fa-clock-o"></i></span><div class="info"><ul><li>10:00 - 12:00</li></ul></div></li>
            <li><span class="icon"><i class="fa fa-map-marker"></i></span><div class="info"><ul><li>Hall A</li></ul></div></li>
        </ul></div>

        <div class="event-details">
            <h3>General Dentistry Session III</h3>
            <ul class="talk-list">
                <li><strong>Oral Health Care for Marginalized Communities</strong><br><span class="speaker">Dr. Ambrina Qureshi</span></li>
                <li><strong>The Smart Side of Forensic Dentistry</strong><br><span class="speaker">Dr. Samiya Riaz</span></li>
                <li><strong>Laser Dentistry in Everyday Practice</strong><br><span class="speaker">Dr. Waqas J. Malik</span></li>
                <li><strong>ABC Smile Makeover</strong><br><span class="speaker">Dr. Affan Saghir</span></li>
                <li><strong>The Role of GDPs in Patient Care</strong><br><span class="speaker">Dr. Rashid Mehmood</span></li>
                <li><strong>Running a Dental Practice</strong><br><span class="speaker">Dr. Sarooj Hanan</span></li>
                <li><strong>Digital Marketing for Dental Professionals</strong><br><span class="speaker">Badar Khushnood</span></li>
            </ul>
        </div>
    </div>

    <!-- Hall B — Student Session I (Oral Presentations) -->
    <div class="event">
        <div class="sidebar"><ul>
            <li><span class="icon"><i class="fa fa-clock-o"></i></span><div class="info"><ul><li>10:00 - 11:00</li></ul></div></li>
            <li><span class="icon"><i class="fa fa-map-marker"></i></span><div class="info"><ul><li>Hall B</li></ul></div></li>
        </ul></div>

        <div class="event-details">
            <h3>Student Session I – Oral Presentations</h3>
            <ul class="talk-list">
                <li><strong>Oral Presentation 1</strong><br><span class="speaker">Student Speaker</span></li>
                <li><strong>Oral Presentation 2</strong><br><span class="speaker">Student Speaker</span></li>
                <li><strong>Oral Presentation 3</strong><br><span class="speaker">Student Speaker</span></li>
                <li><strong>Oral Presentation 4</strong><br><span class="speaker">Student Speaker</span></li>
                <li><strong>Oral Presentation 5</strong><br><span class="speaker">Student Speaker</span></li>
                <li><strong>Oral Presentation 6</strong><br><span class="speaker">Student Speaker</span></li>
            </ul>
        </div>
    </div>

    <!-- Hall B — Operative Dentistry & Endodontics -->
    <div class="event">
        <div class="sidebar"><ul>
            <li><span class="icon"><i class="fa fa-clock-o"></i></span><div class="info"><ul><li>11:00 - 13:00</li></ul></div></li>
            <li><span class="icon"><i class="fa fa-map-marker"></i></span><div class="info"><ul><li>Hall B</li></ul></div></li>
        </ul></div>

        <div class="event-details">
            <h3>Specialty Session V – Operative Dentistry & Endodontics</h3>
            <ul class="talk-list">
                <li><strong>Microscope Visualization & CBCT in Maxillary Molar Management</strong><br><span class="speaker">Dr. Usman S. Fazli</span></li>
                <li><strong>Mobile Dental Photography, Composites & Marketing</strong><br><span class="speaker">Dr. Jazib Memon</span></li>
                <li><strong>Innovations in Operative Dentistry & Endodontics</strong><br><span class="speaker">Dr. Fariha Naz</span></li>
                <li><strong>Navigating Iatrogenic Errors</strong><br><span class="speaker">Dr. Asfand Ali Khan</span></li>
            </ul>
        </div>
    </div>

    <!-- Lunch -->
    <div class="event">
        <div class="sidebar"><ul>
            <li><span class="icon"><i class="fa fa-clock-o"></i></span><div class="info"><ul><li>13:00 - 14:00</li></ul></div></li>
            <li><span class="icon"><i class="fa fa-map-marker"></i></span><div class="info"><ul><li>Expo Center</li></ul></div></li>
        </ul></div>
        <div class="event-details">
            <h3>Lunch & Prayer Break</h3>
        </div>
    </div>

    <!-- UG Quiz -->
    <div class="event">
        <div class="sidebar"><ul>
            <li><span class="icon"><i class="fa fa-clock-o"></i></span><div class="info"><ul><li>14:00 - 15:30</li></ul></div></li>
            <li><span class="icon"><i class="fa fa-map-marker"></i></span><div class="info"><ul><li>Hall A</li></ul></div></li>
        </ul></div>

        <div class="event-details">
            <h3>UG Quiz Competition (Final Round)</h3>
        </div>
    </div>

    <!-- Closing Ceremony -->
    <div class="event">
        <div class="sidebar"><ul>
            <li><span class="icon"><i class="fa fa-clock-o"></i></span><div class="info"><ul><li>15:30 - 17:00</li></ul></div></li>
            <li><span class="icon"><i class="fa fa-map-marker"></i></span><div class="info"><ul><li>Hall A</li></ul></div></li>
        </ul></div>

        <div class="event-details">
            <h3>Award Distribution & Closing Ceremony</h3>
        </div>
    </div>

</div>

</div>


 
                    <!-- end tab-content -->
                </div> <!-- end event-schedules-content -->
            </div>
        </div>
    </div>
</section>

        <!-- end event-schedules -->
         <section class="about about-s2 section-padding" id="quiz">
            <div class="container">
               <div class="row section-title-s2">
                  <h2 style="text-align: justify;line-height: 1.5;">Student Competitions</h2>
               </div>
               <!-- end section-title --> 
               <div class="row">
                  <div class="col col-md-12">
                     <div class="about-content-wrapper">
                        <ul>
                           <li class="active"><a href="#overview" data-toggle="tab" aria-expanded="false">Overview</a></li>
                           <li class=""><a href="#poster" data-toggle="tab" aria-expanded="false">Guidelines for Poster Competition</a></li>
                           <li class=""><a href="#oral" data-toggle="tab" aria-expanded="false">Guidelines for Oral Presentations</a></li>
                           <li class=""><a href="#undergraduate" data-toggle="tab" aria-expanded="true">Guidelines for Undergraduate Table Clinic Presentations</a></li>
                           <li class=""><a href="#undergraduate_quiz" data-toggle="tab" aria-expanded="true">Guidelines for Undergraduate Quiz Competition</a></li>
                        </ul>
                        <!-- Tab panes --> 
                        <div class="tab-content about-content">
                           <div class="tab-pane fade active in" id="overview">
                              <h2 style="text-align: justify;">Themes for Competitions</h2>
                              <p style="text-align: justify;">&nbsp;</p>
                              <p style="text-align: justify;"><strong> All themes relevant to General Dental Practice and community oral healthcare</strong> starting from managing and working in a dental clinic to prevention, communication, diagnosis, management and follow up care both for adult and paediatric patients also encompassing emergencies, ethics, professionalism, and role of aesthetics and digital technology in delivering personalized human centered holistic oral healthcare.
                              <br/>
                              📆 Submission Deadline: 15th December
                              <br/>
                              📩 Submit via Email: saimachaudhry@iadsr.edu.pk</p>
                           </div>
                           <div class="tab-pane fade" id="poster">
                               <h2 style="text-align: justify;line-height: 1.5;"><span style="color: #000000;">Guidelines for Poster Competition</span></h2>
                              <h3><span style="color: #000000;">Eligibility and Registration</span></h3>
                              <ul>
                                 <li><span style="color: #000000;"><strong>Student Status:</strong> Participants must be currently enrolled as <strong>undergraduate or postgraduate dental students</strong> at a recognized institution.</span></li>
                                 <li><span style="color: #000000;"><strong>Abstract Acceptance:</strong> Participation in the poster competition is subject to the <strong>prior acceptance of a submitted abstract</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Conference Registration:</strong> All presenting authors and team members must be <strong>registered for the conference</strong> by the specified deadline.</span></li>
                                 <li><span style="color: #000000;"><strong>Team Size:</strong> A team may comprise a <strong>maximum of 2-4 members</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Poster Content:</strong> The poster must present recent trends in any area of dentistry. The posters based on research and those based on case reports are encouraged. Case reports should outline the unique features and special interest of the case.</span></li>
                              </ul>
                              <h3><span style="color: #000000;">Content and Structure</span></h3>
                              <p><span style="color: #000000;">The poster should be a visual presentation of your accepted abstract and include the following mandatory sections:</span></p>
                              <ul>
                                 <li><span style="color: #000000;"><strong>Title:</strong> Must be identical to the accepted abstract title.</span></li>
                                 <li><span style="color: #000000;"><strong>Authors &amp; Affiliation:</strong> Full names of all authors, their respective departments, faculty, and institution(s).</span></li>
                                 <li><span style="color: #000000;"><strong>Introduction/Background:</strong> A brief background followed by a clear statement of the <strong>problem</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Methods:</strong> A concise discussion of the data sources, materials, techniques, data collection, and statistical methods used, whichever is applicable to the poster.</span></li>
                                 <li><span style="color: #000000;"><strong>Results:</strong> Clear presentation of the findings using <strong>easy-to-read tables and graphs</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Conclusion:</strong> A summary of significance of the take home messages.</span></li>
                                 <li><span style="color: #000000;"><strong>Keywords:</strong> A short list (usually 3-6) of key terms.</span></li>
                                 <li><span style="color: #000000;"><strong>Main References:</strong> A brief list of primary sources (often using the <strong>Vancouver style</strong>).</span></li>
                              </ul>
                              <h3><span style="color: #000000;">Format and Design</span></h3>
                              <table width="588">
                                 <thead>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Aspect</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;"><strong>Recommendation/Standard</strong></span></p>
                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Language</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;">Posters must be in <strong>English</strong>.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Dimensions</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;"><strong>Vertical/Portrait</strong> format (36 x 48 Inches)</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Layout</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;">The material must be organized into logical sections with clear headings to guide the viewer.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Readability</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;"><strong>Font Size:</strong> Text must be clearly legible from a distance of at least 5-6 feet. Headings can be up to 40pt, and body text should not be less than 24pt.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Visuals</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;">Use high-resolution photographs, graphs, and charts. Avoid humorous or inappropriate pictures.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Word Count</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;">Keep text concise. A total word count of <strong>800-1000 words or less</strong> is ideal for a poster.</span></p>
                                       </td>
                                    </tr>
                                    
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Printing</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;">The poster will be presented as e-poster. There is no need to print it.</span></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h3><span style="color: #000000;">Presentation and Judging</span></h3>
                              <ul>
                                 <li><span style="color: #000000;"><strong>Display Time:</strong> The poster must be displayed on the assigned board for the duration specified by the organizers.</span></li>
                                 <li><span style="color: #000000;"><strong>Presentation Time:</strong> The presenting author is required to be present at their poster board within 7 minutes. .</span></li>
                                 <li><span style="color: #000000;"><strong>Knowledge:</strong> You must be knowledgeable in your subject and ready to defend your findings and methodology.</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Judging Criteria:</strong> Judging is typically based on:<br /></span> 
                                    <ul>
                                       <li><span style="color: #000000;"><strong>Scientific Merit/Accuracy</strong> of the content.</span></li>
                                       <li><span style="color: #000000;"><strong>Originality and Relevance</strong> to dental science.</span></li>
                                       <li><span style="color: #000000;"><strong>Clarity and Organization</strong> of the poster layout.</span></li>
                                       <li><span style="color: #000000;"><strong>Quality of Discussion</strong> and response to judges' questions.</span></li>
                                    </ul>
                                 </li>
                                 <li><span style="color: #000000;"><strong>Decision:</strong> The decision of the judging panel will be</span> <strong>final</strong>.</li>
                              </ul>
                           </div>
                           <div class="tab-pane fade" id="oral">
                               <h2 style="text-align: justify;line-height: 1.5;"><span style="color: #000000;">Guidelines for Oral Presentations</span></h2>
                              <p><span style="color: #000000;">The Oral Presentations will be purely Research Based</span></p>
                              <h3><span style="color: #000000;">Eligibility and Registration</span></h3>
                              <ul>
                                 <li><span style="color: #000000;"><strong>Student Status:</strong> Participants must be currently enrolled as <strong>undergraduate or postgraduate dental students</strong> at a recognized institution.</span></li>
                                 <li><span style="color: #000000;"><strong>Abstract Acceptance:</strong> Participation in the poster competition is subject to the <strong>prior acceptance of a submitted abstract</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Conference Registration:</strong> All presenting authors and team members must be <strong>registered for the conference</strong> by the specified deadline.</span></li>
                                 <li><span style="color: #000000;"><strong>Presenting Author:</strong> A research team may comprise of multiple members but there can be just on presenting author.</span></li>
                              </ul>
                              <p><span style="color: #000000;">&nbsp;</span></p>
                              <h3><span style="color: #000000;">Presentation Logistics</span></h3>
                              <table width="598">
                                 <thead>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;">Aspect</span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">Standard Rule/Recommendation</span></p>
                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;"><strong>Duration</strong></span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">Typically <strong>7-8 minutes</strong> for presentation, followed by <strong>2-3 minutes</strong> for Q&amp;A from the judges/audience. <em>Strict adherence to time is mandatory.</em></span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;"><strong>Language</strong></span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">The presentation must be delivered in <strong>English</strong>.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;"><strong>Format</strong></span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">Use <strong>Microsoft PowerPoint (.pptx)</strong> format. <strong>Pre-uploading</strong> the presentation file is usually required before the session day.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;"><strong>Technical Setup</strong></span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">The conference generally provides a <strong>laptop</strong>, LCD projector, and a <strong>lapel/lavalier microphone</strong>. <strong>Presenters are usually NOT allowed to use personal laptops</strong> to avoid technical delays.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;"><strong>Attendance</strong></span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">The presenting author must be present in the session room <strong>at least 15 minutes before</strong> the session starts to check their slides and connect with the session chair.</span></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h3><span style="color: #000000;">Slide Content and Structure</span></h3>
                              <p><span style="color: #000000;">The presentation should be a visual and oral delivery of your accepted abstract and is typically structured as follows:</span></p>
                              <ol>
                                 <li><span style="color: #000000;"><strong>Title Slide:</strong> Title of the study, full names of all authors, their respective departments, faculty, and institution(s). Include any required <strong>conflict-of-interest disclosures</strong> on this slide or a dedicated subsequent slide.</span></li>
                                 <li><span style="color: #000000;"><strong>Introduction/Background (1-2 slides):</strong> Briefly establish the clinical/scientific context and clearly state the <strong>research question, aim, or hypothesis</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Materials and Methods (2-3 slides):</strong> Detail the study design, materials, participants/samples, data collection procedure, and statistical analysis used. Use simple diagrams or flowcharts if complex.</span></li>
                                 <li><span style="color: #000000;"><strong>Results (3-4 slides):</strong> This is the core of the presentation. Present your findings clearly using <strong>tables, graphs, and high-quality images</strong>. Do not simply display raw data; summarize the key outcomes.</span></li>
                                 <li><span style="color: #000000;"><strong>Discussion (1-2 slides):</strong> Interpret your results, compare them with previous literature, and discuss the <strong>clinical significance</strong> or impact of your findings.</span></li>
                                 <li><span style="color: #000000;"><strong>Conclusion (1 slide):</strong> A clear, concise statement summarizing the main finding and its relevance.</span></li>
                                 <li><span style="color: #000000;"><strong>Acknowledgments (1 slide):</strong> Thanking any research sponsors, funding bodies, faculty supervisors, or co-authors not listed.</span></li>
                                 <li><span style="color: #000000;"><strong>Q&amp;A Slide:</strong> A simple slide to conclude and invite questions.</span></li>
                              </ol>
                              <h3><span style="color: #000000;">Design and Readability</span></h3>
                              <table width="624">
                                 <thead>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;">Guideline</span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;">Detail</span></p>
                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;"><strong>Font Size</strong></span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;">Use a <strong>large font size</strong> for visibility from the back of the room (e.g., minimum <strong>20-24 point</strong> for body text and 30+ for titles).</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;"><strong>Slide Density</strong></span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;"><strong>Limit the number of slides</strong> (e.g., max 10-12 slides for a 10-minute presentation, aiming for about 1 minute per slide).</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;"><strong>Text Usage</strong></span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;">Use <strong>bullet points</strong> and <strong>keywords</strong>; avoid long sentences or paragraphs. Limit to a maximum of <strong>5-6 bullet points</strong> per slide.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;"><strong>Visuals</strong></span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;">Use high-resolution, professional images and charts. Maintain a <strong>high contrast</strong> (e.g., dark text on a light/white background). Avoid using red/green together in graphs due to color blindness.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;"><strong>Consistency</strong></span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;">Maintain a <strong>consistent font style, size, and color scheme</strong> throughout the entire presentation.</span></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h3><span style="color: #000000;">Presentation Delivery and Judging</span></h3>
                              <ul>
                                 <li><span style="color: #000000;"><strong>Practice and Timing:</strong> <strong>Rehearse your presentation</strong> multiple times to ensure you stay within the strict time limit. Practice speaking clearly, confidently, and at a steady, appropriate pace.</span></li>
                                 <li><span style="color: #000000;"><strong>Engagement:</strong> Maintain <strong>eye contact</strong> with the audience (and judges). Do not read directly from the screen or your notes. Use the laser pointer sparingly and strategically.</span></li>
                                 <li><span style="color: #000000;"><strong>Oratory Skill:</strong> Speak clearly, project your voice (the microphone is key), and use a professional, engaging tone. Avoid using filler words like "um" or "like."</span></li>
                                 <li><span style="color: #000000;"><strong>Q&amp;A Session:</strong> Listen carefully to the question. If you don't understand, politely ask for clarification or repetition. Answer truthfully and professionally. If you don't know the answer, politely state, "That is an excellent question that is beyond the scope of our current data, but we plan to investigate it in our future research."</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Judging Criteria:</strong> Judges typically score based on:</span> 
                                    <ul>
                                       <li><span style="color: #000000;"><strong>Scientific Merit and Originality</strong> of the research.</span></li>
                                       <li><span style="color: #000000;"><strong>Clarity of Objectives and Methodology</strong>.</span></li>
                                       <li><span style="color: #000000;"><strong>Quality of Slides and Visual Aids</strong>.</span></li>
                                       <li><span style="color: #000000;"><strong>Clarity, Confidence, and Timing</strong> of the verbal presentation.</span></li>
                                       <li><span style="color: #000000;"><strong>Ability to Answer Questions</strong> and defend the research.</span></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <div class="tab-pane fade" id="undergraduate">
                              <h2 style="text-align: justify;"><span style="color: #000000;">Guidelines for Undergraduate Table Clinic Presentations</span></h2>
                              <h3 style="text-align: justify;"><span style="color: #000000;">Concept and Eligibility</span></h3>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Definition:</strong> A Table Clinic is a <strong>small, tabletop presentation</strong> that focuses on a <strong>specific, practical technique, case management concept, innovative idea, or research finding</strong>. It is highly visual, often involving models, instruments, equipment, or patient demonstrations (if allowed and pre-approved).</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Eligibility:</strong></span> 
                                    <ul>
                                       <li><span style="color: #000000;">Participants must be currently enrolled <strong>undergraduate dental students</strong>.</span></li>
                                       <li><span style="color: #000000;">The clinic must be based on a topic relevant to modern dentistry.</span></li>
                                       <li><span style="color: #000000;">Prior <strong>acceptance of an abstract</strong> is mandatory.</span></li>
                                    </ul>
                                 </li>
                                 <li><span style="color: #000000;"><strong>Team Size:</strong> A maximum of <strong>three to four students</strong> should present the clinic at the table</span></li>
                              </ul>
                              <h3 style="text-align: justify;"><span style="color: #000000;">Time and Setup</span></h3>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Duration:</strong> The official presentation time slot is typically <strong>10 minutes</strong> for the clinic demonstration and interaction, with an additional <strong>5 minutes</strong> for transition/setup. The same clinic may be presented multiple times to different groups or judges throughout the session.</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Equipment Provided:</strong> Organizers typically provide:</span> 
                                    <ul>
                                       <li><span style="color: #000000;">A <strong>standard tabletop</strong> with two chairs.</span></li>
                                       <li><span style="color: #000000;">A <strong>standard electrical outlet</strong>.</span></li>
                                    </ul>
                                 </li>
                                 <li><span style="color: #000000;"><strong>Setup Time:</strong> Students should arrive <strong>at least 30 minutes</strong> before the session begins to set up their clinics.</span></li>
                              </ul>
                              <h3 style="text-align: justify;"><span style="color: #000000;">Content and Materials</span></h3>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Focus:</strong> The clinic must focus on a <strong>clear, singular theme</strong>. It should not be a general review of a large topic.</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Visual Aids:</strong> Visuals are crucial. Use a combination of:</span> 
                                    <ul>
                                       <li><span style="color: #000000;"><strong>Models:</strong> High-quality dental models, typodonts, or 3D prints to demonstrate techniques.</span></li>
                                       <li><span style="color: #000000;"><strong>Instruments/Materials:</strong> Actual instruments, supplies, or materials relevant to the technique being shown.</span></li>
                                       <li><span style="color: #000000;"><strong>Print Materials:</strong> A small, professionally designed <strong>backboard</strong> (similar to a mini-poster, usually 2 x 3 feet, to provide background and conclusions.</span></li>
                                       <li><span style="color: #000000;"><strong>Electronic Media:</strong> A laptop or tablet can be used to display slides, short video clips, or high-resolution clinical images. <em>Ensure all media is pre-loaded and tested.</em></span></li>
                                    </ul>
                                 </li>
                                 <li><span style="color: #000000;"><strong>Handouts (Optional):</strong> Small, one-page handouts summarizing the clinic's key takeaways, materials used, and author contact information are highly encouraged.</span></li>
                                 <li><span style="color: #000000;"><strong>Safety and Sterilization:</strong> If using actual instruments or simulating procedures, all materials must be <strong>clean, sterile, and safe</strong> for display. No sharp, contaminated, or biohazardous waste should be present.</span></li>
                              </ul>
                              <h3 style="text-align: justify;"><span style="color: #000000;">Presentation and Judging</span></h3>
                              <ul>
                                 <li style="text-align: justify;"><span style="color: #000000;"><strong>Interaction:</strong> The presenter must <strong>actively engage</strong> with the audience and judges. The presentation should be a dialogue, not a monologue.</span></li>
                                 <li style="text-align: justify;"><span style="color: #000000;"><strong>Clarity and Flow:</strong> The demonstration should be logical, concise, and easy for non-specialists to follow. <strong>Step-by-step clarity</strong> is essential.</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Judging Criteria:</strong> Judges will assess the clinic based on:</span> 
                                    <ul>
                                       <li style="text-align: justify;"><span style="color: #000000;"><strong>Practical Relevance and Innovation:</strong> The clinical utility and originality of the technique or idea.</span></li>
                                       <li style="text-align: justify;"><span style="color: #000000;"><strong>Clarity of Demonstration:</strong> The ease with which the method is understood through materials and delivery.</span></li>
                                       <li style="text-align: justify;"><span style="color: #000000;"><strong>Visual Appeal and Quality of Materials:</strong> The professional quality and effectiveness of the models, diagrams, and display.</span></li>
                                       <li style="text-align: justify;"><span style="color: #000000;"><strong>Knowledge and Command of Subject:</strong> The presenter's ability to answer detailed questions accurately and confidently.</span></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <div class="tab-pane fade" id="undergraduate_quiz">
                              <h2 style="text-align: justify;"><span style="color: #000000;">Guidelines for Undergraduate Quiz Competition</span></h2>
                              <h3 style="text-align: justify;"><span style="color: #000000;">Eligibility and Team Structure</span></h3>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Eligibility:</strong> All participants must be currently enrolled <strong>undergraduate dental students</strong></span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Team Composition:</strong></span> 
                                    <ul>
                                       <li><span style="color: #000000;">Each team must consist of <strong>four (4) members</strong>.</span></li>
                                       <li><span style="color: #000000;">All four members must be from the <strong>same dental institution</strong>.</span></li>
                                       <li><span style="color: #000000;">No substitution of team members is allowed once the competition has begun.</span></li>
                                    </ul>
                                 </li>
                                 <li><span style="color: #000000;"><strong>Registration:</strong> Teams must register by the specified deadline. Maximum of two teams per institution will be allowed</span></li>
                                 <li><span style="color: #000000;"><strong>Designation:</strong> Each team must designate one member as the <strong>Team Captain</strong> before the start of the competition. The Captain is the only person authorized to submit final answers, challenge questions, or communicate with the Quiz Master.</span></li>
                              </ul>
                              <h3 style="text-align: justify;"><span style="color: #000000;">2. Competition Format and Rules</span></h3>
                              <p style="text-align: justify;"><span style="color: #000000;">The competition will typically be run in multiple rounds, such as a Preliminary/Written Round followed by a Final/Oral Stage.</span></p>
                              <h4 style="text-align: justify;"><span style="color: #000000;">A. Preliminary/Written Round (Elimination)</span></h4>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Objective:</strong> To select the top qualifying teams (6 teams) for the Final Stage.</span></li>
                                 <li><span style="color: #000000;"><strong>Format:</strong> All registered teams answer a common paper consisting of multiple-choice, fill-in-the-blank, or short-answer questions.</span></li>
                                 <li><span style="color: #000000;"><strong>Duration:</strong> 45 minutes.</span></li>
                                 <li><span style="color: #000000;"><strong>Procedure:</strong> Teams work together silently to complete the paper. No use of electronic devices, books, or notes is permitted.</span></li>
                                 <li><span style="color: #000000;"><strong>Scoring:</strong> Answers are checked by a panel. The top teams with the highest cumulative scores advance to the Final Stage.</span></li>
                              </ul>
                              <h4 style="text-align: justify;"><span style="color: #000000;">B. Final/Oral Stage</span></h4>
                              <p style="text-align: justify;"><span style="color: #000000;">The Final Stage will consist of multiple rounds, each with specific rules:</span></p>
                              <table width="624">
                                 <thead>
                                    <tr>
                                       <td width="208">
                                          <p><span style="color: #000000;">Round Type</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">Format &amp; Rules</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">Scoring</span></p>
                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>I. Rapid Fire/Starter</strong></span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">Each team is asked a sequence of 5 questions. Teams are given 15-20 seconds per question. Only the Captain may speak the answer. No passing.</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>+10 points</strong> for correct answer. <strong>0 points</strong> for incorrect or unanswered.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>II. Visual Round</strong></span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">Questions based on displayed images, radiographs, clinical photos, or equipment. Teams write their answer on a provided sheet within 30 seconds.</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>+15 points</strong> for correct answer. <strong>-5 points</strong> for incorrect answer. <strong>0</strong> for no answer.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>III. Buzzer Round</strong></span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">Open questions asked to all teams. The first team to press their designated buzzer gets the chance to answer (must wait for the Quiz Master to acknowledge).</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>+20 points</strong> for correct answer. <strong>-10 points</strong> for incorrect answer (allows other teams to buzz in).</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>IV. Case Study Round</strong></span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">A detailed clinical case history is presented. Teams have 2-3 minutes to discuss, and the Captain presents the diagnosis or management plan.</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>+25 points</strong> for correct diagnosis/plan. Partial points may be awarded (up to \pm 10 ) at the judges' discretion.</span></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h3 style="text-align: justify;"><span style="color: #000000;">3. Subject Areas</span></h3>
                              <p style="text-align: justify;"><span style="color: #000000;">Questions will be drawn from all core undergraduate dental subjects, including but not limited to:</span></p>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;">Anatomy, Physiology, Biochemistry, Microbiology, Pathology</span></li>
                                 <li><span style="color: #000000;">Oral Anatomy, Oral Pathology, Oral Medicine, Oral Surgery</span></li>
                                 <li><span style="color: #000000;">Operative Dentistry (Restorative), Endodontics</span></li>
                                 <li><span style="color: #000000;">Prosthodontics (Fixed and Removable)</span></li>
                                 <li><span style="color: #000000;">Orthodontics, Periodontics</span></li>
                                 <li><span style="color: #000000;">Pediatric Dentistry (Pedodontics)</span></li>
                                 <li><span style="color: #000000;">Community Dentistry and Public Health</span></li>
                                 <li><span style="color: #000000;">Dental Materials, Pharmacology</span></li>
                              </ul>
                              <h3 style="text-align: justify;"><span style="color: #000000;">4. Technical Rules</span></h3>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Electronic Devices:</strong> All mobile phones, smart watches, and other electronic communication/reference devices must be <strong>switched off and submitted</strong> to the invigilator during all rounds. Any violation leads to immediate disqualification.</span></li>
                                 <li><span style="color: #000000;"><strong>Protests/Challenges:</strong> Challenges to a question or answer must be raised immediately by the Team Captain <strong>before the next question is read</strong>. The decision of the Quiz Master and the panel of judges is <strong>FINAL</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Unanswered Questions:</strong> If a team provides an incorrect answer in a buzzer round, the question will be passed to the next team that buzzes in.</span></li>
                                 <li><span style="color: #000000;"><strong>Tie-Breaker:</strong> In case of a tie for the top rank, a <strong>sudden-death buzzer round</strong> will be used until a clear win.</span></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end row --> 
            </div>
            <!-- end container --> 
         </section>


        <!-- start pricing-->
        <section class="pricing event-pricing section-padding">
            <div class="container">
                <div class="row events-section-title">
                    <h2>Our Registration pricing</h2>
                </div> <!-- end section-title -->
                <section class="charity-gallery">

                    <div class="gallery-filters">
                        <ul>
                            <!--<li><a onclick="showAll('')" href="#" class="current">All</a></li>-->
                            <li><a onclick="showAll('Conference')" class="current" href="#">Conference</a></li>
                            <li><a onclick="showAll('Workshop')" href="#">Workshop</a></li>

                        </ul>
                    </div>
                </section>

                <div class="row ">
                    @foreach ($types as $type)
                        {{-- @dd($type) --}}
                        <div class="col col-md-4 col-sm-6 content Conference">
                            <div class="pricing-grid wow fadeInLeftSlow" data-wow-delay="0.3s">
                                <div class="pricing-header">
                                    <h3>{{ $type['name'] }}</h3>
                                    <span>{{ $type['price'] }}</span>
                                </div>
                                <div class="pricing-details">
                                    {{-- <ul>
                                    <li><i class="fa fa-check"></i> perspiciatis unde omnis iste</li>
                                    <li><i class="fa fa-check"></i> natus error sit volupta</li>
                                    <li><i class="fa fa-check"></i> accusantium dolorem laud</li>
                                    <li><i class="fa fa-close"></i> antium totam rem aper</li>
                                    <li><i class="fa fa-close"></i> aque ipsa quae</li>
                                </ul> --}}
                                </div>

                                <a href="{{ route('register.page') }}" class="btn theme-btn">Register Now</a>
                            </div>
                        </div>
                    @endforeach
                    


                </div>
                <div class="row content" style="margin-top: 23px;">
                    
                     <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
        <div class="pricing-grid">
            <div class="pricing-header">
                <h3>Advanced Periodontology</h3>
                <!--<span>Coming Soon</span>-->
            </div>
            <div class="pricing-details">
                <ul>
                    <li><i class="fa fa-check"></i> Digital flow in implantology</li>
                    <li><i class="fa fa-check"></i> AI in dentistry</li>
                    <li><i class="fa fa-check"></i> Endo related</li>
                    <li><i class="fa fa-check"></i> Veneers made simple</li>
                    <li><i class="fa fa-check"></i> Open your practice</li>
                    <li><i class="fa fa-check"></i> Venue: Karachi & Hyderabad</li>
                    <li><i class="fa fa-check"></i> Contact: Prof. Navid Rashid Qureshi</li>
                </ul>
            </div>
            <a href="#" class="btn theme-btn">Register Now</a>
        </div>
    </div>

    <!-- 2 -->
    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
        <div class="pricing-grid">
            <div class="pricing-header">
                <h3>Separated Instrument - My Greatest Fear!</h3>
                <!--<span>Coming Soon</span>-->
            </div>
            <div class="pricing-details">
                <ul>
                    <li><i class="fa fa-check"></i> Presenter: Dr. Asfand Ali Khan</li>
                    <li><i class="fa fa-check"></i> Venue: Islamabad</li>
                    <li><i class="fa fa-check"></i> Contact: Dr. Asfand</li>
                </ul>
            </div>
            <a href="#" class="btn theme-btn">Register Now</a>
        </div>
    </div>

    <!-- 3 -->
    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
        <div class="pricing-grid">
            <div class="pricing-header">
                <h3>Comprehensive Dental Implantology</h3>
                <!--<span>Hands-on</span>-->
            </div>
            <div class="pricing-details">
                <ul>
                    <li><i class="fa fa-check"></i> Facilitators: Prof. Arshad Mahmood Malik, Prof. Khalid Siddiqi, Prof. Tayyaba Saleem, Dr. Umer Farooq</li>
                    <li><i class="fa fa-check"></i> Venue: Islamabad</li>
                    <li><i class="fa fa-check"></i> Contact: Khalid.Siddiqi@iideas.edu.pk, 0334-8172005</li>
                </ul>
            </div>
            <a href="#" class="btn theme-btn">Register Now</a>
        </div>
    </div>

                  


                </div>
                
                 <div class="row content" style="margin-top: 23px;">
                     <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
        <div class="pricing-grid">
            <div class="pricing-header">
                <h3>Instrument Retrieval Made Easy</h3>
                <!--<span>Post Conference</span>-->
            </div>
            <div class="pricing-details">
                <ul>
                    <li><i class="fa fa-check"></i> Facilitator: Prof. Arshad Hassan</li>
                    <li><i class="fa fa-check"></i> Venue: Karachi</li>
                    <li><i class="fa fa-check"></i> Date: 6th January 2026 | 9 AM – 3 PM</li>
                </ul>
            </div>
            <a href="#" class="btn theme-btn">Register Now</a>
        </div>
    </div>

    <!-- 5 -->
    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
        <div class="pricing-grid">
            <div class="pricing-header">
                <h3>Facial Aesthetics & Modern Cosmetic Dentistry</h3>
                <!--<span>Coming Soon</span>-->
            </div>
            <div class="pricing-details">
                <ul>
                    <li><i class="fa fa-check"></i> Facilitator: Dr. Quratulain Zafar + IADSR</li>
                    <li><i class="fa fa-check"></i> Venue: Islamabad & Lahore</li>
                </ul>
            </div>
            <a href="#" class="btn theme-btn">Register Now</a>
        </div>
    </div>

    <!-- 6 -->
    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
        <div class="pricing-grid">
            <div class="pricing-header">
                <h3>Pout & Pearls Masterclass</h3>
                <!--<span>Hands-on</span>-->
            </div>
            <div class="pricing-details">
                <ul>
                    <li><i class="fa fa-check"></i> Veneers, Lip Flip, Gummy Smile Botox</li>
                    <li><i class="fa fa-check"></i> Facilitators: Saima Razzaq, Rubab Sherazi, Anam Fayyaz, Kaneeze Zainab</li>
                    <li><i class="fa fa-check"></i> Venue: LMDC Lahore</li>
                    <li><i class="fa fa-check"></i> Contact: 0333-4479820</li>
                    <li><i class="fa fa-check"></i> Date: 24th December | 9 AM – 3 PM</li>
                </ul>
            </div>
            <a href="#" class="btn theme-btn">Register Now</a>
        </div>
    </div>
                     
                     </div>
                     
                      <div class="row content" style="margin-top: 23px;">
                          <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
        <div class="pricing-grid">
            <div class="pricing-header">
                <h3>Nitrous Oxide Sedation in Dentistry</h3>
                <!--<span>5–6 Hours</span>-->
            </div>
            <div class="pricing-details">
                <ul>
                    <li><i class="fa fa-check"></i> Facilitators: Dr. Miraat Anser, Dr. Arham Chauhan</li>
                    <li><i class="fa fa-check"></i> Venue: Lahore</li>
                </ul>
            </div>
            <a href="#" class="btn theme-btn">Register Now</a>
        </div>
    </div>

    <!-- 8 -->
    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
        <div class="pricing-grid">
            <div class="pricing-header">
                <h3>Evidence-Based Laser Applications</h3>
                <!--<span>Coming Soon</span>-->
            </div>
            <div class="pricing-details">
                <ul>
                    <li><i class="fa fa-check"></i> Facilitator: Dr. Waqas Javied Malik</li>
                    <li><i class="fa fa-check"></i> Venue: Islamabad</li>
                </ul>
            </div>
            <a href="#" class="btn theme-btn">Register Now</a>
        </div>
    </div>

    <!-- 9 -->
    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
        <div class="pricing-grid">
            <div class="pricing-header">
                <h3>Digital Marketing Strategy 101</h3>
                <!--<span>2 Hours</span>-->
            </div>
            <div class="pricing-details">
                <ul>
                    <li><i class="fa fa-check"></i> Facilitator: Badar Khushnood</li>
                    <li><i class="fa fa-check"></i> Venue: Lahore + IADSR</li>
                    <li><i class="fa fa-check"></i> Date: 25th December</li>
                </ul>
            </div>
            <a href="#" class="btn theme-btn">Register Now</a>
        </div>
    </div>

                          
                          </div>
                          
                           <div class="row content" style="margin-top: 23px;">
                                <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
        <div class="pricing-grid">
            <div class="pricing-header">
                <h3>Mastering Crown Preparation</h3>
                <!--<span>Full Day</span>-->
            </div>
            <div class="pricing-details">
                <ul>
                    <li><i class="fa fa-check"></i> Facilitator: Dr. Syed Rashid Habib</li>
                    <li><i class="fa fa-check"></i> Venue: DHA Lahore</li>
                    <li><i class="fa fa-check"></i> Date: 25th December | 9 AM – 5 PM</li>
                </ul>
            </div>
            <a href="#" class="btn theme-btn">Register Now</a>
        </div>
    </div>

    <!-- 11 -->
    <div class="col col-md-4 col-sm-6 content Workshop" style="display:none">
        <div class="pricing-grid">
            <div class="pricing-header">
                <h3>Troubleshooting in Endodontics</h3>
                <!--<span>Post Conference</span>-->
            </div>
            <div class="pricing-details">
                <ul>
                    <li><i class="fa fa-check"></i> Facilitator: Dr. Irfan Maqbool</li>
                    <li><i class="fa fa-check"></i> Venue: DHA Lahore</li>
                    <li><i class="fa fa-check"></i> Date: 10–11 January | 9 AM – 5 PM</li>
                </ul>
            </div>
            <a href="#" class="btn theme-btn">Register Now</a>
        </div>
    </div>
                               
                               </div>
                
                <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end pricing-->
        
        <section class="events-about section-padding" id="accommodations">
    <div class="container">
        <div class="row">
            <div class="col col-lg-10 col-lg-offset-1">
                <div class="title text-center">
                    <span>Conference Support</span>
                    <h2>Hotel Accommodations</h2>
                </div>

                <div class="details text-center">
                    <p>
                        We are pleased to assist all participants and guests of the 
                        <strong>PDA International Dental Conference 2025</strong> with comfortable and convenient 
                        hotel accommodations in Lahore. Multiple hotel options—ranging from luxury to business-class 
                        to budget-friendly stays—are available near the <strong>Expo Center, Lahore</strong>, ensuring 
                        easy access to the event venue.
                    </p>

                    <p>
                        For all accommodation-related information, guidance, or booking support, please contact:
                    </p>

                    <p style="font-size: 18px; font-weight: bold; margin-top: 15px;">
                        Dr. Edrees Anwar<br>
                        📞 +92 333 4291905
                    </p>
                    <p style="font-size: 18px; font-weight: bold; margin-top: 15px;">
                        Dr Imran naseer<br>
                        📞 +92 300 9478658
                    </p>

                    <p>
                        Our team will be happy to help you secure the best stay based on your needs and preferences.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

  <section class="charity-gallery events-gallery section-padding" id="gallery" style="padding-top: 40px;">
            <h2 class="hidden">Gallery</h2>
            <div class="row events-section-title" style="margin-bottom: -43px;">
                <h2>Hotel gallery</h2>
            </div> <!-- end section-title -->

            <div class="row">
                <div class="col col-lg-12">
                    <div class="gallery-filters">
                        <ul>
                            <!--<li><a data-filter="*" href="#" class="current">All</a></li>-->
                            <!--<li><a data-filter=".2015" href="#">2015</a></li>-->
                            <!--<li><a data-filter=".2017" href="#">2017</a></li>-->
                            <!--<li><a data-filter=".2018" href="#">2018</a></li>-->
                            <!--<li><a data-filter=".2024" href="#">2024</a></li>-->
                        </ul>
                    </div>


                    <div class="gallery-container popup-gallery">
                        <div class="box branding">
                            <a href="/hotel/1.png">
                                <div class="img-holder">
                                    <img src="/hotel/1.png"  alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box photography">
                            <a href="/hotel/2.png">
                                <div class="img-holder">
                                    <img src="/hotel/2.png"  alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box photography">
                            <a href="/hotel/3.png">
                                <div class="img-holder">
                                    <img src="/hotel/3.png"  alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding others web">
                            <a href="/hotel/4.png">
                                <div class="img-holder">
                                    <img src="/hotel/4.png"  alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding web">
                            <a href="/hotel/5.png">
                                <div class="img-holder">
                                    <img src="/hotel/5.png"  alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding web">
                            <a href="/hotel/6.png">
                                <div class="img-holder">
                                    <img src="/hotel/6.png"  alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box web">
                            <a href="/hotel/7.png">
                                <div class="img-holder">
                                    <img src="/hotel/7.png"  alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding web">
                            <a href="/hotel/8.png">
                                <div class="img-holder">
                                    <img src="/hotel/8.png"  alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </section>



        <!-- start event-booking -->
        <section class="event-booking section-padding" id="ticket">
            <div class="container">
                <div class="row events-section-title">
                    <h2>Reserve your Spot</h2>
                </div> <!-- end section-title -->

                <div class="row">
                    <div class="col col-xs-12">
                        <form class="form row" action="{{ route('register.page') }}" method="get">

                            <div class="col col-sm-12 submit-col">
                                <button type="submit" class="btn events-theme-btn-red">Register now</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end event-booking -->


        <!-- start charity-gallery -->
        <section class="charity-gallery events-gallery section-padding" id="gallery">
            <h2 class="hidden">Gallery</h2>
            <div class="row events-section-title">
                <h2>Conference gallery</h2>
            </div> <!-- end section-title -->

            <div class="row">
                <div class="col col-lg-12">
                    <div class="gallery-filters">
                        <ul>
                            <!--<li><a data-filter="*" href="#" class="current">All</a></li>-->
                            <!--<li><a data-filter=".2015" href="#">2015</a></li>-->
                            <!--<li><a data-filter=".2017" href="#">2017</a></li>-->
                            <!--<li><a data-filter=".2018" href="#">2018</a></li>-->
                            <!--<li><a data-filter=".2024" href="#">2024</a></li>-->
                        </ul>
                    </div>


                    <div class="gallery-container popup-gallery">
                        <div class="box branding">
                            <a href="/assets/images/events/gallery/img-1.jpg">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/img-1.jpg" alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box photography">
                            <a href="/assets/images/events/gallery/img-2.jpg">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/img-2.jpg" alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box photography">
                            <a href="/assets/images/events/gallery/img-3.jpg">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/img-3.jpg" alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding others web">
                            <a href="/assets/images/events/gallery/img-4.jpg">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/img-4.jpg" alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding web">
                            <a href="/assets/images/events/gallery/img-5.jpg">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/img-5.jpg" alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding web">
                            <a href="/assets/images/events/gallery/img-6.jpg">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/img-6.jpg" alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box web">
                            <a href="/assets/images/events/gallery/img-7.jpg">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/img-7.jpg" alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box branding web">
                            <a href="/assets/images/events/gallery/img-8.jpg">
                                <div class="img-holder">
                                    <img src="/assets/images/events/gallery/img-8.jpg" alt class="img img-responsive">
                                </div>
                                <div class="hover-text" style="display:none">
                                    <div>
                                        <span>Fashion</span>
                                        <h3>Crossfit : 15.4 open workout</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </section>
        <!-- end charity-gallery -->





        <!-- start event-sponsors -->
        <section class="event-spnosors section-padding">
            <div class="container my-5">
    <div class="row events-section-title text-center mb-5">
        <div class="col-12">
            <h2 class="fw-bold">Our Partners</h2>
        </div>
    </div>

    <div class="row sponsors text-center justify-content-center">
        <!-- Academic Partner -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <h3>Academic Partner:</h3>
            <div class="partner-box">
                <a href="#">
                    <img src="/Iadsr.png" alt="Academic Partner" class="img-fluid partner-logo">
                </a>
            </div>
        </div>

        <!-- Marketing Partner -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <h3>Marketing Partner:</h3>
            <div class="partner-box">
                <a href="#">
                    <img src="/fm_logo.png" alt="Marketing Partner" class="img-fluid partner-logo">
                </a>
            </div>
        </div>

        <!-- Media Partner -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <h3>Media Partner:</h3>
            <div class="partner-box white-bg">
                <a href="#">
                    <img src="/dental_logo.png" alt="Media Partner" class="img-fluid partner-logo">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end container -->
        </section>
        <div class="mt-4" style="margin-top: 20px;">

        </div>
        <section class="event-spnosors section-padding">
            <div class="container">
                <div class="row events-section-title">
                    <h2>Our Collaborator</h2>
                </div> <!-- end section-title -->

                <div class="row sponsors">
                    <div class="col col-xs-12">
                        {{-- <h3>Platinum Sponsors:</h3> --}}
                         
    <!--                    <div class="box white-bg" style="margin-right: 20px;-->
    <!--width: 17% !important;">-->
    <!--                        <a href="#"><img src="/assets/images/events/sponsors/10.png" alt-->
    <!--                                class="img img-responsive"></a>-->
    <!--                    </div>-->
    <!--                    <div class="box white-bg" style="margin-right: 20px;-->
    <!--width: 17% !important;">-->
    <!--                        <a href="#"><img src="/assets/images/events/sponsors/2.png" alt-->
    <!--                                class="img img-responsive"></a>-->
    <!--                    </div>-->
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/4.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/5.png" alt
                                    class="img responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/8.png" alt
                                    class="img img-responsive"></a>
                        </div>
                          <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/1.png" alt
                                    class="img img-responsive"></a>
                        </div>
                         <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/6.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        
                       
                       
                    </div>
                </div>
                <div class="row sponsors" style="margin-top: 20px;">
                    <div class="col col-xs-12">
                        {{-- <h3>Platinum Sponsors:</h3> --}}
                       
                        
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/3.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/7.png" alt
                                    class="img responsive"></a>
                        </div>
                        
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/9.png" alt
                                    class="img img-responsive"></a>
                        </div>
                       
                    </div>

                </div> <!-- end row -->
                {{-- <div class="row sponsors gold-sponsors">
                    <div class="col col-xs-12">
                        <h3>Gold Sponsors:</h3>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/img-6.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/img-7.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/img-8.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/img-9.png" alt
                                    class="img img-responsive"></a>
                        </div>
                        <div class="box">
                            <a href="#"><img src="/assets/images/events/sponsors/img-10.png" alt
                                    class="img img-responsive"></a>
                        </div>
                    </div>
                </div> <!-- end row --> --}}
            </div> <!-- end container -->
        </section>
        <!-- end event-sponsors -->
        <div class="mt-4" style="margin-top: 20px;">

        </div>

        <!-- start event-location -->
        <section class="event-contact" id="contact">
            <h2 class="hidden">Contact info</h2>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.12752534471!2d74.25763187532202!3d31.465677974238975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919022a17a84c4b%3A0x74ef403a4d0bb9a4!2sExpo%20Centre%20Lahore!5e0!3m2!1sen!2s!4v1760694858423!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="container">
                <div class="row contact-address section-padding">
                  <h2 style="text-align: center; margin: 36px;">Contact Information</h2>
                    
                    <div class="col col-md-4">
                        <ul class="contact-info">
                           
                            <li><i class="fa fa-phone"></i> +92 333 4214214</li>
                            <li><i class="fa fa-envelope"></i>marketing@iadsr.edu.pk</li>
                        </ul>
                    </div>
                    <div class="col col-md-8">
                        <div id="contact-success" class="alert alert-success" style="display:none;">
    Thank you! Your message has been sent.
</div>
                        <form id="contactForm" class="form row">
    <div class="col col-md-6">
        <input type="text" name="first_name" class="form-control" placeholder="First name.." required>
    </div>
    <div class="col col-md-6">
        <input type="text" name="last_name" class="form-control" placeholder="Last name.." required>
    </div>
    <div class="col col-md-6">
        <input type="email" name="email" class="form-control" placeholder="Email address.." required>
    </div>
    <div class="col col-md-6">
        <input type="text" name="phone" class="form-control" placeholder="Phone.." required>
    </div>
    <div class="col col-md-12">
        <textarea name="message" class="form-control" placeholder="Write.." required></textarea>
    </div>
    <div class="col col-md-12 submit">
        <button type="submit" class="btn events-theme-btn-red">Submit</button>
    </div>
</form>


                    </div>
                </div>
            </div> 
        </section>
       
        <div class="mt-4" style="margin-top: 20px;">

        </div>

       
        
        


        <!-- start footer -->
        <!--<footer class="event-footer">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col col-xs-12">-->
        <!--                <div class="logo">-->
        <!--                    <img src="/assets/images/events/sponsors/fm_logo.png" style="width: 200px;" alt>-->
        <!--                </div>-->
        <!--                <div class="copyright">-->
        <!--                    <p>2025 &copy; Design and Develop By <a href="https://fissionmonster.com">Fission-->
        <!--                            Monster</a></p>-->
        <!--                </div>-->
        <!--                <div>-->
        <!--                    <ul class="social-links">-->
        <!--                        <li><a href="https://www.linkedin.com/company/fissionmonster/?originalSubdomain=pk"><i-->
        <!--                                    class="fa fa-linkedin"></i></a></li>-->
        <!--                        <li><a href="https://www.facebook.com/fissionmonster"><i-->
        <!--                                    class="fa fa-facebook"></i></a></li>-->
        <!--                        <li><a href="https://www.instagram.com/fissionmonster/"><i-->
        <!--                                    class="fa fa-instagram"></i></a></li>-->
        <!--                        {{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
        <!--                        <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div> <!-- end container -->-->
        <!--</footer>-->
        
      <section class="event-newsletter section-padding">
    <h2 class="hidden">Newsletter</h2>
    <div class="container">
        <div class="row">
            <div class="col col-md-8 col-md-offset-2">
                <p>Subscribe to get the latest update</p>

                {{-- Show success or error messages --}}
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <form class="form" method="POST" action="{{ route('subscribe.store') }}">
                    @csrf
                    <div>
                        <input type="email" class="form-control" placeholder="Type your email" required name="email">
                    </div>
                    <div class="submit mt-2" style="margin-top: 20px;float: left;">
                        <button class="btn events-theme-btn-red" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div> 
    </div> 
</section>

        <footer class="footer-style-two" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 col-xs-6">
                        <div class="widget about-widget">
                            <div class="logo"><a href="#"><img src="/assets/images/events/sponsors/fm_logo.png" style="width: 200px;" alt="" class="img img-responsive"></a></div>
                            
                            <p class="copyright">2025 &copy; Design and Develop By <a href="https://fissionmonster.com">Fission
                                    Monster</p>
                            <ul class="social-links">
                                <li><a href="https://www.linkedin.com/company/fissionmonster/?originalSubdomain=pk"><i
                                            class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.facebook.com/fissionmonster"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/fissionmonster/"><i
                                            class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="widget contact-widget">
                            <h3>Contact</h3>
                           
                            <ul>
                                <li><span>Email: </span>hello@fissionmonster.com</li>
                                <!--<li><span>Phone: </span>+92 3314547089</li>-->
                            </ul>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="widget site-map">
                            <h3>Site map</h3>
                            <ul>
                                <li><a  href="#home">Home</a></li>
                                <li><a  href="#about">Conference</a></li>
                                <li><a  href="{{ route('register.page') }}">Register Now</a></li>
                                <li><a href="https://iadsr.edu.pk/conference/">Our Portfolio</a></li>
                                
                            </ul>
                        </div>
                    </div>

                    
                </div> <!-- end row -->
            </div> <!-- end container -->
        </footer>
        <!-- end footer -->
    </div>
    <!-- end of page-wrapper -->


    <!-- All JavaScript files
    ================================================== -->
    <!--<script src="/assets/js/jquery.min.js"></script>-->
    <script type="text/javascript" src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="/assets/js/jquery-plugin-collection.js"></script>

    <!-- Google map api -->
    {{-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC348vlw53nvT6C8LQ_dxkvsWDb9Kd2mEw"></script> --}}

    <!-- Custom script for this template -->
    <script src="/assets/js/script.js"></script>

    <script>
        function showAll(className) {


            if (className == "Conference") {
                $('.Conference').show();
                $('.Workshop').hide();
            } else if (className == "Workshop") {
                $('.Conference').hide();
                $('.Workshop').show();
            } else {
                $('.Conference').show();
                $('.Workshop').show();
            }
        }
    </script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (Session::has('success'))
            Swal.fire({
                title: "Good job!",
                text: "Register Successfully Our Team Contact You Shortly",
                icon: "success"
            });
        @endif
        @if (Session::has('message'))
            Swal.fire({
                title: "Good job!",
                text: "Thank you for subscribing!",
                icon: "success"
            });
        @endif
        @if (Session::has('error'))
        @endif
    </script>
    
    <script>
// document.getElementById("contactForm").addEventListener("submit", function(e) {
//     e.preventDefault();

//     fetch("{{ route('contact.submit') }}", {
//         method: "POST",
//         headers: {
//             "X-CSRF-TOKEN": "{{ csrf_token() }}",
//         },
//         body: new FormData(this)
//     })
//     .then(res => res.ok ? res.text() : Promise.reject(res))
//     .then(() => {
//         document.getElementById("contact-success").style.display = "block";
//         document.getElementById("contact-success").scrollIntoView({ behavior: "smooth", block: "center" });
//         this.reset();
//         setTimeout(() => document.getElementById("contact-success").style.display = "none", 5000);
//     })
//     .catch(() => alert("Something went wrong! Please try again."));
// });
</script>
</body>

</html>
