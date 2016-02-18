
<?php
session_start();

                                $txnid=time();
                                $key= $txnid;
                        
                        $surl=  "http://home.iitk.ac.in/~arpitj/rashmibansal_backend/yippster/receive.php";
                        $furl=  "http://home.iitk.ac.in/~arpitj/rashmibansal_backend/yippster/fail.php";
                        $curl=  "http://home.iitk.ac.in/~arpitj/rashmibansal_backend/yippster/cancel.php";
                        $firstname=     "arpit";
                        $lastname="jain";
                        $email="arpitjain099@gmail.com";
                        $phone="8960482697";
                        $productinfo="newprao34d516";
                        $amount="0";
                        $merchantID="49";
                        $merchantkey="e012a56";

                        $_SESSION["txnid"]=$txnid;
        $_SESSION["surl"]= $surl;
        $_SESSION["furl"]= $furl;
        $_SESSION["curl"]= $curl;
        $_SESSION["firstname"]=$firstname;
        $_SESSION["lastname"]=$lastname;
        $_SESSION["email"]=$email;
        $_SESSION["emailidofbuyer"]="arpitjain099@gmail.com";
        $_SESSION["chaptertobebought"]="chapter4232";
        $_SESSION["phone"]=$phone;
        $_SESSION["productinfo"]=$productinfo;
        $_SESSION["amount"]=$amount;
        $_SESSION["merchantID"]=$merchantID;
        $_SESSION['merchantkey']=$merchantkey;
 $hash = hash('md5',($amount.$merchantID.$merchantkey.$key.$txnid.$surl.$furl.$curl.$firstname.$lastname.$email.$phone.$productinfo));

?>

<html>

<form name="auto" action="http://yippster.com/smspay/testent.php" method="post">
<?php echo'
                <input type="hidden" name="key" value="'.$key.'" />
        <input type="hidden" name="hash" value="'.$hash.'"/>
        <input type="hidden" name="txnid" value="'.$txnid.'" />
        <input type="hidden" name="surl" value="'.$surl.'"/>
        <input type="hidden" name="furl" value="'.$furl.'"/>
        <input type="hidden" name="curl" value="'.$curl.'"/>
        <input type="hidden" name="firstname" value="'.$firstname.'" />
        <input type="hidden" name="lastname" value="'.$lastname.'" />
        <input type="hidden" name="email" value="'.$email.'" />
        <input type="hidden" name="phone" value="'.$phone.'" />
        <input type="hidden" name="productinfo" value="'.$productinfo.'" />
        <input type="hidden" name="amount" value="'.$amount.'" />
        <input type="hidden" name="lang" value="hi" />
        <input type="hidden" name="merchantID" value="'.$merchantID.'" />';?>
</form>
<script>
document.auto.submit();
</script>

</html>


