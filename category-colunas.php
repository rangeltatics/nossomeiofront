<?php require('header.php'); ?>

<!-- ### BARRA TITULOS ### -->
<section class="barra-titulo bg-cor-padrao">
    <section class="container text-center flex space-between align-items-center">
        <img src="images/logo-barra-fixa.png" alt="Logo Nosso Meio">
        <h1 class="fonte-cor-branca fonte-40">Colunas</h1>
        <a><img src="images/menu-hamburger.svg" alt=""></a>
    </section>
</section>

<!-- ### SUBMENUS ### -->
<section class="barra-submenus">
    <section class="container">
        <nav class="flex space-evenly">
            <a class="fonte-cor-padrao-hover" href="#">Academia & Mercado</a>
            <a class="fonte-cor-padrao-hover" href="#">Alô RH!</a>
            <a class="fonte-cor-padrao-hover" href="#">Ligando os pontos</a>
            <a class="fonte-cor-padrao-hover" href="#">Marketar</a>
            <a class="fonte-cor-padrao-hover" href="#">Move</a>
            <a class="fonte-cor-padrao-hover" href="#">Nosso café com marketing</a>
            <a class="fonte-cor-padrao-hover" href="#">Nosso UX</a>
            <a class="fonte-cor-padrao-hover" href="#">Radar</a>
            <a class="fonte-cor-padrao-hover" href="#">Acadi em Foco</a>
            <a class="fonte-cor-padrao-hover" href="#">Sinapro</a>
        </nav>
    </section>
</section>

<section class="barra-ajuste-posicao"></section>

<!-- ### DIVISOR ### -->
<div class="divisor-48"></div>

<!-- ### POSTAGENS ### -->
<section class="autores">
    <section class="container flex flex-wrap gap-32 row-gap-64">
       <?php for ($i=0; $i < 9; $i++): $cat = array("Academia & Mercado", "Alô RH!", "Ligando os pontos", "Marketar", "Move", "Nosso café com marketing", "Nosso UX", "Radar", "Acadi em Foco", "Sinapro")?> 
            <section class="autor width-33 flex gap-16 align-items-center">
                <a href="#">
                    <img class="circular" src="https://placehold.co/136x136" alt="136x136">
                </a>
                <article>
                    <a class="fonte-bold fonte-cor-texto-cinza" href="#"><?php echo $cat[$i] ?></a>
                    <p class="fonte-18 fonte-bold fonte-cor-cinza">Clotilde Perez</p>
                    <small>Professora, pesquisadora, consultora e colunista brasileira.</small>
                </article>
            </section>
       <?php endfor ?>
    </section>
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

<?php require('footer.php'); ?>