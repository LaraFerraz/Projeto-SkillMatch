<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../classes/Avaliacao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_avaliacao'])) {
    $avaliacaoObj = new Avaliacao($pdo);

    $dados = [
        'id_prestador' => $_POST['id_prestador'],
        'nota' => $_POST['rating']
    ];

    $avaliacaoObj->cadastrar($dados);

    header('Location: ../index.php?page=detalhes-servico&id=' . $_POST['id_prestador']);
    exit;
}
?>
