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
    <form action="UpdatePlayer.php" method="POST">
        <h1>Enter player stats:</h1>
        <label for="">Enter player id:</label>
        <input type="number" name="pID">
        <br>
        <label for="">Enter the runs scored by the player:</label>
        <input type="number" name="runs_s">
        <br>
        <label for="">Enter the balls faced by the player:</label>
        <input type="number" name='balls'>
        <br>
        <label for="">Enter the runs conceded by the player:</label>
        <input type="number" name='runs_c'>
        <br>
        <label for="">Enter the number of over bowled by the player:</label>
        <input type="number" name="overs" id="">
        <br>
        <label for="">Enter the wickets taken by the player:</label>
        <input type="number" name="wickets">
        <br>
        <label for="">Enter the number of catches taken by the player:</label>
        <input type="number" name="catch">
        <br>
        <label for="">Enter the number of stumpings:</label>
        <input type="number" name="stump">
        <br>
        <input type="submit" value="update!">
    </form>
</body>
</html>