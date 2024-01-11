<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Benny Li] Lab 01: Zodiac</title>
</head>
<body>
    <?php
        $zodiac = array(
            "Monkey",
            "Rooster",
            "Dog",
            "Pig",
            "Rat",
            "Ox",
            "Tiger",
            "Rabbit",
            "Dragon",
            "Snake",
            "Horse",
            "Goat"
        );
        $currYear = date("Y");
        $nextYear = $currYear + 1;
    ?>

    <?php
        $imageVisible = false;
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $imageVisible = true;
        }
    ?>

    <form method="post" action="">
    <label for="year">Year:</label>
    <input type="number" name="year" id="year" min="1900" max="<?php echo $nextYear; ?>" required />
    <br>
    <input type="submit" value="Get Zodiac!">
    <input type="reset" value="Clear">

    <?php
        $remainder = $_POST["year"] % 12;
        $userZodiac = $zodiac[$remainder];
        echo "<br>";
    ?>

    <?php
        if ($imageVisible) {
            echo "<br>You is $userZodiac!<br>";
            echo '<img src="./images/' . $userZodiac . '.png">';
        }
    ?>

</body>
</html>