


<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '23.88.3.185');
define('DB_USERNAME', 'unbany');
define('DB_PASSWORD', 'hovnohustyfaktjenejlepsi512');
define('DB_NAME', 'unbany');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>