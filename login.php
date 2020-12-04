<?php

include "index.php";

$email = $_POST["email"];
$Wachtwoord = $_POST["Wachtwoord"];

$myConn = new DB;

$query = "SELECT * FROM user WHERE email = '$email'";

$result = $myConn->executeSQL($query);


if (!empty($result)) {
    if ($Wachtwoord == $result['password']) {
        echo "<br> Login is succes <br>";
        echo '<pre>'.print_r($result, true).'</pre>';
    }else{
        echo "<br> Invalid login! <br>";
    }
} else {
    echo "<br> Invalid login! <br>";
}

?>
