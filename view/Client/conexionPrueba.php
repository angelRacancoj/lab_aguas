 <?php
$servername = "localhost";
$username = "root";
$password = "ex=d/dx=ex";
$dbname = "water_laboratory";

function createClient($dpi,$name,$phone,$costum_id){
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO `water_laboratory`.`CLIENT` (`dpi_client`, `name_client`, `phone_client`, `costum_client_id`) VALUES (5556667770901,'Jeanneth Baten', '48692179', 3);";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}

function printClient($dpi,$name,$direction,$department,$company,$phone,$extra_phone,$fax,$email,$web,$costum){
	echo "Cliente: ".$dpi." , ".$name." , ".$direction." , ".$department." , ".$company." , ".$phone." , ".$extra_phone." , ".$fax." , ".$email." , ".$web." , ".$costum;
}

if (isset($_POST['dpi'],$name=$_POST['client_name'],$phone=$_POST['phone'],$costum=$_POST['costum'])) {
	$dpi=$_POST['dpi'];
	$name=$_POST['client_name'];
	$direction=$_POST['direction'];
	$department=$_POST['department'];
	$company=$_POST['company'];
	$phone=$_POST['phone'];
	$extra_phone=$_POST['extra_phone'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$web=$_POST['web'];
	$costum=$_POST['costum'];
}else{

}


if(isset($_POST['addClient']))
{
   printClient($dpi,$name,$direction,$department,$company,$phone,$extra_phone,$fax,$email,$web,$costum);
} 
?> 