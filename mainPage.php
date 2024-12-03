<!-- 

Sources:

Double column layout: https://www.w3schools.com/howto/howto_css_two_columns.asp
List filters: https://www.w3schools.com/howto/howto_js_filter_lists.asp
Classes reference for numerous class usage: https://www.w3schools.com/html/html_classes.asp

 -->

<!--  Initial PHP block to set variables needed to display the page  -->
<?php
// require_once 'database_functions.php'; // Reference file for all database functions

// $abilityList = getPokemonAbilities(); // Creates the ability list for use in the dropdown
// TODO: Delete this test data below
// TODO: Ctrl+F for $testAbilities (dummy variable right below this), replace with $abilityList above (actual DB call)
$testAbilities = [
    "Aftermath",
    "Battle Armor",
    "Forecast",
    "Frisk",
    "Inner Focus"
];

// $moveList = getPokemonMoves(); // Creates the move list for use in the dropdown
// TODO: Delete this test data below
// TODO: Ctrl+F for $testMoves (dummy variable right below this), replace with $moveList above (actual DB call)
$testMoves = [
    "Thunderbolt",
    "Blizzard",
    "Agility",
    "Earthquake",
    "Toxic",
    "Defense Curl"
];

// TODO: Create master stat list variable
// TODO: Delete this test data below
$testStats = [
    'BST' => 325, // Total Base Stats (BST)
    'HP' => 50,    // Health stat
    'Attack' => 65,    // Attack stat
    'Defense' => 55,   // Defense stat
    'SpecialAttack' => 45, // Special Attack stat
    'SpecialDefense' => 50, // Special Defense stat
    'Speed' => 60    // Speed stat
];

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Main Page</title>

<meta charset="UTF-8">
<meta name="author" content="Brandon Yates & Eli Ammons">

<link rel="stylesheet" href="style.css" />

