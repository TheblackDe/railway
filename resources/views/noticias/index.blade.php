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
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <header class="flex justify-between items-center p-6">
        <img alt="Profile picture" class="rounded-full w-10 h-10" height="40"
            src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-Hh5RPsKhtBPsWCFSiEKnUJ6x/user-8qgiVpCV0U0b7zDjfFInHgjl/img-bn0UQxeuAxTPFu6L3v1u4SRC.png?st=2024-09-06T02%3A16%3A14Z&amp;se=2024-09-06T04%3A16%3A14Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-05T21%3A24%3A13Z&amp;ske=2024-09-06T21%3A24%3A13Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=J7SAanYPPxD9gmgy0Hr%2B3H/EI6xxwcXLBmlkL4Yw6EU%3D"
            width="40" />
        <nav class="flex space-x-6">
            <a class="text-gray-400 hover:text-white" href="">Leer artículo</a>
            <a class="text-gray-400 hover:text-white" href="#">Articles</a>
            <a class="text-gray-400 hover:text-white" href="#">Articles</a>
        </nav>
        <i class="fas fa-moon text-gray-400 hover:text-white"></i>
    </header>
    <main class="px-6">
        <section class="max-w-4xl mx-auto mt-12">
            <h1 class="text-5xl font-bold leading-tight">Writing on software design, company building, and the aerospace
                industry.</h1>
            <p class="text-xl text-gray-400 mt-4">All of my long-form thoughts on programming, leadership, product
                design, and more, collected in chronological order.</p>
        </section>
        <section class="max-w-4xl mx-auto mt-12">
            <article class="border-t border-gray-700 pt-6">
                <p class="text-gray-400">September 5, 2022</p>
                <h2 class="text-2xl font-bold mt-2">Crafting a design system for a multiplanetary future</h2>
                <p class="text-gray-400 mt-2">Most companies try to stay ahead of the curve when it comes to visual
                    design, but for Planetaria we needed to create a brand that would still inspire us 100 years from
                    now when humanity has spread across our entire solar system.</p>
                <a class="text-teal-400 mt-2 inline-block" href="{{ route('noticias.article_1') }}">Read article ›</a>
            </article>
            <article class="border-t border-gray-700 pt-6 mt-6">
                <p class="text-gray-400">September 2, 2022</p>
                <h2 class="text-2xl font-bold mt-2">Introducing Animaginary: High performance web animations</h2>
                <p class="text-gray-400 mt-2">When you're building a website for a company as ambitious as Planetaria,
                    you need to make an impression. I wanted people to visit our website and see animations that looked
                    more realistic than reality itself.</p>
                <a class="text-teal-400 mt-2 inline-block" href="{{ route('noticias.article_2') }}">Read article ›</a>
            </article>
        </section>
    </main>
    <footer class="bg-gray-800 py-6 mt-12">
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
                <a href="#" class="text-gray-400 hover:text-white mx-2">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white mx-2">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>
