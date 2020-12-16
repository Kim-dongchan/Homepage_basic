<!DOCTYPE html>
<html>
<head><meta charset="utf8"><title>로그인_CoffeHOUSE</title>
<style>
form { width : 25%; margin: 0% auto; background-color : #D1F2ED;}
</style>
</head>
<body>
<?php
require('dbConnect_kdcDB.php');

session_start( );
//if form submitted, inser values into the database
if (isset($_POST['user_id'])){
	$user_id = $_POST['user_id'];
	$user_password = $_POST['user_password'];

	$query = "SELECT * from `members` WHERE user_id='$user_id' and user_password='".md5($user_password)."'";
	$conn->set_charset("utf8");
	$result = $conn->query($query) or die($conn->error( ));
	$rows = $result->fetch_assoc( );
	   if (isset($rows)) {
		   $_SESSION['user_name']= $rows['user_name']; //사용자명: 예, 홍길동
		   //redirect user to index.php
		   header("Location: index_kdcDB.php");//메인 홈피로 돌아가기
	   } else {
		   echo "<div>
		   <h2>User id/password is incorrect!!!.</h2>
		   <br/>
		   Click here to <a href='loginForm_kdcDB2.php'>Go to Login page again</a></div>";
	   }
} else {
	?>
  <h3 align="center">LOGIN</h3>
  <hr>
  <form action="" method="post" >
    <fieldset>
      <table>
        <legend align="center"><strong>로그인</strong></legend>
          <tr><td>ID (아이디) : </td><td><label><input type="text" name="user_id" autocomplete="off" required></label></td></tr>
          <tr><td>P/W (비밀번호) : </td><td><label><input type="password" name="user_password" autocomplete="off" required></label></td></tr>
      </table>
        <p align="center"> <input type="submit" value="로그인">&nbsp;&nbsp;&nbsp;<input type="reset" value="초기화"></p>
      </fieldset>
</form>
</div>
<?php } ?>
</body>
</html>
