<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benedict Avenido - Home</title>
    <link rel="icon" href="{{ asset('/images/benedict.png')}}" type="image/png">
    @vite('resources/css/app.css')
</head>
<body">
    @include('includes.header')
    <div class="flex items-center justify-center min-h-screen">
        <div class="flex flex-col items-start w-180 min-h-screen py-10 mt-19">
            <h1 class="text-[40px] font-black mb-4 pb-4">What is Laravel and How to Setup</h1>
            <p></p>

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
                <p class="pb-5">Greeting folks, My name is Benedict Avenido, and I'm a web developer with a passion for creating dynamic and user-friendly applications. In this article, I'll be discussing Laravel, a powerful PHP framework that has become a favorite among developers for building modern web applications.</p>

                <h2 class="font-black pb-5">What is Laravel?</h2>


                <p class="pb-5">Laravel is a web application framework with expressive, elegant syntax. It is designed for developers who need a simple and elegant toolkit to create full-featured web applications.</p>

                <div class="bg-gray-100 h-50 overflow-hidden">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAZTRctx5rLZ0Tyd03eHDI27fwWlC-AVzkwQ&s" alt="Laravel Logo" class="w-full h-full object-cover" />
                </div>
                <p class="p-2 text-center text-base text-gray-500">laravel-framework.png</p>


                <h2 class="font-black pb-5">Prerequisites</h2>

                <p class="pb-5">Before you install Laravel 12, ensure you have the following prerequisites installed on your machine:</p>
                <ol class="list-disc list-inside pb-5">
                    <li>PHP: Laravel 12 requires PHP 8.2 or higher.</li>
                    <li>Composer: Laravel uses Composer to manage its dependencies.</li>
                    <li>Node: npm uses for frontend manage its dependencies.</li>
                    <li>Web Server: Apache or Nginx is recommended.</li>
                    <li>Database: MySQL, PostgreSQL, SQLite, or SQL Server.</li>
                </ol>

                <h2 class="font-black mb-5">Step 1: Install Laravel</h2>
                <div class="mockup-code w-full bg-primary mb-5" data-theme="black">
                    <pre data-prefix="~$"><code>composer global require laravel/installer</code></pre>
                </div>

                <h2 class="font-black mb-5">Step 2: Create A Project</h2>
                <div class="mockup-code w-full bg-primary mb-5" data-theme="black">
                    <pre data-prefix="~$"><code>laravel new example-app</code></pre>
                </div>

                <h2 class="font-black mb-5">Step 3: CD To Project</h2>
                <div class="mockup-code w-full bg-primary mb-5" data-theme="black">
                    <pre data-prefix="~$"><code>cd example-app</code></pre>
                </div>

                <h2 class="font-black mb-5">Step 4: Run the app</h2>
                <div class="mockup-code w-full bg-primary mb-5" data-theme="black">
                    <pre class="ml-4" data-prefix="~/example-app$"><code class="ml-18">composer run dev</code></pre>
                </div>

                <p class="pb-5">That's it! You have successfully set up a Laravel 12 application. You can now start building your web application using Laravel's powerful features and tools.</p>
            </div>
            @include('includes.footer')
        </div>

        </body>
</html>
