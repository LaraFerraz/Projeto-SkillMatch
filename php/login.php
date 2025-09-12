<?php
session_start();
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../classes/Prestador.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $prestadorObj = new Prestador($pdo);

    // Buscar prestador pelo email
    $stmt = $pdo->prepare("SELECT * FROM prestadores WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $prestador = $stmt->fetch();

    if ($prestador && password_verify($senha, $prestador['senha'])) {
        // Login correto → salvar id na sessão
        $_SESSION['prestador_id'] = $prestador['id'];

        // Redirecionar para perfil
        header('Location: ../index.php?page=perfil');
        exit;
    } else {
        $erro = "Email ou senha incorretos!";
    }
}
?>
<section class="login-page py-5 content-top-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card p-4 login-card">
                    <br>
                    <h2 class="text-center fw-bold mb-4">Acesse sua Conta</h2>
                    <p class="text-center text-muted mb-4">Entre para gerenciar seu perfil, clientes e avaliações.</p>
                    <form action="index.php?page=perfil" method="POST">
    <div class="mb-3">
        <label for="loginEmail" class="form-label fw-bold">E-mail</label>
        <input type="email" class="form-control" id="loginEmail" name="email" required>
    </div>
    <div class="mb-3">
        <label for="loginPassword" class="form-label fw-bold">Senha</label>
        <input type="password" class="form-control" id="loginPassword" name="senha" required>
    </div>
     <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-dark-blue btn-lg">Entrar</button>
                        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</section>