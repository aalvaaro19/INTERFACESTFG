window.onload = function() {
    document.getElementById('listaDeActividades').style.display = 'none';
    document.getElementById('editarPerfil').style.display = 'none';
    
    document.getElementById('listaActividades').addEventListener('click', function() {
        // Mostrar el div de lista de actividades
        document.getElementById('listaDeActividades').style.display = 'block';
        // Ocultar el div de editar perfil
        document.getElementById('editarPerfil').style.display = 'none';
    });

    document.getElementById('editarPerfil').addEventListener('click', function() {
        // Mostrar el div de editar perfil
        document.getElementById('editarPerfil').style.display = 'block';
        // Ocultar el div de lista de actividades
        document.getElementById('listaDeActividades').style.display = 'none';
    });
}
    
    
    
