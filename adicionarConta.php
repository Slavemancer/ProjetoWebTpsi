<?php
$pageName = ucfirst(basename(__FILE__, '.php'));
include("includes/header.php");
include("controllers/conta.controller.php");
?>
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <?php

                switch ($msg) {
                    case 'sucess': ?>
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Successo</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                A conta foi criada
                            </div>
                            <!-- /.card-body -->
                        </div>
                    <?php
                        break;
                    case 'sucess': ?>
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Erro</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                A conta não foi criada
                            </div>
                            <!-- /.card-body -->
                        </div>
                <?php
                    default:
                        break;
                }

                ?>
                <div class="col-sm-12 col-md-6"></div>
                <div class="card-header">
                    <h3 style="padding-right: 10px" class="card-title">Editar Contas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>

                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <form role="form">
                                    <div class="card-body">
                                        <div class="form-group ">
                                            <label for="nomeConta">Conta</label>
                                            <input name="nome" type="text" class="form-control" id="nomeConta" placeholder="Que nome quer dar á conta">
                                        </div>
                                        <div class="form-group">
                                            <label>Bancos</label>
                                            <select name="banco" class="custom-select">
                                                <?php
                                                include_once("models/banco.model.php");

                                                $bancos = $objBancos->list();
                                                foreach ($bancos as $key => $banco) {
                                                ?>
                                                    <option><?= $banco["nome"] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="quantidade">Conta</label>
                                            <input name="qtd" type="number" class="form-control" id="quantidade" placeholder="Valor atual na conta em euros (€)" step="0.01">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button name="adicionar" value="conta" type="submit" class="btn btn-success">Adicionar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<?php include("includes/tableFooter.php");
