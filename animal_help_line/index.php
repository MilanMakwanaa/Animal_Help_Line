<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildvine - Give Love for Saving Animals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Roboto:wght@300;400;500;700&family=Oswald:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header" data-header>
        <div class="container">

            <h1>
                <a href="#" class="logo">AHL</a>
            </h1>

            <select name="language" class="lang-switch">

                <option>Animals</option>
                <option value="mammals"><a class="dropdown-item" href="#">Mammals</a></option>
                <option value="birds"><a class="dropdown-item" href="#">Birds</a></option>
                <option value="reptiles"><a class="dropdown-item" href="#">Reptiles</a></option>
                <option value="amphibians"><a class="dropdown-item" href="#">Amphibians</a></option>
                <option value="fish"><a class="dropdown-item" href="#">Fish</a></option>
                <option value="invertebrates"><a class="dropdown-item" href="#">Invertebrates</a></option>

            </select>

            <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <nav class="navbar" data-navbar>

                <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>

                <a href="#" class="logo">AHL</a>

                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link" data-nav-link>
                            <span>Home</span>

                            <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="about" class="navbar-link" data-nav-link>
                            <span>About</span>

                            <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="" class="navbar-link" data-nav-link>
                            <span>Contact</span>

                            <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="demo.php" class="navbar-link">
                            <span>Complain</span>
                            <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="login.php" class="navbar-link" data-nav-link>
                            <span>Login</span></a>

                        <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                        </a>
                    </li>

                </ul>

            </nav>

            <div class="header-action">

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success " type="submit" style="font-size: 13px; ">Search</button>
                </form>

            </div>

        </div>
    </header>


    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="hero" id="home">
                <div class="container">

                    <p class="section-subtitle">
                        <img src="./assets/images/subtitle-img-white.png" width="32" height="7" alt="Wavy line">

                        <span>Welcome to AHL</span>
                    </p>

                    <h2 class="h1 hero-title">
                        Give Love for Saving <strong>World Animals</strong>
                    </h2>

                    <p class="hero-text">
                        Sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        suspendisse
                        ultrices gravida.
                    </p>

                    </button>
                </div>
            </section>

            <section class="section features">
                <div class="container">

                    <ul class="features-list">

                        <li class="features-item">
                            <div class="item-icon">
                                <ion-icon name="shield-checkmark-outline"></ion-icon>
                            </div>

                            <div>
                                <h3 class="h4 item-title">Safe Shelter</h3>

                                <p class="item-text">
                                    Sit amet consecte adiscine
                                    eiusm temor ultrices.
                                </p>
                            </div>
                        </li>

                        <li class="features-item">
                            <div class="item-icon">
                                <ion-icon name="water-outline"></ion-icon>
                            </div>

                            <div>
                                <h3 class="h4 item-title">Safe Water</h3>

                                <p class="item-text">
                                    Sit amet consecte adiscine
                                    eiusm temor ultrices.
                                </p>
                            </div>
                        </li>

                        <li class="features-item">
                            <div class="item-icon">
                                <ion-icon name="leaf-outline"></ion-icon>
                            </div>

                            <div>
                                <h3 class="h4 item-title">Ecology Save</h3>

                                <p class="item-text">
                                    Sit amet consecte adiscine
                                    eiusm temor ultrices.
                                </p>
                            </div>
                        </li>

                        <li class="features-item">
                            <div class="item-icon">
                                <ion-icon name="snow-outline"></ion-icon>
                            </div>

                            <div>
                                <h3 class="h4 item-title">Environment</h3>

                                <p class="item-text">
                                    Sit amet consecte adiscine
                                    eiusm temor ultrices.
                                </p>
                            </div>
                        </li>

                    </ul>

                </div>
            </section>

            <section class="section about" id="about">
                <div class="container">

                    <div class="about-banner">
                        <img src="./assets/images/deco-img.png" width="58" height="261" alt="" class="deco-img">

                        <div class="banner-row">

                            <div class="banner-col">
                                <img src="./assets/images/about-banner-1.jpg" width="315" height="380" loading="lazy" alt="Tiger" class="about-img w-100">

                                <img src="./assets/images/about-banner-2.jpg" width="386" height="250" loading="lazy" alt="Panda" class="about-img about-img-2 w-100">
                            </div>

                            <div class="banner-col">
                                <img src="./assets/images/about-banner-3.jpg" width="250" height="277" loading="lazy" alt="Elephant" class="about-img about-img-3 w-100">

                                <img src="./assets/images/about-banner-4.jpg" width="315" height="380" loading="lazy" alt="Deer" class="about-img w-100">
                            </div>

                        </div>

                    </div>

                    <div class="about-content">

                        <p class="section-subtitle">
                            <img src="./assets/images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

                            <span>Why Choose Us</span>
                        </p>

                        <h2 class="h2 section-title">
                            Rise Your Hand to Save <strong>World Animals Life</strong>
                        </h2>

                        <div class="tab-content">

                            <p class="section-text">
                                But I must explain to you how all this mistaken denouncing pleasure and praising pain was born and I
                                will give you a
                                complete account of the system expoundmaster
                            </p>

                            <ul class="tab-list">

                                <li class="tab-item">
                                    <div class="item-icon">
                                        <ion-icon name="checkmark-circle"></ion-icon>
                                    </div>

                                    <p class="tab-text">Charity For Foods</p>
                                </li>

                                <li class="tab-item">
                                    <div class="item-icon">
                                        <ion-icon name="checkmark-circle"></ion-icon>
                                    </div>

                                    <p class="tab-text">Charity For Education</p>
                                </li>

                                <li class="tab-item">
                                    <div class="item-icon">
                                        <ion-icon name="checkmark-circle"></ion-icon>
                                    </div>

                                    <p class="tab-text">Charity For Water</p>
                                </li>

                                <li class="tab-item">
                                    <div class="item-icon">
                                        <ion-icon name="checkmark-circle"></ion-icon>
                                    </div>

                                    <p class="tab-text">Charity For Medical</p>
                                </li>

                            </ul>

                            <button class="btn btn-secondary">
                                <span>Learn More Us</span>

                                <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                            </button>

                        </div>

                    </div>

                </div>
            </section>

            <section class="section cta">
                <div class="container">

                    <div class="cta-content">
                        <h2 class="h2 section-title">324+ Trusted Global Partners</h2>

                        <button class="btn btn-outline">
                            <span>Become a Partner</span>

                            <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </div>

                    <figure class="cta-banner">
                        <img src="./assets/images/cta-banner.jpg" width="520" height="228" loading="lazy" alt="Fox" class="img-cover">
                    </figure>

                </div>
            </section>

            <section class="testi">

                <div class="testi-content">

                    <p class="section-subtitle">
                        <img src="./assets/images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

                        <span>Our Testimonials</span>
                    </p>

                    <h2 class="h2 section-title">
                        What People Say About <strong>Our Organization</strong>
                    </h2>

                    <div class="testi-card">

                        <figure class="card-avatar">
                            <img src="./assets/images/testi-avatar.png" width="60" height="60" loading="lazy" alt="David S. Neuman">
                        </figure>

                        <div>
                            <blockquote class="testi-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores eius impedit dignissimos corporis, iusto facere distinctio molestias totam dolorem possimus, cumque nemo asperiores id veniam sapiente maxime neque beatae quod.
                            </blockquote>

                            <h3 class="testi-name">David S. Neuman</h3>

                            <p class="testi-title">Business Manager</p>
                        </div>

                    </div>

                </div>

                <figure class="testi-banner">
                    <img src="./assets/images/testi-banner.jpeg" width="960" height="846" loading="lazy" alt="Rhinoceros" class="img-cover">
                </figure>

            </section>

            <!-- 
        - #INSTA POST
      -->

            <section class="insta-post">

                <ul class="insta-post-list">

                    <li class="insta-post-item">
                        <a href="#" class="insta-post-link">
                            <img src="./assets/images/insta-1.jpg" width="320" height="300" loading="lazy" alt="Lion" class="img-cover">

                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li class="insta-post-item">
                        <a href="#" class="insta-post-link">
                            <img src="./assets/images/insta-2.jpg" width="320" height="300" loading="lazy" alt="Deer" class="img-cover">

                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li class="insta-post-item">
                        <a href="#" class="insta-post-link">
                            <img src="./assets/images/insta-3.jpg" width="320" height="300" loading="lazy" alt="Wild Bear" class="img-cover">

                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li class="insta-post-item">
                        <a href="#" class="insta-post-link">
                            <img src="./assets/images/insta-4.jpg" width="320" height="300" loading="lazy" alt="Deer" class="img-cover">

                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li class="insta-post-item">
                        <a href="#" class="insta-post-link">
                            <img src="./assets/images/insta-5.jpg" width="320" height="300" loading="lazy" alt="Horses" class="img-cover">

                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                </ul>

            </section>

        </article>
    </main>





    <!-- 
    - #FOOTER
  -->

    <footer class="footer">
        <div class="container">

            <ul class="footer-list">

                <li>
                    <a href="#" class="footer-link">Terms of use</a>
                </li>

                <li>
                    <a href="#" class="footer-link">Privacy & Policy</a>
                </li>

            </ul>

        </div>
    </footer>





    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>