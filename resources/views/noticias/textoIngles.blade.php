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
            color: rgb(211, 39, 53);
            border-bottom: 2px solid #81e6d9;
        }

        .copa-america-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            background-color: #2b85d4;
            /* Color de fondo suave */
        }

        .copa-america-table th,
        .copa-america-table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #f5f5f5;
        }

        .copa-america-table .ganado {
            background-color: #14cf3a;
            /* Verde */
        }

        .copa-america-table .empatado {
            background-color: #d3b51d;
            /* Amarillo */
        }

        .copa-america-table .perdido {
            background-color: #d40c1d;
            /* Rojo */
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
        <img alt="Profile picture" class="rounded-full w-10 h-10" height="40"
            src="{{ asset('image/Black And White Modern Typographic Simple Virus Apparel Logo.png') }}"
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
        <div>
            <h1 class="text-teal-700 text-3xl font-bold mb-4">
                Colombia's National Team Shines as Runner-up in the 2024 Copa América
            </h1>
            <p class="dark-mode:text-white mb-4">
                The Colombian national soccer team was one of the 16 teams that participated in the 2024 Copa América,
                the continental tournament held from June 20 to July 14 in the United States. This marked Colombia's
                24th appearance in the prestigious competition.
            </p>
            <p class="dark-mode:text-white mb-4">
                Colombia was placed in Group D alongside Brazil, Paraguay, and Costa Rica, the winner of the playoff
                match against Honduras. In the quarterfinals, they defeated Panama, followed by a victory over Uruguay
                in the semifinals. The team finished as the tournament’s runner-up after a hard-fought final that ended
                in overtime, where Argentina emerged victorious.
            </p>

        </div>
        <!-- Contenido del artículo -->
        {{--  <div class="flex items-center justify-between mb-6">
            <div class="flex items-center bg-gray-100 p-2 rounded-lg">
                <img alt="Foto del autor" class="w-10 h-10 rounded-full mr-2"
                    src="{{ asset('image/luis-diaz.jpg') }}" />
                <div>
                    <p class="text-base font-semibold text-gray-600">
                        Cristyan Tepatlan Flores
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
        </div> --}}

        <h1 class="text-teal-700 text-3xl font-bold mb-4">
            Colombia National Team Squad for the 2024 Copa América
        </h1>
        <table class="sortable wikitable plainrowheaders jquery-tablesorter" style="width:90%">
            <thead>
                <tr>
                    <th scope="col" style="width:5%" class="headerSort" tabindex="0" role="columnheader button"
                        title="Sort ascending">
                        <abbr title="Number">No.</abbr>
                    </th>
                    <th scope="col" style="width:5%" class="headerSort" tabindex="0" role="columnheader button"
                        title="Sort ascending">
                        <abbr title="Position">Pos.</abbr>
                    </th>
                    <th scope="col" class="headerSort" tabindex="0" role="columnheader button"
                        title="Sort ascending">Player</th>
                    <th scope="col" class="headerSort" tabindex="0" role="columnheader button"
                        title="Sort ascending">
                        Date of Birth (Age)
                    </th>
                    <th scope="col" style="width:7%" class="headerSort" tabindex="0" role="columnheader button"
                        title="Sort ascending">
                        <abbr title="Appearances">Apps.</abbr>
                    </th>
                    <th scope="col" style="width:7%" class="headerSort" tabindex="0" role="columnheader button"
                        title="Sort ascending">Goals</th>
                    <th scope="col" class="headerSort" tabindex="0" role="columnheader button"
                        title="Sort ascending">Club</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center; border:0">1</td>
                    <td style="text-align:center; border:0"><span style="display:none">1</span><a
                            href="/wiki/Guardameta_(f%C3%BAtbol)" title="Guardameta (fútbol)">POR</a></td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/David_Ospina"
                            title="David Ospina">David Ospina</a></td>
                    <td style="border:0"><span style="display:none">1988-08-31</span>August 31, 1988 (35 years)</td>
                    <td style="text-align:center; border:0">129</td>
                    <td style="text-align:center; border:0">0</td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Saudi_Arabia.svg" class="mw-file-description"
                                    title="Bandera de Arabia Saudita"><img alt="Bandera de Arabia Saudita"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/20px-Flag_of_Saudi_Arabia.svg.png"
                                        decoding="async" width="20" height="13"
                                        class="mw-file-element"></a></span></span> <a
                            href="/wiki/Al-Nassr_Football_Club" title="Al-Nassr Football Club">Al-Nassr F. C.</a></td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">2</td>
                    <td style="text-align:center; border:0"><span style="display:none">2</span><a
                            href="/wiki/Defensa_(f%C3%BAtbol)" title="Defensa (fútbol)">DEF</a></td>
                    <td scope="row" style="border:0; background-color:inherit"><a
                            href="/wiki/Carlos_Cuesta_Figueroa" title="Carlos Cuesta Figueroa">Carlos Cuesta</a></td>
                    <td style="border:0"><span style="display:none">1999-03-09</span>March 9, 1999 (25 years)</td>
                    <td style="text-align:center; border:0">14</td>
                    <td style="text-align:center; border:0">0</td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Belgium_(civil).svg" class="mw-file-description"
                                    title="Bandera de Bélgica"><img alt="Bandera de Bélgica"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/9/92/Flag_of_Belgium_%28civil%29.svg/20px-Flag_of_Belgium_%28civil%29.svg.png"
                                        decoding="async" width="20" height="13"
                                        class="mw-file-element"></a></span></span> <a href="/wiki/K._R._C._Genk"
                            title="K. R. C. Genk">K. R. C. Genk</a></td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">3</td>
                    <td style="text-align:center; border:0"><span style="display:none">2</span><a
                            href="/wiki/Defensa_(f%C3%BAtbol)" title="Defensa (fútbol)">DEF</a></td>
                    <td scope="row" style="border:0; background-color:inherit"><a
                            href="/wiki/John_Janer_Lucum%C3%AD" class="mw-redirect" title="John Janer Lucumí">John
                            Lucumí</a></td>
                    <td style="border:0"><span style="display:none">1998-06-26</span>June 26, 1998 (25 years)</td>
                    <td style="text-align:center; border:0">18</td>
                    <td style="text-align:center; border:0">0</td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Italy.svg" class="mw-file-description"
                                    title="Bandera de Italia"><img alt="Bandera de Italia"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/20px-Flag_of_Italy.svg.png"
                                        decoding="async" width="20" height="13"
                                        class="mw-file-element"></a></span></span> <a
                            href="/wiki/Bologna_Football_Club_1909" title="Bologna Football Club 1909">Bologna F. C.
                            1909</a></td>
                </tr>

                <tr>
                    <td style="text-align:center; border:0">10
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">3</span><a
                            href="/wiki/Centrocampista" title="Centrocampista">MED</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a
                            href="/wiki/James_Rodr%C3%ADguez" title="James Rodríguez">James Rodríguez</a> <span
                            typeof="mw:File"><a href="/wiki/Capit%C3%A1n_(f%C3%BAtbol)" title="Capitán"><img
                                    alt="Capitán"
                                    src="//upload.wikimedia.org/wikipedia/commons/thumb/7/76/Captain_sports.svg/15px-Captain_sports.svg.png"
                                    decoding="async" width="15" height="15" class="mw-file-element"
                                    srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/76/Captain_sports.svg/23px-Captain_sports.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/76/Captain_sports.svg/30px-Captain_sports.svg.png 2x"
                                    data-file-width="197" data-file-height="197"></a></span>
                    </td>
                    <td style="border:0"><span style="display:none">01991-07-12 </span>July 12, 1991
                        (32 years)
                    </td>
                    <td style="text-align:center; border:0">100
                    </td>
                    <td style="text-align:center; border:0">27
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Brazil.svg" class="mw-file-description"
                                    title="Bandera de Brasil"><img alt="Bandera de Brasil"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/20px-Flag_of_Brazil.svg.png"
                                        decoding="async" width="20" height="14" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/30px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/40px-Flag_of_Brazil.svg.png 2x"
                                        data-file-width="1000" data-file-height="700"></a></span></span> <a
                            href="/wiki/S%C3%A3o_Paulo_Futebol_Clube" title="São Paulo Futebol Clube">São Paulo F.
                            C.</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">11
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">3</span><a
                            href="/wiki/Centrocampista" title="Centrocampista">MED</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/Jhon_Arias"
                            title="Jhon Arias">Jhon Arias</a>
                    </td>
                    <td style="border:0"><span style="display:none">01997-09-21 </span>September 21, 1997
                        (26 years)
                    </td>
                    <td style="text-align:center; border:0">15
                    </td>
                    <td style="text-align:center; border:0">3
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Brazil.svg" class="mw-file-description"
                                    title="Bandera de Brasil"><img alt="Bandera de Brasil"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/20px-Flag_of_Brazil.svg.png"
                                        decoding="async" width="20" height="14" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/30px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/40px-Flag_of_Brazil.svg.png 2x"
                                        data-file-width="1000" data-file-height="700"></a></span></span> <a
                            href="/wiki/Fluminense_Football_Club" title="Fluminense Football Club">Fluminense F.
                            C.</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">12
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">1</span><a
                            href="/wiki/Guardameta_(f%C3%BAtbol)" title="Guardameta (fútbol)">POR</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/Camilo_Vargas"
                            title="Camilo Vargas">Camilo Vargas</a>
                    </td>
                    <td style="border:0"><span style="display:none">01989-03-09 </span>March 9, 1989
                        (35 years)
                    </td>
                    <td style="text-align:center; border:0">23
                    </td>
                    <td style="text-align:center; border:0">0
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Mexico.svg" class="mw-file-description"
                                    title="Bandera de México"><img alt="Bandera de México"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/20px-Flag_of_Mexico.svg.png"
                                        decoding="async" width="20" height="11" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/30px-Flag_of_Mexico.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/40px-Flag_of_Mexico.svg.png 2x"
                                        data-file-width="980" data-file-height="560"></a></span></span> <a
                            href="/wiki/Atlas_F%C3%BAtbol_Club" title="Atlas Fútbol Club">Atlas F. C.</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">13
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">2</span><a
                            href="/wiki/Defensa_(f%C3%BAtbol)" title="Defensa (fútbol)">DEF</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/Yerry_Mina"
                            title="Yerry Mina">Yerry Mina</a>
                    </td>
                    <td style="border:0"><span style="display:none">01994-09-23 </span>September 23, 1994
                        (29 years)
                    </td>
                    <td style="text-align:center; border:0">44
                    </td>
                    <td style="text-align:center; border:0">7
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Italy.svg" class="mw-file-description"
                                    title="Bandera de Italia"><img alt="Bandera de Italia"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/20px-Flag_of_Italy.svg.png"
                                        decoding="async" width="20" height="13" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/30px-Flag_of_Italy.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/40px-Flag_of_Italy.svg.png 2x"
                                        data-file-width="1500" data-file-height="1000"></a></span></span> <a
                            href="/wiki/Cagliari_Calcio" title="Cagliari Calcio">Cagliari Calcio</a>
                    </td>
                </tr>

                <td style="text-align:center; border:0">14
                </td>
                <td style="text-align:center; border:0"><span style="display:none">4</span><a href="/wiki/Delantero"
                        title="Delantero">DEL</a>
                </td>
                <td scope="row" style="border:0; background-color:inherit"><a
                        href="/wiki/Jhon_J%C3%A1der_Dur%C3%A1n" class="mw-redirect" title="Jhon Jáder Durán">Jhon
                        Jáder Durán</a>
                </td>
                <td style="border:0">
                    <span style="display:none">2003-12-13</span>
                    December 13, 2003 (20 years)
                </td>

                <td style="text-align:center; border:0">9
                </td>
                <td style="text-align:center; border:0">1
                </td>
                <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                href="/wiki/Archivo:Flag_of_England.svg" class="mw-file-description"
                                title="Bandera de Inglaterra"><img alt="Bandera de Inglaterra"
                                    src="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/20px-Flag_of_England.svg.png"
                                    decoding="async" width="20" height="12" class="mw-file-element"
                                    srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/30px-Flag_of_England.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/40px-Flag_of_England.svg.png 2x"
                                    data-file-width="800" data-file-height="480"></a></span></span> <a
                        href="/wiki/Aston_Villa_Football_Club" title="Aston Villa Football Club">Aston Villa F.
                        C.</a>
                </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">15
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">3</span><a
                            href="/wiki/Centrocampista" title="Centrocampista">MED</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/Mateus_Uribe"
                            title="Mateus Uribe">Mateus Uribe</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">1991-03-21</span>
                        March 21, 1991 (33 years)
                    </td>

                    <td style="text-align:center; border:0">54
                    </td>
                    <td style="text-align:center; border:0">6
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Qatar.svg" class="mw-file-description"
                                    title="Bandera de Catar"><img alt="Bandera de Catar"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/20px-Flag_of_Qatar.svg.png"
                                        decoding="async" width="20" height="8" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/30px-Flag_of_Qatar.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Qatar.svg/40px-Flag_of_Qatar.svg.png 2x"
                                        data-file-width="1400" data-file-height="550"></a></span></span> <a
                            href="/wiki/Al-Sadd_Sports_Club" title="Al-Sadd Sports Club">Al-Sadd S. C.</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">16
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">3</span><a
                            href="/wiki/Centrocampista" title="Centrocampista">MED</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/Jefferson_Lerma"
                            title="Jefferson Lerma">Jefferson Lerma</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">1994-10-25</span>
                        October 25, 1994 (29 years)
                    </td>

                    <td style="text-align:center; border:0">41
                    </td>
                    <td style="text-align:center; border:0">1
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_England.svg" class="mw-file-description"
                                    title="Bandera de Inglaterra"><img alt="Bandera de Inglaterra"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/20px-Flag_of_England.svg.png"
                                        decoding="async" width="20" height="12" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/30px-Flag_of_England.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/40px-Flag_of_England.svg.png 2x"
                                        data-file-width="800" data-file-height="480"></a></span></span> <a
                            href="/wiki/Crystal_Palace_Football_Club" title="Crystal Palace Football Club">Crystal
                            Palace F. C.</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">17
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">2</span><a
                            href="/wiki/Defensa_(f%C3%BAtbol)" title="Defensa (fútbol)">DEF</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/Johan_Mojica"
                            title="Johan Mojica">Johan Mojica</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">1992-08-21</span>
                        August 21, 1992 (31 years)
                    </td>

                    <td style="text-align:center; border:0">25
                    </td>
                    <td style="text-align:center; border:0">1
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Spain.svg" class="mw-file-description"
                                    title="Bandera de España"><img alt="Bandera de España"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/20px-Flag_of_Spain.svg.png"
                                        decoding="async" width="20" height="13" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/30px-Flag_of_Spain.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/40px-Flag_of_Spain.svg.png 2x"
                                        data-file-width="750" data-file-height="500"></a></span></span> <a
                            href="/wiki/Club_Atl%C3%A9tico_Osasuna" title="Club Atlético Osasuna">C. A. Osasuna</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">18
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">4</span><a
                            href="/wiki/Delantero" title="Delantero">DEL</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/Luis_Sinisterra"
                            title="Luis Sinisterra">Luis Sinisterra</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">1999-06-17</span>
                        June 17, 1999 (25 years)
                    </td>

                    <td style="text-align:center; border:0">12
                    </td>
                    <td style="text-align:center; border:0">4
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_England.svg" class="mw-file-description"
                                    title="Bandera de Inglaterra"><img alt="Bandera de Inglaterra"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/20px-Flag_of_England.svg.png"
                                        decoding="async" width="20" height="12" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/30px-Flag_of_England.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/40px-Flag_of_England.svg.png 2x"
                                        data-file-width="800" data-file-height="480"></a></span></span> <a
                            href="/wiki/AFC_Bournemouth" title="AFC Bournemouth">A. F. C. Bournemouth</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">19
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">4</span><a
                            href="/wiki/Delantero" title="Delantero">DEL</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a
                            href="/wiki/Rafael_Santos_Borr%C3%A9" title="Rafael Santos Borré">Rafael Santos Borré</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">1995-09-15</span>
                        September 15, 1995 (28 years)
                    </td>

                    <td style="text-align:center; border:0">32
                    </td>
                    <td style="text-align:center; border:0">6
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Brazil.svg" class="mw-file-description"
                                    title="Bandera de Brasil"><img alt="Bandera de Brasil"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/20px-Flag_of_Brazil.svg.png"
                                        decoding="async" width="20" height="14" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/30px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/40px-Flag_of_Brazil.svg.png 2x"
                                        data-file-width="1000" data-file-height="700"></a></span></span> <a
                            href="/wiki/Sport_Club_Internacional" title="Sport Club Internacional">S. C.
                            Internacional</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">20
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">3</span><a
                            href="/wiki/Centrocampista" title="Centrocampista">MED</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a
                            href="/wiki/Juan_Fernando_Quintero" title="Juan Fernando Quintero">Juan Fernando
                            Quintero</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">1993-01-18</span>
                        January 18, 1993 (31 years)
                    </td>

                    <td style="text-align:center; border:0">35
                    </td>
                    <td style="text-align:center; border:0">4
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Argentina.svg" class="mw-file-description"
                                    title="Bandera de Argentina"><img alt="Bandera de Argentina"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/20px-Flag_of_Argentina.svg.png"
                                        decoding="async" width="20" height="13" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/30px-Flag_of_Argentina.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/40px-Flag_of_Argentina.svg.png 2x"
                                        data-file-width="800" data-file-height="500"></a></span></span> <a
                            href="/wiki/Racing_Club" title="Racing Club">Racing Club</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">21
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">2</span><a
                            href="/wiki/Defensa_(f%C3%BAtbol)" title="Defensa (fútbol)">DEF</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a
                            href="/wiki/Daniel_Mu%C3%B1oz_(futbolista)" title="Daniel Muñoz (futbolista)">Daniel
                            Muñoz</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">1996-05-25</span>
                        May 25, 1996 (28 years)
                    </td>

                    <td style="text-align:center; border:0">26
                    </td>
                    <td style="text-align:center; border:0">1
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_England.svg" class="mw-file-description"
                                    title="Bandera de Inglaterra"><img alt="Bandera de Inglaterra"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/20px-Flag_of_England.svg.png"
                                        decoding="async" width="20" height="12" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/30px-Flag_of_England.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/40px-Flag_of_England.svg.png 2x"
                                        data-file-width="800" data-file-height="480"></a></span></span> <a
                            href="/wiki/Crystal_Palace_Football_Club" title="Crystal Palace Football Club">Crystal
                            Palace F. C.</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">22
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">3</span><a
                            href="/wiki/Centrocampista" title="Centrocampista">MED</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/Yaser_Asprilla"
                            title="Yaser Asprilla">Yaser Asprilla</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">2003-11-19</span>
                        November 19, 2003 (20 years)
                    </td>

                    <td style="text-align:center; border:0">5
                    </td>
                    <td style="text-align:center; border:0">2
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_England.svg" class="mw-file-description"
                                    title="Bandera de Inglaterra"><img alt="Bandera de Inglaterra"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/20px-Flag_of_England.svg.png"
                                        decoding="async" width="20" height="12" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/30px-Flag_of_England.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/40px-Flag_of_England.svg.png 2x"
                                        data-file-width="800" data-file-height="480"></a></span></span> <a
                            href="/wiki/Watford_Football_Club" title="Watford Football Club">Watford F. C.</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">23
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">2</span><a
                            href="/wiki/Defensa_(f%C3%BAtbol)" title="Defensa (fútbol)">DEF</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a
                            href="/wiki/Davinson_S%C3%A1nchez" class="mw-redirect" title="Davinson Sánchez">Davinson
                            Sánchez</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">1996-06-12</span>
                        June 12, 1996 (28 years)
                    </td>

                    <td style="text-align:center; border:0">59
                    </td>
                    <td style="text-align:center; border:0">1
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Turkey.svg" class="mw-file-description"
                                    title="Bandera de Turquía"><img alt="Bandera de Turquía"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/20px-Flag_of_Turkey.svg.png"
                                        decoding="async" width="20" height="13" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/30px-Flag_of_Turkey.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/40px-Flag_of_Turkey.svg.png 2x"
                                        data-file-width="1200" data-file-height="800"></a></span></span> <a
                            href="/wiki/Galatasaray_Spor_Kul%C3%BCb%C3%BC_(f%C3%BAtbol)"
                            title="Galatasaray Spor Kulübü (fútbol)">Galatasaray S. K.</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">24
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">4</span><a
                            href="/wiki/Delantero" title="Delantero">DEL</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/Jhon_C%C3%B3rdoba"
                            title="Jhon Córdoba">Jhon Córdoba</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">1993-05-11</span>
                        May 11, 1993 (31 years)
                    </td>

                    <td style="text-align:center; border:0">4
                    </td>
                    <td style="text-align:center; border:0">2
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Russia.svg" class="mw-file-description"
                                    title="Bandera de Rusia"><img alt="Bandera de Rusia"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/20px-Flag_of_Russia.svg.png"
                                        decoding="async" width="20" height="13" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/30px-Flag_of_Russia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/40px-Flag_of_Russia.svg.png 2x"
                                        data-file-width="900" data-file-height="600"></a></span></span> <a
                            href="/wiki/F._C._Krasnodar" title="F. C. Krasnodar">F. C. Krasnodar</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">25
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">1</span><a
                            href="/wiki/Guardameta_(f%C3%BAtbol)" title="Guardameta (fútbol)">POR</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/%C3%81lvaro_Montero"
                            title="Álvaro Montero">Álvaro Montero</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">1995-03-29</span>
                        March 29, 1995 (29 years)
                    </td>

                    <td style="text-align:center; border:0">8
                    </td>
                    <td style="text-align:center; border:0">0
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_Colombia.svg" class="mw-file-description"
                                    title="Bandera de Colombia"><img alt="Bandera de Colombia"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/20px-Flag_of_Colombia.svg.png"
                                        decoding="async" width="20" height="13" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/30px-Flag_of_Colombia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/40px-Flag_of_Colombia.svg.png 2x"
                                        data-file-width="900" data-file-height="600"></a></span></span> <a
                            href="/wiki/Millonarios_F%C3%BAtbol_Club" title="Millonarios Fútbol Club">Millonarios F.
                            C.</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; border:0">26
                    </td>
                    <td style="text-align:center; border:0"><span style="display:none">2</span><a
                            href="/wiki/Defensa_(f%C3%BAtbol)" title="Defensa (fútbol)">DEF</a>
                    </td>
                    <td scope="row" style="border:0; background-color:inherit"><a href="/wiki/Deiver_Machado"
                            title="Deiver Machado">Deiver Machado</a>
                    </td>
                    <td style="border:0">
                        <span style="display:none">1993-09-02</span>
                        September 2, 1993 (30 years)
                    </td>

                    <td style="text-align:center; border:0">10
                    </td>
                    <td style="text-align:center; border:0">0
                    </td>
                    <td style="border:0"><span class="flagicon"><span class="mw-image-border" typeof="mw:File"><a
                                    href="/wiki/Archivo:Flag_of_France_(1794%E2%80%931815,_1830%E2%80%931974,_2020%E2%80%93present).svg"
                                    class="mw-file-description" title="Bandera de Francia"><img
                                        alt="Bandera de Francia"
                                        src="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg/20px-Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg.png"
                                        decoding="async" width="20" height="13" class="mw-file-element"
                                        srcset="//upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg/30px-Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg/40px-Flag_of_France_%281794%E2%80%931815%2C_1830%E2%80%931974%2C_2020%E2%80%93present%29.svg.png 2x"
                                        data-file-width="900" data-file-height="600"></a></span></span> <a
                            href="/wiki/Racing_Club_de_Lens" title="Racing Club de Lens">R. C. Lens</a>
                    </td>
                </tr>
            </tbody>
            <tfoot></tfoot>
        </table>


        <h1 class="text-teal-700 text-3xl font-bold mb-4">
            Colombia National Team Matches for the 2024 Copa América
        </h1>



        <table class="copa-america-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>City</th>
                    <th>Stage</th>
                    <th>Home</th>
                    <th>Result</th>
                    <th>Away</th>
                </tr>
            </thead>
            <tbody>
                <tr class="ganado">
                    <td>June 24</td>
                    <td>Houston</td>
                    <td>Group Stage</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg"
                            alt="Colombia">Colombia
                    </td>
                    <td>2:1 (2:0)</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/d/da/Flag_of_Paraguay.svg"
                            alt="Paraguay">Paraguay
                    </td>
                </tr>
                <tr class="ganado">
                    <td>June 28</td>
                    <td>Glendale</td>
                    <td>Group Stage</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg"
                            alt="Colombia">Colombia
                    </td>
                    <td>3:0 (1:0)</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_Costa_Rica.svg"
                            alt="Costa Rica">Costa Rica
                    </td>
                </tr>
                <tr class="empatado">
                    <td>July 2</td>
                    <td>Santa Clara</td>
                    <td>Group Stage</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/4/49/Flag_of_Brazil.svg"
                            alt="Brasil">Brasil
                    </td>
                    <td>1:1 (1:1)</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg"
                            alt="Colombia">Colombia
                    </td>
                </tr>
                <tr class="ganado">
                    <td>July 6</td>
                    <td>Glendale</td>
                    <td>Quarter-finals</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg"
                            alt="Colombia">Colombia
                    </td>
                    <td>5:0 (3:0)</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/a/a6/Flag_of_Panama.svg"
                            alt="Panamá">Panamá
                    </td>
                </tr>
                <tr class="ganado">
                    <td>July 8</td>
                    <td>Charlotte</td>
                    <td>Semifinals</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/4/49/Flag_of_Uruguay.svg"
                            alt="Uruguay">Uruguay
                    </td>
                    <td>0:1 (0:1)</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg"
                            alt="Colombia">Colombia
                    </td>
                </tr>
                <tr class="perdido">
                    <td>July 14</td>
                    <td>Miami Gardens</td>
                    <td>Final</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Flag_of_Argentina.svg"
                            alt="Argentina">Argentina
                    </td>
                    <td>1:0 (0:0, 0:0)</td>
                    <td>
                        <img class="flag"
                            src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg"
                            alt="Colombia">Colombia
                    </td>
                </tr>
            </tbody>
        </table>




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
