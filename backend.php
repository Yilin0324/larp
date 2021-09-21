<?php include_once "base.php";
if(!isset($_SESSION['admin'])){
    to("login.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Dashboard</title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/svg/logo.html" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/style.min.css">

  
  <!-- jq -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>

</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="" class="logo-wrapper" title="Home">
                
                <span class="sr-only">Home</span>
                <!-- <span class="icon logo" aria-hidden="true"></span> -->
                <div class="logo-text">
                    <span class="logo-title">LARP</span>
                    <span class="logo-subtitle">後台管理</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
              <span class="sr-only">Toggle menu</span>
              <span class="icon menu-toggle" aria-hidden="true"></span>
          </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="?do=home"><span class="icon home" aria-hidden="true"></span>Home</a>
                </li>
                
                <li>
                    <a href="?do=larp_hero">
                        <span class="icon image" aria-hidden="true"></span>主題視覺區
                    </a>
                </li>
                <li>
                  <a href="?do=larp_about">
                      <span class="icon document" aria-hidden="true"></span>關於我們
                  </a>
              </li>
              <li>
                <a href="?do=larp_link">
                    <span class="icon paper" aria-hidden="true"></span>臉書連結
                </a>
            </li>
            <ul class="cat-sub-menu">
              <li>
                  <a href="">All pages</a>
              </li>
              <li>
                  <a href="#">Add new page</a>
              </li>
          </ul>
                <li>
                    <a href="?do=larp_news">
                        <span class="icon folder" aria-hidden="true"></span>活動資訊
                    </a>
                </li>
                <li>
                    <a href="?do=larp_image">
                        <span class="icon image" aria-hidden="true"></span>活動照片
                    </a>
                </li>
                <li>
                  <a href="?do=larp_time">
                      <span class="icon edit" aria-hidden="true"></span>更新日期
                  </a>
              </li>
              <li>
                  <a href="?do=larp_admin">
                      <span class="icon user-3" aria-hidden="true"></span>帳號管理
                  </a>
              </li>
                <!-- <li>
                    <a href="comments.html">
                        <span class="icon message" aria-hidden="true"></span>
                        Comments
                    </a>
                    <span class="msg-counter">0</span>
                </li> -->
            </ul>

        </div>
    </div>
    
</aside>

  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav me-5">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      
      <div class="nav-user-wrapper">
        <button  class="nav-user-btn dropdown-btn" title="My profile" type="button">
          
          <span class="nav-user-img">
            登出
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          
          <li><a class="danger" href="index.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
      <?php
				$do=$_GET['do']??'home';
				$file="backend/" . $do . ".php";
				include_once file_exists($file)?$file:"backend/home.php";
			?>
      </div>
    </main>
    

  </div>
</div>

<!-- bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Chart library -->
<script src="plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>

<!-- Custom scripts -->

<script src="js/script.js"></script>


</body>


</html>