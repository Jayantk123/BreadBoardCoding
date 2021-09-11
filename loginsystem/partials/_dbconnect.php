// <?php 

// $db_user = "epiz_29669398";
// $db_pass = "g6BvpWTOSSrfc4o";
// $db_name = "epiz_29669398_users";

// $db = new PDO('mysql:host=sql208.epizy.com;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// ?>

<?php
$server = "sql208.epizy.com";
$username = "epiz_29669398";
$password = "g6BvpWTOSSrfc4o";
$database = "epiz_29669398_users";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>
