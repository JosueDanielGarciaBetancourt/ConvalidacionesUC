// Función para cerrar la lista desplegable si se hace clic fuera de ella
document.addEventListener('click', function(event) {
	var postulanteOptions = document.getElementById('postulanteOptions');
	var postulanteSelect = document.getElementById('postulanteSelect');
	var isClickInsideOptions = postulanteOptions.contains(event.target);
	var isClickInsideSelect = postulanteSelect.contains(event.target);
  
	if (!isClickInsideOptions && !isClickInsideSelect) {
	  postulanteOptions.style.display = 'none';
	}
  });
  
  function toggleOptions(id) {
	var options = document.getElementById(id);
	options.style.display = (options.style.display === 'block') ? 'none' : 'block';
  }
  
  function selectOption(value) {
	var input = document.getElementById('postulanteSelect').getElementsByTagName('input')[0];
	input.value = value;
	toggleOptions('postulanteOptions');
  }