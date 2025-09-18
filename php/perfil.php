<?php
session_start();
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../classes/Prestador.php';

// Verifica se o usuário está logado
if (!isset($_SESSION['prestador_id'])) {
    header('Location: index.php?page=login');
    exit;
}

$prestadorObj = new Prestador($pdo);
$prestador_id = $_SESSION['prestador_id'];

// Busca os dados do prestador
$prestador_detalhes = $prestadorObj->buscarPorId($prestador_id);

// Se não encontrar o prestador, redireciona para login
if (!$prestador_detalhes) {
    session_destroy();
    header('Location: index.php?page=login');
    exit;
}

// Atualizar perfil (quando o formulário for enviado)
$sucesso = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = [
        'id' => $prestador_id,
        'nome' => $_POST['nome'] ?? ($prestador_detalhes['nome'] ?? ''),
        'email' => $_POST['email'] ?? ($prestador_detalhes['email'] ?? ''),
        'telefone' => $_POST['telefone'] ?? ($prestador_detalhes['telefone'] ?? ''),
        'localidade' => $_POST['localidade'] ?? ($prestador_detalhes['localidade'] ?? ''),
        'descricao' => $_POST['descricao'] ?? ($prestador_detalhes['descricao'] ?? ''),
        'foto_perfil' => $prestador_detalhes['foto_perfil'] ?? '',
        'tipo_servico' => $_POST['servico'] ?? ($prestador_detalhes['tipo_servico'] ?? ''),
        'categoria1' => $_POST['categoria1'] ?? ($prestador_detalhes['categoria1'] ?? ''),
        'categoria2' => $_POST['categoria2'] ?? ($prestador_detalhes['categoria2'] ?? ''),
        'categoria3' => $_POST['categoria3'] ?? ($prestador_detalhes['categoria3'] ?? ''),
        'horario' => $_POST['horario'] ?? ($prestador_detalhes['horario'] ?? ''),
    ];

    if (!empty($_POST['senha_nova'])) {
        $dados['senha'] = $_POST['senha_nova'];
    }

    $prestadorObj->atualizar($dados);

    // Atualiza os dados locais para mostrar no formulário
    $prestador_detalhes = $prestadorObj->buscarPorId($prestador_id);
    $sucesso = "Perfil atualizado com sucesso!";
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Profissional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<section class="profile-dashboard-page py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h1 class="fw-bold">Bem-vindo(a), <?php echo htmlspecialchars($prestador_detalhes['nome'] ?? ''); ?>!</h1>
            <p class="text-muted fs-5">Gerencie seu perfil, veja seu desempenho e mantenha suas informações atualizadas.</p>
        </div>

        <?php if ($sucesso): ?>
            <div class="alert alert-success text-center"><?php echo $sucesso; ?></div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-8">
                <div class="card p-4 mb-4">
                    <h3 class="fw-bold mb-4 text-center">Editar Perfil</h3>
                    <form action="" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="nome" class="form-label fw-bold">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($prestador_detalhes['nome'] ?? ''); ?>">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label fw-bold">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($prestador_detalhes['email'] ?? ''); ?>">
                            </div>
                            <div class="col-12">
                                <label for="telefone" class="form-label fw-bold">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" value="<?php echo htmlspecialchars($prestador_detalhes['telefone'] ?? ''); ?>">
                            </div>
                            <div class="col-12">
                                <label for="localidade" class="form-label fw-bold">Localidade</label>
                                <input type="text" class="form-control" id="localidade" name="localidade" value="<?php echo htmlspecialchars($prestador_detalhes['localidade'] ?? ''); ?>">
                            </div>
                            <div class="col-12">
                                <label for="descricao" class="form-label fw-bold">Descrição</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="4"><?php echo htmlspecialchars($prestador_detalhes['descricao'] ?? ''); ?></textarea>
                            </div>
                            <div class="col-12">
                                <label for="servico" class="form-label fw-bold">Tipo de Serviço</label>
                                <input type="text" class="form-control" id="servico" name="servico" value="<?php echo htmlspecialchars($prestador_detalhes['tipo_servico'] ?? ''); ?>">
                            </div>
                            <div class="col-12">
                                <label for="categoria1" class="form-label fw-bold">Categoria 1</label>
                                <input type="text" class="form-control" id="categoria1" name="categoria1" value="<?php echo htmlspecialchars($prestador_detalhes['categoria1'] ?? ''); ?>">
                            </div>
                            <div class="col-12">
                                <label for="categoria2" class="form-label fw-bold">Categoria 2</label>
                                <input type="text" class="form-control" id="categoria2" name="categoria2" value="<?php echo htmlspecialchars($prestador_detalhes['categoria2'] ?? ''); ?>">
                            </div>
                            <div class="col-12">
                                <label for="categoria3" class="form-label fw-bold">Categoria 3</label>
                                <input type="text" class="form-control" id="categoria3" name="categoria3" value="<?php echo htmlspecialchars($prestador_detalhes['categoria3'] ?? ''); ?>">
                            </div>
                            <div class="col-12">
                                <label for="horario" class="form-label fw-bold">Horário</label>
                                <input type="text" class="form-control" id="horario" name="horario" value="<?php echo htmlspecialchars($prestador_detalhes['horario'] ?? ''); ?>">
                            </div>
                            <div class="col-12">
                                <label for="senha_nova" class="form-label fw-bold">Nova Senha</label>
                                <input type="password" class="form-control" id="senha_nova" name="senha_nova">
                            </div>
                            <div class="col-12 d-grid mt-3">
                                <button type="submit" class="btn btn-primary btn-lg">Salvar Alterações</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

       <div class="col-lg-4">
    <div class="card p-4 mb-4 text-center">
        <h5 class="fw-bold mb-3">Foto Perfil</h5>
        <img src="uploads/<?php echo htmlspecialchars($prestador_detalhes['foto_perfil'] ?? 'placeholder.png'); ?>" 
             alt="Foto do Prestador" 
             class="img-fluid rounded-circle"
             style="width: 150px; height: 150px; object-fit: cover;">

    </div>
</div>
    </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
