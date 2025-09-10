
<section class="cadastro-page py-5 content-top-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card p-4 cadastro-card">
                    <br>
                    <h2 class="text-center fw-bold mb-4">Cadastro de Prestador</h2>
                    <p class="text-center text-muted mb-4">Junte-se à SkillMatch e encontre novos clientes para o seu negócio!</p>
                    <form action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="nome" class="form-label fw-bold">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label fw-bold">Endereço de E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-12">
                                <label for="telefone" class="form-label fw-bold">Número de Telefone</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" required>
                            </div>
                            <div class="col-12">
                                <label for="cpf" class="form-label fw-bold">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                            </div>
                            <div class="col-12">
                                <label for="foto" class="form-label fw-bold">Foto de Perfil</label>
                                <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
                                <div class="form-text">Envie uma foto profissional para atrair mais clientes.</div>
                            </div>
                            <div class="col-12">
                                <label for="servico" class="form-label fw-bold">Tipo de Serviço</label>
                                <input type="text" class="form-control" id="servico" name="servico" placeholder="Ex: Eletricista, Design Gráfico..." required>
                            </div>
                            <div class="col-12">
                                <label for="categoria1" class="form-label fw-bold">Categoria de Serviço 1</label>
                                <select class="form-select" id="categoria1" name="categoria1" required>
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
                            <div class="col-12">
                                <label for="categoria2" class="form-label fw-bold">Categoria de Serviço 2</label>
                                <select class="form-select" id="categoria2" name="categoria2">
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
                            <div class="col-12">
                                <label for="categoria3" class="form-label fw-bold">Categoria de Serviço 3</label>
                                <select class="form-select" id="categoria3" name="categoria3">
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
                            <div class="col-12">
                                <label for="localidade" class="form-label fw-bold">Localidade (Cidade/Estado)</label>
                                <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Ex: Campo Mourão, PR" required>
                            </div>
                            <div class="col-12">
                                <label for="descricao" class="form-label fw-bold">Descrição dos Serviços</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="4" placeholder="Descreva sua experiência, diferenciais e os serviços que oferece em detalhes." required></textarea>
                            </div>
                            <div class="col-12">
                                <label for="horario" class="form-label fw-bold">Horário de Trabalho</label>
                                <input type="text" class="form-control" id="horario" name="horario" placeholder="Ex: Seg. a Sex. das 08h às 18h">
                            </div>
                            <div class="col-12">
                                <label for="senha" class="form-label fw-bold">Crie uma Senha</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                                <div class="form-text">Sua senha deve ter no mínimo 8 caracteres.</div>
                            </div>
                            <div class="col-12">
                                <label for="confirmar_senha" class="form-label fw-bold">Confirme sua Senha</label>
                                <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" required>
                            </div>

                            <div class="col-12 mt-4">
                                <div class="alert alert-info" role="alert">
                                    <i class="fas fa-info-circle me-2"></i>
                                    Seu perfil será publicado após a verificação e aprovação pela nossa equipe.
                                </div>
                            </div>
                            
                            <div class="col-12 d-grid mt-4">
                                <button type="submit" class="btn btn-dark-blue btn-lg">Cadastrar como Fornecedor</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>