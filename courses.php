<?php



$dsn = 'mysql:host=localhost;dbname=it1150';
$username= 'root';
$password='';

  $db = new PDO($dsn, $username, $password);   
          
try {
    echo'<p>You are connected to the database!</p>';
} catch (Exception $e) {
echo '<p>Error message: $error_message</p>';
}
?>


