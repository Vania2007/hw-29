<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

?>
<html>

<head>
    <title>My home page</title>
</head>

<body>

    <h1>My home page</h1>
    <?php
//print_r($_SESSION); // виводимо змінні сесії ?><br>
<?php
if ($_SESSION['authorized'] != 1) {?>
    <a href="login.php">Вхід</a>
    <?php } else {?>
<a href="logout.php">Вихід</a>
    <?php }
?>
</body>

</html>