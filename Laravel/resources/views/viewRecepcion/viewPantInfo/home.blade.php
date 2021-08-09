<div class="row">

    <div class="col-lg-12">

        <section class="panel">
            <header class="panel-heading">
                <h2><strong>Configuración</strong> Pantalla de información </h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" id="btn_addTurnMed" class="btn btn-theme-inverse btn-transparent"><i class="fa fa-plus"></i> Agregar</button>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div>
                                <section class="form-group-vertical">
                                    <div class="input-icon"> <i class="fa fa-search  ico"></i>
                                        <input class="form-control " type="text" placeholder="Buscar..." style="width:200px;">
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th width="30%">Action</th>
                                </tr>
                            </thead>
                            <tbody align="center">
                                <tr>
                                    <td>1</td>
                                    <td valign="middle">Sander</td>
                                    <td>example@demo.com</td>
                                    <td><span class="label label-success">Purchased</span></td>
                                    <td>
                                        <span class="tooltip-area">
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Martie</td>
                                    <td>example@demo.com</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td>
                                        <span class="tooltip-area">
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Lucien</td>
                                    <td>example@demo.com</td>
                                    <td><span class="label label-success ">Purchased</span></td>
                                    <td>
                                        <span class="tooltip-area">
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Fulvio</td>
                                    <td>example@demo.com</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td>
                                        <span class="tooltip-area">
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Shavonne</td>
                                    <td>example@demo.com</td>
                                    <td><span class="label label-danger">Suspended</span></td>
                                    <td>
                                        <span class="tooltip-area">
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </section>
    </div>
</div>

<!-- SECCION DE MODAL -->
<div id="md_createTurMed" class="modal fade">

    <div class="modal-body">
        <section class="panel">
            <header class="">
                <h3><strong>Crear</strong> Horario </h3>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" data-alignlabel="center" data-col="sm" id="form_createTurnMed">
                    <div class="form-group">
                        <label class="control-label">Especialidad</i></label>
                        <div>
                            <input type="text" id="inp_turMed_esp" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Medico</label>
                        <input type="text" id="inp_turMed_med" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Costo del servicio </label>
                        <input type="text" id="inp_turMed_cos" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div>
                            <label> Dias y Hora de atención</label>
                            <input type="text" id="inp_diHo_dias" class="form-control" placeholder="Dias..." autocomplete="off">
                            <input type="text" id="inp_diHo_horas" class="form-control" placeholder="Hora..." autocomplete="off"> 
                            <button type="button" id="btn_add_diasTurnoMed" class="btn btn-block btn-theme-inverse"><strong>+</strong></button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Dias</th>
                                    <th>Hora</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody align="center" id="tableModalListTurnHoras">
                                <tr>
                                    <td valign="middle">Sander</td>
                                    <td valign="middle">Sander</td>
                                    <td>
                                        <span class="tooltip-area">
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group offset">
                        <div>
                            <button type="submit"  class="btn btn-theme">Finalizar y guardar</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <!-- //modal-body-->
</div>
<script type="text/javascript" src="{{ asset('/asincrono/PantInfo.js') }}"></script>
<!-- //content > row-->