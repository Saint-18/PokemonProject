function clearMemberById(button) {
    // Get the teamMember ID from the button's data attribute
    const id = button.dataset.id;

    // Locate the teamMember element by its ID
    const teamMember = document.getElementById(id);

    if (teamMember) {
        // Clear the <h3> inside the 'heading-with-buttons'
        const header = teamMember.querySelector(".heading-with-buttons h3");
        if (header) {
            header.textContent = ""; // Clear the header text
        }

        // Clear all the <div class="pokemon-column"> elements
        const pokemonColumns = teamMember.querySelectorAll(".pokemon-column");
        pokemonColumns.forEach(column => {
            column.innerHTML = ""; // Clear the content of each column
        });

        // Optionally update the data-inUse attribute
        teamMember.dataset.inuse = 'false';
    } else {
        console.error(`No '.teamMember' element found with ID: ${id}`);
    }
}


function loadContent(argument) {
	
	const container = document.getElementById('content-container');
	
	container.innerHTML = ''; // Empty the content
	
	if (argument === 'search') {
		
		// Update the header element manually
		document.querySelector('#Modular .heading-with-buttons h2').textContent = 'Search';

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
		
		// Update the header element manually
		document.querySelector('#Modular .heading-with-buttons h2').textContent = 'Type Chart';
				
		// Create an image element
		const contentHTML = `
		
			<img src="Pokemon_Type_Chart.png" alt="Pokemon Type Chart">
			
		`;
		
		container.innerHTML = contentHTML;


	}
	
	if (argument === 'analysis') {
		// Update the header element manually
		document.querySelector('#Modular .heading-with-buttons h2').textContent = 'Analysis';
		
		// TODO: Analysis Page
	}
	
	if (argument === 'help') {
		// Update the header element manually
		document.querySelector('#Modular .heading-with-buttons h2').textContent = 'Help';
		
		// TODO: Help page
	}
	
}