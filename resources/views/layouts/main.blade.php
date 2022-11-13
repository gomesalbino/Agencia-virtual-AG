<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- bootsrap pooper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <link href="{{ URL::asset('/css/style.css')}}" rel="stylesheet" media="screen">


    <link rel="stylesheet" href="{{ asset('js/jquery-3.6.1.min.js') }}">


    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- progressbar -->
    <script src="{{ asset('js/progressbar.min.js') }}"></script>

    <!-- paralax !-->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     
    <title>Laravel</title>



</head>

<body class="antialiased">

    <header>
        <div class="containar" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a href="#" class="navbar-brand">
                    <img id="logo" src="{{ asset('img/hdcagency_logo.svg') }}" alt="AG Agency" />
                </a>
                <button class="navbar-toggler navbar-dark bg-dark" type="button" data-toggle="collapse"
                    data-target="#navbar-links" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav ">
                        <a class="navbar-item nav-link" href="#mainSlider" id="home-menu">Home</a>
                        <a class="navbar-item nav-link" href="#about-area" id="about-menu">A agência</a>
                        <a class="navbar-item nav-link" href="#services-area" id="service-menu">Serviços</a>
                        <a class="navbar-item nav-link" href="#team-area" id="team-menu">Time</a>
                        <a class="navbar-item nav-link" href="#portfolio-area" id="portfolio-menu">Projetos</a>
                        <a class="navbar-item nav-link" href="#news-area" id="contato-menu">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main role="main">

        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel" data-interval="10000">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('img/banner1.png') }}" alt="First slide">
                        <div class="carousel-caption  d-md-block">
                            <h2> Quer criar e-cormece? </h2>
                            <p>Conte conosco, temos mais de 30 lojas. </p>
                            <a href="#" class="main-btn">Ver porte portfolio</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/banner2.png') }}" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                            <h2> Está querendo tirar o projeto do papel? </h2>
                            <p>Nossa equipe de Engenharia de software está pronto para lhe atender.</p>
                            <a href="#" class="main-btn">Entre em contato</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/banner3.png') }}" alt="Third slide">
                        <div class="carousel-caption d-md-block">
                            <h2>Está buscando manutenção do seu software? </h2>
                            <p>AG conta com engenheiros altamente qualificados para resolver o seu problema.</p>
                            <a href="#" class="main-btn">Entre em contato</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <! ---Sobre a empresa !-->
            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title"> Sobre a AG Agency </h3>
                        </div>
                        <div class="col-md-6 img">
                            <img class="img-fluid" src="{{ asset('img/agencia.jpg') }}" alt="Agencia AG" />
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title"> Uma agência que pense no Futuro </h3>
                            <p>Nossos projétos são adaptados ao cliente e seu propôsito.</p>
                            <p>Após a especificação dos projetos os arquitetos de sofware definirão as melhores
                                tecnologia para seu projeto.</p>
                            <p>E nossos designers trabalharão na sua interface/layout para impulsionar o negócio.</p>
                            <p>Veja outros diferenciais:</p>
                            <ul id="about-list">
                                <li><i class="fas fa-check"></i>Utilização de Machine Learning.</li>
                                <li><i class="fas fa-check"></i>Layout responsivo para todos os despositivos.</li>
                                <li><i class="fas fa-check"></i>Integrção com diversos sitemas do mercado.</li>
                                <li><i class="fas fa-check"></i>Sistema de pagamento própria.</li>
                                <li><i class="fas fa-check"></i>Desenvolvimento com metodologia ágil.</li>
                            </ul>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Serviço  da empresa !-->
            <div id="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title"> Nossas especialidades </h3>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-mobile-alt"></i>
                            <h4> Aplicativos nativos </h4>
                            <p>Utilizamos o real poder dos aplicativos móveis construindo aplicativos
                                nativos.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-shopping-cart"></i>
                            <h4> E-comerces </h4>
                            <p>Temos uma plataforma própria de e-commerce que se adapta a qualquer regra de
                                negócio (B2C e B2B).</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-paint-brush"></i>
                            <h4> Designer Criativo </h4>
                            <p>Nossos designers são especializados em UI/UX e também puiem vasta expiriencia
                                no mercado de software.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fab fa-google"></i>
                            <h4> Experts em SEO </h4>
                            <p>Com nosso serviço de marketing seu site será melhor posicionado no google e
                                vendera mais.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-hands-helping"></i>
                            <h4> Suporte 24/7 </h4>
                            <p>Vôce sempre terá alguem da equipe disponivel para suporte, em diferentes
                                plataformas. (chat, email, skype). </p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-server"></i>
                            <h4> Experiência em servidores</h4>
                            <p>Garantimos uptime e também rápido tempo de resposta do seu site para o seu
                                cliente.</p>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- Dados da empresa -->
            <div id="data-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 circle-box">
                            <div id="circleA"></div>
                            <p>Projetos entregue</p>
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleB"></div>
                            <p>Clientes Filizes</p>
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleC"></div>
                            <p>Colaboradores</p>
                        </div>
                        <div class="col-md-3 circle-box">
                            <div id="circleD"></div>
                            <p>Cafézinhos</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Time -->
            <div id="team-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nosso Time</h3>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('img/profile1.jpg') }}" class="card-img-top"
                                    alt="Imagem de perfil" />
                                <div class="card-body">
                                    <h5 class="card-title">Jhon Doe</h5>
                                    <p class="card-text">Software Develoment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('img/profile2.jpg') }}" class="card-img-top"
                                    alt="Imagem de perfil" />
                                <div class="card-body">
                                    <h5 class="card-title">Maria Mariana</h5>
                                    <p class="card-text">Seo Consultant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('img/profile3.jpg') }}" class="card-img-top"
                                    alt="Imagem de perfil" />
                                <div class="card-body">
                                    <h5 class="card-title">Paul Backer</h5>
                                    <p class="card-text">Project Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('img/profile4.jpg') }}" class="card-img-top"
                                    alt="Imagem de perfil" />
                                <div class="card-body">
                                    <h5 class="card-title">Karina Katarina</h5>
                                    <p class="card-text">UX/UI Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trabalhe conosco -->
            <div id="apply-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 apply-box" id="company-img">
                        </div>
                        <div class="col-md-6 apply-box" id="pattern-img">
                            <h4> Gosta de desafios? </h4>
                            <p> Temos varias posições abertas, entre elas: Software Engineer, UI/UX
                                Designer, Project Manager e mais. </p>
                            <p> Clique no Botão abaixo e confira os beneficios e as posições em aberto.
                            </p>
                            <p> Aqui você terá a chance de trabalhar com as melhorestecnologias e os
                                profissionas mais capacitados. </p>
                            <a href="#" class="main-btn" id="apply-btn">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pórtefolio -->
            <div id="portfolio-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="main-title">Conheça nossos projetos</h3>
                        </div>
                        <div class="col-md-12" id="filter-btn-box">
                            <button class="main-btn filter-btn active" id="all-btn">Todos</button>
                            <button class="main-btn filter-btn " id="dev-btn">Desenvolvimento</button>
                            <button class="main-btn filter-btn " id="dsg-btn">Design</button>
                            <button class="main-btn filter-btn " id="seo-btn">SEO</button>
                        </div>
                        <div class="col-md-4 project-box dev">
                            <img src="{{ asset('img/proj1.jpg') }}" class="img-fluid" alt="Projeto 1">
                        </div>
                        <div class="col-md-4 project-box dsg">
                            <img src="{{ asset('img/proj2.jpg') }}" class="img-fluid" alt="Projeto 2">
                        </div>
                        <div class="col-md-4 project-box seo">
                            <img src="{{ asset('img/proj3.jpg') }}" class="img-fluid" alt="Projeto 3">
                        </div>
                        <div class="col-md-4 project-box dev">
                            <img src="{{ asset('img/proj4.jpg') }}" class="img-fluid" alt="Projeto 4">
                        </div>
                        <div class="col-md-4 project-box dsg">
                            <img src="{{ asset('img/proj5.jpg') }}" class="img-fluid" alt="Projeto 5">
                        </div>
                        <div class="col-md-4 project-box seo">
                            <img src="{{ asset('img/proj6.jpg') }}" class="img-fluid" alt="Projeto">
                        </div>
                    </div>
                </div>
            </div>

            <! -- News Letters -->

                <div id="news-area">
                    <div class="container">
                        <div class="col-md-12">
                            <h3 class="main-title">Fique por dentro das novidades</h3>
                        </div>
                        <p>Assine nossa lista de e-mails, e receba nossos conteúdos sobre desenvolvimento de Software.
                        </p>
                        <form action="">
                            <input type="email" class="form-control" id="email-input" name="email"
                                placeholder="Seu melhor e-mail">
                            <input type="submit" id="news-btn" value="inscrever">
                        </form>
                    </div>
                </div>

                <! --- Call to action -->

                    <div id="call-area">
                        <div class="container">
                            <div class="row">
                                <p> Desseja fazer orçamento sem compromissio?</p>
                                <button class="main-btn" id="call-btn"> Orçar</button>
                            </div>
                        </div>
                    </div>

    </main>

    <! -- Footer -->

        <footer>
            <div id="contact-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="main-title">Entre em contacto conosco</h3>
                        </div>
                        <div class="col-md-4 contact-box">
                            <i class="fas fa-phone"></i>
                            <p><span class="contact-title"> Ligue para:</span>(91) 99999-9999</p>
                            <p><span class="contact-title"> Horários:</span>08:00 - 19:00</p>
                        </div>
                        <div class="col-md-4 contact-box">
                            <i class="fas fa-envelope"></i>
                            <p><span class="contact-title"> Envie o E-mail:</span>contacto@ag.com.br</p>
                        </div>
                        <div class="col-md-4 contact-box">
                            <i class="fas fa-map-marker-alt"></i>
                            <p><span class="contact-title"> Venha tomar um café:</span>Rua Lorem Ipsom nº 314</p>
                        </div>
                        <div class="col-md-6" id="msg-box">
                            <p>Ou nos deixe uma mensagem:</p>
                        </div>
                        <div class="col-md-6" id="contact-form">
                            <form action="">
                                <input type="email" class="form-control" placeholder="E-mail" name="email"
                                    id="email">
                                <input type="text" class="form-control" placeholder="Assunto" name="subject"
                                    id="subject">
                                <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                                <input type="submit" class="main-btn" value="enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="copy-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Desenvolvido por <a href="https://albinogomes.herokuapp.com" target="_blank">AG
                                    Agency</a> &copy; 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <! --- Script de Projeto -->
            <script src="{{ asset('js/popper.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
            <script src="{{ asset('js/holder.min.js') }}"></script>
            <script src="{{ asset('js/scrollPagina.js') }}"></script>

            <script src="{{ asset('js/script.js') }}"></script>

            <!-- Font awesome !-->
            <script src="https://kit.fontawesome.com/277f0fce9f.js" crossorigin="anonymous"></script>

</body>

</html>
