<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h2>Hiển thị số nguyên tố</h2>
    <input type="text" name="name">
    <br>
    <input type="submit" value="find">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NumberPrint = $_POST["name"];

    function number($n)
    {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function printNumber($NumberPrint)
    {
        $count = 0;
        $i = 2;
        while ($count < $NumberPrint) {
            if (number($i)) {
                echo $i . " ";
                $count++;

            }
            $i++;
        }
    }
    printNumber($NumberPrint);

}


//
//for ($i = 2; $i < 100; $i++) {
//    if (number($i) == true) {
//        echo $i . ",";
//    }
//}


