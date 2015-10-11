<?php
    include "conect_mysql.inc";
    $resultado = mysql_query ("SELECT * FROM produtos");
    $linhas = mysql_num_rows ($resultado);
    for ($i=0;$i<$linhas;$i++){
        $museu[] = mysql_fetch_row($resultado);
        echo "Imagem do museu: $museu[0] <br>"; 
        echo"Nome do museu: $museu[1]<br>"; 
        echo "Exposicao: $museu[2]<br>"; 
        echo "Calendario: $museu[3]<br>"; 
    } 
    mysql_close($conexao); 
?>