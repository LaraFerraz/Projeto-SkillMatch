<section class="profile-page py-5 content-top-padding">
    <div class="container">
        <br>
        <br>
        <h2 class="text-center fw-bold mb-4">Bem-vindo(a), [Nome do Profissional]!</h2>
        <p class="lead text-center mb-5">Gerencie seu perfil, veja suas avaliações e expanda seu negócio com nossas dicas exclusivas.</p>

        <div class="row g-4">
            <div class="col-md-5">
                <div class="profile-card p-4 h-100">
                    <h4 class="fw-bold mb-3"><i class="fas fa-user-circle text-primary me-2"></i> Meu Perfil</h4>
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="profileName" class="form-label fw-bold">Nome Completo</label>
                            <input type="text" class="form-control" id="profileName" value="João da Silva" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileEmail" class="form-label fw-bold">E-mail</label>
                            <input type="email" class="form-control" id="profileEmail" value="joao.eletricista@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileTel" class="form-label fw-bold">Telefone</label>
                            <input type="tel" class="form-control" id="profileTel" value="(11) 98765-4321" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileServico" class="form-label fw-bold">Tipo de Serviço</label>
                            <input type="text" class="form-control" id="profileServico" value="Eletricista Residencial e Comercial" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileCategoria1" class="form-label fw-bold">Categoria de Serviço 1</label>
                            <select class="form-select" id="profileCategoria1" name="categoria1" required>
                                <option selected disabled value="">Selecione uma categoria...</option>
                                <optgroup label="Beleza e Estética">
                                    <option value="cabeleireiro">Cabeleireiro</option>
                                    <option value="manicure">Manicure/Pedicure</option>
                                    <option value="depilador">Depilador</option>
                                    <option value="maquiador">Maquiador</option>
                                    <option value="esteticista_animal">Esteticista de Animais</option>
                                    <option value="podologo">Podólogo</option>
                                    <option value="massagista">Massagista</option>
                                    <option value="tatuador">Tatuador</option>
                                </optgroup>
                                <optgroup label="Reforma e Manutenção">
                                    <option value="pintor">Pintor</option>
                                    <option value="eletricista" selected>Eletricista</option>
                                    <option value="encanador">Encanador</option>
                                    <option value="jardineiro">Jardineiro</option>
                                    <option value="pedreiro">Pedreiro</option>
                                    <option value="marceneiro">Marceneiro</option>
                                    <option value="vidraceiro">Vidraceiro</option>
                                    <option value="instalador_antena">Instalador de Antenas</option>
                                    <option value="chaveiro">Chaveiro</option>
                                    <option value="diarista">Diarista</option>
                                    <option value="lavadeiro">Lavadeiro de Roupas</option>
                                </optgroup>
                                <optgroup label="Alimentação">
                                    <option value="padeiro">Padeiro</option>
                                    <option value="cozinheiro">Cozinheiro</option>
                                    <option value="salgadeiro">Salgadeiro</option>
                                </optgroup>
                                <optgroup label="Eventos e Festas">
                                    <option value="animador_festas">Animador de Festas</option>
                                    <option value="organizador_eventos">Organizador de Eventos</option>
                                    <option value="cerimonialista">Cerimonialista</option>
                                    <option value="musico">Músico</option>
                                    <option value="dj">DJ/VJ</option>
                                </optgroup>
                                <optgroup label="Tecnologia e Design">
                                    <option value="programador">Programador</option>
                                    <option value="tecnico_ti">Técnico de Manutenção de Computadores</option>
                                    <option value="webdesigner">Webdesigner</option>
                                    <option value="editor_video">Editor de Vídeo</option>
                                    <option value="fotografo">Fotógrafo</option>
                                    <option value="designer_interiores">Designer de Interiores</option>
                                </optgroup>
                                <optgroup label="Educação e Treinamento">
                                    <option value="instrutor">Instrutor de Cursos Livres</option>
                                    <option value="professor">Professor Particular</option>
                                    <option value="treinador_esportes">Treinador de Esportes</option>
                                </optgroup>
                                <optgroup label="Negócios">
                                    <option value="digitador">Digitador</option>
                                    <option value="promotor_vendas">Promotor de Vendas</option>
                                    <option value="secretaria">Secretária Remota/Assistente Administrativo</option>
                                    <option value="comerciante">Comerciante de Artigos</option>
                                </optgroup>
                                <optgroup label="Outros">
                                    <option value="motorista">Motorista de Aplicativo</option>
                                    <option value="guia_turismo">Guia de Turismo</option>
                                    <option value="artesao">Artesão</option>
                                    <option value="costureiro">Costureiro</option>
                                    <option value="outros">Outros</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="profileCategoria2" class="form-label fw-bold">Categoria de Serviço 2</label>
                            <select class="form-select" id="profileCategoria2" name="categoria2">
                                <option selected disabled value="">Selecione uma categoria...</option>
                                <optgroup label="Beleza e Estética">
                                    <option value="cabeleireiro">Cabeleireiro</option>
                                    <option value="manicure">Manicure/Pedicure</option>
                                    <option value="depilador">Depilador</option>
                                    <option value="maquiador">Maquiador</option>
                                    <option value="esteticista_animal">Esteticista de Animais</option>
                                    <option value="podologo">Podólogo</option>
                                    <option value="massagista">Massagista</option>
                                    <option value="tatuador">Tatuador</option>
                                </optgroup>
                                <optgroup label="Reforma e Manutenção">
                                    <option value="pintor">Pintor</option>
                                    <option value="eletricista">Eletricista</option>
                                    <option value="encanador">Encanador</option>
                                    <option value="jardineiro">Jardineiro</option>
                                    <option value="pedreiro">Pedreiro</option>
                                    <option value="marceneiro">Marceneiro</option>
                                    <option value="vidraceiro">Vidraceiro</option>
                                    <option value="instalador_antena">Instalador de Antenas</option>
                                    <option value="chaveiro">Chaveiro</option>
                                    <option value="diarista">Diarista</option>
                                    <option value="lavadeiro">Lavadeiro de Roupas</option>
                                </optgroup>
                                <optgroup label="Alimentação">
                                    <option value="padeiro">Padeiro</option>
                                    <option value="cozinheiro">Cozinheiro</option>
                                    <option value="salgadeiro">Salgadeiro</option>
                                </optgroup>
                                <optgroup label="Eventos e Festas">
                                    <option value="animador_festas">Animador de Festas</option>
                                    <option value="organizador_eventos">Organizador de Eventos</option>
                                    <option value="cerimonialista">Cerimonialista</option>
                                    <option value="musico">Músico</option>
                                    <option value="dj">DJ/VJ</option>
                                </optgroup>
                                <optgroup label="Tecnologia e Design">
                                    <option value="programador">Programador</option>
                                    <option value="tecnico_ti">Técnico de Manutenção de Computadores</option>
                                    <option value="webdesigner">Webdesigner</option>
                                    <option value="editor_video">Editor de Vídeo</option>
                                    <option value="fotografo">Fotógrafo</option>
                                    <option value="designer_interiores">Designer de Interiores</option>
                                </optgroup>
                                <optgroup label="Educação e Treinamento">
                                    <option value="instrutor">Instrutor de Cursos Livres</option>
                                    <option value="professor">Professor Particular</option>
                                    <option value="treinador_esportes">Treinador de Esportes</option>
                                </optgroup>
                                <optgroup label="Negócios">
                                    <option value="digitador">Digitador</option>
                                    <option value="promotor_vendas">Promotor de Vendas</option>
                                    <option value="secretaria">Secretária Remota/Assistente Administrativo</option>
                                    <option value="comerciante">Comerciante de Artigos</option>
                                </optgroup>
                                <optgroup label="Outros">
                                    <option value="motorista">Motorista de Aplicativo</option>
                                    <option value="guia_turismo">Guia de Turismo</option>
                                    <option value="artesao">Artesão</option>
                                    <option value="costureiro">Costureiro</option>
                                    <option value="outros">Outros</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="profileCategoria3" class="form-label fw-bold">Categoria de Serviço 3</label>
                            <select class="form-select" id="profileCategoria3" name="categoria3">
                                <option selected disabled value="">Selecione uma categoria...</option>
                                <optgroup label="Beleza e Estética">
                                    <option value="cabeleireiro">Cabeleireiro</option>
                                    <option value="manicure">Manicure/Pedicure</option>
                                    <option value="depilador">Depilador</option>
                                    <option value="maquiador">Maquiador</option>
                                    <option value="esteticista_animal">Esteticista de Animais</option>
                                    <option value="podologo">Podólogo</option>
                                    <option value="massagista">Massagista</option>
                                    <option value="tatuador">Tatuador</option>
                                </optgroup>
                                <optgroup label="Reforma e Manutenção">
                                    <option value="pintor">Pintor</option>
                                    <option value="eletricista">Eletricista</option>
                                    <option value="encanador">Encanador</option>
                                    <option value="jardineiro">Jardineiro</option>
                                    <option value="pedreiro">Pedreiro</option>
                                    <option value="marceneiro">Marceneiro</option>
                                    <option value="vidraceiro">Vidraceiro</option>
                                    <option value="instalador_antena">Instalador de Antenas</option>
                                    <option value="chaveiro">Chaveiro</option>
                                    <option value="diarista">Diarista</option>
                                    <option value="lavadeiro">Lavadeiro de Roupas</option>
                                </optgroup>
                                <optgroup label="Alimentação">
                                    <option value="padeiro">Padeiro</option>
                                    <option value="cozinheiro">Cozinheiro</option>
                                    <option value="salgadeiro">Salgadeiro</option>
                                </optgroup>
                                <optgroup label="Eventos e Festas">
                                    <option value="animador_festas">Animador de Festas</option>
                                    <option value="organizador_eventos">Organizador de Eventos</option>
                                    <option value="cerimonialista">Cerimonialista</option>
                                    <option value="musico">Músico</option>
                                    <option value="dj">DJ/VJ</option>
                                </optgroup>
                                <optgroup label="Tecnologia e Design">
                                    <option value="programador">Programador</option>
                                    <option value="tecnico_ti">Técnico de Manutenção de Computadores</option>
                                    <option value="webdesigner">Webdesigner</option>
                                    <option value="editor_video">Editor de Vídeo</option>
                                    <option value="fotografo">Fotógrafo</option>
                                    <option value="designer_interiores">Designer de Interiores</option>
                                </optgroup>
                                <optgroup label="Educação e Treinamento">
                                    <option value="instrutor">Instrutor de Cursos Livres</option>
                                    <option value="professor">Professor Particular</option>
                                    <option value="treinador_esportes">Treinador de Esportes</option>
                                </optgroup>
                                <optgroup label="Negócios">
                                    <option value="digitador">Digitador</option>
                                    <option value="promotor_vendas">Promotor de Vendas</option>
                                    <option value="secretaria">Secretária Remota/Assistente Administrativo</option>
                                    <option value="comerciante">Comerciante de Artigos</option>
                                </optgroup>
                                <optgroup label="Outros">
                                    <option value="motorista">Motorista de Aplicativo</option>
                                    <option value="guia_turismo">Guia de Turismo</option>
                                    <option value="artesao">Artesão</option>
                                    <option value="costureiro">Costureiro</option>
                                    <option value="outros">Outros</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="profileLocalidade" class="form-label fw-bold">Localidade (Cidade/Estado)</label>
                            <input type="text" class="form-control" id="profileLocalidade" value="Campo Mourão, PR" required>
                        </div>
                        <div class="mb-3">
                            <label for="profileDesc" class="form-label fw-bold">Descrição</label>
                            <textarea class="form-control" id="profileDesc" rows="4">Eletricista com mais de 10 anos de experiência em instalações residenciais e comerciais. Realizo reparos, manutenção, e instalações elétricas seguras e de alta qualidade. Orçamento sem compromisso.</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="profileHorario" class="form-label fw-bold">Horário de Trabalho</label>
                            <input type="text" class="form-control" id="profileHorario" value="Seg. a Sex. das 08h às 18h">
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-dark-blue">Salvar Alterações</button>
                        </div>
                    </form>

                    <hr class="my-4">
                    
                    <div class="d-grid mt-4">
                        <button type="button" class="btn btn-danger fw-bold">Deletar Perfil</button>
                    </div>

                    <hr class="my-4">

                    <h4 class="fw-bold mb-3"><i class="fas fa-star text-warning me-2"></i> Minhas Avaliações</h4>
                    <div class="rating-display text-center mb-3">
                        <div class="main-rating display-4 fw-bold text-secondary-highlight">4.8</div>
                        <div class="stars h5">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                        <p class="text-muted">Baseado em 125 avaliações</p>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="profile-card p-4 h-100">
                    <h4 class="fw-bold mb-4"><i class="fas fa-lightbulb text-warning me-2"></i> Dicas para Expandir seu Negócio</h4>
                    <div id="tipsCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-block w-100 tip-item p-4">
                                    <h5 class="fw-bold">1. Peça Avaliações</h5>
                                    <p>Avaliações positivas constroem sua reputação. Sempre incentive seus clientes satisfeitos a deixarem um comentário na sua página da SkillMatch.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100 tip-item p-4">
                                    <h5 class="fw-bold">2. Mantenha seu Perfil Atualizado</h5>
                                    <p>Adicione novas fotos, atualize sua descrição e liste todos os serviços que você oferece. Um perfil completo atrai mais visitas.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100 tip-item p-4">
                                    <h5 class="fw-bold">3. Responda Rapidamente</h5>
                                    <p>O tempo de resposta é crucial. Responda a novas solicitações de orçamento o mais rápido possível para fechar mais negócios.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#tipsCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#tipsCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <hr class="my-4">

                    <h4 class="fw-bold mb-4"><i class="fas fa-chart-line text-info me-2"></i> Estatísticas do Perfil</h4>
                    <div class="row text-center">
                        <div class="col-md-4 mb-3">
                            <div class="stat-card p-3">
                                <i class="fas fa-eye stat-icon"></i>
                                <h5 class="fw-bold mt-2">1,540</h5>
                                <p class="text-muted mb-0">Visualizações</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="stat-card p-3">
                                <i class="fab fa-whatsapp stat-icon-whatsapp"></i>
                                <h5 class="fw-bold mt-2">78</h5>
                                <p class="text-muted mb-0">Contatos (WhatsApp)</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="stat-card p-3">
                                <i class="fas fa-search stat-icon"></i>
                                <h5 class="fw-bold mt-2">2,100</h5>
                                <p class="text-muted mb-0">Pesquisas por Serviço</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>