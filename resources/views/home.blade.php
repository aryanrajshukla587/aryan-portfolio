<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aryan Shukla | PHP & Laravel Developer</title>

    <meta name="description"
          content="Aryan Shukla - PHP & Laravel Developer building modern, scalable and database-driven web applications.">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
</head>


<body class="bg-slate-950 text-white font-sans">


    <!-- ========================================================= -->
    <!-- NAVBAR -->
    <!-- ========================================================= -->

    <header class="fixed top-0 left-0 right-0 z-50 bg-slate-950/90 backdrop-blur border-b border-slate-800">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <nav class="h-20 flex items-center justify-between">

                <!-- Logo -->
                <a href="#home"
                   class="text-2xl font-extrabold tracking-tight">
                    Aryan<span class="text-cyan-400">.</span>
                </a>


                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-7 text-sm">

                    <a href="#home"
                       class="text-cyan-400 hover:text-cyan-300 transition">
                        Home
                    </a>

                    <a href="#about"
                       class="text-slate-300 hover:text-white transition">
                        About
                    </a>

                    <a href="#skills"
                       class="text-slate-300 hover:text-white transition">
                        Skills
                    </a>

                    <a href="#experience"
                       class="text-slate-300 hover:text-white transition">
                        Experience
                    </a>

                    <a href="#certifications"
                       class="text-slate-300 hover:text-white transition">
                        Certifications
                    </a>

                    <a href="#projects"
                       class="text-slate-300 hover:text-white transition">
                        Projects
                    </a>

                    <a href="#contact"
                       class="text-slate-300 hover:text-white transition">
                        Contact
                    </a>

                </div>


                <!-- Resume Button -->
                <a href="#contact"
                   class="hidden sm:inline-flex items-center px-5 py-2.5 rounded-lg
                          border border-cyan-400 text-cyan-400
                          hover:bg-cyan-400 hover:text-slate-950
                          font-semibold text-sm transition">
                    Resume
                </a>

            </nav>

        </div>

    </header>



    <!-- ========================================================= -->
    <!-- MAIN -->
    <!-- ========================================================= -->

    <main>


        <!-- ===================================================== -->
        <!-- HERO -->
        <!-- ===================================================== -->

        <section id="home"
                 class="min-h-screen flex items-center pt-20">

            <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">

                <div class="grid lg:grid-cols-2 gap-16 items-center">


                    <!-- Hero Content -->
                    <div>

                        <div class="inline-flex items-center gap-2 px-4 py-2 mb-7
                                    rounded-full border border-slate-700
                                    bg-slate-900 text-sm text-slate-300">

                            <span class="w-2 h-2 rounded-full bg-green-400"></span>

                            Available for opportunities

                        </div>


                        <p class="text-cyan-400 font-semibold text-lg mb-4">
                            Hello, I'm
                        </p>


                        <h1 class="text-5xl sm:text-6xl lg:text-7xl
                                   font-extrabold tracking-tight leading-tight">

                            Aryan
                            <span class="text-cyan-400">
                                Shukla
                            </span>

                        </h1>


                        <h2 class="mt-5 text-2xl sm:text-3xl
                                   font-semibold text-slate-300">

                            PHP & Laravel Developer

                        </h2>


                        <p class="mt-7 max-w-2xl text-lg
                                  leading-8 text-slate-400">

                            I build modern, scalable and database-driven
                            web applications using PHP, Laravel, MySQL
                            and modern web technologies.

                        </p>


                        <!-- Buttons -->
                        <div class="mt-10 flex flex-wrap gap-4">

                            <a href="#projects"
                               class="inline-flex items-center justify-center
                                      px-7 py-3.5 rounded-lg
                                      bg-cyan-400 text-slate-950
                                      font-bold
                                      hover:bg-cyan-300
                                      transition">

                                View Projects

                                <span class="ml-2">
                                    →
                                </span>

                            </a>


                            <a href="#contact"
                               class="inline-flex items-center justify-center
                                      px-7 py-3.5 rounded-lg
                                      border border-slate-700
                                      text-white font-semibold
                                      hover:border-cyan-400
                                      hover:text-cyan-400
                                      transition">

                                Contact Me

                            </a>

                        </div>


                        <!-- Social Links -->
                        <div class="mt-10 flex items-center gap-6">

                            <a href="#"
                               class="text-slate-400 hover:text-cyan-400 transition">
                                LinkedIn
                            </a>

                            <a href="#"
                               class="text-slate-400 hover:text-white transition">
                                GitHub
                            </a>

                        </div>

                    </div>



                    <!-- Hero Visual -->
                    <div class="hidden lg:flex justify-center">

                        <div class="relative w-80 h-80">


                            <!-- Glow -->
                            <div class="absolute inset-0 rounded-full
                                        bg-cyan-400/10 blur-3xl">
                            </div>


                            <!-- Circle -->
                            <div class="relative w-full h-full
                                        rounded-full
                                        border border-cyan-400/30
                                        bg-slate-900
                                        flex items-center justify-center">

                                <div class="text-center">

                                    <div class="text-7xl font-extrabold
                                                text-cyan-400">

                                        &lt;/&gt;

                                    </div>

                                    <p class="mt-4 text-slate-400">
                                        Build • Code • Deploy
                                    </p>

                                </div>

                            </div>


                            <!-- Laravel Card -->
                            <div class="absolute -top-5 -right-8
                                        px-5 py-3 rounded-xl
                                        bg-slate-900
                                        border border-slate-700
                                        shadow-xl">

                                <p class="text-sm text-slate-400">
                                    Backend
                                </p>

                                <p class="font-bold text-cyan-400">
                                    Laravel
                                </p>

                            </div>


                            <!-- MySQL Card -->
                            <div class="absolute -bottom-5 -left-8
                                        px-5 py-3 rounded-xl
                                        bg-slate-900
                                        border border-slate-700
                                        shadow-xl">

                                <p class="text-sm text-slate-400">
                                    Database
                                </p>

                                <p class="font-bold text-cyan-400">
                                    MySQL
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- ========================================================= -->
        <!-- ABOUT -->
        <!-- ========================================================= -->

        <section id="about"
                 class="py-24 border-t border-slate-800">

            <div class="max-w-7xl mx-auto px-6 lg:px-8">

                <div class="grid lg:grid-cols-2 gap-16 items-center">


                    <!-- Left -->
                    <div>

                        <p class="text-cyan-400 font-semibold mb-3">
                            About Me
                        </p>

                        <h2 class="text-4xl sm:text-5xl font-extrabold">

                            Turning ideas into

                            <span class="text-cyan-400">
                                web applications.
                            </span>

                        </h2>

                    </div>


                    <!-- Right -->
                    <div class="text-slate-400 leading-8 text-lg">

                        <p>
                            I'm Aryan Shukla, a B.Tech Computer Science &
                            Engineering graduate and PHP & Laravel Developer
                            focused on building modern and reliable web
                            applications.
                        </p>

                        <p class="mt-6">
                            I enjoy developing backend systems, database-driven
                            applications, admin dashboards, authentication
                            systems and business management solutions using
                            Laravel and MySQL.
                        </p>

                        <p class="mt-6">
                            My approach is focused on writing clean code,
                            creating practical solutions and building
                            applications that are easy to maintain and scale.
                        </p>

                    </div>

                </div>


                <!-- Stats -->
                <div class="grid sm:grid-cols-3 gap-6 mt-16">


                    <div class="p-6 rounded-2xl bg-slate-900
                                border border-slate-800">

                        <div class="text-3xl font-extrabold text-cyan-400">
                            Laravel
                        </div>

                        <p class="mt-2 text-slate-400">
                            Backend Development
                        </p>

                    </div>


                    <div class="p-6 rounded-2xl bg-slate-900
                                border border-slate-800">

                        <div class="text-3xl font-extrabold text-cyan-400">
                            MySQL
                        </div>

                        <p class="mt-2 text-slate-400">
                            Database Management
                        </p>

                    </div>


                    <div class="p-6 rounded-2xl bg-slate-900
                                border border-slate-800">

                        <div class="text-3xl font-extrabold text-cyan-400">
                            REST API
                        </div>

                        <p class="mt-2 text-slate-400">
                            API Development
                        </p>

                    </div>

                </div>

            </div>

        </section>



        <!-- ========================================================= -->
        <!-- SKILLS -->
        <!-- ========================================================= -->

        <section id="skills"
                 class="py-24 border-t border-slate-800 bg-slate-950">

            <div class="max-w-7xl mx-auto px-6 lg:px-8">


                <!-- Heading -->
                <div class="max-w-2xl">

                    <p class="text-sm font-semibold tracking-[0.25em]
                              uppercase text-cyan-400">

                        Skills

                    </p>

                    <h2 class="mt-4 text-3xl md:text-4xl font-bold text-white">

                        Technologies I Work With

                    </h2>

                    <p class="mt-4 text-slate-400 leading-7">

                        A practical stack focused on Laravel, backend development,
                        database-driven applications and modern web technologies.

                    </p>

                </div>



                <!-- ================================================= -->
                <!-- FEATURED SKILLS -->
                <!-- ================================================= -->

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-14">


                    <!-- PHP -->
                    <div class="skill-main-card">

                        <div class="main-logo php-logo">
                            <span>PHP</span>
                        </div>

                        <h3>PHP</h3>

                        <p>Backend Development</p>

                    </div>


                    <!-- Laravel -->
                    <div class="skill-main-card">

                        <div class="main-logo laravel-logo">

                            <svg viewBox="0 0 64 64" fill="none">

                                <path
                                    d="M32 5C19 5 9 14 9 27c0 8 4 15 11 19v10c0 2 2 3 4 2l8-5 8 5c2 1 4 0 4-2V46c7-4 11-11 11-19C55 14 45 5 32 5Z"
                                    fill="currentColor"
                                />

                                <path
                                    d="M25 22h14M22 31h20M27 40h10"
                                    stroke="white"
                                    stroke-width="4"
                                    stroke-linecap="round"
                                />

                            </svg>

                        </div>

                        <h3>Laravel</h3>

                        <p>PHP Framework</p>

                    </div>


                    <!-- MySQL -->
                    <div class="skill-main-card">

                        <div class="main-logo mysql-logo">

                            <svg viewBox="0 0 64 64">

                                <path
                                    d="M11 42c7-7 15-7 22-3 6 3 12 4 20-1"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="5"
                                    stroke-linecap="round"
                                />

                                <text x="10"
                                      y="31"
                                      font-size="17"
                                      font-weight="700"
                                      fill="currentColor">

                                    SQL

                                </text>

                            </svg>

                        </div>

                        <h3>MySQL</h3>

                        <p>Database</p>

                    </div>


                    <!-- JavaScript -->
                    <div class="skill-main-card">

                        <div class="main-logo js-logo">
                            <span>JS</span>
                        </div>

                        <h3>JavaScript</h3>

                        <p>Frontend Development</p>

                    </div>


                    <!-- HTML & CSS -->
                    <div class="skill-main-card">

                        <div class="main-logo htmlcss-logo">

                            <div class="html-mini">
                                5
                            </div>

                            <div class="css-mini">
                                3
                            </div>

                        </div>

                        <h3>HTML & CSS</h3>

                        <p>Web Interface</p>

                    </div>


                    <!-- Bootstrap -->
                    <div class="skill-main-card">

                        <div class="main-logo bootstrap-logo">
                            <span>B</span>
                        </div>

                        <h3>Bootstrap</h3>

                        <p>UI Framework</p>

                    </div>


                    <!-- Git & GitHub -->
                    <div class="skill-main-card">

                        <div class="main-logo gitgithub-logo">

                            <svg viewBox="0 0 64 64">

                                <path
                                    d="M32 7 55 20v24L32 57 9 44V20L32 7Z"
                                    fill="currentColor"
                                />

                                <path
                                    d="M22 23l10 6 10-6M32 29v15"
                                    stroke="white"
                                    stroke-width="4"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                            </svg>

                        </div>

                        <h3>Git & GitHub</h3>

                        <p>Version Control</p>

                    </div>


                    <!-- REST APIs -->
                    <div class="skill-main-card">

                        <div class="main-logo api-logo">

                            <svg viewBox="0 0 64 64">

                                <circle cx="16"
                                        cy="32"
                                        r="7"
                                        fill="currentColor"/>

                                <circle cx="48"
                                        cy="16"
                                        r="7"
                                        fill="currentColor"/>

                                <circle cx="48"
                                        cy="48"
                                        r="7"
                                        fill="currentColor"/>

                                <path
                                    d="M22 29 41 19M22 35l19 10"
                                    stroke="currentColor"
                                    stroke-width="5"
                                    stroke-linecap="round"
                                />

                            </svg>

                        </div>

                        <h3>REST APIs</h3>

                        <p>API Development</p>

                    </div>

                </div>



                <!-- ================================================= -->
                <!-- CATEGORY SKILLS -->
                <!-- ================================================= -->

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-20">


                    <!-- LANGUAGES -->
                    <div class="category-card">

                        <div class="category-header">

                            <div class="category-number">
                                01
                            </div>

                            <div>

                                <h3>Languages</h3>

                                <p>
                                    Core Technologies
                                </p>

                            </div>

                        </div>


                        <div class="skill-grid">


                            <!-- PHP -->
                            <div class="mini-skill">

                                <div class="tech-icon php-icon">
                                    <span>PHP</span>
                                </div>

                                <span>PHP</span>

                            </div>


                            <!-- JavaScript -->
                            <div class="mini-skill">

                                <div class="tech-icon js-icon">
                                    <span>JS</span>
                                </div>

                                <span>JavaScript</span>

                            </div>


                            <!-- HTML -->
                            <div class="mini-skill">

                                <div class="tech-icon html-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M9 6h46l-4 48-19 6-19-6L9 6Z"
                                            fill="currentColor"
                                        />

                                        <path
                                            d="M19 17h27l-1 6H26l1 6h18l-2 20-11 3-11-3-1-10h7l1 5 4 1 4-1 1-9H20l-1-18Z"
                                            fill="white"
                                        />

                                    </svg>

                                </div>

                                <span>HTML5</span>

                            </div>


                            <!-- CSS -->
                            <div class="mini-skill">

                                <div class="tech-icon css-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M9 6h46l-4 48-19 6-19-6L9 6Z"
                                            fill="currentColor"
                                        />

                                        <path
                                            d="M20 17h25l-1 6H27l1 5h16l-2 18-10 3-10-3-1-9h7l1 4 3 1 3-1 1-7H21l-2-17Z"
                                            fill="white"
                                        />

                                    </svg>

                                </div>

                                <span>CSS3</span>

                            </div>

                        </div>

                    </div>



                    <!-- FRONTEND -->
                    <div class="category-card">

                        <div class="category-header">

                            <div class="category-number">
                                02
                            </div>

                            <div>

                                <h3>Frontend</h3>

                                <p>
                                    UI & Interface
                                </p>

                            </div>

                        </div>


                        <div class="skill-grid">


                            <!-- Blade -->
                            <div class="mini-skill">

                                <div class="tech-icon blade-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M32 7 55 32 32 57 9 32 32 7Z"
                                            fill="currentColor"
                                        />

                                        <path
                                            d="M21 32h22M32 21v22"
                                            stroke="white"
                                            stroke-width="4"
                                            stroke-linecap="round"
                                        />

                                    </svg>

                                </div>

                                <span>Blade</span>

                            </div>


                            <!-- Tailwind -->
                            <div class="mini-skill">

                                <div class="tech-icon tailwind-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M8 35c6-12 14-18 24-18 8 0 13 3 17 8-6-2-11-1-15 3 6-1 11 1 15 6-6 12-14 18-24 18-8 0-13-3-17-8 6 2 11 1 15-3-6 1-11-1-15-6Z"
                                            fill="currentColor"
                                        />

                                    </svg>

                                </div>

                                <span>Tailwind CSS</span>

                            </div>


                            <!-- Bootstrap -->
                            <div class="mini-skill">

                                <div class="tech-icon bootstrap-icon">
                                    <span>B</span>
                                </div>

                                <span>Bootstrap</span>

                            </div>


                            <!-- HTML -->
                            <div class="mini-skill">

                                <div class="tech-icon html-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M9 6h46l-4 48-19 6-19-6L9 6Z"
                                            fill="currentColor"
                                        />

                                        <path
                                            d="M19 17h27l-1 6H26l1 6h18l-2 20-11 3-11-3-1-10h7l1 5 4 1 4-1 1-9H20l-1-18Z"
                                            fill="white"
                                        />

                                    </svg>

                                </div>

                                <span>HTML5</span>

                            </div>

                        </div>

                    </div>



                    <!-- BACKEND -->
                    <div class="category-card">

                        <div class="category-header">

                            <div class="category-number">
                                03
                            </div>

                            <div>

                                <h3>Backend</h3>

                                <p>
                                    Server & Database
                                </p>

                            </div>

                        </div>


                        <div class="skill-grid">


                            <!-- Laravel -->
                            <div class="mini-skill">

                                <div class="tech-icon laravel-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M32 5C19 5 9 14 9 27c0 8 4 15 11 19v10c0 2 2 3 4 2l8-5 8 5c2 1 4 0 4-2V46c7-4 11-11 11-19C55 14 45 5 32 5Z"
                                            fill="currentColor"
                                        />

                                        <path
                                            d="M25 22h14M22 31h20M27 40h10"
                                            stroke="white"
                                            stroke-width="4"
                                            stroke-linecap="round"
                                        />

                                    </svg>

                                </div>

                                <span>Laravel</span>

                            </div>


                            <!-- MySQL -->
                            <div class="mini-skill">

                                <div class="tech-icon mysql-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M11 42c7-7 15-7 22-3 6 3 12 4 20-1"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="5"
                                            stroke-linecap="round"
                                        />

                                        <text
                                            x="11"
                                            y="31"
                                            font-size="16"
                                            font-weight="700"
                                            fill="currentColor">
                                            SQL
                                        </text>

                                    </svg>

                                </div>

                                <span>MySQL</span>

                            </div>


                            <!-- Eloquent -->
                            <div class="mini-skill">

                                <div class="tech-icon eloquent-icon">

                                    <svg viewBox="0 0 64 64">

                                        <ellipse
                                            cx="32"
                                            cy="18"
                                            rx="20"
                                            ry="8"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="5"
                                        />

                                        <path
                                            d="M12 18v12c0 5 9 8 20 8s20-3 20-8V18"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="5"
                                        />

                                        <path
                                            d="M12 30v12c0 5 9 8 20 8s20-3 20-8V30"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="5"
                                        />

                                    </svg>

                                </div>

                                <span>Eloquent ORM</span>

                            </div>


                            <!-- Sanctum -->
                            <div class="mini-skill">

                                <div class="tech-icon sanctum-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M32 7 52 15v16c0 13-8 22-20 27C20 53 12 44 12 31V15L32 7Z"
                                            fill="currentColor"
                                        />

                                        <path
                                            d="M25 32l5 5 10-12"
                                            fill="none"
                                            stroke="white"
                                            stroke-width="5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />

                                    </svg>

                                </div>

                                <span>Sanctum</span>

                            </div>

                        </div>

                    </div>



                    <!-- TOOLS -->
                    <div class="category-card">

                        <div class="category-header">

                            <div class="category-number">
                                04
                            </div>

                            <div>

                                <h3>Tools</h3>

                                <p>
                                    Development Tools
                                </p>

                            </div>

                        </div>


                        <div class="skill-grid">


                            <!-- Git -->
                            <div class="mini-skill">

                                <div class="tech-icon git-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M32 6 57 31 32 56 7 31 32 6Z"
                                            fill="currentColor"
                                        />

                                        <circle cx="25"
                                                cy="25"
                                                r="4"
                                                fill="white"/>

                                        <circle cx="39"
                                                cy="39"
                                                r="4"
                                                fill="white"/>

                                        <path
                                            d="M25 29v10h14V25"
                                            fill="none"
                                            stroke="white"
                                            stroke-width="4"
                                        />

                                    </svg>

                                </div>

                                <span>Git</span>

                            </div>


                            <!-- GitHub -->
                            <div class="mini-skill">

                                <div class="tech-icon github-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M32 7a25 25 0 0 0-8 48c1 0 2-1 2-2v-7c-9 2-11-4-11-4-2-4-4-5-4-5-3-2 0-2 0-2 4 0 6 4 6 4 3 5 7 3 9 2 0-2 1-3 2-4-7-1-14-3-14-15 0-3 1-6 3-8 0-1-1-4 0-8 0 0 3-1 9 3a25 25 0 0 1 16 0c6-4 9-3 9-3 1 4 0 7 0 8 2 2 3 5 3 8 0 12-7 14-14 15 1 1 2 3 2 6v9c0 1 1 2 2 2A25 25 0 0 0 32 7Z"
                                            fill="currentColor"
                                        />

                                    </svg>

                                </div>

                                <span>GitHub</span>

                            </div>


                            <!-- VS Code -->
                            <div class="mini-skill">

                                <div class="tech-icon vscode-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M47 8 29 25 18 16 9 22l14 10L9 42l9 6 11-9 18 17 8-4V12l-8-4Z"
                                            fill="currentColor"
                                        />

                                        <path
                                            d="M29 25 23 32l6 7 13 7V18L29 25Z"
                                            fill="white"
                                            opacity=".8"
                                        />

                                    </svg>

                                </div>

                                <span>VS Code</span>

                            </div>


                            <!-- Node -->
                            <div class="mini-skill">

                                <div class="tech-icon node-icon">

                                    <svg viewBox="0 0 64 64">

                                        <path
                                            d="M32 5 55 18v28L32 59 9 46V18L32 5Z"
                                            fill="currentColor"
                                        />

                                        <text
                                            x="18"
                                            y="39"
                                            font-size="17"
                                            font-weight="700"
                                            fill="white">
                                            JS
                                        </text>

                                    </svg>

                                </div>

                                <span>Node.js</span>

                            </div>


                            <!-- npm -->
                            <div class="mini-skill">

                                <div class="tech-icon npm-icon">
                                    <span>npm</span>
                                </div>

                                <span>npm</span>

                            </div>


                            <!-- Postman -->
                            <div class="mini-skill">

                                <div class="tech-icon postman-icon">

                                    <svg viewBox="0 0 64 64">

                                        <circle
                                            cx="32"
                                            cy="32"
                                            r="22"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="6"
                                        />

                                        <path
                                            d="M22 38 39 21M31 38l8-8"
                                            stroke="currentColor"
                                            stroke-width="5"
                                            stroke-linecap="round"
                                        />

                                    </svg>

                                </div>

                                <span>Postman</span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- ========================================================= -->
        <!-- EXPERIENCE -->
        <!-- ========================================================= -->

        <section id="experience"
                 class="py-24 border-t border-slate-800">

            <div class="max-w-7xl mx-auto px-6 lg:px-8">


                <!-- Heading -->
                <div class="max-w-2xl">

                    <p class="text-sm font-semibold tracking-[0.25em]
                              uppercase text-cyan-400">

                        Experience

                    </p>

                    <h2 class="mt-4 text-3xl md:text-4xl font-bold">

                        My Development Journey

                    </h2>

                    <p class="mt-4 text-slate-400 leading-7">

                        Experience and practical work focused on PHP,
                        Laravel, backend systems and database-driven
                        applications.

                    </p>

                </div>



                <!-- Timeline -->
                <div class="relative mt-16">


                    <!-- Vertical Line -->
                    <div class="absolute left-3 top-0 bottom-0
                                w-px bg-slate-800
                                md:left-1/2">
                    </div>


                    <!-- Experience Item -->
                    <div class="relative grid md:grid-cols-2 gap-8 mb-14">


                        <!-- Left -->
                        <div class="md:text-right md:pr-12">

                            <p class="text-cyan-400 font-semibold">
                                2025 – Present
                            </p>

                            <p class="mt-2 text-sm text-slate-500">
                                Practical Development
                            </p>

                        </div>


                        <!-- Dot -->
                        <div class="absolute left-0 md:left-1/2
                                    md:-translate-x-1/2
                                    top-1 w-7 h-7
                                    rounded-full
                                    bg-slate-950
                                    border-2 border-cyan-400
                                    flex items-center justify-center">

                            <div class="w-2 h-2 rounded-full bg-cyan-400">
                            </div>

                        </div>


                        <!-- Right -->
                        <div class="pl-12 md:pl-12">

                            <div class="experience-card">

                                <p class="text-sm text-cyan-400 font-semibold">
                                    PHP / Laravel Development
                                </p>

                                <h3 class="mt-2 text-xl font-bold text-white">
                                    Web Application Development
                                </h3>

                                <p class="mt-4 text-slate-400 leading-7">

                                    Developing database-driven web applications
                                    using PHP and Laravel, including CRUD
                                    modules, authentication, dashboards,
                                    database relationships, reports and
                                    REST APIs.

                                </p>


                                <div class="flex flex-wrap gap-2 mt-5">

                                    <span class="experience-tag">
                                        PHP
                                    </span>

                                    <span class="experience-tag">
                                        Laravel
                                    </span>

                                    <span class="experience-tag">
                                        MySQL
                                    </span>

                                    <span class="experience-tag">
                                        REST API
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-- Experience Item -->
                    <div class="relative grid md:grid-cols-2 gap-8 mb-14">


                        <!-- Left -->
                        <div class="md:col-start-2 md:pl-12">

                            <p class="text-cyan-400 font-semibold">
                                2024 – 2025
                            </p>

                            <p class="mt-2 text-sm text-slate-500">
                                Project Development
                            </p>

                        </div>


                        <!-- Dot -->
                        <div class="absolute left-0 md:left-1/2
                                    md:-translate-x-1/2
                                    top-1 w-7 h-7
                                    rounded-full
                                    bg-slate-950
                                    border-2 border-cyan-400
                                    flex items-center justify-center">

                            <div class="w-2 h-2 rounded-full bg-cyan-400">
                            </div>

                        </div>


                        <!-- Content -->
                        <div class="pl-12 md:col-start-1 md:row-start-1
                                    md:pr-12 md:text-right">

                            <div class="experience-card">

                                <p class="text-sm text-cyan-400 font-semibold">
                                    Full Stack Web Projects
                                </p>

                                <h3 class="mt-2 text-xl font-bold text-white">
                                    Laravel Application Projects
                                </h3>

                                <p class="mt-4 text-slate-400 leading-7">

                                    Built practical projects involving admin
                                    dashboards, business management systems,
                                    property management, e-commerce workflows,
                                    billing and API-based applications.

                                </p>


                                <div class="flex flex-wrap gap-2 mt-5 md:justify-end">

                                    <span class="experience-tag">
                                        MVC
                                    </span>

                                    <span class="experience-tag">
                                        Eloquent
                                    </span>

                                    <span class="experience-tag">
                                        Blade
                                    </span>

                                    <span class="experience-tag">
                                        Bootstrap
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-- Education / Beginning -->
                    <div class="relative grid md:grid-cols-2 gap-8">


                        <div class="md:text-right md:pr-12">

                            <p class="text-cyan-400 font-semibold">
                                2022 – 2026
                            </p>

                            <p class="mt-2 text-sm text-slate-500">
                                Education
                            </p>

                        </div>


                        <!-- Dot -->
                        <div class="absolute left-0 md:left-1/2
                                    md:-translate-x-1/2
                                    top-1 w-7 h-7
                                    rounded-full
                                    bg-slate-950
                                    border-2 border-cyan-400
                                    flex items-center justify-center">

                            <div class="w-2 h-2 rounded-full bg-cyan-400">
                            </div>

                        </div>


                        <div class="pl-12 md:pl-12">

                            <div class="experience-card">

                                <p class="text-sm text-cyan-400 font-semibold">
                                    B.Tech Computer Science & Engineering
                                </p>

                                <h3 class="mt-2 text-xl font-bold text-white">
                                    United College of Engineering and Research
                                </h3>

                                <p class="mt-4 text-slate-400 leading-7">

                                    Developed a strong foundation in software
                                    engineering, web development, databases,
                                    programming and application development.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- ========================================================= -->
        <!-- CERTIFICATIONS -->
        <!-- ========================================================= -->

        <section id="certifications"
                 class="py-24 border-t border-slate-800 bg-slate-950">

            <div class="max-w-7xl mx-auto px-6 lg:px-8">


                <!-- Heading -->
                <div class="max-w-2xl">

                    <p class="text-sm font-semibold tracking-[0.25em]
                              uppercase text-cyan-400">

                        Certifications

                    </p>

                    <h2 class="mt-4 text-3xl md:text-4xl font-bold">

                        Learning & Certifications

                    </h2>

                    <p class="mt-4 text-slate-400 leading-7">

                        Certifications, courses and technical learning
                        that support my development journey.

                    </p>

                </div>



                <!-- Certification Cards -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-14">


                    <!-- Certification 1 -->
                    <div class="cert-card">

                        <div class="cert-icon">

                            <svg viewBox="0 0 64 64">

                                <path
                                    d="M32 6 53 14v17c0 13-8 22-21 27C19 53 11 44 11 31V14L32 6Z"
                                    fill="currentColor"
                                />

                                <path
                                    d="m22 32 7 7 14-16"
                                    fill="none"
                                    stroke="white"
                                    stroke-width="5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                            </svg>

                        </div>


                        <div class="mt-6">

                            <p class="text-xs uppercase tracking-wider
                                      text-cyan-400 font-semibold">

                                Certificate

                            </p>

                            <h3 class="mt-2 text-xl font-bold">

                                PHP & Laravel Development

                            </h3>

                            <p class="mt-3 text-slate-400 text-sm leading-6">

                                Add your certification provider,
                                course name and certificate details here.

                            </p>

                        </div>


                        <div class="mt-6 pt-5 border-t border-slate-800">

                            <span class="text-sm text-slate-500">
                                Certificate Details
                            </span>

                        </div>

                    </div>



                    <!-- Certification 2 -->
                    <div class="cert-card">

                        <div class="cert-icon">

                            <svg viewBox="0 0 64 64">

                                <circle
                                    cx="32"
                                    cy="32"
                                    r="23"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="5"
                                />

                                <path
                                    d="M20 32h24M32 20v24"
                                    stroke="currentColor"
                                    stroke-width="5"
                                    stroke-linecap="round"
                                />

                            </svg>

                        </div>


                        <div class="mt-6">

                            <p class="text-xs uppercase tracking-wider
                                      text-cyan-400 font-semibold">

                                Course

                            </p>

                            <h3 class="mt-2 text-xl font-bold">

                                Web Development

                            </h3>

                            <p class="mt-3 text-slate-400 text-sm leading-6">

                                Add your web development certification,
                                platform or training institute here.

                            </p>

                        </div>


                        <div class="mt-6 pt-5 border-t border-slate-800">

                            <span class="text-sm text-slate-500">
                                Certificate Details
                            </span>

                        </div>

                    </div>



                    <!-- Certification 3 -->
                    <div class="cert-card">

                        <div class="cert-icon">

                            <svg viewBox="0 0 64 64">

                                <rect
                                    x="10"
                                    y="12"
                                    width="44"
                                    height="40"
                                    rx="6"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="5"
                                />

                                <path
                                    d="M20 25h24M20 34h18M20 43h12"
                                    stroke="currentColor"
                                    stroke-width="4"
                                    stroke-linecap="round"
                                />

                            </svg>

                        </div>


                        <div class="mt-6">

                            <p class="text-xs uppercase tracking-wider
                                      text-cyan-400 font-semibold">

                                Learning

                            </p>

                            <h3 class="mt-2 text-xl font-bold">

                                Backend & API Development

                            </h3>

                            <p class="mt-3 text-slate-400 text-sm leading-6">

                                Add your API, backend, database or related
                                certification details here.

                            </p>

                        </div>


                        <div class="mt-6 pt-5 border-t border-slate-800">

                            <span class="text-sm text-slate-500">
                                Certificate Details
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- ========================================================= -->
        <!-- PROJECTS -->
        <!-- ========================================================= -->

        <section id="projects"
                 class="py-24 border-t border-slate-800">

            <div class="max-w-7xl mx-auto px-6 lg:px-8">


                <div class="max-w-2xl">

                    <p class="text-sm font-semibold tracking-[0.25em]
                              uppercase text-cyan-400">

                        Projects

                    </p>

                    <h2 class="mt-4 text-3xl md:text-4xl font-bold">

                        Things I've Built

                    </h2>

                    <p class="mt-4 text-slate-400 leading-7">

                        A selection of practical web applications
                        developed using Laravel, PHP and modern
                        web technologies.

                    </p>

                </div>



                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-14">


                    <!-- School Transport -->
                    <div class="project-card">

                        <div class="project-number">
                            01
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            School Transport Management System
                        </h3>

                        <p class="mt-4 text-slate-400 leading-7">

                            A Laravel-based school transport management
                            application with students, drivers, attendants,
                            vehicles, routes, pickup points, transport fees
                            and reporting modules.

                        </p>

                        <div class="flex flex-wrap gap-2 mt-6">

                            <span class="project-tag">Laravel</span>
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">MySQL</span>
                            <span class="project-tag">Blade</span>

                        </div>

                    </div>



                    <!-- Eagle Properties -->
                    <div class="project-card">

                        <div class="project-number">
                            02
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            Eagle Properties
                        </h3>

                        <p class="mt-4 text-slate-400 leading-7">

                            A real estate management platform with property
                            listings, owners, agents, property enquiries,
                            approval workflows and role-based dashboards.

                        </p>

                        <div class="flex flex-wrap gap-2 mt-6">

                            <span class="project-tag">Laravel</span>
                            <span class="project-tag">MySQL</span>
                            <span class="project-tag">MVC</span>
                            <span class="project-tag">Bootstrap</span>

                        </div>

                    </div>



                    <!-- CRM -->
                    <div class="project-card">

                        <div class="project-number">
                            03
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            CRM & REST API
                        </h3>

                        <p class="mt-4 text-slate-400 leading-7">

                            Backend CRM application with REST APIs,
                            authentication, database relationships and
                            API testing using modern Laravel tools.

                        </p>

                        <div class="flex flex-wrap gap-2 mt-6">

                            <span class="project-tag">Laravel</span>
                            <span class="project-tag">Sanctum</span>
                            <span class="project-tag">REST API</span>
                            <span class="project-tag">MySQL</span>

                        </div>

                    </div>



                    <!-- Billing -->
                    <div class="project-card">

                        <div class="project-number">
                            04
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            Billing Software
                        </h3>

                        <p class="mt-4 text-slate-400 leading-7">

                            Business billing application designed for
                            managing customers, invoices, products,
                            payments and transaction records.

                        </p>

                        <div class="flex flex-wrap gap-2 mt-6">

                            <span class="project-tag">PHP</span>
                            <span class="project-tag">Laravel</span>
                            <span class="project-tag">MySQL</span>

                        </div>

                    </div>



                    <!-- E-commerce -->
                    <div class="project-card">

                        <div class="project-number">
                            05
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            E-commerce Application
                        </h3>

                        <p class="mt-4 text-slate-400 leading-7">

                            Dynamic e-commerce application with product
                            management, authentication, database-driven
                            pages and responsive user interface.

                        </p>

                        <div class="flex flex-wrap gap-2 mt-6">

                            <span class="project-tag">Laravel</span>
                            <span class="project-tag">PHP</span>
                            <span class="project-tag">MySQL</span>
                            <span class="project-tag">Tailwind</span>

                        </div>

                    </div>



                    <!-- POS -->
                    <div class="project-card">

                        <div class="project-number">
                            06
                        </div>

                        <h3 class="mt-6 text-xl font-bold">
                            POS & Inventory System
                        </h3>

                        <p class="mt-4 text-slate-400 leading-7">

                            Business management system focused on products,
                            customers, invoices, orders, payments and
                            inventory-related workflows.

                        </p>

                        <div class="flex flex-wrap gap-2 mt-6">

                            <span class="project-tag">PHP</span>
                            <span class="project-tag">Laravel</span>
                            <span class="project-tag">MySQL</span>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- ========================================================= -->
        <!-- CONTACT -->
        <!-- ========================================================= -->

        <section id="contact"
                 class="py-24 border-t border-slate-800 bg-slate-950">

            <div class="max-w-7xl mx-auto px-6 lg:px-8">

                <div class="grid lg:grid-cols-2 gap-16">


                    <!-- Left -->
                    <div>

                        <p class="text-sm font-semibold tracking-[0.25em]
                                  uppercase text-cyan-400">

                            Contact

                        </p>

                        <h2 class="mt-4 text-4xl sm:text-5xl font-extrabold">

                            Let's build something
                            <span class="text-cyan-400">
                                useful.
                            </span>

                        </h2>

                        <p class="mt-6 text-lg text-slate-400 leading-8">

                            I'm open to PHP, Laravel and backend development
                            opportunities. If you're working on an interesting
                            project or opportunity, feel free to connect.

                        </p>


                        <div class="mt-10 space-y-5">


                            <div class="contact-item">

                                <div class="contact-icon">
                                    @
                                </div>

                                <div>

                                    <p class="text-xs text-slate-500">
                                        Email
                                    </p>

                                    <p class="text-slate-200">
                                        Add your email
                                    </p>

                                </div>

                            </div>


                            <div class="contact-item">

                                <div class="contact-icon">
                                    in
                                </div>

                                <div>

                                    <p class="text-xs text-slate-500">
                                        LinkedIn
                                    </p>

                                    <p class="text-slate-200">
                                        Add your LinkedIn
                                    </p>

                                </div>

                            </div>


                            <div class="contact-item">

                                <div class="contact-icon">
                                    GH
                                </div>

                                <div>

                                    <p class="text-xs text-slate-500">
                                        GitHub
                                    </p>

                                    <p class="text-slate-200">
                                        Add your GitHub
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-- Right -->
                    <div class="contact-card">

                        <h3 class="text-2xl font-bold">
                            Send a Message
                        </h3>

                        <p class="mt-2 text-slate-400">
                            Have a project or opportunity in mind?
                        </p>


                        <form class="mt-8 space-y-5">


                            <div>

                                <label class="block text-sm text-slate-400 mb-2">
                                    Name
                                </label>

                                <input
                                    type="text"
                                    placeholder="Your name"
                                    class="contact-input"
                                >

                            </div>


                            <div>

                                <label class="block text-sm text-slate-400 mb-2">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    placeholder="your@email.com"
                                    class="contact-input"
                                >

                            </div>


                            <div>

                                <label class="block text-sm text-slate-400 mb-2">
                                    Message
                                </label>

                                <textarea
                                    rows="5"
                                    placeholder="Tell me about your project..."
                                    class="contact-input resize-none"></textarea>

                            </div>


                            <button
                                type="button"
                                class="w-full px-6 py-3.5 rounded-lg
                                       bg-cyan-400 text-slate-950
                                       font-bold
                                       hover:bg-cyan-300
                                       transition">

                                Send Message

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </section>


    </main>



    <!-- ========================================================= -->
    <!-- FOOTER -->
    <!-- ========================================================= -->

    <footer class="border-t border-slate-800 py-8">

        <div class="max-w-7xl mx-auto px-6 lg:px-8
                    text-center text-sm text-slate-500">

            © {{ date('Y') }} Aryan Shukla.
            All rights reserved.

        </div>

    </footer>



    <!-- ========================================================= -->
    <!-- CUSTOM CSS -->
    <!-- ========================================================= -->

    <style>


        /* ===================================================== */
        /* FEATURED SKILLS */
        /* ===================================================== */

        .skill-main-card {

            position: relative;

            min-height: 210px;

            padding: 28px;

            border: 1px solid rgb(30 41 59);

            border-radius: 18px;

            background: rgba(15, 23, 42, .75);

            display: flex;

            flex-direction: column;

            justify-content: center;

            align-items: flex-start;

            transition: all .3s ease;

            overflow: hidden;

        }


        .skill-main-card::before {

            content: "";

            position: absolute;

            width: 100px;

            height: 100px;

            right: -40px;

            top: -40px;

            background: rgba(34, 211, 238, .08);

            border-radius: 50%;

            transition: .3s ease;

        }


        .skill-main-card:hover {

            transform: translateY(-6px);

            border-color: rgba(34, 211, 238, .45);

            box-shadow: 0 20px 50px rgba(0, 0, 0, .25);

        }


        .skill-main-card:hover::before {

            transform: scale(1.8);

        }


        .skill-main-card h3 {

            margin-top: 18px;

            color: white;

            font-size: 19px;

            font-weight: 700;

        }


        .skill-main-card p {

            margin-top: 5px;

            color: rgb(100 116 139);

            font-size: 13px;

        }


        .main-logo {

            width: 62px;

            height: 62px;

            display: flex;

            align-items: center;

            justify-content: center;

        }


        .main-logo svg {

            width: 58px;

            height: 58px;

        }


        .php-logo {

            color: #777bb3;

            border: 4px solid currentColor;

            border-radius: 50%;

            font-weight: 800;

            font-size: 12px;

        }


        .js-logo {

            width: 58px;

            height: 58px;

            background: #f7df1e;

            color: #111827;

            font-size: 17px;

            font-weight: 900;

            align-items: flex-end;

            justify-content: flex-end;

            padding: 5px;

        }


        .laravel-logo {

            color: #ff2d20;

        }


        .mysql-logo {

            color: #00758f;

        }


        .htmlcss-logo {

            display: flex;

            gap: 2px;

        }


        .html-mini,
        .css-mini {

            width: 28px;

            height: 40px;

            display: flex;

            justify-content: center;

            align-items: center;

            color: white;

            font-weight: 900;

            clip-path: polygon(
                0 0,
                100% 0,
                88% 90%,
                50% 100%,
                12% 90%
            );

        }


        .html-mini {

            background: #e34f26;

        }


        .css-mini {

            background: #1572b6;

        }


        .bootstrap-logo {

            background: #7952b3;

            color: white;

            border-radius: 10px;

            font-size: 40px;

            font-weight: 700;

        }


        .gitgithub-logo {

            color: #f05032;

        }


        .api-logo {

            color: #22d3ee;

        }



        /* ===================================================== */
        /* CATEGORY CARDS */
        /* ===================================================== */

        .category-card {

            padding: 20px;

            border: 1px solid rgb(30 41 59);

            border-radius: 18px;

            background: rgba(15, 23, 42, .65);

            transition: .3s ease;

        }


        .category-card:hover {

            border-color: rgba(34, 211, 238, .35);

            transform: translateY(-4px);

        }


        .category-header {

            display: flex;

            align-items: center;

            gap: 12px;

            padding-bottom: 18px;

            border-bottom: 1px solid rgb(30 41 59);

        }


        .category-number {

            width: 38px;

            height: 38px;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: rgba(34, 211, 238, .1);

            color: rgb(34 211 238);

            font-size: 11px;

            font-weight: 800;

        }


        .category-header h3 {

            color: white;

            font-size: 17px;

            font-weight: 700;

        }


        .category-header p {

            margin-top: 2px;

            color: rgb(100 116 139);

            font-size: 11px;

        }


        .skill-grid {

            display: grid;

            grid-template-columns: repeat(2, minmax(0, 1fr));

            gap: 10px;

            margin-top: 18px;

        }


        .mini-skill {

            aspect-ratio: 1 / 1;

            min-height: 105px;

            border: 1px solid rgb(30 41 59);

            border-radius: 13px;

            background: rgba(2, 6, 23, .45);

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            gap: 9px;

            transition: all .25s ease;

        }


        .mini-skill:hover {

            background: rgba(15, 23, 42, .9);

            border-color: rgba(34, 211, 238, .4);

            transform: translateY(-3px);

        }


        .mini-skill > span {

            color: rgb(203 213 225);

            font-size: 11px;

            font-weight: 600;

            text-align: center;

            line-height: 1.2;

        }


        .tech-icon {

            width: 42px;

            height: 42px;

            display: flex;

            align-items: center;

            justify-content: center;

        }


        .tech-icon svg {

            width: 40px;

            height: 40px;

        }


        .php-icon {

            width: 42px;

            height: 28px;

            border: 3px solid #777bb3;

            border-radius: 50%;

            color: #777bb3;

            font-size: 9px;

            font-weight: 900;

        }


        .js-icon {

            width: 40px;

            height: 40px;

            background: #f7df1e;

            color: #111827;

            align-items: flex-end;

            justify-content: flex-end;

            padding: 3px;

            font-size: 11px;

            font-weight: 900;

        }


        .html-icon {

            color: #e34f26;

        }


        .css-icon {

            color: #1572b6;

        }


        .blade-icon {

            color: #ff2d20;

        }


        .laravel-icon {

            color: #ff2d20;

        }


        .tailwind-icon {

            color: #38bdf8;

        }


        .bootstrap-icon {

            width: 40px;

            height: 40px;

            background: #7952b3;

            color: white;

            border-radius: 7px;

            font-size: 27px;

            font-weight: 700;

        }


        .mysql-icon {

            color: #00758f;

        }


        .eloquent-icon {

            color: #ff2d20;

        }


        .sanctum-icon {

            color: #ff2d20;

        }


        .git-icon {

            color: #f05032;

        }


        .github-icon {

            color: white;

        }


        .vscode-icon {

            color: #007acc;

        }


        .node-icon {

            color: #83cd29;

        }


        .npm-icon {

            width: 44px;

            height: 28px;

            background: #cb3837;

            color: white;

            border-radius: 4px;

            font-size: 12px;

            font-weight: 900;

            letter-spacing: -1px;

        }


        .postman-icon {

            color: #ff6c37;

        }



        /* ===================================================== */
        /* EXPERIENCE */
        /* ===================================================== */

        .experience-card {

            padding: 28px;

            border: 1px solid rgb(30 41 59);

            border-radius: 18px;

            background: rgba(15, 23, 42, .7);

            transition: .3s ease;

        }


        .experience-card:hover {

            border-color: rgba(34, 211, 238, .4);

            transform: translateY(-4px);

            box-shadow: 0 20px 45px rgba(0, 0, 0, .2);

        }


        .experience-tag {

            display: inline-flex;

            padding: 6px 10px;

            border-radius: 7px;

            border: 1px solid rgb(51 65 85);

            background: rgba(15, 23, 42, .8);

            color: rgb(148 163 184);

            font-size: 11px;

        }



        /* ===================================================== */
        /* CERTIFICATIONS */
        /* ===================================================== */

        .cert-card {

            padding: 28px;

            border: 1px solid rgb(30 41 59);

            border-radius: 18px;

            background: rgba(15, 23, 42, .65);

            transition: .3s ease;

        }


        .cert-card:hover {

            transform: translateY(-5px);

            border-color: rgba(34, 211, 238, .4);

            box-shadow: 0 20px 45px rgba(0, 0, 0, .2);

        }


        .cert-icon {

            width: 55px;

            height: 55px;

            color: rgb(34 211 238);

        }


        .cert-icon svg {

            width: 55px;

            height: 55px;

        }



        /* ===================================================== */
        /* PROJECTS */
        /* ===================================================== */

        .project-card {

            padding: 28px;

            border: 1px solid rgb(30 41 59);

            border-radius: 18px;

            background: rgba(15, 23, 42, .65);

            transition: .3s ease;

        }


        .project-card:hover {

            transform: translateY(-5px);

            border-color: rgba(34, 211, 238, .4);

            box-shadow: 0 20px 45px rgba(0, 0, 0, .2);

        }


        .project-number {

            width: 42px;

            height: 42px;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: rgba(34, 211, 238, .1);

            color: rgb(34 211 238);

            font-weight: 800;

            font-size: 12px;

        }


        .project-tag {

            display: inline-flex;

            padding: 6px 10px;

            border-radius: 7px;

            background: rgba(34, 211, 238, .08);

            border: 1px solid rgba(34, 211, 238, .15);

            color: rgb(103 232 249);

            font-size: 11px;

        }



        /* ===================================================== */
        /* CONTACT */
        /* ===================================================== */

        .contact-card {

            padding: 32px;

            border: 1px solid rgb(30 41 59);

            border-radius: 20px;

            background: rgba(15, 23, 42, .7);

        }


        .contact-item {

            display: flex;

            align-items: center;

            gap: 14px;

        }


        .contact-icon {

            width: 42px;

            height: 42px;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: rgba(34, 211, 238, .1);

            border: 1px solid rgba(34, 211, 238, .2);

            color: rgb(34 211 238);

            font-size: 12px;

            font-weight: 800;

        }


        .contact-input {

            width: 100%;

            padding: 13px 15px;

            border-radius: 10px;

            border: 1px solid rgb(51 65 85);

            background: rgb(2 6 23);

            color: white;

            outline: none;

            transition: .2s ease;

        }


        .contact-input::placeholder {

            color: rgb(71 85 105);

        }


        .contact-input:focus {

            border-color: rgb(34 211 238);

            box-shadow: 0 0 0 3px rgba(34, 211, 238, .08);

        }



        /* ===================================================== */
        /* MOBILE */
        /* ===================================================== */

        @media (max-width: 640px) {

            .skill-main-card {

                min-height: 180px;

            }


            .category-card {

                padding: 17px;

            }


            .mini-skill {

                min-height: 95px;

            }


            .experience-card {

                padding: 22px;

            }


            .cert-card {

                padding: 22px;

            }


            .project-card {

                padding: 22px;

            }


            .contact-card {

                padding: 22px;

            }

        }

    </style>


</body>
</html>

