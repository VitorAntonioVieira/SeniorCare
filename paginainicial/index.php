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
    <title>Web Design Mastery | SKYWINGS</title>
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
        <li><a href="#home">Home</a></li>
        <li><a href="#about">Sobre</a></li>
        <li><a href="#tour">Pesquisa</a></li>
        <li><a href="#package">conteudo</a></li>
        <li><a href="#contact">Contato</a></li>
        <li><a href="#">login</a></li>
      </ul>
      <div class="nav__btns">
        <button class="btn">login</button>
      </div>
    </nav>

    <header id="home">
      <div class="header__container">
        <div class="header__content">
          
          <h1>Bem-vindo à plataforma  <span>Senior Care </span></h1>
          <div class="header__btns">
            <button class="btn">Saiba mais</button>
            <a href="#">
              <span><i class="ri-play-circle-fill"></i></span>
            </a>
          </div>
        </div>
        <div class="header__image">
          <img src="assets/img.png" alt="header" />
        </div>
      </div>
    </header>

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

    

    <section class="section__container journey__container" id="tour">
      <h2 class="section__header">Journey To The Sky Made Simple!</h2>
      <p class="section__description">
        Effortless Planning for Your Next Adventure
      </p>
      <div class="journey__grid">
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-bookmark-3-line"></i></span>
            <h4>Seamless Booking Process</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-bookmark-3-line"></i></span>
            <h4>Easy Reservations, One Click Away</h4>
            <p>
              From flights and accommodations to activities and transfers,
              everything you need is available at your fingertips, making travel
              planning effortless.
            </p>
          </div>
        </div>
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-landscape-fill"></i></span>
            <h4>Tailored Itineraries</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-landscape-fill"></i></span>
            <h4>Customized Plans Just for You</h4>
            <p>
              Enjoy personalized travel plans designed to match your preferences
              and interests. Whether you seek adventure or cultural immersion,
              our tailored itineraries ensure your journey is uniquely yours.
            </p>
          </div>
        </div>
        <div class="journey__card">
          <div class="journey__card__bg">
            <span><i class="ri-map-2-line"></i></span>
            <h4>Expert Local Insights</h4>
          </div>
          <div class="journey__card__content">
            <span><i class="ri-map-2-line"></i></span>
            <h4>Insider Tips and Recommendations</h4>
            <p>
              We provide curated recommendations for dining, sightseeing, and
              hidden gems, so you can experience each destination like a local.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container showcase__container" id="package">
      <div class="showcase__image">
        <img src="assets/showcase.jpg" alt="showcase" />
      </div>
      <div class="showcase__content">
        <h4>UNLEASH WANDERLUST WITH SKYWINGS</h4>
        <p>
          Embark on a journey like no other with Skywings, where your travel
          dreams come to life. Our mission is to inspire and facilitate your
          adventures, whether you seek the vibrant energy of bustling
          cityscapes, the serene beauty of pristine beaches, or the captivating
          history of ancient landmarks. At Skywings, we provide expertly curated
          destinations and personalized itineraries, ensuring that every trip is
          tailored to your unique preferences. Discover hidden gems, immerse
          yourself in diverse cultures, and create unforgettable memories that
          will last a lifetime.
        </p>
        <p>
          With Skywings as your ultimate travel companion, exploring the wonders
          of the world has never been easier. Our insider tips and local
          insights give you the tools to navigate new places with confidence and
          excitement. From the moment you start planning to the day you return
          home, we are dedicated to making your travel experience seamless and
          enriching.
        </p>
        <div class="showcase__btn">
          <button class="btn">
            Book A Flight Now
            <span><i class="ri-arrow-right-line"></i></span>
          </button>
        </div>
      </div>
    </section>

    <section class="section__container banner__container">
      <div class="banner__card">
        <h4>10+</h4>
        <p>Years Experience</p>
      </div>
      <div class="banner__card">
        <h4>12K</h4>
        <p>Happy Clients</p>
      </div>
      <div class="banner__card">
        <h4>4.8</h4>
        <p>Overall Ratings</p>
      </div>
    </section>

    <section class="section__container discover__container">
      <h2 class="section__header">Discover The World From Above</h2>
      <p class="section__description">
        Experience Breathtaking Views and Unique Perspectives
      </p>
      <div class="discover__grid">
        <div class="discover__card">
          <span><i class="ri-camera-lens-line"></i></span>
          <h4>Aerial Cityscapes</h4>
          <p>
            Witness the architectural marvels and bustling streets from
            bird's-eye view, offering a unique perspective.
          </p>
        </div>
        <div class="discover__card">
          <span><i class="ri-ship-line"></i></span>
          <h4>Coastal Wonders</h4>
          <p>
            Fly over pristine coastlines and turquoise waters, revealing hidden
            coves and vibrant coral reefs.
          </p>
        </div>
        <div class="discover__card">
          <span><i class="ri-landscape-line"></i></span>
          <h4>Historic Landmarks</h4>
          <p>
            Observe the grandeur of ancient castles and other significant sites
            in a way that ground tours can't offer.
          </p>
        </div>
      </div>
    </section>

    <section class="section__container client__container">
      <h2 class="section__header">Loved By Over Thousand Travelers</h2>
      <p class="section__description">
        Discover the stories of wanderlust and cherished memories through the
        eyes of our valued clients.
      </p>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__content">
                <div class="client__rating">
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                </div>
                <p>
                  Skywings has completely transformed my travel experience. From
                  finding hidden gems in bustling cities to discovering serene
                  retreats off the beaten path, every detail was thoughtfully
                  arranged. I can't recommend Skywings enough for anyone looking
                  to elevate their travel experience!
                </p>
              </div>
              <div class="client__details">
                <img src="assets/client-1.jpg" alt="client" />
                <div>
                  <h4>John Adams</h4>
                  <h5>Travel Blogger</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__content">
                <div class="client__rating">
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                </div>
                <p>
                  My recent adventure with Skywings was nothing short of
                  spectacular. The personalized itineraries and recommendations
                  they provided led me to extraordinary locations that I would
                  never have found on my own. I'm already planning my next
                  adventure with them!
                </p>
              </div>
              <div class="client__details">
                <img src="assets/client-2.jpg" alt="client" />
                <div>
                  <h4>Emily Thompson</h4>
                  <h5>Adventure Enthusiast</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__content">
                <div class="client__rating">
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                </div>
                <p>
                  Skywings offered a transformative experience for my research
                  into historical landmarks. The unique aerial perspectives and
                  provided a new level of appreciation and insight into the
                  sites I studied. I highly recommend their services to fellow
                  historians and cultural enthusiasts.
                </p>
              </div>
              <div class="client__details">
                <img src="assets/client-3.jpg" alt="client" />
                <div>
                  <h4>Sarah Lee</h4>
                  <h5>Cultural Historian</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__content">
                <div class="client__rating">
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                  <span><i class="ri-star-fill"></i></span>
                </div>
                <p>
                  Finding a balance between work and travel can be challenging,
                  but Skywings made it effortless. Their efficient planning and
                  excellent recommendations helped me maximize my downtime and
                  enjoy every moment of my trip. I look forward to working with
                  them again on future travels.
                </p>
              </div>
              <div class="client__details">
                <img src="assets/client-4.jpg" alt="client" />
                <div>
                  <h4>David Patel</h4>
                  <h5>Business Executive</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#" class="logo">Skywings</a>
          </div>
          <p>
            Explore the world with ease and excitement through our comprehensive
            travel platform. Your journey begins here, where seamless planning
            meets unforgettable experiences.
          </p>
          <ul class="footer__socials">
            <li>
              <a href="#"><i class="ri-facebook-fill"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-instagram-line"></i></a>
            </li>
            <li>
              <a href="#"><i class="ri-youtube-line"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Quick Links</h4>
          <ul class="footer__links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Flights</a></li>
            <li><a href="#">Hotels</a></li>
            <li><a href="#">Cruise</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Contact Us</h4>
          <ul class="footer__links">
            <li>
              <a href="#">
                <span><i class="ri-phone-fill"></i></span> +91 9876543210
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-record-mail-line"></i></span> info@skywings
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-map-pin-2-fill"></i></span> New Delhi, India
              </a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Subscribe</h4>
          <form action="/">
            <input type="text" placeholder="Enter your email" />
            <button class="btn">Subscribe</button>
          </form>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
