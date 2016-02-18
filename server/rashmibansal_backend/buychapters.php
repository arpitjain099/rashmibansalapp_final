<?php
header('Access-Control-Allow-Origin: *');
//include 'sendmailviagmail.php';
$emailid=$_GET['emailid'];

$chapter=$_GET['chapter'];
//calltopaymentgateway
$uri = "mongodb://arpitjain099:rashmibansal@ds059938.mongolab.com:59938/rashmibansal";
$options = array("connectTimeoutMS" => 30000);

 $m = new MongoClient($uri, $options );
$db = $m->selectDB("rashmibansal");
   $collection = $db->users;
 
   $collection->update( array("emailid" => $emailid), array('$addToSet' => array("list" => $chapter)) );
  
?>
