<?php
	$operacao = $_POST["operacao"];

	include "conecta_mysql.inc";
	if ($operacao=="incluir")
	{
		$username = $_POST["username"];
		$nome = $_POST["nome"];
		$senha = $_POST["senha"];
		$estado = $_POST["estado"];
		$peso = $_POST["peso"];
		$cc = $_POST["cc"];
		$cs = $_POST["cs"];
		$ad = $_POST["ad"];
		$sql = "INSERT INTO produtos VALUES ";
		$sql .= "('$codigo','$nome','$descricao',$preco,$peso,$cc,$cs,'$ad')";
		$resultado = mysql_query ($sql); 
		echo "Produto incluído com sucesso!";
	}
	elseif ($operacao=="excluir")
	{
		$codigo = $_POST["codigo"];
		$sql = "DELETE FROM produtos WHERE codigo_produto=$codigo";
		$resultado = mysql_query ($sql); 
		$linhas = mysql_affected_rows();
		if($linhas==1)
		{ echo "Produto exclu�do com sucesso!"; }
		else
		{ echo "Produto n�o encontrado!"; }
	}
	elseif ($operacao=="mostrar")
	{
		$resultado = mysql_query ("SELECT * FROM produtos");
		$linhas = mysql_num_rows ($resultado);
		echo "<p><b>Lista de produtos da loja</b></p>";
		for ($i=0 ; $i<$linhas ; $i++)
		{
			$reg = mysql_fetch_row($resultado);  
			echo "$reg[0] <br>$reg[1] <br>$reg[2] <br>$reg[3] <br>";
			echo "$reg[4] <br>$reg[5] <br>$reg[6] <br>$reg[7] <br><br>";
		}
	}
	mysql_close($conexao);
?>
