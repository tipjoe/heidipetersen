@extends('layouts.app')
@section('content')
    <div class="relative items-top min-h-screen py-6 times m-auto max-w-2xl">
        <div class="text-6xl text-center m-auto w-48 md:w-auto">
            Strength
            <span class="text-4xl" style="position: relative; top: -5px;">Through</span>
            Diversity
        </div>
        <div class="video-frame text-center mt-8 m-auto">
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

        <div id="pageant-announcement" class="m-4 p-4 rounded text-2xl">
            <strong style="font-size: 1.5rem; text-align:center; display: block; margin-bottom: 10px;">Mrs. Utah America Tickets Now Available</strong>
            <div style="font-size: .75em">
                <div class="my-2">
                    <b>When:</b> Saturday, March 26th at 6:00 PM
                    <br>
                    <b>Where:</b> Participate in person at Weber State University (Ogden) or watch via Live Stream.
                </div>

                <div style="margin-top: 24px; text-align: center; background-color: #FDAA3A;">In Person Tickets</div>
                Adults: $25 + fees
                <br>
                Children (3-12): $10 + fees
                <br>
                Children under 2: Free
                <br>
                (Use code <i>MUAP+Heidi</i> for $5 off)
                <div class="my-4 text-center">
                    <a href="https://weber.evenue.net/cgi-bin/ncommerce3/SEGetEventList?groupCode=PAG&linkID=weber-multi&shopperContext=&caller=&appCode=" target="_blank"
                        class="bg-teal-700 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded my-4">
                        Purchase
                    </a>
                </div>


                <div style="margin-top: 24px; text-align: center; background-color: #FDAA3A;">Live Stream Tickets</div>
                Watch Online: $25
                <div class="mt-4 mb-6 text-center">
                    <a href="https://www.22ave.tv/utahamerica.html" target="_blank"
                        class="bg-teal-700 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded my-4">
                        Purchase
                    </a>
                </div>
                <div class="text-center" style="font-size: 1.2em;">
                    <b>Thank you to my family, friends, and sponsors for your love and support!</b>
                </div>
            </div>
        </div>

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

        <div class="text-center text-xl my-8">
            <img src="/images/heidi.jpg?v=2" class="inline drop-shadow-xl rounded mb-2" style="height: 24rem;" />
            <br>
            <strong>Heidi Petersen</strong><br>
            Diversity Advocate and Trainer<br>
            Mrs. Sandy City, 2022
        </div>
    </div>
@endsection
