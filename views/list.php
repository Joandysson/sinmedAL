<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'layouts/head.php'; ?>

    <link rel="preload" href="assets/css/list.min.css" as="style">
    <link rel="stylesheet" href="assets/css/list.min.css">
</head>

<body>
    <?php include 'layouts/header.php'; ?>
    <main>
        <article>
            <section class="container">
                <div class="row">
                    <div class="col-md-12 mt-2 mb-2">
                        <div class="row">
                            <div class="col-md-12 title-default">
                                Notícias
                            </div>
                        </div>
                    </div>
                    <?php for ($i = 0; $i < 16; $i++) { ?>
                        <div class="col-md-3">
                            <a href="leitura">
                                <div class="mini-card">
                                    <div style="background-image: url('https://via.placeholder.com/300x400/DDDDDD/808080');"></div>
                                </div>
                                <small>10/03/2020</small>
                                <h2 class="emphasis-title">Restaurante Janga - Ponta Verde</h2>
                            </a>
                        </div>
                    <?php } ?>

                </div>
                <br>
                <div class="d-flex justify-content-lg-center">
                    <div class="see-more">
                        Carregar mais
                    </div>
                </div>
                <br>
                <br>
                <br>

            </section>
        </article>
    </main>

    <?php include 'layouts/footer.php'; ?>
</body>

</html>