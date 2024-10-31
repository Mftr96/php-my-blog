<?php
try {
    $conn = new mysqli("localhost", "root", null, "php_my_blog");
  
} catch (Exception $e) {
    $e->getMessage();
}
?>