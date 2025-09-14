<?php
require_once __DIR__ . '/../config.php';

// Pegar ID do prestador e validar
$servico_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($servico_id <= 0) {
    echo "Prestador inválido.";
    exit;
}

// Buscar detalhes do prestador
try {
    $stmt = $pdo->prepare("SELECT * FROM prestadores WHERE id = :id");
    $stmt->execute([':id' => $servico_id]);
    $servico_detalhes = $stmt->fetch();

    if (!$servico_detalhes) {
        echo "Prestador não encontrado.";
        exit;
    }
} catch (PDOException $e) {
    echo "Erro ao buscar prestador: " . $e->getMessage();
    exit;
}

// Buscar avaliações (opcional)
try {
    $stmt2 = $pdo->prepare("SELECT * FROM avaliacoes WHERE id_prestador = :id");
    $stmt2->execute([':id' => $servico_id]);
    $avaliacoes = $stmt2->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Se tabela ainda não existir ou estiver vazia, usar array vazio
    $avaliacoes = [];
}
?>

<section class="service-details-page py-5 content-top-padding">
    <div class="container">
        <br><br>
        <div class="row g-4">
            <!-- Coluna principal -->
            <div class="col-md-8">
                <div class="details-card p-4">
                    <div class="service-header mb-4 d-flex align-items-center">
                       <img src="uploads/<?php echo htmlspecialchars($servico_detalhes['foto_perfil'] ?? 'placeholder.png'); ?>" 
                        alt="Foto do Prestador" 
                        class="rounded-circle" 
                        style="width: 150px; height: 150px; object-fit: cover;">
                        
                        
                        <div>
                            <h2 class="fw-bold mb-0"><?php echo htmlspecialchars($servico_detalhes['nome']); ?></h2>
                            <p class="service-type lead text-muted"><?php echo htmlspecialchars($servico_detalhes['tipo_servico']); ?></p>
                            <p class="service-location"><i class="fas fa-map-marker-alt text-primary me-1"></i> <?php echo htmlspecialchars($servico_detalhes['localidade']); ?></p>
                        </div>
                    </div>

                    <!-- Sobre o serviço -->
                    <div class="details-section mb-4">
                        <h4 class="fw-bold mb-3">Sobre o Serviço</h4>
                        <p><?php echo htmlspecialchars($servico_detalhes['descricao']); ?></p>
                    </div>

                    <!-- Serviços/Categorias -->
                    <div class="details-section mb-4">
                        <h4 class="fw-bold mb-3">Serviços Oferecidos</h4>
                        <ul class="list-unstyled">
                            <?php
                            $categorias = [$servico_detalhes['categoria1'], $servico_detalhes['categoria2'], $servico_detalhes['categoria3']];
                            foreach ($categorias as $categoria):
                                if (!empty($categoria)): ?>
                                    <li class="d-flex align-items-center mb-2"><i class="fas fa-check-circle me-2 text-primary"></i> <?php echo htmlspecialchars($categoria); ?></li>
                                <?php endif;
                            endforeach; ?>
                        </ul>
                    </div>

                    <!-- Avaliações -->
                    <div class="details-section mb-4">
                        <h4 class="fw-bold mb-3">Avaliações de Clientes</h4>
                        <?php if (!empty($avaliacoes)): ?>
                            <?php foreach ($avaliacoes as $avaliacao): ?>
                                <div class="review-item mb-3 p-3 border rounded">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h6 class="mb-0 fw-bold"><?php echo htmlspecialchars($avaliacao['nome_cliente']); ?></h6>
                                        <div class="rating-stars">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <?php if ($i <= $avaliacao['nota']): ?>
                                                    <i class="fas fa-star text-warning"></i>
                                                <?php else: ?>
                                                    <i class="far fa-star text-warning"></i>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                    <p class="mb-0"><?php echo htmlspecialchars($avaliacao['comentario']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="text-muted">Nenhuma avaliação ainda. Seja o primeiro a avaliar!</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Coluna lateral -->
            <div class="col-md-4">
                <!-- Contato -->
                <div class="details-card p-4">
                    <h4 class="fw-bold mb-3">Detalhes de Contato</h4>
                    <ul class="list-unstyled contact-list">
                        <li><i class="fas fa-phone-alt me-2 text-primary"></i> <?php echo htmlspecialchars($servico_detalhes['telefone']); ?></li>
                        <li><i class="fas fa-envelope me-2 text-primary"></i> <?php echo htmlspecialchars($servico_detalhes['email']); ?></li>
                        <li><i class="fas fa-clock me-2 text-primary"></i> <?php echo htmlspecialchars($servico_detalhes['horario']); ?></li>
                    </ul>
                </div>

                <!--
