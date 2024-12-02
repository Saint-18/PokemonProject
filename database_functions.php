<?php

function dbOpenConnection()
{

    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "Zekrom18!?!";
    $dbname = "pokemon-database";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
        exit(); // Connection failed, exit the function
    } else {
        return $conn; // Connected successfully, return the connection
    } // end if-else block
}

// end dbOpenConnection()
function dbCloseConnection($conn)
{
    mysqli_close($conn); // Close connection
}

// end dbCloseConnection()
function getPokemonList()
{
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }

    $sql = "SELECT pokemon.id, pokemon.identifier AS pokemon_name, types.identifier AS type_name
	FROM
	    pokemon
	INNER JOIN pokemon_types ON pokemon.id = pokemon_types.pokemon_id
	INNER JOIN types ON pokemon_types.type_id = types.id
	ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    $previousPokemon = "";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($previousPokemon == $row["pokemon_name"]) {
                echo "/ " . $row["type_name"] . "</li>";
            } else {
                echo "<li>" . $row["pokemon_name"] . " " . $row["type_name"] . " ";
            }
            $previousPokemon = $row["pokemon_name"];
        }
    }

    dbCloseConnection($conn); // Close the connection
}

// end getPokemonList()
function getPokemonDetails($pokemonID)
{
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }

    $sql = ""; // TODO: Insert the SQL statment required
    $result = $conn->query($sql);

    // TODO: Parse the $result variable OR return it to be parsed elsewhere

    dbCloseConnection($conn); // Close the connection
}

function getPokemonTypeOne($pokemonID)
{
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }
    $type = "";
    $sql = "SELECT pokemon.id, pokemon.identifier AS pokemon_name, types.identifier AS type_name
	FROM
	    pokemon
	INNER JOIN pokemon_types ON pokemon.id = pokemon_types.pokemon_id
	INNER JOIN types ON pokemon_types.type_id = types.id
    WHERE slot = 0
	ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pokemonID == $row["pokemon_name"]) {
                $type = $row["type_name"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $type;
}

function getPokemonTypeTwo($pokemonID)
{
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }
    $type = "";
    $sql = "SELECT pokemon.id, pokemon.identifier AS pokemon_name, types.identifier AS type_name
	FROM
	    pokemon
	INNER JOIN pokemon_types ON pokemon.id = pokemon_types.pokemon_id
	INNER JOIN types ON pokemon_types.type_id = types.id
    WHERE slot = 1
	ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pokemonID == $row["pokemon_name"]) {
                $type = $row["type_name"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $type;
}
function getPokemonStats($pokemonID){
    $hp = getPokemonHealth($pokemonID);
    $Attack = getPokemonAttack($pokemonID);
    $Defense = getPokemonDefense($pokemonID);
    $SpecialAttack = getPokemonSpecialAttack($pokemonID);
    $SpecialDefense = getPokemonSpecialDefense($pokemonID);
    $Speed = getPokemonSpeed($pokemonID);
    
    $StatArray = array($hp, $Attack, $Defense, $SpecialAttack, $SpecialDefense, $Speed); 
    return $StatArray;
    
}
function getPokemonHealth($pokemonID)
{
    $stat = "";
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }
    $sql = "SELECT pokemon.identifier AS pokemon_name, pokemon.id, pokemon_stats.base_stat,  stats.identifier AS pokemon_stat
	FROM
	    pokemon
	INNER JOIN pokemon_stats ON pokemon.id = pokemon_stats.pokemon_id
	INNER JOIN stats ON stats.id = pokemon_stats.stat_id
    Where stats.id = 1
	ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pokemonID == $row["pokemon_name"]) {
                $stat = $row["base_stat"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $stat;
}

function getPokemonAttack($pokemonID)
{
    $stat = "";
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }
    $sql = "SELECT pokemon.identifier AS pokemon_name, pokemon.id, pokemon_stats.base_stat,  stats.identifier AS pokemon_stat
    FROM
    pokemon
    INNER JOIN pokemon_stats ON pokemon.id = pokemon_stats.pokemon_id
    INNER JOIN stats ON stats.id = pokemon_stats.stat_id
    Where stats.id = 2
    ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pokemonID == $row["pokemon_name"]) {
                $stat = $row["base_stat"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $stat;
}

function getPokemonDefense($pokemonID)
{
    $stat = "";
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }
    $sql = "SELECT pokemon.identifier AS pokemon_name, pokemon.id, pokemon_stats.base_stat,  stats.identifier AS pokemon_stat
    FROM
    pokemon
    INNER JOIN pokemon_stats ON pokemon.id = pokemon_stats.pokemon_id
    INNER JOIN stats ON stats.id = pokemon_stats.stat_id
    Where stats.id = 3
    ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pokemonID == $row["pokemon_name"]) {
                $stat = $row["base_stat"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $stat;
}

function getPokemonSpecialAttack($pokemonID)
{
    $stat = "";
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }
    $sql = "SELECT pokemon.identifier AS pokemon_name, pokemon.id, pokemon_stats.base_stat,  stats.identifier AS pokemon_stat
    FROM
    pokemon
    INNER JOIN pokemon_stats ON pokemon.id = pokemon_stats.pokemon_id
    INNER JOIN stats ON stats.id = pokemon_stats.stat_id
    Where stats.id = 4
    ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pokemonID == $row["pokemon_name"]) {
                $stat = $row["base_stat"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $stat;
}

function getPokemonSpecialDefense($pokemonID)
{
    $stat = "";
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }
    $sql = "SELECT pokemon.identifier AS pokemon_name, pokemon.id, pokemon_stats.base_stat,  stats.identifier AS pokemon_stat
    FROM
    pokemon
    INNER JOIN pokemon_stats ON pokemon.id = pokemon_stats.pokemon_id
    INNER JOIN stats ON stats.id = pokemon_stats.stat_id
    Where stats.id = 5
    ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pokemonID == $row["pokemon_name"]) {
                $stat = $row["base_stat"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $stat;
}

function getPokemonSpeed($pokemonID)
{
    $stat = "";
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }
    $sql = "SELECT pokemon.identifier AS pokemon_name, pokemon.id, pokemon_stats.base_stat,  stats.identifier AS pokemon_stat
    FROM
    pokemon
    INNER JOIN pokemon_stats ON pokemon.id = pokemon_stats.pokemon_id
    INNER JOIN stats ON stats.id = pokemon_stats.stat_id
    Where stats.id = 6
    ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pokemonID == $row["pokemon_name"]) {
                $stat = $row["base_stat"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $stat;
}

function getPokemonMoves($pokemonID)
{
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }

    dbCloseConnection($conn); // Close the connection
    return " ";
}

function getPokemonAbilities($pokemonID)
{
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }

    dbCloseConnection($conn); // Close the connection
    return " ";
}

?>