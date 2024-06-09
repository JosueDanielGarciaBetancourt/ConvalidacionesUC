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
        height = menu.scrollHeight; // Obtener la altura total del contenido desplazable
        
        // Alternar entre mostrar y ocultar el menú
        menu.style.height = (menu.clientHeight === 0 ? `${height}px` : '0');
        /*menu.style.height = `${120}px`; // altgr + } = `` */
    });
});

// Manejador para agregar la clase "active" al enlace clicado y removerla de los demás
const sidebarLinks = document.querySelectorAll('aside .sidebar a');

sidebarLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        // Comprobar si el enlace tiene la clase "no-active"
        if(this.classList.contains('no-active')) {
            event.preventDefault(); // Prevenir la acción predeterminada del enlace
            return; // Salir de la función si el enlace no puede ser activo
        }

        // Encontrar el contenedor ul padre del enlace clicado
        let siblingUl = this.nextElementSibling;
        console.log(siblingUl);

        // Remover la clase "active-text" de todos los enlaces dentro de .list_inside que no sean vecinos del enlace clicado
        insideLinks.forEach(otherLink => {
            let otherSiblingUl = otherLink.closest('ul');
            if (otherSiblingUl !== siblingUl) {
                otherLink.classList.remove('active-text');
            }
        });

        // Remover la clase "active" de todos los enlaces
        sidebarLinks.forEach(link => link.classList.remove('active'));
        // Añadir la clase "active" al enlace clicado
        this.classList.add('active');
    });
});

// Manejador para los enlaces dentro de .list_inside
const insideLinks = document.querySelectorAll('.list_inside a');

insideLinks.forEach(link => {
    link.addEventListener('click', function(event) {
        // Comprobar si el enlace tiene la clase "no-active"
        if(this.classList.contains('no-active-text')) {
            event.preventDefault(); // Prevenir la acción predeterminada del enlace
            return; // Salir de la función si el enlace no puede ser activo
        }

        // Remover la clase "active-text" de todos los enlaces dentro de .list_inside
        insideLinks.forEach(link => link.classList.remove('active-text'));
        // Añadir la clase "active-text" al enlace clicado
        this.classList.add('active-text');
    });
});
