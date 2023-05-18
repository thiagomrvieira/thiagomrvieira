<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thiago M.R. Vieira</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-gray-100 dark:bg-gray-900 selection:bg-blue-500 selection:text-white">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div>
                        <h2 class="mt-2 text-xl font-semibold text-gray-600 dark:text-white">
                            Hi, I'm Thiago Vieira
                        </h2>

                        <div class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            <p>
                                I'm a Full Stack Developer focused in (PHP + Laravel = ❤️), Vue.js, Livewire and other technologies related to the laravel ecosystem.
                            </p>
                            <p class="mt-4">
                                This website is a work in progress. I hope the next time you visit us, I have something new to show you.
                            </p>
                            <p class="mt-4">
                                You can contact me by sending an email to: thiagomrvieira@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
