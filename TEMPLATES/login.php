<?php
session_start();
$title = "login";
$style = "../CSS/login-style.css";
//teoricamente non mi dovrebbe neanche servire adesso $content, adesso vedo 
//$content = "./login.php";
include "./template.php";
include('../DATABASE/database.php');
?>

<div class="vh-100 container">

    <div class="border border-4 p-2 my-0 mx-auto">
        <form action="../CONTROLLER/login-controller.php" method="POST">
            <div class="mb-3">
                <label for="text" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="inserisci password" />
            </div>
            <button type="submit">accedi</button>
        </form>
        <?php // Nella pagina login.php
        if (isset($_GET['error'])) {
            $error_message = htmlspecialchars($_GET['error']);
            echo '<p style="color: red;">' . $error_message . '</p>';
        }
        ?>
    </div>
</div>