 <?php
$servername = "localhost";
$username = "root";
$password = "ex=d/dx=ex";
$dbname = "water_laboratory";

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
?> 