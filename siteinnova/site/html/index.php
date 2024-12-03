<?php
include '../processos_db/db_connect.php'; // Inclui a conexão com o banco de dados

$mensagem = ''; // Inicializa a variável para feedback do formulário

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitiza os dados recebidos
    $nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $assunto = trim(filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING));
    $mensagemTexto = trim(filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING));

    // Validação básica
    if (empty($nome) || empty($email) || empty($assunto) || empty($mensagemTexto)) {
        $mensagem = "Todos os campos são obrigatórios.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = "Formato de email inválido.";
    } else {
        try {
            // Prepara a inserção no banco
            $stmt = $pdo->prepare("INSERT INTO mensagem_suporte (nome, email, assunto, mensagem) VALUES (:nome, :email, :assunto, :mensagem)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':assunto', $assunto);
            $stmt->bindParam(':mensagem', $mensagemTexto);

            // Executa e verifica o resultado
            if ($stmt->execute()) {
                $mensagem = "Mensagem enviada com sucesso!";
            } else {
                $mensagem = "Erro ao enviar a mensagem. Tente novamente.";
            }
        } catch (Exception $e) {
            $mensagem = "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
    }
}

//Caso o usuário esteja conectado em sua conta (Login)
session_start();
$nomeUsuario = isset($_SESSION['nome']) ? htmlspecialchars($_SESSION['nome']) : null;
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/index.css"/>
    <title>Innova Technology</title>
    <link rel="shortcut icon" href="../fotos home/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <!--Início NavBar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark fixed-top border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="../fotos home/logo1.png" alt="Avatar Logo" style="width: 50px" style="margin-left: 50px"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

      <?php if ($nomeUsuario): ?>
        <!-- Botão personalizado com o nome do usuário -->
        <div class="dropdown">
          <button class="btn btn-dark1 dropdown-toggle" type="button10" data-bs-toggle="dropdown" aria-expanded="false">
            <?=$nomeUsuario?>
          </button>
          <ul1 class="dropdown-menu dropdown-menu-dark">
            <li1><a1 href="./logout.php"><button class="dropdown-item" type="button10"></a1>Saindo legal </button></a1></li1>
          </ul1>
        </div>
            
        <?php else: ?>
        <!-- Botões de Login e Cadastro se o usuário não estiver logado -->
        <div class="button-borders">
          <a href="login.php" target="_self"><button class="primary-button">LOGIN</button></a>
        </div>
        <div class="button-borders">
          <a href="cadastro.php" target="_self"><button class="primary-button">CADASTRO</button></a>
        </div>
      <?php endif; ?>     
        </div>
      </div>
    </nav>
    <!--Fim NavBar-->

    <!--Início Topo-->
    <div class="text-secondary px-0 text-center" id="idhome"> <!--Local de Redirecionamento-->
      <div class="py-5">
        <h1 class="display-2 fw-bold" style="margin-top: 150px; align-content: center;">Innova Technology</h1>
        <div class="col-lg-6 mx-auto">
          <p class="fs-5" style="color: white">"Onde a Tecnologia Encontra a Excelência"</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="sobre.php" target="_self"><button type="button" class="btn btn-gradient-purple btn-lg px-4 me-sm-3 fw-bold">Ver Mais</button></a>
          </div>
        </div>
      </div>
    </div>
    <!--Fim Topo-->

    <!--Início Cursos-->
    <div class="container px-4 py-4" id="idservice"> <!--Local de Redirecionamento-->
      <h2 class="cursin pb-2 border-bottom text-center">Cursos</h2>

      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-1 py-4">
        <div class="card" style="width:400px">
          <img class="card-img-top" src="../fotos home/AI.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Inteligencia Artificial</h4>
            <p class="card-text">Nosso curso de Inteligencia Artificial generativa de textos e imagens</p>
            <a href="curso-ia.php" target="_self" class="btn btn-gradient-purple">Ver Mais</a>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-200 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')">
            <div class="d-flex flex-column  text-center h-100 p-5 pb-3 text-white text-shadow-1">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Em Breve</h3>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-cover h-200 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg')">
            <div class="d-flex flex-column text-md-center  p-5 pb-3 text-shadow-3">
              <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Em breve</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Fim Cursos-->

    <!--Início TimeLine-->
    <section class="page-section" id="idabout"> <!--Local de Redirecionamento-->
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase border-bottom border-white">Sobre</h2>
          <h3 class="section-subheading text">Nossa Historia</h3>
        </div>
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <img
                class="rounded-circle img-fluid"
                src="../fotos home/jose1.jpg"
                alt="Logo UniSãoJosé"/>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Março 2022</h4>
                <h4 class="subheading">Projeto Integrador</h4>
              </div>
              <div class="timeline-body">
                <p class="text">
                Foi nesta data que foi consolidadas as empresas dentro do Projeto Integrador que futuramente traria o começo da nossa empresa.
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img
                class="rounded-circle img-fluid"
                src="../fotos home/Infinity.png"
                alt="Logo Innova Technology"/>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Abril 2024</h4>
                <h4 class="subheading">Nasce a Innova Technology </h4>
              </div>
              <div class="timeline-body">
                <p class="text">
                  Nascemos com a divisão de uma das Empresas iniciais e começamos a nossa Empresa,estabelecemos metas,visão de futuro e Inicios de Projetos.
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <img
                class="rounded-circle img-fluid"
                src="../fotos home/tec.png"
                alt="Logo Tecnologia para Todos"/>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Abril 2024</h4>
                <h4 class="subheading">Tecnologia para Todos</h4>
              </div>
              <div class="timeline-body">
                <p class="text">
                  O Projeto Integrador da UniSãoJosé é uma iniciativa que busca promover a capacitação profissional, oferecendo cursos gratuitos para a população. Desenvolvido por estudantes, o projeto visa atender às necessidades da comunidade local, proporcionando acesso a oportunidades de aprendizado em diversas áreas do conhecimento.                                                                                          
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img
                class="rounded-circle img-fluid"
                src="../fotos home/icone-site.png"
                alt="Foto sobre a criação do site"/>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Setembro 2024</h4>
                <h4 class="subheading">Criação do site</h4>
              </div>
              <div class="timeline-body">
                <p class="text">
                  Decidimos Desenvolver um site pois é fundamental para garantir presença online, credibilidade e alcance de novos mercados. Ele facilita a comunicação direta com o público, permite o uso de estratégias de marketing digital e oferece análises de desempenho. Além disso, um site ajuda a se destacar frente à concorrência e expandir oportunidades de negócios.
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image" style="background-color: rgb(80, 40, 117);">
              <h4 style="color: rgb(255, 255, 255);"><strong>FAÇA PARTE<br>DA NOSSA<br>HISTÓRIA!</strong></h4>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!--Fim TimeLine-->
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!--Início Contatos-->
<div id="idcontact" class="contact-area section-padding"> <!--Local de Redirecionamento-->
	<div class="contato container">										
		<div class="section-title text-center">
			<h1 class="border-bottom border-white">Contatos</h1>
			<p>Entre em contato conosco:</p>
		</div>					
		<div class="row">
			<div class="col-lg-7">	
				<div class="contact">
					<form class="form" name="enq" method="post" action="./index.php#idcontact">
						<div class="row">
							<div class="form-group col-md-6">
								<input id = "nome" type="text" name="nome" class="form-control" placeholder="Nome" required="required">
							</div>
							<div class="form-group col-md-6">
								<input id = "email" type="email" name="email" class="form-control" placeholder="Email" required="required">
							</div>
							<div class="form-group col-md-12">
								<input id = "assunto"type="text" name="assunto" class="form-control" placeholder="Assunto" required="required">
							</div>
							<div class="form-group col-md-12">
								<textarea id = "mensagem" rows="6" name="mensagem" class="form-control" placeholder="Mensagem" required="required"></textarea>
							</div>
							<div class="col-md-12 text-center">
								<button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-contact-bg" title="Submit Your Message!">Enviar</button>
							</div>
						</div>
					</form>
				</div>
			</div><!--- END COL --> 
			<div class="col-lg-5">
				<div class="single_address">
					<a href="https://www.instagram.com/innovatech.usj" target="_blank" ><i class="fa fa-instagram"></i></a>
					<h4>Instagram</h4>
					<p>@innovatech.usj</p>
				</div>
				<div class="single_address">
					<a href="mailto:innovatechnology263@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
					<h4>E-mail</h4>
					<p>innovatechnology263@gmail.com</p>
				</div>
				<div class="single_address">
					<a href="https://chat.whatsapp.com/DhUbximOPMrGQ5E0iAGH55" target="_blank" ><i class="fa fa-whatsapp"></i></a>
					<h4>Whatsapp</h4>
					<p>chat.whatsapp.com/DhUbximOPMrGQ5E0iAGH55</p>
				</div>
				<div class="single_address">
					<a href="https://www.linkedin.com/company/innovatech2024/about/" target="_blank"><i class="fa fa-linkedin"></i></a>
					<h4>Linkedin</h4>
					<p>Innova Technology</p>
				</div>					
			</div><!--- END COL --> 
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->	
</div>
<?php if (!empty($mensagem)): ?>
    <div class="alert alert-info text-center">
        <?= htmlspecialchars($mensagem); ?>
    </div>
<?php endif; ?>
  <!--Fim Contatos-->

  <!--Início Rodapé-->
  <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-4 rounded-circle img-fluid">
                  <img src="../fotos home/logo1.png" alt="Innova Technology Logo" class="logo">
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
              <div class="border-top ">
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