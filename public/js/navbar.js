  // Función para agregar el botón de menú desplegable solo cuando sea necesario
  function toggleMenuButton() {
    var navbar = document.getElementById("myNavbar");
    var menuButton = document.querySelector(".navbar .icon");

    if (window.innerWidth <= 600 && !menuButton) {
        menuButton = document.createElement("a");
        menuButton.href = "javascript:void(0);";
        menuButton.className = "icon";
        menuButton.innerHTML = "&#9776;";
        menuButton.onclick = function() {
            if (navbar.className === "navbar") {
                navbar.className += " responsive";
            } else {
                navbar.className = "navbar";
            }
        };
        navbar.appendChild(menuButton);
    } else if (window.innerWidth > 600 && menuButton) {
        navbar.removeChild(menuButton);
    }
}

// Llama a la función inicialmente
toggleMenuButton();

// Llama a la función cuando cambia el tamaño de la ventana
window.onresize = toggleMenuButton;