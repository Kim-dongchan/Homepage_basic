<?php
 session_start( );
 ?>

<!doctype html>
<html>
<head><meta charset="utf-8"><title>메뉴_ Coffee HOUSE</title>
  <script>
  var last_tab = 1;

  function loadTab(tab_number)
  {
  if (tab_number === last_tab) return;

  document.getElementById("tab" + last_tab).style.display = "none";
  document.getElementById("tab" + tab_number).style.display = "block";
  document.getElementById("tab-button" + last_tab).style.opacity = "0.5";
  document.getElementById("tab-button" + tab_number).style.opacity = "1.0";

  last_tab = tab_number;
  }
  function query(e){
      var ret = confirm("로그아웃을 하시겠습니까?");
      if(ret == true)
          alert("로그아웃 되었습니다. \n 이용해주셔서 감사합니다!");
      else {
        alert("취소되었습니다.");
        e.preventDefault();
      }
      return;
  }
  </script>
<style>
#container {
            width : 1000px;
	          margin : 0 auto;
    }
body {
		background-color: #FFFCFD;
    font-family: Verdana, sans-serif;
    margin:0;
}
header {
          text-align:left;
          background: #F8F3DE;
          padding:30px;
          font-weight:bold;
}
header>ul>li {
      /*display:inline;*/
      list-style:none;
      padding:2px;
      margin-right:10px;
	   font-size : 18px;
	   float : right;
	}
header>ul>li>a {
	  text-decoration : none;
  }
#menubar {
  background: #404B57;
  text-align:left;
  padding:10px;
}
#menubar ul{
  margin:0;
  padding:0;
  width:1000px;
}
#menubar ul li{
    display: inline;         /*inline 옆 라인에 배치 하는 속성을 이용.*/
    list-style-type: none;
    padding: 0px 15px;       /*top=bottom=0, left=right=15px*/
}
#menubar ul li a{
  color: #D7DBDD;
  text-decoration: none;
}
#menubar ul li a:hover{
  /*position: relative;*/
  background: #2C343C;
  color: white;
}
.menubar_hr {
      width:1000px;
      border: 3px solid #F57C11;
      margin:0;
}
div > a {
  text-decoration: none;
  color:black;
}
section{
          width:1000px;
          height:810px;
}
footer{
        width:1000px;
        height:100px;
        text-align:center;
}
img {
  border-radius:50px;
}
tr th{
        width:167px;
}
header div {
  display: inline;
}
h4{
  display: inline;
}

