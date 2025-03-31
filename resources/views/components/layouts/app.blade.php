<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Primary Meta Tags -->
        <meta name="title" content="Rubicon | Transformación Digital para Medianas y Grandes Empresas">
        <meta name="description" content="Rubicon ofrece soluciones integrales para optimizar flujos de caja, gestión de inventarios, sistemas QR y automatización de procesos. Mejoramos la experiencia de usuario en sistemas empresariales.">
        <meta name="robots" content="index, follow">
        {{-- <meta name="keywords" content="automatización empresarial, flujos de caja, gestión de inventarios, sistemas QR, transformación digital, experiencia de usuario empresarial, Rubicon, optimización de procesos"> --}}
        <meta name="author" content="Rubicon">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://rubicon-solutions.com/">
        <meta property="og:title" content="Rubicon | Soluciones Empresariales para Automatización y Eficiencia">
        <meta property="og:description" content="Expertos en consolidación de flujos de caja, gestión de inventarios y automatización de procesos para medianas y grandes empresas.">
        <meta property="og:image" content="https://rubicon-solutions.com/images/og-image.jpg">
        
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://rubicon-solutions.com/">
        <meta property="twitter:title" content="Rubicon | Transformación Digital para Empresas">
        <meta property="twitter:description" content="Soluciones tecnológicas para optimizar procesos empresariales, flujos de caja y gestión de inventarios con sistemas QR y automatización.">
        <meta property="twitter:image" content="https://rubicon-solutions.com/images/og-image.jpg">
        
        <!-- Canonical URL -->
        <link rel="canonical" href="https://rubicon-solutions.com/">

        <meta name="theme-color" content="#000000">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/favicon.png">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        
        <!-- Preload critical resources -->
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap"></noscript>

        <title>{{ $title ?? 'Amarres y endulzamientos' }}</title>
        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body>
        {{ $slot }}
        <footer class="mt-32 bg-red-300" >
            <div class="max-w-lg mx-auto">
                <div class="flex py-12 justify-center text-white items-center px-20 sm:px-36">
                    <div class="relative">
                        <h1 class="font-bold text-xl pr-5 relative z-50">A&E</h1>
                        <img src="img/corazon-logo.png" class="h-11 z-40 absolute -top-2 -left-5">

                    </div>
                    <span class="border-l border-gray-500 text-sm pl-5 py-2 font-semibold">&copy; 2025 Class Technologies Inc.</span>
                </div>
                <div class="text-center pb-16 pt-5">
                    <label class="text-gray-300 font-semibold"></label>
                    <div class="px-5 sm:px-0 flex flex-col sm:flex-row sm:space-x-3 space-y-3 sm:space-y-0 justify-center mt-3">
                        <input type="email" placeholder="Your Email" class="rounded-full py-2 pl-5 bg-transparent border border-gray-400">
                        <button type="submit" class="text-white w-40 sm:w-auto mx-auto sm:mx-0 font-semibold px-5 py-2 rounded-full" style="background: linear-gradient(105.5deg, #545AE7 19.57%, #393FCF 78.85%);">Subscribe</button>
                    </div>
                </div>
                {{-- <div class="flex items-center text-gray-400 text-sm justify-center">
                    <a href="" class="pr-3">Careers</a>
                    <a href="" class="border-l border-gray-400 px-3">Privacy</a>
                    <a href="" class="border-l border-gray-400 pl-3">Terms & Conditions</a>
                </div> --}}
            </div>
        </footer>
        @livewireScripts
    </body>
</html>
