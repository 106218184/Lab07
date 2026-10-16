<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables etc</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
    <p>The days of the week in English are:
        <br>Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday
    </p>

    <p>The days of the week in French are:<br>
    <?php
        $daysFr = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
       echo "$daysFr[0], $daysFr[1], $daysFr[2], $daysFr[3], $daysFr[4], $daysFr[5], $daysFr[6]";
    ?>
    </p>
</body>
</html>