document.getElementById('idPostulante').addEventListener('input', function (event) {
	// Permite solo dígitos
	this.value = this.value.replace(/\D/g, '');

	// Limita a 8 dígitos
	if (this.value.length > 8) {
		this.value = this.value.slice(0, 8);
	}
});

document.getElementById('register_form').addEventListener('submit', function(event) {
	var idPostulante = document.getElementById('idPostulante').value;
	if (idPostulante.length !== 8 || isNaN(idPostulante)) {
		alert('El DNI debe contener exactamente 8 dígitos numéricos.');
		event.preventDefault(); // Evita que el formulario se envíe
	}
});