<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ogaxxx</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f4f4;
            /* Fondo claro */
            color: black;
        }

        /* Estilos para el modo oscuro */
        .dark-mode {
            background-color: #1a202c;
            /* Color de fondo del modo oscuro */
            color: white;
        }

        .dark-mode footer {
            background-color: #2d3748;
        }

        .dark-mode .text-gray-400 {
            color: #cbd5e0 !important;
        }

        .dark-mode .border-gray-700 {
            border-color: #4a5568 !important;
        }

        .dark-mode a.text-teal-400 {
            color: #81e6d9;
        }

        .fa-moon {
            transform: rotate(0deg);
        }

        .fa-sun {
            color: #ffcc00;
            /* Color del sol */
        }

        nav a:hover {
            color: #81e6d9;
            border-bottom: 2px solid #81e6d9;
            /*  background-color: rgba(255, 255, 255, 0.1); */
        }


        nav a.active {
            color: white;
            border-bottom: 2px solid #81e6d9;
        }
    </style>
</head>

<body class="dark-mode">
    <header class="flex justify-between items-center p-6">
        <img alt="Profile picture" class="rounded-full w-10 h-10" height="40" src="{{ asset('image/ggg.png') }}"
            width="40" />
        <nav class="flex space-x-6">
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.index') }}"
                class="text-gray dark-mode:text-white hover:text-gray">Inicio</a>
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.article_1') }}"
                class="text-gray dark-mode:text-white hover:text-gray">Art
                1</a>
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.article_2') }}"
                class="text-gray dark-mode:text-white hover:text-gray">Art
                2</a>
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.article_3') }}"
                class="text-gray dark-mode:text-white hover:text-gray">Art
                3</a>
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.article_4') }}"
                class="text-gray dark-mode:text-white hover:text-gray">Art
                4</a>
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.article_5') }}"
                class="text-gray dark-mode:text-white hover:text-gray">Art
                5</a>
        </nav>
        <i id="themeToggle" class="fas fa-sun text-gray-400 hover:text-black cursor-pointer"></i>
    </header>

    <main class="p-6 max-w-4xl mx-auto">
        <!-- Contenido del artículo -->
        <div class="w-full">
            <div class="text-left mb-6">
                <h1 class="text-teal-700 text-3xl font-bold mb-4">
                    Luis Díaz: De La Guajira al estrellato del fútbol mundial
                </h1>
                <p class="dark-mode:text-white mb-4">
                    La inspiradora historia de superación de Luis Díaz, el habilidoso extremo colombiano que ha
                    deslumbrado
                    al mundo con su talento y determinación, hasta convertirse en una de las estrellas del fútbol
                    europeo.
                </p>
            </div>
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center bg-gray-100 p-2 rounded-lg">
                    <img alt="Foto del autor" class="w-10 h-10 rounded-full mr-2"
                        src="{{ asset('image/wallpapersden.com_anime-girl-hacker-hd-cute-digital-art_1366x768.jpg') }}" />
                    <div>
                        <p class="text-base font-semibold text-gray-600">
                            Ogaxxx
                        </p>
                        <p class="text-xs text-gray-600">
                            27 de septiembre de 2024 - 4:00 p. m.
                        </p>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <a class="text-gray-600 hover:text-gray-800" href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a class="text-gray-600 hover:text-gray-800" href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="text-gray-600 hover:text-gray-800" href="#">
                        <i class="fas fa-times"></i>
                    </a>
                    <a class="text-gray-600 hover:text-gray-800" href="#">
                        <i class="fas fa-share"></i>
                    </a>
                    <a class="text-gray-600 hover:text-gray-800" href="#">
                        <i class="fas fa-bookmark"></i>
                        Guardar
                    </a>
                    <a class="text-gray-600 hover:text-gray-800" href="#">
                        <i class="fas fa-comment"></i>
                        2
                    </a>
                </div>
            </div>
            <div class="flex flex-col md:flex-col md:items-start">
                <div class="md:w-full mb-6">
                    <img alt="Luis Díaz celebrando un gol" class="rounded-lg mx-auto" height="600"
                        src="{{ asset('image/luis.avif') }}" width="500" />
                    <p class="mt-4 text-sm text-gray-600 text-center">Luis Díaz celebrando un
                        gol decisivo con la Selección Colombia</p>
                </div>
            </div>



            <div class="md:w-full">
                <h2 class="text-2xl font-bold mb-4 dark-mode:text-white">Infancia y Primeros Pasos</h2>
                <p class="dark-mode:text-white mb-4">
                    Luis Fernando Díaz Marulanda nació el 13 de enero de 1997 en Barrancas, La Guajira, una región
                    marginada de Colombia. Creció en una comunidad wayuu, donde las oportunidades de llegar a ser
                    futbolista profesional eran casi inexistentes. Sin embargo, desde muy pequeño, Luis demostró
                    su pasión por el fútbol, participando en torneos locales y llamando la atención por su habilidad
                    con el balón.
                </p>

                <h2 class="text-2xl font-bold mb-4 dark-mode:text-white">El Salto al Profesionalismo</h2>
                <p class="dark-mode:text-white mb-4">
                    Su gran oportunidad llegó cuando fue seleccionado para participar en la Copa América de Pueblos
                    Indígenas
                    en 2015, donde brilló como una de las estrellas del torneo. Este evento le abrió las puertas
                    para unirse
                    a las divisiones menores del Barranquilla FC, el equipo filial del Junior de Barranquilla, uno
                    de los clubes
                    más importantes del país.
                </p>

                <h2 class="text-2xl font-bold mb-4 dark-mode:text-white">Consagración en el Junior de Barranquilla
                </h2>
                <p class="dark-mode:text-white mb-4">
                    En el Junior, Díaz rápidamente subió a las categorías mayores y se consolidó como una de las
                    promesas del
                    fútbol colombiano. Con su velocidad y capacidad de desborde, fue pieza clave en los títulos que
                    consiguió
                    el Junior tanto en liga como en la Copa Colombia. Su desempeño llamó la atención de varios
                    clubes europeos.
                </p>

                <h2 class="text-2xl font-bold mb-4 dark-mode:text-white">Explosión en Europa: FC Porto y Liverpool
                </h2>
                <p class="dark-mode:text-white mb-4">
                    En 2019, Luis Díaz dio el salto al fútbol europeo al firmar con el FC Porto de Portugal. Su
                    impacto fue inmediato,
                    ganando títulos y destacándose como uno de los mejores extremos de la liga. En 2022, su talento
                    fue reconocido
                    por el Liverpool FC de Inglaterra, que lo fichó para reforzar su ataque. Con el equipo de Jürgen
                    Klopp, Díaz
                    ha brillado tanto en la Premier League como en competiciones europeas, siendo decisivo en varios
                    partidos.
                </p>

                <h2 class="text-2xl font-bold mb-4 dark-mode:text-white">Estado Actual y Futuro</h2>
                <p class="dark-mode:text-white mb-4">
                    En la actualidad, Luis Díaz es uno de los jugadores más importantes del Liverpool FC y de la
                    Selección Colombia.
                    Siendo una pieza clave en el esquema de Arne Slot y una esperanza para Colombia en las
                    eliminatorias
                    al Mundial 2026.
                </p>
            </div>
        </div>
        </div>
    </main>


    <footer class="bg-gray-100 py-6 mt-12">
        <div class="max-w-4xl mx-auto text-center text-gray-400">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
            <p class="mt-2">
                <a class="text-teal-400 hover:underline" href="#">Privacy Policy</a> |
                <a class="text-teal-400 hover:underline" href="#">Terms of Service</a>
            </p>
            <div class="mt-4">
                <a href="#" class="text-gray-400 hover:text-white mx-2">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-black mx-2">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-black mx-2">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </footer>

    <script>
        const themeToggle = document.getElementById('themeToggle');

        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');

            // Cambiar el icono entre sol (dark-mode activado) y luna (dark-mode desactivado)
            if (document.body.classList.contains('dark-mode')) {
                themeToggle.classList.remove('fa-moon');
                themeToggle.classList.add('fa-sun');
            } else {
                themeToggle.classList.remove('fa-sun');
                themeToggle.classList.add('fa-moon');
            }
        });
    </script>
</body>

</html>
