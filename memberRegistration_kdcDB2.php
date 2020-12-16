<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>회원가입_ Coffe HOUSE</title>
<link rel="stylesheet" href="css/style.css" />
<script>
function query(e){
    var ret = confirm("회원가입을 완료하시겠습니까?");
    if(ret == true)
        alert("회원가입이 되었습니다.");
    else {
      alert("취소되었습니다.");
      e.preventDefault();
    }
    return;
}
function verifynotify(field1, field2, result_id, match_html, nomatch_html) {
  this.field1 = field1;
  this.field2 = field2;
  this.result_id = result_id;
  this.match_html = match_html;
  this.nomatch_html = nomatch_html;

  this.check = function() {
    // Make sure we don't cause an error
    // for browsers that do not support getElementById
    if (!this.result_id) { return false; }
    if (!document.getElementById){ return false; }
    r = document.getElementById(this.result_id);
    if (!r){ return false; }

    if (this.field1.value != "" && this.field1.value == this.field2.value) {
      r.innerHTML = this.match_html;
    } else {
      r.innerHTML = this.nomatch_html;
    }
  }
}

function verifyInput() {
  verify = new verifynotify();
  verify.field1 = document.reg_form.user_password;
  verify.field2 = document.reg_form.password2;
  verify.result_id = "password_result";
  verify.match_html = "<span style=\"color:blue\">비밀번호가 일치합니다!<\/span>";
  verify.nomatch_html = "<span style=\"color:red\">비밀번호를 확인하시오!<\/span>";

  // Update the result message
  verify.check();
}

// Multiple onload function created by: Simon Willison
// http://simonwillison.net/2004/May/26/addLoadEvent/
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}

addLoadEvent(function() {
  verifyInput();
});
//-->
</script>
<style>
form {
        width : 31.6%;
        margin: 0% auto;
        background-color : #D1F2ED;
}
#submit1 {
   text-align : center;
   font-size : 25px;
}
td > div{
  display: inline-block;
}

</style>
</head>
<body>
<?php
require('dbConnect_kdcDB.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['user_id'])){
    $user_id = $_REQUEST['user_id'];
    $user_password = $_REQUEST['user_password'];
	$user_name = $_REQUEST['user_name'];
    $user_gender = $_REQUEST['user_gender'];
    $user_email = $_REQUEST['user_email'];
	$user_phone = $_REQUEST['user_phone'];
	$reg_date = date("Y-m-d H:i:s");

	$query = "INSERT into `members` (user_id, user_password, user_name, user_gender,
	                                 user_email,user_phone, reg_date)
         VALUES ('$user_id', '".md5($user_password)."', '$user_name','$user_gender',
		 '$user_email','$user_phone','$reg_date')";
	$conn->set_charset("utf8");
    $result = $conn->query($query);
    if($result){
       echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='loginForm_kdcDB2.php'>Login</a></div>";
        }
    }else{
?>
<h4 align="center">회원가입을 환영합니다!</h4>
<hr>
<form name="reg_form" action="" method="post">
  <fieldset>
     <table>
       <legend align="center"><strong>회원가입</strong></legend>
          <tr><td>아 이 디 : </td><td><input tpye="text" name="user_id" autofocus autocomplete="off"></td></tr>
          <tr><td>비밀번호 : </td><td><input type="password" name="user_password"  size="16" maxlength="16" onkeyup="verify.check()"></td></tr>
          <tr><td>비밀번호 확인 : </td><td><input type="password" name="password2" size="16" maxlength="16" onkeyup="verify.check()"> <div id="password_result" style="font-size:13px;"></div></td></tr>
          <tr><td>이 름 : </td><td><input type="text" name="user_name" autofocus autocomplete="off"></td></tr>
          <tr><td>성 별 : </td><td> <label><input type="radio" name="user_gender" value="male">남성</label>
                                   <label><input type="radio" name="user_gender" value="female">여성</label> </td></tr>
          <tr><td>e-mail : </td><td><input type="email" name="user_email" size="25" maxlength="25" placeholder="id@com"></td></tr>
          <tr><td>연 락 처 : </td><td><input type="tel" name="user_phone" size="11" maxlength="11" placeholder="01012345678">
                              <small style="color:red">* -없이 입력</small></td></tr>
     </table>
     <p id="submit1"><input type="submit" value="가입하기" onclick="query(event)">&nbsp;&nbsp;&nbsp;<input type="reset" value="초기화"></p>
  </fieldset>
</form>
<?php } ?>

</body>
</html>
