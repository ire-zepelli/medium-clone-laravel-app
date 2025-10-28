<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benedict Avenido - About Me</title>
    <link rel="icon" href="{{ asset('/images/benedict.png')}}" type="image/png">
    @vite('resources/css/app.css')
</head>
<body>
    @include('includes.header')
    <div class="flex items-center justify-center min-h-screen pt-19">
        <div class="flex flex-col items-start w-152 min-h-screen py-10 gap-4">
            {{-- About Me --}}
            <div>
                <div class="flex justify-between gap-4">
                    <div class="flex flex-col gap-1 align-start ">
                        <h1 class="text-5xl font-bold">Hey, I'm Benedict</h1>
                        <p class="text-xl text-gray-600 mt-4">Web Developer</p>
                    </div>
                    <a href="https://www.linkedin.com/in/benedict-avenido-758939299/" target="_blank">
                        <div class="avatar">
                            <div class="w-30 rounded-full ring-3 ring-offset-4">
                                <img src={{asset('/images/benedict.jpg')}} />
                            </div>
                        </div>
                    </a>
                </div>
                <div>
                    <h2 class="font-semibold mb-2 text-2xl">About</h2>
                    <p class="text-gray-700">
                        I’m a passionate and detail-oriented web developer currently pursuing
                        a Bachelor’s Degree in Information Technology at the University of
                        Cebu – Lapu-Lapu and Mandaue. With a strong foundation in both
                        frontend and backend development, I enjoy building responsive,
                        user-friendly, and scalable web applications.
                    </p>
                </div>
            </div>

            {{-- Education --}}
            <div class="flex flex-col items-start gap-4 w-full">
                <h2 class="text-2xl font-semibold">Education</h2>
                {{-- Info Card --}}
                <div class="flex justify-between w-full w-full">
                    <div class="flex items-start gap-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjGUL8AV7qU4DqIeFbdsdSKI9HPFPJfOKDJw&s" alt="logo" class="w-20 h-20 object-contain" />
                        <div>
                            <h3 class="text-lg font-medium">University of Cebu - Lapu-lapu and Mandaue</h3>
                            <p class="text-gray-600">Bachelor's Degree In Information Technology</p>
                        </div>
                    </div>
                    <p class="justify-end text-sm text-gray-500">2023-2027</p>
                </div>
                {{-- Info Card --}}
                <div class="flex justify-between w-full w-full">
                    <div class="flex items-start gap-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjGUL8AV7qU4DqIeFbdsdSKI9HPFPJfOKDJw&s" alt="logo" class="w-20 h-20 object-contain" />
                        <div>
                            <h3 class="text-lg font-medium">University of Cebu - Lapu-lapu and Mandaue</h3>
                            <p class="text-gray-600">Senior High School - TVL ICT Strand</p>
                        </div>
                    </div>
                    <p class="justify-end text-sm text-gray-500">2021-2023</p>
                </div>
            </div>

            {{-- Achievements --}}
            <div class="flex flex-col items-start gap-4 w-full">
                <h2 class="text-2xl font-semibold">Achievements</h2>
                {{-- Info Card --}}
                <div class="flex justify-between w-full w-full">
                    <div class="flex items-start gap-5">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTa5BeODSJnAJbQujKAq0iIKPI18EBe0Ez5pA&s" alt="logo" class="w-20 h-20 object-contain" />
                        <div>
                            <h2 class="text-lg font-medium">Hack4Gov Region 7</h3>
                                <p class="text-gray-601">7th Placer</p>
                        </div>
                    </div>
                    <p class="justify-end text-sm text-gray-501">October 2025</p>
                </div>
                {{-- Info Card --}}
                <div class="flex justify-between w-full w-full">
                    <div class="flex items-start gap-5">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtpf5Cvqe411yzPxCF_THTzq8ihLljF1d27A&s" alt="logo" class="w-20 h-20 object-contain" />
                        <div>
                            <h2 class="text-lg font-medium">CESAFI: Computer Quiz Bowl (College Division)</h3>
                                <p class="text-gray-601">1st Runner Up</p>
                        </div>
                    </div>
                    <p class="justify-end text-sm text-gray-501">March 2025</p>
                </div>
                {{-- Info Card --}}
                <div class="flex justify-between w-full w-full">
                    <div class="flex items-start gap-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjGUL8AV7qU4DqIeFbdsdSKI9HPFPJfOKDJw&s" alt="logo" class="w-20 h-20 object-contain" />
                        <div>
                            <h3 class="text-lg font-medium">11th ICT Congress: JAVA Programming Competition</h3>
                            <p class="text-gray-600">Champion</p>
                        </div>
                    </div>
                    <p class="justify-end text-sm text-gray-500">April 2025</p>
                </div>
                {{-- Info Card --}}
                <div class="flex justify-between w-full w-full">
                    <div class="flex items-start gap-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjGUL8AV7qU4DqIeFbdsdSKI9HPFPJfOKDJw&s" alt="logo" class="w-20 h-20 object-contain" />
                        <div>
                            <h3 class="text-lg font-medium">College Days: JAVA Programming Competition</h3>
                            <p class="text-gray-600">Champion</p>
                        </div>
                    </div>
                    <p class="justify-end text-sm text-gray-500">Feb 2025</p>
                </div>
                {{-- Info Card --}}
                <div class="flex justify-between w-full w-full">
                    <div class="flex items-start gap-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjGUL8AV7qU4DqIeFbdsdSKI9HPFPJfOKDJw&s" alt="logo" class="w-20 h-20 object-contain" />
                        <div>
                            <h3 class="text-lg font-medium">UCLM Intramurals: Computer Quiz Bowl</h3>
                            <p class="text-gray-600">Champion</p>
                        </div>
                    </div>
                    <p class="justify-end text-sm text-gray-500">Nov 2025</p>
                </div>
                {{-- Info Card --}}
                <div class="flex justify-between w-full w-full">
                    <div class="flex items-start gap-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjGUL8AV7qU4DqIeFbdsdSKI9HPFPJfOKDJw&s" alt="logo" class="w-20 h-20 object-contain" />
                        <div>
                            <h3 class="text-lg font-medium">CCS Battle of the Brains Competition</h3>
                            <p class="text-gray-600">2nd Placer</p>
                        </div>
                    </div>
                    <p class="justify-end text-sm text-gray-500">April 2025</p>
                </div>
            </div>

            {{-- Skills --}}
            <div class="flex flex-col items-start gap-4 w-full">
                <h2 class="text-2xl font-semibold">Skills</h2>
                <div class="flex flex-col gap-2">
                    {{-- Skill --}}
                    <h2 class="text-l font-semibold text-gray-600">Frontend Development</h3>
                        <div class="flex flex-wrap items-start gap-2">
                            <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                Typescript
                            </span>
                            <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                React
                            </span>
                            <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                Laravel
                            </span>
                            <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                NodeJS
                            </span>
                            <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                Tailwind CSS
                            </span>
                            <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                Redux
                            </span>
                        </div>

                        <h2 class="text-l font-semibold text-gray-600">Backend Development</h3>
                            <div class="flex flex-wrap items-start gap-2">
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    Express
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    PHP
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    NodeJS
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    MySQL
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    PostgreSQL
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    Firebase
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    MongoDB
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    Supabase
                                </span>
                            </div>
                </div>
            </div>

            {{-- Projects --}}
            <div class="flex flex-col items-start gap-4">
                <h2 class="text-2xl font-semibold">Projects</h2>
                <div class="flex flex-wrap justify-evenly w-full gap-2">
                    {{-- Project --}}
                    <div class="card bg-base-100 w-75 shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">MangaDot</h2>
                            <p>This project was designed to help me learn about APIs and backend development.</p>
                        </div>
                        <figure>
                            {{-- <img src={img} alt="Project" /> --}}
                        </figure>
                        <div class="flex justify-start p-2 gap-1">
                            <div class="flex flex-wrap items-start gap-2">
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    HTML
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    CSS
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    Javascript
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Project --}}
                    <div class="card bg-base-100 w-75 shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">Great Quotes</h2>
                            <p>A web app where users can post quotes anonymously and interact with others' posts.</p>
                        </div>
                        <figure>
                            {{-- <img src={img} alt="Project" /> --}}
                        </figure>
                        <div class="flex justify-start p-2 gap-1">
                            <div class="flex flex-wrap items-start gap-2">
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    React
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    Express
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    NodeJS
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    Firebase
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Project --}}
                    <div class="card bg-base-100 w-75 shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">Quizify</h2>
                            <p>Quizify is a desktop application built with Java that allows users to create, customize, and take quizzes. It’s designed for both students and educators, making it a useful tool for self-study, classroom review, and basic assessment tasks.</p>
                        </div>
                        <figure>
                            {{-- <img src={img} alt="Project" /> --}}
                        </figure>
                        <div class="flex justify-start p-2 gap-1">
                            <div class="flex flex-wrap items-start gap-2">
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    Java
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Project --}}
                    <div class="card bg-base-100 w-75 shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">ARMONIA - Internet Cafe Management System</h2>
                            <p>A Java-based app for managing internet cafe operations, including session tracking, billing, and admin controls.</p>
                        </div>
                        <figure>
                            {{-- <img src={img} alt="Project" /> --}}
                        </figure>
                        <div class="flex justify-start p-2 gap-1">
                            <div class="flex flex-wrap items-start gap-2">
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    Java
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Project --}}
                    <div class="card bg-base-100 w-75 shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">Lyndel Travel and Tours</h2>
                            <p>A website built for a travel and tour company to showcase their services and tour packages.</p>
                        </div>
                        <figure>
                            {{-- <img src={img} alt="Project" /> --}}
                        </figure>
                        <div class="flex justify-start p-2 gap-1">
                            <div class="flex flex-wrap items-start gap-2">
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    React
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    Express
                                </span>
                                <span class="bg-black text-white text-sm font-semibold px-4 py-1 rounded-lg">
                                    NodeJS
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
