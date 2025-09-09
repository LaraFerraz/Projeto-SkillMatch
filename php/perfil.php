<?php
// Inicia a sessão para acessar os dados do usuário logado
session_start();

// Inclui o arquivo de conexão
require_once 'db_config.php';

// Verifica se o usuário está logado. Se não, redireciona para a página de login.
if (!isset($_SESSION['prestador_id'])) {
    header("Location: index.php?page=login");
    exit();
}

// Obtém o ID do prestador da sessão
$prestador_id = $_SESSION['prestador_id'];

// Lógica para atualização dos dados do perfil quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_profile'])) {
    // Coleta os dados do formulário
    $nome = $_POST['profileName'];
    $email = $_POST['profileEmail'];
    $telefone = $_POST['profileTel'];
    $localidade = $_POST['profileLocation'];
    $descricao = $_POST['profileBio'];
    $servico = $_POST['profileServiceType'];
    $horario = $_POST['profileHours'];
    
    // As categorias são opcionais, então vamos checar se foram enviadas
    $categoria1 = isset($_POST['profileCat1']) ? $_POST['profileCat1'] : null;
    $categoria2 = isset($_POST['profileCat2']) ? $_POST['profileCat2'] : null;
    $categoria3 = isset($_POST['profileCat3']) ? $_POST['profileCat3'] : null;

    // Lógica para lidar com o upload de uma nova foto de perfil
    $foto_perfil = $prestador['foto_perfil'] ?? null;
    if (isset($_FILES['profilePhoto']) && $_FILES['profilePhoto']['error'] == 0) {
        $upload_dir = 'uploads/fotos_perfil/';
        $file_name = uniqid() . '_' . basename($_FILES['profilePhoto']['name']);
        $file_path = $upload_dir . $file_name;
        
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        if (move_uploaded_file($_FILES['profilePhoto']['tmp_name'], $file_path)) {
            $foto_perfil = $file_path;
        } else {
            echo "<script>alert('Erro ao fazer upload da foto.');</script>";
        }
    }

    // Prepara a instrução SQL com prepared statements para atualização
    $stmt = $conn->prepare("UPDATE prestadores SET nome = ?, email = ?, telefone = ?, localidade = ?, descricao = ?, tipo_servico = ?, horario = ?, categoria1 = ?, categoria2 = ?, categoria3 = ?, foto_perfil = ? WHERE id = ?");
    
    if ($stmt) {
        // Vincula os parâmetros à instrução
        $stmt->bind_param("sssssssssssi", $nome, $email, $telefone, $localidade, $descricao, $servico, $horario, $categoria1, $categoria2, $categoria3, $foto_perfil, $prestador_id);
        
        if ($stmt->execute()) {
            echo "<script>alert('Perfil atualizado com sucesso!');</script>";
            $_SESSION['prestador_nome'] = $nome;
        } else {
            echo "<script>alert('Erro ao atualizar o perfil: " . $stmt->error . "');</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Erro na preparação da consulta: " . $conn->error . "');</script>";
    }
}

// Busca os dados do prestador no banco de dados para preencher o formulário
$stmt = $conn->prepare("SELECT * FROM prestadores WHERE id = ?");
$stmt->bind_param("i", $prestador_id);
$stmt->execute();
$result = $stmt->get_result();
$prestador = $result->fetch_assoc();
$stmt->close();
?>

<section class="profile-page py-5 content-top-padding">
    <div class="container">
        <br>
        <br>
        <h2 class="text-center fw-bold mb-4">Bem-vindo(a), <?php echo htmlspecialchars($prestador['nome'] ?? '[Nome do Profissional]'); ?>!</h2>
        <p class="lead text-center mb-5">Gerencie seu perfil, veja suas avaliações e expanda seu negócio com nossas dicas exclusivas.</p>

        <div class="row g-4">
            <div class="col-md-5">
                <div class="profile-card p-4 h-100">
                    <h4 class="fw-bold mb-3"><i class="fas fa-user-circle text-primary me-2"></i> Meu Perfil</h4>
                    <form action="index.php?page=perfil" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="update_profile" value="1">
                        
                        <div class="mb-3">
                            <label for="profilePhoto" class="form-label fw-bold">Foto de Perfil</label>
                            <input type="file" class="form-control" id="profilePhoto" name="profilePhoto">
                        </div>
                        <div class="mb-3">
                            <label for="profileName" class="form-label fw-bold">Nome Completo</label>
                            <input type="text" class="form-control" id="profileName" name="profileName" value="<?php echo htmlspecialchars($prestador['nome'] ?? ''); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileEmail" class="form-label fw-bold">E-mail</label>
                            <input type="email" class="form-control" id="profileEmail" name="profileEmail" value="<?php echo htmlspecialchars($prestador['email'] ?? ''); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileTel" class="form-label fw-bold">Telefone</label>
                            <input type="tel" class="form-control" id="profileTel" name