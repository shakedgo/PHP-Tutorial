<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <?php include('form.php')?>
    <?php 
        if ($isset($_GET['submit'])) {
            echo $_GET['user'];
            echo $_GET['password'];
        }
        if ($isset($_POST['submit'])) {
            echo $_POST['user'];
            echo $_POST['password'];
        }
    ?>
</body>
</html>