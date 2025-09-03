<section class="login-page py-5 content-top-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card p-4 login-card">
                    <h2 class="text-center fw-bold mb-4">Acesse sua Conta</h2>
                    <p class="text-center text-muted mb-4">Entre para gerenciar seu perfil, clientes e avaliações.</p>
                    <form action="index.php?page=perfil" method="POST">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label fw-bold">E-mail</label>
                            <input type="email" class="form-control" id="loginEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label fw-bold">Senha</label>
                            <input type="password" class="form-control" id="loginPassword" required>
                        </div>
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-dark-blue btn-lg">Entrar</button>
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="text-secondary-highlight text-decoration-none">Esqueceu sua senha?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>