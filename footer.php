    <!-- ### DIVISOR ### -->
    <div class="divisor-80"></div>

    <!-- ### FOOTER ### -->
    <footer>
        <section class="footer bg-cor-padrao">
            <section class="container">
                <div class="divisor-96"></div>
                    <section class="flex space-between">
                        <section class="newsletter">
                            <figure class="text-center">
                                <img src="images/logo-nosso-meio-branca.png" alt="Logo do Portal Nosso Meio">
                            </figure>
                            <div class="divisor-48"></div>
                            <form action="">
                                <p class="fonte-18 fonte-bold fonte-cor-branca">Fique por dentro de todas as novidades de nosso site gratuitamente</p>
                                <input class="input" placeholder="Digite seu nome" type="text">
                                <input class="input" placeholder="Digite seu email" type="email">
                                <input class="button-sucesso" value="Quero receber novidades" type="submit">
                            </form>
                        </section>
                        <section class="menus flex space-between">
                            <nav>
                                <h4>Navegue</h4>
                                <a href="#">Marketing</a>
                                <a href="#">Pessoas</a>
                                <a href="#">Gestão</a>
                                <a href="#">Eventos</a>
                                <a href="#">NMTV</a>
                            </nav>
                            <nav>
                                <a class="fonte-bold fonte-cor-brand" href="#">Marketplace</a>
                                <a class="fonte-bold fonte-cor-brand" href="#">Notas rápidas</a>
                                <a class="fonte-bold fonte-cor-brand" href="#">NM Cast</a>
                                <a class="fonte-bold fonte-cor-brand" href="#">NM TV</a>
                                <a class="fonte-bold fonte-cor-brand" href="#">NM2B</a>
                            </nav>
                            <nav>
                                <h4>Institucional</h4>
                                <a href="#">Sobre o Nosso Meio</a>
                                <a href="#">Anuncie conosco</a>
                                <a href="#">Política de privacidade</a>
                                <a href="#">Entre em contato</a>
                                <div class="divisor-48"></div>
                                <h4>Siga nossas Redes Sociais</h4>
                                <ul class="flex gap-16">
                                    <li><a href="#"><img src="images/icone-instagram-branca.svg" alt=""></a></li>
                                    <li><a href="#"><img src="images/icone-linkedin-branca.svg" alt=""></a></li>
                                    <li><a href="#"><img src="images/icone-youtube-branca.svg" alt=""></a></li>
                                    <li><a href="#"><img src="images/icone-twitter.svg" alt=""></a></li>
                                    <li><a href="#"><img src="images/icone-facebook.svg" alt=""></a></li>
                                </ul>
                            </nav>
                        </section>
                    </section>
                <div class="divisor-96"></div>
            </section>
        </section>
        <section class="copyright text-center">
            <section class="container">
                <small>© Todos os direitos reservados - Nosso Meio Produção de Conteúdo Ltda - 38.386.607/0001-24</small>
            </section>
        </section>
    </footer>

    <script src="js/splide.min.js"></script>

    <script>
        var splide_cast = new Splide( '.splide-cast', {
        perPage: 1,
        pagination: false,
        arrows: false,
        gap    : '32px',
        breakpoints: {
                640: {
                    perPage: 1,
                    padding: { left: 0, right: 100 },
                    gap    : '32px',
                    height : '265px',
                },
                480: {
                    perPage: 1,
                    padding: { left: 0, right: 100 },
                    gap    : '32px',
                    height : '265px',
                },
            },
        } );
        splide_cast.mount();

        var splide_tv = new Splide( '.splide-tv', {
        perPage: 1,
        pagination: false,
        arrows: false,
        gap    : '32px',
        breakpoints: {
                640: {
                    perPage: 1,
                    padding: { left: 0, right: 100 },
                    gap    : '32px',
                    height : '265px',
                },
                480: {
                    perPage: 1,
                    padding: { left: 0, right: 100 },
                    gap    : '32px',
                    height : '265px',
                },
            },
        } );
        splide_tv.mount();

        var splide_notas = new Splide( '.notas-cards', {
            perPage: 3,
            pagination: false,
            arrows: false,
            gap    : '32px',
            padding: { left: 0, right: 150 },
            breakpoints: {
                640: {
                    perPage: 1,
                    width : '100%',
                    padding: { left: 0, right: 64 },
                    gap    : '32px',
                    height : '84px',
                },
                480: {
                    perPage: 1,
                    width : '100%',
                    padding: { left: 0, right: 64 },
                    gap    : '32px',
                    height : '84px',
                },
            },
        } );
        splide_notas.mount();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var menuMobilePopup = document.querySelector('.menu-mobile-popup');
            var menuMobileIcon = document.querySelector('.menu-mobile img');

            // Adicione um evento de clique ao ícone do menu móvel
            menuMobileIcon.addEventListener('click', function (event) {
                // Impede que o link execute sua ação padrão
                event.preventDefault();

                // Alterne a visibilidade do menu popup
                if (menuMobilePopup.style.display === 'block') {
                    menuMobilePopup.style.display = 'none';
                    // Alterne para o ícone do menu hamburger
                    menuMobileIcon.src = 'images/menu-hamburger-mobile.svg';
                } else {
                    menuMobilePopup.style.display = 'block';
                    // Alterne para o ícone de fechar
                    menuMobileIcon.src = 'images/icone-fechar.svg';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            var menuMobileBarraFixaIcon = document.querySelector('.barra-titulo a img');
            var subMenuCategoria = document.querySelector('.barra-submenus');

            // Adicione um evento de clique ao ícone do menu móvel
            menuMobileBarraFixaIcon.addEventListener('click', function (event) {
                // Impede que o link execute sua ação padrão
                event.preventDefault();

                // Alterne a visibilidade do menu popup
                if (subMenuCategoria.style.display === 'none') {
                    subMenuCategoria.style.display = 'block';
                } else {
                    subMenuCategoria.style.display = 'none';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            // Função para adicionar ou remover a classe com base na largura da tela
            function ajustarClasseBarraTitulo() {
                var barraTitulo = document.querySelector('.barra-titulo');
                if (window.innerWidth <= 620) {
                    barraTitulo.classList.add('barra-titulo-mobile');
                } else {
                    barraTitulo.classList.remove('barra-titulo-mobile');
                }
            }

            // Execute a função quando a página carregar e redimensionar a tela
            window.addEventListener('load', ajustarClasseBarraTitulo);
            window.addEventListener('resize', ajustarClasseBarraTitulo);
        });


        // Selecione a barra
        var barra = document.querySelector('.barra-titulo');
        var submenus = document.querySelector('.barra-submenus');
        var barra_ajuste_posicao = document.querySelector('.barra-ajuste-posicao');

        // Obtenha a posição inicial da barra em relação ao topo da página
        var barraPosicaoInicial = barra.offsetTop;

        // Função para verificar a posição da barra e fixá-la quando necessário
        function fixarBarra() {
            if (window.pageYOffset >= barraPosicaoInicial) {
                barra.classList.add('barra-titulo-fixa');
                submenus.classList.add('barra-submenus-ajuste');
                barra_ajuste_posicao.style.display = "block";
            } else {
                barra.classList.remove('barra-titulo-fixa');
                submenus.classList.remove('barra-submenus-ajuste');
                barra_ajuste_posicao.style.display = "none";
            }
        }

        // Registre um evento de rolagem para chamar a função
        window.addEventListener('scroll', fixarBarra);


        document.addEventListener('DOMContentLoaded', function() {
            // Obtenha a URL atual
            var urlAtual = window.location.href;

            // Selecione todos os links do menu
            var linksDoMenu = document.querySelectorAll('ul li a');

            // Percorra os links do menu
            for (var i = 0; i < linksDoMenu.length; i++) {
                // Verifique se a URL atual corresponde à URL do link
                if (urlAtual === linksDoMenu[i].href) {
                    // Adicione a classe "active" ao link correspondente
                    linksDoMenu[i].classList.add('active');
                }
            }
        });

        
    </script>

</body>
</html>