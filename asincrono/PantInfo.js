// * VARIABLES DE INICIO
turno = [];
// *----

function listTableMedTurn(data) {
  console.log("loisto para consultar");
  $.ajax({
    type: "GET",
    url: "IndexPagPantInfo/listData1",
    data: "data",
    dataType: "dataType",
    success: function (response) {},
  });
}
function tableMedTurn(param) {}

$("#btn_addTurnMed").click(function (e) {
  showList_modTableTurnMed1();
  $("#tableModalListTurnHoras").html("");
  $("#md_createTurMed").modal("show");
});

// * VALIDAR Y REGISTRAR
$("#form_createTurnMed").submit(function (e) {
  e.preventDefault();
  console.log("se creara");
  data = {
    _token: $("meta[name=csrf-token]").attr("content"),

    esp: $("#inp_turMed_esp").val(),
    med: $("#inp_turMed_med").val(),
    cot: $("#inp_turMed_cos").val(),
    tur: turno,
  };
  $.ajax({
      type: "any",
      url: "IndexPagPantInfo/create1",
      data: data,
    //   dataType: "dataType",
      success: function (response) {
          console.log(response);
      }
  });
});

// * seccion add turno y dia dentro detalle view modal
function showList_modTableTurnMed1() {
  //   console.log(turno);
  for (let i = 0; i < turno.length; i++) {
    const element = turno[i];
    console.log(element);
    console.log(element[0].dias);
    var htmlt1 = `
        <tr>
            <td valign="middle">${element[0].dias}</td>
            <td valign="middle">${element[0].hora}</td>
            <td>
                <span class="tooltip-area">
                    <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
                </span>
            </td>
        </tr>`;
  }
  $("#tableModalListTurnHoras").append(htmlt1);
}

$("#btn_add_diasTurnoMed").click(function (e) {
  e.preventDefault();
  d = $("#inp_diHo_dias").val();
  h = $("#inp_diHo_horas").val();
  a = [{ dias: d, hora: h }];
  turno.push(a);
  console.log(turno);
  showList_modTableTurnMed1();
});
