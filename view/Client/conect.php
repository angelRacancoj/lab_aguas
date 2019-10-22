 <?php
 if(isset($_POST['add'])){
	echo "<p>Hola</p>";
	printClient();
} elseif (isset($_POST['hola'])) {
	hola_mundo();
} 

function printClient(){
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
	echo "<p>Cliente: $dpi , $name , $direction , $department , $company , $phone , $extra_phone , $fax , $email , $web , $costum</p>";
}

function hola_mundo(){
	echo "<h1>Hola Mundo</h1>";
}
/*
$servername = "localhost";
$username = "root";
$password = "ex=d/dx=ex";
$dbname = "water_laboratory";

if(isset($_POST['addClient'])){
	echo "Hola3";
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
   		printClient($dpi,$name,$direction,$department,$company,$phone,$extra_phone,$fax,$email,$web,$costum);
	}
} 
	echo "<p>Hola1</p>";
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
*/
?> 