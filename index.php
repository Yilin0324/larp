<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="shortcut icon" href="mediaIcon/01.png">
  <!-- font icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <!-- bootstarp -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- owl -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- css -->
  <link rel="stylesheet" href="css/custom.css">

  <title>Larp</title>
</head>

<body id="top">
  <!-- 導覽列 -->
  <header class="fixed-top" id="Menu">
    <nav class="navbar navbar-expand-md navbar-dark" id="header-nav">
      <div class="container">
        <a class="link-dark navbar-brand site-title mb-0" href="#hero">
          <img src="img/logo03.png" alt="Logo" style="width: 120px;overflow: hidden;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-2">
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">關於我們</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#news">活動資訊</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#picture">最新消息</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="#picture">活動照片</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">登入</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <?php
  $heros=$Hero->all(['sh'=>1]);

    foreach($heros as $hero){
?>

    
  <!-- home -->
  <section id="hero" style="width: 100%; height: 90vh; position: relative;background: url('img/<?=$hero['img'];?>'); background-size: cover; object-fit: cover;">
    <div class="hero-container">
      <div class="col-6 offset-6">
        <h1 data-aos="fade-up"><?=$hero['title'];?></h1>
        <p class="col d-none d-md-block lh-lg" data-aos="fade-up">
        <?=$hero['text'];?>
        </p>
      </div>
    </div>
  </section><!-- End home Section -->
<?php
  }
