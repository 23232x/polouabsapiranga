    <footer class="footer">
        <div class="container">
            <!-- primeira coluna logo -->
            <div class="footer-item">
                <a href="">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/footer/logo-polo_footer.svg" alt="">
                </a>
            </div>

            <!-- segunda coluna - cursos de graduação -->
            <section class="footer-item">
                <h2>Graduação</h2>
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
                <h2>Pós-Graduação</h2>
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
                <h2>Acesso Rápido</h2>
                <ul>
                    <li><a href="#" title="">Home</a></li>
                    <li><a href="#" title="">Contato</a></li>
                    <li><a href="#" title="">Editais</a></li>
                    <li><a href="#" title="">Acessibilidade</a></li>
                    <li><a href="#" title="">Atendimento</a></li>
                    <li><a href="#" title="">Blog</a></li>
                    <li><a href="#" title="">Termos de uso</a></li>
                    <li><a href="#" title="">Políticas de Privacidade</a></li>
                    <li><a href="#" title="">Biblioteca</a></li>
                </ul>

                <ul class="social-medias">
                    <!-- youtube -->
                    <li>
                        <a href="">
                            <img src="img/footer/social/insta.svg" alt=""></a>
                    </li>

                    <!-- facebook -->
                    <li>
                        <a href="">
                            <img src="img/footer/social/face.svg" alt=""></a>
                    </li>

                    <!-- youtube -->
                    <li>
                        <a href="">
                            <img src="img/footer/social/youtube.svg" alt=""></a>
                    </li>

                    <!-- whatsapp -->
                    <li>
                        <a href="">
                            <img src="img/footer/social/whats.svg" alt=""></a>
                    </li>

                    <!-- twitter -->
                    <li>
                        <a href="">
                            <img src="img/footer/social/twitter.svg" alt=""></a>
                    </li>
                </ul>
            </section>
        </div>

        <nav class="menu-footer container">
            <ul class="">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Noticias</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </nav>

        <div class="copy">
            <span class="">Polo Universitário de Sapiranga - Todos os Direitos reservados</span>
        </div>
    </footer>


    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/menu.js"></script>
        <!-- Swiper JS -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> 

        <!-- Initialize Swiper -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/swiper.js"></script>       
        
        <!-- <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script> -->


    <!-- wordpress footer -->
    <?php wp_footer(); ?>
    </body>

    </html>



