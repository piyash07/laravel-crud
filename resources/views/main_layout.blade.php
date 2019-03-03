<!DOCTYPE html>
<html lang="en">
<head>

     <title>Known</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

     <!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('assets/css/templatemo-style.css')}}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Known</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="{{URL::to('/main-page')}}" class="smoothScroll">Home</a></li>
                         <li><a href="{{URL::to('/about-page')}}" class="smoothScroll">About</a></li>
                         <li><a href="{{URL::to('/teachers-page')}}" class="smoothScroll">Our Teachers</a></li>
                         <li><a href="{{URL::to('/courses-page')}}" class="smoothScroll">Courses</a></li>
                         <li><a href="{{URL::to('/reviews-page')}}" class="smoothScroll">Reviews</a></li>
                         <li><a href="{{URL::to('/contact-page')}}" class="smoothScroll">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-phone"></i> +65 2244 1100</a></li>
                    </ul>
               </div>

          </div>
     </section>

    @yield('content');

        <!-- FOOTER -->
        <footer id="footer">
        <div class="container">
        <div class="row">

        <div class="col-md-4 col-sm-6">
        <div class="footer-info">
        <div class="section-title">
        <h2>Headquarter</h2>
        </div>
        <address>
        <p>1800 dapibus a tortor pretium,<br> Integer nisl dui, ABC 12000</p>
        </address>

        <ul class="social-icon">
        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
        <li><a href="#" class="fa fa-twitter"></a></li>
        <li><a href="#" class="fa fa-instagram"></a></li>
        </ul>

        <div class="copyright-text"> 
        <p>Copyright &copy; 2018 Company Name</p>

        <p>Design: <a rel="nofollow noopener" href="{{asset('https://templatemo.com')}}" 
        title="free templates" target="_parent">Template Mo</a></p>
        </div>
        </div>
        </div>

        <div class="col-md-4 col-sm-6">
        <div class="footer-info">
        <div class="section-title">
        <h2>Contact Info</h2>
        </div>
        <address>
        <p>51/A,Dhaka</p>
        <p><a href="mailto:mip3054@gmail.com"></a></p>
        </address>

        <div class="footer_menu">
        <h2>Quick Links</h2>
        <ul>
        <li><a href="#">Career</a></li>
        <li><a href="#">Investor</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Refund Policy</a></li>
        </ul>
        </div>
        </div>
        </div>

         <div class="col-md-4 col-sm-12">
             <div class="footer-info newsletter-form">
                <div class="section-title">
                     <h2>Newsletter Signup</h2> 
                 </div>
                <div>
                  <div class="form-group">
                    <form action="#" method="get">
                      <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                      <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                </form>
                     <span><sup>*</sup> Please note - we do not spam your email.</span>
                     </div>
                  </div>
                </div>
             </div>
          </div>
        </div>
        </footer>


           <!-- SCRIPTS -->
                <script src="{{asset('assets/js/jquery.js')}}"></script>
                <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
                <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
                <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
                <script src="{{asset('assets/js/custom.js')}}"></script>

        </body>
        </html>        