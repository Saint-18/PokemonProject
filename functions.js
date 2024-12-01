function listFilter() {
  // Declare variables
  var input, filter, ul, li, i, txtValue;
  input = document.getElementById('searchInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("Pokedex");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    // Get the text content directly from the <li> element
    txtValue = li[i].textContent || li[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

function add_buttons() {
    let ul = document.getElementById("Pokedex");
    let li = ul.getElementsByTagName('li');
    
    for (let i = 0; i < li.length; i++) {
        // Create a new button element
        let button = document.createElement('button');
        button.textContent = 'Add'; // Set the button text
		button.style.marginLeft = '10px'; // Add left margin to separate from text
        button.onclick = function() {
            addButtonClicked(li[i], this); // Call a function with the current <li> element and the button itself
        };
        
        // Append the button to the current <li>
        li[i].appendChild(button);
    }
}

function addButtonClicked(item, button) {
    // Update the button text and disable it
	
	// Allow the user to add the same Pokemon to the team multiple times
    //button.textContent = 'Added!';
    // button.disabled = true; 

    // Only pass the original text of the <li> element
    const itemText = item.textContent.replace(button.textContent, "").trim();
    updateTeamMembers(itemText);
}

function updateTeamMembers(name) {
    // Select all elements with the class 'teamMember'
    const teamMembers = document.querySelectorAll('.teamMember');
    
    // Loop through each team member element
    for (const member of teamMembers) {
        // Check if the 'data-inUse' attribute is 'false'
        if (member.getAttribute('data-inUse') === 'false') {
            // Update 'data-inUse' to 'true'
            member.setAttribute('data-inUse', 'true');
            
            // Add some data to the <h2> tag
            const h3 = member.querySelector('h3');
            if (h3) {
                h3.textContent = name; // Change this to the text/data you want to add
            }
            
            // Exit the loop once the target is updated
            break;
        }
    }
}

// Add buttons to the initial list (this will need to be called each time the list is updated)
add_buttons();
