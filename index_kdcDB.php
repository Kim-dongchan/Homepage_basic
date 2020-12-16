<?php
 session_start( );
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Coffee HOUSE_ 커피집</title>
	<!--<link rel="stylesheet" type="css" href="css/tab.css" /-->
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
setTimeout("window.open('event.html','','left=60,top=70,width=750,height=600')",900);

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
body {
		background-color: #FFFCFD;
    font-family: Verdana, sans-serif;
    margin:0;
}
#container {
              width : 1000px;
	            margin : 0 auto;
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
div > a{
  text-decoration: none;
  color:black;
}
.menubar_hr {
      width:994px;
      border: 3px solid #F57C11;
      margin:0;
}
section{
          width:1000px;
          height:1030px;
}
section > div{
		display: inline;
		position:relative;
}
footer{
        width:1000px;
        height:100px;
        text-align:center;
}
.image{
       position: relative;
	     float:left;
}
.text{
	position: absolute;
	top:10px;
	width:1000px;
	text-align: center;
}
.image2{
		position:absolute;
		right: 220px;
		float:right;
		border-radius:30px;
}
.text2{
		float:left;
		font-weight:bold;
		font-size:2em;
		color: #753520;
}
h1.text2:after{
		content:"";
		display:block;
		width:80px;
		border-bottom: 2px solid;
		margin: 20px 0px;
    color: #753520;
}
.text3 {
		float:left;
}
.text4 {
		float:left;
		font-weight:bold;
}
h4{
    display: inline;
}

</style>
</head>
<body>
  <div id="container">
    <header>
      <div><a href="index_kdcDB.php" targert="_self"><h4 title="누르면 메인 화면으로 돌아갑니다.">Coffee HOUSE</h4></a></div>
   <ul>
	<?php
	  if (empty($_SESSION['user_name'])) { ?>
	    <li><a href="loginForm_kdcDB2.php">로그인</a></li>
		<li><a href="memberRegistration_kdcDB2.php">회원가입</a></li>
	  <?php }
	  else { ?>
        <li><a href="logout.php" onclick=" query(event)">로그아웃</a></li>
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
<div class="image">
 <img src="img2/coffee5.jpg" width="1000" height="400">
   <div class="text">
      <h1>Coffee House</h1> <br> <h3>합리적인 가격, 놀라운 퀄리티의 커피전문점 "Coffee HOUSE" 입니다.</h3>
    </div>
</div>
<br><br>
<hr><br><br><br>
 <h1 class="text2"><i>수입부터 블렌딩/로스팅/신선도 유지까지 <br>완벽한 원두</i></h1> <br>
  <p class="text3">
 원두는 콜롬비아 베이스에 엘살바도르와 브라질산 원두를 블렌딩하여 <br>사용하는데,<br>
 수확한지 1년 미만 된 아라비카 뉴크롭 생두를 생산국 정부의 수확 시기, 품질,<br>
 크기 등 엄격한 기준을 토대로 선별하여 수입합니다.<br>
 이 까다로운 조건을 통과하여 수입된 원두는 최상의 공간에서 최적의 배전도로 <br>로스팅 되고, <br>로스팅이 완료된 원두는 신선도 유지를 위해 2일 내로 전국 가맹점에 빠르게 배송되며,<br>
 매장에서는 로스팅 완료 후<br> 2주 내에 사용할 수 있게끔 엄격한 시스템이 운영되고 있습니다.<br></p>
 <p class="text4">
 이렇게 만들어지는 원두는 세계적인 마일드 커피인 콜롬비아 수프리모 베이스로,<br>
 엘살바도르의 묵직한 바디감에 기분 좋은 산미와 밀키한 초콜릿의 단맛을 <br>가미한 맛이 강점입니다.<br></p>
 <img src="img2/coffee beans.jpg"  height="450" class="image2">
</section>
 <hr style="width:900px">
<footer>
<br>
<strong>
  <i>주소: 경기도 오산시 한신대길</i> &nbsp&nbsp|&nbsp&nbsp TEL: 031-1234-5678 &nbsp&nbsp|&nbsp&nbsp FAX: 031-1234-8765<br>
 사업자등록번호: 000-12-345678 &nbsp&nbsp|&nbsp&nbsp 대표이사: 홍길동</strong>
</footer>
</div>
</body>
