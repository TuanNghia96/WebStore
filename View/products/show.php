<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <td><?php echo "<td>" . $row['id'] . "</td>";?></td>
    </tr>
    <tr>
        <th>name</th>
        <td><?php echo "<td>" . $row['name'] . "</td>";?></td>
    </tr>
    <tr>
        <th>price</th>
        <td><?php echo "<td>" . $row['price'] . "</td>";?></td>
    </tr>
    <tr>
        <th>type</th>
        <td><?php echo "<td>" . $row['type'] . "</td>";?></td>
    </tr>
</table>
</body>
</html>