</head>
<body>

	<div class="top-bar">
		<h1 class="header">Pokemon Team Builder</h1>

	</div>

	<div class="row">
		<div class="column" id="Roster">
			<div class="heading-with-buttons">
				<h2>Your Team</h2>
				<!--  TODO: Delete this functionality -->
				<!--
				<div class="btn-group">
					<button>Save</button>
					<button>Load</button>
				</div>
				-->
			</div>

			<div class="teamMember" id=1 data-inUse=false>
				<div class="heading-with-buttons">
					<h3></h3>
					<div class="btn-group">
						<button data-id="1" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="multi-column-layout">
					<div class="pokemon-column">
						<label>Ability:</label>
						<select id="ability-dropdown">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testAbilities as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
					</div>
					<div class="pokemon-column">
						
						<label>Move 1:</label>
						<select id="move-dropdown-1">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 2:</label>
						<select id="move-dropdown-2">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 3:</label>
						<select id="move-dropdown-3">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 4:</label>
						<select id="move-dropdown-4">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>

					</div>
					<div class="pokemon-column">
						<?php
						    // TODO: Add stats function here with ID call
						
						    // echo "BST: " . $testStats['BST'] . "<br>";
						    // echo "HP: " . $testStats['HP'] . "<br>";
						    // echo "Attack: " . $testStats['Attack'] . "<br>";
						    // echo "Defense: " . $testStats['Defense'] . "<br>";
						    // echo "Special Attack: " . $testStats['SpecialAttack'] . "<br>";
						    // echo "Special Defense: " . $testStats['SpecialDefense'] . "<br>";
						    //echo "Speed: " . $testStats['Speed'] . "<br>";
						?>
					</div>
				</div>
			</div>

			<div class="teamMember" id=2 data-inUse=false>
				<div class="heading-with-buttons">
					<h3></h3>
					<div class="btn-group">
						<button data-id="2" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="multi-column-layout">
					<div class="pokemon-column">
						<label>Ability:</label>
						<select id="ability-dropdown">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testAbilities as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
					</div>
					<div class="pokemon-column">
						
						<label>Move 1:</label>
						<select id="move-dropdown-1">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 2:</label>
						<select id="move-dropdown-2">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 3:</label>
						<select id="move-dropdown-3">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 4:</label>
						<select id="move-dropdown-4">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>

					</div>
					<div class="pokemon-column">
						<?php
						    // TODO: Add stats function here with ID call
						
						    // echo "BST: " . $testStats['BST'] . "<br>";
						    // echo "HP: " . $testStats['HP'] . "<br>";
						    // echo "Attack: " . $testStats['Attack'] . "<br>";
						    // echo "Defense: " . $testStats['Defense'] . "<br>";
						    // echo "Special Attack: " . $testStats['SpecialAttack'] . "<br>";
						    // echo "Special Defense: " . $testStats['SpecialDefense'] . "<br>";
						    //echo "Speed: " . $testStats['Speed'] . "<br>";
						?>
					</div>
				</div>
			</div>

			<div class="teamMember" id=3 data-inUse=false>
				<div class="heading-with-buttons">
					<h3></h3>
					<div class="btn-group">
						<button data-id="3" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="multi-column-layout">
					<div class="pokemon-column">
						<label>Ability:</label>
						<select id="ability-dropdown">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testAbilities as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
					</div>
					<div class="pokemon-column">
						
						<label>Move 1:</label>
						<select id="move-dropdown-1">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 2:</label>
						<select id="move-dropdown-2">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 3:</label>
						<select id="move-dropdown-3">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 4:</label>
						<select id="move-dropdown-4">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>

					</div>
					<div class="pokemon-column">
						<?php
						    // TODO: Add stats function here with ID call
						
						    // echo "BST: " . $testStats['BST'] . "<br>";
						    // echo "HP: " . $testStats['HP'] . "<br>";
						    // echo "Attack: " . $testStats['Attack'] . "<br>";
						    // echo "Defense: " . $testStats['Defense'] . "<br>";
						    // echo "Special Attack: " . $testStats['SpecialAttack'] . "<br>";
						    // echo "Special Defense: " . $testStats['SpecialDefense'] . "<br>";
						    //echo "Speed: " . $testStats['Speed'] . "<br>";
						?>
					</div>
				</div>
			</div>

			<div class="teamMember" id=4 data-inUse=false>
				<div class="heading-with-buttons">
					<h3></h3>
					<div class="btn-group">
						<button data-id="4" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="multi-column-layout">
					<div class="pokemon-column">
						<label>Ability:</label>
						<select id="ability-dropdown">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testAbilities as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
					</div>
					<div class="pokemon-column">
						
						<label>Move 1:</label>
						<select id="move-dropdown-1">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 2:</label>
						<select id="move-dropdown-2">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 3:</label>
						<select id="move-dropdown-3">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 4:</label>
						<select id="move-dropdown-4">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>

					</div>
					<div class="pokemon-column">
						<?php
						    // TODO: Add stats function here with ID call
						
						    // echo "BST: " . $testStats['BST'] . "<br>";
						    // echo "HP: " . $testStats['HP'] . "<br>";
						    // echo "Attack: " . $testStats['Attack'] . "<br>";
						    // echo "Defense: " . $testStats['Defense'] . "<br>";
						    // echo "Special Attack: " . $testStats['SpecialAttack'] . "<br>";
						    // echo "Special Defense: " . $testStats['SpecialDefense'] . "<br>";
						    //echo "Speed: " . $testStats['Speed'] . "<br>";
						?>
					</div>
				</div>
			</div>

			<div class="teamMember" id=5 data-inUse=false>
				<div class="heading-with-buttons">
					<h3></h3>
					<div class="btn-group">
						<button data-id="5" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="multi-column-layout">
					<div class="pokemon-column">
						<label>Ability:</label>
						<select id="ability-dropdown">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testAbilities as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
					</div>
					<div class="pokemon-column">
						
						<label>Move 1:</label>
						<select id="move-dropdown-1">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 2:</label>
						<select id="move-dropdown-2">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 3:</label>
						<select id="move-dropdown-3">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 4:</label>
						<select id="move-dropdown-4">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>

					</div>
					<div class="pokemon-column">
						<?php
						    // TODO: Add stats function here with ID call
						
						    // echo "BST: " . $testStats['BST'] . "<br>";
						    // echo "HP: " . $testStats['HP'] . "<br>";
						    // echo "Attack: " . $testStats['Attack'] . "<br>";
						    // echo "Defense: " . $testStats['Defense'] . "<br>";
						    // echo "Special Attack: " . $testStats['SpecialAttack'] . "<br>";
						    // echo "Special Defense: " . $testStats['SpecialDefense'] . "<br>";
						    //echo "Speed: " . $testStats['Speed'] . "<br>";
						?>
					</div>
				</div>
			</div>

			<div class="teamMember" id=6 data-inUse=false>
				<div class="heading-with-buttons">
					<h3></h3>
					<div class="btn-group">
						<button data-id="6" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="multi-column-layout">
					<div class="pokemon-column">
						<label>Ability:</label>
						<select id="ability-dropdown">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testAbilities as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
					</div>
					<div class="pokemon-column">
						
						<label>Move 1:</label>
						<select id="move-dropdown-1">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 2:</label>
						<select id="move-dropdown-2">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 3:</label>
						<select id="move-dropdown-3">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>
						
						<label>Move 4:</label>
						<select id="move-dropdown-4">
							<option value="" selected disabled>Select an option</option>
                            <?php
                                foreach ($testMoves as $item) {
                                    echo "<option value=\"$item\">$item</option>";
                                }
                            ?>
						</select>

					</div>
					<div class="pokemon-column">
						<?php
						    // TODO: Add stats function here with ID call
						
						    // echo "BST: " . $testStats['BST'] . "<br>";
						    // echo "HP: " . $testStats['HP'] . "<br>";
						    // echo "Attack: " . $testStats['Attack'] . "<br>";
						    // echo "Defense: " . $testStats['Defense'] . "<br>";
						    // echo "Special Attack: " . $testStats['SpecialAttack'] . "<br>";
						    // echo "Special Defense: " . $testStats['SpecialDefense'] . "<br>";
						    //echo "Speed: " . $testStats['Speed'] . "<br>";
						?>
					</div>
				</div>
			</div>

		</div>
		<div class="column" id="Modular">
			<div class="heading-with-buttons">
				<h2>Search</h2>
				<div class="btn-group">
					<button onclick="loadContent('search')">Search</button>
					<button onclick="loadContent('type_chart')">Type Chart</button>
				</div>
			</div>

			<div id="content-container">

				<p>Search for a Pokemon to add using the box below.</p>

				<input type="text" id="searchInput" onkeyup="listFilter()"
					placeholder="Search for Pokemon or Type..">

				<ul id="Pokedex">

					<!-- TODO: Delete this dummy data below -->
					<li>
						<div id="search-name">1: Bulbasaur</div>
						<div id="search-type">Grass/Poison</div>
					</li>
					<li>
						<div id="search-name">2: Ivysaur</div>
						<div id="search-type">Grass/Poison</div>
					</li>
					<li>
						<div id="search-name">3: Venasaur</div>
						<div id="search-type">Grass/Poison</div>
					</li>
					<li>
						<div id="search-name">25: Pikachu</div>
						<div id="search-name">Electric</div>
					</li>
					<li>
						<div id="search-name">26: Raichu</div>
						<div id="search-name">Electric</div>
					</li>
					<li>
						<div id="search-name">48: Jigglypuff</div>
						<div id="search-type">Normal/Fairy</div>
					</li>
					<li>
						<div id="search-name">49: Wigglytuff</div>
						<div id="search-type">Normal/Fairy</div>
					</li>
				    
					<!-- TODO: Enable list function below -->
					<?php
                        // getPokemonList();
                    ?>
				
				</ul>

			</div>

		</div>
	</div>
</body>

<script src="functions.js"></script>
<script src="pageUpdates.js"></script>

</html>


