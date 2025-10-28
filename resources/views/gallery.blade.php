<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benedict Avenido - Gallery</title>
    <link rel="icon" href="{{ asset('/images/benedict.png')}}" type="image/png">
    @vite('resources/css/app.css')
</head>
<body>
    @include('includes.header')
    <div class="flex items-center justify-center min-h-screen pt-19">
        <div class="flex flex-col items-start w-180 min-h-screen py-10">
            <h1 class="text-[40px] font-black">My Gallery</h1>
            <p class="text-lg mb-4">A collection of my favorite photos and moments.</p>

            <div class="flex items-center gap-4">
                {{-- Avatar --}}
                <div class="avatar">
                    <div class="w-10 rounded-full">
                        <img src="{{ asset('/images/benedict.jpg') }}" />
                    </div>
                </div>

                <p>
                    <span class="font-bold">
                        Benedict Avenido
                    </span>
                    |
                    5 min read
                    |
                    October 27, 2025
                </p>
            </div>

            <hr class="my-6 w-full text-gray-400" />
            {{-- Content --}}
            <div class="text-xl">
                {{-- Photo 1 --}}
                <h2 class="font-black pb-5">Introduction</h2>
                <p class="pb-5">I was scrolling through my photos for this project and realized something important, at least for me. I only ever take pictures when I'm with my girlfriend. I dont really take photos of myself or document my days. But whenever I do take photos, they are often with her. It may sound a little cheesy but i think it really says something about how i see and value moment. </p>
                <p class="pb-5">So in this writeup, I want to share some of my favorite photos that capture the moments weve shared together.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-2.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-3.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-4.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-5.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-6.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-7.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-8.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-9.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-10.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-11.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-12.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>


                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-13.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>


                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-14.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                    <div class="bg-gray-100 h-150 overflow-hidden">
                        <img src="{{ asset('/images/date-15.png') }}" alt="Hack 4 Gov" class="w-full h-full object-cover" />
                    </div>

                </div>


            </div>


        </div>
    </div>
    @include('includes.footer')
</body>
</html>
