//login form
<html>
    <head>
        <title> Inloggen </title>
    </head>
        <body>
            <h2>Login</h2>
            <form action="index.php" method="post">
                <input type="text" title="Gebruikersnaam" placeholder="Gebruikersnaam" required/><br>
                <input type="password" title="Wachtwoord" placeholder="Wachtwoord" required/><br>
                <button type="submit" class="btn">Login</button><br>
            </form>
        </body>
</html>


//Database connectie
<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "brokenauth");

class DB{
	protected $dbh;
	protected $stmt;
    protected $resultSet;

	public function __construct(){
		$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        $this->resultSet = [];
	}

	public function executeSQL($query){
        $this->stmt = $this->dbh->prepare($query);
		$result = $this->stmt->execute();

		if (!$result) {
    		die('<pre>Oops, Error execute query '. $query .'</pre><br><pre>'.'Result code: '. $result .'</pre>');
   		}

		$row = $this->stmt->fetchAll();

		if(!empty($row)){
			$this->resultSet = $row;
			return $this->resultSet;
		}

		return $this->resultSet;
	}
}
?>
