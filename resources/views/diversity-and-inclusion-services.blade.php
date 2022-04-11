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
                In Utah, we have a unique past and culture. Many are
                accustomed to being surrounded by people with similar beliefs,
                backgrounds, ethnicities, and lifestyles. Our demographics
                are changing rapidly.
            </p>
            <p class="mb-4">
                This can be an exciting opportunity to grow into
                <i>strength through diversity</i>. It can also be a source
                of uncertainty, fear, and mistakes.
            </p>
            <p class="mb-4">
                I'm Heidi Petersen, an advocate and trainer. I
                help people understand, appreciate, and practice
                <i>strength through diversity</i> by building on shared values
                for creating safe and welcoming spaces.
            </p>
            <p class="mb-4">
                This takes the form of tailored presentations and workshops
                to your specific situation and objectives.
            </p>
            <p class="mb-4">
                Whether your organization is large or small, if you would
                like to discuss how we might work
                together, please <a class="text-blue-500" href="/contact">contact me</a>.
            </p>
            <p class="mb-4">
                Regards,
                <br><br>
                <i>Heidi</i>
            </p>
        </div>

        <div class="text-center mt-8 mb-6 text-2xl mx-4 sm:mx-0">
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
