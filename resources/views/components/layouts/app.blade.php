<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Primary Meta Tags -->
        <meta name="title" content="Amarres de Amor | Soluciones Espirituales para Problemas Afectivos">
        <meta name="description" content="Amarres de amor efectivos y rituales espirituales para recuperar a su ser querido con sabiduría ancestral.">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Amarres de Amor y Endulzamiento">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://amarresdeamoryendulzamiento.com/">
        <meta property="og:title" content="Amarres de Amor | Soluciones Espirituales para Problemas Afectivos">
        <meta property="og:description" content="Especialistas en amarres de amor, conjuros efectivos, rituales para mejorar su productividad y limpiezas para purificar energías negativas.">
        {{-- <meta property="og:image" content="https://amarresdeamoryendulzamiento.com/images/og-image.jpg"> --}}

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://amarresdeamoryendulzamiento.com/">
        <meta property="twitter:title" content="Amarres de Amor | Traiga de Vuelta a su Ser Querido">
        <meta property="twitter:description" content="Soluciones espirituales efectivas: amarres de amor, conjuros, rituales para productividad y limpiezas para purificar energías negativas.">
        {{-- <meta property="twitter:image" content="https://amarresdeamoryendulzamiento.com/images/og-image.jpg"> --}}

        <!-- Canonical URL -->
        <link rel="canonical" href="https://amarresdeamoryendulzamiento.com/">

        <meta name="google-site-verification" content="gzyKSwp17XcgUfwMjnqElW416adnFYBXxoTDRAyZIzE" />
        <meta name="theme-color" content="#000000">
        
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ Storage::disk('private')->temporaryUrl('img/favicon.ico', now()->addMinutes(30)) }}">
        <link rel="apple-touch-icon" href="{{ Storage::disk('private')->temporaryUrl('img/favicon.ico', now()->addMinutes(30)) }}"> 

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16997020947"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-16997020947');
        </script>

        <!-- Event snippet for Clic saliente conversion page -->
        <script>
            gtag('event', 'conversion', {
                'send_to': 'AW-16997020947/SjmSCNW-_bYaEJPq56g_',
                'value': 1.0,
                'currency': 'COP'
            });
        </script>
        

        
        <!-- Preload critical resources -->
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap"></noscript>

        <title>Amarres de Amor | Soluciones Espirituales para Problemas Afectivos</title>
        <!-- Event snippet for Clic saliente conversion page -->
        <script>
            gtag('event', 'conversion', {
                'send_to': 'AW-16997020947/SjmSCNW-_bYaEJPq56g_',
                'value': 1.0,
                'currency': 'COP'
            });
        </script>
  
        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body>
        {{ $slot }}
        <footer class="mt-32 bg-red-300" >
            <div class="max-w-lg mx-auto">
                <div class="flex py-12 justify-center text-white items-center px-20 sm:px-36">
                    <div class="relative">
                        <h2 class="font-bold text-xl pr-5 relative z-40">A&E</h2>
					    {{-- <img src="{{ Storage::disk('private')->temporaryUrl('img/corazon-logo.png', now()->addMinutes(30)) }}" class="h-11 z-30 absolute -top-2 -left-5"> --}}

                    </div>
                    <span class="border-l border-gray-500 text-sm pl-5 py-2 font-semibold">&copy; 2025 Med Technologies Inc.</span>
                </div>
                <div class="text-center pb-16 pt-5">
                    <label class="text-gray-300 font-semibold"></label>
                    <div class="px-5 sm:px-0 flex flex-col sm:flex-row sm:space-x-3 space-y-3 sm:space-y-0 justify-center mt-3">
                    </div>
                </div>
            </div>
        </footer>
        @livewireScripts
    </body>
</html>
