<?php
session_start();
require 'config.php';
$head=$_POST['headingofedit'];
$data=$_POST['newsbodyofedit'];
$id = $_SESSION['id'];

$dateedit = date('Y-m-d H:i:s');

$statement="UPDATE test SET heading= '$head' , summertext= '$data', editedtime='$dateedit' where id= $id";


if(mysqli_query($conn,$statement))
{
    header('location:listdata.php');
}
else
    mysqli_error($conn);
mysqli_close($conn);

?>