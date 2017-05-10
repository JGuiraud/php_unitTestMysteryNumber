<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    test
    <?php

    require 'mysterynumber.php';

    $test = new MysteryNumber;
    if ($test) {
        echo 'ok';
        // print_r($test);
        echo $test->getNumber();
    }
    ?>


</body>
</html>