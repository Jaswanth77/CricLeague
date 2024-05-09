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
    <form action="UpdateTeamEnter.php" method="POST">
        <h1>Enter to update player team:</h1>
        <label for="plID">Enter the player id:</label>
        <input type="number" name='plID'>
        <label for="teamID">Enter the new team id:</label>
        <input type="number" name='teamID'> 
        <input type="submit" value="Update!">
    </form>
</body>
</html>