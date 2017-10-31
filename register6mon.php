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
    $_SESSION['mob6'] = $_POST['mob6'];
    $_SESSION['pass6'] = $_POST['pass6'];
    $_SESSION['name6'] = $_POST['name6'];
    $_SESSION['age6'] = $_POST['age6'];
    $_SESSION['h6'] = $_POST['h6'];
    $_SESSION['w6'] = $_POST['w6'];

    $mob6 = $_POST['mob6'];
    $pass6 = $_POST['pass6'];
    $name6 = $_POST['name6'];
    $age6 = $_POST['age6'];
    $h6 = $_POST['h6'];
    $w6 = $_POST['w6'];


    if(empty($mob6) || empty($pass6) || empty($name6) || empty($age6) || empty($h6) || empty($w6))
    {
        header('location:Creat6Months.php?hi6=true');
        exit;
    }

    else{


        @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

        $raw_results2 = mysqli_query($db,"SELECT * FROM paidaccuser
            WHERE (`mobileNum` LIKE '%".$mob6."%')") or die("connection error");

        $raw_results3 = mysqli_query($db,"SELECT * FROM freeaccuser
            WHERE (`mobileNum` LIKE '%".$mob6."%')") or die("connection error");


        if((mysqli_num_rows($raw_results2) > 0) || (mysqli_num_rows($raw_results3) > 0)){

            header('location:Creat6Months.php?bye6=true');

        }


        else{

            if($age6 <=40 && $age6>=18){

                header('location:Creat6Months.php?succ6=true');

            }

            else{

                header('location:Creat6Months.php?ageno6=true');
            }

        }
    }





}
?>




