<!-- 
Sources:

Double column layout: https://www.w3schools.com/howto/howto_css_two_columns.asp
List filters: https://www.w3schools.com/howto/howto_js_filter_lists.asp
Classes reference for .teamMember class: https://www.w3schools.com/html/html_classes.asp

-->

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<title>Main Page</title>

<meta charset="UTF-8">
<meta name="author" content="Brandon Yates & Eli Ammons" >

<link rel="stylesheet" href="style.css" />
    
</head>
<body>

    <div class="top-bar">
        <h1 class="header">
Pokemon Team Builder
        </h1>
        
    </div>
    
    <div class="row">
    <div class="column" id="Roster">
    <h2>
    Your Team
    <div class="btn-group">
    <button>Save</button>
    <button>Load</button>
    </div>
    </h2>
    <div class="teamMember" id=1 data-inUse=true>
                <h3>Pokemon 1</h3>
                Some text..<br>
                Some more text..<br>
                Some more text..<br>
                Some more text..
            </div>
            <div class="teamMember" id=2 data-inUse=true> 
                <h3>Pokemon 2</h3>
                Some text..<br>
                Some more text..<br>
                Some more text..<br>
                Some more text..
         </div>
         <div class="teamMember" id=3 data-inUse=false> 
                <h3>Empty</h3>
         </div>
         <div class="teamMember" id=4 data-inUse=false> 
                <h3>Empty</h3>
         </div>
         <div class="teamMember" id=5 data-inUse=false> 
                <h3>Empty</h3>
         </div>
         <div class="teamMember" id=6 data-inUse=false> 
                <h3>Empty</h3>
         </div>
</div>
        <div class="column" id="Search">
            <h2>
            Add Pokemon
            <div class="btn-group">
                <button>Search</button>
                <button>Type Chart</button>
                <button>Analysis</button>
                <button>Help</button>
                </div>
            </h2>
            <p>Search for a Pokemon to add using the box below.</p>
            
            <input type="text" id="searchInput" onkeyup="listFilter()" placeholder="Search for Pokemon..">
    
            <ul id="Pokedex">
            <?php
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
                }
                //echo "Connected successfully <br>";
                $sql = "SELECT pokemon.id, pokemon.identifier AS pokemon_name, types.identifier AS type_name
                FROM
                    pokemon
                INNER JOIN pokemon_types ON pokemon.id = pokemon_types.pokemon_id
                INNER JOIN types ON pokemon_types.type_id = types.id
                ORDER BY pokemon.id;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li>". $row["pokemon_name"]. "   " . $row["type_name"]. "</li>";
                    }
                }  
                // Close connection
                mysqli_close($conn);
            ?>
            </ul> 
        </div>
    </div>
</body>

<script src="functions.js"></script>

</html>


