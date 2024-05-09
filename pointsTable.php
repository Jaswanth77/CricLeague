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
    <table border="2px">
    <tr>
        <th>position</th>
        <th>team ref</th>
    </tr>
<?php

include 'sqlconn.php';

$teams = array(1001=>"super kings",1002=>"knight riders",1003=>"royal challengers",1004=>"kings xi",1005=>"royals",1006=>"daredevils",1007=>"indians");

$sql = "SELECT * FROM POINTS_TABLE ";

$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row['position']."</td><td>".$teams[$row['team_ref']]."</td></tr>";
    }
}
else
{
    echo "no results found";
}
?>
</table>
</body>
</html>

