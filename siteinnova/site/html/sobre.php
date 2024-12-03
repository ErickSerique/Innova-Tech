<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/sobre.css"/>
    <title>Sobre Nós</title>
    <link rel="shortcut icon" href="../fotos home/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <!--Início NavBar-->
    <nav
      class="navbar navbar-expand-lg bg-body-tertiary bg-dark fixed-top border-bottom border-body"
      data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img
            src="../fotos home/logo1.png"
            alt="Avatar Logo"
            style="width: 50px"
            style="margin-left: 50px"/>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
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

    <!--Início Descrição-->
    <div class="container"style="margin-top:100px; margin-bottom:100px;">
      <div class="text-center">
        <h1 class="section-heading text-uppercase border-bottom" style="font-size: 4em">Nossa Equipe</h1>

        <p style="text-align: justify;">Somos a Innovatech, uma startup criada no primeiro semestre do ano de 2024 e somos constituídos por 12 membros, dentre eles conta com ceo, gerente, subgerente, analistas e social media. Visamos ser uma empresa de excelência dentro do mercado de trabalho, atendendo toda e qualquer demanda que nos seja imposta. Nosso belo trabalho é uma das característica que são visadas dentro da InnovaTech.</p><br>

        <p style="text-align: justify;">Nossa especialidade, iniciada através de um projeto social gratuito aberto ao público, é Inteligência Artificial. Foram lecionadas aulas sobre o tópico de IA, ensinando seu funcionamento, como criar prompts eficientes para textos e imagens, e quais são as diversas IAs em crescimento no mercado.</p><br>

        <p style="text-align: justify;">A Innovatech está a todo vapor com o nosso mais novo desafio que está sendo construir um site totalmente do zero! Nessa nova etapa para equipe, nos dividimos para conseguirmos dar conta e continuar mantendo esse trabalho dando o nosso melhor. O foco desse é promover a imagem da startup da Innovatech e trazer mais visibilidade para empresa visando capitar mais cliente para nosso serviços.</p>
      </div>
    </div> 
    <!--Fim Descrição-->

    <!--Início Eventos-->
    <div class="container" id="idevent"> <!--Local de Redirecionamento-->
      <h1 class="section-heading text-uppercase border-bottom text-center" style="font-size: 4em; margin-top: 100px">Eventos</h1>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../fotos home/Certificado Innova.jpg" class="d-block mx-auto" style="width: 1000px; height: 600px;" alt="Dia da criação da Innova Technology">
            <p class="text-center">16/04/2024 - Criação da Innova Technology</p>
          </div>
          <div class="carousel-item">
            <img src="../fotos home/Aulas de ia.png" class="d-block mx-auto" style="width: 1000px; height: 600px;" alt="Dia da primeira aula do curso de Inteligência Artificial">
            <p class="text-center">11/05/2024 - Primeira aula de Inteligência Artificial</p>
          </div>
          <div class="carousel-item">
            <img src="../fotos home/Apresentando o Site.jpg" class="d-block mx-auto" style="width: 1000px; height: 600px;" alt="Dia da apresentação do projeto inicial do site">
            <p class="text-center">01/10/2024 - Apresentação do projeto do Site</p>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!--Fim Eventos-->

    <!--CEO-->
    <section class="pri page-section" id="idteam"> <!--Local de Redirecionamento-->
      <div class="container">
        <div class="text-center">
          <h1 class="section-heading text-uppercase border-bottom" style="font-size: 4em">Nossa Equipe</h1>
          <h2 class="section-heading text-uppercase">CEO's</h2>
          <h3 class="section-subheading text-muted"></h3> <!--Local caso queira colocar um subtítulo-->
        </div>
        
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal1" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Pitter.jpg"
                alt="Foto do Pitter Sarres"/></a>
              <h4>Pitter Sarres</h4>
              <p class="text-muted">CEO</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/pitter_sarress"
                target="_blank"
                aria-label="Pitter Sarres instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/pitter-luiz/"
                target="_blank"
                aria-label="Pitter Sarres LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Pitter Sarres</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa calma e comunicativa, apresenta uma combinação que destaca suas habilidades de apoio e compreensão em interações sociais. Sua calma permite que ela lide com situações e pessoas de maneira tranquila e ponderada, criando um ambiente seguro e estável para aqueles ao seu redor. Essa característica ajuda a evitar conflitos e a resolver questões de forma pacífica e eficiente. Sua habilidade comunicativa é usada para expressar empatia e compreensão de maneira clara e envolvente. Ela sabe ouvir ativamente e responder de forma que transmite apoio e respeito, o que fortalece suas relações e ajuda a construir um ambiente colaborativo e harmonioso.                    
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal2" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Gabriel Magnani.jpg"
                alt="Foto Gabriel Magnani"/></a>
               <h4>Gabriel Magnani</h4>
              <p class="text-muted">CEO</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/magnanigabriel_/"
                target="_blank"
                aria-label="Gabriel Magnani instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/magnanigabriel/"
                target="_blank"
                aria-label="Gabriel Magnani LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Gabriel Magnani</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa introvertida e amigável, oferece uma combinação de suporte e compreensão em um estilo mais reservado e acessível. Sua introversão sugere que ela prefere interações mais íntimas e profundas, valorizando momentos de um-a-um e pequenos grupos onde pode se conectar de maneira mais significativa com os outros. Ela é naturalmente inclinada a ouvir e entender as necessidades das pessoas ao seu redor, mas de uma maneira que respeita seu espaço pessoal e suas preferências. Sua natureza amigável complementa essa abordagem, permitindo que ela crie e mantenha relacionamentos positivos e de apoio, mesmo dentro de um estilo mais reservado. Ela é acessível e acolhedora, o que faz com que os outros se sintam confortáveis e valorizados em sua presença.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">
              Nossos CEO's são encarregados de auxiliar a equipe durante os projetos, dando um norte e trazendo ideias sobre a operação em geral ou um projeto específico.
            </p>
          </div>
        </div>
      </div>
      <hr>
    </section>

    <!--Front-End-->
    <section class="page-section" id="team">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Front-End</h2>
          <h3 class="section-subheading text-muted"></h3> <!--Local caso queira colocar um subtítulo-->
        </div>
        
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal3" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Rafael Marques.jpg"
                alt="Foto Rafael Marques"/></a>
              <h4>Rafael Marques</h4>
              <p class="text-muted">Sub-gerente</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/rafael_alemao1/"
                target="_blank"
                aria-label="Rafael Marques instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/rafael-marques-8a3486287/"
                target="_blank"
                aria-label="Rafael Marques LinkedIn Profile"><i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Rafael Marques</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa dedicada, esforçada, divertida, engraçada, amigável e comunicativa, é uma combinação vibrante de energia social e compromisso com resultados. Essa pessoa tem uma habilidade natural para conectar-se com os outros, usando seu carisma e humor para criar ambientes positivos e motivadores. Sua natureza comunicativa permite que ela seja um excelente mediador e influenciador, capaz de inspirar e engajar aqueles ao seu redor. A dedicação e o esforço que ela coloca em suas tarefas são impulsionados por sua paixão por pessoas e seu desejo de ver os outros prosperarem. Ela não apenas trabalha duro, mas o faz com um entusiasmo contagiante, o que a torna uma líder informal em muitas situações, mesmo que não esteja em uma posição de autoridade formal.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal4" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Erick Serique.jpg"
                alt="Foto Erick Serique"/></a>
              <h4>Erick Serique</h4>
              <p class="text-muted">Analista</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/erick_serique/"
                target="_blank"
                aria-label="Erick Serique instagram Profile"><i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/erickserique/"
                target="_blank"
                aria-label="Erick Serique LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Erick Serique</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa inteligente, extrovertida, comunicativa, engraçada, empática e assertiva, combina habilidades sociais com um profundo entendimento e suporte aos outros. Essa pessoa é extrovertida e comunicativa, o que a torna habilidosa em interagir com diversos grupos e em criar um ambiente de trabalho positivo e colaborativo. Sua inteligência e empatia lhe permitem entender e responder às necessidades dos outros de maneira eficaz, fortalecendo suas relações interpessoais e promovendo um clima de confiança e cooperação. Ela usa seu senso de humor para criar uma atmosfera descontraída e agradável, o que ajuda a manter o moral da equipe elevado e facilita a resolução de conflitos de maneira leve. Ao mesmo tempo, sua assertividade garante que suas opiniões e necessidades sejam expressas de forma clara e respeitosa, sem comprometer a harmonia do grupo.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">
              Nossa equipe de front-end é composta por dois desenvolvedores especializados na criação de interfaces intuitivas e altamente responsivas, garantindo que o site ofereça uma experiência incrível para os usuários finais. Eles trabalham com as mais modernas tecnologias e ferramentas de desenvolvimento web, como HTML5, CSS3 e JavaScript.
            </p>
          </div>
        </div>
      </div>
      <hr>
    </section>

    <!--Back-End-->
    <section class="page-section" id="team">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Back-End</h2>
          <h3 class="section-subheading text-muted"></h3> <!--Local caso queira colocar um subtítulo-->
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal5" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Daniel Angelus.jpg"
                alt="Foto Daniel Angelus"/></a>
              <h4>Daniel Angelus</h4>
              <p class="text-muted">Analista</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/danielgaisilva19/"
                target="_blank"
                aria-label="Daniel Angelus instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/daniel-angelus/"
                target="_blank"
                aria-label="Daniel Angelus LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Daniel Angelus</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa inteligente, extrovertida, comunicativa e engraçada, apresenta uma combinação única de rigor analítico com uma presença social vibrante. Essa pessoa usa sua inteligência para abordar problemas e desafios com uma análise meticulosa e um forte senso de precisão. Embora o perfil cauteloso seja naturalmente inclinado a ser mais reservado e orientado a detalhes, a sua extroversão e habilidade comunicativa a tornam excepcionalmente eficaz em transmitir ideias complexas de maneira acessível e envolvente. Ela consegue transformar discussões técnicas e detalhadas em conversas dinâmicas e agradáveis, utilizando seu senso de humor para manter o ambiente leve e engajado. Sua capacidade de ser engraçada e comunicativa faz com que seja bem recebida em grupos, onde pode facilmente ganhar a confiança e o respeito dos outros, mesmo em situações que demandam rigor e atenção aosdetalhes.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal6" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Carlos Moccini.jpg"
                alt="Foto Carlos Moccini"/></a>
              <h4>Carlos Moccini</h4>
              <p class="text-muted">Analista</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/moccinivlk/"
                target="_blank"
                aria-label="Carlos Moccini instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/carlos-moccini/"
                target="_blank"
                aria-label="Carlos Moccini LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Carlos Moccini</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa comunicativa, séria e criativa, oferece uma combinação interessante de características que equilibram confiabilidade e inovação. Embora o perfil estável seja geralmente associado a uma abordagem calma e ponderada, a comunicação eficaz dessa pessoa permite que ela compartilhe suas ideias e colabore de maneira clara e envolvente. Sua seriedade reflete um comprometimento profundo com suas responsabilidades e um alto padrão de profissionalismo, garantindo que suas contribuições sejam sempre consistentes e de alta qualidade. Sua criatividade adiciona uma dimensão inovadora ao seu perfil estável. Ela é capaz de pensar fora da caixa e encontrar soluções originais, ao mesmo tempo em que mantém a abordagem equilibrada e metódica característica do perfil estável. A criatividade é usada de forma prática e direcionada, contribuindo para o desenvolvimento de novas ideias e melhorias dentro de um ambiente de trabalho estável e confiável.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">
              Nossa equipe de back-end é composta por dois desenvolvedores especializados em criar a estrutura robusta e escalável que suporta o site, garantindo que ele funcione de forma estável e eficiente. Eles são responsáveis por toda a lógica de negócios, segurança de dados e integração com outras plataformas, trabalhando com linguagens e frameworks como Python, Java, e bancos de dados como MySQL.
            </p>
          </div>
        </div>
      </div>
      <hr>
    </section>

    <!--Design-->
    <section class="page-section" id="team">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Design</h2>
          <h3 class="section-subheading text-muted"></h3> <!--Local caso queira colocar um subtítulo-->
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal7" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/kaio.jpg"
                alt="Foto Kaio Meirelles"/></a>
              <h4>Kaio Meirelles</h4>
              <p class="text-muted">Analista</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/k.meirelless/"
                target="_blank"
                aria-label="Kaio Meirelles instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/kaio-meirelles-37b4562b6/"
                target="_blank"
                aria-label="Kaio Meirelles LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Kaio Meirelles</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa criativa e introvertida, apresenta uma combinação poderosa de análise estratégica e foco inovador. Essa pessoa é determinada e orientada para resultados, típicos do perfil dominante, mas aborda suas metas com uma atenção minuciosa aos detalhes e um pensamento crítico profundo, próprios do perfil cauteloso. Sua criatividade a leva a buscar soluções inovadoras, muitas vezes explorando abordagens que outros poderiam não considerar. Como introvertida, ela prefere trabalhar de forma independente, utilizando seu tempo sozinho para refletir e desenvolver ideias complexas. Essa introspecção, combinada com sua natureza dominante, faz com que ela seja altamente eficaz em ambientes que exigem tanto liderança quanto pensamento analítico. Ela não busca a atenção, mas seu trabalho de alta qualidade e sua capacidade de tomar decisões bem fundamentadas a destacam naturalmente.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal8" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Otavio Fructuoso.jpg"
                alt="Foto Otávio Fructuoso"/></a>
              <h4>Otávio Fructuoso</h4>
              <p class="text-muted">Analista</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/otaviio_9/"
                target="_blank"
                aria-label="Otávio Fructuoso instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/otávio-fructuoso-bab260205/"
                target="_blank"
                aria-label="Otávio Fructuoso LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Otávio Fructuoso</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa comunicativa e extrovertida, é uma força dinâmica e assertiva em qualquer ambiente. Essa pessoa é assertiva e orientada para resultados, características típicas do perfil dominante. Ela possui uma forte capacidade de liderança e uma clara visão de objetivos, utilizando sua comunicação eficaz para inspirar e direcionar os outros. Sua extroversão amplifica sua habilidade de interagir e influenciar amplos grupos, tornando-a uma presença marcante e motivadora. Sua comunicação é direta e persuasiva, o que a ajuda a articular suas ideias e estratégias com clareza e convicção. Sua natureza extrovertida a torna ativa em conversas e em buscar oportunidades para se conectar com outras pessoas, frequentemente assumindo um papel central em grupos e equipes.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">
              Nossa equipe de design é composta por dois profissionais talentosos, responsáveis por criar uma experiência visual atraente e funcional para o site. Eles cuidam de todo o aspecto estético e de usabilidade, desde a criação de interfaces agradáveis até a definição de uma identidade visual forte e coerente. Utilizando ferramentas como Figma, eles transformam ideias em interfaces intuitivas e envolventes.
            </p>
          </div>
        </div>
      </div>
      <hr>
    </section>

    <!--Redação-->
    <section class="page-section" id="team">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Redação</h2>
          <h3 class="section-subheading text-muted"></h3> <!--Local caso queira colocar um subtítulo-->
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal9" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Luis Barbosa.jpg"
                alt="Foto Luís Barbosa"/></a>
              <h4>Luís Barbosa</h4>
              <p class="text-muted">Gerente</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/ft.luuis/"
                target="_blank"
                aria-label="Luís Barbosa instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/luís-felipe-barbosa-correa-482488287/"
                target="_blank"
                aria-label="Luís Barbosa LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Luís Barbosa</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa comunicativa e engraçada que combina assertividade e presença de espírito com uma abordagem acessível e descontraída. Essa pessoa é capaz de liderar e tomar decisões com confiança, mas o faz de maneira que engaja os outros através de uma comunicação clara e eficaz. Seu senso de humor acrescenta uma leveza às interações, tornando-a não apenas respeitada, mas também apreciada pelos colegas. A combinação de ser dominante e estável significa que ela mantém a calma sob pressão, usando o humor como uma ferramenta para desarmar tensões e criar um ambiente positivo. Ao mesmo tempo, sua estabilidade garante que, mesmo sendo divertida e extrovertida, ela permanece confiável e consistente, equilibrando bem a necessidade de alcançar resultados com a importância de manter boas relações interpessoais. Isso faz com que seja uma presença forte e influente, mas também acessível e agradável de se trabalhar.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal10" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Daniel dos Santos.jpg"
                alt="..." /></a>
              <h4>Daniel dos Santos</h4>
              <p class="text-muted">Redator</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/s1lva.daniel"
                target="_blank"
                aria-label="Daniel Silva instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/daniel-silva-8399a8311/"
                target="_blank"
                aria-label="Daniel Silva LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Daniel dos Santos</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa introvertida, comunicativa e séria, demonstra uma combinação única de características que equilibram uma abordagem reservada com habilidades eficazes de comunicação. Embora a pessoa seja introvertida, o que sugere uma preferência por ambientes mais tranquilos e um foco maior em interações individuais ou em pequenos grupos, sua natureza comunicativa permite que ela compartilhe informações e se conecte de forma clara e eficiente com os outros. Sua comunicação é bem pensada e ponderada, refletindo uma habilidade para expressar ideias e sentimentos de maneira eficaz sem a necessidade de se expor excessivamente. Sua seriedade indica que ela aborda suas responsabilidades com um alto nível de compromisso e profissionalismo. Ela leva seu trabalho e relacionamentos a sério, mantendo um padrão elevado de precisão e cuidado em suas interações e tarefas.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">
              Nossa equipe de redação é formada por dois profissionais especializados em criação de conteúdo, responsáveis por garantir que o site comunique a mensagem da empresa de maneira clara, envolvente e alinhada com o tom de voz da marca. Eles cuidam de toda a parte textual, desde a redação de artigos e descrições de produtos até o desenvolvimento de conteúdos institucionais e persuasivos, sempre visando atrair e engajar os visitantes.
            </p>
          </div>
        </div>
      </div>
      <hr>
    </section>

    <!--Suporte-->
    <section class="page-section" id="team">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Suporte</h2>
          <h3 class="section-subheading text-muted"></h3> <!--Local caso queira colocar um subtítulo-->
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal11" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Joao Pedro.jpg"
                alt="Foto João Pedro"/></a>
              <h4>João Pedro</h4>
              <p class="text-muted">Analista</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/jsslattyy/"
                target="_blank"
                aria-label="João Pedro instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/joão-pedro-barbosa-correa-65991a263/"
                target="_blank"
                aria-label="João Pedro LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>João Pedro</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa extrovertida, que combina a natureza calma e cooperativa típica do perfil estável com uma disposição sociável e aberta. Essa pessoa, apesar de sua inclinação para criar um ambiente harmonioso e suportar os outros, também desfruta de interações sociais e se sente confortável em ambientes com muito contato humano. Sua extroversão permite que ela se conecte facilmente com colegas e outras pessoas, contribuindo para um clima de trabalho positivo e amigável. Ela usa sua natureza extrovertida para construir e manter relações sólidas, promovendo uma comunicação fluida e um ambiente de equipe coeso. Sua abordagem estável a faz confiável e consistente, enquanto sua sociabilidade ajuda a criar uma atmosfera de camaradagem e colaboração.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal12" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Davi Lemos.jpg"
                alt="Foto Davi Lemos"/></a>
              <h4>Davi Lemos</h4>
              <p class="text-muted">Social Media</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/_lemosdavi/"
                target="_blank"
                aria-label="Davi Guilherme instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/davi-lemos-8b525a304/"
                target="_blank"
                aria-label="Davi Guilherme LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Davi Lemos</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Uma pessoa séria e comunicativa, combina uma abordagem calmante e confiável com habilidades eficazes de interação. Embora o perfil estável seja geralmente associado a uma natureza tranquila e um desejo de manter a harmonia, a característica de ser séria indica que essa pessoa leva suas responsabilidades e compromissos a sério, abordando tarefas e relacionamentos com um senso de responsabilidade e profissionalismo. Sua habilidade comunicativa permite que ela expresse suas ideias e sentimentos de maneira clara e eficiente, sem comprometer a sua abordagem calma e ponderada. Isso a torna eficaz em manter um diálogo aberto e construtivo, enquanto continua a promover um ambiente de trabalho estável e colaborativo.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal23" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Thiago Halfeld.jpeg"
                alt="Foto Thiago Halfeld"/></a>
              <h4>Thiago Halfeld</h4>
              <p class="text-muted">Analista</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/thiagohalfeld_/"
                target="_blank"
                aria-label="Thiago Halfeld instagram Profile">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/thiago-halfeld-5a96b9271/"
                target="_blank"
                aria-label="Thiago Halfeld LinkedIn Profile"><i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Thiago Halfeld</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Com seu instinto comunicativo e sua personalidade extrovertida, ele lida com o trabalho em equipe com excelência e prontidão. Sua capacidade de se expressar claramente e de ouvir atentamente aos outros faz com que se torne o ponto de conexão entre os membros do grupo. Sempre disposto a colaborar, ele não hesita em contribuir com ideias eficazes, que frequentemente impulsionam o progresso da equipe. Seu entusiasmo e energia são contagiantes, criando um ambiente de trabalho positivo e motivador. Ele sabe como adaptar sua comunicação para diferentes situações, facilitando a troca de informações e garantindo que todos se sintam ouvidos e valorizados. Essa habilidade de engajar os outros, junto com seu compromisso com o sucesso coletivo, faz dele um pilar em qualquer projeto que esteja envolvido.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="team-member">
              <a data-bs-toggle="modal"data-bs-target="#exampleModal24" href=""><img
                class="mx-auto rounded-circle"
                src="../fotos participantes/Thalles Molina.jpeg"
                alt="Foto Thalles Molina"/></a>
              <h4>Thalles Molina</h4>
              <p class="text-muted">Analista</p>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.instagram.com/daswavebeats/"
                target="_blank"
                aria-label="Thalles Molina instagram Profile"><i class="fa-brands fa-instagram"></i>
              </a>
              <a
                class="btn btn-dark btn-social mx-2"
                href="https://www.linkedin.com/in/thalles-molina-001401217/"
                target="_blank"
                aria-label="Thalles Molina LinkedIn Profile">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div class="modal t-modal fade" id="exampleModal24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Thalles Molina</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Foco, pontualidade e destreza o caracterizam como uma pessoa de extrema eficiência e compromisso. Seu olhar atento aos detalhes é impecável, o que permite enfrentar qualquer desafio com concentração total. Não importa a complexidade da tarefa, ele a aborda com precisão, mantendo sempre o foco no objetivo final. Sua pontualidade é notável, seja em prazos ou compromissos, garantindo que nunca se desvie do cronograma. Além disso, sua destreza, tanto no pensamento quanto na execução, é um reflexo de anos de prática e dedicação. Com habilidade e rapidez, ele é capaz de lidar com situações inesperadas, sempre se adaptando com agilidade. Juntas, essas qualidades fazem dele um profissional admirado e respeitado por sua postura e seu desempenho exemplar.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">
              Nossa equipe de suporte é formada por quatro profissionais dedicados a garantir que os usuários do site recebam a ajuda e orientação de que precisam de forma ágil e eficiente. Eles são responsáveis por resolver problemas técnicos, esclarecer dúvidas e oferecer uma experiência tranquila e satisfatória para os usuários. Utilizando ferramentas de atendimento como chats ao vivo, e-mail e central de ajuda, eles estão sempre prontos para dar suporte em tempo real.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--Início Rodapé-->
    <footer class="footer">
      <div class="pe container">
        <div class="pe row">
          <div class="col-md-4 rounded-circle img-fluid">
            <img
              src="../fotos home/logo1.png"
              alt="Innova Technology Logo"
              class="logo"/>
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
            <p1>
              Copyright © 2024 Innova Technology. Todos os direitos reservados.
            </p1>
            <div class="social-icons">
              <a href="https://www.instagram.com/innovatech.usj" target="_blank" class="button2"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/company/innovatech2024/about/" target="_blank" class="button2"><i class="fab fa-linkedin-in"></i></a>
              <a href="https://chat.whatsapp.com/DhUbximOPMrGQ5E0iAGH55" target="_blank" class="button2"><i class="fa-brands fa-whatsapp"></i></a>
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