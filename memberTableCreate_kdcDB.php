<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname ="kdcDB";

//Creat connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("접속에 실패했습니다. " . $conn->connect_error);
}
//테이블 생성[` :Grave accent이고, 사용하지 않아도 무방함]
$sql = "CREATE TABLE members (
`user_id` VARCHAR(30) NOT NULL PRIMARY KEY,
`user_password`  VARCHAR(64) NOT NULL,
`user_name` VARCHAR(30) NOT NULL,
`user_gender` VARCHAR(10) NOT NULL,
`user_email` VARCHAR(60) NOT NULL,
`user_phone` VARCHAR(15) NOT NULL,
`user_hobby` VARCHAR(70) NOT NULL,
`reg_date` TIMESTAMP  NOT NULL
)";

if ($conn->query($sql) == TRUE) {
	echo "Table members created successfully.";
} else {
	echo "Error creating table : " . $conn->error;
}

$conn->close();
?>
