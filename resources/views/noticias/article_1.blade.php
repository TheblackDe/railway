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
        <img alt="Profile picture" class="rounded-full w-10 h-10" height="40"
            src="{{ asset('image/Black And White Modern Typographic Simple Virus Apparel Logo.png') }}"
            width="40" />
        <nav class="flex-1 flex justify-center space-x-8">
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.index') }}"
                class="text-gray dark-mode:text-white hover:text-gray">Inicio</a>
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
                    Shakira y Gerard Piqué anuncian que se separan tras 12 años de relación
                </h1>
                <p class="dark-mode:text-white mb-4">
                    La cantante colombiana y el futbolista del Barcelona, con dos hijos en común, emiten un comunicado
                    conjunto en el que piden “respeto a la privacidad”
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
                            16 de septiembre de 2024 - 2:00 p. m.
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
                        0
                    </a>
                </div>
            </div>
            <div class="flex flex-col md:flex-col md:items-start">
                <div class="md:w-full mb-6">
                    <img alt="sdfdsfdsfdsfds" class="rounded-lg mx-auto" height="600"
                        src="{{ asset('image/shakira.jpg') }}" width="500" />
                    <p class="mt-4 text-sm text-gray-600 text-center">Gerard Piqué y Shakira confirman su separación</p>
                </div>


                <div class="md:w-full">
                    <p class="dark-mode:text-white mb-4">
                        La cantante colombiana Shakira y el jugador de fútbol español Gerard Piqué confirmaron su
                        separación tras 12 años de relación.

                        “Lamentamos confirmar que nos separamos. Por el bienestar de nuestros hijos, que son nuestra
                        máxima prioridad, solicitamos respeto a (nuestra) privacidad. Gracias por su comprensión”, dice
                        un comunicado conjunto.
                    </p>
                    <p class="dark-mode:text-white">
                        La cantante de “Hips Don’t Lie”, de 45 años, y el defensa del FC Barcelona, de 35, tienen dos
                        hijos juntos: Milan, nacido en 2013, y Sasha, nacido en 2015. Han mantenido una residencia en
                        España.
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
