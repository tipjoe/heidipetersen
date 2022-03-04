<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Heidi for Diversity</title>
        <link rel="icon" href="{{ url('images/diversity-star.gif') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased texture">
        <header>
            <nav class="flex items-center justify-around flex-wrap px-6 py-4 bg-gradient-to-r from-blue-900 to-teal-600">
                <div class="flex items-center flex-grow text-white mr-6">
                    <a href="/">
                            <img src="/images/diversity-star.gif" style="max-height: 24px; margin-right: 4px;" alt="Heidi for Diversity" />
                    </a>
                    <a href="/">
                        <span class="font-semibold text-2xl tracking-tight">Heidi for Diversity</span>
                    </a>
                </div>
                <div class="block sm:hidden">
                    <button id="mobile-menu-button" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>

                <div id="mobile-menu" class="hidden w-full block flex-grow lg:flex text-right lg:w-auto">
                    <div class="text-lg lg:flex-grow">

                        <div class="social-links mt-6 sm:mt-0 sm:mb-2 mr-4 flex justify-end sm:flex-shrink space-x-4 ">
                            <div>
                                <a href="https://www.instagram.com/heidifordiversity" target="blank">
                                    <img src="/images/social-instagram-white-icon.png" class="h-8">
                                </a>
                            </div>
                            <div>
                                <a href="https://www.facebook.com/heidifordiversity" target="blank">
                                    <img src="/images/social-facebook-white-icon.png" class="h-8">
                                </a>
                            </div>
                        </div>

                        <a href="/contact" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                           Contact
                        </a>
                        <a href="/diversity-and-inclusion-services" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                           D&I Services
                        </a>
                    </div>
                </div>
                </nav>
        </header>
        <div class="container m-auto w-full">
            @yield('content')
        </div>
        <script>
            const btn = document.querySelector("button#mobile-menu-button");
            const menu = document.querySelector("#mobile-menu");
            // Add Event Listeners
            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
    </body>
</html>
