<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include 'layouts/head.php'; ?>

  <link rel="preload" href="assets/css/home.min.css" as="style">
  <link rel="stylesheet" href="assets/css/home.min.css">
</head>

<body>
  <?php include 'layouts/header.php'; ?>
  <main>
    <article>
      <header class="container">
        <div class="row emphasis">
          <div class="col-lg-9">
            <div class="row">
              <div class="col-lg-10 title-default mt-3 mb-2">
                Destatques
              </div>
              <div class="col-lg-2 d-flex align-items-center justify-content-end mt-3 mb-2">
                <div class="next-preview"></div>
                <div class="next-preview"></div>
                <div class="next-preview active"></div>
                <div class="next-preview"></div>
                <div class="next-preview"></div>
              </div>
              <div class="col-lg-12">
                <div class="big-card">
                  <div style="background-image: url('https://via.placeholder.com/300x400/DDDDDD/808080');"></div>''
                </div>
                <h2 class="emphasis-title"> Ação que exige EPIS e rodízio de profissionais foi ganha na Justiça do Trabalho </h2>
                <p class="emphasis-description"> A Justiça do Trabalho deu ganho de causa a ação impetrada pelo Departamento Juridico do Sinmed sexta feira, dia 26. requerendo direito dos medicos aos EPIS, em caráter de urgência, bem como solicitou que o municipio de Macelo cumpra o sistema </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="row">
              <div class="col-lg-8 title-default mt-3 mb-2">
                Benefícios
              </div>
              <div class="col-lg-4 mt-3 mb-2">
                <div class="see-all">
                  Ver todo
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="mini-card">
                <div style="background-image: url('https://via.placeholder.com/300x400/DDDDDD/808080');"></div>
              </div>
              <h2 class="emphasis-title">Restaurante Janga - Ponta Verde</h2>
              <p class="emphasis-description">Ada plas pan duas ou mais pessoas Solmes é cortena paa 9sociudos</p>
            </div>
            <div class="col-lg-12">
              <div class="mini-card">
                <div style="background-image: url('https://via.placeholder.com/300x400/DDDDDD/808080');"></div>
              </div>
              <h2 class="emphasis-title">Restaurante Janga - Ponta Verde</h2>
              <p class="emphasis-description">Ada plas pan duas ou mais pessoas Solmes é cortena paa 9sociudos</p>
            </div>
          </div>
        </div>
      </header>
      <section class="container">
        <div class="row">
          <div class="col-sm-12 mt-2 mb-2">
            <div class="row">
              <div class="col-sm-11 title-default">
                Notícias
              </div>
              <div class="col-sm-1">
                <div class="see-all">
                  Ver todo
                </div>
              </div>
            </div>
          </div>
          <?php for($i=0; $i<4; $i++) { ?>
          <div class="col-sm-3 mt-3 mb-5">
            <div class="mini-card">
              <div style="background-image: url('https://via.placeholder.com/300x400/DDDDDD/808080');"></div>
            </div>
            <small>10/03/2020</small>
            <h2 class="emphasis-title">Restaurante Janga - Ponta Verde</h2>
          </div>
          <?php } ?>

        </div>
      </section>
      <section class="services">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col d-flex flex-column justify-content-center align-items-center">
              <img width="50px" src="assets/img/logo_v3.png" alt="">
              <h2 class=emphasis-title>Ouvidoria</h2>
              <p class="emphasis-description">Sugestões, criticas e elogoios</p>
            </div>
            <div class="col-sm d-flex flex-column justify-content-center align-items-center">
              <img width="50px" src="assets/img/sus.png" alt="">
              <h2 class=emphasis-title>PCCV Download</h2>
              <p class="emphasis-description">Valorizando a careira médica</p>
            </div>
            <div class="col-sm d-flex flex-column justify-content-center align-items-center">
              <img width="50px" src="assets/img/convesao.png" alt="">
              <h2 class=emphasis-title>Convesão coletiva</h2>
              <p class="emphasis-description">Convesão 2020</p>
            </div>
            <div class="col-sm d-flex flex-column justify-content-center align-items-center">
              <img width="50px" src="assets/img/user.png" alt="">
              <h2 class=emphasis-title>Atenção Plantonista</h2>
              <p class="emphasis-description">Conheça os seus direitos</p>
            </div>
            <div class="col-sm d-flex flex-column justify-content-center align-items-center">
              <img width="50px" src="assets/img/boletim.png" alt="">
              <h2 class=emphasis-title>Cadastro de boletim</h2>
              <p class="emphasis-description">Emails com notícias semanais</p>
            </div>
          </div>
        </div>
      </section>
      <section class="container third-party mt-3 mb-3">
        <div class="row">
          <div class="col-sm-6">
            <div class="title-default">
              Campanhas
            </div>
            <div class="w-100 h-200" style="background-image: url(https://via.placeholder.com/120x200/DDDDDD/808080);"></div>
          </div>
          <div class="col-sm-6">
            <div class="title-default">
              Unimed
            </div>
            <div class="w-100 h-200" style="background-image: url(https://via.placeholder.com/120x200/DDDDDD/808080);"></div>
          </div>
        </div>
      </section>
    </article>
  </main>

  <?php include 'layouts/footer.php'; ?>
</body>

</html>