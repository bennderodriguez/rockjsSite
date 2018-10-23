<?php include 'header.php'; ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-group fa-fw"></i> Usuarios y Roles</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <?php
    include '../php/conexion.php';
    if (isset($_GET["active"])) {
        $errorMSG = "";
        // lg
        if (empty($_GET["id"])) {
            $errorMSG = "id is required ";
        } else {
            $id = $_GET["id"];
        }
        /* Verificamos que las variables _POST esten completas */
        if ($errorMSG == ""  && $type=="admin") {
            $status = "yes";
            /* Ejecutamos QUERY */
            $sql = "UPDATE admin SET active = '" . $status . "' WHERE id_user = $id";
            /* Validamos si hubo un error en la ejecucion de la QUERY */
            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Usuario Activo.
                            </div>';
            } else {
                echo "Error updating record: " . $conn->error;
            }
            $conn->close();
        } else {
            if ($errorMSG == "") {
                echo '<div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Message!</strong> Acción Prohibida. Permisos insuficientes
                      </div>';
            } else {
                echo $errorMSG;
            }
        }
    }
    if (isset($_GET["desactive"])) {
        $errorMSG = "";
        // lg
        if (empty($_GET["id"])) {
            $errorMSG = "id is required ";
        } else {
            $id = $_GET["id"];
        }
        /* Verificamos que las variables _POST esten completas */
        if ($errorMSG == "" && $type=="admin") {
            $status = "no";
            /* Ejecutamos QUERY */
            $sql = "UPDATE admin SET active = '" . $status . "' WHERE id_user = $id";
            /* Validamos si hubo un error en la ejecucion de la QUERY */
            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Usuario desactivado.
                            </div>';
            } else {
                echo "Error updating record: " . $conn->error;
            }
            $conn->close();
        } else {
            if ($errorMSG == "") {
                echo '<div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Message!</strong> Acción Prohibida. Permisos insuficientes
                      </div>';
            } else {
                echo $errorMSG;
            }
        }
    }
    ?>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <!-- Nav tabs -->
        <ul class="nav nav-pills">
            <li class="active"><a href="#user" data-toggle="tab">Usuarios</a>
            </li>
            <li><a href="#rol" data-toggle="tab">Roles</a>
            </li>
            <li><a href="#add-rol" data-toggle="tab">Agregar nuevo Rol</a>
            </li>
            <li><a href="settings.php">Agregar Usuario</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="user">
                <div class="panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Detalles de usuario</th>
                                    <th>Rol</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../php/conexion.php';

                                $sql = "SELECT * FROM admin";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<tr class="odd gradeX">';
                                        echo ' <td>' . $row["nombre"] . ' <small class="text-info"><em>(Active->' . $row["active"] . ' )</em></small></td>';
                                        echo ' <td>' . $row["type"] . '</td>';
                                        echo '<td>
                                        <button type="button" class="btn btn-default btn-circle" title="Editar" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i>
                                        </button>';
                                        if ($row["active"] == "yes") {
                                            echo '<a href="user-rol.php?desactive=y&id=' . $row["id_user"] . '"><button type="button" class="btn btn-warning btn-circle" title="Marcar como inactivo"><i class="fa fa-eye-slash"></i>
                                        </button>';
                                        } else {
                                            echo '<a href="user-rol.php?active=y&id=' . $row["id_user"] . '"><button type="button" class="btn btn-success btn-circle" title="Marcar como Activo"><i class="fa fa-eye"></i>
                                        </button></a>';
                                        }
                                        echo '<button type="button" class="btn btn-danger btn-circle" title="Eliminar" onclick="return confirm(' . "'¿Esta seguro de realizar esta acción?'" . ')"><i class="fa fa-times-circle-o"></i>
                                        </button>
                                    </td>';

                                        echo ' </tr>';
                                    }
                                }$conn->close();
                                ?>                                                         

                            </tbody>
                        </table>

                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <div class="tab-pane fade" id="rol">
                <div class="panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Nombre del Rol</th>
                                    <th>Descripción</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>Admin</td>
                                    <td>Acceso sin restricciones a todos los módulos.</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-circle" title="Editar"><i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-circle" title="Eliminar" onclick="return confirm('¿Esta seguro de realizar esta acción?')"><i class="fa fa-times-circle-o"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>Invitado</td>
                                    <td>Solo Consulta.</td>
                                    <td>
                                        <button type="button" class="btn btn-default btn-circle" title="Editar"><i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-circle" title="Eliminar" onclick="return confirm('¿Esta seguro de realizar esta acción?')"><i class="fa fa-times-circle-o"></i>
                                        </button>
                                    </td>
                                </tr>                                                       

                            </tbody>
                        </table>

                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <div class="tab-pane fade" id="messages-pills">
                <h4>Messages Tab</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
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

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<!-- /#wrapper -->



<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
                                            $(document).ready(function () {
                                                $('#dataTables-example').DataTable({
                                                    responsive: true
                                                });
                                            });
</script>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit User</h4>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="form-group">
                        <label id="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label id="nombre">Nombre</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="form-group">
                        <label id="rol">Rol</label>
                        <select class="form-control" id="sel1">
                            <option>Admin</option>
                            <option>Visit</option>
                        </select></div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<

</body>

</html>
