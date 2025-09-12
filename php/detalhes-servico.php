

<section class="service-details-page py-5 content-top-padding">
    <div class="container">
        <br>
        <br>
        <div class="row g-4">
            <div class="col-md-8">
                <div class="details-card p-4">
                    <div class="service-header mb-4 d-flex align-items-center">
                        <img src="<?php echo htmlspecialchars($servico_detalhes['foto_perfil'] ?? 'https://via.placeholder.com/150x150.png?text=Sem+Foto'); ?>" alt="Foto do Prestador" class="rounded-circle me-3 service-provider-img">
                        <div>
                            <h2 class="fw-bold mb-0"><?php echo htmlspecialchars($servico_detalhes['prestador_nome']); ?></h2>
                            <p class="service-type lead text-muted"><?php echo htmlspecialchars($servico_detalhes['tipo_servico']); ?></p>
                            <p class="service-location"><i class="fas fa-map-marker-alt text-primary me-1"></i> <?php echo htmlspecialchars($servico_detalhes['localidade']); ?></p>
                        </div>
                    </div>

                    <div class="details-section mb-4">
                        <h4 class="fw-bold mb-3">Sobre o Serviço</h4>
                        <p><?php echo htmlspecialchars($servico_detalhes['descricao']); ?></p>
                    </div>

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

                    <div class="details-section mb-4">
                        <h4 class="fw-bold mb-3">Avaliações de Clientes</h4>
                        <?php if (count($avaliacoes) > 0): ?>
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

            <div class="col-md-4">
                <div class="details-card p-4">
                    <h4 class="fw-bold mb-3">Detalhes de Contato</h4>
                    <ul class="list-unstyled contact-list">
                        <li><i class="fas fa-phone-alt me-2 text-primary"></i> <?php echo htmlspecialchars($servico_detalhes['telefone']); ?></li>
                        <li><i class="fas fa-envelope me-2 text-primary"></i> <?php echo htmlspecialchars($servico_detalhes['email']); ?></li>
                        <li><i class="fas fa-clock me-2 text-primary"></i> <?php echo htmlspecialchars($servico_detalhes['horario']); ?></li>
                    </ul>
                </div>
                
                <div class="details-card p-4 mt-4">
    <h4 class="fw-bold mb-3">Deixe sua Avaliação</h4>
    <form action="index.php?page=avaliacao=<?php echo htmlspecialchars($servico_id); ?>" method="POST">
        <input type="hidden" name="submit_avaliacao" value="1">
        <input type="hidden" name="id_prestador" value="<?php echo htmlspecialchars($servico_id); ?>">

        <div class="mb-3">
            <label for="rating" class="form-label">Sua Avaliação (1 a 5 estrelas)</label>
            <div class="star-rating">
                <i class="far fa-star text-warning" data-rating="1"></i>
                <i class="far fa-star text-warning" data-rating="2"></i>
                <i class="far fa-star text-warning" data-rating="3"></i>
                <i class="far fa-star text-warning" data-rating="4"></i>
                <i class="far fa-star text-warning" data-rating="5"></i>
                <input type="hidden" name="rating" id="rating-input" required>
            </div>
        </div>

        <button type="submit" class="btn btn-dark-blue">Enviar Avaliação</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const starRatingContainer = document.querySelector('.star-rating');
    if (starRatingContainer) {
        const stars = starRatingContainer.querySelectorAll('i');
        const ratingInput = document.getElementById('rating-input');

        stars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = this.getAttribute('data-rating');
                ratingInput.value = rating;
                stars.forEach(s => {
                    if (s.getAttribute('data-rating') <= rating) {
                        s.classList.remove('far');
                        s.classList.add('fas');
                    } else {
                        s.classList.remove('fas');
                        s.classList.add('far');
                    }
                });
            });
        });
    }
});
</script>
