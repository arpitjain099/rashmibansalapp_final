<?php
header('Access-Control-Allow-Origin: *');
//include 'sendmailviagmail.php';
//sendmail($_POST['email'],$_POST['name']);
//sendmail("arpitj@iitk.ac.in","arpit");


//echo $passworda;
//$device = $_GET['device'];
$m = new MongoClient();
 $db = $m->rashmibansal;
   //echo "Database thesisdb selected";
   $collection = $db->users;
   $collection->update( array("name" => "arpit"), array('$addToSet' => array("list" => "takemehome_ch1")) )

?>