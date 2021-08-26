<?php require_once "../dados/array-produtos.php";

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$id = $_POST['id'];
$tablename = $_POST['array'];


if ($tablename == '$brigadeiros') {

    $nome = $brigadeiros[$id]['nome'];
    $preco = $brigadeiros[$id]['preco'];
    $img = $brigadeiro[$id]['imgPath'];
    $descricao = $brigadeiros[$id]['descricao'];
} else if ($tablename == '$beijinho') {
    $nome = $beijinho[$id]['nome'];
    $preco = $beijinho[$id]['preco'];
    $img = $beijinho[$id]['imgPath'];
    $descricao = $beijinho[$id]['descricao'];
} else if ($tablename == '$frutas') {
    $nome = $frutas[$id]['nome'];
    $preco = $frutas[$id]['preco'];
    $img = $frutas[$id]['imgPath'];
    $descricao = $frutas[$id]['descricao'];
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="imagem/png" href="images/brigadeiros.png" />

    <!----------------------- Import CSS ----------------------->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!-- Meus CSS  -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/todos-produtos.css">
    <link rel="stylesheet" href="../css/produto.css">
    <link rel="stylesheet" href="../css/localizacao.css">


    <!-- Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    </style>
    <title>Doces Sonhos-Site</title>
</head>

<body>
    <header>
        <div class="container-nav">
            <nav>
                <span id="logo" class="iconify" data-inline="false" data-icon="mdi:cupcake" style="color: #f95d82; font-size: 48px;"></span>
                <a id="Home" href="../index.php">Home</a>
                <a id="Produtos" href="../index.php">Produtos</a>
                <a id="Quem-somos" href="../index.php">Quem Somos</a>
                <a id="Contato" href="../index.php">Contato</a>
            </nav>
        </div>
        <hr class="separador">
    </header>
    <main id="main">

        <section>
            <div class="produto-especifico">
                <div class="produto_image" style="background: url('<?= $img ?>')">
                </div>
                <div class="produto_item">
                    <div class="produto_topo">
                        <div class="produto_title">
                            <h1><?= $nome ?></h1>
                        </div>
                        <div class="produto_preco">
                            <p>R$<?= $preco ?></p>
                        </div>
                    </div>
                    <div class="rating">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="produto_description">
                        <p>
                            <?= $descricao ?>
                        </p>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <footer>
        <div id="footer">
            <div class="footer-paginas">
                <h1>
                    Páginas
                </h1>
                <div class="text">
                    <a href="#">Home</a>
                    <a href="#">Quem Somos</a>
                    <a href="#">Contato</a>
                </div>
            </div>
            <div class="footer-designby">
                <h1>
                    Feito por:
                </h1>
                <div class="text">
                    <a href="#">Paulo R Bonato</a>
                    <a href="#">UNICESUMAR</a>
                    <a href="#">RA 20007407-5</a>
                </div>
            </div>
            <div class="footer-contato">
                <h1>
                    Contatos
                </h1>
                <div class="imgs">
                    <img src="images/github-fill.svg" alt="">
                    <img src="images/linkedin-icon.svg" alt="">
                    <img src="images/behance.svg" alt="">
                </div>
            </div>
            <div class="footer-sociais">
                <h1>
                    Redes Sociais
                </h1>
                <div class="imgs">
                    <img src="images/instagram-icon.svg" alt="Instagram">
                    <img src="images/facebook.svg" alt="Facebook">
                </div>
            </div>
        </div>
    </footer>

    </main>

    <!-- Imports Javascripts -->

    <!-- Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

    <script src="js/jquery.smoove.js"></script>

    <!-- Animações JS - SmooveJS -->
    <script>
        function chamar() {
            // Chamar pagina PHP para o index na div main
            $(document).ready(function() {
                $("#Home").click(function() {
                    $("#main").load("Pages/home.php");
                });
                $("#Produtos").click(function() {
                    $("#main").load("Pages/todos-produtos.php");
                });
                $("#Quem-Somos").click(function() {
                    $("#main").load("Pages/quem-somos.php");
                });
            });
            return
        }

        // Efeitos com JS

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