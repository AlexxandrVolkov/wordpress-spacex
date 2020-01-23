<?php get_header(); ?>
            <div class="burger">
                <a href="#menu"><span></span></a>
            </div>
            <nav id="menu">
                <ul>
                    <li><a href='#'>Главная</a></li>
                    <li><a href='#'>Технология</a></li>
                    <li><a href='#'>График полетов</a></li>
                    <li><a href='#'>Гарантии</a></li>
                    <li><a href='#'>О компании</a></li>
                    <li><a href='#'>Контакты</a></li>
                </ul>

            </nav>
            <!-- mmenu scripts -->
            <script src="<?php bloginfo('template_directory') ?>/js/mmenu.polyfills.js"></script>
            <script src="<?php bloginfo('template_directory') ?>/js/mmenu.js"></script>
            <script>
                new Mmenu(document.querySelector('#menu'));

                document.addEventListener('click', function (evnt) {
                    var anchor = evnt.target.closest('a[href^="#/"]');
                    if (anchor) {
                        alert('Thank you for clicking, but that\'s a demo link.');
                        evnt.preventDefault();
                    }
                });
            </script>

        </header>
        <div class='wrapper'>
            <div class="content">
                <div class='journey'>
                    <h1 class='name'><?php bloginfo('name');?></h1>
                    <p class="new"><?php bloginfo('description');?></p>
                    <a href="#" class="btn">Начать путешествие</a>
                </div>

                <div class='advantages'>
                    <div class='advantage a1'> </br> мы <p>1</p> на рынке</div>
                    <div class='advantage a2'></br>гарантируем <p>50%</p> безопастность</div>
                    <div class='advantage a3'></br>календарик за<p class="year-calc"> 2001<p class="year">г.</p>
                        </p>в подарок</div>
                    <div class='advantage a4'></br>путешествие<p> 597</p> дней</div>
                </div>
            </div>
        </div> <!-- wrapper -->
    </div>
</body>

</html>