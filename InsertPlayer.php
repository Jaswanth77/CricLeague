<?php
include 'sqlconn.php';


$sql = "INSERT INTO PLAYER_DETAILS VALUES(".$_POST['plID'].", '".$_POST['plName']."', ".$_POST['teamID'].", ".$_POST['age'].", '".$_POST['country']."', '".$_POST['batStyle']."', '".$_POST['bowlStyle']."')";


if($conn->query($sql) === TRUE)
{
    echo "values inserted";
}
else
{
    echo $conn->error;
}

$sql1 = "INSERT INTO PLAYER_STATS VALUES(".$_POST['plID'].",0,0,0,0,0,0,0)";


if($conn->query($sql1) === TRUE)
{
    echo "";
}
else
{
    echo $conn->error;
}
?>