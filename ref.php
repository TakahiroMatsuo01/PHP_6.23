<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function increment(int &$num):int{
        $num++;
        return $num;
    }
    $value = 10;
    print increment($value);
    print $value;
    ?>
</body>
</html>