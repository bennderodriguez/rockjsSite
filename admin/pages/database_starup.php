<?php include 'header.php'; ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-database fa-fw"></i> Config Database Startup</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Adding a Managed Database
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" id="startup" data-toggle="validator" class="shake">
                                <div class="form-group">
                                    <label>	Database display name</label>
                                    <input type="text" class="form-control" id="db_name" required placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label>Database path and filename</label>
                                    <input type="text" class="form-control" id="db_path" required placeholder="C:\fakepath\example.db">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label>Database port</label>
                                    <input type="text" class="form-control" id="db_port">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label>Parameter file name</label>
                                    <input type="text" class="form-control" id="pf_name" placeholder="parameter-file.pf" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label>Path and filename Progress.exe</label>
                                    <input type="text" class="form-control" id="progress_path" placeholder="C:\fakepath\_progres.exe" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label>Worckspace Path</label>
                                    <input type="text" class="form-control" id="wrk_path" placeholder="C:\fakepath" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label>Other database broker arguments</label>
                                    <input type="text" class="form-control" id="other_argument">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
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
<script type="text/javascript" src="../dist/js/database-startup.js"></script>
</body>

</html>
