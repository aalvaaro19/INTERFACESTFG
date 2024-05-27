
    document.getElementById("listaActividades").addEventListener('click', function() {   
        document.getElementById('listarActividades').style.display = "block";
        document.getElementById('editaPerfil').style.display = "none";
    });

    document.getElementById("editarPerfil").addEventListener('click', function() {
        document.getElementById('editaPerfil').style.display = "block";
        document.getElementById('listarActividades').style.display = "none";
    });
    
    
    
