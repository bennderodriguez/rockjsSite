<?php include 'header.php'; ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-building fa-fw"></i> Perfil de la organización</h1>
            </div>
            <div class="panel-body">      
                <form role="form" id="orgdeatil" data-toggle="validator" class="shake">
                    <?php
                    include '../php/conexion.php';

                    $sql = "SELECT * FROM organizacion";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            $id = $row["id"];
                            $nombre = $row["nombre"];
                            $sector = $row["sector"];
                            $logo = $row["logo"];
                            $calle = $row["calle"];
                            $colonia = $row["colonia"];
                            $ciudad = $row["ciudad"];
                            $estado = $row["estado"];
                            $telefono = $row["telefono"];
                            $cp = $row["cp"];
                            $fax = $row["fax"];
                            $website = $row["website"];
                            ?>
                            <div class="form-group">
                                <label>Nombre de la organización</label>
                                <input class="form-control" id="nombre" value="<?php echo $nombre; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Sector</label>
                                <input class="form-control" id="sector" placeholder="Enter text" value="<?php echo $sector; ?>">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label>Su logotipo</label>
                                <input type="file" id="logo">
                                <p>Tamaño de imagen preferido: 240px x 240px @ 72 DPI Tamaño máximo de 1MB.</p>
                                <img width="20%" class="img-fluid" src="../<?php echo $logo; ?>" alt="logo">
                                <div class="help-block with-errors"></div>
                            </div>
                            <label>Dirección de la empresa</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="calle" value="<?php echo $calle; ?>" placeholder="Calle y número">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="ciudad" value="<?php echo $ciudad; ?>" placeholder="Ciudad">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="cp" value="<?php echo $cp; ?>" placeholder="C.P">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="fax" value="<?php echo $fax; ?>" placeholder="Fax">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="colonia" value="<?php echo $colonia; ?>" placeholder="Colonia">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="estado" value="<?php echo $estado; ?>" placeholder="Estado/provincia">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="telefono" value="<?php echo $telefono; ?>" placeholder="Número Telefónico">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="website" value="<?php echo $website; ?>" placeholder="Sitio Web">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="return confirm('¿Esta seguro de realizar esta acción?')">Update Data</button>
                            <a href="dashboard.php.php"><button type="button" class="btn btn-default">Cancel</button></a>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                            <?php
                        }
                    } else {
                        echo "<h3>Invalid ID</h3>";
                    }$conn->close();
                    ?>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
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

</body>

</html>
