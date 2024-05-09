<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h1>All player details:</h1>
    <table>
        <tr>
            <th>PLAYER ID</th>
            <th>PLAYER NAME</th>
            <th>AGE</th>
            <th>COUNTRY</th>
            <th>BATTING STYLE</th>
            <th>BOWLING STYLE</th>
            <th>TEAM NAME</th>
        </tr>

<?php
include "sqlconn.php";

$sql = "SELECT * FROM PLAYER_DETAILS ORDER BY P_ID";

$teams = array(1001=>"super kings",1002=>"knight riders",1003=>"royal challengers",1004=>"kings xi",1005=>"royals",1006=>"daredevils",1007=>"indians");

$result = $conn->query($sql);

        if( $result !== false  && $result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                echo "<tr><td>".$row['p_id']."</td><td>".$row['p_name']."</td><td>".$row['age']."</td><td>".$row['country']."</td><td>".$row['bat_style']."</td><td>".$row['bowl_style']."</td><td>".$teams[$row['team_ref']]."</td></tr>";
            }
        }
        else
        {
            echo $conn->error;
        }
?>
  </table>
</body>
</html>