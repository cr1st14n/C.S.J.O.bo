<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style>
        body {
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 20px;
            background-color: black;
            color: white;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
        }


        thead {
            font-size: 25px;
            background-color: #838282;
        }

        tbody {
            font-size: larger;
        }

        #bod td:nth-child(1) {
            color: #E0BB82;
        }

        #bod td:nth-child(2) {
            color: yellow;
        }

        #bod td:nth-child(3) {
            color: #A5F998;
        }

        #bod td:nth-child(4) {
            font-size: 18px;
        }

        #bod tr:nth-child(even) {
            background-color: #212121;
        }

        #bod tr:nth-child(odd) {
            background-color: #0F0F0F;
        }

        h1 {
            color: yellow;
            text-align: center;
            /* text-shadow:
                3px 3px 1px red,
                5px 5px 2px yellow,
                8px 8px 3px blue;
            ; */
        }

        #horasis {
            color: yellow;
        }

        #mod_1 {
            opacity: 70.5;
        }

        #mod_1_1 {
            color: black;
        }
        .modalA {
            color: black;
        }

        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 100%;
        }

        #title1 {
            color: black;
        }
    </style>

</head>

<body>
    <div class="row">
        <div class="col-lg-10">

            <h1>CENTRO DE SALUD JESUS OBRERO - INFORMACION</h1>
        </div>
        <div class="col-lg-2">

            <h3 id="horasis"></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <table with=95% class="table table-sm" style="color: white;">
                <thead>
                    <tr>
                        <th>Especialidad</th>
                        <th>Medico</th>
                        <th>Dias</th>
                        <th>Horario</th>
                        <th>Consulta</th>
                    </tr>
                </thead>
                <tbody id="bod">
                    <tr>
                        <td>Medicina Familiar</td>
                        <td>Dr. Montecinos</td>
                        <td>L, Ma, J, V
                            <hr> Mi.
                        </td>
                        <td>Hrs 10:30am - 13:30
                            <hr>Hrs 14:30 - 20:00
                        </td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Medicina Familiar</td>
                        <td>Dr. Marquez</td>
                        <td>L. a V. </td>
                        <td>Hrs 9:00 - 13:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Ginecologia</td>
                        <td>Dra. Galvez</td>
                        <td>L, Ma, Mi, V, S </td>
                        <td>Hrs 8:30 - 14:30</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Ginecologia</td>
                        <td>Dra. Cori</td>
                        <td>Ma. a V.</td>
                        <td>10:00 - 12:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Ginecologia</td>
                        <td>Dra. Mamani</td>
                        <td>L. a V. </td>
                        <td>14:00 a 18:00</td>
                        <td>70 Bs.-</td>
                    </tr>

                    <tr>
                        <td>Traumatologia</td>
                        <td>Dr. Quispe</td>
                        <td>L, Ma, Mi, V, S, </td>
                        <td>Hrs 8:00 - 12:00</td>
                        <td>70 BS.-</td>
                    </tr>
                    <tr>
                        <td>Traumatologia</td>
                        <td>Dr. Guzman</td>
                        <td>L, Mi, V.
                            <hr>J.
                        </td>
                        <td>Hrs 15:00
                            <hr> Hrs 9:00
                        </td>
                        <td>70 BS.-</td>
                    </tr>
                    <tr>
                        <td>Traumatologia</td>
                        <td>Dr. Huchani</td>
                        <td>Ma, J. </td>
                        <td>Hrs 15:00</td>
                        <td>70 BS.-</td>
                    </tr>

                    <tr>
                        <td>Medicina Interna</td>
                        <td>Dr. Mamani</td>
                        <td>V.</td>
                        <td>Hrs 15:00</td>
                        <td>140 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Odontologia</td>
                        <td>Dra. Adriana Tapia</td>
                        <td>L. a V. </td>
                        <td>9:00 - 13:00</td>
                        <td>10 Bs.-</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-5">
            <table with=100% class="table table-sm" style="color: white;">
                <thead>
                    <tr>
                        <th>Especialidad</th>
                        <th>Medico</th>
                        <th>Dias</th>
                        <th>Horario</th>
                        <th>Consulta</th>
                    </tr>
                </thead>
                <tbody id="bod">
                    <tr>
                        <td>Medicina General</td>
                        <td>Dr. Huallani</td>
                        <td>L. A V. </td>
                        <td>Hrs 14:00 - 20:00</td>
                        <td>60 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Medicina General</td>
                        <td>Dra. Villalobos</td>
                        <td>M, S. </td>
                        <td>Hrs 8:00 - 13:00</td>
                        <td>60 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Gastroenterologia</td>
                        <td>Dr. Flores</td>
                        <td>Ma, J. </td>
                        <td>Hrs 14:00 - 16:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Gastroenterologia</td>
                        <td>Dr. Ayoroa</td>
                        <td>L. a Mi.</td>
                        <td> 12:30 </td>
                        <td>70 Bs.-</td>
                    </tr>

                    <tr>
                        <td>Fisioterapia</td>
                        <td>Lic. Irma Rojas</td>
                        <td>L. a V. </td>
                        <td>Hrs 9:00 - 13:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Dermatologia</td>
                        <td>Dr. Salazar</td>
                        <td>M. y V. </td>
                        <td>Previa Cordinación</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Otorrino</td>
                        <td>Dra. Fuentelsaz</td>
                        <td>J.</td>
                        <td>9:30</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Cardiologia</td>
                        <td>Dr. Cadena</td>
                        <td>J.</td>
                        <td>Hrs 16:00</td>
                        <td>120 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Pediatria</td>
                        <td>Dra. Cortez</td>
                        <td>L. a V. </td>
                        <td>Hrs 8:00 a 12:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Cirugia</td>
                        <td>Dr. Lazo</td>
                        <td>L. a V. </td>
                        <td>Hrs 9:30</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Cirugia</td>
                        <td>Dr. Santander</td>
                        <td>L, M, Mi. y V.</td>
                        <td>Hrs 12:00 17:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Urologia</td>
                        <td>Dr. Henning</td>
                        <td>J. </td>
                        <td>Previa cordinación </td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Urologia</td>
                        <td>Dr. Candia</td>
                        <td>L. y V. </td>
                        <td>Hrs 10:00</td>
                        <td>70 Bs.-</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-2">
            <table with=100% class="table table-sm" style="color: white;">

                <tbody id="bod">
                    <tr>
                        <td>Consulta de especialidades</td>
                        <td>70 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Prueba rapida COVID-19</td>
                        <td>250 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Prueba ELISA COVID-19</td>
                        <td>500 Bs.-</td>
                    </tr>
                    <tr>
                        <td>Servicio de emergencias</td>
                        <td>24 horas</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example">Small modal</button> -->

    <div class="modal fade modalA" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/img/pantalla/img_2.jpg') }}" alt="" width="300">

                </div>
            </div>
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script language="JavaScript">
        // * variables de modal 
        min1 = 0;
        min2 = 0;

        // * variables de imagenes
        dat_cont=0; 
        dat_A= [
            { ruta:"111111" },
            { ruta:"22222" },
            { ruta:"333333" },
        ]



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
                console.log(dat_A[dat_cont]);
                dat_cont=dat_cont+1;
                $('.modalA').modal('show');
                setTimeout(function() {
                    $('.modalA').modal('hide');
                }, 8000)
            }
            min2 = min1;
        }
    </script>
</body>

</html>