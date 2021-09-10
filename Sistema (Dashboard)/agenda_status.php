<?php
$id = $_GET['id'];
$status = $_GET['status'];
$paciente = $_GET['paciente'];
$medico = $_GET['medico'];
require('conexaobd.php');

$sqlinsert = "UPDATE consulta SET status = '$status' WHERE id = '$id'"; 
require('seguranca.php');
$usuario = $logado;
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('America/Sao_Paulo');
$hora = date('Y-m-d H:i');
$acao = "Alterou o status da consulta de $paciente com o(a) $medico";
$sqllog = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";
mysqli_query($link, $sqllog) or die("Não foi possível armazenar no banco");

mysqli_query($link, $sqlinsert) or die("Não foi possível salvar ao banco");

echo '<script language="javascript">';
echo 'location.href="agenda.php";';
echo '</script>';

?>