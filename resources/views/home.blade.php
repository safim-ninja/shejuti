<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rubaya Nasrin Shejuti | Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('ecology.png') }}" type="image/x-icon">
    <style>
        body {
            font-family: "Inter", sans-serif;
            background: #F8F9FA;
            color: #333;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 40px;
        }

        .hero {
            background: linear-gradient(135deg, #22814a, #2cae71);
            color: white;
            padding: 120px 0;
        }

        .profile-img {
            width: 260px;
            border-radius: 50%;
            border: 6px solid white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* Align featured card images */
        .featured-img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            border-radius: 8px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-title {
            font-size: 42px;
            font-weight: 700;
        }

        .hero-sub {
            font-size: 20px;
            opacity: .9;
        }

        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.07);
            transition: .3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .expertise-card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .timeline {
            border-left: 3px solid #22814a;
            padding-left: 30px;
        }

        .timeline-item {
            margin-bottom: 30px;
        }

        .timeline-item span {
            color: #22814a;
            font-weight: 600;
        }

        .project-card {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
        }

        .footer {
            background: linear-gradient(135deg, #22814a, #2cae71);

            color: white;
            padding: 30px 0;
        }
    </style>

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold">
                Rubaya Nasrin Shejuti
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#expertise">Expertise</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Impact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->

    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center">
                    <img src="{{ asset('assets/images/1672715021102.jpeg') }}" class="profile-img">
                </div>

                <div class="col-lg-7">
                    <h1 class="hero-title">
                        Rubaya Nasrin Shejuti
                    </h1>
                    <p class="hero-sub">
                        Development Professional • Climate Change • Sustainability
                    </p>
                    <p>
                        Program Officer at Oxfam Bangladesh and Adjunct Faculty at University of South Asia.
                        Working on climate justice, environmental sustainability and disaster resilience.
                    </p>
                    <a href="https://www.linkedin.com/in/rubaya-nasrin-shejuti-66713a6b"
                        class="btn btn-light btn-lg mt-3" target="_blank">
                        LinkedIn Profile </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED SECTION -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-4">Featured</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="feature-card h-100">
                        <img src="{{ asset('featured-1662609722999.jpeg') }}" alt="Featured in Newspaper"
                            class="featured-img mb-3">
                        <h6>Featured at Daily Ittefaq News Paper 18.12.2019</h6>
                        <p class="mb-0">Featured for environmental and climate change work in Bangladesh.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card h-100">
                        <img src="{{ asset('featured-1696918920458.jpeg') }}" alt="Memories I will cherish forever"
                            class="featured-img mb-3">
                        <h6>Memories I will cherish forever</h6>
                        <p class="mb-0">Special moments from fieldwork and collaborations in climate action.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-card h-100">
                        <img src="{{ asset('featured-1661013337186.jpeg') }}" alt="UPG Sustainability Leader"
                            class="featured-img mb-3">
                        <h6>UPG Sustainability Leader</h6>
                        <p class="mb-0">Recognized for leadership in project management, sustainability, and climate
                            change education.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED -->
    <section class="section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="feature-card">
                        <h4>Climate Research</h4>
                        <p>Environmental research and climate adaptation strategies.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h4>Development Programs</h4>
                        <p>Working with NGOs and institutions on sustainability initiatives.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h4>Academic Teaching</h4>
                        <p>Teaching environmental science and sustainability courses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section bg-light">
        <div class="container">
            <h2 class="section-title text-center">About</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p>
                        I am a development professional focusing on climate change adaptation,
                        sustainability and environmental research. My work focuses on building
                        climate resilience and supporting sustainable development initiatives.
                    </p>
                    <p>
                        My academic and professional journey combines environmental science,
                        climate modeling and development practice.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERTISE -->
    <section id="expertise" class="section">
        <div class="container">
            <h2 class="section-title text-center">Areas of Expertise</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="expertise-card">
                        Climate Change Adaptation
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="expertise-card">
                        Environmental Research
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="expertise-card">
                        Disaster Risk Management
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="expertise-card">
                        GIS & Remote Sensing
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERIENCE -->
    <section id="experience" class="section bg-light">
        <div class="container">
            <h2 class="section-title text-center">Professional Experience</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <h5>Program Officer</h5>
                    <span>Oxfam Bangladesh | 2024 – Present</span>
                    <p>Working on Just Energy Transition, Climate Justice and Natural Resource Rights.</p>
                </div>
                <div class="timeline-item">
                    <h5>Adjunct Faculty</h5>
                    <span>University of South Asia | 2022 – Present</span>
                </div>
                <div class="timeline-item">
                    <h5>Green Response Officer</h5>
                    <span>Bangladesh Red Crescent Society | 2023 – 2024</span>
                </div>
                <div class="timeline-item">
                    <h5>Assistant Manager</h5>
                    <span>Grameen Shakti | 2022 – 2023</span>
                </div>
                <div class="timeline-item">
                    <h5>Assistant Director</h5>
                    <span>TMSS | 2020 – 2022</span>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title text-center">Impact & Projects</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="project-card">
                        <h5>Climate Justice Programs</h5>
                        <p>
                            Working with Oxfam Bangladesh to support climate justice and
                            natural resource rights initiatives.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-card">
                        <h5>Environmental Capacity Building</h5>
                        <p>
                            Organizing environmental training and capacity building
                            programs for stakeholders and institutions.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-card">
                        <h5>Sustainability Research</h5>
                        <p>
                            Research initiatives focusing on environmental sustainability
                            and climate resilience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AWARDS -->
    <section class="section bg-light">
        <div class="container">
            <h2 class="section-title text-center">Leadership & Awards</h2>
            <ul class="list-group col-lg-6 mx-auto">
                <li class="list-group-item">Duke of Edinburgh Gold Award</li>
                <li class="list-group-item">UPG Sustainability Leader 2022</li>
                <li class="list-group-item">World Food Forum Mentor (2023–2024)</li>
                <li class="list-group-item">YVC Leader 2025</li>
                <li class="list-group-item">Asian African Youth Leadership Festival Alumni</li>
            </ul>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section">
        <div class="container text-center">
            <h2 class="section-title">Contact</h2>
            <p>Dhaka, Bangladesh</p>
            <a href="https://www.linkedin.com/in/rubaya-nasrin-shejuti-66713a6b" class="btn btn-lg"
                style="background: linear-gradient(135deg, #44b373, #2cae71); color: white;" target="_blank">
                LinkedIn Profile
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer text-center">
        <div class="container">
            <p class="mb-0">
                © 2026 Rubaya Nasrin Shejuti
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
