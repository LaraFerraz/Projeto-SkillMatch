<?php
session_start();
require_once "config.php";

if (!isset($_SESSION['prestador_id'])) {
    header("Location: login.php");
    exit;
}

$db = new Database();
$conn = $db->getConnection();

// Buscar dados do prestador
$stmt = $conn->prepare("SELECT * FROM prestadores WHERE id = :id");
$stmt->execute([':id' => $_SESSION['prestador_id']]);
$prestador = $stmt->fetch(PDO::FETCH_ASSOC);

// Atualizar perfil
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $tipo_servico = $_POST['servico'];
    $categoria1 = $_POST['categoria1'];
    $categoria2 = $_POST['categoria2'] ?? null;
    $categoria3 = $_POST['categoria3'] ?? null;
    $localidade = $_POST['localidade'];
    $descricao = $_POST['descricao'];
    $horario = $_POST['horario'];

    $senha = $prestador['senha'];
    if (!empty($_POST['senha_nova'])) {
        $senha = password_hash($_POST['senha_nova'], PASSWORD_DEFAULT);
    }

    // Upload da foto
    $foto_perfil = $prestador['foto_perfil'];
    if (!empty($_FILES['foto']['name'])) {
        $foto_nome = time() . "_" . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/" . $foto_nome);
        $foto_perfil = "uploads/" . $foto_nome;
    }

    $stmt = $conn->prepare("UPDATE prestadores SET nome=:nome,email=:email,telefone=:telefone,
        tipo_servico=:tipo_servico,categoria1=:categoria1,categoria2=:categoria2,categoria3=:categoria3,
        localidade=:localidade,descricao=:descricao,horario=:horario,senha=:senha,foto_perfil=:foto_perfil
        WHERE id=:id");
    $stmt->execute([
        ':nome'=>$nome, ':email'=>$email, ':telefone'=>$telefone, ':tipo_servico'=>$tipo_servico,
        ':categoria1'=>$categoria1, ':categoria2'=>$categoria2, ':categoria3'=>$categoria3,
        ':localidade'=>$localidade, ':descricao'=>$descricao, ':horario'=>$horario,
        ':senha'=>$senha, ':foto_perfil'=>$foto_perfil, ':id'=>$_SESSION['prestador_id']
    ]);

    header("Location: painel.php");
    exit;
}

