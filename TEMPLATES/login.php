<?php
session_start();
include('../DATABASE/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // Verify the password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header('Location: template.php');
        } else {
            echo "Username o password errati.";
        }
    } else {
        echo "Username o password errati.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/CSS/style.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>login</title>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="border border-4 p-2 ">
        <form action="login.php" method="POST">
            <div class="mb-3">
                <!-- no email sciocchino, ci vuole il nome utente  -->
                <label for="text" class="form-label">Username</label>
                <!-- controllare regex pattern email, per ora ho messo rcf 5322 ma vediamo se va bene  -->
                <input
                    type="text"
                    class="form-control"
                    name="username"
                    id="username"
                     />
                <small id="emailHelpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    placeholder="inserisci password" />
            </div>
            <button  type="submit">accedi</button>
        </form>

    </div>

</body>

</html>