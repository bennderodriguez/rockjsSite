<?php
include 'header.php';

//error_reporting(0);
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-database fa-fw"></i> Active Service</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Active to an Existing Database
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" id="active-service" data-toggle="validator" class="shake">
                                <?php
                                include '../php/conexion.php';
                                // udb
                                if (empty($_GET["udb"])) {
                                    echo "<h3>Invalid ID</h3>";
                                } else {
                                    $udb = $_GET["udb"];
                                    $sql = "SELECT * FROM database_config WHERE id=$udb";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $id = $row["id"];
                                            $name_conf = $row["name_conf"];
                                            $url = $row["url"];
                                            $active = $row["active"];
                                            $dlc = $row["dlc"];
                                            $pathprog = $row["pathprog"];
                                            $parameter_file = $row["parameter_file"];
                                            $notes = $row["notes"];
                                            $db = $row["db"];
                                            $lg = $row["lg"];
                                            $notes = $row["notes"];
                                            ?>
                                            <div class="form-group">
                                                <label>Database display name</label>
                                                <input type="hidden" value="<?php echo $udb; ?>" id="id" required>
                                                <input type="hidden" value="<?php echo $url; ?>" id="url" required>
                                                <input type="text" value="<?php echo $name_conf; ?>" id="name_conf" value="" required class="form-control" readonly>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <!--LOGICAL NAME-->
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label>Path to Parameter File and filename</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" value="<?php echo $parameter_file; ?>" class="form-control" placeholder="full\\path\\to\\archive.pf" name="parameter-file" id="parameter-file" required readonly>
                                                    </div>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label>Path to Program</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" value="<?php echo $pathprog; ?>" class="form-control" placeholder="full\\path\\to\\program\\" name="pathprog" id="pathprog" required readonly>
                                                    </div>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label>Path to Progress</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" value="<?php echo $dlc; ?>" class="form-control" placeholder="full\\path\to\\_progress" name="dlc" id="dlc" required readonly>
                                                    </div>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label>Database Name</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" value="<?php echo $db; ?>" class="form-control" placeholder="name.db"  id="db" required readonly>
                                                    </div>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label>Log name</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" value="<?php echo $lg; ?>" class="form-control" placeholder="name.lg"  id="lg" required readonly>
                                                    </div>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label>Log name</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" value="<?php echo $notes; ?>" class="form-control" placeholder="name.lg"  id="notes" required readonly>
                                                    </div>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" onclick="return confirm('¿Esta seguro de realizar esta acción?')">Save Configuration</button>
                                            <a href="showdatabase.php"><button type="button" class="btn btn-default">Cancel</button></a>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                            <br>
                                        <?php
                                        }
                                    }else{ echo "<h3>Invalid ID</h3>";}$conn->close();
                                }
                                ?>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
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


<script type="text/javascript" src="../dist/js/validator.min.js"></script>
<script type="text/javascript" src="../dist/js/service-active.js"></script>

</body>

</html>
