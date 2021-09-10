<?php

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$sexo = $_POST['sexo'];
$datanasc = $_POST['datanasc'];
$telefoneresid = $_POST['telefoneresid'];
$telefonecelu = $_POST['telefonecelu'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$especialidade = $_POST['especialidade'];
$crm = $_POST['crm'];
$crmest = $_POST['crmest'];

include('conexaobd.php');
require('seguranca.php');
$usuario = $logado;
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Sao_Paulo');
$hora = date('Y-m-d H:i:s');
$acao = "O médico/cpf: $nome/$cpf foi alterado no sistema.";
$sqllog = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";
mysqli_query($link, $sqllog) or die("Não foi possível armazenar no banco");

$sqlinsert = "UPDATE medico SET cpf = '$cpf', nome = '$nome', rg = '$rg', sexo = '$sexo', datanasc = '$datanasc', telefoneresid =  '$telefoneresid', telefonecelu = '$telefonecelu', email = '$email', cep = '$cep', rua = '$rua', numero = '$numero', bairro = '$bairro', complemento = '$complemento', cidade = '$cidade', estado = '$estado', especialidade = '$especialidade', crm = '$crm', crmest ='$crmest' WHERE cpf = '$cpf'";

mysqli_query($link, $sqlinsert) or die("Não foi possível salvar ao banco");

echo '<script language="javascript">';
echo 'alert("Dados Salvos Com Sucesso!!!")';
echo '</script>';

echo '<script language="javascript">';
echo 'location.href="listagem_medico.php";';
echo '</script>';

?>