* {box-sizing: border-box}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
  <div id="container">
    <header>
    <div>Menu</div>
    <div style="float:right">
      <a href="index_kdcDB.php" target="_self"><h4 title="누르면 메인 화면으로 돌아갑니다.">Coffee HOUSE</h4></a>
    </div>
    <ul>
 	<?php
 	  if (empty($_SESSION['user_name'])) { ?>
 	    <li><a href="loginForm_kdcDB2.php">로그인</a></li>
 		<li><a href="memberRegistration_kdcDB2.php">회원가입</a></li>
 	  <?php }
 	  else { ?>
         <li><a href="logout.php" onclick="query(event)">로그아웃</a></li>
 		<li><?php echo $_SESSION['user_name']; ?>님 안녕하세요.</li>
 	  <?php } ?>
    </ul>
  </header>
  <div id="menubar">
      <ul>
         <li><a href="menu.php" target="_self">메뉴</a>
         <li><a href="news.php" target="_self">소식</a>
		     <li><a href="guide.php" target="_self">매장안내</a>
		     <li><a href="propose.php" target="_self">고객의 소리</a>
      </ul>
  </div>
  <hr class="menubar_hr"><br>

  <section>
    <div>
      <div>
        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="img2/make11.jpg" style="width:100%; height:400px;">
          <div class="text">Caption One</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="img2/make33.jpg" style="width:100%; height:400px;">
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="img2/coffee7.jpg" style="width:100%; height:400px;">
          <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div><hr>
    <div>
    <table>
        <thead style="text-align:right"><tr><th>COFFEE</th><th></th><th>LATTE</th><th></th><th>ICE</th><th></th>&nbsp;</tr></thead>
        <tbody><tr style="text-align:right; color:red"><td></td><td><small>HOT&nbsp;&nbsp;&nbsp;ICED</small></td><td></td><td><small>HOT&nbsp;&nbsp;&nbsp;ICED</small></td><td></td><td></td></tr>
        <tr><td>에스프레소</td><td style="text-align:right">2000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</td><td>&nbsp;&nbsp;민트초코라떼</td><td style="text-align:right">3600&nbsp;&nbsp;&nbsp;3900</td><td>&nbsp;&nbsp;민트초코프라프치노</td><td style="text-align:right">4300</td></tr>
        <tr><td>아메리카노</td><td style="text-align:right">2500&nbsp;&nbsp;&nbsp;2800</td><td>&nbsp;&nbsp;그린티라뗴</td><td style="text-align:right">3600&nbsp;&nbsp;&nbsp;3900</td><td>&nbsp;&nbsp;체리베리프라프치노</td><td style="text-align:right">4300</td></tr>
        <tr><td>카페라떼</td><td style="text-align:right">3200&nbsp;&nbsp;&nbsp;3500</td><td>&nbsp;&nbsp;블루베리라뗴</td><td style="text-align:right">3600&nbsp;&nbsp;&nbsp;3900</td><td>&nbsp;&nbsp;그린티프라프치노</td><td style="text-align:right">4300</td></tr>
        <tr><td>헤이즐넛커피</td><td style="text-align:right">3200&nbsp;&nbsp;&nbsp;3500</td><td>&nbsp;&nbsp;토피넛라떼</td><td style="text-align:right">3600&nbsp;&nbsp;&nbsp;3900</td><td>&nbsp;&nbsp;초코청크프라프치노</td><td style="text-align:right">4300</td></tr>
        <tr><td>카푸치노</td><td style="text-align:right">3200&nbsp;&nbsp;&nbsp;3500</td><td>&nbsp;&nbsp;체리베리라뗴</td><td style="text-align:right">3600&nbsp;&nbsp;&nbsp;3900</td><td>&nbsp;&nbsp;카라멜프라프치노</td><td style="text-align:right">4300</td></tr>
        <tr><td>더치커피</td><td style="text-align:right">3700&nbsp;&nbsp;&nbsp;4000</td><td>&nbsp;&nbsp;오곡라뗴</td><td style="text-align:right">3400&nbsp;&nbsp;&nbsp;3700</td><td>&nbsp;&nbsp;생과일주스</td><td style="text-align:right">3800</td></tr>
        <tr><td>카페모카</td><td style="text-align:right">3700&nbsp;&nbsp;&nbsp;4000</td><td>&nbsp;&nbsp;자색고구마라뗴</td><td style="text-align:right">3400&nbsp;&nbsp;&nbsp;3700</td><td>&nbsp;&nbsp;스무디</td><td style="text-align:right">4000</td></tr>
        <tr><td>카라멜마끼야또</td><td style="text-align:right">3700&nbsp;&nbsp;&nbsp;4000</td><td>&nbsp;&nbsp;리얼초코티라뗴</td><td style="text-align:right">3600&nbsp;&nbsp;&nbsp;3900</td><td>&nbsp;&nbsp;쉐이크</td><td style="text-align:right">4000</td></tr>
        <tr><td>아포가또</td><td style="text-align:right">-&nbsp;&nbsp;&nbsp;2800</td><td>&nbsp;&nbsp;로얄밀크티</td><td style="text-align:right">4300&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</td><td>&nbsp;&nbsp;에이드</td><td style="text-align:right">3500</td></tr>
        <tr><td>더치 원액(500ml)</td><td style="text-align:right">15000</td><td>&nbsp;&nbsp;빠넬라라뗴</td><td style="text-align:right">3600&nbsp;&nbsp;&nbsp;3900</td><td>&nbsp;&nbsp;복숭아 아이스티</td><td style="text-align:right">2800</td></tr></tbody>
    </table>
  </div>
  </section>
  <hr>
  <footer>
 <br>
 <strong>
   <i>주소: 경기도 오산시 한신대길</i> &nbsp&nbsp|&nbsp&nbsp TEL: 031-1234-5678 &nbsp&nbsp|&nbsp&nbsp FAX: 031-1234-8765<br>
	사업자등록번호: 000-12-345678 &nbsp&nbsp|&nbsp&nbsp 대표이사: 홍길동</strong>
 </footer>
  </div>

  <script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }


var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

</body>
</html>
