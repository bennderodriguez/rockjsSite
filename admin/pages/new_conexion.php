<?php include 'header.php'; ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><img src="../img/sniglet-sl.svg" width="4%"> Config a new conexion RockJS</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Configure a new Rockjs proyect
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" id="new-conexion" data-toggle="validator" class="shake">
                                <div class="form-group">
                                    <label>Proyect display name</label>
                                    <input type="text" id="name_proyect" required class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <!--LOGICAL NAME-->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label>Name program .p</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Name .p" id="p_name" required>
                                        </div>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label>Select a progress database configuration </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select class="form-control" id="database_configuration">

                                                <?php
                                                include '../php/conexion.php';

                                                $sql = "SELECT * FROM database_config";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        //echo "id: " . $row["id"]. " - Name: " . $row["name_conf"];
                                                        echo '<option value="' . $row["id"] . '">' . $row["name_conf"] . '</option>';
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }$conn->close();
                                                ?>                                  
                                            </select>
                                        </div>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label>Add Notes</label>
                                    <textarea class="form-control" rows="3" id="notes"></textarea>
                                </div>


                                <button type="submit" class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                                <br>
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
<script type="text/javascript" src="../dist/js/new_conexion.js"></script>


</body>

</html>
