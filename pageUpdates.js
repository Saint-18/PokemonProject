function loadContent(argument) {
	
	const container = document.getElementById('content-container');
	
	container.innerHTML = ''; // Empty the content
	
	if (argument === 'search') {
		
		const contentHTML = `
		
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
							<li>
								<span id="pokemon-name">Pikachu</span>
								<span id="type-name">Electric</span>
							</li>
							<li>
								<span id="pokemon-name">Raichu</span>
								<span id="type-name">Electric</span>
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
		
		`;
		
		container.innerHTML = contentHTML;
		add_buttons(); // Need to add buttons to the list again
	}
	
	
	if (argument === 'type_chart') {
		// Create an image element
		const contentHTML = `
		
			<img src="Pokemon_Type_Chart.png" alt="Pokemon Type Chart">
			
		`;
		
		container.innerHTML = contentHTML;


	}
	
	if (argument === 'analysis') {
		
	}
	
	if (argument === 'help') {
		
	}
	
}