<?php
$pageTitle = "Meus Projetos";
include 'includes/header.php';
?>

<section id="projetos">
    <div class="container">
        <h2>Meus Projetos</h2>

        <div class="table-responsive">
            <table class="table tabela-projetos table-hover">
                <thead>
                    <tr>
                        <th class="d-none d-lg-table-cell">Título</th>
                        <th>Descrição</th>
                        <th class="d-none d-sm-table-cell">Tecnologias</th>
                        <th class="d-none d-md-table-cell">Acesso</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Grupo Corporativos -->
                    <tr class="grupo-titulo">
                        <td colspan="4" class="fw-bold bg-light text-center">Projetos Corporativos</td>
                    </tr>
                    
                    <!-- Projeto 1 Corporativo -->
                    <tr class="corporativo">
                        <td class="d-none d-lg-table-cell fw-bold">Gestão de Produtos</td>
                        <td>Sistema de gestão de Produtos com autenticação LDAP e Integração com ERPs</td>
                        <td class="d-none d-sm-table-cell">React, Node.js, MSSQL</td>
                        <td class="d-none d-md-table-cell text-center">
                            <span class="propriedade-empresa">Propriedade da Empresa</span>
                        </td>
                    </tr>
                    
                    <!-- Projeto 2 Corporativo -->
                    <tr class="corporativo">
                        <td class="d-none d-lg-table-cell fw-bold">Gestão de Condomínios</td>
                        <td>Sistema de gestão de condomínios com painel administrativo</td>
                        <td class="d-none d-sm-table-cell">PHP, Laravel, MySQL</td>
                        <td class="d-none d-md-table-cell text-center">
                            <span class="propriedade-empresa">Propriedade da Empresa</span>
                        </td>
                    </tr>
                    
                    <!-- Projeto 3 Corporativo -->
                    <tr class="corporativo">
                        <td class="d-none d-lg-table-cell fw-bold">SPA Moderna</td>
                        <td>SPA moderna com autenticação e armazenamento de dados</td>
                        <td class="d-none d-sm-table-cell">React, Supabase, PostgreSQL</td>
                        <td class="d-none d-md-table-cell text-center">
                            <span class="propriedade-empresa">Propriedade da Empresa</span>
                        </td>
                    </tr>

                    <!-- Grupo Acadêmicos -->
                    <tr class="grupo-titulo">
                        <td colspan="4" class="fw-bold bg-light text-center">Projetos Acadêmicos</td>
                    </tr>
                    
                    <!-- Projeto 1 Acadêmico -->
                    <tr class="academico">
                        <td class="d-none d-lg-table-cell fw-bold">Jogo Educativo</td>
                        <td>Jogo educativo para controle de pragas</td>
                        <td class="d-none d-sm-table-cell">JavaScript, HTML5, CSS</td>
                        <td class="d-none d-md-table-cell text-center">
                            <a href="https://app-mata-mosquito-js.vercel.app/" target="_blank" class="btn-link">Acessar</a>
                        </td>
                    </tr>
                    
                    <!-- Projeto 2 Acadêmico -->
                    <tr class="academico">
                        <td class="d-none d-lg-table-cell fw-bold">API REST</td>
                        <td>API REST para gestão escolar</td>
                        <td class="d-none d-sm-table-cell">Node.js, Express</td>
                        <td class="d-none d-md-table-cell text-center">
                            <a href="https://github.com/AndreAragaoSoftware/API-Escola" target="_blank" class="btn-link">Acessar</a>
                        </td>
                    </tr>
                    
                    <!-- Projeto 3 Acadêmico -->
                    <tr class="academico">
                        <td class="d-none d-lg-table-cell fw-bold">API RESTFUL</td>
                        <td>API RESTFUL para gerenciamento de produtos</td>
                        <td class="d-none d-sm-table-cell">Node.js, TypeScript, Prisma</td>
                        <td class="d-none d-md-table-cell text-center">
                            <a href="https://github.com/AndreAragaoSoftware/API-Escola" target="_blank" class="btn-link">Acessar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>