<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
            img{
                width: 150px;
                height: 150px;
                border-radius: 50%;
                object-fit:cover;
            }
        </style>
</head>
<body>
    <form  method="post" enctype="multipart/form-data">
        <input type="file" name="profile_picture" ><br><br>
        <input type="submit" name="submit" value="Upload">
    <form>
    <?php
        if(isset($_POST['submit'])){
            if(!empty($_FILES['profile_picture']['name'])){
                $name = $_FILES['profile_picture']['name'];
                $tmpName = $_FILES['profile_picture']['tmp_name'];
                $fileSize = $_FILES['profile_picture']['size'];
                $fileType = $_FILES['profile_picture']['type'];

                if(move_uploaded_file($tmpName,"server_uploaded_files/".$name)){
                    echo "<p style='color:green;'>profile picture uploaded successfully.</p>";
                    echo "<img src='server_uploaded_files/$name'>";
                }
                else{
                    echo "<p style='color:red;'>file upload failed.</p>";
                }
            }
        }


    ?>
</body>
</html>