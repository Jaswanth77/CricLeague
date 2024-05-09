<?php

include 'sqlconn.php';

$sql = "UPDATE PLAYER_DETAILS 
SET TEAM_REF=".$_POST['teamID']."WHERE P_ID=".$_POST['plID']."";

if($conn->query($sql))
{
    echo "<h1>team succesfully changed</h1>";
}
else
{
    echo "change not possible due to".$conn->error;
}
?>