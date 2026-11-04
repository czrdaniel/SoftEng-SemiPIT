<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A personal profile website for Daniel.">
    <title>Daniel Cezar | Personal Profile</title>
    <style>
        :root {
            --ink: #19332f;
            --muted: #64736e;
            --accent: #df704f;
            --paper: #fbf8f1;
            --card: #fffefa;
            --line: #e9e4d9;
        }

        * { box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            margin: 0;
            background: var(--paper);
            color: var(--ink);
            font-family: "Segoe UI", Arial, sans-serif;
            line-height: 1.6;
        }

        a { color: inherit; }

        .site-header {
            width: min(1080px, calc(100% - 40px));
            margin: 0 auto;
            padding: 22px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .brand {
            font-weight: 800;
            font-size: 1.1rem;
            letter-spacing: .04em;
            text-decoration: none;
        }

        nav { display: flex; gap: 24px; }
        nav a { color: var(--muted); font-size: .94rem; text-decoration: none; }
        nav a:hover, nav a:focus-visible { color: var(--accent); }

        main { width: min(1080px, calc(100% - 40px)); margin: 0 auto; }

        .hero {
            min-height: 440px;
            padding: 56px clamp(24px, 7vw, 78px);
            display: grid;
            grid-template-columns: 1.3fr .7fr;
            align-items: center;
            gap: 44px;
            overflow: hidden;
            background: #e9efe7;
            border-radius: 28px;
        }

        .eyebrow {
            margin: 0 0 12px;
            color: var(--accent);
            font-size: .78rem;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        h1 {
            max-width: 620px;
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(2.8rem, 7vw, 5.3rem);
            font-weight: 500;
            letter-spacing: -.055em;
            line-height: 1.02;
        }

        .hero-copy { max-width: 540px; margin: 22px 0 26px; color: var(--muted); font-size: 1.08rem; }

        .button {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 999px;
            background: var(--ink);
            color: white;
            font-size: .92rem;
            font-weight: 700;
            text-decoration: none;
            transition: transform .2s ease, background .2s ease;
        }
        .button:hover { transform: translateY(-2px); background: var(--accent); }

        .portrait {
            width: min(100%, 270px);
            aspect-ratio: 1;
            justify-self: center;
            display: grid;
            place-items: center;
            border: 1px solid rgba(25, 51, 47, .12);
            border-radius: 50%;
            background: #f5d8c5;
            color: #855a47;
            text-align: center;
            box-shadow: 18px 18px 0 rgba(25, 51, 47, .08);
        }
        .portrait span { max-width: 150px; font-size: .9rem; font-weight: 700; }

        section { padding: 76px 0 0; }
        .section-heading { margin: 0 0 22px; font-family: Georgia, "Times New Roman", serif; font-size: 2rem; font-weight: 500; }
        .about-card, .project-card, .contact-card { background: var(--card); border: 1px solid var(--line); border-radius: 18px; }
        .about-card { max-width: 780px; padding: 28px 32px; color: var(--muted); }
        .about-card p { margin: 0; }

        .details { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-top: 18px; }
        .detail { padding: 18px; border-radius: 14px; background: #f1f2eb; }
        .detail strong { display: block; margin-bottom: 4px; color: var(--ink); }
        .detail span { color: var(--muted); font-size: .92rem; }

        .projects { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
        .project-card { min-height: 190px; padding: 22px; }
        .project-number { color: var(--accent); font-size: .8rem; font-weight: 800; letter-spacing: .12em; }
        .project-card h3 { margin: 12px 0 7px; font-family: Georgia, "Times New Roman", serif; font-size: 1.35rem; font-weight: 500; }
        .project-card p { margin: 0; color: var(--muted); font-size: .94rem; }

        .contact-card { padding: 28px 32px; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .contact-card p { margin: 0; color: var(--muted); }
        .contact-card .section-heading { margin-bottom: 6px; }

        footer { padding: 54px 0 24px; color: var(--muted); text-align: center; font-size: .88rem; }

        @media (max-width: 700px) {
            .site-header { align-items: flex-start; flex-direction: column; }
            nav { flex-wrap: wrap; gap: 14px 20px; }
            .hero { min-height: auto; grid-template-columns: 1fr; gap: 36px; padding-top: 48px; padding-bottom: 48px; }
            .portrait { width: 190px; grid-row: 1; }
            .details, .projects { grid-template-columns: 1fr; }
            section { padding-top: 56px; }
            .contact-card { align-items: flex-start; flex-direction: column; }
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after { transition-duration: .01ms !important; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <a class="brand" href="#home">Daniel Cezar</a>
        <nav aria-label="Main navigation">
            <a href="#about">About</a>
            <a href="#interests">Interests</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <main>
        <section class="hero" id="home" aria-labelledby="intro-title">
            <div>
                <p class="eyebrow">Hello, welcome to my page</p>
                <h1 id="intro-title">I’m Daniel Cezar.</h1>
                <p class="hero-copy">BSIT 3rd year student who lived my life to the fullest.</p>
                <a class="button" href="#about">About me</a>
        </section>

        <section id="about" aria-labelledby="about-title">
            <p class="eyebrow">A quick introduction</p>
            <h2 class="section-heading" id="about-title">About me</h2>
            <div class="about-card">
                <p>A BSIT Student and a son who wants my parents pround of me.</p>
            </div>
            <div class="details" id="interests">
                <div class="detail"><strong>Based in</strong><span>Cagayan De Oro City, Philippines</span></div>
                <div class="detail"><strong>Currently</strong><span>BSIT Student</span></div>
                <div class="detail"><strong>I enjoy</strong><span>Gaming, Learning New Things</span></div>
            </div>
        </section>

        <section id="projects" aria-labelledby="projects-title">
            <p class="eyebrow">Things I’ve working on</p>
            <h2 class="section-heading" id="projects-title">Projects &amp; highlights</h2>
            <div class="projects">
                <article class="project-card">
                    <span class="project-number">01 / PROJECT</span>
                    <h3>Final PIT (Software Engineering)</h3>
                    <p>This is a Group PIT Project, we're going to resolve problem about attendance monitoring of CSM department in USTP-CDO.</p>
                </article>
                <article class="project-card">
                    <span class="project-number">02 / PROJECT</span>
                    <h3>Final PIT (Technoprenuership)</h3>
                    <p>This is a Group PIT Project same as the 1st project that resolving problem about attendance monitoring of CSM department in USTP-CDO.</p>
                </article>
                <article class="project-card">
                    <span class="project-number">03 / PROJECT</span>
                    <h3>Final PIT (IOT Elective)</h3>
                    <p>This is also a Group PIT Project, currently something IOT-based project.</p>
                </article>
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-title">
            <div class="contact-card">
                <div>
                    <p class="eyebrow">Let’s connect</p>
                    <h2 class="section-heading" id="contact-title">Get in touch</h2>
                </div>
                <a class="button" href="mailto:your.email@example.com">danielcezar072405@example.com</a>
            </div>
        </section>
    </main>

    <footer>© 2026 Daniel Cezar · Software Engineering</footer>
</body>
</html>
