<?php 
$dbhost = "original-database-instance-test.covcqng3jius.us-east-1.rds.amazonaws.com";
$dbuser = "sivakrishnaa";
$dbpass = "sivakrishna241di.";
$dbname = "EAVIT";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (isset($_POST["submit-report"])){

    $rname = $_POST['rep-name'];
    $remail = $_POST['rep-email'];
    $rmsg = $_POST['rep-msg'];
    date_default_timezone_set("Asia/Kolkata");
    $rtimestamp = date('Y-m-d H:i:s');
if(!$conn )
{
    die('Could not connect');
}
else{
    ?>
    <script>
        console.log("Connected to Server!, Reporting an Error.");
    </script>
    <?php
}

$sql2 = "INSERT INTO `ErrorReports`(`rName`, `rEmail`, `rMsg`, `rTimestamp`) VALUES ('$rname', '$remail', '$rmsg', '$rtimestamp')";

$submitReport = mysqli_query($conn,$sql2);
if($submitReport)
{
    echo "<script>alert('Thankyou for reporting, We will fix this as soon as possible.');</script>";
   
}
else{
    echo "<script>alert('Sorry, We couldn't recieve your Message. Try again Later.');</script>";
}
mysqli_close($conn);
}
?>