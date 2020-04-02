<?php 
 
require_once 'php_action/db_connect.php';

if($_GET['id']) {
    $id = $_GET['id'];
    $name = $_GET['name'];
 
    $sql = "SELECT * FROM users WHERE id = {$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
 
    $connect->close();
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Remove User</title>
    
</head>
<body>
<div class="container">
    <br><br><br>
        <h2 style="text-align:center">Do you really want to remove <?php echo "$name" ?> ?</h2><br>
        <form action="php_action/remove.php" method="post">
        
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
            <button type="submit" class="btn btn-danger btn-block">Yes</button><br>
            <a href="index.php"><button type="button" class="btn btn-primary btn-block">Back</button></a>
        </form>
</div>

</body>
</html>
 
<?php
}
?>