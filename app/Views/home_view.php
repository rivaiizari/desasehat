<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= APP_TITLE ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url().BASE_URL ?>/favicon.ico" rel="icon">
  <link href="<?= base_url().BASE_URL ?>/assets_medico/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url().BASE_URL ?>/assets_medico/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?= base_url().BASE_URL ?>/assets_medico/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url().BASE_URL ?>/assets_medico/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url().BASE_URL ?>/assets_medico/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url().BASE_URL ?>/assets_medico/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url().BASE_URL ?>/assets_medico/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url().BASE_URL ?>/assets_medico/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url().BASE_URL ?>/assets_medico/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url().BASE_URL ?>/assets_medico/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Senin - Sabtu, 9AM to 4PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +62 878-3931-0073
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="<?= site_url().BASE_URL ?>/home" class="logo me-auto"><img src="<?= base_url().BASE_URL."/".APP_IMAGE_HOME_TOP ?>" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Membuat</span> Janji</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?= base_url().BASE_URL ?>/assets_medico/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Welcome to <span><?= APP_TITLE ?></span></h2>
            <p>A3 Physio Center menjadi tempat pelayanan fisioterapi yang terbaik, terpercaya dan mampu dijangkau seluruh masyarakat untuk mencapai masyarakat yang lebih aktif.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(<?= base_url().BASE_URL ?>/assets_medico/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Layanan Terapi</h2>
            <p>A3 Physio Center bergerak di 3 Sub penanganan</p>
            <a href="#services" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(<?= base_url().BASE_URL ?>/assets_medico/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Pricing</h2>
            <p>A3 Physio Center memiliki beberapa paket layanan</p>
            <a href="#pricing" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Sport (Olahraga)</a></h4>
              <p class="description">Meliputi rehabilitasi cedera olahraga, rehabilitasi paska bedah, program persiapan pertandingan, program pencegahan cedera (skrining risiko cedera) dan lain-lain.</p>
            </div>
          </div>

          <!-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div> -->

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4 class="title"><a href="">Musculoskeletal (Otot, tulang dan Sendi)</a></h4>
              <p class="description">Meliputi rehabilitasi paska bedah tulang, nyeri pinggang, nyeri lutut, nyeri bahu, nyeri leher, radang sendi, kelainan postur (scoliosis, kifosis, lordosis, bahu tinggi sebelah, pinggang tinggi sebelah) dan lain-lain.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">Neuromuscular (Saraf)</a></h4>
              <p class="description">Meliputi rehabilitasi paska bedah tulang, nyeri pinggang, nyeri lutut, nyeri bahu, nyeri leher, radang sendi, kelainan postur (scoliosis, kifosis, lordosis, bahu tinggi sebelah, pinggang tinggi sebelah) dan lain-lain.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>In an emergency? Need help now?</h3>
          <!-- <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
          <a class="cta-btn scrollto" href="#appointment">Make an Make an Appointment</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>A3 Physio Center merupakan praktik fisioterapi mandiri yang berada di wilayah Piyungan, Bantul, Yogyakarta. Fisioterapi merupakan bentuk pelayanan kesehatan yang ditujukan kepada individu dan/atau kelompok untuk mengembangkan, memelihara dan memulihkan gerak dan fungsi tubuh sepanjang rentang kehidupan dengan menggunakan penanganan secara manual, peningkatan gerak, peralatan (fisik, elektroterapeutis dan mekanis) pelatihan fungsi, komunikasi.</p>
          <br>
          <p class="fst-italic">A3 Physio Center merupakan singkatan dari 'be <b>A</b>ctive', 'more <b>A</b>ctive' & 'the most <b>A</b>ctive', yang diharapkan bahwa A3 Physio Center dapat membantu mengembangkan, memilihara, dan memulihkan individu atau kelompok menjadi aktif, lebih aktif untuk mencapai gerak yang paling aktif di aktivitas sehari-hari, dalam bekerja maupun berolah raga.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="<?= base_url().BASE_URL ?>/file_add/55b25c0e-0574-4a41-a531-8a6cad392610.JPG" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
           
            <h3>Visi & Misi</h3>
            <h4> 1.	Visi :</h4>
            <p class="fst-italic">
            A3 Physio Center menjadi tempat pelayanan fisioterapi yang terbaik, terpercaya dan mampu dijangkau seluruh masyarakat untuk mencapai masyarakat yang lebih aktif.
            </p>
            <h4> 2.	Misi :</h4>
            <ul>
              <li><i class="bi bi-check-circle"></i>Penanganan Fisioterapi dengan pendekatan manual therapy dan terapi latihan yang spesifik.</li>
              <li><i class="bi bi-check-circle"></i>Berorientasi pasien dalam pengambilan keputusan medis dengan pembekalan informasi medis yang terpercaya.</li>
              <li><i class="bi bi-check-circle"></i>Meningkatkan kemampuan SDM melalui peningkatan keilmuan fisioterapis setiap tahunnya.</li>
              <li><i class="bi bi-check-circle"></i>Menyediakan jasa layanan kesehatan sesuai dengan kebutuhan pasien.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Fisioterapis</strong> </p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Fasilitas </strong></p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Modalitas Penunjang</strong> </p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="31" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards</strong> </p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("<?= base_url().BASE_URL ?>/assets_medico/img/features.jpg");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section> -->
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>A3 Physio Center bergerak di 3 Sub penanganan:</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">Sport (Olahraga)</a></h4>
            <p class="description">Meliputi rehabilitasi cedera olahraga, rehabilitasi paska bedah, program persiapan pertandingan, program pencegahan cedera (skrining risiko cedera) dan lain-lain.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Musculoskeletal (Otot, tulang dan Sendi)</a></h4>
            <p class="description">Meliputi rehabilitasi paska bedah tulang, nyeri pinggang, nyeri lutut, nyeri bahu, nyeri leher, radang sendi, kelainan postur (scoliosis, kifosis, lordosis, bahu tinggi sebelah, pinggang tinggi sebelah) dan lain-lain.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Neuromuscular (Saraf)</a></h4>
            <p class="description">Meliputi Saraf kejepit (leher, pinggang, pergelangan tangan), rehabilitasi paska stroke, wajah perot (bells palsy).</p>
          </div>
          <!-- <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div> -->
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="Department 1">Sport (Olahraga)</option>
                <option value="Department 2">Musculoskeletal (Otot, tulang dan Sendi)</option>
                <option value="Department 3">Neuromuscular (Saraf)</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Anggi Wahyu Sudianingrum, S.Ftr., Ftr. AIFO</option>
                <option value="Doctor 2">Rodhiatam Miftahul Jannah, S. Ftr., Ftr</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Modalitas Penunjang</h2>
          <p>A3 Physio Center mempiliki penunjang alat:</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Ultrasound</h4>
                  <!-- <p>(Olahraga)</p> -->
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>TENS</h4>
                  <p>Transcutaneous Electrical Nerve Stimulation</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>ES</h4>
                  <p>Electrical Stimulation</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>ESWT</h4>
                  <p>Extracorporeal Shock Wave Therapy</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                  <h4>Recovery pump</h4>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                  <h4>Infrared</h4>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-7">
                  <h4>Alat exercise lainnya</h4>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Ultrasound</h3>
                <!-- <p class="fst-italic">Olahraga</p> -->
                <img src="<?= base_url().BASE_URL ?>/file_add/ULTRASONOGRAFI.jpg" alt="" class="img-fluid">
                <p>Ultrasonografi medis adalah sebuah teknik diagnostik pencitraan menggunakan suara ultra yang digunakan untuk mencitrakan organ internal dan otot, ukuran mereka, struktur, dan luka patologi, membuat teknik ini berguna untuk memeriksa organ. Sonografi obstetrik biasa digunakan ketika masa kehamilan.</p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>TENS</h3>
                <p class="fst-italic">Transcutaneous Electrical Nerve Stimulation</p>
                <img src="<?= base_url().BASE_URL ?>/file_add/TENS_machine_2_20.jpg" alt="" class="img-fluid">
                <p>TENS adalah salah satu modalitas atau teknik Fisioterapi untuk mengurangi nyeri dengan menggunakan energi listrik yang sudah dimodifikasi untuk merangsang sistem saraf.</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>ES</h3>
                <p class="fst-italic">Electrical Stimulation</p>
                <img src="<?= base_url().BASE_URL ?>/file_add/TENS_machine_2_20.jpg" alt="" class="img-fluid">
                <p>Electrical Muscle Stimulation bisa membantu meningkatkan fungsi stabilitas sendi tulang belakang secara keseluruhan. Latihan fisik ini juga bermanfaat untuk meningkatkan kekuatan daya tahan otot, berapa kali otot dapat berkontraksi sebelum merasa lelah.</p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>ESWT</h3>
                <p class="fst-italic">Extracorporeal Shock Wave Therapy</p>
                <img src="<?= base_url().BASE_URL ?>/file_add/ESWT.jpg" alt="" class="img-fluid">
                <p>Terapi gelombang kejut ekstrakorporeal adalah alternatif rawat jalan non-invasif untuk operasi bagi mereka yang memiliki banyak gangguan sendi dan tendon.</p>
              </div>
              <div class="tab-pane" id="tab-5">
                <h3>Recovery pump</h3>
                <!-- <img src="<?= base_url().BASE_URL ?>/file_add/TENS_machine_2_20.jpg" alt="" class="img-fluid"> -->
                <p>Recovery pump menjadi salah satu fasilitas yang dapat dipilih saat anda menjalankan Fisioterapi di Klinik Sasana Husada. Recovery pump dapat mencegah timbulnya nyeri otot, denyut jantung dan tekanan darah, meningkatkan kapasitas kontraktil kaki, mengurangi pembekakan dan kekakuan serta melepaskan kelelahan otot sebesar 45%.</p>
              </div>
              <div class="tab-pane" id="tab-6">
                <h3>Infrared</h3>
                <img src="<?= base_url().BASE_URL ?>/file_add/INFRARED.jpeg" alt="" class="img-fluid">
                <p>Rasa panas yang dihasilkan oleh lampu infrared, diharapkan mampu melebarkan pembuluh darah sehingga aliran darah menjadi lancar dan proses penyembuhan luka atau peradangan di tubuh semakin cepat. Rasa panas dari lampu terapi infrared ini juga dapat mengurangi nyeri pada sendi-sendi atau otot.</p>
              </div>
              <div class="tab-pane" id="tab-7">
                <h3>Alat exercise lainnya</h3>
                <img src="<?= base_url().BASE_URL ?>/file_add/terapis_lainnya.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Pasien yang telah melakukan terapis di A3 Physio Center </p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  nyaman,murah dan rekomendasi untuk para atlit yang menyembuhkan pasca cedera🙏🏻🙏🏻
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?= base_url().BASE_URL ?>/file_add_comment/4.png" class="testimonial-img" alt="">
                <h3>Victor </h3>
                <h4>Atlet &amp; Sepak bola</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Good place to rehabilitation for any sports injuries
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?= base_url().BASE_URL ?>/file_add_comment/2.png" class="testimonial-img" alt="">
                <h3>Isnain </h3>
                <h4>Atlet &amp; Rugby</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Pelayanan ramah dan murah tapi penanganan tidak murahan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?= base_url().BASE_URL ?>/file_add_comment/5.png" class="testimonial-img" alt="">
                <h3>Farisal </h3>
                <h4>Polisi &amp; Gunung Kidul</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fisioterapi merupakan bentuk pelayanan kesehatan yang ditunjukkan kepada individu dan atau kelompok untuk mengembangkan, memelihara, dan memulihkan gerak dan fungsi tubuh sepanjang daur kehidupan dengan menggunakan penangan secara manual, peningkatan  gerak, peralatan(fisik, elektroterapeutis dan mekanik), pelatihan fungsi dan komunikasi. Jadi fisioterapi merupakan terapi medis bukan alternatif, serta penanganan fisioterapi tanpa menggunakan obat. 💪🔥👍
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?= base_url().BASE_URL ?>/file_add_comment/1.png" class="testimonial-img" alt="">
                <h3>Raka Octa</h3>
                <h4>Atlet &amp; Sepak bola</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Recomend buat yang cidera olahraga atau kecelakaan bisa kesini, deket lokasinya sama area Sleman timur.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?= base_url().BASE_URL ?>/file_add_comment/3.png" class="testimonial-img" alt="">
                <h3>Ulung </h3>
                <h4>Polisi &amp; Gunung Kidul</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fisioterapis</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="<?= base_url().BASE_URL ?>/assets_medico/img/doctors/doctors-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Anggi Wahyu Sudianingrum, S.Ftr., Ftr. AIFO</h4>
                <span>Fisioterapis</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="<?= base_url().BASE_URL ?>/assets_medico/img/doctors/doctors-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rodhiatam Miftahul Jannah, S. Ftr., Ftr</h4>
                <span>Fisioterapis</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-1.jpg"><img src="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-2.jpg"><img src="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-3.jpg"><img src="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-4.jpg"><img src="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-5.jpg"><img src="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-6.jpg"><img src="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-7.jpg"><img src="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-8.jpg"><img src="<?= base_url().BASE_URL ?>/assets_medico/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>Harian A</h3>
              <h4><sup>Rp</sup>60<span>K</span></h4>
              <ul>
                <li>1 alat</li>
                <li>latihan ringan</li>
                <li class="na">1 pertemuan</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Reservasi Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Harian B</h3>
              <h4><sup>Rp</sup>80<span> K</span></h4>
              <ul>
                <li>1-2 alat</li>
                <li>latihan sedang</li>
                <li class="na">1 pertemuan</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Reservasi Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>Harian C</h3>
              <h4><sup>Rp</sup>100<span> K</span></h4>
              <ul>
                <li>12-3 alat</li>
                <li>latihan berat</li>
                <li class="na">1 pertemuan</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Reservasi Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <span class="advanced">Lebih Hemat</span>
              <h3>Paket C</h3>
              <h4><sup>Rp</sup>510<span> K</span></h4>
              <ul>
                <li>2-3 alat</li>
                <li>latihan berat</li>
                <li >6 pertemuan</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Reservasi Sekarang</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questioins</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section> -->
    <!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6109566144864!2d110.46719101744382!3d-7.830934699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a50fe3e200dd3%3A0xee702e827d1bb72d!2sA3%20Physio%20Center!5e0!3m2!1sid!2sid!4v1649675181414!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Jl. Mandungan No.RT 02, Onggoparum, Srimartani, Kec. Piyungan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55792</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>a3physiocenter@gmail.com<br></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+62 8783-9310-073<br></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><?= APP_NAME ?></h3>
              <p>
              Jl. Mandungan No.RT 02, Onggoparum, Srimartani, <br>
              Kec. Piyungan, Kabupaten Bantul,<br> Daerah Istimewa Yogyakarta 55792<br><br>
                <strong>Phone:</strong> +62 8783-9310-073<br>
                <strong>Email:</strong> a3physiocenter@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/a3.physio" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sport</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Musculoskeletal </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Neuromuscular</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <!-- <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>rivai_ashari</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url().BASE_URL ?>/assets_medico/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url().BASE_URL ?>/assets_medico/vendor/aos/aos.js"></script>
  <script src="<?= base_url().BASE_URL ?>/assets_medico/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url().BASE_URL ?>/assets_medico/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url().BASE_URL ?>/assets_medico/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url().BASE_URL ?>/assets_medico/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url().BASE_URL ?>/assets_medico/js/main.js"></script>

</body>

</html>