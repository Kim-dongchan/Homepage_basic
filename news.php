<?php
 session_start( );
 ?>

<!doctype html>
<html>
<head><meta charset="utf-8"><title>소식_ Coffee HOUSE</title>
  <script>
  setTimeout("window.open('event.html','','left=340,top=80,width=750,height=500')",900);

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
      width:994px;
      border: 3px solid #F57C11;
      margin:0;
}
div > a {
  text-decoration: none;
  color:black;
}
section{
          width:1000px;
          height:680px;
}
footer{
        width:1000px;
        height:100px;
        text-align:center;
}
header div {
  display:inline;
}
img {
  border-radius:50px;
}
table{
  text-align:center;
}
.num{
  width:87px;
}
.subject{
  width:87px;
}
.tit{
  width:657px;
  text-align:left;
}
.data{
  width:187px;
}
td > a {
  text-decoration: none;
  color:black;
}
h4{
  display: inline;
}
</style>
</head>
<body>
  <div id="container">
    <header>
    <div>News</div>
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
	       <img src="img2/news11.jpg" width="1000" height="350">
    </div><hr><br>
    <div>
      <table>
        <thead><tr><th class="num">번호</th><th class="subject">분류</th><th>제목</th><th class="date">등록일</th></tr></<thead>
        <tbody><tr><td class="num">10</td><td class="subject">이벤트</td><td class="tit"><a href="event.html" target="_blank">드립백 세트 증정 이벤트! <span style="color:red">(예시 링크)</span></a></td><td class="date">2018-12-02</td></tr>
          <tr><td class="num">9</td><td class="subject">소식</td><td class="tit"><a href="#">고소함과 달콤함! 신메뉴를 만나보세요.</a></td><td class="date">2018-11-28</td></tr>
          <tr><td class="num">8</td><td class="subject">소식</td><td class="tit"><a href="#">신메뉴 출시! 부드러운 커스터드라떼를 맛보세요!</a></td><td class="date">2018-11-03</td></tr>
          <tr><td class="num">7</td><td class="subject">소식</td><td class="tit"><a href="#">레몬이 듬뿍! 더욱 상큼해진 레몬티를 즐겨보세요.</a></td><td class="date">2018-10-22</td></tr>
          <tr><td class="num">6</td><td class="subject">소식</td><td class="tit"><a href="#">날씨가 쌀쌀해지면 생각나는 고구마라떼가 돌아왔습니다.</a></td><td class="date">2018-10-04</td></tr>
          <tr><td class="num">5</td><td class="subject">소식</td><td class="tit"><a href="#">신메뉴 출시 기념 이벤트! 09월 24일~30일까지!</a></td><td class="date">2018-09-23</td></tr>
          <tr><td class="num">4</td><td class="subject">이벤트</td><td class="tit"><a href="#"> 신메뉴 출시! 전통음료 수정과를 만나보세요.</a></td><td class="date">2018-09-13</td></tr>
          <tr><td class="num">3</td><td class="subject">소식</td><td class="tit"><a href="#">달콤한 복숭아를 그대로 담아낸 완전복숭아 출시!</a></td><td class="date">2018-09-01</td></tr>
          <tr><td class="num">2</td><td class="subject">소식</td><td class="tit"><a href="#">자연의 선물 '아보카도'를 시원한 음료로 즐겨보세요!</a></td><td class="date">2018-08-17</td></tr>
          <tr><td class="num">1</td><td class="subject">이벤트</td><td class="tit"><a href="#">오픈 이벤트! 전 상품 20% 할인 가격으로 만나보세요! </a></td><td class="date">2018-08-02</td></tr></tbody>
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
</body>
</html>
