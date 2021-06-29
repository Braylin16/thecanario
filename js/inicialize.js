// Iniciallizar los elementos de materialize

// Inicializar modal
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, {
        dismissible: false
    });

    //  Inicializar el Dropdown
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);

    // Sidenav, menu responsive
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);

    // Parallax para las categorias
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems);

    // Agrandar imagen con un click
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems);

    // Selectores
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);

    // Title bonito
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems);

    // Modal
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, {
        dismissible: true
    });

  });