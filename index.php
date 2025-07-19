<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Azizullah Sial - ML/AI Developer Portfolio</title>

  <!--
    - favicon
  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/my-avatar.png" alt="Azizullah Sial" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Azizullah Sial">Azizullah Sial</h1>

          <p class="title">Software Engineer (AI expert + Web dev) </p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:iammaharazizullahsial@gmail.com" class="contact-link">iammaharazizullahsial@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+923199975615" class="contact-link">+92 319 9975615</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Experience</p>

              <time>3+ Years</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Pakistan</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

         <li class="social-item">
  <a href="https://www.linkedin.com/in/azizullah-sial-416990268/" class="social-link" target="_blank">
    <ion-icon name="logo-linkedin"></ion-icon>
  </a>
</li>


          <li class="social-item">
            <a href="https://github.com/azizullah12" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>

    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

    

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>

      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            I'm a Machine Learning and Deep Learning Engineer with 3+ years of experience building and deploying AI solutions using TensorFlow, PyTorch, and Scikit-learn. I specialize in applying ML in healthcare, ERP systems, and business management, solving real-world problems with clean, efficient code.
          </p>

          <p>
            My expertise spans both AI/ML development and full-stack web development using PHP, Django, Flask, and React. I've developed practical solutions across healthcare, ERP systems, and job management platforms. My aim is to bridge the gap between cutting-edge AI research and practical business applications, creating intelligent systems that make a real difference.
          </p>
        </section>

        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What I'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg" alt="ML icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Machine Learning</h4>

                <p class="service-item-text">
                  Building predictive models and AI solutions using TensorFlow, PyTorch, and Scikit-learn for real-world applications.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web Development</h4>

                <p class="service-item-text">
                  Full-stack development using PHP, Django, Flask, and React for scalable web applications.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-app.svg" alt="AI API icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">AI API Development</h4>

                <p class="service-item-text">
                  Developing and deploying ML models as APIs for seamless integration into existing systems.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-photo.svg" alt="data analysis icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Data Analysis</h4>

                <p class="service-item-text">
                  Expert in data preprocessing, analysis, and visualization using Pandas, NumPy, and OpenCV.
                </p>
              </div>

            </li>

          </ul>

        </section>

        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Testimonials</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Dr. Ahmed Hassan" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Dr. Ahmed Hassan</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Azizullah developed an outstanding skin disease detection system for our clinic. His expertise in computer vision and Flask API integration made the deployment seamless. The accuracy and user-friendly interface exceeded our expectations. Highly recommended for healthcare AI solutions.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Sarah Khan" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Sarah Khan</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Working with Azizullah on our ERP system customization was fantastic. His technical skills in Django and Odoo, combined with his problem-solving approach, delivered exactly what we needed. The system is robust, efficient, and perfectly tailored to our business processes.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Michael Chen" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Michael Chen</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Azizullah's job management system transformed our recruitment process. The PHP-based solution with real-time tracking capabilities streamlined our operations significantly. His attention to detail and clean coding practices made maintenance effortless.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.png" alt="Aqib javed" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Aqib javed</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    The churn prediction model Azizullah built for our e-commerce platform was incredibly accurate and actionable. His expertise in machine learning algorithms and data analysis helped us reduce customer attrition by 25%. Exceptional work and professional delivery.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>

        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Dr. Ahmed Hassan" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Dr. Ahmed Hassan</h4>

              <time datetime="2024-03-15">15 March, 2024</time>

              <div data-modal-text>
                <p>
                  Azizullah developed an outstanding skin disease detection system for our clinic. His expertise in computer vision and Flask API integration made the deployment seamless. The accuracy and user-friendly interface exceeded our expectations. Highly recommended for healthcare AI solutions.
                </p>
              </div>

            </div>

          </section>

        </div>

        <!--
          - clients
        -->

        <section class="clients">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Light Yellow Icon Styling -->
<style>
  .clients-item i,
  .clients-item span {
    color: #fef9c3; /* Soft light yellow */
  }
