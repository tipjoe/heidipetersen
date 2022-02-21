@extends('layouts.app')
@section('content')
    <div class="relative items-top min-h-screen py-6 times m-auto max-w-2xl">
        <div class="text-6xl text-center m-auto w-48 md:w-auto">
            Strength
            <span class="text-4xl" style="position: relative; top: -5px;">Through</span>
            Diversity
        </div>
        <div class="video-frame text-center mt-8 m-auto">
            <iframe width="560" height="315" class="max-w-full m-auto" src="https://www.youtube.com/embed/kys0_y4bDkI" title="Heidi Petersen - Strength Through Diversity" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            {{-- <img src="/images/heidi.jpg" class="inline drop-shadow-xl rounded mb-2" /> --}}
            <br>
            <strong>Heidi Petersen</strong><br>
            Diversity Advocate and Trainer<br>
            Mrs. Sandy City, 2022
        </div>
        <div class="text-left mt-2 p-4 text-2xl">
            I help organizations understand the many dimensions of diversity,
            building on our shared values to promote safety and inclusion.
        </div>
        {{-- <div class="text-center my-6 text-2xl"> --}}
        <div class="text-center mt-8 mb-6 text-2xl mx-2 sm:mx-0">
            <a href="/diversity-and-inclusion-services"
                class="bg-teal-700 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded my-4 block">
                Diversity and Inclusion Services
            </a>

            <a href="/contact"
                class="bg-teal-700 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded my-4 block">
                Contact Me
            </a>
        </div>
    </div>
@endsection
