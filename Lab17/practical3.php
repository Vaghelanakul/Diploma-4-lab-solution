<!-- ) Create a webpage which accepts an image file in .jpg or .jpeg or .png format only and that to maximum of 1MB. (C) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" enctype="multipart/form-data">
        upload image <input type="file" name="file" accept=".jpg, .jpeg, .png"><br><br>
        <input type="submit" name="submit" value="Upload">
    <form>
    <?php
        if(isset($_POST['submit'])){
            if(!empty($_FILES['file']['name'])){
                $name = $_FILES['file']['name'];
                $tmpName = $_FILES['file']['tmp_name'];
                $fileSize = $_FILES['file']['size'];
                $fileType = $_FILES['file']['type'];

                $allowedExtensions = ['.jpg','.jpeg','.png'];
                $fileExtension = strtolower(substr($name,strrpos($name,'.')));
                if(in_array($fileExtension,$allowedExtensions)){
                    if($fileSize <= 1048576){
                        if(move_uploaded_file($tmpName,'server_uploaded_files/'.$name)){
                            echo "<p style='color:green;'>Image uploaded successfully.</p>";
                        }
                        else{
                            echo "<p style='color:red;'>File upload failed.</p>";
                        }
                    }else
                        echo "<p style='color:red;'>upload file less then 1MB</p>";

                }
                else
                    echo "<p style='color:red'>Invalid file format. Only JPG, JPEG, and PNG are allowed.</p>";
            }
            else
                echo "<p style='color:red;'>Please choose a file to upload.</p>";
            
        }

    ?>
</body>
</html>