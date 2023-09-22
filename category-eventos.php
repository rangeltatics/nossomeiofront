<?php require('header.php'); ?>

<!-- ### BARRA TITULOS ### -->
<section class="barra-titulo bg-cor-padrao">
    <section class="container text-center flex space-between align-items-center">
        <img src="images/logo-barra-fixa.png" alt="Logo Nosso Meio">
        <h1 class="fonte-cor-branca fonte-40">Eventos</h1>
        <a><img src="images/menu-hamburger.svg" alt=""></a>
    </section>
</section>

<!-- ### SUBMENUS ### -->
<section class="barra-submenus">
    <section class="container">
        <nav class="flex space-evenly">
            <a class="fonte-cor-padrao-hover active" href="#">Todos</a>
            <a class="fonte-cor-padrao-hover" href="#">Coberturas Especiais</a>
            <a class="fonte-cor-padrao-hover" href="#">Marketing, Pessoas & Relacionamento</a>
            <a class="fonte-cor-padrao-hover" href="#">Encontro com o Mercado</a>
            <a class="fonte-cor-padrao-hover" href="#">NM2Business</a>
            <a class="fonte-cor-padrao-hover" href="#" target="_blank">Galeria de Fotos</a>
        </nav>
    </section>
</section>

<section class="barra-ajuste-posicao"></section>

<!-- ### DIVISOR ### -->
<div class="divisor-48"></div>

<!-- ### POSTAGENS ### -->
<section class="postagens">
    <section class="container flex flex-wrap gap-32">
       <?php for ($i=0; $i < 8; $i++): ?> 
            <section class="card flex flex-column align-items-start gap-8">
                <a href="single.php">
                    <img src="https://placehold.co/280x280" alt="280x280">
                </a>
                <span class="tag padrao">NM2Business</span>
                <a class="fonte-bold fonte-cor-padrao-hover" href="single.php">MMA Impact Brasil 2023</a>
            </section>
       <?php endfor ?>
    </section>


    <!-- ### DIVISOR ### -->
    <div class="divisor-64 desktop"></div>

    <!-- ### PUBLICIDADE ### -->
    <section class="publi publi-meio desktop">
        <section class="container">
            <section class="background">
                <section class="banner">
                    <img src="https://placehold.co/1168x250" alt="1120x250">
                </section>
            </section>
        </section>
    </section>

    <!-- ### PUBLICIDADE ### -->
    <section class="publi mobile">
        <!-- ### DIVISOR ### -->
        <div class="divisor-32"></div>
        
        <section class="background">
            <section class="banner">
                <img src="https://placehold.co/360x172" alt="360x172">
            </section>
        </section>

        <!-- ### DIVISOR ### -->
        <div class="divisor-32"></div>
    </section>

    <!-- ### DIVISOR ### -->
    <div class="divisor-64 desktop"></div>

    <section class="container flex flex-wrap gap-32">
       <?php for ($i=0; $i < 8; $i++): ?> 
            <section class="card flex flex-column align-items-start gap-8">
                <a href="single.php">
                    <img src="https://placehold.co/280x280" alt="280x280">
                </a>
                <span class="tag padrao">Marketing, Pessoas & Relacionamento</span>
                <a class="fonte-bold fonte-cor-padrao-hover" href="single.php">Encontro Happy Hour do Profissional de RH</a>
            </section>
       <?php endfor ?>
    </section>

</section>

<!-- ### DIVISOR ### -->
<div class="divisor-32"></div>

<!-- ### PAGINAÇÃO ### -->
<section class="paginacao">
   <section class="container">
        <ul class="flex content-center gap-8">
            <li><a class="bg-cor-brand fonte-cor-branca" href="#">1</a></li>
            <li><a class="bg-cor-padrao fonte-cor-branca" href="#">2</a></li>
            <li><a class="bg-cor-padrao fonte-cor-branca" href="#">3</a></li>
            <li><a class="bg-cor-padrao fonte-cor-branca" href="#">4</a></li>
        </ul>
   </section>
</section>

<?php require('footer.php'); ?>