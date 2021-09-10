<?php

$id = $_POST['id'];
$nome_paciente = $_POST['nome_paciente'];
$nome_medico = $_POST['nome_medico'];
$data_consulta = $_POST['data_consulta'];
$hora_inicio = $_POST['hora_inicio'];
$hora_final = $_POST['hora_final'];
$consulta = $_POST['consulta'];
$observacoes = $_POST['observacoes'];

include('conexaobd.php');
require('seguranca.php');
$usuario = $logado;
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Sao_Paulo');
$hora = date('Y-m-d H:i:s');
$acao = "O consulta de $nome_paciente com $nome_medico foi alterada no sistema.";
$sqllog = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";
mysqli_query($link, $sqllog) or die("Não foi possível armazenar no banco");


$sqlinsert = "UPDATE consulta SET nome_paciente = '$nome_paciente' , nome_medico = '$nome_medico', data_consulta = '$data_consulta', hora_inicio = '$hora_inicio', hora_final = '$hora_final', consulta = '$consulta', observacoes = '$observacoes' WHERE id = '$id'"; 

mysqli_query($link, $sqlinsert) or die("Não foi possível salvar ao banco");

echo '<script language="javascript">';
echo 'alert("Dados Salvos Com Sucesso!!!")';
echo '</script>';

echo '<script language="javascript">';
echo 'location.href="listagem_consulta.php";';
echo '</script>';

?>
