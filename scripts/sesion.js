fetch('http://localhost:8080/RIE/Sv_sesion')
.then(Response=>Response.json())
.then(datos=>{
    console.log(datos);
    document.getElementById('welcome').innerHTML+="  "+datos.nombre_user;
});

fetch('http://localhost:8080/RIE/Sv_apimenores')
.then(Response=>Response.json())
.then(datos=>{
    console.log(datos);
});


