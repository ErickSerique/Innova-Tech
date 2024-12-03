<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/login.css"/>
    <style>
      strong {
        color: rgb(107, 0, 128);
      }
    </style>
    <title>Login</title>
    <link rel="shortcut icon" href="../fotos home/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <!--Início NavBar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark fixed-top border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="../fotos home/logo1.png" alt="Avatar Logo" style="width: 50px" style="margin-left: 50px"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item1">
              <a class="nav-link active" aria-current="page" href="index.php" target="_self">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.php#idservice" target="_self">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="sobre.php" target="_self">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.php#idcontact" target="_self">Contatos</a>
            </li>
          </ul>

          <div class="button-borders">
            <a href="login.php" target="_self"><button class="primary-button">LOGIN</button></a>
          </div>
          <div class="button-borders">
            <a href="cadastro.php" target="_self"><button class="primary-button">CADASTRO</button></a>
          </div>
        </div>
      </div>
    </nav>
    <!--Fim NavBar-->

    <section class="h-100 gradient-form" style="background-color: #212138">
      <div class="container py-4 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-8">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-4 mx-md-3">
                      <div class="text-center">
                        <img
                          src="../fotos home/logo.png"
                          style="width: 150px"
                          alt="logo"/>
                        <h4 class="mt-1 mb-5 pb-1">Nós somos a <strong>InnovaTech</strong></h4>
                      </div>
                      <!--Início Formulário-->
                      <form action="../processos_db/processa_login.php" method="POST" id="form">
                        <p>Faça o seu Login:</p>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form2Example11">Usuário</label>
                            <input type="email" id="login" class="form-control" placeholder="Número de telefone ou endereço de e-mail"/>
                            <i class="fa fa-exclamation-circle"></i>
                            <i class="fa fa-check-circle"></i>
                            <small>Mensagem de erro</small>
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form2Example22">Senha</label>
                            <input type="password" id="senha" class="form-control"/>
                            <i class="fa fa-exclamation-circle"></i>
                            <i class="fa fa-check-circle"></i>
                            <small>Mensagem de erro</small>
                        </div>
                        <div class="text-center pt-1 mb-4 pb-1">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-2" style="width: 100%" type="submit">Login</button>
                            <div class="mt-1">
                                <a class="text-muted" href="index.php#idcontact" target="_self">Esqueceu a senha?</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pb-3">
                            <p class="mb-0 me-2">Não tem uma conta?</p>
                            <a href="cadastro.php" target="_self"><button type="button" class="btn btn-gradient-purple px-3 me-sm-3">Criar nova</button></a>
                        </div>
                      </form>
                      <!--Fim Formulário-->
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <div class="text-white px-3 py-4 p-md-4 mx-md-3">
                    <h4 class="mb-4">Nós somos mais do que apenas uma empresa</h4>
                    <p class="small mb-0">
                      Nós traremos conhecimento e inovação para você, seja você uma empresa buscando soluções tecnológicas ou um indivíduo querendo se aprimorar. Na Innova Technology, nosso compromisso é proporcionar as ferramentas e o suporte que você precisa para alcançar seus objetivos com eficiência e criatividade.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Início Rodapé-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 rounded-circle img-fluid">
            <img src="../fotos home/logo1.png" alt="Innova Technology Logo" class="logo"/>
            <p>Conheça uma nova forma de ver o mundo!</p>
          </div>
          <div class="col-md-2">
            <h5>Principais Links</h5>
            <ul>
              <li><a href="index.php#idhome" target="_self">Home</a></li>
              <li><a href="index.php#idservice" target="_self">Serviços</a></li>
              <li><a href="sobre.php" target="_self">Sobre Nós</a></li>
              <li><a href="termos.php" target="_self">Termos & Condições</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h5>Comunidade</h5>
            <ul>
              <li><a href="index.php#idcontact" target="_self">Suporte</a></li>
              <li><a href="sobre.php#idevent" target="_self">Eventos</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h5>Parceiros</h5>
            <ul>
              <li><a href="sobre.php#idteam" target="_self">Nossa Equipe</a></li>
            </ul>
          </div>
          <div class="border-top">
            <p>Copyright © 2024 Innova Technology. Todos os direitos reservados.</p>
            <div class="social-icons">
              <a href="https://www.instagram.com/innovatech.usj" target="_blank" class="button2"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/company/innovatech2024/about/" target="_blank" class="button2"><i class="fa fa-linkedin"></i></a>
              <a href="https://chat.whatsapp.com/DhUbximOPMrGQ5E0iAGH55" target="_blank" class="button2"><i class="fa fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
    </script>
    <script src="login1.js"></script>
    
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