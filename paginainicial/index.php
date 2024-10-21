<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title> Senior Care</title>
  </head>
  <body>
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
        <img src="./seniorcarelogo.png" alt = "img"/>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#about">Início</a></li>
        <li><a href="#skill">Skills</a></li>
        <li><a href="pesquisa.php">pesquisa</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
        <button class="btn">Login</button>
     
    </nav>

    <header class="section__container header__container" id="about">
      <div class="header__image">
      <img src="./alzheimer.png" alt = "header"/>
      </div>
      <div class="header__content">
       
        <h1>Bem-vindo à <span>plataforma Senior Care </span></h1>
        <p class="section__description">
        Um espaço dedicado ao bem-estar da pessoa idosa, com informações sobre legislação, saúde, entretenimento, trabalho e previdência.
        </p>
        <div class="header__btns">
          <button class="btn">Saiba Mais</button>
          
        </div>
      </div>
    </header>

    

    <section class="section__container skill__container" id="skill">
      <div class="skill__content">
        <h2 class="section__header">
        Por que escolher   <span>a Senior Care</span>
        </h2>
        <p class="section__description">
        Na Senior Care, nosso compromisso com a qualidade e atenção aos detalhes assegura o sucesso de cada iniciativa.
        </p>
       
      </div>
  <div class="skill__grid">
    <div class="skill__card">
      <span><i class="ri-scales-3-line"></i></span> <!-- Ícone de martelo de juiz para Legislação -->
      <h4>Legislação</h4>
      <p>
        Entenda os direitos e benefícios garantidos às pessoas idosas por lei, com atualizações constantes sobre as normas vigentes.
      </p>
    </div>
    <div class="skill__card">
      <span><i class="ri-heart-pulse-line"></i></span> <!-- Ícone de coração com pulsação para Saúde -->
      <h4>Saúde</h4>
      <p>
        Oferecemos orientações sobre cuidados de saúde, dicas de bem-estar e informações sobre prevenção de doenças comuns na terceira idade.
      </p>
    </div>
    <div class="skill__card">
      <span><i class="ri-gamepad-line"></i></span> <!-- Ícone de controle de videogame para Entretenimento -->
      <h4>Entretenimento</h4>
      <p>
        Sugestões de atividades e conteúdos voltados para o lazer e diversão, promovendo o engajamento e qualidade de vida para idosos.
      </p>
    </div>
  </div>
</section>


    <section class="portfolio__container" id="portfolio">
      <div class="portfolio__content">
        <p class="section__subheader">Portfolio</p>
        <h2 class="section__header">
        Bem-Estar <span>da Pessoa Idosa</span>
        </h2>
        <p class="section__description">
        Um espaço dedicado ao bem-estar da pessoa idosa, onde você encontra tudo o que precisa para se manter informado e atualizado
        </p>
    
      </div>
      <div class="portfolio__image__wrapper">
        <div class="portfolio__image">
          <img src="fotinha.jpg" alt="portfolio" />
          <img src="fotinha2.jpg" alt="portfolio" />
          <img src="fotinha3.jpg" alt="portfolio" />
          <img src="fotinha4.jpg" alt="portfolio" />
          <img src="fotinha5.jpg" alt="portfolio" />
        </div>
      </div>
    </section>

    <section class="section__container review__container" id="review">
      <p class="section__subheader">Reviews</p>
      <h2 class="section__header">
        Our Customer Say Something <span>About Us</span>
      </h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="review__card">
              <div class="review__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                Working with them was a game-changer. Their creative vision and
                technical expertise brought our website to life, exceeding all
                expectations.
              </p>
              <div class="review__details">
                <img src="assets/review-1.jpg" alt="review" />
                <div>
                  <h4>John Doe</h4>
                  <h5>CEO at Tech Innovations</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="review__card">
              <div class="review__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                The project was delivered on time and within budget. Their
                design skills are top-notch, and their attention to detail is
                impeccable.
              </p>
              <div class="review__details">
                <img src="assets/review-2.jpg" alt="review" />
                <div>
                  <h4>Jane Smith</h4>
                  <h5>Manager at Creative Solutions</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="review__card">
              <div class="review__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                I've collaborated with many web developers, but they stands out
                for their exceptional creativity and professional approach.
              </p>
              <div class="review__details">
                <img src="assets/review-3.jpg" alt="review" />
                <div>
                  <h4>Alice Brown</h4>
                  <h5>Freelance Graphic Designer</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="review__card">
              <div class="review__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                Our new web platform is visually stunning and highly functional,
                thanks to the innovative design and seamless execution.
              </p>
              <div class="review__details">
                <img src="assets/review-4.jpg" alt="review" />
                <div>
                  <h4>Robert White</h4>
                  <h5>Product Manager at WebCorp</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="review__card">
              <div class="review__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                From initial concept to the final launch, they were a true
                partner in creating our online presence. Their work is beautiful
                and user-friendly.
              </p>
              <div class="review__details">
                <img src="assets/review-5.jpg" alt="review" />
                <div>
                  <h4>Emily Green</h4>
                  <h5>Entrepreneur</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container contact__container">
      <p class="section__subheader">Contact</p>
      <h2 class="section__header">Let's Discuss Your <span>Project</span></h2>
      <p class="section__description">
        Whether you need a new website, a redesign, or custom functionality,
        let's collaborate to create something amazing.
      </p>
      <form action="/">
        <input type="text" placeholder="Full name" />
        <input type="text" placeholder="Your email" />
        <input type="text" placeholder="Phone number" />
        <input type="text" placeholder="Budget" />
        <textarea placeholder="Message"></textarea>
        <button class="btn">Submit Message</button>
      </form>
    </section>

    <footer class="section__container footer__container">
      <p>Copyright © 2024 Web Design Mastery. All rights reserved.</p>
      <ul class="footer__socials">
        <li>
          <a href="#"><i class="ri-facebook-fill"></i></a>
        </li>
        <li>
          <a href="#"><i class="ri-twitter-fill"></i></a>
        </li>
        <li>
          <a href="#"><i class="ri-linkedin-fill"></i></a>
        </li>
        <li>
          <a href="#"><i class="ri-google-fill"></i></a>
        </li>
      </ul>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
