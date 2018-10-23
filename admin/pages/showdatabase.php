<?php include 'header.php'; ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Existing configurations </h1>
            <?php
            if (isset($_GET["update-responce"])) {
                echo '<div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Message!</strong> La configuracion está pendiente por aplicar.
                      </div>';
            }
            if (isset($_GET["add-conf"])) {
                echo '<div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Message!</strong> La configuracion está pendiente por aplicar.
                      </div>';
            }
            if (isset($_GET["act"]) == "true" && isset($_GET["id"])) {
                include '../php/conexion.php';
                $sql = "UPDATE database_config SET active='Active' WHERE id=" . $_GET["id"];
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Message!</strong> Service Active.
                      </div>';
                } else {
                    echo "Error updating record: " . $conn->error;
                }
                $conn->close();
            }
            ?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>                               
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include '../php/conexion.php';

                                $sql = "SELECT * FROM database_config";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                                        echo '<tr class="odd gradeX">';
                                        echo ' <td>' . $row["id"] . '</td>';
                                        echo ' <td>' . $row["name_conf"] . '</td>';
                                        if ($row["active"] == "Active") {
                                            echo ' <td><a href="admin-resources_db.php?conf='.$row["id"].'"><button type="button" class="btn btn-outline btn-info btn-xs" title="Administrar Recursos">More. ...</button></a></td>';
                                        } else {
                                            echo ' <td title="Requires activation">No Active</td>';
                                        }

                                        echo ' <td>' . $row["created_at"] . '</td>';
                                        echo '
                                        <td class="center">
                                        <a href="update-service.php?act=up&udb=' . $row["id"] . '" title="Actualizar datos"><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-rotate-right"></i></button></a>
                                        <a href="update_database_conf.php?act=del&udb=' . $row["id"] . '" onclick="return confirm(' . "'¿Esta seguro?'" . ')" title="Eliminar"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i>
                                        </button></a>
                                        <a href="active-service.php?udb=' . $row["id"] . '" title="Activar Servicio"><button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i>
                                        </button></a>
                                        </td>';

                                        echo ' </tr>';
                                    }
                                }$conn->close();
                                ?>                                   
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
