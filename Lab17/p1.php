<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file"><br>
        <input type="submit" name='submit'>

    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_FILES['file']['name'];
        $type = $_FILES['file']['type'];
        $tmp = $_FILES['file']['tmp_name'];
        $size = $_FILES['file']['size'];
        echo "$name<br>$type<br>$tmp<br>$size<br>";
        $path = "server_uploaded_files/" . $name;
        if (move_uploaded_file($tmp, $path)) {
            echo "file uploaded ";
        } else {
            "not uploaded";
        }

    }

    ?>


</body>

</html>