<?php
/*

$username = $_GET['username'];
$passworda = $_GET['password'];
//echo $pass
//$device = $_GET['device'];
$hostname = "localhost";
$host_database = "thesis1";
$user = "root";
$password = "";
$conn = new mysqli($hostname, $user, $password,$host_database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo $username;
//echo "<br>";
//echo $password;
$sql = "SELECT * FROM `users` WHERE id='$username' && password='$passworda'";
$result = $conn->query($sql);
//echo $result+"";
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		//echo $row['bid'];
		//echo $row['rating'];//.'_'.$row['coupontext'];
		echo "true";	
	}
}else{
	//$r="INSERT INTO beacontable (bid) VALUES ($bid)";
	//$res1=mysqli_query($conn,$r);
	echo "false";
    //if (!$res1) {
    //die('Something really bad happened. Please try again!' . mysql_error());
//}
}

*/
// ^^ old php code
header('Access-Control-Allow-Origin: *');
$uri = "mongodb://arpitjain099:rashmibansal@ds059938.mongolab.com:59938/rashmibansal";
$options = array("connectTimeoutMS" => 30000);

 $m = new MongoClient($uri, $options );
$db = $m->selectDB("rashmibansal");
   //echo "Connection to database successfully";
   //echo "<br>";
   // select a database
   $db = $m->rashmibansal;
   //echo "Database thesisdb selected";
   $collection = $db->users;
   //echo "Collection selected succsessfully";
   $joe = $collection->findOne(array("emailid" => $_POST['emailid'],"password"=> $_POST['password']));
   if(!$joe)echo "wrong credentials";
   //
   else echo "user found";
  //echo $joe['phone'];
   


?>