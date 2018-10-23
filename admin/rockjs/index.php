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

include "openrockjs.php";

/**
 * @param $_GET["p"] Description:
 * Recibe el nombre del programa Progress a Ejecutar
 */
if (empty($_GET["p"])) {
   // echo "imposible continuar con la peticion, defina los parametros necesarios para continuar la ejecucion";
     setProgram("usuarios");
} else {
    $prog = $_GET["p"];
    setProgram($prog);
}

/**
 * 
 * @param type $prog Description:
 * Define el objeto programa Progress concatenando los elementos necesarios 
 * para la ejecucion en RockJS
 */
function setProgram($prog) {
    /*
      | Creación del objeto Programa
     */
    $Programa = builder_factory::create($prog);
    /*
      | Creación del objeto RockJS
     */
    $Rockobj = new RockJS;

    /**
     * @method type _openProgress(type $Programa) Description:
     * Crea una instancia de la clase RockJS y retorna una Boleano
     * False: Error
     * True: Muestra el resultado de la ejecucion
     */
    if ($Rockobj->_openProgress("$Programa->prog") == false) {
        //setError($Rockobj->sysErrNo);
        //$tiempo_fin = microtime(true);
        //echo "Tiempo empleado: " . ($tiempo_fin - $tiempo_inicio);
    } else {
        echo $Rockobj->setResult;
    }
}

?>