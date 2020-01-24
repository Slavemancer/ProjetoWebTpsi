<?php
$pageName = ucfirst(basename(__FILE__, '.php'));
include("controllers/conta.controller.php");
include("includes/header.php");
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
                <div class="card-header">
                    <h3 style="padding-right: 10px" class="card-title">Contas</h3>
                    <a href="adicionarconta.php">
                        <button type="button" class="btn btn-success">
                            <li class="fa fa-plus"></li> Adicionar
                        </button>
                    </a>
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
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nome: activate to sort column descending">Nome</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Banco: activate to sort column ascending">Banco</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Valor: activate to sort column ascending">Valor</th>
                                            <th tabindex="0" rowspan="1" colspan="1" aria-label="Valor: activate to sort column ascending">Editar</th>
                                            <th tabindex="0" rowspan="1" colspan="1" aria-label="Valor: activate to sort column ascending">Apagar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($contas as $key => $conta) {
                                            if ($_SESSION["user_id"] == $conta["user"]) {
                                        ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?= $conta["nome"]; ?></td>
                                                    <td><?= $conta["banco"]; ?></td>
                                                    <td><?= $conta["valor"]; ?></td>
                                                    <td>
                                                        <a href="editarconta.php?id=<?= $conta["id"] ?>"><button type="button" class="btn btn-block btn-warning">Editar</button></a>
                                                    </td>
                                                    <td>
                                                        <a href="apagarconta.php?id=<?= $conta["id"] ?>"><button type="button" class="btn btn-block btn-danger">Apagar</button></a>
                                                    </td>
                                                </tr>
                                        <?php }
                                        } ?>
                                    </tbody>
                                    <tfoot>

                                        <tr>
                                            <th rowspan="1" colspan="1">Nome</th>
                                            <th rowspan="1" colspan="1">Banco</th>
                                            <th rowspan="1" colspan="1">Valor</th>
                                            <th rowspan="1" colspan="1">Editar</th>
                                            <th rowspan="1" colspan="1">Apagar</th>
                                        </tr>

                                    </tfoot>
                                </table>
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
