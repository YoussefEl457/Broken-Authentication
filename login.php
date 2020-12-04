<?php

include "db.php";

$email = $_POST["email"];
$password = $_POST["password"];


$myConn = new DB;

$query = "SELECT * FROM gebruiker WHERE email = '$email'";

$result = $myConn->executeSQL($query);


if (!empty($result)) {
    if ($password == $result['password']) {
        echo "<br> Login is succes <br>";
        echo '<pre>'.print_r($result, true).'</pre>';
    }else{
        echo "<br> Invalid login! <br>";
    }
} else {
    echo "<br> Invalid login! <br>";
}

?>
