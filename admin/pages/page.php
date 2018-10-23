<?php include 'header.php'; ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <?php
        /**
         * @copyright (c) 2017, RockJS Framework by Focus On Serivices
         * @version 1.0
         * @requires OpenEdge 102b or 91d
         * @author RockJS Framework by Focus On Serivices
         * 
         */
        /*
          |--------------------------------------------------------------------------
          | Service Web
          |--------------------------------------------------------------------------
          | Debe especificar el nombre del programa .P Transformado por RockJS  definida en $_GET["p"]
          | La funcion setProgram hace el llamado al programa .P y lleva a cabo su ejecucion
          | Mostrando el setResult con el atributo $Rockobj
          | Puede modificar el llamado con variables estaticas o como mejor convenga
         */

        include "../rockjs/openrockjs.php";

        /**
         * @param $_GET["p"] Description:
         * Recibe el nombre del programa Progress a Ejecutar
         */
        if (empty($_GET["p"])) {
            echo "imposible continuar con la peticion, defina los parametros necesarios para continuar la ejecucion";
        } else {
            $prog = $_GET["p"];
            $id = $_GET["s"];
            setProgram($id, $prog);
        }

        /**
         * 
         * @param type $prog Description:
         * Define el objeto programa Progress concatenando los elementos necesarios 
         * para la ejecucion en RockJS
         */
        function setProgram($id, $prog) {
            /*
              | Creación del objeto Programa
             */
            $Programa = builder_factory::create($prog);
            /*
              | Creación del objeto RockJS
             */
            $Rockobj = new RockJS($id);

            /**
             * @method type _openProgress(type $Programa) Description:
             * Crea una instancia de la clase RockJS y retorna una Boleano
             * False: Error
             * True: Muestra el resultado de la ejecucion
             */
            if ($Rockobj->_openProgress("$Programa->prog") == false) {
                setError($Rockobj->sysErrNo);
            } else {
                echo $Rockobj->setResult;
            }
        }
        ?>
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
