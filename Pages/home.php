    <main>
        <div class="main-apresentation">
            <div class="apresentation-text">
                <h1 class="apresentation-title">
                    Uma Delícia,
                </h1>
                <h1 class="apresentation-subtitle">
                    Os mais deliciosos docinhos que você já comeu!
                </h1>

            </div>
            <div class="apresentation-img">
                <img class="img" src="images/foto-home.jpg" alt="">
            </div>

        </div>

        <section id="Items">
            <span class="title-items">Os queridinhos do público</span>
            <div class="icone-mouse">
                <span id="icon-mouse" class="iconify" data-inline="false" data-icon="emojione:face-savoring-food" style="color: #4d4d4d; font-size: 95px;"></span>
            </div>

            <div class="item1">
                <img src="images/item1-img.png" alt="">
                <div class="item-text">
                    <h1 class="item-title">
                        Brigadeiros
                    </h1>
                    <h1 class="item-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet purus eu nunc blandit, non dignissim velit laoreet. Quisque sodales non urna vitae tempor. Proin eget enim auctor, viverra lectus nec, semper justo. Etiam tristique hendrerit sapien sit amet facilisis. Vivamus pellentesque enim at tincidunt feugiat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam in turpis quis mauris fermentum maximus eu et ex. Suspendisse luctus quam arcu, at mattis quam feugiat eu.
                    </h1>
                </div>
            </div>

            <div class="item2">

                <div class="item-text">
                    <h1 class="item-title">
                        Beijinhos
                    </h1>
                    <h1 class="item-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet purus eu nunc blandit, non dignissim velit laoreet. Quisque sodales non urna vitae tempor. Proin eget enim auctor, viverra lectus nec, semper justo. Etiam tristique hendrerit sapien sit amet facilisis. Vivamus pellentesque enim at tincidunt feugiat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam in turpis quis mauris fermentum maximus eu et ex. Suspendisse luctus quam arcu, at mattis quam feugiat eu.
                    </h1>
                </div>
                <img src="images/beijinho.png" alt="">
            </div>

            </div>
        </section>
    </main>



    <!-- Imports Javascripts -->

    <!-- Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Iconify -->
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

    <!-- Animações JS - SmooveJS -->
    <script src="js/jquery.smoove.js"></script>

    <script>
        // Reproduzindo a animação
        $(".item1").smoove({
            offset: '40%',
            moveX: '200px',
            moveY: '200px',
        });

        $(".item2").smoove({
            offset: '40%',
            moveY: '100px',
            moveX: '-100px',
        });

        $(".item3").smoove({
            offset: '40%',
            moveY: '-200px',
        });
    </script>



    </body>

    </html>