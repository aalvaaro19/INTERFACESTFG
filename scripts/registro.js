
let pass1=document.getElementById("nombreuser");
let pass2=document.getElementById("nombreuser");
let enviar=document.getElementById('enviar');
pass2.addEventListener('change', function(){
    if(pass1.value==pass2.value){
        enviar.removeAttribute('disabled');
    }
});
