<?php include 'header.php'; ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-database fa-fw"></i> Config a new Progress Database</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Configure to an Existing Database
                </div>
                <div class="panel-body">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Note:</strong> User \\ in windows or / for Linux
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" id="contactForm" data-toggle="validator" class="shake">
                                <div class="form-group">
                                    <label>Database display name</label>
                                    <input type="text" id="name_conf" required class="form-control" autocomplete="off">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label>URL Service Web</label>
                                    <input type="text" id="sw" required class="form-control" placeholder="myrockjs.com/conf/rockjs">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <!--LOGICAL NAME-->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label>Path to Parameter File and filename</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="full\\path\\to\\archive.pf" name="parameter-file" id="parameter-file" required>
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
                                            <input type="text" class="form-control" placeholder="full\\path\\to\\program\\" name="pathprog" id="pathprog" required>
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
                                            <input type="text" class="form-control" placeholder="full\\path\to\\_progress" name="dlc" id="dlc" required>
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
                                            <input type="text" class="form-control" placeholder="name.db"  id="db" required autocomplete="off" onchange="myFunction2(this.value)">
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
                                            <input type="text" class="form-control" placeholder="name.lg"  id="lg" required autocomplete="off" onchange="myFunction(this.value)">
                                        </div>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label>Other Param</label>
                                    <textarea class="form-control" rows="3" id="notes" placeholder="-N, -S, -H, etc"></textarea>
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
<script type="text/javascript" src="../dist/js/database-config.js"></script>
<script>
    function myFunction(val) {
        var file = val;
        var ext = file.substring(file.lastIndexOf("."));
        if(ext != ".lg")
    {
        $("#lg").val('');
        alert("The field Log name does not have the correct extension (.lg)");
    }
    }
</script>
<script>
    function myFunction2(val) {
        var file = val;
        var ext = file.substring(file.lastIndexOf("."));
        if(ext != ".db")
    {
        $("#db").val('');
        alert("The field Database Name does not have the correct extension (.db)");
    }
    }
</script>

</body>

</html>