</style>

          <h3 class="h3 clients-title">Technologies</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item" title="Python">
    <a href="#"><i class="fab fa-python fa-3x"></i></a>
  </li>

  <li class="clients-item" title="HTML5">
    <a href="#"><i class="fab fa-html5 fa-3x"></i></a>
  </li>

  <li class="clients-item" title="CSS3">
    <a href="#"><i class="fab fa-css3-alt fa-3x"></i></a>
  </li>

  <li class="clients-item" title="JavaScript">
    <a href="#"><i class="fab fa-js fa-3x"></i></a>
  </li>

  <li class="clients-item" title="PHP">
    <a href="#"><i class="fab fa-php fa-3x"></i></a>
  </li>

  <li class="clients-item" title="WordPress">
    <a href="#"><i class="fab fa-wordpress fa-3x"></i></a>
  </li>

  <li class="clients-item" title="Django">
    <a href="#"><span style="font-size: 1.5rem; font-weight: bold;">Django</span></a>
  </li>
          </ul>

        </section>

      </article>

      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Bachelor in Software Engineering</h4>

              <span>2021 — 2025</span>

              <p class="timeline-text">
                Capital University of Science and Technology - Comprehensive study in software development, algorithms, data structures, and modern programming paradigms with focus on AI and machine learning applications.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Intermediate in Computer Science (ICS)</h4>

              <span>2019 — 2021</span>

              <p class="timeline-text">
                Punjab College - Strong foundation in mathematics, physics, and computer science fundamentals, preparing for advanced studies in software engineering and technology.
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="briefcase-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">ML/AI Developer and Researcher</h4>

              <span>Jan 2022 — Present</span>

              <p class="timeline-text">
                Developed and deployed machine learning models including skin disease detection, kidney disease prediction, snore detection, South Asian food classification, and churn prediction. Utilized CNNs and traditional ML techniques on image, audio, and tabular data. Integrated models with Flask APIs for real-time, scalable solutions in healthcare and business environments.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Full-Stack Web Developer</h4>

              <span>Jan 2022 — Present</span>

              <p class="timeline-text">
                Developed dynamic web platforms using PHP, Django, and Flask. Delivered job and hospital management systems with user-friendly admin panels and data handling. Built AI-powered disease detection apps with Flask APIs. Maintained Django-based healthcare platforms and customized Odoo ERP for business operations.
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Machine Learning & Deep Learning</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Python (TensorFlow, PyTorch)</h5>
                <data value="95">95%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 95%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web Development (Django, Flask, PHP)</h5>
                <data value="85">85%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 85%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Data Analysis (Pandas, NumPy)</h5>
                <data value="88">88%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 88%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Computer Vision & OpenCV</h5>
                <data value="85">85%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 85%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Database Management (SQL, NoSQL)</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>

      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

  <header>
    <h2 class="h2 article-title">Portfolio</h2>
  </header>

  <section class="projects">

    <ul class="filter-list">
      <li class="filter-item">
        <button class="active" data-filter-btn>All</button>
      </li>
      <li class="filter-item">
        <button data-filter-btn>Web Development</button>
      </li>
    </ul>

    <div class="filter-select-box">
      <button class="filter-select" data-select>
        <div class="select-value" data-selecct-value>Select category</div>
        <div class="select-icon">
          <ion-icon name="chevron-down"></ion-icon>
        </div>
      </button>

      <ul class="select-list">
        <li class="select-item">
          <button data-select-item>All</button>
        </li>
        <li class="select-item">
          <button data-select-item>Web Development</button>
        </li>
      </ul>
    </div>

    <ul class="project-list">

<li class="project-item active" data-filter-item data-category="web development">
  <a href="https://aahilsial12.wixsite.com/car-connect-uk" target="_blank">
    <figure class="project-img">
      <div class="project-item-icon-box">
        <ion-icon name="eye-outline"></ion-icon>
      </div>
      <img src="./assets/images/project-1.png" alt="Car Rental System" loading="lazy">
    </figure>
    <h3 class="project-title">Car Rental & Purchase Platform</h3>
    <p class="project-category">Web Development (wixsite)</p>
  </a>
</li>


     <li class="project-item active" data-filter-item data-category="web development">
  <a href="https://ar2366296.wixsite.com/my-site-3" target="_blank" rel="noopener noreferrer">
    <figure class="project-img">
      <div class="project-item-icon-box">
        <ion-icon name="eye-outline"></ion-icon>
      </div>
      <img src="./assets/images/project-5.png" alt="Restaurant Management" loading="lazy">
    </figure>
    <h3 class="project-title">Restaurant Management System</h3>
    <p class="project-category">Web Development (WordPress)</p>
  </a>
</li>

    <li class="project-item active" data-filter-item data-category="web development">
  <a href="https://aahilsial12.wixsite.com/wellmed-express/category/all-products" target="_blank" rel="noopener noreferrer">
    <figure class="project-img">
      <div class="project-item-icon-box">
        <ion-icon name="eye-outline"></ion-icon>
      </div>
      <img src="./assets/images/project-3.png" alt="Pharmacy E-commerce" loading="lazy">
    </figure>
    <h3 class="project-title">Online Medicine Store</h3>
    <p class="project-category">Web Development (wixsite)</p>
  </a>
