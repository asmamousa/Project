<?php
/**
 * Created by PhpStorm.
 * User: Asma
 * Date: 4/17/2017
 * Time: 9:18 PM
 */

session_start();
$db_server = 'localhost';
$db_user_name = 'anm';
$db_password = '123456';
$db_name = 'db1';


if (isset($_POST)) {
    $_SESSION['mob1'] = $_POST['mob1'];
    $_SESSION['pass1'] = $_POST['pass1'];
    $_SESSION['name1'] = $_POST['name1'];
    $_SESSION['age1'] = $_POST['age1'];
    $_SESSION['h1'] = $_POST['h1'];
    $_SESSION['w1'] = $_POST['w1'];

    $mob1= $_POST['mob1'];
    $pass1= $_POST['pass1'];
    $name1= $_POST['name1'];
    $age1= $_POST['age1'];
    $h1= $_POST['h1'];
    $w1= $_POST['w1'];


    if(empty($mob1) || empty($pass1) || empty($name1) || empty($age1) || empty($h1) || empty($w1))
    {
        header('location:Creat3Months.php?hi1=true');
        exit;
    }

    @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

    $raw_results2 = mysqli_query($db,"SELECT * FROM paidaccuser
            WHERE (`mobileNum` LIKE '%".$mob1."%')") or die("connection error");

    $raw_results3 = mysqli_query($db,"SELECT * FROM freeaccuser
            WHERE (`mobileNum` LIKE '%".$mob1."%')") or die("connection error");


    if((mysqli_num_rows($raw_results2) > 0) || (mysqli_num_rows($raw_results3) > 0)){

        header('location:Creat3Months.php?bye2=true');

    }

    else{

        if($age1 <=40 && $age1>=18){

            header('location:Creat3Months.php?succ2=true');

        }

        else{

            header('location:Creat3Months.php?ageno2=true');
        }

    }



}
?>

