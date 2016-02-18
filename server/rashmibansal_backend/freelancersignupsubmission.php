<?php
header('Access-Control-Allow-Origin: *');
//include 'sendmailviagmail.php';
//sendmail($_POST['email'],$_POST['name']);
//sendmail("arpitj@iitk.ac.in","arpit");


//echo $passworda;
//$device = $_GET['device'];
$uri = "mongodb://arpitjain099:rashmibansal@ds059938.mongolab.com:59938/rashmibansal";
$options = array("connectTimeoutMS" => 30000);

 $m = new MongoClient($uri, $options );
$db = $m->selectDB("rashmibansal");
   //echo "Database thesisdb selected";
   $collection = $db->users;
   $joe = $collection->findOne(array("emailid" => $_POST['emailid']));
   if($joe)echo "User already exists! Try logging in!";
   else{
   $collection->insert(array("password"=> $_POST['password'], "emailid"=>$_POST['emailid'],"name"=> $_POST['name'],"count"=>0,"list"=>[]));	
   echo "User registered!";

   }
   //echo "Collection selected succsessfully";
   //$joe = $collection->findOne(array("username" => $_POST['username'],"password"=> $_POST['password']));
   //if(!$joe)echo "wrong credentials";
   //
   //else echo "user found";
//echo $result+"";

?>