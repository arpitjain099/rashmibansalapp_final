<?php
header('Access-Control-Allow-Origin: *');
//include 'sendmailviagmail.php';
//sendmail($_POST['email'],$_POST['name']);
//sendmail("arpitj@iitk.ac.in","arpit");


//echo $passworda;
//$device = $_GET['device'];
$emailid=$_POST['emailid'];

$chapter=$_POST['chapter'];
$uri = "mongodb://arpitjain099:rashmibansal@ds059938.mongolab.com:59938/rashmibansal";
$options = array("connectTimeoutMS" => 30000);

 $m = new MongoClient($uri, $options );
$db = $m->selectDB("rashmibansal");
   //echo "Database thesisdb selected";
   $collection = $db->users;
   $count = $collection->findOne(array("emailid" => $emailid))['count'];
   $collection->update( array("emailid" => $emailid), array('$addToSet' => array("list" => $chapter)) );
   $collection->update( array("emailid" => $emailid), array('$set' => array('count' => $count+1, )) );
?>
