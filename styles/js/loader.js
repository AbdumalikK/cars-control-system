var load;

function loader() {
	load = setTimeout(showPage, 1500);
}

function showPage() {
	document.getElementById("loader").style.display = "none";
	document.getElementById("loadText").style.display = "none";
}
