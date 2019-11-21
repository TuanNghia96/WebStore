<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href='index.php?create=1'>create</a>
    <table>
        <tr>
            <th>id</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
        </tr>
        <?php
        while($row = $result->fetch()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td><a href='index.php?laptop=" . $row['id'] . "'>" . $row['name'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td ><a href='index.php?edit=" . $row['id'] . "'><span style='color:blue;'>EDIT</span></td>";
            echo "<td ><a href='index.php?delete=1&id=" . $row['id'] . "'><span style='color:red;'>DELETE</span></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>