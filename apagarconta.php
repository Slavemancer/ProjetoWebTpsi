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
                    <h3 style="padding-right: 10px" class="card-title">Apagar Conta</h3>

                </div>
                <!-- /.card-header -->

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Banco</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $conta["nome"] ?></td>
                            <td><?= $conta["banco"] ?></td>
                            <td><?= $conta["valor"] ?></td>
                        </tr>
                    </tbody>

                </table>

                <a href="contas.php"><button type="button" class="btn btn-block btn-primary">voltar</button></a>
                <a href="apagarconta.php?id=<?= $conta["id"] ?>&confirmar=1"><button type="button" class="btn btn-block btn-danger">Apagar</button></a>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<?php include("includes/tableFooter.php");
