<?php
class Aritmetica{
    public function suma($valorA,$valorB) //función que calcula el promedio, lo devuelve
    {
        $a = $valorA;
        $b = $valorB;
        $WebService="http://dneonline.com/calculator.asmx?wsdl";
        //parametros de la llamada
        $parametros = array();
        $parametros['intA'] = $a;
        $parametros['intB'] = $b;
        //Invocación al web service
        $WS = new SoapClient($WebService, $parametros);
        //recibimos la respuesta dentro de un objeto
        $result = $WS->Add($parametros);
        //Mostramos el resultado de la consulta
        echo $result->AddResult;
        print ('<br /><a href="index.php">Volver</a>');
    }
}
?>