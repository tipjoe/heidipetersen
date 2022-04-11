@extends('layouts.app')
@section('content')
    <div class="relative items-top min-h-screen py-6 times m-auto max-w-2xl">
        <div class="text-6xl text-center m-auto w-48 md:w-auto">
            Strength
            <span class="text-4xl" style="position: relative; top: -5px;">Through</span>
            Diversity
        </div>
        <div class="video-frame text-xl text-center mt-8 m-auto">
            <iframe width="560" height="315" class="max-w-full m-auto" src="https://www.youtube.com/embed/2zwbYYUvjl4" title="Heidi Petersen - Strength Through Diversity" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
            <strong>Heidi Petersen</strong><br>
            Diversity Advocate and Trainer<br>
            Mrs. Sandy City, 2022
        </div>
        <div class="text-left mt-2 p-4 text-2xl">
            I help organizations understand the many dimensions of diversity,
            building on our shared values to promote safety and inclusion.
        </div>

        <div class="mt-4 mb-4 px-4 text-center">Follow Heidi on Instagram or Facebook.</div>
        <div class="social-links flex justify-center space-x-8 mb-8">
            <div>
                <a href="https://www.instagram.com/heidifordiversity" target="blank">
                    <img src="/images/social-instagram-icon.png">
                </a>
            </div>
            <div>
                <a href="https://www.facebook.com/heidifordiversity" target="blank">
                    <img src="/images/social-facebook-icon.png">
                </a>
            </div>
        </div>

        <div class="text-center mt-8 mb-6 text-2xl mx-4 sm:mx-0">
            <a href="/diversity-and-inclusion-services"
                class="bg-teal-700 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded my-4 block">
                Diversity and Inclusion Services
            </a>

            <a href="/contact"
                class="bg-teal-700 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded my-4 block">
                Contact Me
            </a>

            <a href="/pageant" class="text-sm text-blue-600 visited:text-blue-800">
                Mrs. Utah 2022 Pageant Info
            </a>
        </div>

    </div>
@endsection
