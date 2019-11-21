<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php?id=<?php echo $id ?>" method="post">
    name<input type="text" name="name" placeholder="<?php echo $row['name']?>"><br>
    price<input type="number" name="price" placeholder="<?php echo $row['price']?>"><br>
    type<input type="text" name="type" placeholder="<?php echo $row['type']?>"><br>
    <input type="submit" value="submit">
</form>
</body>
</html>