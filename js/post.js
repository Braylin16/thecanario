/* Agregamos un manipulador para el evento DOMContentLoaded */
window.addEventListener('DOMContentLoaded', (ev) => {
    /* Ya existe "title", no tenemos que buscarlo */
    title.addEventListener('keypress', evento);
    
    function evento(e) {
        /* También existe "titlePost" sin necesidad de buscarlo */
        titlePost.innerText = title.value;
    }
});