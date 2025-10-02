<?php
$pageTitle = "Contacto";
include __DIR__ . '/includes/header.php';
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow card-contact">
                <div class="card-header bg-primary text-white card-header-contact">
                    <h2 class="text-center mb-0"><i class="bi bi-envelope-paper"></i> Contacto</h2>
                </div>
                <div class="card-body">
                    <!-- Remova o novalidate para ativar a validação HTML5 -->
                    <form action="processar.php" method="post">
                        <div class="mb-3">
                            <label for="nome" class="form-label"><i class="bi bi-person"></i> Nome:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" id="nome" name="nome"
                                    required
                                    minlength="3"
                                    maxlength="50"
                                    pattern="[A-Za-zÀ-ÿ\s]+"
                                    title="Por favor, insira um nome válido (apenas letras e espaços)"
                                    oninvalid="this.setCustomValidity('Por favor, insira um nome válido com mínimo 3 caracteres')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-text">Mínimo 3 caracteres, apenas letras</div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label"><i class="bi bi-envelope"></i> Email:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                <input type="email" class="form-control" id="email" name="email"
                                    required
                                    placeholder="exemplo@dominio.com"
                                    title="Por favor, insira um email válido"
                                    oninvalid="this.setCustomValidity('Por favor, insira um email válido no formato exemplo@dominio.com')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="telefone" class="form-label"><i class="bi bi-telephone"></i> Telefone:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                <input type="tel" class="form-control" id="telefone" name="telefone"
                                    pattern="\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}"
                                    placeholder="(99) 99999-9999"
                                    title="Formato: (99) 99999-9999"
                                    oninvalid="this.setCustomValidity('Por favor, insira um telefone no formato (99) 99999-9999')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="assunto" class="form-label"><i class="bi bi-chat-square-text"></i> Assunto:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-chat-square-text-fill"></i></span>
                                <select class="form-select" id="assunto" name="assunto" required
                                    oninvalid="this.setCustomValidity('Por favor, selecione um assunto')"
                                    oninput="this.setCustomValidity('')">
                                    <option value="" selected disabled>Selecione um assunto</option>
                                    <option value="duvida">Dúvida</option>
                                    <option value="sugestao">Sugestão</option>
                                    <option value="reclamacao">Reclamação</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="mensagem" class="form-label"><i class="bi bi-chat-left-text"></i> Mensagem:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-chat-left-text-fill"></i></span>
                                <textarea class="form-control" id="mensagem" name="mensagem"
                                    rows="5" required
                                    minlength="10"
                                    maxlength="500"
                                    title="Por favor, insira uma mensagem com mínimo 10 caracteres"
                                    oninvalid="this.setCustomValidity('A mensagem deve ter pelo menos 10 caracteres')"
                                    oninput="this.setCustomValidity('')"></textarea>
                            </div>
                            <div class="form-text">Mínimo 10 caracteres, máximo 500</div>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter">
                            <label class="form-check-label" for="newsletter">Desejo receber a newsletter</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg btn-send">
                                <i class="bi bi-send-fill"></i> Enviar Mensagem
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>