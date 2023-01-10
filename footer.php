    <footer class="footer">
        <div class="container">
            <!-- primeira coluna logo -->
            <div class="footer-item">
                <a href="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/logo-polo_footer.svg" alt="">
                </a>
            </div>

            <!-- segunda coluna - cursos de graduação -->
            <section class="footer-item">
                <h4>Graduação</h4>
                <ul>
                    <li><a href="#" title="">Filosofia (UFPEL)</a></li>
                    <li><a href="#" title="">Matemática (UFPEL)</a></li>
                    <li><a href="#" title="">Geografia</a></li>
                    <li><a href="#" title="">Pedagogia (FURG)</a></li>
                    <li><a href="#" title="">Sistemas para internet (IFSUL)</a></li>
                    <li><a href="#" title="">Letras espanhol (UFPEL)</a></li>
                    <li><a href="#" title="">História (UFPEL)</a></li>
                </ul>
            </section>

            <!-- segunda coluna - cursos de pós-graduação -->
            <section class="footer-item">
                <h4>Pós-Graduação</h4>
                <ul>
                    <li><a href="#" title="">Gestão da educação(UFRGS)</a></li>
                    <li><a href="#" title="">Educação em direitos humanos (FURG)</a></li>
                    <li><a href="#" title="">Filosofia (UFPEL)</a></li>
                    <li><a href="#" title="">Ciências é 10 (FURG)</a></li>
                    <li><a href="#" title="">Artes (UFPEL)</a></li>
                    <li><a href="#" title="">Educação física (UFPEL)</a></li>
                    <li><a href="#" title="">Espaços e possibilidades para a educação continuada (IFSUL)</a></li>
                </ul>
            </section>

            <!-- segunda coluna - cursos de pós-graduação -->
            <section class="footer-item">
                <h4>Acesso Rápido</h4>
                <ul>
                    <li><a href="/polouabsapiranga/home" title="">Home</a></li>
                    <li><a href="/polouabsapiranga/contato" title="">Contato</a></li>
                    <li><a href="/polouabsapiranga/editais" title="">Editais</a></li>
                    <li><a href="/polouabsapiranga/biblioteca" title="">Biblioteca</a></li>
                    <li><a href="#" title="">Blog</a></li>
                    <li><a href="/polouabsapiranga/faq" title="">FAQ</a></li>
                    <li><a href="#" title="">Acessibilidade</a></li>
                    <!-- <li><a href="#" title="">Atendimento</a></li> -->

                    <li><a href="/polouabsapiranga/termos-de-uso" title="">Termos de uso</a></li>
                    <li><a href="/polouabsapiranga/politicas-de-privacidade" title="">Políticas de Privacidade</a></li>

                </ul>


            </section>
        </div>

        <nav class="menu-footer container">
            <ul class="social-medias">
                <!-- youtube -->
                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/social/insta.svg" alt="">
                    </a>
                </li>

                <!-- facebook -->
                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/social/face.svg" alt="">
                    </a>
                </li>

                <!-- youtube -->
                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/social/youtube.svg" alt="">
                    </a>
                </li>

                <!-- whatsapp -->
                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/social/whats.svg" alt="">
                    </a>
                </li>

                <!-- twitter -->
                <li>
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer/social/twitter.svg" alt="">
                    </a>
                </li>
            </ul>
        </nav>

        <div class="copy">
            <span class=""><?php echo date('Y'); ?> - Polo Universitário de Sapiranga.</span>
        </div>
    </footer>

    <!-- wordpress footer -->
    <?php wp_footer(); ?>

    <!-- Resource vlibra -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>




    </body>

    </html>