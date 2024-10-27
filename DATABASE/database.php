<?php



$conn = new mysqli('localhost', 'root', null, 'php_my_blog');

// Controlla la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
echo "Connessione riuscita";
?>