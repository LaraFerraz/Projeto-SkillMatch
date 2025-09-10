
<section class="services-page py-5">
    <div class="container">
        <br>
        <br>
        <h2 class="text-center fw-bold mb-4">Encontre o Profissional Ideal</h2>
        <p class="lead text-center mb-5">Pesquise por categoria, localidade ou palavras-chave e veja as avaliações dos melhores fornecedores.</p>

        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="input-group search-bar">
                    <input type="text" class="form-control" placeholder="Ex: Eletricista em São Paulo...">
                    <button class="btn btn-search" type="button">
                        <i class="fas fa-search"></i> Pesquisar
                    </button>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($servicos as $servico): ?>
            <div class="col">
                <div class="service-card h-100">
                    <img src="<?php echo htmlspecialchars($servico['foto_perfil'] ?? 'https://via.placeholder.com/150x150.png?text=Sem+Foto'); ?>" class="service-img" alt="Foto Fornecedor">
                    <div class="service-info">
                        <h5 class="fw-bold mb-1"><?php echo htmlspecialchars($servico['prestador_nome']); ?></h5>
                        <p class="service-type"><?php echo htmlspecialchars($servico['titulo']); ?></p>
                        <div class="rating mb-2">
                            <?php
                            $rating = round($servico['media_avaliacao'] ?? 0);
                            for ($i = 1; $i <= 5; $i++):
                                if ($i <= $rating): ?>
                                    <i class="fas fa-star text-warning"></i>
                                <?php else: ?>
                                    <i class="far fa-star text-warning"></i>
                                <?php endif;
                            endfor;
                            ?>
                            <span class="ms-2 text-muted">(<?php echo number_format($servico['media_avaliacao'] ?? 0, 1); ?>)</span>
                        </div>
                        <p class="service-location mb-3"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($servico['localidade']); ?></p>
                        <a href="index.php?page=detalhes-servico&id=<?php echo htmlspecialchars($servico['id']); ?>" class="btn btn-dark-blue w-100">Ver Mais</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>