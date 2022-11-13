<?php
    define("Host", 'localhost');
    define ("BD",'PWeb');
    define ("User_BD",'root');
    define ("Pass_BD",'');

    function conexion(){
	    if (!($con = mysql_connect(Host,User_BD,Pass_BD))){
		    echo "Error conectando al servidor de BBDD";
		    exit();
	    }
	    if (!mysql_select_db(BD,$con)){
		    echo"Error Seleccionando BD";
		    exit();
	    }
	    return $con;
    }
?>