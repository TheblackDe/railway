<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Spencer Sharp
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <header class="flex justify-between items-center p-6">
        <img alt="Profile picture" class="rounded-full w-10 h-10" height="40"
            src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-Hh5RPsKhtBPsWCFSiEKnUJ6x/user-8qgiVpCV0U0b7zDjfFInHgjl/img-bn0UQxeuAxTPFu6L3v1u4SRC.png?st=2024-09-06T02%3A16%3A14Z&amp;se=2024-09-06T04%3A16%3A14Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-05T21%3A24%3A13Z&amp;ske=2024-09-06T21%3A24%3A13Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=J7SAanYPPxD9gmgy0Hr%2B3H/EI6xxwcXLBmlkL4Yw6EU%3D"
            width="40" />
        <nav class="flex space-x-6">
            <a class="text-gray-400 hover:text-white" href="{{ route('noticias.index') }}">
                About</a>
            <a class="text-gray-400 hover:text-white" href="">Leer artículo</a>
            <a class="text-gray-400 hover:text-white" href="#">
                Articles
            </a>
            <a class="text-gray-400 hover:text-white" href="#">
                Articles
            </a>
        </nav>
        <i class="fas fa-moon text-gray-400 hover:text-white">
        </i>
    </header>
    <main class="max-w-4xl mx-auto p-6">
        <div class="flex flex-col md:flex-row items-start md:items-center">
            <div class="md:w-2/3">
                <h1 class="text-5xl font-bold mb-6">
                    I’m Spencer Sharp. I live in New York City, where I design the future.
                </h1>
                <p class="text-gray-400 mb-4">
                    I’ve loved making things for as long as I can remember, and wrote my first program when I was 6
                    years old, just two weeks after my mom brought home the brand new Macintosh LC 550 that I taught
                    myself to type on.
                </p>
                <p class="text-gray-400">
                    The only thing I loved more than computers as a kid was space. When I was 8, I climbed the 40-foot
                    oak tree at the back of our yard while wearing my older sister’s motorcycle helmet, counted down
                    from three, and jumped — hoping the tree was tall enough that with just a bit of...
                </p>
            </div>
            <div class="md:w-1/3 md:ml-6 mt-6 md:mt-0">
                <img alt="Person wearing a space helmet" class="rounded-lg" height="400" src="image/walker__3.png"
                    width="300" />
            </div>
        </div>
    </main>
</body>

</html>
