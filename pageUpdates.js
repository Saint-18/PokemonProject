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
		
		// Reset the ability dropdown item
		const abilityDropdowns = teamMember.querySelectorAll("[id^='ability-dropdown']");
		abilityDropdowns.forEach(select => {
		    select.selectedIndex = 0; // Set to default
		});
		
		// Reset all four move dropdown items
		const moveDropdowns = teamMember.querySelectorAll("[id^='move-dropdown']");
		moveDropdowns.forEach(dropdown => {
		    dropdown.selectedIndex = 0; // Set to default
		});

        // Set the logic flag to false so the team member slot can be used again
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
	
}