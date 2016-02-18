<?php
$params = array ('emailid' => 'arpitjain099@gmail.com', 'chapter' => 'pleasework');
 
// Build Http query using params
$query = http_build_query ($params);
 
// Create Http context details
$contextData = array ( 
                'method' => 'POST',
                'header' => "Connection: close\r\n".
                            "Content-Length: ".strlen($query)."\r\n",
                'content'=> $query );
 
// Create context resource for our request
$context = stream_context_create (array ( 'http' => $contextData ));
 
// Read page rendered as result of your POST request
$result =  file_get_contents (
                  'http://172.27.30.109/rashmibansal_backend/buychaptersfree.php',  // page url
                  false,
                  $context);

?>