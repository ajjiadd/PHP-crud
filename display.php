<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crud Operation</title>
</head>
<body>
    <div class="container ">
        <button class="btn btn-primary my-5">
            <a class="text-light" href="user.php">Add user</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Password</th>
                <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $sql = "SELECT * FROM `crud`";
            $result=mysqli_query($con,$sql);
            if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $phone=$row['phone'];
                $password=$row['password'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
                <td>'.$password.'</td>
                <td>
                <button class="btn btn-success"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
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