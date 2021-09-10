<?php
$id = $_POST['id'];
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
$acao = "O funcionário/rg: $nome/$rg foi alterado no sistema.";
$sqllog = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";
mysqli_query($link, $sqllog) or die("Não foi possível armazenar no banco");

$sqlinsert = "UPDATE funcionario SET nome = '$nome', sexo = '$sexo',  data_nascimento = '$data_nascimento', rg = '$rg', telefone = '$telefone', celular = '$celular', cpf_funcionario = '$cpf_funcionario', email = '$email',  cargo = '$cargo',  rua = '$rua', numero = '$numero', bairro = '$bairro', complemento = '$complemento', cidade = '$cidade', estado = '$estado', cep = '$cep' WHERE id = '$id'";

mysqli_query($link, $sqlinsert) or die("Não foi possível salvar ao banco");

echo '<script language="javascript">';
echo 'alert("Dados Salvos Com Sucesso!!!")';
echo '</script>';

echo '<script language="javascript">';
echo 'location.href="listagem_funcionario.php";';
echo '</script>';

?>
