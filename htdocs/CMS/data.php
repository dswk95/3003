<?php

use PHPMailer\PHPMailer\PHPMailer;
include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";

$mail = new PHPMailer();




$name = $_POST["name"];
$mobilenum = $_POST["mobilenum"];
$location = $_POST["location"];
include_once 'connectdb.php';
$sql1 = "INSERT INTO reports (name,mobile,location) VALUES ('$name','$mobilenum','$location');";
mysqli_query($conn,$sql1);

?>

<html>
<body>

Too late <?php echo $_POST["name"]; ?> is dead! <br>

<?php

$sql = "SELECT * FROM reports;";
$result = mysqli_query($conn,$sql);

$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){

	while($row = mysqli_fetch_assoc($result)){
		
		echo $row['id']."<br>";
		
	}
}


?>

</body>
</html>
