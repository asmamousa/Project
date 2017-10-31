<?php
/**
 * Created by PhpStorm.
 * User: Asma
 * Date: 4/23/2017
 * Time: 10:44 PM
 */

$db_server = 'localhost';
$db_user_name = 'anm';
$db_password = '123456';
$db_name = 'db1';

if (isset($_POST)) {
    $mobD = $_POST['wD'];
    $passD = $_POST['pD'];
    if (empty($mobD) || empty($passD)) {

        header('location:deleteaccount1.php?no=true');
        exit;
    }


}

@ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");

$raw_results = mysqli_query($db,"SELECT * FROM paidaccuser
            WHERE (`mobileNum` LIKE '%".$mobD."%')") ;

if(mysqli_num_rows($raw_results) > 0){

    $query="DELETE from paidaccuser where mobileNum='$mobD' and pass='$passD'";
    $result=mysqli_query($db,$query) or die("error1");
   // $row=mysqli_fetch_array($result);

    header('location:homePage2.html');

}

else{
    $raw_results = mysqli_query($db,"SELECT * FROM freeaccuser
            WHERE (`mobileNum` LIKE '%".$mobD."%')") ;

    if(mysqli_num_rows($raw_results) > 0){

        $query2="DELETE from freeaccuser where mobileNum='$mobD' ";
        $result2=mysqli_query($db,$query2) or die("error2");
       // $row2=mysqli_fetch_array($result2);

        header('location:homePage2.html');


    }

}

?>

