<?php include 'header.php'; ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><img src="../img/sniglet.png" width="6%"> Administrar Recursos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <!-- Nav tabs -->
        <ul class="nav nav-pills">
            <li class="active"><a href="#_prosrv" data-toggle="tab">_prosrv</a>
            </li>
            <li><a href="#_mproshut" data-toggle="tab">_mproshut</a>
            </li>
            <li><a href="#_log" data-toggle="tab" onclick="loadDoc()">Log File Viewer</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="_prosrv">
                <div class="panel panel-default">
                    _prosrv
                </div>
            </div>
            <div class="tab-pane" id="_mproshut">
                <div class="panel panel-default">
                    _mproshut
                </div>
            </div>
            <div class="tab-pane" id="_log">
                <div class="panel panel-default">
                    <br>
                    <p>
                        <button type="button" class="btn btn-info" id="first">First</button>
                        <button type="button" class="btn btn-info" id="last">Last</button>
                        <button type="button" class="btn btn-info" id="reload" onclick="loadDoc()">Reload</button><br>
                    <div class="form-group">
                        <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    </div>
                    </p>
                    <pre class="log" id="logDIV">
                                <p id="top"></p>
                                <p id="log-file-view"></p>
                                <p id="last">End Log File</p>
                    </pre>
                </div>
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
<script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("log-file-view").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "http://localhost/axa/?p=log", true);
        xhttp.send();
    }
    /*Filter log document*/
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#logDIV *").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    $(document).ready(function () {
        $("#last").click(function () {
            $("#logDIV").animate({
                scrollTop: $('#logDIV')[0].scrollHeight - $('#logDIV')[0].clientHeight
            }, 1000);
            $("p:last").css("background-color", "yellow");
            $("p:last").last().focusin();
            $('#last').focus();
        });
    });

    $(document).ready(function () {
        $("#first").click(function () {
            $('#logDIV').animate({
                scrollTop: $('#logDIV').offset().top - 20 //#DIV_ID is an example. Use the id of your destination on the page
            }, 'slow');
            $("p:first").last().focusin();
            $('#top').focus();
        });
    });
</script>

</body>

</html>
