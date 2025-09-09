<?php
// Inicia a sessão para armazenar o estado do login
session_start();

// Inclui o arquivo de conexão com o banco de dados
require_once 'db_config.php';

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Prepara a instrução SQL para buscar o prestador pelo e-mail
    // Usando prepared statement para evitar SQL Injection
    $stmt = $conn->prepare("SELECT id, nome, senha, status FROM prestadores WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se um prestador com o e-mail fornecido foi encontrado
    if ($result->num_rows === 1) {
        $prestador = $result->fetch_assoc();

        // Usa password_verify para comparar a senha do formulário com o hash do banco de dados
        if (password_verify($senha, $prestador['senha'])) {
            // Verifica o status do prestador. Apenas prestadores 'aprovado' podem logar.
            if ($prestador['status'] == 'aprovado') {
                // Autenticação bem-sucedida. Inicia a sessão.
                $_SESSION['prestador_id'] = $prestador['id'];
                $_SESSION['prestador_nome'] = $prestador['nome'];

                // Redireciona para a página de perfil
                // header("Location: index.php?page=perfil");
                // Removido o redirecionamento, pois seu form action já aponta para 'perfil'
                // O código abaixo pode ser usado para depurar ou para uma validação mais complexa:
                // exit();
                
                // Exibe uma mensagem de sucesso
                echo "<script>alert('Login realizado com sucesso! Redirecionando...');</script>";

            } else {
                echo "<script>alert('Seu cadastro ainda não foi aprovado.');</script>";
            }
        } else {
            // Senha incorreta
            echo "<script>alert('E-mail ou senha incorretos.');</script>";
        }
    } else {
        // E-mail não encontrado
        echo "<script>alert('E-mail ou senha incorretos.');</script>";
    }

    $stmt->close();
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
    </form>
                </div>
            </div>
        </div>
    </div>
</section>