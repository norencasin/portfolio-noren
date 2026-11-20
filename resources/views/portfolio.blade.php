<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noren Casin | Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --cream: #fff9f6;
            --pink: #f8e5eb;
            --light-pink: #fceef1;
            --rose: #c77996;
            --deep-rose: #a85d79;
            --plum: #513943;
            --brown: #806773;
            --gold: #bd9982;
            --white: #ffffff;
            --border: #f0dce3;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--cream);
            color: var(--plum);
            line-height: 1.7;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: 86%;
            max-width: 1150px;
            margin: auto;
        }

        /* NAVIGATION */

        header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(255, 249, 246, 0.96);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
        }

        .navbar {
            min-height: 78px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        nav {
            display: flex;
            gap: 35px;
        }

        nav a {
            color: var(--brown);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: .3s;
        }

        nav a:hover {
            color: var(--rose);
        }

        /* HOME */

        .hero {
            min-height: 570px;
            margin: 35px auto 75px;
            padding: 70px 55px;
            background: linear-gradient(
                135deg,
                #fbe8ed,
                #fff1ee,
                #f8e5eb
            );
            border: 1px solid var(--border);
            border-radius: 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
            text-align: left;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "✿";
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 75px;
            color: #dca7b8;
            opacity: .55;
        }

        .hero::after {
            content: "✧";
            position: absolute;
            bottom: 25px;
            left: 30px;
            font-size: 55px;
            color: var(--gold);
            opacity: .65;
        }

        .hero-content {
            flex: 1;
            max-width: 600px;
            position: relative;
            z-index: 1;
        }

        .hero-image {
            width: 300px;
            height: 380px;
            flex-shrink: 0;
            position: relative;
            z-index: 1;
            border: 7px solid white;
            border-radius: 150px 150px 25px 25px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(168, 93, 121, .16);
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            object-position: center top;
        }

        .eyebrow {
            color: var(--deep-rose);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(45px, 6vw, 76px);
            font-weight: 500;
            line-height: 1.15;
            margin: 24px 0;
        }

        h1 span {
            color: var(--deep-rose);
            font-style: italic;
        }

        .hero-description {
            max-width: 570px;
            margin: 0;
            color: var(--brown);
            font-size: 15px;
            line-height: 2;
        }

        .hero-buttons {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 25px;
            flex-wrap: wrap;
            margin-top: 35px;
        }

        .primary-btn {
            display: inline-block;
            background: var(--rose);
            color: white;
            padding: 14px 28px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            transition: .3s;
        }

        .primary-btn:hover {
            background: var(--deep-rose);
            transform: translateY(-3px);
        }

        .secondary-btn {
            font-size: 12px;
            font-weight: 600;
            color: var(--deep-rose);
            border-bottom: 1px solid var(--rose);
            padding-bottom: 5px;
        }

        /* GENERAL SECTIONS */

        section:not(.hero) {
            padding: 85px 0;
            border-top: 1px solid var(--border);
            scroll-margin-top: 75px;
        }

        .section-label {
            color: var(--rose);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 3px;
            margin-bottom: 13px;
        }

        h2 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(34px, 4vw, 47px);
            font-weight: 500;
            color: var(--deep-rose);
            line-height: 1.25;
            margin-bottom: 22px;
        }

        .section-description {
            max-width: 650px;
            color: var(--brown);
            font-size: 14px;
            line-height: 2;
        }

        /* ABOUT ME */

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 65px;
            align-items: center;
        }

        .about-quote {
            padding: 35px;
            background: var(--light-pink);
            border-radius: 20px;
            border-left: 4px solid var(--rose);
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            line-height: 1.7;
            color: var(--deep-rose);
        }

        .about-text {
            color: var(--brown);
            font-size: 14px;
            line-height: 2.1;
        }

        /* SKILLS */

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 38px;
        }

        .skill-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 27px;
            color: var(--plum);
            font-size: 13px;
            font-weight: 600;
            box-shadow: 0 6px 20px rgba(185, 113, 142, .06);
            transition: .3s;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            border-color: var(--rose);
        }

        .skill-number {
            display: block;
            color: var(--rose);
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            margin-bottom: 10px;
        }

        /* PROJECTS */

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
            margin-top: 38px;
        }

        .project-card {
            padding: 35px;
            min-height: 225px;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(185, 113, 142, .06);
            transition: .3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            border-color: var(--rose);
        }

        .project-type {
            color: var(--rose);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .project-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            font-weight: 500;
            color: var(--deep-rose);
            margin: 17px 0 12px;
        }

        .project-card p {
            color: var(--brown);
            font-size: 13px;
            line-height: 1.9;
        }

        /* CONTACT */

        .contact-box {
            background: linear-gradient(
                135deg,
                #a85d79,
                #c77996
            );
            padding: 60px;
            border-radius: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 35px;
            color: white;
        }

        .contact-box .section-label {
            color: #ffe4eb;
        }

        .contact-box h2 {
            color: white;
            margin-bottom: 15px;
        }

        .contact-box p {
            color: #fff0f3;
            font-size: 13px;
            line-height: 2;
        }

        .contact-email {
            margin-top: 18px;
            color: white;
            font-size: 13px;
            overflow-wrap: anywhere;
        }

        .contact-btn {
            display: inline-block;
            padding: 14px 25px;
            border: 1px solid white;
            border-radius: 30px;
            color: white;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            white-space: nowrap;
            transition: .3s;
        }

        .contact-btn:hover {
            background: white;
            color: var(--deep-rose);
        }

        /* FOOTER */

        footer {
            text-align: center;
            padding: 28px 15px;
            color: var(--brown);
            font-size: 11px;
            letter-spacing: 1px;
        }

        /* MOBILE RESPONSIVE */

        @media (max-width: 750px) {
            .container {
                width: 90%;
            }

            .navbar {
                min-height: 75px;
                justify-content: center;
            }

            nav {
                gap: 17px;
                flex-wrap: wrap;
                justify-content: center;
                padding: 15px 0;
            }

            nav a {
                font-size: 10px;
            }

            .hero {
                min-height: auto;
                padding: 65px 25px;
                margin-top: 20px;
                flex-direction: column;
                text-align: center;
                gap: 35px;
            }

            .hero-content {
                width: 100%;
            }

            .hero-description {
                margin: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-image {
                width: 250px;
                height: 320px;
            }

            .hero::before {
                right: 20px;
                font-size: 50px;
            }

            .hero::after {
                left: 20px;
                font-size: 40px;
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .contact-box {
                flex-direction: column;
                align-items: flex-start;
                padding: 35px 25px;
            }
        }

        @media (max-width: 400px) {
            nav {
                gap: 12px;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }

            .hero-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGATION: NO LOGO -->

    <header>
        <div class="container navbar">
            <nav>
                <a href="#home">Home</a>
                <a href="#about">About Me</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <main>

        <!-- HOME -->

        <div class="container">
            <section class="hero" id="home">

                <div class="hero-content">

                    <p class="eyebrow">
                        Welcome to my little corner
                    </p>

                    <h1>
                        Hello, I'm<br>
                        <span>Noren Casin.</span>
                    </h1>

                    <p class="hero-description">
                        An Information Technology student with a
                        passion for technology, creativity, and
                        continuous learning. Exploring new ideas,
                        discovering possibilities, and turning
                        curiosity into meaningful experiences.
                    </p>

                    <div class="hero-buttons">
                        <a href="#projects" class="primary-btn">
                            EXPLORE MY WORK
                        </a>

                        <a href="#about" class="secondary-btn">
                            Get to know me
                        </a>
                    </div>

                </div>

                <!-- PROFILE PICTURE -->

                <div class="hero-image">
                    <img src="{{ asset('image/profile.jpg') }}" alt="Noren Casin">
                </div>

            </section>
        </div>

        <!-- ABOUT ME -->

        <section id="about">
            <div class="container">

                <div class="about-grid">

                    <div>
                        <p class="section-label">
                            01 — A LITTLE ABOUT ME
                        </p>

                        <h2>
                            More than just an IT student.
                        </h2>

                        <div class="about-quote">
                            "A curious mind, a creative heart,
                            and a love for discovering new things."
                        </div>
                    </div>

                    <div class="about-text">

                        <p>
                            Hello! My name is Noren Casin, and I am
                            a Bachelor of Science in Information
                            Technology student. I am passionate
                            about technology and interested in
                            web development.
                        </p>

                        <br>

                        <p>
                            Outside academics, I enjoy cooking,
                            exploring new things, and visiting
                            new places. I love discovering different
                            experiences, learning from my surroundings,
                            and stepping out of my comfort zone.
                        </p>

                        <br>

                        <p>
                            I believe that learning doesn't only happen
                            inside the classroom. Every new experience
                            gives me an opportunity to grow, gain
                            knowledge, and discover more about myself.
                        </p>

                    </div>

                </div>

            </div>
        </section>

        <!-- SKILLS -->

        <section id="skills">
            <div class="container">

                <p class="section-label">
                    02 — WHAT I DO
                </p>

                <h2>My Skills & Knowledge</h2>

                <p class="section-description">
                    A collection of technical skills and knowledge
                    I continue to develop throughout my journey
                    as an Information Technology student.
                </p>

                <div class="skills-grid">

                    <div class="skill-card">
                        <span class="skill-number">01</span>
                        HTML
                    </div>

                    <div class="skill-card">
                        <span class="skill-number">02</span>
                        CSS
                    </div>

                    <div class="skill-card">
                        <span class="skill-number">03</span>
                        JavaScript
                    </div>

                    <div class="skill-card">
                        <span class="skill-number">04</span>
                        PHP
                    </div>

                    <div class="skill-card">
                        <span class="skill-number">05</span>
                        MySQL
                    </div>

                    <div class="skill-card">
                        <span class="skill-number">06</span>
                        Computer Troubleshooting
                    </div>

                </div>

            </div>
        </section>

        <!-- PROJECTS -->

        <section id="projects">
            <div class="container">

                <p class="section-label">
                    03 — MY WORK
                </p>

                <h2>Projects & Experiences</h2>

                <p class="section-description">
                    Some of the projects and ideas that represent
                    my learning journey and experiences in IT.
                </p>

                <div class="projects-grid">

                    <div class="project-card">

                        <p class="project-type">
                            Personal Project
                        </p>

                        <h3>Personal Portfolio</h3>

                        <p>
                            A personal website created to introduce
                            myself, showcase my skills, and share
                            my journey as an aspiring IT professional.
                        </p>

                    </div>

                    <div class="project-card">

                        <p class="project-type">
                            Academic Project
                        </p>

                        <h3>Barangay Document Request System</h3>

                        <p>
                            A web-based system designed to help manage
                            barangay document requests and identification
                            records in a more organized way.
                        </p>

                    </div>

                </div>

            </div>
        </section>

        <!-- CONTACT -->

        <section id="contact">
            <div class="container">

                <div class="contact-box">

                    <div>

                        <p class="section-label">
                            04 — LET'S CONNECT
                        </p>

                        <h2>I'd love to hear from you.</h2>

                        <p>
                            Thank you for visiting my portfolio!
                            Feel free to reach out for questions,
                            collaborations, or opportunities.
                        </p>

                        <div class="contact-email">
                            Email: casinnoren16@gmail.com
                        </div>

                    </div>

                    <a href="mailto:your-email@example.com"
                       class="contact-btn">
                        CONTACT ME:09351948826
                    </a>

                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER -->

    <footer>
        © 2026 NOREN CASIN. ALL RIGHTS RESERVED.
    </footer>

</body>
</html>