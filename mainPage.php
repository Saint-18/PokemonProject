<!-- 

Sources:

Double column layout: https://www.w3schools.com/howto/howto_css_two_columns.asp
List filters: https://www.w3schools.com/howto/howto_js_filter_lists.asp
Classes reference for numerous class usage: https://www.w3schools.com/html/html_classes.asp

 -->

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
				<div class="btn-group">
					<button>Save</button>
					<button>Load</button>
				</div>
			</div>

			<div class="teamMember" id=1 data-inUse=true>
				<div class="heading-with-buttons">
					<h3>Jigglypuff</h3>
					<div class="btn-group">
						<button>Edit</button>
						<button data-id="1" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="four-column-layout">
					<div class="pokemon-column">
						Pokedex #039<br> Gender: F<br> Type 1: Normal<br> Type 2: Fairy<br>
						Held Item: Leftovers<br> Ability: Cute Charm<br> Nature: Serious
					</div>
					<div class="pokemon-column">
						Blizzard<br> Body Slam<br> Fire Blast<br> Psychic
					</div>
					<div class="pokemon-column">
						BST: 270<br> HP: 115<br> Attack: 45<br> Defense: 20<br> Sp. Atk.:
						45<br> Sp. Def.: 25<br> Speed: 20
					</div>
					<div class="pokemon-column">
						EVs/IVs<br> HP: 252/31<br> Attack: 4/31<br> Defense: 0/31<br> Sp.
						Atk.: 252/31<br> Sp. Def.: 0/31<br> Speed: 0/31
					</div>
				</div>
			</div>

			<div class="teamMember" id=2 data-inUse=false>
				<div class="heading-with-buttons">
					<h3></h3>
					<div class="btn-group">
						<button>Edit</button>
						<button data-id="2" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="four-column-layout">
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
				</div>
			</div>
			
			<div class="teamMember" id=3 data-inUse=false>
				<div class="heading-with-buttons">
					<h3></h3>
					<div class="btn-group">
						<button>Edit</button>
						<button data-id="3" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="four-column-layout">
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
				</div>
			</div>
			
			<div class="teamMember" id=4 data-inUse=false>
				<div class="heading-with-buttons">
					<h3></h3>
					<div class="btn-group">
						<button>Edit</button>
						<button data-id="4" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="four-column-layout">
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
				</div>
			</div>
			
			<div class="teamMember" id=5 data-inUse=false>
				<div class="heading-with-buttons">
					<h3></h3>
					<div class="btn-group">
						<button>Edit</button>
						<button data-id="5" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="four-column-layout">
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
				</div>
			</div>
			
			<div class="teamMember" id=6 data-inUse=false>
				<div class="heading-with-buttons">
					<h3></h3>
					<div class="btn-group">
						<button>Edit</button>
						<button data-id="6" onclick="clearMemberById(this)">Remove</button>
					</div>
				</div>

				<div class="four-column-layout">
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
					</div>
					<div class="pokemon-column">
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
					<button onclick="loadContent('analysis')">Analysis</button>
					<button onclick="loadContent('help')">Help</button>
				</div>
			</div>

			<div id="content-container">

				<p>Search for a Pokemon to add using the box below.</p>

				<input type="text" id="searchInput" onkeyup="listFilter()"
					placeholder="Search for Pokemon..">

				<ul id="Pokedex">

					<li>
						<div id="search-name">Bulbasaur</div>
						<div id="search-type">Grass/Poison</div>
					</li>
					<li>
						<div id="search-name">Ivysaur</div>
						<div id="search-type">Grass/Poison</div>
					</li>
					<li>
						<div id="search-name">Venasaur</div>
						<div id="search-type">Grass/Poison</div>
					</li>
					<li><span id="pokemon-name">Pikachu</span> <span id="type-name">Electric</span>
					</li>
					<li><span id="pokemon-name">Raichu</span> <span id="type-name">Electric</span>
					</li>
					<li>
						<div id="search-name">Jigglypuff</div>
						<div id="search-type">Normal/Fairy</div>
					</li>
					<li>
						<div id="search-name">Wigglytuff</div>
						<div id="search-type">Normal/Fairy</div>
					</li>
				
					<?php
    // require_once 'database_functions.php'; // Reference file for all database functions
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


