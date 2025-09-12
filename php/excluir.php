<?php
session_start();
include __DIR__ . '/../config.php';
require_once '../classes/Prestador.php';

if (!isset($_SESSION['id'])) {
    header("Location: ../index.php?page=login");
    exit;
}

$prestadorObj = new Prestador($pdo);
$prestadorObj->excluir($_SESSION['id']);
session_destroy();

header("Location: ../index.php?page=cadastro&msg=Conta+excluída");
exit;
?>