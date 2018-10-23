<!DOCTYPE html>
<html lang="es">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>RockJS Framework®</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="apple-mobile-Web-app-title" content="RockJS Framework®">
        <meta name="author" content="RockJS Framework®|Focus On Services">
        <meta name="keywords" content="Soporte tecnico,it,ti,soluciones,datacenter,consultoria,centro de datos,empresarial,administracion,proyectos,soporte multimarca, Focus On Services es un proveedor global de servicios con presencia en más de 16 países de Latinoamérica con un amplio portafolio de servicios en Tecnologías de Información y con los mejores tiempos de respuesta de la industria, Software, Desarrollo, app, apps, android, IOS, 
              Transformación digital, Software on demand, Software a la medida, Servicios de desarrollo de software, fabrica de software, Progress, 4GL, ABL, app server, PAS, Servicios Web Síncronos,protocolos REST JSON XML">
        <meta name="description" content="La forma más rápida de adoptar la Transformación Digital">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sniglet:400,500,700|Metric-Light:400,900" rel="stylesheet">
        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Libraries CSS Files -->
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/pixeden/assets/Pe-icon-7-stroke.css" rel="stylesheet">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/minated.min.css">
        <style>
            body {
                font-size: 12px !important;
            }
            select.form-control:not([size]):not([multiple]) {
                height: calc(3.8rem + 3px);
            }
            hr{
                height: 2px;
            }

            /* The switch - the box around the slider */
            .switch {
                position: relative;
                display: inline-block;
                width: 60px;
                height: 34px;
            }

            /* Hide default HTML checkbox */
            .switch input {display:none;}

            /* The slider */
            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 26px;
                width: 26px;
                left: 4px;
                bottom: 4px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
            }

            input:checked + .slider {
                background-color: #2196F3;
            }

            input:focus + .slider {
                box-shadow: 0 0 1px #2196F3;
            }

            input:checked + .slider:before {
                -webkit-transform: translateX(26px);
                -ms-transform: translateX(26px);
                transform: translateX(26px);
            }

            /* Rounded sliders */
            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }
            .div.with-errors{
                color: red !important;
            }
        </style>

    </head>

    <body>
        <header id="header" class="navbar-fixed-top">
            <div class="container">  
                <div id="logo" class="pull-left">
                    <a href="http://www.focusonservices.com/rockjs/"><img src="img/rock/sniglet-blue-sl.png" alt="Transformación digital" title="RockJS Framework®|Focus On Services" /></img></a>
                </div>   
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="http://www.focusonservices.com/rockjs/#RockJS">RockJS</a></li>
                        <li><a href="http://www.focusonservices.com/rockjs/#servicios">Servicios</a></li>
                        <li><a href="http://www.focusonservices.com/rockjs/#beneficios">Beneficios</a></li>
                        <li><a href="http://www.focusonservices.com/rockjs/RockJSFrameworkBluePrint.pdf" download="RockJS Framework.pdf">Blueprint</a></li>
                        <li><a href="http://www.focusonservices.com/rockjs/#contact">Contáctenos</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->

                <nav class="nav social-nav pull-right hidden-sm-down">
                    <ul class="nav-menu">
                        <li class="menu-has-children"><span class="pe-7s-global white"></span>
                            <ul>
                                <li><div id="google_translate_element"></div></li> 
                            </ul>
                        </li>        
                    </ul>
                </nav>
            </div>
        </header><!-- #header -->

        <!-- About -->
        <section id="RockJS">
            <div class="container">
                <h4 class="text-center cfos">
                    <img src="img/rock/sniglet-sl-b.png" width="50" alt="Transformación digital" title="RockJS Framework®|Focus On Services"/></img>&nbsp; Con el objetivo de ofrecerle la mejor alternativa tecnológica, por favor, ayúdenos con la siguiente información
                </h4>
                <?php
                if (isset($_GET["r"])) {
                    echo'<div class="alert alert-success alert-dismissible">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<h4 class="text-center">Hemos recibido su información, en breve nos comunicaremos con usted. Gracias!</h4>
						</div>
						<a class="text-center pull-right" href="https://www.focusonservices.com/rockjs/"><button type="button" class="btn btn-default">Volver al inicio <span class="pe-7s-home"></span></button></a><br>                          
						';
                }
                ?>
                <form role="form" id="clientform" data-toggle="validator" class="shake" action="new_lavantamiento.php" method="post" autocomplete="off">
                    <h4 class="text-center cfos">Datos del Partner</h4>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="name" class="h6">Nombre</label>
                            <input type="text" class="form-control input-sm" name="Partner" id="Partner" maxlength="80" autofocus>
                            <div class="help-block with-errors"></div>
                        </div>   
                        <div class="form-group col-sm-4">
                            <label for="email" class="h6">Email</label>
                            <input type="email" class="form-control input-sm" name="emailPartner" id="emailPartner" maxlength="80">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="email" class="h6">Empresa</label>
                            <input type="text" class="form-control input-sm" name="empresaPartner" id="empresaPartner" maxlength="80">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <hr>
                    <h4 class="text-center cfos">Datos Generales del Cliente</h4>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="name" class="h6">Nombre</label>
                            <input type="text" class="form-control input-sm" name="name" id="name" required maxlength="80">
                            <div class="help-block with-errors"></div>
                        </div>   
                        <div class="form-group col-sm-6">
                            <label for="email" class="h6">Email</label>
                            <input type="email" class="form-control input-sm" name="email" id="email" required maxlength="80">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="Company" class="h6">Compañia</label>
                            <input type="text" class="form-control input-sm" name="company" id="company" required maxlength="40">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="iam" class="h6">Giro</label>
                            <select class="form-control " name="iam" id="iam" required>
                                <option value="">Seleccione el giro de la empresa</option>   
                                <option value="Finanzas y seguros">Seguros y Fianzas</option>    
                                <option value="Gobierno">Gobierno</option>    
                                <option value="Manufactura">Manufactura</option>    
                                <option value="Servicios de Transporte">Servicios de Transporte de personas o mercaderías</option>
                                <option value="Turismo">Turismo </option>
                                <option value="Industria Automotriz">Industria Automotriz</option>
                                <option value="Institución Financiera">Institución Financiera</option>
                                <option value="Educación">Educación</option>
                                <option value="Salud">Salud</option>
                                <option value="Servicios de Comunicación">Servicios de Comunicación</option>
                                <option value="Other">Otro</option>      
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="Country" class="h6">País</label>
                            <input type="text" class="form-control input-sm" value="México" name="country" id="country" required maxlength="40">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="phone" class="h6">Teléfono</label>
                            <input type="tel" class="form-control input-sm" name="phone" id="phone" required maxlength="20">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="phone" class="h6">Sitio Web de la compañia</label>
                            <input type="text" name="homepage" id="homepage" class="form-control input-sm" required maxlength="200">
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                    </div>
                    <hr>
                    <h4 class="text-center cfos">Características del Sistema Legado</h4>
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label for="os" class="h6">Sistema  Operativo/Versión</label><br>
                            <input type="text" class="form-control input-sm" name="os" id="os" required maxlength="40">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="system_name" class="h6">Nombre del sistema</label>
                            <input type="text" class="form-control input-sm" name="system_name"  id="system_name" required maxlength="40">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="number_user" class="h6">Número de usuarios concurrentes</label>
                            <input type="number" class="form-control input-sm" name="number_user" id="number_user" required min="1" max="99999" min="1">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="version" class="h6">Tipo de Sistema</label>
                            <select class="form-control " name="version" id="version" required>
                                <option value="">Seleccione el tipo de sistema</option>   
                                <option value="Desarrollado en casa">Desarrollado en casa</option>    
                                <option value="Comprado">Comprado</option>    
                                <option value="ERP">ERP</option>    
                                <option value="Other">Otro</option>      
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="is_critical" class="h6">Es un sistema crítico para la operación?</label><br>
                            <label class="switch">
                                <input type="checkbox" name="is_critical" id="is_critical" value="Yes">
                                <span class="slider round"></span>
                            </label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="drp" class="h6">Tiene configurado un DRP?</label><br>
                            <label class="switch">
                                <input type="checkbox" name="drp" id="drp" value="Yes">
                                <span class="slider round"></span>
                            </label>
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="type_technology" class="h6">Tipo de Arquitectura <br></label><br>
                            <select class="form-control" name="type_technology" id="type_technology" required>
                                <option value="Cliente/Servidor">Cliente/Servidor</option>
                                <option value="Mainframe">Mainframe</option>
                                <option value="Web">Web</option>
                                <option value="Otro">Otro</option>
                            </select>
                            <div class="help-block with-errors"></div>

                            <div id="MainFrameOptions" style="display:none">	
                                <div class="form-group">
                                    <label for="drp" class="h6">Sobre su servidor Mainframe especifique:</label><br>
                                    <input type="text" class="form-control input-sm" name="Fabricante" id="Fabricante" placeholder="Fabricante" required maxlength="80">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-sm" name="Modelo" id="Modelo" placeholder="Modelo" required maxlength="80">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-sm" name="Versión" id="Versión" placeholder="Versión" required maxlength="80">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="programming_language" class="h6">Lenguajes de Programación <br></label><br>
                            <textarea type="text" class="form-control input-sm" name="programming_language" id="programming_language" row="1" required maxlength="80"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>   

                    </div> <hr size="3">
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <label for="number_screen" class="h6">Número de pantallas</label>
                            <input type="number" class="form-control input-sm" name="number_screen" id="number_screen" required  min="1" max="99999" min="1">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="source_code" class="h6">Posee el código fuente del sistema</label><br>
                            <label class="switch">
                                <input type="checkbox" name="source_code" id="source_code" value="Yes">
                                <span class="slider round"></span>
                            </label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="is_distributed" class="h6">Ambiente distribuido</label><br>
                            <label class="switch">
                                <input type="checkbox" name="is_distributed" id="is_distributed" value="Yes">
                                <span class="slider round"></span>
                            </label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="have_documentation_system" class="h6">Tiene documentación del sistema?</label><br>
                            <label class="switch">
                                <input type="checkbox" name="have_documentation_system" id="have_documentation_system" value="Yes">
                                <span class="slider round"></span>
                            </label>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="form-group col-sm-3">
                            <label for="have_documentation_proccess" class="h6">Tiene documentación de sus procesos?</label><br>
                            <label class="switch">
                                <input type="checkbox" name="have_documentation_proccess" id="have_documentation_proccess" value="Yes">
                                <span class="slider round"></span>
                            </label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="environments_desa" class="h6">Tiene ambiente Desarrollo?</label><br>
                            <label class="switch">
                                <input type="checkbox" name="environments_desa" id="environments_desa" value="Yes">
                                <span class="slider round"></span>
                            </label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="environment_QA" class="h6">Tiene ambiente de QA?</label><br>
                            <label class="switch">
                                <input type="checkbox" name="environment_QA" id="environment_QA" value="Yes">
                                <span class="slider round"></span>
                            </label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="version_manager" class="h6">Emplea un administrador de versiones, ¿cuál?</label><br>
                            <input type="text" class="form-control input-sm" placeholder="Sí, Mencione cuál" name="version_manager" id="version_manager" maxlength="40">
                            <div class="help-block with-errors"></div>  </div>   
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="use_satellite_systems" class="h6">Intercambia información con Sistemas satelitales</label><br>
                            <label class="switch">
                                <input type="checkbox" name="use_satellite_systems" id="use_satellite_systems" value="Yes" onclick="show_satellite_systems_desc()">
                                <span class="slider round"></span>
                            </label>
                            <div id="myDIV" style="display:none;">
                                <textarea name="use_satellite_systems" required name="satellite_systems_desc"  id="satellite_systems_desc"  placeholder="Mencione cuáles"  class="form-control" rows="1" maxlength="2000"></textarea>
                                <label for="satellite_systems_type" class="h6">Seleccione el protocolo de comunicación que usan <br><span class="text-success">(Use Ctrl-clic para elegir más de uno)</span></label><br>
                                <select class="form-control" name="satellite_systems_type[]" id="satellite_systems_type" required multiple>
                                    <option value="REST">REST</option>
                                    <option value="SOAP">SOAP</option>
                                    <option value="FTP">FTP</option>
                                    <option value="TCP-IP">TCP-IP</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="use_third_party_software" class="h6">Emplea software licenciado de terceros (Citrix / Terminal services / emulador/ etc) </label><br>
                            <textarea name="use_third_party_software" name="use_third_party_software" id="use_third_party_software" placeholder="Sí, Mencione cuáles"  class="form-control" rows="1" maxlength="2000"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="attention_schedule" class="h6">Horarios de funcionamiento del Sistema</label><br><br>
                            <textarea name="attention_schedule" name="attention_schedule" id="attention_schedule" class="form-control" rows="1" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>   
                    <hr size="3">
                    <br><h4 class="text-center cfos">Bases de Datos del Sistema</h4>     
                    <div class="field_wrapper">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="database_name" class="h6">Nombre de base de datos</label><br>
                                <input type="text" class="form-control input-sm" name="database_name[]" id="database_name" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="database_version" class="h6">Versión</label><br>
                                <input type="text" class="form-control input-sm" name="database_version[]" id="database_version" required maxlength="15">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="number_users" class="h6">Número de usuarios nombrados</label><br>
                                <input type="number" class="form-control input-sm" name="number_users[]" id="number_users" required min="1" max="99999" min="1">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="Observations" class="h6">Observaciones</label><br>
                                <textarea name="observations[]" id="observations" class="form-control" rows="1"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>                   
                    <div id="contenedorcampos"></div>
                    <a href='JavaScript:agregarCampo();'><button type="button" class="btn btn-link">Agregar base de datos</button> </a> 
                    <button type="submit" id="form-submit" class="btn btn-success pull-right">Enviar</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </form>

            </div>
        </section>
        <!-- /Section: contact -->

        <footer class="site-footer">
            <div class="bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-xs-12 text-lg-left text-center">
                            <p class="copyright-text">
                                <a href="http://www.focusonservices.com" ><img src="img/fos.png" width="100"></a> <span class="rck">RockJS®</span> Framework 
                            </p>
                        </div>	
                        <div class="col-lg-6 col-xs-12 text-lg-left text-center">                            
                            <p class="pull-right"><a href="http://www.focusonservices.com/aviso_privacidad_fos_2013.pdf" style="color:white !important;" target="_blank">Aviso de Privacidad</a></p>
                        </div>
                    </div>


                </div>
            </div>
        </footer>
        <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a> <!-- JavaScript
        <!-- Required JavaScript Libraries -->
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <!-- Template Specisifc Custom Javascript File -->

        <script src="js/translate.js"></script>
        <script src="js/analitics.js"></script>
        <script  type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/validator.min.js"></script>
        <script type="text/javascript" src="js/client-form.js"></script>
        <script>
                                    function agregarCampo() {
                                        var campos = 1;
                                        campos = campos + 1;
                                        var NvoCampo = document.createElement("div");
                                        NvoCampo.id = "divcampo_" + (campos);
                                        NvoCampo.innerHTML =
                                                "<br><h4 class='text-center cfos'>Bases de Datos " + campos + " del Sistema</h4> <div class='field_wrapper'>" +
                                                "<div class='row'>" +
                                                "<div class='form-group col-sm-4'>" +
                                                "<label for='database_name' class='h6'>Nombre de base de datos</label>" + "<br>" +
                                                "<input type='text' class='form-control input-sm' name='database_name[]' id='database_name' required>" +
                                                "<div class='help-block with-errors'>" + "</div>" +
                                                "</div>" +
                                                "<div class='form-group col-sm-4'>" +
                                                "<label for='database_version' class='h6'>Versión</label>" + "<br>" +
                                                "<input type='text' class='form-control input-sm' name='database_version[]' id='database_version' required maxlength='15'>" +
                                                "<div class='help-block with-errors'>" + "</div>" +
                                                "</div>" +
                                                "<div class='form-group col-sm-4'>" +
                                                "<label for='number_users' class='h6'>Número de usuarios nombrados</label>" + "<br>" +
                                                "<input type='number' class='form-control input-sm' name='number_users[]' id='number_users' required min='1' max='99999' min='1'>" +
                                                "<div class='help-block with-errors'>" + "</div>" +
                                                "</div>" +
                                                "</div>" +
                                                "<div class='row'>" +
                                                "<div class='form-group col-sm-12'>" +
                                                "<label for='Observations' class='h6'>Observaciones</label>" + "<br>" +
                                                "<textarea name='observations[]' id='observations' class='form-control' rows='1'>" + "</textarea>" +
                                                "<div class='help-block with-errors'>" + "</div>" +
                                                "</div>" +
                                                "</div><a href='JavaScript:quitarCampo(" + campos + ");' class='pull-right' role='button'> Quitar Base de datos </a>" +
                                                "</div><br><hr>";
                                        var contenedor = document.getElementById("contenedorcampos");
                                        contenedor.appendChild(NvoCampo);
                                    }

                                    function quitarCampo(iddiv) {
                                        var eliminar = document.getElementById("divcampo_" + iddiv);
                                        var contenedor = document.getElementById("contenedorcampos");
                                        contenedor.removeChild(eliminar);
                                    }

                                    function show_satellite_systems_desc() {
                                        var x = document.getElementById("myDIV");
                                        if (x.style.display === "none") {
                                            x.style.display = "block";
                                        } else {
                                            x.style.display = "none";
                                        }
                                    }
        </script>
        <script>
            $("#type_technology").click(function () {
                var Mainframe = $("#type_technology").val();
                if (Mainframe == "Mainframe") {
                    $("#MainFrameOptions").show();
                } else {
                    $("#MainFrameOptions").hide();
                }
            });
        </script>
    </body>
</html>


