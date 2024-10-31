<?php 
ob_start();
session_start();
//vedere session unset e destroy
include ('../DATABASE/database.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
        if ($username && $password) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
            if ($username && $password && $result->num_rows == 1) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['username'] = $username;
                    session_regenerate_id(true);
                    //controllare per il timeout, ho letto che si può fare un token, forse csrf? 
                    $_SESSION['timeout'] = time() + 600; // Set session timeout to 10 minutes
                    header('Location:../TEMPLATES/index.php', true, 301);
                    exit();
                }   
            }else {
                $error_message = "Credenziali non valide. Riprova.";
                header('Location:../TEMPLATES/login.php?error=' . urlencode($error_message), true, 301);
                exit();
            }
        }else {
            $error_message = "Credenziali non valide. Riprova.";
            header('Location:../TEMPLATES/login.php?error=' . urlencode($error_message), true, 301);
            exit();
        }
}
ob_end_flush();