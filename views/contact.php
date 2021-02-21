<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include 'layouts/head.php'; ?>

    <link rel="preload" href="assets/css/contact.min.css" as="style">
    <link rel="stylesheet" href="assets/css/contact.min.css">
</head>

<body>
    <?php include 'layouts/header.php'; ?>
    <main>
        <article>
            <section class="container mb-5 mt-3">
                <div class="title-default mb-4">Fale conosco</div>
                <div class="row justify-content-md-between">
                    <div class="col-sm-5 mb-4">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input class="" type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input class="" type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input class="" type="tel" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Assunto</label>
                                <input class="" type="text" id="subject" name="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Assunto</label>
                                <textarea name="message" id="message" cols="30" rows="5" required></textarea>
                            </div>
                            <input type="submit" class="mt-3" value="Enviar mensagem">
                        </form>
                    </div>
                    <div class="col-sm-5">
                        <div class="title">Nossa localização</div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.0902013528116!2d-35.75846628520844!3d-9.673333993075584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7014f93fb3bb1a3%3A0x61b752ccbcbab1bb!2sR.%20Prof.%20Te%C3%B4nilo%20Gama%2C%20196%20-%20Trapiche%20da%20Barra%2C%20Macei%C3%B3%20-%20AL%2C%2057010-384!5e0!3m2!1sen!2sbr!4v1613832431419!5m2!1sen!2sbr" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div>
                            <small>R. Prof. Teonilo Gama, 186 - Trapiche da Barra Maceió/AL CEP: 57010-384</small>
                            <div class="title">Outras formas de contato</div>

                            <small> (82) 3221-0461 </small>
                            <small> comunicacao@sinmedal.com.br </small>
                            <small> diretoria@sinmedal.com.br </small>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>

    <?php include 'layouts/footer.php'; ?>
</body>

</html>