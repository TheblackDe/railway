<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Articles</title>
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

        /* Corregir el icono de la luna (rotación para evitar estar invertida) */
        .fa-moon {
            transform: rotate(0deg);
        }

        /* Estilo para el icono del sol */
        .fa-sun {
            color: #ffcc00;
            /* Color del sol */
        }
    </style>
</head>

<body class="dark-mode">
    <header class="flex justify-between items-center p-6">
        <img alt="Profile picture" class="rounded-full w-10 h-10" height="40"
            src="{{ asset('image/Black And White Modern Typographic Simple Virus Apparel Logo.png') }}"
            width="40" />
        <i id="themeToggle" class="fas fa-sun text-gray-400 hover:text-black cursor-pointer"></i>
    </header>

    <main class="px-6">
        <section class="max-w-4xl mx-auto mt-12">
            <h1 class="text-5xl font-bold leading-tight">Escándalos y Rupturas: La Otra Cara del Mundo Deportivo</h1>
            <p class="text-xl text-gray-400 mt-4">Las polémicas amorosas y legales de figuras deportivas como Gerard
                Piqué, Neymar y Kyle Walker revelan el lado más controversial de sus vidas fuera del deporte.</p>
        </section>
        <section class="max-w-4xl mx-auto mt-12">
            <article class="border-t border-gray-700 pt-6">
                <p class="text-gray-400">Junio 4, 2022</p>
                <h2 class="text-2xl font-bold mt-2">Shakira y Gerard Piqué confirman que se separan tras 12 años de
                    relación</h2>
                <p class="text-gray-400 mt-2"> La cantante colombiana Shakira ha confirmado que se está separando de su
                    pareja, el futbolista del FC Barcelona Gerard Piqué, con el que ha tenido dos hijos.</p>
                <a class="text-teal-400 mt-2 inline-block" href="{{ route('noticias.article_1') }}">Leer Artículo</a>
            </article>
            <article class="border-t border-gray-700 pt-6 mt-6">
                <p class="text-gray-400">Julio 22, 2013</p>
                <h2 class="text-2xl font-bold mt-2">Traición e infidelidad: el escándalo amoroso que hizo temblar al
                    vestuario de la selección de Bélgica</h2>
                <p class="text-gray-400 mt-2">El portero del Chelsea se acostó con la novia de su compañero de
                    selección, Caroline Lijnen. Le fue infiel, supuestamente, a De Bruyne porque este se había acostado
                    antes con su mejor amiga.</p>
                <a class="text-teal-400 mt-2 inline-block" href="{{ route('noticias.article_2') }}">Leer Artículo</a>
            </article>
            <article class="border-t border-gray-700 pt-6 mt-6">
                <p class="text-gray-400">Marzo 17, 2023</p>
                <h2 class="text-2xl font-bold mt-2">Destaparon la triple vida que llevaría la estrella del Manchester
                    City Kyle Walker en medio de su escandaloso divorcio</h2>
                <p class="text-gray-400 mt-2"> El diario británico The Sun afirmó que el futbolista del Manchester City
                    mantuvo una relación de dos años con una modelo durante sus vínculos con su esposa Annie Kilner
                    y Lauryn Goodman. Le fue infiel, supuestamente, a De Bruyne porque este se había acostado
                    antes con su mejor amiga.</p>
                <a class="text-teal-400 mt-2 inline-block" href="{{ route('noticias.article_3') }}">Leer Artículo</a>
            </article>
            <article class="border-t border-gray-700 pt-6 mt-6">
                <p class="text-gray-400">Mayo 15, 2019</p>
                <h2 class="text-2xl font-bold mt-2">La modelo que denunció a Neymar por violación planea llevar su caso
                    a Francia</h2>
                <p class="text-gray-400 mt-2">El diario británico The Sun afirmó que el futbolista del Manchester City
                    mantuvo una relación de dos años con una modelo durante sus vínculos con su esposa Annie Kilner
                    y Lauryn Goodman. Le fue infiel, supuestamente, a De Bruyne porque este se había acostado
                    antes con su mejor amiga.</p>
                <a class="text-teal-400 mt-2 inline-block" href="{{ route('noticias.article_4') }}">Leer Artículo</a>
            </article>
            <article class="border-t border-gray-700 pt-6 mt-6">
                <p class="text-gray-400">Julio 29, 2024</p>
                <h2 class="text-2xl font-bold mt-2">Lamine Yamal descubre supuesta infidelidad Alex Padilla</h2>
                <p class="text-gray-400 mt-2">Estrella de FC Barcelona apareció de vacaciones en Marbella con Nico
                    Williams y sin noticias de su novia, Alex Padilla. Jugador dejó de seguirla en Instagram tras
                    hacerse viral video donde aparece sentada en las piernas de otro joven.</p>
                <a class="text-teal-400 mt-2 inline-block" href="{{ route('noticias.article_5') }}">Leer Artículo</a>
            </article>
        </section>
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
