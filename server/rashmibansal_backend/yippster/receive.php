

<?php session_start(); 
echo $_SESSION['emailidofbuyer'];echo "<br>";
echo $_SESSION['chaptertobebought'];
print_r($_SESSION);
print_r($_REQUEST);
//echo $hash = hash('sha512',($_SESSION['merchantkey'].$_SESSION['key'].$_SESSION["txnid"].$_SESSION["amount"].$_SESSION["firstname"].$_SESSION["lastname"].$_SESSION["email"].$_SESSION["productinfo"].$_POST['payphone']));
?>

<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript">
console.log("1");
console.log("<?php  echo $_SESSION['emailidofbuyer']?>");
	 $.post("http://172.27.30.109/rashmibansal_backend/buychaptersfree.php", { 
  
  emailid:"<?php  echo $_SESSION['emailidofbuyer']?>",chapter:"<?php  echo $_SESSION['chaptertobebought']?>"
})//Session("MySessionVariable").ToString()
.done(function( data ) {
	console.log(data);

  //write code to send localstorage object to server
  


});
console.log("2");
</script>