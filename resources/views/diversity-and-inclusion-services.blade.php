@extends('layouts.app')
@section('content')
    <div class="relative items-top min-h-screen p-6 times text-xl">
        <div class="text-6xl text-center mb-6">
            Strength<br>
            <span class="text-4xl" style="position: relative; top: -5px;">Through</span><br>
            Diversity
        </div>

        <div class="text-left px-4">
            <p class="mb-4">
                Even when it's a stated goal, embracing diversity and inclusion
                can be challenging. Some may see aspects of it as political or
                as a threat to their identities. Others may be inspired but feel
                unsure how to act on it.
            </p>
            <p class="mb-4">
                I'm Heidi Petersen, an advocate and trainer. My goal is to
                help people understand, appreciate, and practice developing
                strength through diversity.
            </p>
            <p class="mb-4">
                I can help your group or organization (large or small) build on
                the shared values that unite us.
                This takes the form of presentations and workshops tailored
                to your specific situation and objectives.
            </p>
            <p class="mb-4">
                If you would like to discuss how we might do this together,
                please <a href="/contact">contact me</a>.
            </p>
            <p class="mb-4">
                Regards,
                <br>
                <i>Heidi</i>
            </p>
        </div>

        <div class="text-center my-8">
            <img src="/images/heidi.jpg" class="inline drop-shadow-xl rounded mb-2 h-48" />
            <br>
            <strong>Heidi Petersen</strong><br>
            Diversity Advocate and Trainer<br>
            Mrs. Sandy City, 2022
        </div>
        <div class="text-center mt-8 mb-6 text-2xl">
            <a href="/contact"
                class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded my-4 block">
                Contact Me
            </a>
        </div>

    </div>
@endsection
