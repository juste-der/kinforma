<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@300;400;500;600;700&family=IBM+Plex+Sans:wght@300;400;500;600;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Shrikhand&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="styles/main.css" />
  <title>Kinforma</title>
</head>

<body>
  <div class="header-wrapper">
    <span class="header-newsletter">
      <a href="#newsletter">Var först med nyheter och rabatter.</a>
    </span>
    <header class="site-header">
      <div class="hamburger-btn" id="menuToggle">
        <img
          src="assets/icons/hamburger.svg"
          alt="Hamburger menu icon"
          id="menuIcon" />
      </div>
      <div class="products-btn">PRODUKTER</div>
      <div class="search-bar">
        <svg class="icon">
          <use href="assets/icons/icons.svg#icon-search"></use>
        </svg>
        <span class="icon-text">SÖK</span>
      </div>
      <a href="index.html" class="header-logo">
        <span class="logo-text">Kinforma</span>
      </a>
      <div class="language-change language-toggle">
        <div class="current-lang">
          <img src="assets/icons/sweden-flag.svg" alt="Sweden flag icon" />
          <svg class="icon arrow">
            <use href="assets/icons/icons.svg#icon-arrow"></use>
          </svg>
        </div>

        <div class="lang-dropdown">
          <img src="assets/icons/england-flag.svg" alt="England flag icon" />
        </div>
      </div>
      <div class="profile-page">
        <svg class="icon">
          <use href="assets/icons/icons.svg#icon-profile"></use>
        </svg>
        <span class="icon-text">KONTO</span>
      </div>
      <div class="shopping-cart">
        <svg class="icon">
          <use href="assets/icons/icons.svg#icon-cart"></use>
        </svg>
        <span class="icon-text">VARUKORG</span>
      </div>
    </header>
    <nav id="sidenav" class="side-nav-menu-container">
      <span class="nav-top">
        <a href="#" class="closebtn" id="closeNav">&times;</a>
        <a href="#">Unisex</a>
        <a href="#">Män</a>
        <a href="#">Kvinnor</a>
        <a href="#">Accessoarer</a>
        <a href="#">Beauty</a>
        <a href="#">Merch</a>
      </span>
      <span class="nav-bottom">
        <div class="language-change language-toggle">
          <div class="current-lang">
            <img src="assets/icons/sweden-flag.svg" alt="Sweden flag icon" />
            <svg class="icon arrow">
              <use href="assets/icons/icons.svg#icon-arrow"></use>
            </svg>
          </div>

          <div class="lang-dropdown">
            <img
              src="assets/icons/england-flag.svg"
              alt="England flag icon" />
          </div>
        </div>
        <a href="#">Support</a>
        <a href="#">Kontakta oss</a>
        <a href="#">Om Kinforma</a>
        <a href="#">Vår hållbarhet</a>
        <div class="nav-bottom-icons">
          <img src="assets/icons/tiktok.svg" alt="Tiktok icon" />
          <img src="assets/icons/instagram.svg" alt="Instagram icon" />
        </div>
      </span>
    </nav>
  </div>

  <section class="hero">
    <video
      src="assets/videos/Hero-standing.mp4"
      autoplay
      muted
      loop
      id="video-mb"></video>
    <video
      src="assets/videos/Hero-video.mp4"
      autoplay
      muted
      loop
      id="video-dskt"></video>
    <div class="hero-text-content">
      <h1>FRAMTIDENS MODE, IDAG</h1>
      <p>
        Upplev en ny dimension av mode med vår senaste kollektion. Designad av
        dig, drivet av teknik, skapat för planeten.
      </p>

      <button class="button-animation">
        Skapa din design
        <svg class="icon">
          <use href="assets/icons/icons.svg#icon-see-more"></use>
        </svg>
      </button>
    </div>
  </section>
  <section class="product-display">
    <div class="top-content">
      <h2>WHAT´S NEW</h2>
      <div class="filter-buttons">
        <button class="btn active">unisex</button>
        <button class="btn">män</button>
        <button class="btn">kvinnor</button>
      </div>
    </div>
    <div class="product-carousel">
      <div
        class="product-card"
        data-product="jacket"
        data-colors="green,black,red">
        <div class="slider">
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
        </div>

        <button class="prev">
          <svg class="icon arrow">
            <use href="assets/icons/icons.svg#icon-arrow"></use>
          </svg>
        </button>
        <button class="next">
          <svg class="icon arrow">
            <use href="assets/icons/icons.svg#icon-arrow"></use>
          </svg>
        </button>
        <div class="dot-container">
          <div class="dot dot-1 active" data-color="green"></div>
          <div class="dot dot-2" data-color="black"></div>
          <div class="dot dot-3" data-color="red"></div>
        </div>

        <div class="slide-progress">
          <div class="progress-segment active"></div>
          <div class="progress-segment"></div>
          <div class="progress-segment"></div>
          <div class="progress-segment"></div>
        </div>
        <div class="bottom-products-card">
          <h4>KLÄDER</h4>
          <button class="button-animation">
            se alla
            <svg class="icon">
              <use href="assets/icons/icons.svg#icon-see-more"></use>
            </svg>
          </button>
        </div>
      </div>

      <div
        class="product-card"
        data-product="bag"
        data-colors="orange,red,black">
        <div class="slider">
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
        </div>
        <button class="prev">
          <svg class="icon arrow">
            <use href="assets/icons/icons.svg#icon-arrow"></use>
          </svg>
        </button>
        <button class="next">
          <svg class="icon arrow">
            <use href="assets/icons/icons.svg#icon-arrow"></use>
          </svg>
        </button>
        <div class="dot-container">
          <div class="dot dot-1 active" data-color="orange"></div>
          <div class="dot dot-2" data-color="red"></div>
          <div class="dot dot-3" data-color="black"></div>
        </div>
        <div class="slide-progress">
          <div class="progress-segment active"></div>
          <div class="progress-segment"></div>
          <div class="progress-segment"></div>
          <div class="progress-segment"></div>
        </div>
        <div class="bottom-products-card">
          <h4>ACCESSOARER</h4>
          <button class="button-animation">
            se alla
            <svg class="icon">
              <use href="assets/icons/icons.svg#icon-see-more"></use>
            </svg>
          </button>
        </div>
      </div>

      <div
        class="product-card"
        data-product="glasses"
        data-colors="black,orange,grey">
        <div class="slider">
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
        </div>
        <button class="prev">
          <svg class="icon arrow">
            <use href="assets/icons/icons.svg#icon-arrow"></use>
          </svg>
        </button>
        <button class="next">
          <svg class="icon arrow">
            <use href="assets/icons/icons.svg#icon-arrow"></use>
          </svg>
        </button>
        <div class="dot-container">
          <div class="dot dot-1 active" data-color="black"></div>
          <div class="dot dot-2" data-color="orange"></div>
          <div class="dot dot-3" data-color="grey"></div>
        </div>
        <div class="slide-progress">
          <div class="progress-segment active"></div>
          <div class="progress-segment"></div>
          <div class="progress-segment"></div>
          <div class="progress-segment"></div>
        </div>
        <div class="bottom-products-card">
          <h4>BEAUTY</h4>
          <button class="button-animation">
            se alla
            <svg class="icon">
              <use href="assets/icons/icons.svg#icon-see-more"></use>
            </svg>
          </button>
        </div>
      </div>

      <div
        class="product-card"
        data-product="bottle"
        data-colors="orange,pink,green">
        <div class="slider">
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
          <div class="slide"><img /></div>
        </div>
        <button class="prev">
          <svg class="icon arrow">
            <use href="assets/icons/icons.svg#icon-arrow"></use>
          </svg>
        </button>
        <button class="next">
          <svg class="icon arrow">
            <use href="assets/icons/icons.svg#icon-arrow"></use>
          </svg>
        </button>
        <div class="dot-container">
          <div class="dot dot-1 active" data-color="orange"></div>
          <div class="dot dot-2" data-color="pink"></div>
          <div class="dot dot-3" data-color="green"></div>
        </div>
        <div class="slide-progress">
          <div class="progress-segment active"></div>
          <div class="progress-segment"></div>
          <div class="progress-segment"></div>
          <div class="progress-segment"></div>
        </div>
        <div class="bottom-products-card">
          <h4>MERCH</h4>
          <button class="button-animation">
            se alla
            <svg class="icon">
              <use href="assets/icons/icons.svg#icon-see-more"></use>
            </svg>
          </button>
        </div>
      </div>
      <section class="our-technology">
        <div class="technology-text-content">
          <p class="right-align">
            KLÄDER FORMADE AV <span class="desktop-break"></span>FRAMTIDEN
          </p>
          <p class="left-align">
            TEKNOLOGIN SOM DRIVER<span class="desktop-break"></span>FUNKTIONEN
          </p>
          <h2>DET ÄR <span class="hightlight-red">TECHWEAR.</span></h2>
          <button class="button-animation">
            Vår teknik
            <svg class="icon">
              <use href="assets/icons/icons.svg#icon-see-more"></use>
            </svg>
          </button>
        </div>

        <div class="image-side"></div>
      </section>
    </div>
  </section>

  <?php
  require __DIR__ . '/footer.php'; ?>

  <script src="script.js"></script>
</body>

</html>