?>
  <!-- marquee -->
  <div class="p-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-1">
          LARP
        </div>
        <div class="col-lg-11">
          <marquee>歡迎大家來踴躍參加活動，體驗角色臨演的快感！時常會有線上活動，集點可換好禮！快邀請身旁的親朋好友來參加吧！</marquee>
        </div>
      </div>
    </div>
    <hr class="mx-3">
  </div>

  <?php
  $abouts=$About->all(['sh'=>1]);

    foreach($abouts as $about){
  ?>
  <!-- About -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 gx-5" data-aos="fade-up">

          <div class="row align-items-center fw-bold mb-3">
            <div class="col-auto">
              <h3 class="fw-bold text-danger newsTitle px-3 d-inline-block">關於我們</h3>
              <span class="fw-bold text-secondary">Abouts us</span>
            </div>
          </div>
          <h1 class="h1 my-4 fw-bold text-dark"><?=$about['title'];?></h1>
          <p class="lh-lg">
            <?=$about['text'];?>
          </p>
    <?php
      }
    ?>
          <p class="my-4 fw-bold">各個活動傳送們 :</p>
          <div class="row mb-3">
    <?php
      $links=$Link->all(['sh'=>1]);
      foreach($links as $link){
    ?>
            <div class="col-md-6">
              <p><i class="far fa-hand-point-right me-2"></i><a href="<?=$link['href'];?>"><?=$link['text'];?></a></p>
            </div>
    <?php
      }
    ?>
          </div>
        </div>
    <?php
      $abouts=$About->all(['sh'=>1]);
      foreach($abouts as $about){
    ?>
        <div class="col-lg-6 gx-5" data-aos="fade-up" data-aos-delay="500">
          <img class="img-fluid" src="img/<?=$about['img'];?>" style="width: 600px;height: 480px; object-fit: cover;">
        </div>
      </div>
    <?php
    }
    ?>
    </div>
  </section><!-- End About Section -->


  <!-- News -->
  <section id="news" class="news section-bg">
    <div class="container">

      <div class="section-title"></div>

      <div class="row">

        <div class="col-lg-8 col-md-7" data-aos="fade-up">
          <div class="row">
            <div class="row align-items-center fw-bold mb-3">
              <div class="col-auto">
                <h3 class="fw-bold text-danger newsTitle px-3 d-inline-block">活動資訊</h3>
                <span class="fw-bold text-secondary">Events</span>
              </div>
            </div>
            <hr style="border-right: 80px solid #fff;">
    <?php
      $events=$News->all(['sh'=>1],"order by `id` desc limit 6,4");
      foreach($events as $event){
    ?>
            <div class="card m-2" style="width: 20rem;">
              <img src="img/<?=$event['img'];?>" class="card-img-top mt-3" style="height:180px; object-fit: cover">
              <div class="card-body">
                <h5 class="card-title"><?=$event['title'];?></h5>
                <p><i class="far fa-clock"></i> <?=$event['day'];?></p>
                <p class="card-text" style="white-space: pre-wrap;"><?=$event['text'];?></p>
              </div>
            </div>
    <?php
      }
    ?>

          </div>
        </div>

        <div class="col-lg-4 col-md-5" data-aos="fade-up" data-aos-delay="500">
          <div class="row align-items-center fw-bold mb-3">
            <div class="col-auto">
              <h3 class="fw-bold text-danger newsTitle px-3 d-inline-block">最新消息</h3>
              <span class="fw-bold text-secondary">News</span>
            </div>

          </div>
          <hr>

          <div class="row">
    <?php
      $news=$News->all(['sh'=>1],"order by `id` desc limit 0,6");
      foreach($news as $new){
    ?>
            <a type="button" class="modelButton" data-bs-toggle="modal" data-bs-target="#newsModel<?=$new['id'];?>">
              <div class="py-2 mt-3 ">
                <h5 class="h5 fw-bold"><?=$new['title'];?></h5>
                <p class="history-place"><?=$new['place'];?></p>
                <p><i class="far fa-clock"></i> <?=$new['day'];?></p>
              </div>
            </a>
    
            <!-- Modal -->
            <div class="modal fade" id="newsModel<?=$new['id'];?>" tabindex="-1" aria-labelledby="newsModelLabel<?=$new['id'];?>"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <span style="position:relative; top:5px; right: -93%;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </span>
                  <div class="modal-header justify-content-center position-relative">
                    <h5 class="modal-title" id="newsModelLabel<?=$new['id'];?>"><?=$new['title'];?></h5>
                  </div>
                  <div class="modal-body">

                    <div class="m-2" style="width: 28rem;">
                      <img src="img/<?=$new['img'];?>" class="card-img-top mt-3">
                      <div class="card-body">
                        <p><i class="far fa-clock"></i> <?=$new['day'];?></p>
                        <p style="white-space: pre-wrap;"><?=$new['text'];?></p>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
            </div>
    <?php
      }
    ?>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!-- End News Section -->


  <!-- Picture -->
  <section id="picture" class="picture">
    <div class="container">
      <div class="pictureTitle mt-5 mb-3">
        <div class="row align-items-center fw-bold mb-3">
          <div class="col-auto">
            <h3 class="fw-bold text-danger newsTitle px-3 d-inline-block">活動照片</h3>
            <span class="fw-bold text-secondary">Picture</span>
          </div>
        </div>
      </div>
      <div class="row pb-3 pt-3">
        <div class="owl-carousel owl-theme">
    <?php
      $images=$Image->all(['sh'=>1]);
        foreach($images as $image){
    ?>
          <div class="item">
            <a type="button" class="imgtype">
              <img class="img-fluid" src="img/<?=$image['img'];?>" style="height:230px; object-fit: cover;">
            </a>
          </div>
    <?php
      }
    ?>
        </div>
      </div>

    </div>
    <!-- <div class="container imgContainer">
      <div id="imgShow" class="text-center mt-5"></div>
    </div> -->
    <!-- <div>

      <div class="row g-0">
        <div class="col-lg-3 col-md-6">
          <div class="imagePicture">
            <img class="img-fluid" src="https://picsum.photos/800/600/?random=8">
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="imagePicture">
            <img class="img-fluid" src="https://picsum.photos/800/600/?random=9">
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="imagePicture">
            <img class="img-fluid" src="https://picsum.photos/800/600/?random=10">
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="imagePicture">
            <img class="img-fluid" src="https://picsum.photos/800/600/?random=11">
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="imagePicture">
            <img class="img-fluid" src="https://picsum.photos/800/600/?random=12">
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="imagePicture">
            <img class="img-fluid" src="https://picsum.photos/800/600/?random=13">
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="imagePicture">
            <img class="img-fluid" src="https://picsum.photos/800/600/?random=14">
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="imagePicture">
            <img class="img-fluid" src="https://picsum.photos/800/600/?random=15">
          </div>
        </div>

      </div>

    </div> -->
  </section>
  <!-- End My Picture Section -->

  <!-- contact -->
  <section id="contact">
    <div class="container my-5">

      <div class="row">
        <h5 class="h5 text-center fw-bold pb-3">THANK YOU!</h5>
        <p class="text-center mb-5">
          感謝撥冗瀏覽此頁面，歡迎使用 <a href="https://www.facebook.com/LARPtimes"><i class="fab fa-facebook" style="color:#6c757d;"></i></a> 與我們聯繫：）
        </p>
      </div>

    </div>
  </section>
  <!-- End contact -->

  <section class="bg-dark text-muted text-center pt-5" style="overflow: hidden;">
    <div class="container border-bottom border-secondary pb-3">
      <div class="row">

        <div class="col-lg-4">
          <p><a href="https://www.facebook.com/LARPtimes" style="color:#6c757d;text-decoration: auto;">
              <img src="img/logo03.png" alt="Logo" style="width: 145px;overflow: hidden;"><br>
              歡迎加入粉絲團 <i class="fab fa-facebook"></i></a></p>
        </div>

        <div class="col-lg-4">
            <p>更新日期 : </p>
            <p><?=$Time->find(1)['text'];?> </p>
        </div>

        <div class="col-lg-4">
          <p>今日瀏覽人次 : <?=$Total->find(['date'=>date("Y-m-d")])['total'];?> </p>
          <p>總計瀏覽人次 : <?=$Total->sum('total');?></p>
        </div>

      </div>
    </div>
  </section>
  <!-- footer -->
  <footer class="bg-dark text-muted text-center py-3">

    <small>
      Designed by xxx<br>
      copyright &copy; <span>xxx</span>. all rights reserved
    </small>
    
  </footer><!-- End footer Section -->



  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
  <!-- owl -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>