@extends('layouts.app')
@section('content')
    <div class="relative items-top min-h-screen py-6 times m-auto max-w-2xl text-xl">
        <div class="text-6xl text-center m-auto w-48 md:w-auto">
            Strength
            <span class="text-4xl" style="position: relative; top: -5px;">Through</span>
            Diversity
        </div>
        <div class="text-left px-4 mt-8">
            <p class="mb-4">
                In March, I represented Sandy City in the 2022 Mrs. Utah Pageant.
                My goal is to use this platform to promote a message of
                <i>Strength Through Diversity</i> in our community!
            </p>
            <p class="mb-4">
                <img src="/images/pageant-top-10.jpg"
                    class="inline drop-shadow-xl rounded mb-2 w-full" />
            </p>
            <p class="mb-4">
                <img src="/images/pageant-special-awards.jpg"
                    class="inline drop-shadow-xl rounded mb-2 w-full" />
            </p>
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
        </div>

        <div class="text-center my-4">
            <img src="/images/Heidi-Petersen-Mrs-Sandy-City-2022.jpg"
                class="inline drop-shadow-xl rounded mb-2 h-104 px-4 sm:p-0" />
            <br>
            <strong>Heidi Petersen</strong><br>
            Diversity Advocate and Trainer<br>
            Mrs. Sandy City, 2022
        </div>

    </div>
@endsection
