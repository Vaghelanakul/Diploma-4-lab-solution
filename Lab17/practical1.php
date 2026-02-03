<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">

        <!--
                this is the default type of encode:
                application/x-www-form-urlencoded

                it convert data into
                name=value&name1=value

                works with text 

                multipart means data send in multiple parts with different type of data "text+binary"

                
        -->
        upload file: <input type="file" name="file"><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
    <?php
    if (isset($_POST['submit'])) {

        // echo "<pre>";
        // print_r($_FILES['file']);
        // echo "</pre>";
        if (!empty($_FILES['file']['name'])) {

            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $_fileSize = $_FILES['file']['size'];
            $_fileType = $_FILES['file']['type'];

            echo "File Name: " . $fileName . "<br>";
            echo "File Temp Name: " . $fileTmpName . "<br>";
            echo "File Size: " . $_fileSize . "<br>";
            echo "File Type: " . $_fileType . "<br>";

            $path = 'server_uploaded_files/' . $fileName;
            if (move_uploaded_file($fileTmpName, $path))
                echo "File uploaded successfully.";
            else
                echo "File upload failed.";

        } else
            echo "Please choose a file to upload.";

    }



    ?>

</body>

</html>