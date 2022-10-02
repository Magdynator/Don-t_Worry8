<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Sidebar Menu | Side Navigation Bar</title>-->
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('admincss/testadmin.css') }}" />
    <link rel="stylesheet" href="{{ url('https://cd0njs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{  secure_asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{  secure_asset('admincss/testadmin.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{  secure_asset('https://cd0njs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}" />

    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="{{  secure_asset('https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css') }}" />

    <!-- <link rel="stylesheet" type="text/css" href="{{ url('admincss/pagecss.css') }}" /> -->
  <!-- Required meta tags -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('admincss/pagecss.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{  secure_asset('admincss/pagecss.css') }}" />

  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />    
  <link rel="stylesheet" type="text/css" href="{{  secure_asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css') }}" />

</head>
  <body>
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Dont't Worry 8</span>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Dont't Worry 8</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="/adminpanal" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Dashboard</span>
              </a>
            </li>
            <li class="list">
              <a href="admin/email" class="nav-link">
              <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Email</span>
              </a>
            </li>
            <li class="list">
              <a href="admin/Exams" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Exams</span>
              </a>
            </li>
            <li class="list">
              <a href="admin/Games" class="nav-link">
                <i class="bx bx-bell icon"></i>
                <span class="link">Games</span>
              </a>
            </li>
            <li class="list">
              <a href="admin/Message" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">Message</span>
              </a>
            </li>
            <li class="list">
              <a href="admin/ExamsSetting" class="nav-link">
              <i class="bx bx-cog icon"></i>
                <span class="link">exmas setting</span>
              </a>
            </li>
            
          </ul>

          
            </li>
          </div>
        </div>
      </div>
    </nav>

    <section class="overlay"></section>

    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script>
    @yield('content')
  </body>
</html>

