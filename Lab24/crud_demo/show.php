<?php

$con = mysqli_connect("localhost", "root", "", "demodb");

$result = mysqli_query($con, "SELECT * FROM employee_detail");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Salary</th>
            <th>Gender</th>
            <th>Skills</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['salary'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['skills'] ?></td>

                <td>
                    <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                </td>

            </tr>

        <?php } ?>


    </table>
    <br>
    <a href="form.html"> Add New Employee</a>
</body>

</html>