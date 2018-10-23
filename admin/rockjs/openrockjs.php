<?php

/**
 * @copyright (c) 2017, RockJS Framework by Focus On Serivices
 * @version 1.0
 * @requires OpenEdge 102b or 91d
 * @author RockJS Framework by Focus On Serivices
 * 
 */
// Desactivar toda notificación de error
error_reporting(0);

//limite de ejecucion
//set_time_limit(30);

class RockJS {

    /**
     *
     * @var type 
     */
    private $progressExe = "";
    private $WorckSpace = "";
    private $pfdata = "";
    public $setResult;
    public $sysErrNo;
    private $sysErrDesc;

    // Constructor
    public function __construct($id) {
        $DLC = "C:\\PROGRESS\\OpenEdge\bin\_progres.exe";
        $PATHPROG = "C:\WEB";
        $PROCGI = "C:\WEB\OscarPre.pf";
        /*include '../php/conexion.php';
        $sql = "SELECT d.dlc, d.pathprog, d.parameter_file, r.program_name from rockjs_conexion as r, database_config as d WHERE r.id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                //echo "id: " . $row["id"];
              echo $this->progressExe = $row["dlc"];
              echo $this->WorckSpace = $row["pathprog"];
              echo $this->pfdata = $row["parameter_file"];
            }
        }$conn->close();*/
        $this->id = $id;
        $this->progressExe = $DLC;
        $this->WorckSpace = $PATHPROG;
        $this->pfdata = $PROCGI;
        $this->hoy = strtotime(date("d-m-Y H:i:00", time()));
        $this->caducidad = strtotime("30-01-2018 21:00:00");
    }

    /**
     * 
     * @return type
     */
    private function getWorckSpace() {
// Devolvemos un atributo
        return $this->WorckSpace;
    }

    /**
     * 
     * @param type $WorckSpace
     */
    private function setWorckSpace($WorckSpace) {
//Le damos un valor a un atributo
        $this->WorckSpace = $WorckSpace;
    }

    /**
     * 
     * @return type
     */
    private function getpfdata() {
        return $this->pfdata;
    }

    /**
     * 
     * @return string
     */
    private function mostrarInfo() {
        // Llamamos a otros métodos
        $info = "<h1>Información del RockJS:</h1>";
        $info .= "progressExe: " . $this->progressExe;
        $info .= "<br/> WorckSpace: " . $this->getWorckSpace();
        $info .= "<br/> pfdata: " . $this->getpfdata();
        return $info;
    }

    /**
     * 
     * @param type $prog_info
     * @return boolean
     */
    public function _openProgress($prog_info) {
        if ($this->hoy > $this->caducidad) {
            echo "<h1>Su Licenca RockJS Framework de prueba con vigencia de 30 dias ha expirado</h1>";
            echo "<p>Contactenos para ampliar su licencia</p>";
        } else {
            $PROEXE = $this->progressExe;
            /*
             * Este segmento de codigo
             * recibe las llamadas tipo GET|POST|SERVER
             * !Muy importante no borrar¡
             */
            while (list($k, $v) = each($_GET)) {
                /*
                 * $K = var name 
                 * $v = var value
                 */
                echo $k . " " . $v;
                echo '<br>';
                if ($v == "") {
                    /*
                     * putenv carga las variables
                     * en memoria
                     */
                    putenv("$k=!");
                } else {
                    putenv("$k=$v");
                }
            }
            while (list($k, $v) = each($_SERVER)) {
                putenv("$k=$v");
            }
            $cte = "";
            if ($cte == "") {
                while (list($k, $v) = each($_POST)) {
                    //echo $_POST;
                    // echo $k . " " . $v;
                    // echo '<br>';
                    if ($v == "") {
                        putenv("$k=!");
                    } else {
                        putenv("$k=$v");
                    }
                }
            }

            $path_info = $this->WorckSpace . $prog_info;
            $CMD = "$PROEXE -pf " . $this->pfdata . " -p $path_info";
            $fp = popen("$CMD", "r");
            $setResult = "";

            while ($read = fread($fp, 2096)) {
                if (substr($read, 0, 2) == "**") {
                    $this->extractError($read);
                    pclose($fp);
                    return false;
                }
                if (substr($read, 0, 31) == "There is no server for database") {
                    $read = "** " . $read;
                    $this->extractError($read);
                    pclose($fp);
                    return false;
                }
                $this->setResult .= $read;
            }
            pclose($fp);
            return true;
        }//end licence else
    }

    /**
     * 
     * @param type $errString
     */
    private function extractError($errString) {
        // Remove leading ** 
        $errString = trim(substr($errString, 3));
        // Find err no
        $rpos = strrpos($errString, "(");
        if ($rpos > 0) {
            //$this->sysErrDesc = substr($errString,0,$rpos - 1);
            $errString = substr($errString, $rpos + 1);
            $errString = substr($errString, 0, strlen($errString) - 1);
            $this->sysErrNo = $errString;
        } else {
            //$this->sysErrDesc = $errString;
            $this->sysErrNo = -1;
        }
    }

}

/*
  |--------------------------------------------------------------------------
  | builder_factory.php
  |--------------------------------------------------------------------------
  | Crea un objeto Programa asignando prefijos y sufijos
  | necesarios para su ejecucion en RockJS
 */

class builder_factory {

    public $prog;

    /**
     * 
     * @param string $prog
     * @return \Programa
     */
    public static function create($prog) {
        $prog = $prog . '.p';
        $DLC_PROG = "\\" . $prog;
        return new Programa($DLC_PROG);
    }

    /**
     * 
     * @return type
     */
    public function getType() {
        return get_class($this);
    }

}

class Programa extends builder_factory {

    public function __construct($prog) {
        $this->prog = $prog;
    }

}

function setError($error) {
    switch ($error) {
        case "492":
            echo "Unable to run startup procedure _ab.p (492)";
            break;
        case "1432":
            echo "Could not connect to server for database, errno  (1432)";
            break;
        case "1247":
            echo "Unable to open parameter file, errno (1247)";
            break;
        case "725":
            echo "Unknown or ambiguous table. (725)";
            break;
        case "196":
            echo "Could not understand line (196)";
            break;
        default:
            echo "Progress errno" . $error;
    }
}
?>
 



