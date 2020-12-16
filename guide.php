<?php
 session_start( );
 ?>

<!doctype html>
<html>
<head><meta charset="utf-8"><title>매장안내_ Coffee HOUSE</title>
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
          height:650px;
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
  width: 1000px;
}
h4{
  display: inline;
}
</style>
</head>
<body>
  <div id="container">
    <header>
    <div>매장안내</div>
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
    <p style="text-align:center">
	       <img src="img2/map.jpg" width="500" height="350">
    </p>
  <table>
    <thead style="text-align:center; color: #753520;"><tr><th><h1>오시는 방법</h1></th></tr></thead>
    <tbody><tr style="font-weight:bold"><td>*대중교통 이용시</td></tr>
            <tr><td> 1호선 병점역 하차 → 병점역 2번 출구로 나와서 55번/56번/56-1번 버스 승차 → 한신대입구 하차<br><br><br></td></tr>
            <tr style="font-weight:bold"><td>*자가용 이용시</td></tr>
            <tr><td>1번 국도 (서울, 시흥, 안양, 군포, 의왕 방면) 경수로 1번 국도 동수원사거리 오산방면으로 직진
                    → 권선지하차도 → 비행장도로 <br>→ 병점지하차도 옆길 →315번 지방도 화성시청/정남 방면으로 우회전 → 효행길 84번 지방도 고가도로
                    → 한신대길 좌회전 <br>→ 한신대입구 도착</td></tr></tbody>
  </table>
  </section><br>
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
