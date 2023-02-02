"use strict";

let favouriteBtn = document.getElementsByClassName('favouriteBtn');
let favouriteVlu = document.getElementsByClassName('favouriteVlu');


for (let i = 0; i < favouriteBtn.length; i++) {

	if (favouriteVlu[i].value == "1") {
		favouriteBtn[i].style.color = "red";
	} else {
		favouriteBtn[i].style.color = "#3337";
	}

	favouriteBtn[i].addEventListener("click", function(){
		if (favouriteVlu[i].value == "1") {
			favouriteBtn[i].style.color = "#3337";
			favouriteVlu[i].value = "0";
		} else {
			favouriteBtn[i].style.color = "red";
			favouriteVlu[i].value = "1";
		}
	})
			
}

