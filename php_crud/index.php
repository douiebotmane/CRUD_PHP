<?php require_once 'php_action/db_connect.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>PHP CRUD</title>
    
</head>
<body>
<div class="container">
<!-- <div class="manageMember"> -->
    <br><br><br>
    <a href="create.php"><button type="button" class="btn btn-primary btn-lg btn-block">Add User</button></a>
    <!-- <table border="1" cellspacing="0" cellpadding="0"> -->
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Login</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM users";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['login']."</td>
                        <td>".$row['password']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='button' class='btn btn-primary'>Edit</button></a>
                            <a href='remove.php?id=".$row['id']."&name=".$row['name']."'><button type='button' class='btn btn-warning'>Remove</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
 
</body>
</html>