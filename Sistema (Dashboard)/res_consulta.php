<?php
$nome_paciente = $_POST['nome_paciente'];
$nome_medico = $_POST['nome_medico'];
$data_consulta = $_POST['data_consulta'];
$hora_inicio = $_POST['hora_inicio'];
$hora_final = $_POST['hora_final'];
$consulta = $_POST['consulta'];
$observacoes = $_POST['observacoes'];
$status = 'Marcada - Aguardando';

include('conexaobd.php');

require('seguranca.php');
$usuario = $logado;
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Sao_Paulo');
$hora = date('Y-m-d H:i:s');
$acao = "Marcou consulta de $nome_paciente com o medico(a) $nome_medico";
$sqllog = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";
mysqli_query($link, $sqllog) or die("Não foi possível armazenar no banco");

$sqlinsert = "INSERT INTO consulta ( nome_paciente, nome_medico, data_consulta, hora_inicio, hora_final, consulta, observacoes, status) VALUES ( '$nome_paciente', '$nome_medico', '$data_consulta', '$hora_inicio', '$hora_final', '$consulta', '$observacoes', '$status')";

mysqli_query($link, $sqlinsert) or die("Não foi possível armazenar no banco");


echo '<script language="javascript">';
echo 'alert("Dados Cadastrados Com Sucesso!!!")';
echo '</script>';

echo '<script language="javascript">';
echo 'location.href="consulta.php";';
echo '</script>';

?>
