@extends('layouts.app')
@section('content')
    <div class="relative items-top min-h-screen py-6 times">
        <div class="text-6xl text-center">
            Strength<br>
            <span class="text-4xl" style="position: relative; top: -5px;">Through</span><br>
            Diversity
        </div>
        <div class="text-center mt-8 mb-2">
            <img src="/images/heidi.jpg" class="inline drop-shadow-xl rounded mb-2" />
            <br>
            <strong>Heidi Petersen</strong><br>
            Diversity Advocate and Trainer<br>
            Mrs. Sandy City, 2022
        </div>
        <div class="text-left mt-8 p-4 text-2xl">
            I help organizations understand the many dimensions of diversity,
            building on our shared values to promote safety and inclusion.
        </div>
        <div class="text-center mt-8 mb-6 text-2xl">
            <a href="/diversity-and-inclusion-services"
                class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded my-4 block">
                Diversity and Inclusion Services
            </a>

            <a href="/contact"
                class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded my-4 block">
                Contact Me
            </a>
        </div>
    </div>
@endsection
