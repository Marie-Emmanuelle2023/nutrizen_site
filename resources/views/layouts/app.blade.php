<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Contact')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>

<body class="bg-white min-h-screen">
    <nav class="shadow" style="background-color: #49C840;">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-black">Nutrizen</a>
            <div class="flex space-x-5">
                <a href="/" class="text-black hover:underline">Accueil</a>
                <a href="/contacter" class="text-black hover:underline">Contact</a>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="relative w-full mt-16">
        <div class="w-full py-12 flex flex-col md:flex-row justify-between items-center px-8 md:px-24" style="background-color: #49C840">
            <div class="mb-8 md:mb-0">
                <span class="font-bold text-xl text-black">NutriZen</span>
            </div>
            <div class="flex flex-col md:flex-row gap-8 md:gap-12">
                <div class="flex flex-col gap-2">
                    <span class="font-bold text-xl text-black">NutriZen</span>
                    <a href="#" class="text-white text-lg font-medium">Accueil</a>
                    <a href="#" class="text-white text-lg font-medium">Contact</a>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="font-bold text-xl text-black">Découvrir</span>
                    <a href="#" class="text-white text-lg font-medium">Notre Equipe</a>
                    <a href="#" class="text-white text-lg font-medium">Valeurs</a>
                    <a href="#" class="text-white text-lg font-medium">FAQ</a>
                </div>
            </div>
        </div>
        <div class="w-full bg-black py-4 flex justify-center items-center">
            <span class="text-white text-md font-bold">Copyright©2025 NutriZen Company. Tous droits réservés</span>
        </div>
    </footer>
</body>

</html>
