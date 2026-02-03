<?php
$uploadDir = "server_uploaded_files/";
$profileImage = $uploadDir . "profile.jpg";

/* Create folder if not exists */
if (!is_dir($uploadDir)) {
    mkdir($uploadDir);
}

/* Handle form submission */
if (isset($_POST['upload'])) {
    $tmpName = $_FILES['photo']['tmp_name'];
    move_uploaded_file($tmpName, $profileImage);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile Page</title>
    <style>
        body {
            text-align: center;
            margin-top: 50px;
            font-family: Arial;
        }

        img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid blue;
        }
    </style>
</head>

<body>

    <h2>My Profile</h2>

    <!-- Show profile picture -->
    <?php
    if (file_exists($profileImage)) {
        echo "<img src='$profileImage'>";
    } else {
        echo "<img src='default.png'>";
    }
    ?>

    <br><br>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="photo" required><br><br>
        <input type="submit" name="upload" value="Change Picture">
    </form>

</body>

</html>