<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>home</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="assets/css/leadmark.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1>Don't Worry</h1>
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a class="nav-link" href="#info">التعيلمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#exam1">الأمحان الأول </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#exam2">الأمحان الثاني</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">You are</h1>
            <h1 class="title">Special</h1>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <!-- Service Section -->
    <section  id="info" class="section pt-0">
        <div class="container">
            <h6 class="section-title text-center">تعليمات </h6>
            <h2 class="section-subtitle text-center mb-5 pb-3">جاهزين للجي ولا ايه لان الي جي تقيل؟<br> <br>
                طيب نركز  كدا المفروض نعمل ايه ؟؟؟؟</h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5  style="text-align: center;" class="card-title mt-3">رقم 1  <h5>
                            <p style="text-align: center;" class="mb-0">تستني وقت الامتحان و تدخل تحل طيب هتعرف منين وقت الامتحان هيجيلك رسالة علي التلفون بالمعاد .</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 style="text-align: center;" class="card-title mt-3">رقم 2<h5>
                            <p  style="text-align: center;" class="mb-0"> تدخل على اللينك تسجل وتحل الامتحان و تتأكد من  حل كل الاسئلة .</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 style="text-align: center;" class="card-title mt-3">رقم 3<h5>
                            <p style="text-align: center;" class="mb-0">و اكيد طبعا لازم تدخل تحل بسرعه و متفكرش تتاخر في حل المسابقة لان وقت المسابقة  قليل .</p>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section -->
    <section class="section" id="exam1">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6  style="text-align: center;" class="section-title mb-0">الأمتحان الأول </h6><br>
                    <h6  style="text-align: center;" >مالك خوفت ليه ادخل متخافش ياعم ادخل </h6><br>
                   <div class="center">
                    <button type="button" class="btn btn-primary" onclick="window.location='{{ url("/exam1") }}'">الأمتحان الأول </button>
                   </div>
                </div>
             </div>              
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Portfolio Section -->
    <section id="exam2" class="section portfolio-section">
    <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    <h6  style="text-align: center;" class="section-title mb-0">الأمتحان الثاني </h6><br>
                    <h6  style="text-align: center;" >ايه لسه قلقان ياعم خش خش  من غير تفكير</h6><br>
                   <div class="center">
                    <button type="button" class="btn btn-primary" onclick="window.location='{{ url("/exam2") }}'">الأمتحان الثاني </button>
                   </div>
                </div>
             </div>              
        </div>            
    </section>
    <!-- End of portfolio section -->

    <!-- Blog Section -->
    
    <!-- End of Testmonial Section -->

    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">

            <h1 style="text-align: center;">Don't Worry 8</h1> <br>
            <h4 style="text-align: center;"> You are Special</h4>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
                <p style="text-align: center;" class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, Dont'worry Created By خدمة شباب </p>     
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>
</html>
