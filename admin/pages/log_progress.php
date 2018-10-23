<?php include 'header.php'; ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-file-o fa-fw"></i> Log File Viewer</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Examine the database's log file
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>
                                <button type="button" class="btn btn-info">First</button>
                                <button type="button" class="btn btn-info" id="last">Last</button>
                                <button type="button" class="btn btn-info" id="reload">Reload</button><br>
                            <div class="form-group">
                                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                            </div>
                            </p>
                            <pre class="log" id="myDIV">
                                <?php
                                $archivo = fopen('c:\\web\\teso.lg', 'r');
                                while ($linea = fgets($archivo)) {
                                    $numlinea = 0;
                                    echo '<p>' . $linea . '</p>';
                                    $aux[] = $linea;
                                    $numlinea++;
                                }
                                ?>
                            </pre>
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
<script>
    /*Filter log document*/
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myDIV *").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    /*Reload log document*/
    $(document).ready(function () {
        $("#reload").click(function () {
            $("#myDIV").load(location.href + " #myDIV");
            //console.log("reload");
        });
    });

    $(document).ready(function () {
        $("#last").click(function () {
            $("p:last").css("background-color", "yellow");
            $("p:last").last().focusin();
            //console.log("reload");
        });
    });

</script>

</body>

</html>
