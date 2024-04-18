let menoresActs = [];
let content = document.getElementById('contenido');
let Colegios = [];

fetch('http://localhost:8080/RIE/Api_Colegios')
    .then(Response => Response.json())
    .then(Coleges => {
        for (let i = 0; i < Coleges.length; i++) {
            Colegios[i] = Coleges[i];
        }
    });

fetch('http://localhost:8080/RIE/Api_actividad_menor')
    .then(Response => Response.json())
    .then(data => {
        for (let index = 0; index < data.length; index++) {
            menoresActs[index] = data[index];
        }
        console.log(menoresActs);

        fetch('http://localhost:8080/RIE/Api_actividades')
            .then(Response => Response.json())
            .then(actividades => {
                console.log(actividades);
                for (let c = 0; c < menoresActs.length; c++) {
                    for (let p = 0; p < actividades.length; p++) {
                        console.log(menoresActs[c].id_actividad, actividades[p].id_actividad);
                        if (menoresActs[c].id_actividad == actividades[p].id_actividad) {
                            console.log("yes");
                            for(let x=0;x<Colegios.length;x++){
                                if(actividades[p].id_colegio == Colegios[x].id_colegio){
                                    console.log("yesyes");
                                    let RUTA = Colegios[x].foto.split("\\");
                                    let ruta = RUTA.pop();
                                    let ruta2 = RUTA.pop();
                                    let rutaDef = (ruta2 + "/" + ruta);
                                    console.log(rutaDef);
                                    content.innerHTML += "<div class='elemento1' id='elemento'><div><h2>" + actividades[p].nombre_actividad + "  " + menoresActs[c].nombre + "</h2><p>En el " + Colegios[x].nombreColegio + " de " + actividades[p].dias + " de " + actividades[p].horario + "</p><img src='" + rutaDef + "'></div></div>";
                                }
                            }
                        }

                    }
                }
            });
    });