<?php

function dbOpenConnection() {
	
	// Database credentials
	$servername = "localhost";
	$username = "root";
	$password = "Zekrom18!?!";
	$dbname = "pokemon-database";
	    
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	    
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		exit(); // Connection failed, exit the function
	} else {
		return $conn; // Connected successfully, return the connection
	} // end if-else block
		
} // end dbOpenConnection()

function dbCloseConnection($conn) {
	mysqli_close($conn); // Close connection
} // end dbCloseConnection()

function getPokemonList() {

	$conn = dbOpenConnection(); // Open the connection
	if (!$conn) {
		exit(); // No connection, exit the function
	}

	$sql = "select id, identifier, species_id from pokemon";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        echo "<li>". $row["identifier"]. "</li>";
	    }
	}  
	
	dbCloseConnection($conn); // Close the connection

} // end getPokemonList()

function getPokemonDetails($pokemonID) {
	
	$conn = dbOpenConnection(); // Open the connection
	if (!$conn) {
		exit(); // No connection, exit the function
	}
		
	$sql = ""; // TODO: Insert the SQL statment required
	$result = $conn->query($sql);
	
	// TODO: Parse the $result variable OR return it to be parsed elsewhere
	
	dbCloseConnection($conn); // Close the connection
}

?>