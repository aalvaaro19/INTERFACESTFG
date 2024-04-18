let grid = document.getElementById("grid");
let Colegios = [];
let menores = [];
let select = document.getElementById("select");
let select2 = document.getElementById("select2");
let menorActive;
let actividadMenor= Object.create(null);
const form = document.querySelector('form');
const submitButton = document.querySelector('input[type="submit"]');
let checkbox;
let id_user;
let envioObjects=[];


fetch('http://localhost:8080/RIE/Sv_sesion')
    .then(Response => Response.json())
    .then(datos => {
        console.log(datos);
		id_user=datos.id_usurio;
		console.log(id_user);
    });



fetch('http://localhost:8080/RIE/Sv_apimenores')
    .then(Response => Response.json())
    .then(datos => {

        for (let i = 0; i < datos.length; i++) {
            menores[i] = datos[i];
            select2.innerHTML += "<option value='" + menores[i].nombreCompleto + "'>" + menores[i].nombreCompleto + "</option>";
        }

    });



fetch('http://localhost:8080/RIE/Api_Colegios')
    .then(Response => Response.json())
    .then(Coleges => {


        for (let i = 0; i < Coleges.length; i++) {
            Colegios[i] = Coleges[i];
        }
    });


select2.addEventListener('change', function () {
    if (select2.value != 0) {

        fetch('http://localhost:8080/RIE/Sv_apimenores')
            .then(Response => Response.json())
            .then(datos => {

                for (let i = 0; i < datos.length; i++) {
                    if (select2.value == datos[i].nombreCompleto) {
                        menorActive = datos[i];
                    }
                }

            });
    } else {
        location.reload();
    }
});



select.addEventListener('change', function () {
    grid.innerHTML = "";
    if (select.value != 0) {
        let colegio = select.value;
        fetch('http://localhost:8080/RIE/Api_actividades')
            .then(Response => Response.json())
            .then(actividades => {
                //nombre_actividad,id_colegio,horario,dias,edad,tipo_actividad
                console.log(menorActive);
                for (let j = 0; j < Colegios.length; j++) {

                }
                for (let index = 0; index < actividades.length; index++) {
                    let aux = [];
                    aux = actividades[index].edades.split(",");
                    console.log(actividades);
                    for (let x = 0; x < aux.length; x++) {
                        if (aux[x] == menorActive.curso) {
                            let fotoColegio;
                            for (let j = 0; j < Colegios.length; j++) {
                                if (colegio == Colegios[j].nombreColegio && actividades[index].id_colegio == Colegios[j].id_colegio) {
                                    fotoColegio = Colegios[j].foto;
                                    let RUTA = fotoColegio.split("\\");
                                    let ruta = RUTA.pop();
                                    let ruta2 = RUTA.pop();
                                    let rutaDef = (ruta2 + "/" + ruta);
                                    grid.innerHTML += "<div class='elemento1' id='elemento" + index + "'><div><h2>" + actividades[index].nombre_actividad+"</h2><p>En el " 
                                    + Colegios[j].nombreColegio + " de " + actividades[index].dias + " de " + actividades[index].horario + "</p><img src='" + rutaDef 
                                    + "'></div><label class='switch'><input type='checkbox' name='boton" + index + "' id='boton" + index 
                                    + "'><span class='slider'></span></label></div>";
                                    checkbox = form.querySelectorAll('input[type="checkbox"]');
                                    console.log(checkbox);
                                    checkbox.forEach(element => {
                                        element.addEventListener('change', function () {
                                            if (element.checked) {
                                                let container=element.parentNode.parentNode;
                                                console.log(container.innerHTML);
                                                let actividad = container.querySelector('h2').innerHTML;
                                                const actMenor = Object.create(null);
                                                console.log(colegio);
                                                console.log(menorActive.id_usuario);
                                                actMenor.nombre=menorActive.nombreCompleto;
                                                actMenor.id_user=menorActive.id_usuario;
                                                let idCole;
                                                let idActividad;
                                                for(let h=0; h<Colegios.length;h++){
													if(Colegios[h].nombreColegio==colegio){
														idCole=Colegios[h].id_colegio;
                                                        console.log(idCole);
													}
												}
												
                                                for(let c=0; c<actividades.length;c++){
                                                    if(actividades[c].id_colegio==idCole && actividad==actividades[c].nombre_actividad){
                                                        idActividad=actividades[c].id_actividad;
                                                        actMenor.id_actividad=idActividad;
                                                        console.log(idActividad);
                                                    }
                                                }
                                                
                                              
                                                
                                                console.log(actMenor);
                                                envioObjects.push(actMenor);
                                            } else {
                                                console.log("asdasd");
                                            }
                                        });

                                    });



                                }
                            }
                        }

                    }
                }
                document.getElementById("env").style.display = "block";
            });
    } else {
        location.reload();
    }
});


document.getElementById("env").addEventListener('click',function(){
    const formulario=document.querySelector("#mi_form");
    formulario.addEventListener('submit', function() {
        console.log(JSON.stringify(envioObjects));
        const json = JSON.stringify(envioObjects);
        const encoded = encodeURIComponent(json);
        formulario.action="Sv_apuntarse?Valor="+encoded;
        
    });
});












