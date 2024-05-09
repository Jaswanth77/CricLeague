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
    <h1>Enter details of match:</h1>
    <form action="MatchUpdate.php" method='POST'>
        <label for="">Enter winning team id:</label>
        <input type="number" name="team1ID">
        <label for="">Enter losing team id:</label>
        <input type="number" name="team2ID">
        <label for="">Total runs scored:(winning team)</label>
        <input type="number" name="run_s">
        <label for="">Overs played:</label>
        <input type="number" name="bat_overs">
        <label for="">Overs bowled:</label>
        <input type="number" name="bowl_overs">
        <label for="">Total runs scored:(losing team)</label>
        <input type="number" name="run_c">
        <input type="submit" value="update!">
    </form>
</body>
</html>