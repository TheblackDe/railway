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
            color: black;
        }

        .dark-mode {
            background-color: #1a202c;
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
        }

        nav a:hover {
            color: #81e6d9;
            border-bottom: 2px solid #81e6d9;
        }

        nav a.active {
            color: rgb(211, 39, 53);
            border-bottom: 2px solid #81e6d9;
        }

        .copa-america-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            background-color: #2b85d4;
        }

        .copa-america-table th,
        .copa-america-table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #f5f5f5;
        }

        .copa-america-table .ganado {
            background-color: #14cf3a;
        }

        .copa-america-table .empatado {
            background-color: #d3b51d;
        }

        .copa-america-table .perdido {
            background-color: #d40c1d;
        }

        .copa-america-table .flag {
            width: 20px;
            height: auto;
            vertical-align: middle;
            margin-right: 5px;
        }
    </style>
</head>

<body class="dark-mode">
    <header class="flex justify-between items-center p-6">
        <img alt="Profile picture" class="rounded-full w-10 h-10" height="40" src="{{ asset('image/ggg.png') }}"
            width="40" />
        <nav class="flex space-x-6">
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.index') }}">Inicio</a>
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.article_1') }}">Art 1</a>
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.article_2') }}">Art 2</a>
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.article_3') }}">Art 3</a>
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.article_4') }}">Art 4</a>
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.article_5') }}">Art 5</a>
        </nav>
        <i id="themeToggle" class="fas fa-sun text-gray-400 hover:text-black cursor-pointer"></i>
    </header>

    <main class="p-6 max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Análisis del Desempeño del Equipo Nacional femenino en el Mundial</h1>

        <!-- Lo bueno -->
        <div class="mb-6">
            <h2 class="text-xl font-bold mb-4">Lo bueno</h2>
            <p class="dark-mode:text-white mb-4">
                1. Talento SÍ HAY: Más allá de las fallas en el partido de la eliminación contra las neerlandesas, no se
                puede decir que le falte talento al equipo nacional. Luisa Delgado es presente y futuro en el arco; Mary
                José Álvarez y Cristina Motta son centrales de confianza y proyección; Sintia Cabezas es una promesa de
                evolución en la banda izquierda -que es un talón de Aquiles en todas las categorías-, en el medio campo
                hay seguridad suficiente con Juana Ortegón y Nathalia Hernández; Karla Torres se demoró en aparecer pero
                cuando lo hizo se sintió su aporte y Linda Caicedo, más allá de toda consideración, es una de las
                mejores futbolistas del mundo y es nuestra. Prohibido olvidarlo. A Daniela Garavito, Karla Viancha e
                incluso Ana María Guzmán las perdimos por problemas físicos.
            </p>
            <p class="dark-mode:text-white mb-4">
                2. ​Recambio: Todas las protagonistas de esta triste eliminación vienen de un proceso exitoso de la
                Sub-17 y son garantía de recambio para el equipo de mayores. El camino, a pesar del dolor, es el
                correcto.
            </p>
        </div>

        <!-- Lo malo -->
        <div class="mb-6">
            <h2 class="text-xl font-bold mb-4">Lo malo</h2>
            <p class="dark-mode:text-white mb-4">
                1. ​Líos de definición: Si fuera por meritocracia, los cuartos de final entre Colombia y Países Bajos
                nunca hubieran llegado a los penaltis. De los 24 tiros totales que hizo, 7 de ellos al arco, solo
                embocó.
            <p class="dark-mode:text-white mb-4">
                2. La imprecisión a la hora de enfilar al arco y las malas decisiones condenaron a Colombia en todo el
                torneo.
            </p>
        </div>
    </main>

</body>

</html>
