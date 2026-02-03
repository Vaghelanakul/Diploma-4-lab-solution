<?php

$uploadDir = "server_uploaded_files/";
$profileImage = $uploadDir . "profile.jpg";


if (isset($_POST['upload'])) {

    $tmpName = $_FILES['photo']['tmp_name'];


    move_uploaded_file($tmpName, $profileImage);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile Page</title>
</head>

<body>
    <h2>My Profile</h2>


    <img src="<?php echo $profileImage; ?>" width="150" height="150">
    <br><br>


    <form method="post" enctype="multipart/form-data">
        Select new profile picture:
        <input type="file" name="photo" required>
        <br><br>
        <input type="submit" name="upload" value="Change Picture">
    </form>

</body>

</html>