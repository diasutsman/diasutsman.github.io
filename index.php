<?php
//* Get env vars
include './php/getEnv.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Dias Utsman</title>
    <meta content="As a tech enthusiast, I have a strong passion for creating digital solutions that not only solve problems but also provide user satisfaction. With a diverse skillset ranging from back-end to front-end, I am well-equipped to tackle any project and push beyond the limits of what's possible. My experience in Android and web development has given me the knowledge and expertise to craft high-quality solutions that meet industry 4.0 standards. I am excited to bring my skills and expertise to the table and help drive innovation in the world of technology." name="description" />
    <meta content="Software Developer, Android Developer, Web Developer, Back-End Developer" name="keywords" />

    <!-- Favicons -->
    <link href="./assets/img/favicon.jpg" rel="icon" />
    <link href="./assets/img/apple-touch-icon.jpg" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="./assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="./assets/css/style.css" rel="stylesheet" />

    <!-- Midtrans -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<? $env['CLIENT_KEY'] ?>"></script>
</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">
        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li>
                    <a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li>
                    <a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
                </li>
                <li>
                    <a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <li>
                    <a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a>
                </li>
                <li>
                    <a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a>
                </li>
                <li>
                    <a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
            </ul>
        </nav>
        <!-- .nav-menu -->
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>
                Dias Utsman
                <button id="buy-me-a-coffee" class="badge text-bg-success" style="
							vertical-align: super;
							font-size: 16px;
							background: none;
							border: none;
							outline: none;
							box-shadow: none;
						">
                    Buy me A coffee!
                </button>
            </h1>
            <p>
                I'm
                <span class="typed" data-typed-items="A Software Developer, A Back End Developer, A Front End Developer, an Android Developer"></span>
            </p>
            <div class="social-links">
                <a target="_blank" href="https://github.com/diasutsman" class="github"><i class="bx bxl-github"></i></a>
                <a target="_blank" href="https://medium.com/@diasutsman" class="medium"><i class="bx bxl-medium"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/dias-utsman/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a target="_blank" href="https://dribbble.com/diasutsman" class="dribble"><i class="bx bxl-dribbble"></i></a>
                <a target="_blank" href="https://wa.me/6281286465924" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>About</h2>
                    <p>
                        Here are some details about me that will give you a better
                        understanding of my background and skills. <br />
                        I hope they help in assessing my potential fit for any
                        opportunities.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center">
                        <img src="assets/img/profile-img-2.webp" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content d-flex flex-column justify-content-center">
                        <h3>Full Stack Developer.</h3>
                        <p class="fst-italic">
                            These are some detailed information about me
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Birthday:</strong> <span>22 August 2006</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Website:</strong>
                                        <span>diasutsman.github.io</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Phone:</strong> <span>+62 812 8646 5924</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>City:</strong>
                                        <span>Bekasi, West Java, Indonesia</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span id="myAge"></span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Degree:</strong>
                                        <span>Vocational High School</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Email:</strong> <span>utsmand91@gmail.com</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <strong>Freelance:</strong> <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Facts</h2>
                    <p>
                        Here are some factual details about myself that provide insight
                        into who I am.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span id="projects">
                                <div class="spinner-border text-primary border-1" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-code"></i>
                            <span data-purecounter-start="0" data-purecounter-duration="1" class="purecounter" id="hoursOfCode">0</span>
                            <p>Hours Of Code</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Certificates</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Facts Section

			<!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Skills</h2>
                    <p>
                        Here are some of my skills that demonstrate my capabilities and
                        qualifications.
                    </p>
                </div>

                <div class="row skills-content">
                    <div class="progress col-lg-6">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress col-lg-6">
                        <span class="skill">CSS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress col-lg-6">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress col-lg-6">
                        <span class="skill">PHP <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress col-lg-6">
                        <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress col-lg-6">
                        <span class="skill">Photoshop <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress col-lg-6">
                        <span class="skill">Photoshop <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress col-lg-6">
                        <span class="skill">Photoshop <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Resume</h2>
                    <p>
                        Please find my resume embedded directly on the website for your
                        convenience. This will allow you to easily view my qualifications
                        and relevant experience in order to determine whether my skills
                        align with the requirements of the position.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Summary</h3>
                        <div class="resume-item pb-0">
                            <h4>Dias Utsman</h4>
                            <p>
                                <em>As a software engineer with 3 years of experience and a
                                    strong focus on back-end web development, I possess a solid
                                    skill set in programming and computer science. I am
                                    currently seeking opportunities to apply my expertise and
                                    knowledge to meet the standards of Industry 4.0.</em>
                            </p>
                            <ul>
                                <li>
                                    Jl. Raya Relife Greenville Kec. Setu, Kabupaten Bekasi, Jawa
                                    Barat 17320
                                </li>
                                <li>+62 812 8646 5924</li>
                                <li>utsmand91@gmail.com</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Junior High School</h4>
                            <h5>2018 - 2021</h5>
                            <p><em>Insan Mandiri Greenville, Bekasi, Jawa Barat</em></p>
                        </div>
                        <div class="resume-item">
                            <h4>Vocational High School</h4>
                            <h5>2021 - 2024</h5>
                            <p><em>IDN Boarding School, Jonggol, Bogor</em></p>
                            <div>
                                <ul>
                                    <li>Participated in Student Council in Major Division</li>
                                    <li>
                                        Classified to teach website and Android development at KV
                                        Sepang, Kuala Lumpur, Malaysia.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Experience</h3>
                        <div class="resume-item">
                            <h4>Software Development Trainer</h4>
                            <h5>12 February 2023 - 26 February 2023</h5>
                            <p><em>KV Sepang, Kuala Lumpur, Malaysia</em></p>
                            <ul>
                                <li>
                                    Conducted 2 consecutive 2‑week courses on Website and
                                    Android Development.
                                </li>
                                <li>
                                    Thoroughly explained website structure including HTML, CSS,
                                    & JavaScript
                                </li>
                                <li>
                                    Taught about JavaScript advanced features, such as
                                    async/await, fetch, Promise, etc
                                </li>
                                <li>Taught about Kotlin basics and the examples.</li>
                                <li>
                                    Made sure every material that was being taught was fun and
                                    engaging for students.
                                </li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Web development trainer</h4>
                            <h5>Nov 26 2022</h5>
                            <p>
                                <em>SMK Insan Mulia</em>
                            </p>
                            <ul>
                                <li>Taught a 4‑day class on Website Development.</li>
                                <li>
                                    Thoroughly explained website structure including HTML, CSS,
                                    & JavaScript even with only a tight timeline
                                </li>
                                <li>
                                    Made sure every audience was happy and had a great
                                    understanding of the materials that were being taught
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>
                        This portfolio represents all of the projects that I have worked
                        on, showcasing my diverse skill set and ability to deliver
                        high-quality results in various areas, including front-end,
                        android, and back-end development
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-filters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-android">Android</li>
                            <li data-filter=".filter-web">Web</li>
                            <li data-filter=".filter-back-end">Back End</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/web/elbara-kreasi.webp" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Elbara Kreasi</h4>
                                <p>Website</p>
                                <div class="portfolio-links">
                                    <a href="./assets/img/portfolio/web/elbara-kreasi.webp" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Elbara Kreasi Website"><i class="bx bx-zoom-in"></i></a>
                                    <a href="https://elbarakreasi.com/" target="_blank" referrerpolicy="noreferrer" title="Elbara Kreasi"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-back-end">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/back-end/forum-api.webp" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Forum API (Dicoding Submission)</h4>
                                <p>Back End</p>
                                <div class="portfolio-links">
                                    <a href="./assets/img/portfolio/back-end/forum-api.webp" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Forum API"><i class="bx bx-zoom-in"></i></a>
                                    <a href="https://github.com/diasutsman/forum-api" target="_blank" referrerpolicy="noreferrer" title="Forum API"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/web/rumah-belajar.webp" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Rumah Belajar</h4>
                                <p>Website</p>
                                <div class="portfolio-links">
                                    <a href="./assets/img/portfolio/web/rumah-belajar.webp" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Rumah Belajar Website"><i class="bx bx-zoom-in"></i></a>
                                    <a href="https://diasutsman.github.io/Rumah-Belajar-Profile/" target="_blank" referrerpolicy="noreferrer" title="Rumah Belajar"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-back-end">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/back-end/open-music-api.webp" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Open Music API (Dicoding Submission)</h4>
                                <p>Back End</p>
                                <div class="portfolio-links">
                                    <a href="./assets/img/portfolio/back-end/open-music-api.webp" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Open Music API"><i class="bx bx-zoom-in"></i></a>
                                    <a href="https://github.com/diasutsman/open-music-api" target="_blank" referrerpolicy="noreferrer" title="Open Music API"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/web/ngabs-coding.webp" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Ngabs Coding</h4>
                                <p>Website</p>
                                <div class="portfolio-links">
                                    <a href="./assets/img/portfolio/web/ngabs-coding.webp" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ngabs Coding Website"><i class="bx bx-zoom-in"></i></a>
                                    <a href="https://diasutsman.github.io/ITFEST-2022-ngabs-rpl/" target="_blank" referrerpolicy="noreferrer" title="Ngabs Coding"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-back-end">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/back-end/bookshelf-api.webp" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Bookshelf API (Dicoding Submission)</h4>
                                <p>Back End</p>
                                <div class="portfolio-links">
                                    <a href="./assets/img/portfolio/back-end/bookshelf-api.webp" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Bookshelf API"><i class="bx bx-zoom-in"></i></a>
                                    <a href="https://github.com/diasutsman/bookshelf-api" target="_blank" referrerpolicy="noreferrer" title="Bookshelf API"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-android">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/android/pic-bundles.webp" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Pic Bundles</h4>
                                <p>Android</p>
                                <div class="portfolio-links">
                                    <a href="./assets/img/portfolio/android/pic-bundles.webp" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pic Bundles"><i class="bx bx-zoom-in"></i></a>
                                    <a href="https://github.com/diasutsman/PicBundles" target="_blank" referrerpolicy="noreferrer" title="Pic Bundles"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-android">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/android/alarm-app.webp" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Alarm App</h4>
                                <p>Android</p>
                                <div class="portfolio-links">
                                    <a href="./assets/img/portfolio/android/alarm-app.webp" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pic Bundles"><i class="bx bx-zoom-in"></i></a>
                                    <a href="https://github.com/diasutsman/SmartAlarm" target="_blank" referrerpolicy="noreferrer" title="Pic Bundles"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-android">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/android/weather-app.webp" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Weather App</h4>
                                <p>Android</p>
                                <div class="portfolio-links">
                                    <a href="./assets/img/portfolio/android/weather-app.webp" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Weather App"><i class="bx bx-zoom-in"></i></a>
                                    <a href="https://github.com/diasutsman/WeatherApp" target="_blank" referrerpolicy="noreferrer" title="Weather App"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Services</h2>
                    <p>
                        These services are currently provided for clients and employers,
                        with a commitment to expanding in the future.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                                </svg>
                                <i class="bx bx-globe"></i>
                            </div>
                            <h4><a href="">Website</a></h4>
                            <p>
                                Expert in website dev with HTML, CSS, JS & frameworks. Creates
                                dynamic user-friendly experiences.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                                </svg>
                                <i class="bx bxl-android"></i>
                            </div>
                            <h4><a href="">Android</a></h4>
                            <p>
                                I offer Android app development services using Kotlin and
                                popular libraries.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-orange">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                                </svg>
                                <i class="bx bx-server"></i>
                            </div>
                            <h4><a href="">Back End</a></h4>
                            <p>
                                Skilled back-end developer using HapiJS, Express, Laravel for
                                robust, secure solutions.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                                </svg>
                                <i class="bx bxl-php"></i>
                            </div>
                            <h4><a href="">Laravel</a></h4>
                            <p>
                                Laravel full-stack web development, for seamless front-end and
                                back-end solutions.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                                </svg>
                                <i class="bx bxl-flutter"></i>
                            </div>
                            <h4><a href="">Flutter</a></h4>
                            <p>
                                Flutter app development with latest tech for intuitive,
                                high-performance apps.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                                </svg>
                                <i class="bx bxl-nodejs"></i>
                            </div>
                            <h4><a href="">Node JS</a></h4>
                            <p>
                                Node.js back-end development expertise for tailored solutions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <!-- <section id="testimonials" class="testimonials section-bg">
				<div class="container" data-aos="fade-up">
					<div class="section-title">
						<h2>Testimonials</h2>
					</div>

					<div
						class="testimonials-slider swiper"
						data-aos="fade-up"
						data-aos-delay="100"
					>
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="testimonial-item">
									<img
										src="assets/img/testimonials/testimonials-1.jpg"
										class="testimonial-img"
										alt=""
									/>
									<h3>Saul Goodman</h3>
									<h4>Attorney at Law</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Proin iaculis purus consequat sem cure digni ssim donec
										porttitora entum suscipit rhoncus. Accusantium quam,
										ultricies eget id, aliquam eget nibh et. Maecen aliquam,
										risus at semper.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p>
								</div>
							</div>
							

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img
										src="assets/img/testimonials/testimonials-2.jpg"
										class="testimonial-img"
										alt=""
									/>
									<h3>Sara Wilsson</h3>
									<h4>Designer</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Export tempor illum tamen malis malis eram quae irure esse
										labore quem cillum quid cillum eram malis quorum velit fore
										eram velit sunt aliqua noster fugiat irure amet legam anim
										culpa.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p>
								</div>
							</div>
							

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img
										src="assets/img/testimonials/testimonials-3.jpg"
										class="testimonial-img"
										alt=""
									/>
									<h3>Jena Karlis</h3>
									<h4>Store Owner</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Enim nisi quem export duis labore cillum quae magna enim
										sint quorum nulla quem veniam duis minim tempor labore quem
										eram duis noster aute amet eram fore quis sint minim.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p>
								</div>
							</div>
							

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img
										src="assets/img/testimonials/testimonials-4.jpg"
										class="testimonial-img"
										alt=""
									/>
									<h3>Matt Brandon</h3>
									<h4>Freelancer</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Fugiat enim eram quae cillum dolore dolor amet nulla culpa
										multos export minim fugiat minim velit minim dolor enim duis
										veniam ipsum anim magna sunt elit fore quem dolore labore
										illum veniam.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p>
								</div>
							</div>
							

							<div class="swiper-slide">
								<div class="testimonial-item">
									<img
										src="assets/img/testimonials/testimonials-5.jpg"
										class="testimonial-img"
										alt=""
									/>
									<h3>John Larson</h3>
									<h4>Entrepreneur</h4>
									<p>
										<i class="bx bxs-quote-alt-left quote-icon-left"></i>
										Quis quorum aliqua sint quem legam fore sunt eram irure
										aliqua veniam tempor noster veniam enim culpa labore duis
										sunt culpa nulla illum cillum fugiat legam esse veniam culpa
										fore nisi cillum quid.
										<i class="bx bxs-quote-alt-right quote-icon-right"></i>
									</p>
								</div>
							</div>
							
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</section> -->
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Bekasi, West Java, Indonesia</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>utsmand91@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 8128 6465 924</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form method="post" action="https://postmail.invotes.com/send" role="form" class="php-email-form email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="text" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="hidden" name="access_token" value="rv8j048v00ae8ho7d8ofmu7c" />

                                <input type="hidden" name="success_url" value="." />
                                <input type="hidden" name="error_url" value=".?err=1" />
                                <button type="submit" value="Send" class="send-email">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Dias Utsman</h3>
            <p>
                This portfolio showcases my professional background, qualifications,
                and experience.
            </p>
            <div class="social-links">
                <a target="_blank" href="https://github.com/diasutsman" class="github"><i class="bx bxl-github"></i></a>
                <a target="_blank" href="https://medium.com/@diasutsman" class="medium"><i class="bx bxl-medium"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/dias-utsman/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a target="_blank" href="https://dribbble.com/diasutsman" class="dribble"><i class="bx bxl-dribbble"></i></a>
                <a target="_blank" href="https://wa.me/6281286465924" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Dias Utsman</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <a href="https://bootstrapmade.com/">&nbsp;</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/normalize-text"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>