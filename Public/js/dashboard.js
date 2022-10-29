// JavaScript Document
	window.onload = displayClock();
function displayClock(){
  var display = new Date().toLocaleTimeString();
  document.querySelector('.timer').innerHTML = display;
  setTimeout(displayClock, 1000); 
}


// For dropdown admin account dropdown menu
var account_btn = document.getElementById('account-dropdown');
	
	account_btn.addEventListener('click', function(){
			document.getElementById('dropdown-item').classList.toggle('show-dropdown-item');
	});


// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('#account-dropdown')) {
    var dropdowns = document.getElementsByClassName("dropdown-item");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-dropdown-item')) {
        openDropdown.classList.remove('show-dropdown-item');
      }
    }
	 
  }
}



//Sidebar accordion

	var btn = document.querySelectorAll('#accordion-switch');
		var i;
		
		for( i = 0; i < btn.length; i++ ){
				btn[i].addEventListener('click', function(){
					this.classList.toggle("accordion-btn-active");
					
					   var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
	});
	
		}




var hamburger = document.getElementById('hamburger');
	hamburger.addEventListener('click', function(){
		document.getElementById('sidebar').classList.toggle('sidebar-collapse');
		document.getElementById('main-page-layout').classList.toggle('expand-content-page-layout');
	});
	


var header_toggle = document.getElementById('header-toggle');
	header_toggle.addEventListener('click', function(){
		document.getElementById('header-right-wrapper').classList.toggle('header-right-wrapper-show');
	});
	
//	
//	var sidebar = document.querySelector('#sidebar');
//	
//	sidebar.addEventListener('mouseover', function(){
//		document.getElementById('sidebar').classList.remove('sidebar-collapse');
//		document.getElementById('main-page-layout').classList.remove('expand-content-page-layout');
//	});