</li>

    <li class="project-item active" data-filter-item data-category="web development">
  <a href="https://github.com/azizullah12/Kindney_Disease_detection_model_with_Streamlit_webapp" target="_blank">
    <figure class="project-img">
      <div class="project-item-icon-box">
        <ion-icon name="eye-outline"></ion-icon>
      </div>
      <img src="./assets/images/project-nq.png" alt="Kidney Disease detection" loading="lazy">
    </figure>
    <h3 class="project-title">Kidney Disease Detection</h3>
    <p class="project-category">Web App (Flask API + Python)</p>
  </a>
</li>



      <li class="project-item active" data-filter-item data-category="web development">
        <a href="#">
          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
            <img src="./assets/images/project-n4.png" alt="User Registration and login System with admin panel" loading="lazy">
          </figure>
          <h3 class="project-title">User Login/Admin panel</h3>
          <p class="project-category">Web Development (php + MySQL)</p>
        </a>
      </li>

     <li class="project-item active" data-filter-item data-category="web development">
  <a href="https://colab.research.google.com/drive/1MCZWBIExz6ywCoybrVI0iZUSuTJm3Vf1?usp=sharing" target="_blank">
    <figure class="project-img">
      <div class="project-item-icon-box">
        <ion-icon name="eye-outline"></ion-icon>
      </div>
      <img src="./assets/images/project-6nn.png" alt="Diabetic Retinopathy Detection" loading="lazy">
    </figure>
    <h3 class="project-title">Diabetic Retinopathy Detection</h3>
    <p class="project-category">Deep learning Model (Python)</p>
  </a>
</li>


      <li class="project-item active" data-filter-item data-category="web development">
  <a href="https://colab.research.google.com/drive/1XbFjgJp0baes33-OoOID3UrVggk1JQv6?usp=sharing" target="_blank">
    <figure class="project-img">
      <div class="project-item-icon-box">
        <ion-icon name="eye-outline"></ion-icon>
      </div>
      <img src="./assets/images/project-n7.png" alt="Skin disease Detection" loading="lazy">
    </figure>
    <h3 class="project-title">Skin Disease Detection</h3>
    <p class="project-category">AI model (Python + Collab)</p>
  </a>
</li>


    <li class="project-item active" data-filter-item data-category="web development">
  <a href="https://colab.research.google.com/drive/1EEaT2EFlg-jtdluW_mu-MdW8Tru_M9uK?usp=sharing" target="_blank">
    <figure class="project-img">
      <div class="project-item-icon-box">
        <ion-icon name="eye-outline"></ion-icon>
      </div>
      <img src="./assets/images/projectnn-n8.png" alt="South Asian Food Classification" loading="lazy">
    </figure>
    <h3 class="project-title">South Asian Food Classification</h3>
    <p class="project-category">Research Model (Python, Pandas)</p>
  </a>
</li>



      <li class="project-item active" data-filter-item data-category="web development">
        <a href="#">
          <figure class="project-img">
            <div class="project-item-icon-box">
              <ion-icon name="eye-outline"></ion-icon>
            </div>
            <img src="./assets/images/project-9n.png" alt="Investment Management" loading="lazy">
          </figure>
          <h3 class="project-title">Investment Management</h3>
          <p class="project-category">Django (Python + html)</p>
        </a>
      </li>

    </ul>

  </section>

</article>
     
     <article class="contact" data-page="contact">

  <header>
    <h2 class="h2 article-title">Contact</h2>
  </header>

  <section class="contact-info">
    <div class="contact-card">
      <div class="contact-item">
        <ion-icon name="call-outline" class="contact-icon" style="color: #FFD700;"></ion-icon>
        <div class="contact-content">
          <h3 class="h3 contact-title">Phone</h3>
          <a href="tel:+923199975615" class="contact-link">+92 319 9975615</a>
        </div>
      </div>

      <div class="contact-item">
        <ion-icon name="mail-outline" class="contact-icon" style="color: #FFD700;"></ion-icon>
        <div class="contact-content">
          <h3 class="h3 contact-title">Email</h3>
          <a href="mailto:iammaharazizullahsial@gmail.com" class="contact-link">iammaharazizullahsial@gmail.com</a>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-form">
    <h3 class="h3 form-title">Get In Touch</h3>

    <form action="#" class="form" data-form>
      <div class="input-wrapper">
        <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>
        <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
      </div>

      <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

      <button class="form-btn" type="submit" disabled data-form-btn>
        <ion-icon name="paper-plane" style="color: #FFD700;"></ion-icon>
        <span>Send Message</span>
      </button>
    </form>
  </section>

</article> 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>