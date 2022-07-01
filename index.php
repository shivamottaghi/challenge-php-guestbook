<?php declare(strict_types=1);
include 'controller/Controller.php';
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php Guest Book</title>
</head>
<body>
    <div class="container">
        <?php
        if (!isset($_SESSION['controller'])){
            $controller = new Controller();
            $_SESSION['controller'] = $controller;
        }
        $_SESSION['controller']->invoke();
        ?>
    </div>
</body>
</html>
