// * variables de modal 
min1 = 0;
min2 = 0;

// * variables de imagenes
dat_cont = 0;
dat_A = [{
        ruta: "assets/img/pantalla/img_2.jpg"
    },
    {
        ruta: "assets/img/pantalla/img_1.png"
    },
    {
        ruta: "assets/img/pantalla/img_3.png"
    },
];

dat_TM = [

];



setInterval("mueveReloj()", 1000);

function mueveReloj() {
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()
    if (minuto < 10) {
        minuto = "0" + minuto;
    }
    if (segundo < 10) {
        segundo = "0" + segundo;
    }
    horaImprimible = hora + " : " + minuto + ":" + segundo;
    document.getElementById("horasis").innerText = horaImprimible

    cont = minuto % 10;
    if (cont == 0 || minuto < 0) {
        min1 = minuto;
        showModal();
    }
}

function showModal() {
    if (min1 != min2) {
        document.getElementById('img_pub').src = dat_A[dat_cont].ruta;
        console.log(dat_cont);
        if (dat_A.length == dat_cont + 1) {

            dat_cont = 0;
            console.log(dat_cont);
        } else {
            dat_cont = dat_cont + 1;
        }
        $('.modalA').modal('show');
        setTimeout(function() {
            $('.modalA').modal('hide');
        }, 12000)
    }
    min2 = min1;
}



// * ---------funciones para actualizar los turnos
function act_tablaCOntenido_1() {
    $.ajax({
        type: "GET",
        url: "Recepcion/IndexPagPantInfo/pantallaListMed",
        // data: "data",
        // dataType: "dataType",
        success: function (res) {
            console.log(res);
        }
    });
}