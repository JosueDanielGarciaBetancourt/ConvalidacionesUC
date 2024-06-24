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

function selectOption(value, institucion, carreraProcedenciaPostulante) {
    var input = document.getElementById('postulanteInput');
    var institucionLabel = document.getElementById('institucionLabel');
	var carreraLabel = document.getElementById('carreraProcedenciaLabel');
    input.value = value;
    institucionLabel.textContent = institucion;
	carreraLabel.textContent = carreraProcedenciaPostulante;
    document.getElementById('postulanteOptions').style.display = 'none';
}

function filterOptions() {
    var input, filter, ul, li, i, txtValue;
    input = document.getElementById('postulanteInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("postulanteOptions");
    li = ul.getElementsByTagName('li');

    for (i = 0; i < li.length; i++) {
        txtValue = li[i].textContent || li[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

document.addEventListener('click', function(event) {
    var isClickInside = document.getElementById('postulanteSelect').contains(event.target);
    if (!isClickInside) {
        document.getElementById('postulanteOptions').style.display = "none";
    }
});
