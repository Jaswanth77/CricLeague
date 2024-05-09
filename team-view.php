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
<?php
        include 'sqlconn.php';
        
        $sql = 'SELECT * FROM FRANCHISE_DETAILS WHERE TEAM_REF='.$_POST['id'];

        $result = $conn->query($sql);

        if( $result !== false && $result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                echo "<p class='para'>team name:<br>".$row['team_name']."<br>home ground:<br>".$row['home_ground']."</p>";
            }
        }
        else
        {
            echo "";
        }
?>
<table>
<tr>
    <th>player id</th>
    <th>player name</th>
    <th>batting style</th>
    <th>bowling style</th>
</tr>
<?php
        $sql1 = 'SELECT * FROM PLAYER_DETAILS WHERE TEAM_REF='.$_POST['id'];

        $result1 = $conn->query($sql1);

        if( $result1 !== false  && $result1->num_rows > 0)
        {
            while($row1 = $result1->fetch_assoc())
            {
                echo "<tr>
                <td>".$row1['p_id']."</td><td>".$row1['p_name']."</td><td>".$row1['bat_style']."</td><td>".$row1['bowl_style']."</td></tr>";
            }
        }
        else
        {
            echo "<h1>team not found</h1>";
        }
       
?>
 </table>
</body>
</html>
