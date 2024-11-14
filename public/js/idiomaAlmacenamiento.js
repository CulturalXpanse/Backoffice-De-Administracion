window.addEventListener('DOMContentLoaded', (event) => {
    const idiomaGuardado = localStorage.getItem('idioma');
    if (idiomaGuardado) {
        let pagina;
        if (window.location.pathname.includes("login")) {
            pagina = "login";
        } else if (window.location.pathname.includes("centroDeAyuda")) {
            pagina = "centroDeAyuda";
        } else if (window.location.pathname.includes("inicio")) {
            pagina = "inicio";
        } else {
            console.warn("No se pudo detectar la página actual.");
            return;
        }
        document.documentElement.lang = idiomaGuardado;
        cambiarIdioma(idiomaGuardado, pagina);
    }
});