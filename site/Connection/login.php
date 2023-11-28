<?php

$user = $_POST["user"] ?? "";
$password = $_POST["password"] ?? "";

if(isset($_POST["submit"])) {
        session_start();

        $_SESSION['user'] = $user;
        $_SESSION['password'] = $password;
        $_SESSION['isConnected'] = true;

        header("Location: ..\index.php");
        exit();

}
?>

<?php
require "../Header/headerForm.php";
?>

<body>
<div class="p-3">

    <form action="login.php" method="post">
        <label for="user">User:</label><br>
        <input type="text" id="user" name="user" value="<?= $user; ?>">
        <br>
        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password" value="<?= $password; ?>">
        <br>
        <br>
        <input type="submit" name="submit" value="Connexion">
    </form>

</div>
</body>