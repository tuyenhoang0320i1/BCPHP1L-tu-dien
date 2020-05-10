<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input[type="text"] {
        width: 300px;
        border: 1px solid #CCCCCC;
        border-radius: 4px;
        font-size: 16px;
        padding: 12px 10px 12px 10px;
    }
    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>
<body>
<h2>Từ Điển Anh - Việt</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    <input type="submit" id="submit" value="Tìm"/>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    $dictionary = array(
        "hello" => "xin chào",
        "how" => "thế nào",
        "book" => "sách",
        "computer" => "máy tính",
        "argument" => "đối số");
    foreach ($dictionary as $word => $description) {
        if ($word == $searchword) {
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra";
    }
}
?>
</body>
</html>