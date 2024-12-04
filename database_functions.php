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
                // If the name is the same as the previous one, append a second type
                echo " / " . $row["type_name"];
            } else {
                // Start a new list item
                echo "<li>";
                echo "<div id='search-name'>" . $row["id"] . ": " . $row["pokemon_name"] . "</div>";
                echo "<div id='search-type'>" . $row["type_name"];
            }
            $previousPokemon = $row["pokemon_name"];
        }
    }

    dbCloseConnection($conn); // Close the connection
}

function getPokemonName($pokemonID)
{
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }

    $name = "";
    $sql = "SELECT pokemon.id, pokemon.identifier AS pokemon_name
	FROM
	    pokemon
	ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pokemonID == $row["id"]) {
                $name = $row["pokemon_name"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $name;
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
            if ($pokemonID == $row["id"]) {
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
            if ($pokemonID == $row["id"]) {
                $type = $row["type_name"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $type;
}

function getAllStats($pokemonID)
{
    $conn = dbOpenConnection();
    $pokemonAllStatsArray[] = "";
    $sql = "SELECT pokemon.id, pokemon.identifier AS pokemon_name, types.identifier AS type_name
	FROM
	    pokemon
	INNER JOIN pokemon_types ON pokemon.id = pokemon_types.pokemon_id
	INNER JOIN types ON pokemon_types.type_id = types.id
	ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Start a new list item
            $pokemonAllStatsArray[] = getPokemonStats($row["id"]);
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $pokemonAllStatsArray;
}

function getPokemonStats($pokemonID)
{
    $hp = getPokemonHealth($pokemonID);
    $Attack = getPokemonAttack($pokemonID);
    $Defense = getPokemonDefense($pokemonID);
    $SpecialAttack = getPokemonSpecialAttack($pokemonID);
    $SpecialDefense = getPokemonSpecialDefense($pokemonID);
    $Speed = getPokemonSpeed($pokemonID);

    $BST = $hp + $Attack + $Defense + $SpecialAttack + $SpecialDefense + $Speed;
    $StatArray = array(
        $pokemonID,
        $BST,
        $hp,
        $Attack,
        $Defense,
        $SpecialAttack,
        $SpecialDefense,
        $Speed
    );
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
            if ($pokemonID == $row["id"]) {
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
            if ($pokemonID == $row["id"]) {
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
            if ($pokemonID == $row["id"]) {
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
            if ($pokemonID == $row["id"]) {
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
            if ($pokemonID == $row["id"]) {
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
            if ($pokemonID == $row["id"]) {
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
    $moveArray[] = " ";
    $sql = "SELECT pokemon.identifier AS pokemon_name, pokemon.id, moves.identifier AS move, types.identifier as Type, move_damage_classes.identifier AS Damage_Type
    FROM
    pokemon
    INNER JOIN pokemon_moves ON pokemon.id = pokemon_moves.pokemon_id
    INNER JOIN moves ON moves.id = pokemon_moves.move_id
    INNER Join types ON types.id = moves.type_id
    Inner Join move_damage_classes ON move_damage_classes.id = moves.damage_class_id
    ORDER BY pokemon.id;";
    // allows calls to name, pokemon id, move, type, and damage type.
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pokemonID == $row["id"]) {
                $moveArray[] = $row["move"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $moveArray;
}

function getPokemonAbilities($pokemonID)
{
    $conn = dbOpenConnection(); // Open the connection
    if (! $conn) {
        exit(); // No connection, exit the function
    }
    $abilityArray[] = "";
    $sql = "SELECT pokemon.identifier AS pokemon_name, pokemon.id, abilities.identifier AS pokemon_ability
    FROM
    pokemon
    INNER JOIN pokemon_abilities ON pokemon.id = pokemon_abilities.pokemon_id
    INNER JOIN abilities ON abilities.id = pokemon_abilities.ability_id
    ORDER BY pokemon.id;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($pokemonID == $row["id"]) {
                $abilityArray = $row["pokemon_ability"];
            }
        }
    }
    dbCloseConnection($conn); // Close the connection
    return $abilityArray;
}
?>