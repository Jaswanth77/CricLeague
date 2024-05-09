<?php
include "sqlconn.php";

$str_rate = ($_POST['runs_s']/$_POST['balls'])*100;
$economy = $_POST['runs_c']/$_POST['overs'];

$sql = "UPDATE PLAYER_STATS SET match_played=match_played+1,runs_scored=runs_scored+".$_POST['runs_s'].",strike_rate=".$str_rate.",wickets_taken=wickets_taken+".$_POST['wickets'].",economy=".$economy.",stumpings=".$_POST['stump'].",catches=".$_POST['catch']." where p_id=".$_POST['pID']."";

if($conn->query($sql) === TRUE)
{
    echo "<h1>values updated</h1>";
}
else
{
    echo $conn->error;
}

?>