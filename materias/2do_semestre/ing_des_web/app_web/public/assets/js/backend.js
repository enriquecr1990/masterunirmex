//logica para determinar la configuracion del servidor del backend
var hostname = location.hostname;
switch (hostname) {
    case '192.168.1.110':
        var Backend = {
            url : 'http://192.168.1.110:8080/',
        }
        break;
    default:
        var Backend = {
            url : 'http://localhost:8080/',
        }
        break;
}
