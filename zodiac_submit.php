<body>
    <h1>Conrad Christian</h1>
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
    ?>

    <form action="zodiac_submit.php" method="get">
        <input type="text" name="year"><br>  
        <input type="submit" value="Get Zodiac">
        <input type="reset" value="clear">  
    </form>

<?php
    if ($_GET["year"] >= 1900 && $_GET["year"] <= 2025) {
        $remainder = $_GET["year"] % 12;
        echo "Your zodiac is <b>$zodiac[$remainder]</b>";
        switch ($zodiac[$remainder]) {
            case "Monkey":
                echo '<html><br><img src="/images/images/monkey.png" width="280" height="125"/></html>';
                break;
            case "Rooster":
                echo '<html><br><img src="/images/images/rooster.png" width="280" height="125"/></html>';
                break;
            case "Dog":
                echo '<html><br><img src="/images/images/dog.png" width="280" height="125"/></html>';
                break;
            case "Pig":
                echo '<html><br><img src="/images/images/pig.png" width="280" height="125"/></html>';
                break;
            case "Rat":
                echo '<html><br><img src="/images/images/rat.png" width="280" height="125"/></html>';
                break;
            case "Ox":
                echo '<html><br><img src="/images/images/ox.png" width="280" height="125"/></html>';
                break;
            case "Tiger":
                echo '<html><br><img src="/images/images/tiger.png" width="280" height="125"/></html>';
                break;
            case "Rabbit":
                echo '<html><br><img src="/images/images/rabbit.png" width="280" height="125"/></html>';
                break;
            case "Dragon":
                echo '<html><br><img src="/images/images/dragon.png" width="280" height="125"/></html>';
                break;
            case "Snake":
                echo '<html><br><img src="/images/images/snake.png" width="280" height="125"/></html>';
                break;
            case "Horse":
                echo '<html><br><img src="/images/images/horse.png" width="280" height="125"/></html>';
                break;
            case "Goat":
                echo '<html><br><img src="/images/images/goat.png" width="280" height="125"/></html>';
                break;
        }
    } else {
        echo "Year must be between 1900 and next year. Please Try again.<br>";
    }
?>
</body>