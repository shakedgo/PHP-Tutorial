<?php 
        if (isset($_GET['submit'])) {
            echo htmlspecialchars($_GET['user']);
            echo htmlspecialchars($_GET['password']);
        }
        if (isset($_POST['submit'])) {
            if (empty($_POST['user'])) {
                echo 'Enter Username <br />';
            } else {
                echo 'User: '.htmlspecialchars($_POST['user']).'<br />';
            }
            if (empty($_POST['pass'])) {
                echo 'Enter pass <br />';
            } else {
                echo 'Pass: '.htmlspecialchars($_POST['pass']).'<br />';
            }
        }
    ?>