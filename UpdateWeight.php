<?php
session_start();
$id=$_SESSION['user'];
$db_server = 'localhost';
$db_user_name = 'anm';
$db_password = '123456';
$db_name = 'db1';




if (isset($_POST['we'])) {
    $newWe = $_POST['we'];
    $_SESSION['variable']=$newWe;
}
if (empty($newWe)) {

    header('location:MonthsProfile.php?wewe=true');
    exit;
}


@ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");



$query3367="select Duration from paidaccuser where mobileNum='$id'";
$result=mysqli_query($db,$query3367) or die("error");
while($row = mysqli_fetch_assoc($result)) {
    $Dura=$row['Duration'];
}

if($_SESSION['count']===($Dura-1) ){


    header('location:MonthsProfile.php?finished=true');
}

else{

$query4445=" SELECT idForDiet FROM paidaccuser WHERE mobileNum= $id ";
$result41=mysqli_query($db,$query4445) or die("error");
while($row = mysqli_fetch_assoc($result41)) {
    $idDold = $row['idForDiet'];
}


$query33="update paidaccuser set weight=$newWe  where mobileNum='$id'";
$result=mysqli_query($db,$query33) or die("error");

$query4444=" SELECT id FROM paiddiet WHERE maxWeight >= $newWe AND minWeight <= $newWe ";
$result41=mysqli_query($db,$query4444) or die("error");
while($row = mysqli_fetch_assoc($result41)) {
    $idDnew = $row['id'];
    if($idDnew===$idDold){

        $idDnew=$idDnew+1;

    }
}



$query3366="update paidaccuser set idForDiet=$idDnew  where mobileNum='$id'";
$result=mysqli_query($db,$query3366) or die("error");




$_SESSION['count']=$_SESSION['count']+1;
header('location:MonthsProfile.php');
}
?>
