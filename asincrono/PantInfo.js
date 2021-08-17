// * VARIABLES DE INICIO
turno = [];
// *----

function listTableMedTurn(data) {
  console.log("loisto para consultar");
  $.ajax({
    type: "GET",
    url: "IndexPagPantInfo/listData1",
    // data: "data",
    // dataType: "dataType",
    success: function (response) {
      console.log(response);
      var html = response
        .map(function (e) {
          var html2 = e.pf_tur
            .map(function (a, b, c) {
              return (a = `
                ${a[0].dias} - ${a[0].hora} 
                <br>`);
            })
            .join(" ");
          return (a = `
        <tr>
            <td>${e.pf_esp}</td>
            <td valign="middle">${e.pf_med}</td>
            <td>${html2}</td>
            <td>${moment(e.ca_fecha).format("DD/MM/YYYY")}</td>
            <td>
                <span class="tooltip-area">
                    <button class="btn btn-default btn-sm" onClick='turnMedEdit_1(${
                      e.id
                    })' title="Edit"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></button>
                </span>
            </td>
        </tr>
        `);
        })
        .join(" ");
      $("#table_cont_tunMed").html(html);
    },
  });
}
function tableMedTurn(param) {}

$("#btn_addTurnMed").click(function (e) {
  turno = [];
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
    type: "POST",
    url: "IndexPagPantInfo/create1",
    data: data,
    //   dataType: "dataType",
    success: function (response) {
      if (response) {
        notif("1", "Horario registrado");
        $("#form_createTurnMed").trigger("reset");
        $("#md_createTurMed").modal("hide");
        listTableMedTurn();
      } else {
        notif("2", "Error!. ");
      }
    },
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

function turnMedEdit_1(id) {
  $.ajax({
    type: "GET",
    url: "IndexPagPantInfo/edit_1",
    data: { id: id },
    // dataType: "dataType",
    success: function (response) {
      showMdEditTurMed_1(response);
    },
  });
}

function showMdEditTurMed_1(response) {
  console.log(response.turnos);

  $('#md_editTurMed').modal('show');
}
