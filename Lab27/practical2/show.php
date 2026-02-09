<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Sr No.</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Salary</th>
        </tr>
        <tbody>
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "demoDB";
            $con = mysqli_connect($servername, $username, $password, $dbname);
            if ($con) {
                $selectQuery = "call get_all_employee_detail()";
                $result = mysqli_query($con, $selectQuery);
                if ($result) {
                    while ($arr = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $arr['id']; ?></td>
                            <td><?php echo $arr['name']; ?></td>
                            <td><?php echo $arr['email']; ?></td>
                            <td><?php echo $arr['salary']; ?></td>
                            <td>
                                <a href="edit.php?uid=<?php echo $arr['id']; ?>"><button>Edit</button></a>
                                <a href="delete.php?did=<?php echo $arr['id']; ?>"><button>Delete</button></a>

                            </td>
                        </tr>

                        <?php




                    }
                }
            }


            ?>
        </tbody>
    </table>

</body>

</html>