<?php
$array = [1, 5, 9, 15, 35, 87, 20, 15];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $number = $_REQUEST['number'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete In Array</title>
</head>
<body>
<form method="get">
    Mảng ban đầu: <?php foreach ($array as $value) {
        echo ", " . $value;
    } ?>
    <br>
    <br>
    Nhập số muốn xóa:
    <br>
    <input type="text" name="number">
    <button type="submit">Submit</button>
    <br>
    <br>
    Mảng sau khi xóa: <?php foreach ($array as $value){
        if ($number == $value){
            unset($value);
        }
        echo ", " . $value;
    } ?>
</form>
</body>
</html>