// Buscar avaliações
$stmt = $conn->prepare("SELECT * FROM avaliacoes WHERE prestador_id=:id");
$stmt->execute([':id' => $_SESSION['prestador_id']]);
$avaliacoes = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Calcular nota média
$nota_media = 0;
if (count($avaliacoes) > 0) {
    $soma = array_sum(array_column($avaliacoes, 'nota'));
    $nota_media = round($soma / count($avaliacoes), 1);
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
    <style>
        /* Estilos personalizados (opcional) */
        body {
            background-color: #f8f9fa;
        }
        .profile-dashboard-page .card {
            margin-bottom: 1.5rem;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        .content-top-padding {
            padding-top: 2rem; /* Ajuste o padding conforme necessário */
        }
        .btn-dark-blue {
            background-color: #0d6efd; /* Cor primária do Bootstrap como exemplo */
            color: white;
        }
        .btn-dark-blue:hover {
            background-color: #0b5ed7;
            color: white;
        }
        .rating-stars {
            color: #ffc107; /* Cor de estrela (amarelo) */
        }
    </style>
</head>
<body>

<section class="profile-dashboard-page py-5 content-top-padding">
    <div class="container">

        <div class="text-center mb-5">
            <h1 class="fw-bold">Bem-vindo(a), [Nome do Profissional]!</h1>
            <p class="text-muted fs-5">Gerencie seu perfil, veja seu desempenho e encontre dicas para crescer.</p>
        </div>

        <div class="row">
            <div class="col-lg-8">

                <h2 class="mb-4 fw-bold">Visão Geral do Perfil</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card text-center p-3 h-100">
                            <div class="card-body">
                                <i class="bi bi-eye-fill fs-1 text-primary"></i>
                                <h5 class="card-title mt-3">Visualizações</h5>
                                <p class="fs-2 fw-bold mb-0">1.450</p>
                                <small class="text-muted">Nos últimos 30 dias</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card text-center p-3 h-100">
                            <div class="card-body">
                                <i class="bi bi-cursor-fill fs-1 text-success"></i>
                                <h5 class="card-title mt-3">Cliques no Contato</h5>
                                <p class="fs-2 fw-bold mb-0">215</p>
                                <small class="text-muted">Nos últimos 30 dias</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card text-center p-3 h-100">
                            <div class="card-body">
                                <i class="bi bi-search fs-1 text-info"></i>
                                <h5 class="card-title mt-3">Aparições na Busca</h5>
                                <p class="fs-2 fw-bold mb-0">3.200</p>
                                <small class="text-muted">Nos últimos 30 dias</small>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mb-4 fw-bold mt-4">Meu Perfil</h2>
                <div class="card p-4 profile-card">
                    <h3 class="text-center fw-bold mb-4">Editar Perfil</h3>
                    <p class="text-center text-muted mb-4">Atualize suas informações para manter seu perfil sempre em dia!</p>
                    <form action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="nome" class="form-label fw-bold">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="Nome do Prestador">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label fw-bold">Endereço de E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" value="email@prestador.com">
                            </div>
                            <div class="col-12">
                                <label for="telefone" class="form-label fw-bold">Número de Telefone</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" value="(11) 98765-4321">
                            </div>
                            <div class="col-12">
                                <label for="cpf" class="form-label fw-bold">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" value="000.000.000-00" readonly>
                            </div>
                            <div class="col-12">
                                <label for="foto" class="form-label fw-bold">Foto de Perfil</label>
                                <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
                                <div class="form-text">Envie uma nova foto para substituir a atual.</div>
                            </div>
                            <div class="col-12">
                                <label for="servico" class="form-label fw-bold">Tipo de Serviço</label>
                                <input type="text" class="form-control" id="servico" name="servico" placeholder="Ex: Eletricista, Design Gráfico..." value="Eletricista">
                            </div>
                            <div class="col-12">
                                <label for="categoria1" class="form-label fw-bold">Categoria de Serviço 1</label>
                                <select class="form-select" id="categoria1" name="categoria1">
                                    <option value="eletricista" selected>Eletricista</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="categoria2" class="form-label fw-bold">Categoria de Serviço 2</label>
                                <select class="form-select" id="categoria2" name="categoria2">
                                    <option selected disabled value="">Selecione uma categoria...</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="categoria3" class="form-label fw-bold">Categoria de Serviço 3</label>
                                <select class="form-select" id="categoria3" name="categoria3">
                                    <option selected disabled value="">Selecione uma categoria...</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="localidade" class="form-label fw-bold">Localidade (Cidade/Estado)</label>
                                <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Ex: Campo Mourão, PR" value="Campo Mourão, PR">
                            </div>
                            <div class="col-12">
                                <label for="descricao" class="form-label fw-bold">Descrição dos Serviços</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="4" placeholder="Descreva sua experiência, diferenciais e os serviços que oferece em detalhes.">Descrição atual do prestador...</textarea>
                            </div>
                            <div class="col-12">
                                <label for="horario" class="form-label fw-bold">Horário de Trabalho</label>
                                <input type="text" class="form-control" id="horario" name="horario" placeholder="Ex: Seg. a Sex. das 08h às 18h" value="Seg. a Sex. das 08h às 18h">
                            </div>
                            <div class="col-12">
                                <label for="senha_nova" class="form-label fw-bold">Nova Senha (opcional)</label>
                                <input type="password" class="form-control" id="senha_nova" name="senha_nova">
                                <div class="form-text">Deixe em branco para manter a senha atual.</div>
                            </div>
                            <div class="col-12">
                                <label for="confirmar_nova_senha" class="form-label fw-bold">Confirme a Nova Senha</label>
                                <input type="password" class="form-control" id="confirmar_nova_senha" name="confirmar_nova_senha">
                            </div>
                            <div class="col-12 d-grid mt-4">
                                <button type="submit" class="btn btn-dark-blue btn-lg">Salvar Alterações</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <h2 class="mb-4 fw-bold">Minhas Avaliações</h2>
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nota Geral</h5>
                        <p class="display-4 fw-bold">4.8</p>
                        <div class="rating-stars fs-4">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <small class="text-muted">Baseado em 42 avaliações</small>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12">
                 <h2 class="mb-4 fw-bold">Gerenciamento da Conta</h2>
                 <div class="card p-4 border-danger">
                     <div class="d-flex justify-content-between align-items-center">
                         <div>
                             <h5 class="fw-bold">Excluir Perfil</h5>
                             <p class="mb-0 text-muted">Esta ação é permanente e não pode ser desfeita. Todos os seus dados serão removidos.</p>
                         </div>
                         <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                             Excluir Conta
                         </button>
                     </div>
                 </div>
            </div>
        </div>

    </div>
</section>

<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir sua conta? Esta ação é irreversível e todos os seus dados e perfil serão permanentemente removidos.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="/caminho-para-excluir-conta" method="POST">
                    <button type="submit" class="btn btn-danger">Sim, Excluir Minha Conta</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>