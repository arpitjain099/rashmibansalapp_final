<?php
header('Access-Control-Allow-Origin: *');

//echo $passworda;
//$device = $_GET['device'];
$emailid = $_POST['emailid'];
$uri = "mongodb://arpitjain099:rashmibansal@ds059938.mongolab.com:59938/rashmibansal";
$options = array("connectTimeoutMS" => 30000);

 $m = new MongoClient($uri, $options );
$db = $m->selectDB("rashmibansal");
   //echo "Database thesisdb selected";
   $collection = $db->users;
   //$joe = $collection->findOne(array("email" => $_POST['email']));
   //if($joe)echo "user exists";
   //else{
    $joe = $collection->findOne(array("emailid" => $emailid));
   //var_dump($joe);
     
     
   
       $return = array(
           '_id'=>$joe['_id'],
           'list'=>$joe['list'],
           'count'=>$joe['count'],
           'emailid'=>$joe['emailid'],
          'name'=>$joe['name'],
                    );
       if($joe) echo json_encode($return);
   else{
   echo "user not found!";

   }
   //}
   //echo "Collection selected succsessfully";
   //$joe = $collection->findOne(array("username" => $_POST['username'],"password"=> $_POST['password']));
   //if(!$joe)echo "wrong credentials";
   //
   //else echo "user found";
//echo $result+"";

?>