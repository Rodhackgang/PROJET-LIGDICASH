<?php
require_once './utils/header.php';
?>

<section class="blog-container">
    <div class="blog-left">
        <h1>Blog</h1>
        <p>Acquérez de nouvelles connaissances et laissez-vous inspirer par des articles sur la tech rédigés par des experts et des professionnels de la programmation, du design, du devops, et bien d'autres domaines connexes.</p>

        <div class="article">
            <h2>Titre de l'article</h2>
            <p class="date">10 Février 2023 10:26</p>
            <p>Lorem ipsum dolor sit amet consectetur. Felis turpis libero praesent montes sem nisl luctus velit...</p>
            <a href="#" class="read-more">Lire plus</a>
        </div>

        <div class="article">
            <h2>Un autre titre d'article</h2>
            <p class="date">9 Février 2023 10:26</p>
            <p>Lorem ipsum dolor sit amet consectetur. Felis turpis libero praesent montes sem nisl luctus velit...</p>
            <a href="#" class="read-more">Lire plus</a>
        </div>
    </div>

    <div class="blog-right">
        <h2>Recherchez par thème</h2>
        <div class="search-item">
            <a href="#">ReactJS</a> <span>(309 articles)</span>
        </div>
        <div class="search-item">
            <a href="#">UX/UI Design</a> <span>(200 articles)</span>
        </div>
        <div class="search-item">
            <a href="#">Backend</a> <span>(70 articles)</span>
        </div>
        <div class="search-item">
            <a href="#">Graphisme</a> <span>(32 articles)</span>
        </div>
        <div class="search-item">
            <a href="#">Cyber-sécurité</a> <span>(24 articles)</span>
        </div>
        <div class="search-item">
            <a href="#">Data-science</a> <span>(189 articles)</span>
        </div>
        <div class="search-item">
            <a href="#">JWT</a> <span>(36 articles)</span>
        </div>
    </div>
</section>

<?php
require_once './utils/footer.php';
?>
