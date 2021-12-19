let tabela = document.getElementById("tabela");

function addElement(infos, classes) {
	const row = document.createElement("tr");

	for (let info of infos) {
		const data = document.createElement("td");
		data.className = classes;
		data.textContent = info;
		row.appendChild(data);
	}

	tabela.appendChild(row);
}

function getJsonFromUrl(url) {
	return fetch(url).then((res) => res.json());
}

function getText(cell) {
	return cell.innerText == undefined ? cell.textContent : cell.innerText;
}
console.log(document.URL);

getJsonFromUrl("../backend/api/personagens.php").then((res) => {
	const classes = Object.keys(res[0]);
	res.forEach((obj) => {
		addElement(Object.values(obj), classes);
	});
});

document.addEventListener("DOMContentLoaded", (e) => {
	const rows = document.getElementById("tabela").getElementsByTagName("tr");

	for (let i = 0; i < rows.length; i++) {
		const row = rows[i].getElementsByTagName("td");
		if (getText(row[3]) == "Supes") row[0].style.color = "red";
		else row[0].style.color = "blue";
	}
});

window.onload = function () {
	if (!window.location.hash) {
		window.location = window.location + "#loaded";
		window.location.reload();
	}
};
