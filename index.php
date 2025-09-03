<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillMatch - Encontre o profissional certo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand me-4" href="index.php?page=home">SkillMatch</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=home">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#como-funciona">Como Funciona</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=contato">Contato</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="#" class="btn btn-login me-2">
                    <i class="fa-solid fa-right-to-bracket me-2"></i>Login
                </a>
                <a href="#" class="btn btn-cadastro">
                    <i class="fa-solid fa-user-plus me-2"></i>Cadastro
                </a>
            </div>
        </div>
    </div>
</nav>

<main>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    // O caminho deve ser relativo à raiz do seu projeto
    $filePath = 'php/' . $page . '.php';

    if (file_exists($filePath)) {
        include $filePath;
    } else {
        // Se a página não existir, volta para a home
        include 'php/home.php';
    }
    ?>
</main>

<footer class="text-white pt-5 pb-3">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <h5 class="mb-3">SkillMatch</h5>
                <p>Conectamos você aos melhores profissionais. Qualidade, confiança e praticidade em uma só plataforma.</p>
                <div class="d-flex social-icons mt-3">
                    <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <h5 class="mb-3">Links Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Sobre Nós</a></li>
                    <li><a href="#como-funciona" class="text-white text-decoration-none">Como Funciona</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Seja um Profissional</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Central de Ajuda</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5 class="mb-3">Legal</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Política de Privacidade</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Termos de Uso</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Política de Cookies</a></li>
                    <li><a href="#" class="text-white text-decoration-none">LGPD</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5 class="mb-3">Contato</h5>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-2"><i class="fas fa-envelope me-2"></i> contato@skillmatch.com</li>
                    <li class="d-flex align-items-center mb-2"><i class="fas fa-phone-alt me-2"></i> (11) 9 9999-9999</li>
                    <li class="d-flex align-items-center"><i class="fas fa-map-marker-alt me-2"></i> São Paulo, SP Brasil</li>
                </ul>
            </div>
        </div>
        <hr class="footer-hr">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <p class="mb-0">&copy; 2025 SkillMatch. Todos os direitos reservados.</p>
            <p class="mb-0">Feito com <i class="fa-solid fa-heart text-danger"></i> no Brasil</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>