<?php

require_once "router.php";

route('/', function () {

});

route('/about', function () {
  return header("Location: http://localhost:8000/about.php");
    die();
});

route('/hello', function () {
  return header("Location: http://localhost:8000/hello.php");
    die();
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Thomas Matlock">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/public/css/style.css">

    <title>Thomas Matlock | Designer, Developer, Entreprenuer</title>
</head>
<body>
    <header class="header">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Thomas Matlock</span>
                <span class="heading-primary--sub">Designer - Developer - Entreprenuer</span>
            </h1>
        </div>
    </header>

    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-small">
                <h2 class="heading-secondary">
                    Thomas Matlock
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <div class="about-info">
                        <h3 class="heading-teritary u-margin-bottom-small">Developer with a Passion for Innovation</h3>
                        <p class="paragraph">
                            I am a software developer with a passion for Innovation and building things. I want to make things different and bring new ideas to the table.
                            I build modern websites and applications with the newest and modern web trends.
                            I am a software developer at Ergon and the founder of PsychStudios an application development company.
                        </p>

                        <a href="/about" class="btn btn-text">Learn More &rarr;</a>
                    </div>
                </div>

                <div class="col-1-of-2">
                    <div class="about-image">
                        <img src="/img/me.jpg" alt="" class="about-image about-image__photo">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-features">
            <!-- <div class="u-center-text u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    Skills and Services
                </h2>
            </div> -->

            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">

                            </div>
                            <h3 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">Web Development</span>
                            </h3>

                            <p class="card__text">
                                Application Developer at Ergon, Inc with a passion for innovation in the workplace.
                                I bring a thriving creative spirit into work and greatly enjoy solving challenges.
                                 With experience in web-based technologies and business background I can bring a unique perspective to a team.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">

                            </div>
                            <h3 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">Application Development</span>
                            </h3>

                            <p class="card__text">
                              Application Developer at Ergon, Inc with a passion for innovation in the workplace.
                              I bring a thriving creative spirit into work and greatly enjoy solving challenges.
                               With experience in web-based technologies and business background I can bring a unique perspective to a team.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">

                            </div>
                            <h3 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">UI/UX Design</span>
                            </h3>

                            <p class="card__text">
                              Application Developer at Ergon, Inc with a passion for innovation in the workplace.
                              I bring a thriving creative spirit into work and greatly enjoy solving challenges.
                               With experience in web-based technologies and business background I can bring a unique perspective to a team.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-footer">
            <hr>
            <div class="row">
                <div class="col-1-of-3">
                    <h5 class="section-footer__heading">About</h5>
                    <p class="section-footer__text">
                        I am a passionate developer with a desire to build the most modern things that I can, meanwhile bringing a unique perspective.
                        I am believer that creativity and meaning behind what you are creating allow for a beautful perspective on a problem that can arise.

                    </p>
                </div>

                <div class="col-1-of-3">
                    <h5 class="section-footer__heading">Categories</h5>
                    <ul class="section-footer section-footer-links">
                        <li><a href="http://scanfcode.com/category/c-language/">GitHub</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">LinkedIn</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">Twitter</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Facebook</a></li>
                    </ul>
                </div>

                <div class="col-1-of-3">
                    <h5 class="section-footer__heading">Contact Me</h5>
                    <ul class="section-footer section-footer-links">
                        <li><a href="http://scanfcode.com/about/">Thomas Matlock</a></li>
                        <li><a href="http://scanfcode.com/contact/">Mississippi</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">thomasmatlockbba@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
