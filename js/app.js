const formularioacta = document.querySelector("#formacta");
const formulñariousuario = document.querySelector('#formusuario');
const formularioeditaracta = document.querySelector('#formactaedit');
const formulariologin = document.querySelector('#formlogin');
eventListener();

function eventListener() {

    if (formularioacta) {
        formularioacta.addEventListener('submit', crearacta);
    }
    if (formulñariousuario) {
        formulñariousuario.addEventListener('submit', crearusuario);
    }
    if (formularioeditaracta) {
        formularioeditaracta.addEventListener('submit', editaracta);
    }
    if (formulariologin) {
        formulariologin.addEventListener('submit', login);
    }


}


function crearacta(e) {
    e.preventDefault();
    var colegiado = document.querySelector('#colegiado').value;
    var codigo = document.querySelector('#codigo').value;
    var fecha = document.querySelector('#fecha').value;
    var estado = document.querySelector('#estado').value;
    var contenido = document.querySelector('#contenido').value;
    var tipo = document.querySelector('#tipoacta').value;

    if (colegiado === "0" || codigo === "" || fecha === "" || estado === "0" || contenido === "") {
        alert('Completar todos los campos');
    } else {
        var datos = new FormData();
        datos.append('colegiado', colegiado);
        datos.append('codigo', codigo);
        datos.append('fecha', fecha);
        datos.append('estado', estado);
        datos.append('contenido', contenido);
        datos.append('tipo', tipo);
        var xhr = new XMLHttpRequest();

        xhr.open('POST', 'inc/modelos/mod-reg-acta.php', true);

        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                if (respuesta.respuesta === 'correcto') {
                    alert('Se registro una nueva acta');
                    location.href = "mostraracta.php";
                }
            }
        }
        xhr.send(datos);
    }

}

function crearusuario(e) {
    e.preventDefault();

    var nombre = document.querySelector('#nombre').value;
    var apellido = document.querySelector('#apellido').value;
    var usuario = document.querySelector('#usuario').value;
    var password = document.querySelector('#password').value;
    var tipo = document.querySelector('#tipousua').value;
    if (nombre === "" || apellido === "" || usuario === "" || password === "") {
        alert('Completar todos los datos');
    } else {
        var datos = new FormData();
        datos.append('nombre', nombre);
        datos.append('apellido', apellido);
        datos.append('usuario', usuario);
        datos.append('password', password);
        datos.append('tipo', tipo);

        var xhr = new XMLHttpRequest();

        xhr.open('POST', 'inc/modelos/mod-reg-usua.php', true);

        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                if (respuesta.respuesta === "correcto") {
                    alert('Usuario Registrado');
                    document.querySelector('#nombre').value = "";
                    document.querySelector('#apellido').value = "";
                    document.querySelector('#usuario').value = "";
                    document.querySelector('#password').value = "";
                }
            }
        }
        xhr.send(datos);
    }
}

function editaracta(e) {
    e.preventDefault();
    var colegiado = document.querySelector('#colegiadoedit').value;
    var codigo = document.querySelector('#codigoedit').value;
    var fecha = document.querySelector('#fechaedit').value;
    var estado = document.querySelector('#estadoedit').value;
    var contenido = document.querySelector('#contenidoedit').value;
    var id = document.querySelector('#id').value;
    var tipo = document.querySelector('#tipoeditac').value;

    if (colegiado === "0" || codigo === "" || fecha === "" || estado === "0" || contenido === "") {
        alert('Completar todos los campos');
    } else {
        var datos = new FormData();
        datos.append('colegiado', colegiado);
        datos.append('codigo', codigo);
        datos.append('fecha', fecha);
        datos.append('estado', estado);
        datos.append('contenido', contenido);
        datos.append('id', id);
        datos.append('tipo', tipo);
        var xhr = new XMLHttpRequest();

        xhr.open('POST', 'inc/modelos/mod-edit-acta.php', true);

        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                if (respuesta.respuesta === 'correcto') {
                    alert('Se registraron los cambios');
                    location.href = "mostraracta.php";
                } else {
                    alert('No se registraron cambios');
                    location.href = "mostraracta.php";
                }
            }
        }
        xhr.send(datos);
    }

}

function login(e) {
    e.preventDefault();
    var usuario = document.querySelector('#usua').value;
    var password = document.querySelector('#pass').value;
    var tipo = document.querySelector('#tipolog').value;
    if (usuario === "" || password === "") {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Completar todos los datos!'
        });
    } else {
        var datos = new FormData();
        datos.append('usuario', usuario);
        datos.append('password', password);
        datos.append('tipo', tipo);

        var xhr = new XMLHttpRequest();

        xhr.open('POST', 'inc/modelos/mod-login.php', true);

        xhr.onload = function() {
            if (this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                if (respuesta.respuesta === "correcto" && respuesta.usuario === "administrador" && respuesta.password === "admin123") {
                    Swal.fire(
                        'Bienvenido!',
                        'Presiona ok para iniciar!',
                        'success'
                    ).then(result => {
                        if (result.value) {
                            window.location.href = "mostraracta.php";
                        }
                    });


                } else if (respuesta.respuesta === "correcto" && respuesta.usuario != "administrador" && respuesta.password != "admin123") {
                    Swal.fire(
                        'Bienvenido!',
                        'Presiona ok para iniciar!',
                        'success'
                    ).then(result => {
                        if (result.value) {
                            window.location.href = "mostrarasistencia.php";
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Usuario o password incorreto!'
                    });
                }
            }
        }
        xhr.send(datos);
    }
}