<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/97e2f7a12f.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css" />
    <title>Hi! I'm Nate 👋</title>
  </head>
  <body>
    <h1 class="hidden">
      Hello everyone! Welcome to Nate's Space, Portfolio of Design and Code.
    </h1>
    <div id="header-wrapper">
      <h2 class="hidden">Nate's Portfolio Header Section</h2>
      <header id="header">
        <div id="header__container" class="grid-con">
          <div
            id="header__logo"
            class="col-span-1 t-col-span-4 l-col-span-2 xl-col-span-2">
            <object
              type="image/svg+xml"
              data="images/Nate-logo.svg"
              id="header__nate-logo"></object>
          </div>
          <div
            id="header__bio-text"
            class="col-span-3 t-col-span-3 l-col-span-3 xl-col-span-4"></div>
          <nav
            id="header__nav"
            class="col-span-full t-col-span-3 l-col-span-4 xl-col-span-4">
            <ul>
              <li><a id="portfolio-link" href="project.html">Works</a></li>
              <li><a id="contact-link" href="about.html">Contact</a></li>
            </ul>
          </nav>
          <button id="header__menu-button" class="col-span-1">Menu</button>
          <div id="header__social-link" class="col-span-1 t-col-span-1">
            <button id="social-link__btn">
              <object data="images/add-sign.svg" type=""></object>
            </button>
          </div>
          <div id="chat-box" class="col-span-full">
            <h2>Let's Connect!</h2>
            <p>I'm waiting you somewhere in the world 🌎</p>
            <ul>
                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
          </div>
        </div>

      </header>
    </div>

    <div id="hero-wrapper">
      <h2 class="hidden">Nate's Portfolio Hero Section</h2>
      <div id="hero__container" class="full-width">
        <div id="hero_project-detail__wrapper" class="col-span-full hidden">
          <section id="hero__project-details">
            <button id="project-details__lightbox-controller">
              <i class="fa-thin fa-x"></i>
            </button>
            <div id="project-details__image">
              <img src="#" alt="Project Image" />
            </div>
            <div id="project-details">
              <h2 id="project-details__headline" class="col-span-1">
                Project
                <span id="project-details__sub-headline">w/ Subhead</span>
              </h2>
              <p id="project-details__client" class="col-span-1">Mad Company</p>
              <p id="project-details__desc" class="col-span-1">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Possimus, laboriosam error pariatur veniam expedita consequatur
                enim nobis et! Tempore quaerat repellat.
              </p>
              <a id="project-link" href="#">Go to project</a>
            </div>
          </section>
        </div>

        <section id="hero__card-deck" class="col-span-full">
          <h2 class="hidden">
            Pick Some That Catch Your Eyes, These are Some of Projects I Worked
            With!
          </h2>
          <div id="card-deck__position1" class="hero__card">1</div>
          <div id="card-deck__position2" class="hero__card">2</div>
          <div id="card-deck__position3" class="hero__card">3</div>
          <div id="card-deck__position4" class="hero__card">4</div>
          <div id="card-deck__position5" class="hero__card">5</div>
          <div id="card-deck__position6" class="hero__card">6</div>
        </section>
      </div>
    </div>

    <div id="stacks-wrapper">
      <h2 class="hidden">Nate's Stacks Section</h2>
      <div id="stacks__container" class="grid-con">
        <section id="stacks" class="col-span-full">
          <p>
            Stacks <br />
            <span>Code</span> React / Git / JavaScript / mySQL / MongoDB / HTML
            / CSS
            <br />
            <span>Design </span> Cinema 4D / After Effect / Premier Pro / Figma
            / Illustrator / PS
          </p>
        </section>
      </div>
    </div>

    <div id="showreel-wrapper">
      <div id="showreel__container" class="full-width">
        <p id="showreel__chatbox"></p>
        <div id="showreel__video-container" class="col-span-full">
          <video controls src="video/sky.mov"></video>
        </div>
      </div>
    </div>

    <div id="testimonial-wrapper">
      <div id="testimonial__container" class="grid-con">
        <div class="testimonial__card col-span-full l-col-span-6 xl-col-span-6">
          <div class="card__client_company">
            <div class="card__client"></div>
            <div class="card__company"></div>
          </div>
          <div class="card__text">
            <div class="card__testimonial-text"></div>
            <div class="card__testimonial-cite"></div>
          </div>
        </div>

        <div
          id="for-show"
          class="testimonial__card col-span-full l-col-span-6 xl-col-span-6">
          <div class="card__client_company">
            <div class="card__client"></div>
            <div class="card__company"></div>
          </div>
          <div class="card__text">
            <div class="card__testimonial-text"></div>
            <div class="card__testimonial-cite"></div>
          </div>
        </div>
      </div>
    </div>

    <div id="contact-box-wrapper">
      <div id="contact-box__container" class="grid-con">
        <p class="col-span-full">
          For your cool project, I can help! <wbr /> leave your message and
          email here.
        </p>
        <section
          id="contact-box__form"
          class="col-span-full t-col-span-6 l-col-span-6 xl-col-span-6">
          <h2 class="hidden">Connect Nate Easily Here! Let's Make Some Chat</h2>
          <input
            id="contact-message"
            type="text"
            placeholder="tell me a little about the project."
            required />
          <input
            id="contact-email"
            type="text"
            placeholder="your@email"
            required />
          <button id="contact-submit" type="submit">Send</button>
        </section>
      </div>
    </div>

    <div id="footer-wrapper">
      <h2 class="hidden">The Nate's Portfolio Footer</h2>
      <footer id="footer__container" class="full-width">
        <div
          id="footer"
          class="col-span-full t-col-span-5 l-col-span-4 xl-col-span-4"></div>
      </footer>
    </div>

    <!-- JavaScript Area -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/text.js"></script>
  </body>
</html>
