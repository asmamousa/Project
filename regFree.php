<?php
session_start();

/*$mob11=$_SESSION['mob1'];
$pass11=$_SESSION['pass1'];
$name11=$_SESSION['name1'];
$age11=$_SESSION['age1'];
$h11= $_SESSION['h1'];
$w11=$_SESSION['w1'];
*/
$mobNumber44=$_SESSION['user'];

if (isset($_POST)) {

    $SINF=$_POST['SINF'];
    $CPF=$_POST['CPF'];
    $BNF=$_POST['BNF'];
    $DF=$_POST['DF'];

    if(empty($SINF) || empty($CPF) || empty($BNF) || empty($DF))
    {
        header('location:Free2pay.php?UDFF3=true');
        exit;
    }

    else{
        $db_server = 'localhost';
        $db_user_name = 'anm';
        $db_password = '123456';
        $db_name = 'db1';

        @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

        $sq44=" SELECT * FROM freeaccuser WHERE mobileNum=$mobNumber44";
        $result44=mysqli_query($db,$sq44) or die("error");
        while($row = mysqli_fetch_assoc($result44)) {
            $password = $row['password'];
            $Height = $row['Height'];
            $Weight = $row['Weight'];
            $Age = $row['Age'];
            $Name = $row['Name'];

        }


        $sq11=" SELECT id FROM paiddiet WHERE maxWeight >= $Weight AND minWeight <= $Weight and minHeight<=$Height and maxHeight>=$Height";
        $result41=mysqli_query($db,$sq11) or die("error");
        while($row = mysqli_fetch_assoc($result41)) {
            $idD3 = $row['id'];
        }


        $sq1 = "INSERT INTO `paidaccuser` (`mobileNum`,`pass`,`Height`,`weight`,`age`,`Name`,`Duration`,`idForDiet`,`CreditNum`,`CreditPass`,`BankName`)
        VALUES ('$mobNumber44','$password','$Height','$Weight','$Age','$Name','$DF','$idD3','$SINF','$CPF','$BNF')";


        if ($db->query($sq1) === TRUE) {

            $sq11=" delete FROM freeaccuser WHERE mobileNum=$mobNumber44";
            $result41=mysqli_query($db,$sq11) or die("error");
            header('location:login.php');

        } else {
            echo "Error: " . $sq1 . "<br>" . $db->error;
        }

    }

}






?>