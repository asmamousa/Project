<?php
session_start();

$mob6=$_SESSION['mob6'];
$pass6=$_SESSION['pass6'];
$name6=$_SESSION['name6'];
$age6=$_SESSION['age6'];
$h6= $_SESSION['h6'];
$w6=$_SESSION['w6'];

if (isset($_POST)) {

    $SIN6=$_POST['SIN1'];
    $CP6=$_POST['CP6'];
    $BN6=$_POST['BN6'];

    if(empty($SIN6) || empty($CP6) || empty($BN6))
    {
        header('location:pay6.php?UDFF6=true');
        exit;
    }

    else{
        $db_server = 'localhost';
        $db_user_name = 'anm';
        $db_password = '123456';
        $db_name = 'db1';

        @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

        $sq11=" SELECT id FROM paiddiet WHERE maxWeight >= $w6 AND minWeight <= $w6 and minHeight<=$h6 and maxHeight>=$h6";
        $result41=mysqli_query($db,$sq11) or die("error");
        while($row = mysqli_fetch_assoc($result41)) {
            $idD3 = $row['id'];
        }

        $sq1 = "INSERT INTO `paidaccuser` (`mobileNum`,`pass`,`Height`,`weight`,`age`,`Name`,`Duration`,`idForDiet`,`CreditNum`,`CreditPass`,`BankName`)
VALUES ('$mob6','$pass6','$h6','$w6','$age6','$name6','6','$idD3','$SIN6','$CP6','$BN6')";


        if ($db->query($sq1) === TRUE) {

            header('location:login.php');

        } else {
            echo "Error: " . $sq1 . "<br>" . $db->error;
        }

    }

}






?>