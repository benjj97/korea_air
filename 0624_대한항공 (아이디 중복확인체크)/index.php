<?php 
  include("./php/dbconn.php");
  // if(!isset($_SESSION['ss_mb_id'])){ //세션아이디가 있을 경우에
  //   $mb_id = $_SESSION['ss_mb_id']; //아이디값을 저장하여 출력하게
  // }
  $mb_id = $_SESSION['ss_mb_id'];

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keyword" content="스카이패스, 사전좌석 배정, 항공권 예매, 수하물 안내">
  <meta name="Description" content="항공 스케줄, 스카이패스, 할인 항공권, 여행상품안내">
  <meta name="Robots" content="Index, Follow">
  <meta http-equiv="Subject" content="국내, 해외 여행정보, 좌석예매">
  <meta http-equiv="Title" content="대한항공">
  <title>대한항공-모바일웹(앱)</title>
  <!-- CSS초기화 -->
  <link href="./css/reset.css" rel="stylesheet" type="text/css">
  <!-- 공통서식 -->
  <link href="./css/common.css" rel="stylesheet" type="text/css">
  <!-- 메인서식 -->
  <link href="./css/main.css" rel="stylesheet" type="text/css">
  <!-- swiper서식 -->
  <link href="./css/swiper.css" rel="stylesheet" type="text/css">
</head>
<body>
  <!-- 상단헤더영역 -->
  <header>
    <h1>
      <a href="index.html" title="상단로고">
        <img src="./images/txt_logo.png" alt="상단로고">
      </a>
    </h1>

    <!-- 토글버튼 클릭시 nav나오게 하기 
      1. css로 체크박스에 체크하면 nav나오게하기
      2. javascript, jquery = span태그(햄버거 아이콘) 클릭시 nav나오게하기 
    -->
    <div class="toggle_btn"></div>


    <?php 
      if(isset($mb_id)){
        echo $mb_id . '님';
      }else{
        echo '<a href="login.php" title="로그인" class="login_btn">로그인하기</a>';
      }
    ?>
    
  </header>

  <!-- 메인콘텐츠영역 -->
  <main>
    <section>

        <article class="grid">
          <div class="slider swiper mySwiper">
            <ul class="swiper-wrapper">
              <li class="swiper-slide"><a href="#"><img src="./images/banner01.jpg" alt=""></a></li>
              <li class="swiper-slide"><a href="#"><img src="./images/banner02.jpg" alt=""></a></li>
              <li class="swiper-slide"><a href="#"><img src="./images/banner03.jpg" alt=""></a></li>
            </ul>
          </div>
          <div class="cont1">c1</div>
          <div class="cont2">c2</div>
          <div class="cont3">c3</div>
          <div class="cont4">c4</div>
          <div class="cont5">c5</div>
        </article>
        <div class="login_b">
          <img src="./images/skypass.jpg" alt="skypass">
        </div>
    </section>
  </main>

  <!-- 푸터영역 -->
  <footer>
    <nav class="f_nav">
      <ul>
        <li><strong>개인정보취급방침</strong></li>
        <li>PC버전보기</li>
        <li>앱다운로드</li>
      </ul>
    </nav>

    <div class="footer_b">
      <p>Copyright&copy; 2022 KOREAN AIR Allrights reserved.</p>
      <p>사업자등록번호 0000-000-0000 통신판매업 신고번호 : 강서 제00-000</p>
    </div>

  </footer>

  <!-- 스와이퍼 스크립트 -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- <script src="./script/swiper.js"></script> -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 0,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>
</html>