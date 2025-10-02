<?php
$pageTitle = "Sobre Mim";
include __DIR__ . '/includes/header.php';
?>

<section id="sobre" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm overflow-hidden">
                    <div class="row g-0">
                        <!-- Seção da Foto + Texto Introdutório -->
                        <div class="col-md-4 bg-dark text-white p-4 d-flex flex-column">
                            <div class="text-center mb-4">
                                <img src="../img/perfil.jpg" alt="André Aragão" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                                <h3>André Oliveira Aragão</h3>
                                <p class="text-muted">Desenvolvedor Full Stack</p>
                            </div>

                            <div class="mt-auto">
                                <h5 class="border-bottom pb-2">Resumo Profissional</h5>
                                <p class="small">Desenvolvedor Full Stack com experiência prática em PHP (Laravel), Angular e frameworks JavaScript. Valorizo código limpo, APIs escaláveis e ambientes de desenvolvimento colaborativos.</p>

                                <div class="d-grid gap-2 mt-3">
                                    <a href="https://github.com/AndreAragaoSoftware" target="_blank" alt="Link Linkedin" class="btn btn-outline-light btn-sm">
                                        <i class="bi bi-github"></i> GitHub
                                    </a>
                                    <a href="https://www.linkedin.com/in/andrearagaodeveloper" target="_blank" alt="Link Linkedin" class="btn btn-outline-light btn-sm">
                                        <i class="bi bi-linkedin"></i> LinkedIn
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Seção de Conteúdo Detalhado -->
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <!-- Experiência Atual -->
                                <div class="mb-4">
                                    <h4 class="text-primary"><i class="bi bi-code-square"></i>Projetos Recentes</h4>
                                    <p>Na minha experiência profissional mais recente na <strong>Monliz</strong>, desenvolvi uma aplicação web completa com React no frontend e Node.js no backend, utilizando autenticação via LDAP.</p>

                                    <div class="ps-3 border-start border-primary">
                                        <h5 class="h6">Projetos em Andamento:</h5>
                                        <ul class="list-unstyled">
                                            <li class="mb-2">
                                                <i class="bi bi-arrow-right-circle text-primary"></i>
                                                <strong>Sistema PHP/Laravel:</strong> Gestão de inventário com API RESTful e integração de pagamentos
                                            </li>
                                            <li>
                                                <i class="bi bi-arrow-right-circle text-primary"></i>
                                                <strong>Aplicação React/Supabase:</strong> SPA moderna com autenticação e PostgreSQL
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <hr>

                                <!-- Competências Técnicas -->
                                <div class="mb-4">
                                    <h4 class="text-primary"><i class="bi bi-tools"></i> Competências Técnicas</h4>
                                    <div class="row g-3 mt-3">
                                        <div class="col-6 col-md-3">
                                            <div class="p-2 border rounded text-center h-100">
                                                <i class="bi bi-filetype-js display-6 text-warning mb-2"></i>
                                                <h6 class="h6">Frontend</h6>
                                                <ul class="list-unstyled small">
                                                    <li>React</li>
                                                    <li>Angular</li>
                                                    <li>JavaScript</li>
                                                    <li>TypeScript</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-3">
                                            <div class="p-2 border rounded text-center h-100">
                                                <i class="bi bi-server display-6 text-info mb-2"></i>
                                                <h6 class="h6">Backend</h6>
                                                <ul class="list-unstyled small">
                                                    <li>PHP</li>
                                                    <li>Java</li>
                                                    <li>Node.js</li>
                                                    <li>C#</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-3">
                                            <div class="p-2 border rounded text-center h-100">
                                                <i class="bi bi-database display-6 text-success mb-2"></i>
                                                <h6 class="h6">Bancos de Dados</h6>
                                                <ul class="list-unstyled small">
                                                    <li>MySQL</li>
                                                    <li>PostgreSQL</li>
                                                    <li>MSSQL</li>
                                                    <li>Supabase</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-6 col-md-3">
                                            <div class="p-2 border rounded text-center h-100">
                                                <i class="bi bi-gear display-6 text-secondary mb-2"></i>
                                                <h6 class="h6">Ferramentas</h6>
                                                <ul class="list-unstyled small">
                                                    <li>Git</li>
                                                    <li>Docker</li>
                                                    <li>CI/CD</li>
                                                    <li>LDAP</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <!-- Formação -->
                                <div>
                                    <h4 class="text-primary"><i class="bi bi-book"></i> Formação Acadêmica</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <strong>Linguagens de Programação - Programação WEB</strong><br>
                                            IEFP  • 2025-2025
                                        </li>
                                        <li class="mb-2">
                                            <strong>Tecnologias e Programação de Sistemas de Informação</strong><br>
                                            ISLA Santarém • 2022-2024
                                        </li>
                                        <li>
                                            <strong>Técnico em Desenvolvimento de Sistemas</strong><br>
                                            SENAI CETAF • 2019-2021
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>