<?php 
        $email = $user = $pass ='';
        $errors = ['user' => '', 'pass' => '', 'email' => ''];
        function validate($type, $regex) {
            global $errors;
            $t  = $_POST[$type];
            if (!preg_match($regex,$t)) { 
                $errors[$type] = "$type is not valid <br />";
            }
        }
        // if (isset($_GET['submit'])) {
        //     echo htmlspecialchars($_GET['user']);
        //     echo htmlspecialchars($_GET['password']);
        // }
        if (isset($_POST['submit'])) {
            if (empty($_POST['user'])) $errors['user'] = 'Enter Username <br />';
            else validate('user', '/^[a-zA-Z]+$/');

            if (empty($_POST['pass'])) $errors['pass'] = 'Enter pass <br />';
            else validate('pass', '/^[a-zA-Z0-9]{6,}$/');
        }
    ?>
<form action="form.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $email ?>">
        <div><?php echo $errors['email']?></div>
        <br>
        <label>User:</label>
        <input type="text" name="user" value="<?php echo $user ?>">
        <div><?php echo $errors['user']?></div>
        <br>
        <label>Password:</label>
        <input type="password" name="pass" value="<?php echo $pass ?>">
        <div><?php echo $errors['pass']?></div>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>