<?php
try {
  $conn = new PDO('mysql:host=localhost;dbname=livre', 'root', '');
} catch (Exception $e) {
  echo "error" . $e->getMessage();
}
