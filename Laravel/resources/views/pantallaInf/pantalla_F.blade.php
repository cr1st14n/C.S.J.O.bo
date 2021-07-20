<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
    </style>

</head>

<body>
    <div class="row">
        <div class="col-lg-10">

            <h1>CENTRO DE SALUD JESUS OBRERO - INFORMACION</h2>
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
                    </tr>
                </thead>
                <tbody id="bod">
                    <tr>
                        <td>Medicina Familiar</td>
                        <td>Dr. Montecinos</td>
                        <td>Lunes, Martes, Jueves y Viernes
                            <hr> Miercoles
                        </td>
                        <td>Hrs 9:30am - 13:30
                            <hr>Hrs 14:30 - 20:00
                        </td>
                    </tr>
                    <tr>
                        <td>Medicina Familiar</td>
                        <td>Dra. Mollinedo</td>
                        <td>Lunes a Sabado </td>
                        <td>Hrs 9:00 - 14:00</td>
                    </tr>
                    <tr>
                        <td>Ginecologia</td>
                        <td>Dra. Galvez</td>
                        <td>Lunes, Miercoles y Viernes </td>
                        <td>Hrs 9:00 - 14:00</td>
                    </tr>
                    <tr>
                        <td>Ginecologia</td>
                        <td>Dra. Pinaya</td>
                        <td>Martes y Jueves</td>
                        <td>9:00 - 13:00</td>
                    </tr>
                    <tr>
                        <td>Ginecologia</td>
                        <td>Dra. Romero</td>
                        <td>Martes a Viernes</td>
                        <td>14:00 - 18:00</td>
                    </tr>
                    <tr>
                        <td>Ginecologia</td>
                        <td>Dra. Gutierrez</td>
                        <td>Martes y Jueves Turno tarde </td>
                        <td>Hrs 15:00</td>
                    </tr>
                    <tr>
                        <td>Traumatologia</td>
                        <td>Dr. Quispe</td>
                        <td>Lunes, Martes, Miercoles, Viernes, Sabado </td>
                        <td>Hrs 8:00 - 12:00</td>
                    </tr>
                    <tr>
                        <td>Traumatologia</td>
                        <td>Dr. Guzman</td>
                        <td>Lunes, Miercoles, Viernes
                            <hr>jueves
                        </td>
                        <td>Hrs 15:00
                            <hr> Hrs 9:00
                        </td>
                    </tr>
                    <tr>
                        <td>Traumatologia</td>
                        <td>Dr. Huchani</td>
                        <td>Martes, Jueves </td>
                        <td>Hrs 15:00</td>
                    </tr>
                    <tr>
                        <td>Medicina General</td>
                        <td>Dr. Huallani</td>
                        <td>Lunes A Viernes </td>
                        <td>Hrs 14:00 - 20:00</td>
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
                    </tr>
                </thead>
                <tbody id="bod">
                    <tr>
                        <td>Medicina General</td>
                        <td>Dra. Villalobos</td>
                        <td>Miercoles,Sabado </td>
                        <td>Hrs 8:00 - 12:00</td>
                    </tr>
                    <tr>
                        <td>Gastroenterologia</td>
                        <td>Dr. Flores</td>
                        <td>Martes, Jueves </td>
                        <td>Hrs 9:00 - 12:00</td>
                    </tr>
                    <tr>
                        <td>Gastroenterologia</td>
                        <td>Dr. Morochi</td>
                        <td>Lunes Miercoles</td>
                        <td>Hrs 9:00 </td>
                    </tr>
                    <tr>
                        <td>Fisioterapia</td>
                        <td>Lic. Irma Rojas</td>
                        <td>Lunes a Viernes </td>
                        <td>Hrs 9:00 - 13:00</td>
                    </tr>
                    <tr>
                        <td>Tramatologia</td>
                        <td>Dr. Salazar</td>
                        <td>Miercoles </td>
                        <td>Hrs 10:30 - 12:00</td>
                    </tr>
                    <tr>
                        <td>Pedriatria</td>
                        <td>Dra. Cortez</td>
                        <td>Lunes a Viernes </td>
                        <td>Hrs 8:00 a 12:00</td>
                    </tr>
                    <tr>
                        <td>Pedriatria</td>
                        <td>Dra. Mamani</td>
                        <td>Martes a Viernes </td>
                        <td>Hrs 12:30 - 15:30</td>
                    </tr>
                    <tr>
                        <td>Cirugia</td>
                        <td>Dr. Lazo</td>
                        <td>Lunes a Viernes </td>
                        <td>Hrs 9:30</td>
                    </tr>
                    <tr>
                        <td>Cirugia</td>
                        <td>Dr. Santander</td>
                        <td>Lunes, Martes, Miercoles y Viernes</td>
                        <td>Hrs 12:00 17:00</td>
                    </tr>
                    <tr>
                        <td>Urologia</td>
                        <td>Dr. Henning</td>
                        <td>Jueves </td>
                        <td>Hrs 14:30 </td>
                    </tr>
                    <tr>
                        <td>Urologia</td>
                        <td>Dr. Candia</td>
                        <td> Lunes y Viernes </td>
                        <td>Hrs 9:00</td>
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
                        <td>Servcio de emergencias</td>
                        <td>24 horas</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mod_1">
        Launch demo modal
    </button>

    <!-- Modal -->

    <div class="modal fade" id="mod_1" tabindex="-1" role="dialog" aria-labelledby="a" aria-hidden="true" data-width="800">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">.col-md-4</div>
                            <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
                            <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                Level 1: .col-sm-9
                                <div class="row">
                                    <div class="col-8 col-sm-6">
                                        Level 2: .col-8 .col-sm-6
                                    </div>
                                    <div class="col-4 col-sm-6">
                                        Level 2: .col-4 .col-sm-6
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script language="JavaScript">
        setInterval("mueveReloj()", 1000)
        setTimeout("showModal()", 10000)

        function showModal() {
            $('#mod_1').modal('show');
            console.log('1');


            setTimeout(function() {
                $('#mod_1').modal('hide');
                setTimeout("showModal()", 10000)
            }, 5000)
        }

        function mueveReloj() {
            momentoActual = new Date()
            hora = momentoActual.getHours()
            minuto = momentoActual.getMinutes()
            segundo = momentoActual.getSeconds()
            horaImprimible = hora + " : " + minuto + " : " + segundo
            document.getElementById("horasis").innerText = horaImprimible
        }
    </script>
</body>


</html>