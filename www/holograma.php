<?php
    //date_default_timezone_set("UTC");
    //echo "UTC:".time(); 
    //echo "<br>"; 
    $arquivo = file_get_contents("/home/u562093690/public_html/Hackathon2.0/holograma.txt");
    //echo($arquivo);
    if ($_GET['estado'] == "Liga") 
    {
        $arquivo = "HOLOGRAMA=1";
    }
    if ($_GET['estado'] == "Desliga")
    {
        $arquivo = "HOLOGRAMA=0";
    }
    //echo($arquivo);
    if ($arquivo != "")
    {
        echo("Escrevendo no arquivo"); 
        $retorno =   file_put_contents("/home/u562093690/public_html/Hackaton2.0/holograma.txt",$arquivo);
        echo($retorno);
    }
?>