"use strict";

function starSelect(starBtn){
	let iconI = starBtn.parentNode;
	iconI.style.color = "#FFAB00";
}
function starSelectNone(starBtn){
	let iconI = starBtn.parentNode;
	iconI.style.color = "#78829D";
}

let mailGender1 = document.getElementById('mailGender1');
let mailGender15 = document.getElementById('mailGender15');
let mailGender2 = document.getElementById('mailGender2');
let mailGender25 = document.getElementById('mailGender25');
let mailGender3 = document.getElementById('mailGender3');
let mailGender35 = document.getElementById('mailGender35');
let mailGender4 = document.getElementById('mailGender4');
let mailGender45 = document.getElementById('mailGender45');
let mailGender5 = document.getElementById('mailGender5');


let bookTitle = document.getElementById('bookTitle');
let sortDiskiption = document.getElementById('sortDiskiption');

let resetBtn = document.getElementById('resetBtn');
let pdfInptBtn = document.getElementById('pdfInptBtn');
let pdfInput = document.getElementById('pdfInput');
let imageInptBtn = document.getElementById('imageInptBtn');
let imageInput = document.getElementById('imageInput');

let inputImgView = document.getElementById('inputImgView');

let freeRadio = document.getElementById('freeRadio');
let paidRadio = document.getElementById('paidRadio');
let priceLabel = document.getElementById('priceLabel');
let priceInput = document.getElementById('bookPrice');

let updateBtn = document.getElementById('updateBtn');



if (mailGender1.checked == true) {
	starSelect(mailGender1);
} else if (mailGender15.checked == true) {
	starSelect(mailGender15);
} else if (mailGender2.checked == true) {
	starSelect(mailGender2);
} else if (mailGender25.checked == true) {
	starSelect(mailGender25);
} else if (mailGender3.checked == true) {
	starSelect(mailGender3);
} else if (mailGender35.checked == true) {
	starSelect(mailGender35);
} else if (mailGender4.checked == true) {
	starSelect(mailGender4);
} else if (mailGender45.checked == true) {
	starSelect(mailGender45);
} else if (mailGender5.checked == true) {
	starSelect(mailGender5);
}



mailGender1.addEventListener("click", function(){
	starSelect(mailGender1);
	starSelectNone(mailGender15);
	starSelectNone(mailGender2);
	starSelectNone(mailGender25);
	starSelectNone(mailGender3);
	starSelectNone(mailGender35);
	starSelectNone(mailGender4);
	starSelectNone(mailGender45);
	starSelectNone(mailGender5);
})

mailGender15.addEventListener("click", function(){
	starSelect(mailGender15);
	starSelectNone(mailGender1);
	starSelectNone(mailGender2);
	starSelectNone(mailGender25);
	starSelectNone(mailGender3);
	starSelectNone(mailGender35);
	starSelectNone(mailGender4);
	starSelectNone(mailGender45);
	starSelectNone(mailGender5);
})

mailGender2.addEventListener("click", function(){
	starSelect(mailGender2);
	starSelectNone(mailGender15);
	starSelectNone(mailGender1);
	starSelectNone(mailGender25);
	starSelectNone(mailGender3);
	starSelectNone(mailGender35);
	starSelectNone(mailGender4);
	starSelectNone(mailGender45);
	starSelectNone(mailGender5);
})

mailGender25.addEventListener("click", function(){
	starSelect(mailGender25);
	starSelectNone(mailGender15);
	starSelectNone(mailGender2);
	starSelectNone(mailGender1);
	starSelectNone(mailGender3);
	starSelectNone(mailGender35);
	starSelectNone(mailGender4);
	starSelectNone(mailGender45);
	starSelectNone(mailGender5);
})

mailGender3.addEventListener("click", function(){
	starSelect(mailGender3);
	starSelectNone(mailGender15);
	starSelectNone(mailGender2);
	starSelectNone(mailGender25);
	starSelectNone(mailGender1);
	starSelectNone(mailGender35);
	starSelectNone(mailGender4);
	starSelectNone(mailGender45);
	starSelectNone(mailGender5);
})

mailGender35.addEventListener("click", function(){
	starSelect(mailGender35);
	starSelectNone(mailGender15);
	starSelectNone(mailGender2);
	starSelectNone(mailGender25);
	starSelectNone(mailGender3);
	starSelectNone(mailGender1);
	starSelectNone(mailGender4);
	starSelectNone(mailGender45);
	starSelectNone(mailGender5);
})

