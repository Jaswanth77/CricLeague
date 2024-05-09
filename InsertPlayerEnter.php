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
    <center><h1>Enter the details of the player:</h1></center>
    <form action="InsertPlayer.php" method="POST">
        <label for="pID">player ID:</label>
        <input type="number" name="plID">
        <br>
        <label for="plName">Player Name:</label>
        <input type="text" name="plName">
        <br>
        <label for="">Team id:</label>
        <input type="number" name="teamID">
        <br>
        <label for="">Age:</label>
        <input type="number" name="age">
        <br>
        <label for="">Country:</label>
        <input type="text" name="country">
        <br>
        <label for="">Batting Style</label>
        <input type="text" name="batStyle">
        <br>
        <label for="">Bowling Style</label>
        <input type="text" name="bowlStyle">
        <br>
        <input type="submit" value="ENTER">
    </form>
</body>
</html>

