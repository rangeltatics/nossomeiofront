<?php require('header.php'); ?>

<!-- ### BARRA TITULOS ### -->
<section class="barra-titulo bg-cor-padrao">
    <section class="container text-center flex space-between align-items-center">
        <img src="images/logo-barra-fixa.png" alt="Logo Nosso Meio">
        <h1 class="fonte-cor-branca fonte-40">Programas</h1>
        <a><img src="images/menu-hamburger.svg" alt=""></a>
    </section>
</section>

<!-- ### SUBMENUS ### -->
<section class="barra-submenus">
    <section class="container">
        <nav class="flex space-evenly">
            <a class="fonte-cor-padrao-hover" href="#">Nosso Meio TV</a>
            <a class="fonte-cor-padrao-hover" href="#">Nosso Meio Cast</a>
        </nav>
    </section>
</section>

<section class="barra-ajuste-posicao"></section>

<!-- ### DIVISOR ### -->
<div class="divisor-48"></div>

<!-- ### POSTAGENS ### -->
<section class="postagens">
    <section class="container flex flex-wrap gap-32">
       <?php for ($i=0; $i < 8; $i++):?> 
            <section class="card flex flex-column align-items-start gap-8">
                <a href="#">
                    <img src="https://placehold.co/280x280" alt="280x280">
                </a>
                <span class="tag brand-secundaria">Nosso Meio Cast</span>
                <a class="fonte-bold fonte-cor-marketing-hover" href="#">Cobertura: Ceará Gestão 2022</a>
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
                <span class="tag brand">Nosso Meio TV</span>
                <a class="fonte-bold fonte-cor-pessoas-hover" href="single.php">A nova era do propósito</a>
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