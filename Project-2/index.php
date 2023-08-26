<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Display</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <a href="user.php" class="btn btn-primary mt-3 my-2">Add User</a>
    <h2 style="text-align:center" class="my-2">USER TABLE</h2>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>
            <th scope="col">Password</th>
            <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $sql = "Select * from `crud`";
                $result = mysqli_query($con,$sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                        <td>
                            <a href="update.php?updateid='.$id.'" class="btn btn-primary">Update</a>
                            <a href="delete.php?deleteid='.$id.'" class="btn btn-danger">Delete</a>
                        </td>
                        </tr>';
                    }
                }
            
            ?>
            
        </tbody>
        </table>
    </div>

</body>
</html>