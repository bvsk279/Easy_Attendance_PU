<?php 
$dbhost = "original-database-instance-test.covcqng3jius.us-east-1.rds.amazonaws.com";
$dbuser = "sivakrishnaa";
$dbpass = "sivakrishna241di.";
$dbname = "EAVIT";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (isset($_POST["tq-form-submit"])){

    $tqname = $_POST['tq-name'];
    $tqemail = $_POST['tq-email'];
    $tqphone = $_POST['tq-phone'];
    $tqmsg = $_POST['tq-msg'];
    date_default_timezone_set("Asia/Kolkata");
    $tqtimestamp = date('Y-m-d H:i:s');
if(!$conn )
{
    die('Could not connect');
}
else{
    ?>
    <script>
        console.log("Connected to Server!, Saying Thankyou!.");
    </script>
    <?php
}

$sql2 = "INSERT INTO `TqMsgs`(`tqName`, `tqEmail`,`tqPhone`, `tqMsg`, `tqTimestamp`) VALUES ('$tqname', '$tqemail', '$tqphone', '$tqmsg', '$tqtimestamp')";

$thanking = mysqli_query($conn,$sql2);
if($thanking)
{
    echo "<script>alert('My pleasure, Thankyou in return for your efforts during this Pandamic.');</script>";
}
else{
    echo "<script>alert('Sorry, We couldn't recieve your Message. Try again Later.');</script>";
}
mysqli_close($conn);
}
?>