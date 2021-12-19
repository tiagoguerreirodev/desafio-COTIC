function validate() {
	if (document.form.name.value == "") {
		alert("Por favor insira um nome!");
		document.form.name.focus();
		return false;
	}

	if (document.form.age.value == "") {
		alert("Por favor insira uma idade!");
		document.form.age.focus();
		return false;
	}

	if (document.form.actor.value == "") {
		alert("Por favor insira um(a) ator/atriz!");
		document.form.actor.focus();
		return false;
	}

	if (document.form.biography.value == "") {
		alert("Por favor insira uma biografia!");
		document.form.biography.focus();
		return false;
	}
}
