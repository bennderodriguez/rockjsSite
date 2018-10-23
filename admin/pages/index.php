<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Rockjs</title>

        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="../dist/css/animate.css">
				<!-- Favicon -->
		<link href="favicon.ico" rel="icon">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Sniglet:400,500,700|Metric-Light:400,900" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        body {
            display: table;
            position: relative;
            background-image: url(../img/1.jpg);
            background-size: cover;
            background-attachment: fixed;
            padding: 0px 0;
            color: #fff;
            width: 100%;
            height: 100vh;
        }
        .panel {
    margin-bottom: 20px;
    background-color: #ffffff5c;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.panel-default>.panel-heading {
    color: #3873ae;
    background-color: #f5f5f5c2;
    border-color: #ddd;
    text-align: center;
}
        </style>
       </head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    
                    <div class="panel-heading"><div><img src="../img/sniglet.png" width="20%"></div>
                        <h3 class="panel-title">Bienvenido</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="login" data-toggle="validator" class="shake" autocomplete="off">
                             <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nick Name" id="user" type="search" autofocus required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password" type="password" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" id="form-submit" class="btn btn-primary pull-right ">Siguiente</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

        <script type="text/javascript" src="../dist/js/validator.min.js"></script>
        <script type="text/javascript" src="../dist/js/login.js"></script>

</body>

</html>
