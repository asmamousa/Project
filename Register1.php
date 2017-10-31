<?php
/**
 * Created by PhpStorm.
 * User: Asma
 * Date: 4/17/2017
 * Time: 9:18 PM
 */


$db_server = 'localhost';
$db_user_name = 'anm';
$db_password = '123456';
$db_name = 'db1';



    if (isset($_POST)) {
    $mob2 = $_POST['mob2'];
    $pass2 = $_POST['pass2'];

    $name = $_POST['name'];
    $age = $_POST['age'];
    $h = $_POST['h'];
    $w = $_POST['w'];
    if(empty($mob2) || empty($pass2) || empty($name) || empty($age) || empty($h) || empty($w))
    {
        header('location:CreatFreeAccount.php?hi=true');

        exit;
    }

    @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

    $raw_results4 = mysqli_query($db,"SELECT * FROM freeaccuser
            WHERE (`mobileNum` LIKE '%".$mob2."%')") or die("connection error");

    $raw_results5 = mysqli_query($db,"SELECT * FROM paidaccuser
            WHERE (`mobileNum` LIKE '%".$mob2."%')") or die("connection error");

    if ((mysqli_num_rows($raw_results4) > 0) || (mysqli_num_rows($raw_results5) > 0)){

        header('location:CreatFreeAccount.php?bye=true');


    }

    else{


        if($age <=40 && $age>=18){


            $sq4=" SELECT id FROM diet WHERE maxWeight >= $w AND minWeiht <= $w and minHeight<=$h and maxHeight>=$h";
            $result4=mysqli_query($db,$sq4) or die("error1");
            while($row = mysqli_fetch_assoc($result4)) {
                $idD = $row['id'];
            }


            $sq2 = "INSERT INTO `freeaccuser` (`mobileNum`,`password`,`Height`,`Weight`,`Age`,`Name`,`idForDiet`) 
            VALUES ('$mob2','$pass2','$h','$w','$age','$name','$idD')";



            if (($db->query($sq2) === TRUE) ) {

                header('location:CreatFreeAccount.php?succ=true');

            } else {
                echo "Error: " . $sq2 . "<br>" . $db->error;
            }
        }

        else{

            header('location:CreatFreeAccount.php?ageno=true');
        }





    }


}
?>

