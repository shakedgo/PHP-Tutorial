<?php 

        function validate($type, $regex) {
            $t  = $_POST[$type];
            if (!preg_match($regex,$t)) { 
                echo "$type is not valid <br />";
            } else {
                echo "$type: ".htmlspecialchars($t).'<br />';
            } 
        }
        // if (isset($_GET['submit'])) {
        //     echo htmlspecialchars($_GET['user']);
        //     echo htmlspecialchars($_GET['password']);
        // }
        if (isset($_POST['submit'])) {
            if (empty($_POST['email'])) {
                echo 'Email not entered <br />';
            } else {
                echo 'Email: '.htmlspecialchars($_POST['email']).'<br />';
            }

            if (empty($_POST['user'])) {
                echo 'Enter Username <br />';
            } else {
                validate('user', '/^[a-zA-Z]+$/');
            }

            if (empty($_POST['pass'])) {
                echo 'Enter pass <br />';
            } else { 
                validate('pass', '/^[a-zA-Z0-9]{6,}$/');
            }
        }
    ?>