mailGender4.addEventListener("click", function(){
	starSelect(mailGender4);
	starSelectNone(mailGender15);
	starSelectNone(mailGender2);
	starSelectNone(mailGender25);
	starSelectNone(mailGender3);
	starSelectNone(mailGender35);
	starSelectNone(mailGender1);
	starSelectNone(mailGender45);
	starSelectNone(mailGender5);
})

mailGender45.addEventListener("click", function(){
	starSelect(mailGender45);
	starSelectNone(mailGender15);
	starSelectNone(mailGender2);
	starSelectNone(mailGender25);
	starSelectNone(mailGender3);
	starSelectNone(mailGender35);
	starSelectNone(mailGender4);
	starSelectNone(mailGender1);
	starSelectNone(mailGender5);
})

mailGender5.addEventListener("click", function(){
	starSelect(mailGender5);
	starSelectNone(mailGender15);
	starSelectNone(mailGender2);
	starSelectNone(mailGender25);
	starSelectNone(mailGender3);
	starSelectNone(mailGender35);
	starSelectNone(mailGender4);
	starSelectNone(mailGender45);
	starSelectNone(mailGender1);
})


resetBtn.addEventListener("click", function(){
	starSelectNone(mailGender1);
	starSelectNone(mailGender15);
	starSelectNone(mailGender2);
	starSelectNone(mailGender25);
	starSelectNone(mailGender3);
	starSelectNone(mailGender35);
	starSelectNone(mailGender4);
	starSelectNone(mailGender45);
	starSelectNone(mailGender5);

	pdfNameShow.style.display = "none";
	inputImgView.src = "";
})


pdfInptBtn.addEventListener("click", function(){
	pdfInput.click();
})

imageInptBtn.addEventListener("click", function(){
	imageInput.click();
})


pdfInput.addEventListener("input", function(){
	let url = URL.createObjectURL(this.files[0]);
	let nameExe = pdfInput.value.split(".")[1];
	if (nameExe == "pdf") {
		let pdfName = pdfInput.value.split("fakepath\\")[1];
		pdfNameShow.innerHTML = pdfName;
		pdfNameShow.style.display = "block";
		pdfNameShow.style.color = "green";
	} else {
		pdfNameShow.innerHTML = nameExe + " No Allow ( PDF Input )";
		pdfNameShow.style.display = "block";
		pdfNameShow.style.color = "red";
	}
})


imageInput.addEventListener("input", function(){
	let url = URL.createObjectURL(this.files[0]);
	let nameExe = imageInput.value.split(".")[1];
	inputImgView.src = url;
})

freeRadio.addEventListener("click", function(){
	priceLabel.style.display = "none";
	priceInput.value = "";
})

paidRadio.addEventListener("click", function(){
	priceLabel.style.display = "block";
	if (priceInput.value > 0) {
		priceInput.style.borderColor = "green";
	} else {
		priceInput.style.borderColor = "red";
	}
})

priceInput.addEventListener("input", function(){
	if (priceInput.value > 0) {
		priceInput.style.borderColor = "green";
	} else {
		priceInput.style.borderColor = "red";
	}
})


bookTitle.addEventListener("input", function(){
	if (bookTitle.value.length >= 10 && bookTitle.value.length <= 50) {
		bookTitle.style.borderColor = "green";
	} else {
		bookTitle.style.borderColor = "red";
	}
})
sortDiskiption.addEventListener("input", function(){
	if (sortDiskiption.value.length >= 10 && sortDiskiption.value.length <= 50) {
		sortDiskiption.style.borderColor = "green";
	} else {
		sortDiskiption.style.borderColor = "red";
	}
})


updateBtn.addEventListener("click", function(event){
	if ((bookTitle.value.length >= 10 && bookTitle.value.length <= 50) &&
		(sortDiskiption.value.length >= 10 && sortDiskiption.value.length <= 300) &&
		(freeRadio.checked == true || freeRadio.checked == false && priceInput.value >= 1) &&
		(imageInput.value.split(".")[1] == "jpg" || imageInput.value.split(".")[1] == "png") &&
		pdfInput.value.split(".")[1] == "pdf") {

		

	} else {
		event.preventDefault();
		bookTitle.style.borderColor = "red";
		sortDiskiption.style.borderColor = "red";
		priceInput.style.borderColor = "red";
	}
})