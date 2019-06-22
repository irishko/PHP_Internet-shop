function displayForm() {
	var elem = document.getElementById("item-form");
	if (elem.style.display != "flex") {
		elem.style.display = "flex";
	} else {
		elem.style.display = "none";
	}
}

function displayModifForm(id) {
	var elem = document.getElementById("modif-form");
	var input = document.getElementById("id-input");
	input.setAttribute("value", id);
	if (elem.style.display != "flex") {
		elem.style.display = "flex";
	} else {
		elem.style.display = "none";
	}
}


function delAccount() {
	if (confirm("Are you sure you want to delete your account?")) {
		console.log("fdsa");
		var xhttp = new XMLHttpRequest();
		xhttp.open("GET", "del.php", false);
		xhttp.send();
	}
}

function get_order() {
	var elem = document.getElementById("basket__item");

	var id = [];
	var count = [];

	for (var el of elem.children) {
		id.push(el.children[0].innerHTML);
		count.push(el.children[2].children[0].innerHTML);
	}

	xhttp.open("GET", "order.php?" + "names=" + id.join(';') + "&num=" + count.join(';'), false);
	xhttp.send();
	location.href = "index.php";
};

if (document.getElementById("submit"))
	document.getElementById("submit").addEventListener("click", get_order);
