<section class="cadastro-page py-5 content-top-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card p-4 cadastro-card">
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
                                <label for="foto" class="form-label fw-bold">Foto de Perfil</label>
                                <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
                                <div class="form-text">Envie uma foto profissional para atrair mais clientes.</div>
                            </div>
                            <div class="col-12">
                                <label for="servico" class="form-label fw-bold">Tipo de Serviço</label>
                                <input type="text" class="form-control" id="servico" name="servico" placeholder="Ex: Eletricista, Design Gráfico..." required>
                            </div>
                            <div class="col-12">
                                <label for="categoria" class="form-label fw-bold">Categoria</label>
                                <select class="form-select" id="categoria" name="categoria" required>
                                    <option selected disabled value="">Selecione uma categoria...</option>
                                    <option value="eletricista">Eletricista</option>
                                    <option value="pintor">Pintor</option>
                                    <option value="programador">Programação e TI</option>
                                    <option value="designer">Design Gráfico</option>
                                    <option value="jardineiro">Jardinagem</option>
                                    <option value="encanador">Encanador</option>
                                    <option value="outros">Outros</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="localidade" class="form-label fw-bold">Localidade (Cidade/Estado)</label>
                                <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Ex: São Paulo, SP" required>
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