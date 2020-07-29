//variable que contendra el requets para la peticion ajax
var httpRequets;

/* funcion que nos ayuda a procesar la peticion ajax, para funcionar necesitamos
tipo: peticion a precesar get, post
url: direccion donde se ira la peticion ajax
funcionReady: es la funcion que realizara el JS una vez tenida la respuesta del js, esta funcion se recibe
    desde donde fue invocada
idFormulario: si existe el campo tomara los datos del formulario para enviarlo
* */
function peticion(tipo,url,funcionReady,idFormulario = false){
    //creamos el objetos httprequets dependiendo del tipo de navegador
    if(window.XMLHttpRequest){//Para peticiones mozilla, safari
        httpRequets = new XMLHttpRequest();
    }else if(window.ActiveXObject){ //Para IE
        try {
            httpRequets = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                httpRequets = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
        }
    }

    //mandamos una alerta en caso de que no se puedan procesar peticiones ajax
    if(!httpRequets){
        alert('No se puede procesar las peticiones ajax ');
        return false;
    }

    //apartado de cuando este procesada la peticion ajax,
    httpRequets.onreadystatechange = funcionReady;
    var params = '';//se inicializa la cadena ddonde estaran las variables que se enviaran a la peticion ajax
    if(idFormulario){
        //se parsean los parametros del formulario que existen en el documento HTML, se obtiene
        //por medio de su ID y se concatenan a la variable params
        formulario = document.getElementById(idFormulario);
        var formData = new FormData(formulario);
        var urlParams = new URLSearchParams(formData);
        params += urlParams.toString();
    }
    //es el switch para el tipo de peticion: get, post, ...
    switch (tipo) {
        case 'GET': case 'get':
            httpRequets.open(tipo, url,true);
            httpRequets.send();
            break;
        case 'POST': case 'post':
            httpRequets.open(tipo, url,true);
            httpRequets.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            httpRequets.send(params);
            break;
    }
}