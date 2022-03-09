@extends('layouts.app')
@section('content')
    <div class="relative items-top min-h-screen py-6 times m-auto max-w-2xl text-xl">
        <div class="text-6xl text-center m-auto w-48 md:w-auto">
            Strength
            <span class="text-4xl" style="position: relative; top: -5px;">Through</span>
            Diversity
        </div>
        <div class="text-left px-4 mt-8 text-gray-500">
            <p class="mb-4">
                <b class="text-black text-2xl">In Utah, we have a unique past and culture. </b>Many are
                accustomed to being surrounded by people with similar beliefs,
                backgrounds, ethnicities, and lifestyles. <b class="text-black text-2xl">Our demographics
                are changing rapidly.</b>
            </p>
            <p class="mb-4">
                This can be an <b class="text-black text-2xl">exciting opportunity to grow into
                <i>strength through diversity</i>.</b> It can also be a source
                of uncertainty, fear, and mistakes.
            </p>
            <p class="mb-4">
                I'm Heidi Petersen, an advocate and trainer. <b class="text-black text-2xl">I
                help people understand, appreciate, and practice
                <i>strength through diversity</i></b> by building on shared values
                for creating safe and welcoming spaces.
            </p>
            <p class="mb-4">
                This takes the form of <b class="text-black text-2xl">tailored presentations and workshops</b>
                to your specific situation and objectives.
            </p>
            <p class="mb-4">
                Whether your organization is large or small, if you would
                like to <b class="text-black text-2xl">discuss how we might work
                together, please <a class="text-blue-500" href="/contact">contact me</a></b>.
            </p>
            <p class="mb-4">
                Regards,
                <br><br>
                <i>Heidi</i>
            </p>
        </div>

        <div class="text-center my-8">
            <img src="/images/heidi.jpg?v=2" class="inline drop-shadow-xl rounded mb-2" style="height: 24rem;" />
            <br>
            <strong>Heidi Petersen</strong><br>
            Diversity Advocate and Trainer<br>
            Mrs. Sandy City, 2022
        </div>
        <div class="text-center mt-8 mb-6 text-2xl mx-2 sm:mx-0">
            <a href="/contact"
                class="bg-teal-700 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded my-4 block">
                Contact Me
            </a>
        </div>

    </div>
@endsection
