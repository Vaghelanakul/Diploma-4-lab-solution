<?php
if (!isset($_id)) {
    header("Location:show.php");
}

$con = mysqli_connect('localhost', 'root', "", "demodb");

$id = $_GET['id'];
$result = mysqli_query($con, "SELECT *  FROM  employee_detail where id=$id");
$row = mysqli_fetch_assoc($result);

$skills_array = explode(',', $row['skills']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Name:<input type="text" name="name" value="<?php echo $row['name'] ?>"><br><br>
        Email:<input type="text" name="email" value="<?php echo $row['email'] ?>"><br><br>
        Salary:<input type="text" name="salary" value="<?php echo $row['salary'] ?>"><br><br>
        Gender:
        Male
        <input type="radio" name="gender" value="male" <?php if ($row['gender'] == 'Male')
            echo "Checked" ?>>

            Female
            <input type="radio" name="gender" value="Female" <?php if ($row['gender'] == "Female")
            echo "Checked" ?>><br><br>
            Skills:
            PHP<input type="checkbox" name="skills[]" value="php" <?php if (in_array("php", $skills_array))
            echo "Checked" ?>>
            Java<input type="checkbox" name="skills[]" value="java" <?php if (in_array("java", $skills_array))
            echo "Checked" ?>>
            Python<input type="checkbox" name="skills[]" value="python" <?php if (in_array("python", $skills_array))
            echo "Checked" ?>>

            <input type="submit" value="update" name="update">
        </form>

        <?php
        if (isset($_POST['update'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $salary = $_POST['salary'];
            $gender = $_POST['gender'];
            $skills = implode(",", $_POST['skills']);

            $query = " UPDATE employee_detail set
                        name='$name',
                        email='$email',
                        salary='$salary',
                        gender='$gender',
                        skills='$skills'
                        where id=$id;
            ";

            $r = mysqli_query($con, $query);

            if ($r) {

                echo "<script>alert('Data updated successfully');";
                echo "window.location.href='show.php';</script>";
            } else {
                echo "data not updated" . mysqli_error($con);
            }


        }


        ?>

</body>

</html>