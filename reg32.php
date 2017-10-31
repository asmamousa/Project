<?php
session_start();

$mob11=$_SESSION['mob1'];
$pass11=$_SESSION['pass1'];
$name11=$_SESSION['name1'];
$age11=$_SESSION['age1'];
$h11= $_SESSION['h1'];
$w11=$_SESSION['w1'];

if (isset($_POST)) {

    $SIN=$_POST['SIN'];
    $CP=$_POST['CP'];
    $BN=$_POST['BN'];

    if(empty($SIN) || empty($CP) || empty($BN))
    {
        header('location:pay.php?UDFF=true');
        exit;
    }

    else{
        $db_server = 'localhost';
        $db_user_name = 'anm';
        $db_password = '123456';
        $db_name = 'db1';

        @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

        $sq11=" SELECT id FROM paiddiet WHERE maxWeight >= $w11 AND minWeight <= $w11 and minHeight<=$h11 and maxHeight>=$h11";
        $result41=mysqli_query($db,$sq11) or die("error");
        while($row = mysqli_fetch_assoc($result41)) {
            $idD3 = $row['id'];
        }

        $sq1 = "INSERT INTO `paidaccuser` (`mobileNum`,`pass`,`Height`,`weight`,`age`,`Name`,`Duration`,`idForDiet`,`CreditNum`,`CreditPass`,`BankName`)
VALUES ('$mob11','$pass11','$h11','$w11','$age11','$name11','3','$idD3','$SIN','$CP','$BN')";


        if ($db->query($sq1) === TRUE) {

         header('location:login.php');

        } else {
            echo "Error: " . $sq1 . "<br>" . $db->error;
        }

    }

}






?>