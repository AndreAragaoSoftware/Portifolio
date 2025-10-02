<?php 
$pageTitle = "Mensagem Enviada";
include 'includes/header.php'; 

// Processar dados recebidos
$nome = htmlspecialchars($_POST['nome'] ?? 'Não informado');
$email = htmlspecialchars($_POST['email'] ?? 'Não informado');
$telefone = htmlspecialchars($_POST['telefone'] ?? 'Não informado');
$assunto = htmlspecialchars($_POST['assunto'] ?? 'Não especificado');
$mensagem = nl2br(htmlspecialchars($_POST['mensagem'] ?? 'Sem mensagem'));
$newsletter = isset($_POST['newsletter']) ? 'Sim' : 'Não';

// Mapear valores do assunto para rótulos mais amigáveis
$assuntos = [
    'duvida' => 'Dúvida',
    'sugestao' => 'Sugestão',
    'reclamacao' => 'Reclamação',
    'outro' => 'Outro'
];
$assuntoLabel = $assuntos[$assunto] ?? $assunto;
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h2 class="text-center mb-0"><i class="bi bi-check-circle"></i> Obrigado pelo seu contacto!</h2>
                </div>
                <div class="card-body">
                    <div class="alert alert-success">
                        <h4 class="alert-heading"><i class="bi bi-envelope-check"></i> Mensagem Recebida com Sucesso</h4>
                        <p class="mb-4">Recebemos a sua mensagem e entraremos em contacto em breve.</p>
                        
                        <hr>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mt-3"><i class="bi bi-person"></i> Informações Pessoais</h5>
                                <ul class="list-group list-group-flush mb-3">
                                    <li class="list-group-item">
                                        <strong>Nome:</strong> <?= $nome ?>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Email:</strong> <?= $email ?>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Telefone:</strong> <?= $telefone ?>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="col-md-6">
                                <h5 class="mt-3"><i class="bi bi-chat-left-text"></i> Detalhes da Mensagem</h5>
                                <ul class="list-group list-group-flush mb-3">
                                    <li class="list-group-item">
                                        <strong>Assunto:</strong> <?= $assuntoLabel ?>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Receber newsletter:</strong> <?= $newsletter ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <h5><i class="bi bi-envelope-paper"></i> Sua Mensagem:</h5>
                            <div class="card">
                                <div class="card-body bg-light">
                                    <?= $mensagem ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="contacto.php" class="btn btn-outline-primary">
                            <i class="bi bi-arrow-left"></i> Voltar ao Formulário
                        </a>
                        <a href="index.php" class="btn btn-primary">
                            <i class="bi bi-house"></i> Ir para a Página Inicial
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>