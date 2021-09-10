<?php
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data_nascimento = $_POST['data_nascimento'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$cpf_funcionario = $_POST['cpf_funcionario'];
$email = $_POST['email'];
$cargo= $_POST['cargo'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
include('conexaobd.php');
require('seguranca.php');
$usuario = $logado;
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Sao_Paulo');
$hora = date('Y-m-d H:i:s');
$acao = "O funcionário/RG: $nome/$rg foi adicionado ao sistema.";
$sqllog = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";
mysqli_query($link, $sqllog) or die("Não foi possível armazenar no banco");

$sqlinsert = "INSERT INTO funcionario (nome, sexo,  data_nascimento, rg, telefone, celular, cpf_funcionario, email,  cargo,  rua, numero, bairro, complemento, cidade, estado, cep) VALUES ('$nome', '$sexo','$data_nascimento', '$rg', '$telefone', '$celular', '$cpf_funcionario', '$email', '$cargo', '$rua', '$numero', '$bairro', '$complemento', '$cidade', '$estado','$cep')";

mysqli_query($link, $sqlinsert) or die("Não foi possível armazenar no banco");

echo '<script language="javascript">';
echo 'alert("Dados Cadastrados Com Sucesso!!!")';
echo '</script>';

echo '<script language="javascript">';
echo 'location.href="funcionario.php";';
echo '</script>';

?>
