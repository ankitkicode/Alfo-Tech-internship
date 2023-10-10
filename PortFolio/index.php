<?php
include("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>personal portfolio.com</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Rubik:ital,wght@0,500;0,600;1,300;1,400&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
  </head>
  <body>
    <header class="header">
      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">Portfolio</a>

      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
      </nav>

      <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-telegram"></a>
        <a href="#" class="fab fa-linkedin"></a>
      </div>
    </header>

    <section class="home" id="home">
      <div class="image">
        <img src="images/1654582981835-01.jpeg" />
      </div>

      <div class="content">
        <h3>hi, i am ankit jatav</h3>
        <span>web designer & developer</span>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam
          voluptatibus veritatis deserunt placeat tenetur pariatur iste
          necessitatibus, aliquid atque asperiores deleniti impedit? Placeat
          eius ullam amet eveniet atque culpa ex. Lorem ipsum dolor, sit amet
          consectetur adipisicing elit. Illum ullam animi unde! Temporibus,
          minus id.
        </p>
        <a href="#about" class="btn">about me </a>
      </div>
    </section>

    <section class="about" id="about">
      <h1 class="heading"><span>biography</span></h1>

      <div class="biography">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam
          incidunt pariatur quod voluptatibus debitis qui unde quo explicabo
          repellat illo!
        </p>
        <div class="bio">
          <h3><span>name:</span> Ankit jatav</h3>
          <h3><span>phone:</span> +919399846862</h3>
          <h3><span>email:</span> parsonda61@gmail.com</h3>
          <h3><span>address:</span> bhopal,madhya pradesh</h3>
          <h3><span>age:</span> 19 years</h3>
          <h3><span>experience:</span> fresher</h3>
        </div>
        <a href="#" class="btn">Download CV</a>
      </div>

      <div class="skills">
        <h1 class="heading"><span>Skills</span></h1>

        <div class="progress">
          <div class="bar">
            <h3><span>HTML</span><span>95%</span></h3>
          </div>
          <div class="bar">
            <h3><span>Javascript</span><span>78%</span></h3>
          </div>
          <div class="bar">
            <h3><span>CSS</span><span>85%</span></h3>
          </div>
          <div class="bar">
            <h3><span>Bootstrap</span><span>75%</span></h3>
          </div>
          <div class="bar">
            <h3><span>Python</span><span>83%</span></h3>
          </div>
          <div class="bar">
            <h3><span>PHP</span><span>90%</span></h3>
          </div>
          <div class="bar">
            <h3><span>Mysql</span><span>80%</span></h3>
          </div>
        </div>
      </div>

      <div class="edu-exp">
        <h1 class="heading" data-aos="fade-up">
          <span>education & experience</span>
        </h1>

        <div class="row">
          <div class="box-container">
            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
              <span>( 2019 - 2020 )</span>
              <h3>web designer</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Quaerat assumenda, eaque sequi repellat natus quia.
              </p>
            </div>

            <div class="box" data-aos="fade-right">
              <span>( 2020 - 2021 )</span>
              <h3>web developer</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Quaerat assumenda, eaque sequi repellat natus quia.
              </p>
            </div>

            <div class="box" data-aos="fade-right">
              <span>( 2021 - 2022 )</span>
              <h3>graphic designer</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Quaerat assumenda, eaque sequi repellat natus quia.
              </p>
            </div>
          </div>

          <div class="box-container">
            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
              <span>( 2019 - 2020 )</span>
              <h3>front-end developer</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Quaerat assumenda, eaque sequi repellat natus quia.
              </p>
            </div>

            <div class="box" data-aos="fade-left">
              <span>( 2020 - 2021 )</span>
              <h3>back-end developer</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Quaerat assumenda, eaque sequi repellat natus quia.
              </p>
            </div>

            <div class="box" data-aos="fade-left">
              <span>( 2021 - 2022 )</span>
              <h3>full-stack developer</h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Quaerat assumenda, eaque sequi repellat natus quia.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- services section starts  -->

    <section class="services" id="services">
      <h1 class="heading" data-aos="fade-up"><span>services</span></h1>

      <div class="box-container">
        <div class="box" data-aos="zoom-in">
          <i class="fas fa-code"></i>
          <h3>web development</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
            placeat veritatis accusantium nostrum rem ipsa.
          </p>
        </div>

        <div class="box" data-aos="zoom-in">
          <i class="fas fa-paint-brush"></i>
          <h3>graphic design</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
            placeat veritatis accusantium nostrum rem ipsa.
          </p>
        </div>

        <div class="box" data-aos="zoom-in">
          <i class="fab fa-bootstrap"></i>
          <h3>bootstrap</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
            placeat veritatis accusantium nostrum rem ipsa.
          </p>
        </div>

        <div class="box" data-aos="zoom-in">
          <i class="fas fa-chart-line"></i>
          <h3>seo marketing</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
            placeat veritatis accusantium nostrum rem ipsa.
          </p>
        </div>

        <div class="box" data-aos="zoom-in">
          <i class="fas fa-bullhorn"></i>
          <h3>digital marketing</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
            placeat veritatis accusantium nostrum rem ipsa.
          </p>
        </div>

        <div class="box" data-aos="zoom-in">
          <i class="fab fa-wordpress"></i>
          <h3>wordpress</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat,
            placeat veritatis accusantium nostrum rem ipsa.
          </p>
        </div>
      </div>
    </section>

    <!-- services section ends -->
    <!-- portfolio section starts  -->

    <section class="portfolio" id="portfolio">
      <h1 class="heading" data-aos="fade-up"><span>portfolio</span></h1>

      <div class="box-container">
        <div class="box" data-aos="zoom-in">
          <img src="images/img-1.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>

        <div class="box" data-aos="zoom-in">
          <img src="images/img-2.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>

        <div class="box" data-aos="zoom-in">
          <img src="images/img-3.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>

        <div class="box" data-aos="zoom-in">
          <img src="images/img-4.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>

        <div class="box" data-aos="zoom-in">
          <img src="images/img-5.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>

        <div class="box" data-aos="zoom-in">
          <img src="images/img-6.jpg" alt="" />
          <h3>web development</h3>
          <span>( 2020 - 2022 )</span>
        </div>
      </div>
    </section>

    <!-- portfolio section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">
      <h1 class="heading" data-aos="fade-up"><span>contact me</span></h1>

      <form action="connect.php" method="post">
        <div class="flex">
          <input
            data-aos="fade-right"
            type="text"
            name="name"
            placeholder="enter your name"
            class="box"
            required
          />
          <input
            data-aos="fade-left"
            type="email"
            name="email"
            placeholder="enter your email"
            class="box"
            required
          />
        </div>
        <input
          data-aos="fade-up"
          type="number"
          min="0"
          name="number"
          placeholder="enter your number"
          class="box"
          required
        />
        <textarea
          data-aos="fade-up"
          name="message"
          class="box"
          required
          placeholder="enter your message"
          cols="30"
          rows="10"
        ></textarea>
        <input
          type="submit"
          data-aos="zoom-in"
          value="send message"
          name="send"
          class="btn"
        />
      </form>

      <div class="box-container">
        <div class="box" data-aos="zoom-in">
          <i class="fas fa-phone"></i>
          <h3>phone</h3>
          <p>+919399846862</p>
        </div>

        <div class="box" data-aos="zoom-in">
          <i class="fas fa-envelope"></i>
          <h3>email</h3>
          <p>parsonda61@gmail.com</p>
        </div>

        <div class="box" data-aos="zoom-in">
          <i class="fas fa-map-marker-alt"></i>
          <h3>address</h3>
          <p>bhopal, madhya pradesh india</p>
        </div>
      </div>
    </section>

    <!-- contact section ends -->

    <div class="credit">
      &copy; copyright @
      <?php echo date('Y'); ?>
      by <span>mr.ankit_ki_code</span>
    </div>
    <script src="script.js"></script>
  </body>
</html>
