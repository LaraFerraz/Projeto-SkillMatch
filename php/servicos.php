<?php
require_once __DIR__ . '/../config.php';

// Buscar todos os prestadores (sem depender da tabela avaliacoes)
try {
    $stmt = $pdo->query("SELECT * FROM prestadores ORDER BY nome");
    $prestadores = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro ao buscar prestadores: " . $e->getMessage();
    exit;
}
?>
<section class="services-page py-5">
    <div class="container">
        <br><br>
        <h2 class="text-center fw-bold mb-4">Encontre o Profissional Ideal</h2>
        <p class="lead text-center mb-5">Pesquise por categoria, localidade ou palavras-chave.</p>

        <!-- Barra de busca -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="input-group search-bar">
                    <input type="text" class="form-control" placeholder="Ex: Eletricista em São Paulo..." id="searchInput">
                    <button class="btn btn-search" type="button" id="searchBtn">
                        <i class="fas fa-search"></i> Pesquisar
                    </button>
                </div>
            </div>
        </div>

        <!-- Lista de prestadores -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="prestadoresList">
            <?php if (!empty($prestadores)): ?>
                <?php foreach ($prestadores as $prestador): ?>
                    <div class="col prestador-card">
                        <div class="service-card h-100">
                            <img src="uploads/<?php echo htmlspecialchars($prestador['foto_perfil'] ?? 'placeholder.png'); ?>" 
                            alt="Foto do Prestador" 
                            class="rounded-circle" 
                            style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="service-info">
                                <h5 class="fw-bold mb-1"><?php echo htmlspecialchars($prestador['nome']); ?></h5>

                                <p class="service-type">
                                    <?php
                                    $categorias = [];
                                    if (!empty($prestador['categoria1'])) $categorias[] = $prestador['categoria1'];
                                    if (!empty($prestador['categoria2'])) $categorias[] = $prestador['categoria2'];
                                    if (!empty($prestador['categoria3'])) $categorias[] = $prestador['categoria3'];
                                    echo htmlspecialchars(implode(', ', $categorias));
                                    ?>
                                </p>

                                <p class="service-location mb-3"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($prestador['localidade']); ?></p>
                                <a href="index.php?page=detalhes-servico&id=<?php echo htmlspecialchars($prestador['id']); ?>" class="btn btn-dark-blue w-100">Ver Mais</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center">Nenhum prestador disponível no momento.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Filtro simples no front-end -->
<script>
document.getElementById('searchBtn').addEventListener('click', function() {
    const termo = document.getElementById('searchInput').value.toLowerCase();
    const cards = document.querySelectorAll('.prestador-card');

    cards.forEach(card => {
        const nome = card.querySelector('h5').textContent.toLowerCase();
        const categorias = card.querySelector('.service-type').textContent.toLowerCase();

        if (nome.includes(termo) || categorias.includes(termo)) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });
});
</script>
