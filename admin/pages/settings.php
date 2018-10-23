<?php include 'header.php'; ?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-group fa-fw"></i> Agregar Usuario</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                Add user
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" id="adduser" data-toggle="validator" class="shake">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" id="name" required class="form-control">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <label>Nick Name</label>
                                                <input type="text" id="nick" required class="form-control">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <label>E mail</label>
                                                <input type="email" id="email" required class="form-control">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" id="password" required class="form-control">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <label>Rol</label>
                                                <select id="type" class="form-control">
                                                    <option value="visit">Visit</option>
                                                    <option value="admin">Admin</option>
                                                </select>
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
        <script type="text/javascript" src="../dist/js/add_user.js"></script>

    </body>

</html>
