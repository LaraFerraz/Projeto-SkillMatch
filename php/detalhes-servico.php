
<?php
// Simula a busca de dados de um fornecedor
$id = isset($_GET['id']) ? $_GET['id'] : null;
$fornecedor = [
    1 => [
        'nome' => 'João da Silva',
        'servico' => 'Eletricista Residencial',
        'localidade' => 'São Paulo, SP',
        'foto' => 'https://via.placeholder.com/400x400.png?text=Joao+da+Silva',
        'avaliacao' => 4.5,
        'bio' => 'Eletricista com mais de 10 anos de experiência em instalações, reparos e manutenção. Trabalho com segurança e garantia. Atendo a região metropolitana de São Paulo. Entre em contato para um orçamento gratuito!',
        'contato' => [
            'telefone' => '(11) 98765-4321',
            'email' => 'joao.eletricista@email.com'
        ],
        'horario' => 'Segunda a Sexta, das 8h às 18h',
        'servicos_oferecidos' => [
            'Instalação de tomadas e interruptores',
            'Manutenção elétrica preventiva',
            'Troca de fiação',
            'Instalação de luminárias e ventiladores'
        ]
    ],
    2 => [
        'nome' => 'Maria Rodrigues',
        'servico' => 'Design Gráfico',
        'localidade' => 'Rio de Janeiro, RJ',
        'foto' => 'https://via.placeholder.com/400x400.png?text=Maria+Rodrigues',
        'avaliacao' => 5.0,
        'bio' => 'Designer gráfica criativa e dedicada, com foco em identidade visual e design de materiais para redes sociais. Meu objetivo é transformar sua marca em uma experiência visual inesquecível. Vamos criar algo incrível juntos?',
        'contato' => [
            'telefone' => '(21) 99876-5432',
            'email' => 'maria.designer@email.com'
        ],
        'horario' => 'Segunda a Sábado, das 9h às 19h',
        'servicos_oferecidos' => [
            'Criação de logotipos e identidade visual',
            'Design para mídias sociais',
            'Elaboração de catálogos e flyers',
            'Edição de imagens'
        ]
    ],
    3 => [
        'nome' => 'Carlos Pimentel',
        'servico' => 'Desenvolvedor Web',
        'localidade' => 'Belo Horizonte, MG',
        'foto' => 'https://via.placeholder.com/400x400.png?text=Carlos+Pimentel',
        'avaliacao' => 3.0,
        'bio' => 'Desenvolvedor focado em back-end, mas com conhecimento em front-end. Ajudo a construir sites e aplicações web robustas e funcionais. Entre em contato para discutirmos seu projeto.',
        'contato' => [
            'telefone' => '(31) 97654-3210',
            'email' => 'carlos.dev@email.com'
        ],
        'horario' => 'Segunda a Sexta, das 9h às 17h',
        'servicos_oferecidos' => [
            'Desenvolvimento de sites institucionais',
            'Criação de e-commerce',
            'Manutenção de sistemas web',
            'Integração com APIs'
        ]
    ]
];

$fornecedor_atual = $fornecedor[$id] ?? $fornecedor[1];
$avaliacao_int = floor($fornecedor_atual['avaliacao']);
$has_half_star = ($fornecedor_atual['avaliacao'] - $avaliacao_int) > 0;
?>

<section class="provider-details-page py-5 content-top-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="<?php echo $fornecedor_atual['foto']; ?>" class="profile-img mb-3" alt="Foto de Perfil">
                <h3 class="fw-bold mb-1"><?php echo $fornecedor_atual['nome']; ?></h3>
                <p class="text-muted"><?php echo $fornecedor_atual['servico']; ?></p>
                <div class="rating mb-3">
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        if ($i < $avaliacao_int) {
                            echo '<i class="fas fa-star text-warning"></i>';
                        } else if ($has_half_star && $i == $avaliacao_int) {
                            echo '<i class="fas fa-star-half-alt text-warning"></i>';
                        } else {
                            echo '<i class="far fa-star text-warning"></i>';
                        }
                    }
                    ?>
                    <span class="ms-2 text-muted">(<?php echo number_format($fornecedor_atual['avaliacao'], 1); ?>)</span>
                </div>
                <div class="contact-info">
                    <p><i class="fas fa-phone-alt me-2 text-primary"></i> <?php echo $fornecedor_atual['contato']['telefone']; ?></p>
                    <p><i class="fas fa-envelope me-2 text-primary"></i> <?php echo $fornecedor_atual['contato']['email']; ?></p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="details-section mb-4">
                    <h4 class="fw-bold mb-3">Sobre o Profissional</h4>
                    <p><?php echo $fornecedor_atual['bio']; ?></p>
                </div>

                <div class="details-section mb-4">
                    <h4 class="fw-bold mb-3">Serviços Oferecidos</h4>
                    <ul class="list-unstyled service-list">
                        <?php foreach ($fornecedor_atual['servicos_oferecidos'] as $servico) : ?>
                            <li class="mb-2"><i class="fas fa-check-circle me-2 text-success"></i> <?php echo $servico; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="details-section mb-4">
                    <h4 class="fw-bold mb-3">Horário de Trabalho</h4>
                    <p><i class="fas fa-clock me-2 text-primary"></i> <?php echo $fornecedor_atual['horario']; ?></p>
                </div>

                <div class="details-section review-form-section">
                    <h4 class="fw-bold mb-3">Deixe sua Avaliação</h4>
                    <form>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Sua Avaliação (1 a 5 estrelas)</label>
                            <div class="star-rating">
                                <i class="far fa-star text-warning" data-rating="1"></i>
                                <i class="far fa-star text-warning" data-rating="2"></i>
                                <i class="far fa-star text-warning" data-rating="3"></i>
                                <i class="far fa-star text-warning" data-rating="4"></i>
                                <i class="far fa-star text-warning" data-rating="5"></i>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="reviewComment" class="form-label">Comentário (opcional)</label>
                            <textarea class="form-control" id="reviewComment" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark-blue">Enviar Avaliação</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>