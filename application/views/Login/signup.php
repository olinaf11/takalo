<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Takalo</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
     <!-- Css Styles -->
     <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/elegant-icons.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plyr.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css">
</head>

<body>
    

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="<?php echo base_url('assets/css/Takalo.jpg')?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                    <img src="<?php echo base_url('assets/img/logo.jpg')?>" style="width:10%;"alt="">
                        <h2>Sign Up</h2>
                        <p>Bienvenu sur Takalo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Sign Up</h3>
                        <form action="#">
                            <div class="input__item">
                                <input type="text" placeholder="Email address">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" placeholder="Your Name">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">Login Now</button>
                        </form>
                        <h5>Already have an account? <a href="<?php echo base_url('C_login')?>">Log In!</a></h5>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Signup Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href=""><img src="<?php echo base_url('assets/img/darckLogo.png')?>" style="width:50%; alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li><p>ETU-002028-Fanilo</p></li>
                        <li><p>ETU-001991-Sabi</p></li>
                        <li><p>ETU-002047-Elyse</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p>
                    Projet Final S3 : Web Developpement (32h)
                    IT-University Andoharanofotsy
                    08-02-2023
                 </p>

              </div>
          </div>
      </div>
  </footer>
      <!-- Footer Section End -->

      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/player.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/jquery.nice-select.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/mixitup.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/jquery.slicknav.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"> </script>
    <script src="<?php echo base_url('assets/js/main.js')?>"> </script>

</body>

</html>