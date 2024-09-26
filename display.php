<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <?php 
        $name = $_GET['name'];
        $surname = $_GET['surname'];

        echo "<strong>Name: $name</strong><hr>";
        echo "<strong>Surname: $surname</strong><hr>";
    ?>

</body>
</html>