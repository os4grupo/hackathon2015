<html>
<body>

<?php
$operacao = $_POST["operacao"];

	include "conecta_mysql.inc";
	if ($operacao=="incluir")
	{
$username = $_POST["username"];
$senha = 	$_POST["senha"];
$email=     $_POST["email"];
$nome = 	$_POST["nome"];
$idade = 	$_POST["idade"];
$cidade = 	$_POST["cidade"];
$estado = 	$_POST["estado"];
$sexo =     $_POST["sexo"];
$sql = "INSERT INTO tb_user VALUES ";
$sql .= "('$username','$senha','$email',$nome,$idade,$cidade,$estado,'$sexo')";
$resultado = mysql_query ($sql); 
		echo "Cadastro feito com sucesso!";
    }
$erro=0;

if (strlen($username)<5)
{	echo "O username deve possui no mínimo 5 caracteres.<br>";   $erro=1; }

if (strlen($senha)<8)
{	echo "A senha deve possui no mínimo 8 caracteres.<br>"; $erro=1;   }

if ($username == $senha)
{	echo "O username e a senha devem ser diferentes.<br>"; $erro=1;  }

if (empty($nome) OR strstr ($nome, ' ')==FALSE)
{	echo "Favor digitar seu nome corretamente.<br>"; $erro=1; }

if (strlen($email)<8 || strstr ($email, '@')==FALSE)
{	echo "Favor digitar seu e-mail corretamente.<br>"; $erro=1; }

if (empty($cidade))
{	echo "Favor digitar sua cidade.<br>"; $erro=1; }

if (strlen($estado)!=2)
{	echo "Favor digitar seu estado corretamente.<br>"; $erro=1; }

// VERIFICA SE NAO HOUVE ERRO
if($erro==0)
{	echo "Todos os dados foram digitados corretamente!"; }
mysql_close($conexao);
?>

</body>
</html>
