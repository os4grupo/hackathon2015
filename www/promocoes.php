<?php require_once "conecta.php"; ?>
<?php

	$res = mysqli_query($conexao, "select * from tb_promocao where dt_hr_inicio <= now() and dt_hr_fim > now()");

	if ($res->num_rows == 0) {
	    echo "Nenhuma promo&ccedil;&atilde;o ativa encontrada.";
	    exit;
	} else {
		for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
		    $res->data_seek($row_no);
		    $row = $res->fetch_assoc();
		    echo "<a href=\"#parceiro\"><img src=\"{$row['imagem']}\" alt=\"{$row['descricao']}\"></img></a>";
		}
	}

?>