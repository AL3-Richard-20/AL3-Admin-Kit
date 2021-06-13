//window.setInterval('toggleDisplayMode()')

function toggleDisplayMode() {
	


	var e_page_state   	= document.getElementById("page-display-mode")
	var page_state   	= e_page_state.innerHTML;



	/* Dark Mode Variables */
	// var e_al3_loader_dark   = document.querySelectorAll(".al3-loader-dark");
	// var e_loader_dark 		= document.querySelectorAll(".loader-dark");

	var e_text_dark  		= document.querySelectorAll(".text-dark");
	var e_text_black  	 	= document.querySelectorAll(".text-black");

	var e_bg_dark   	 	= document.querySelectorAll(".bg-dark");
	var e_bg_black  	  	= document.querySelectorAll(".bg-black");

	var e_btn_outline_dark  = document.querySelectorAll(".btn-outline-dark");
	var e_btn_outline_black = document.querySelectorAll(".btn-outline-black");

	var e_form_control_dark = document.querySelectorAll(".form-control");

	var e_treeview_dark     = document.querySelectorAll(".list-group-item-d");

	var e_list_g_dark    	= document.querySelectorAll(".list-group-dark");

	var e_list_group_dark   = document.querySelectorAll(".list-group-item-dark");

	var e_al3_nav_light     = document.querySelectorAll(".al3-nav-item");

	var e_table_dark     	= document.querySelectorAll(".table-dark");

	var e_notif_dark   		= document.querySelectorAll(".notif-box-dark")


	/* Light Mode Variables */

	var e_text_light  	 	= document.querySelectorAll(".text-light");
	var e_text_white  	 	= document.querySelectorAll(".text-white");

	var e_bg_light   	 	= document.querySelectorAll(".bg-light");
	var e_bg_white   	 	= document.querySelectorAll(".bg-white");

	var e_btn_outline_light = document.querySelectorAll(".btn-outline-light");
	var e_btn_outline_white = document.querySelectorAll(".btn-outline-white");

	var e_form_control_white = document.querySelectorAll(".fc-white");

	var e_treeview_white     = document.querySelectorAll(".list-group-item");

	var e_list_g_light   	= document.querySelectorAll(".list-group-light");

	var e_list_group   		= document.querySelectorAll(".list-group-item");

	var e_al3_nav_dark      = document.querySelectorAll(".al3-nav-item-dark");

	var e_table_light     	= document.querySelectorAll(".table-white");

	var e_notif_light   	= document.querySelectorAll(".notif-box-light")

	/* Other Elements */
	var e_cards = document.querySelectorAll(".card");



	// Switch from Light to Dark Mode
	if (page_state == "light") {

		switchClasses(e_text_dark, "text-dark", "text-light");
		switchClasses(e_text_black, "text-black", "text-white");

		switchClasses(e_bg_light, "bg-light", "bg-dark");
		switchClasses(e_bg_white, "bg-white", "bg-black");

		switchClasses(e_btn_outline_dark, "btn-outline-dark", "btn-outline-light");
		switchClasses(e_btn_outline_black, "btn-outline-black", "btn-outline-white");

		switchClasses(e_form_control_dark, "form-control", "fc-white");

		// switchClasses(e_treeview_white, "list-group-item", "list-group-item-d");

		switchClasses(e_list_g_dark , "list-group-dark", "list-group");

		switchClasses(e_list_group , "list-group-item", "list-group-item-dark");

		switchClasses(e_al3_nav_light, "al3-nav-item", "al3-nav-item-dark");

		switchClasses(e_table_light, "table-white", "table-dark");

		switchClasses(e_notif_light, "notif-box-light", "notif-box-dark");

		addClass(e_cards, "border-dark");
	}
	
	// Switch from Dark to Light Mode
	else if (page_state == "dark") {

		switchClasses(e_text_light, "text-light", "text-dark");
		switchClasses(e_text_white, "text-white", "text-black");

		switchClasses(e_bg_dark, "bg-dark", "bg-light");
		switchClasses(e_bg_black, "bg-black", "bg-white");

		switchClasses(e_btn_outline_light, "btn-outline-light", "btn-outline-dark");
		switchClasses(e_btn_outline_white, "btn-outline-white", "btn-outline-black");

		switchClasses(e_form_control_white, "fc-white", "form-control");

		// switchClasses(e_treeview_dark, "list-group-item-d", "list-group-item");

		switchClasses(e_list_g_light , "list-group", "list-group-dark");

		switchClasses(e_list_group_dark , "list-group-item-dark", "list-group-item")

		switchClasses(e_al3_nav_dark, "al3-nav-item-dark", "al3-nav-item")

		switchClasses(e_table_dark, "table-dark", "table-white");

		switchClasses(e_notif_dark, "notif-box-dark", "notif-box-light");

		removeClass(e_cards, "border-dark");
	}

	// Update page state
	e_page_state.innerHTML = switchState(page_state);
}

function switchClasses(elements, fromClass, toClass) {

	for(let elem of elements) {
		if (elem.classList.contains(fromClass)) {
			elem.classList.remove(fromClass);
			elem.classList.add(toClass);
		}
	}

	return true;
}

function addClass(elements, className) {

	for (let elem of elements) {
		if (!elem.classList.contains(className)) {
			elem.classList.add(className);
		}
	}
}

function removeClass(elements, className) {

	for (let elem of elements) {
		if (elem.classList.contains(className)) {
			elem.classList.remove(className);
		}
	}
}

function switchState(state) {

	switch(state) {

		case "light":
			state = "dark"; 
			break;
		case "dark":
			state = "light";
			break;
		default:
			state = "undefined";
	}

	return state;
}

function createPageStateElement() {

	var div = document.createElement("div");
	var id = "page-display-mode";
	var init_mode = document.createTextNode("light");
	div.appendChild(init_mode)
	div.id = id;
	div.classList.add("d-none");
	document.getElementsByTagName("body")[0].appendChild(div);
}


window.toggleDisplayMode   		= toggleDisplayMode;
window.createPageStateElement 	= createPageStateElement;


