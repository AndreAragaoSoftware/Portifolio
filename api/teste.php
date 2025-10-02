<?php 
$pageTitle = "Início";
include 'includes/header.php'; 
?>

<section id="destaque">
    <div class="container">
        <h2>Bem-vindo ao meu Portfólio</h2>
        <p>Sou desenvolvedor Full Stack com experiência em PHP, C#, JavaScript, React e Node.js.</p>
        <a href="projetos.php" class="btn">Ver Meus Projetos</a>
    </div>
</section>

<section id="ultimos-projetos">
    <div class="container">
        <h2>Últimos Projetos</h2>
        <div class="projeto">
            <h3>Sistema PHP & Laravel</h3>
            <p>Sistema de gestão de inventário com autenticação de usuários e integração de pagamento.</p>
        </div>
        <div class="projeto">
            <h3>Aplicação React & Supabase</h3>
            <p>SPA moderna com autenticação e armazenamento de dados via Supabase.</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>