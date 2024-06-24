// Manejar el enlace de logout
document.getElementById('logoutLink').addEventListener('click', function(event) {
    event.preventDefault(); // Prevenir la acción predeterminada del enlace
    document.getElementById('logoutForm').submit(); // Enviar el formulario
});

// Manejador para el menú desplegable
let listElements = document.querySelectorAll('.list_button--click'); 

listElements.forEach(listElement => {
    listElement.addEventListener('click', () => {
        listElement.classList.toggle('arrow');
        
        let menu = listElement.nextElementSibling; // Seleccionar al siguiente elemento (ul)
        let height = menu.scrollHeight; // Obtener la altura total del contenido desplazable
        
        // Alternar entre mostrar y ocultar el menú
        menu.style.height = (menu.clientHeight === 0 ? `${height}px` : '0');
    });
});

// Manejador para la clase "active" en los enlaces del sidebar
const sidebarLinks = document.querySelectorAll('aside .sidebar a');

sidebarLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        if (this.classList.contains('no-active')) {
            event.preventDefault(); // Prevenir la acción predeterminada del enlace
            return; // Salir de la función si el enlace no puede ser activo
        }

        // Remover la clase "active" de todos los enlaces
        sidebarLinks.forEach(link => link.classList.remove('active'));
        // Añadir la clase "active" al enlace clicado
        this.classList.add('active');
    });
});

// Manejador para la clase "active-text" en los enlaces de las subopciones del menú izquierdo
const sidebarSubLinks = document.querySelectorAll('.list_show');

sidebarSubLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        if (this.classList.contains('no-active-text')) {
            event.preventDefault(); // Prevenir la acción predeterminada del enlace
            return; // Salir de la función si el enlace no puede ser activo
        }

        sidebarSubLinks.forEach(link => link.classList.remove('active-text'));
        this.classList.add('active-text');
    });
});

// Mantener la lista abierta si la ruta actual corresponde a los enlaces dentro de la lista
document.addEventListener('DOMContentLoaded', () => {
    const currentRoute = window.location.pathname;
    if (currentRoute.includes('postulantesRegistrar') || currentRoute.includes('postulantesVisualizar')) {
        const postulantesMenu = document.querySelector('.list_button--click');
        const postulantesUl = postulantesMenu.nextElementSibling;

        postulantesMenu.classList.add('arrow');
        postulantesUl.classList.add('active');
        postulantesUl.style.height = `${postulantesUl.scrollHeight}px`; // Ajustar la altura del ul
    }
});
