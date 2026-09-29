<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Blåsbo Transport AB')</title>
    <meta name="description" content="@yield('description', 'Blåsbo Transport AB – transporter, lokaler, lager och service i Västerås.')">

    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')

    <script
        src="https://challenges.cloudflare.com/turnstile/v0/api.js"
        async
        defer>
    </script>

</head>

<body class="bg-slate-50 text-slate-800 antialiased">
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-slate-200 bg-slate-950 text-slate-300">
        <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
            <div class="grid gap-10 md:grid-cols-3">
                <div>
                    <p class="text-lg font-bold text-white">Blåsbo Transport AB</p>
                    <p class="mt-3 max-w-sm text-sm leading-6 text-slate-400">
                        Transporter, lokaler, lager och service. Vi hjälper företag med både små och stora uppdrag.
                    </p>
                </div>

                <div>
                    <p class="font-semibold text-white">Kontakt</p>
                    <address class="mt-3 space-y-2 text-sm not-italic text-slate-400">
                        <p>Friledningsgatan 3b, 721 37 Västerås</p>
                        <p><a class="transition hover:text-white" href="tel:+46705900061">070-590 00 61</a></p>
                        <p><a class="transition hover:text-white" href="mailto:info@blasbotransport.se">info@blasbotransport.se</a></p>
                    </address>
                </div>

                <div>
                    <p class="font-semibold text-white">Snabblänkar</p>
                    <nav class="mt-3 flex flex-col gap-2 text-sm text-slate-400">
                        <a class="transition hover:text-white" href="#om-oss">Om oss</a>
                        <a class="transition hover:text-white" href="#tjanster">Våra tjänster</a>
                        <a class="transition hover:text-white" href="#kontakt">Kontakta oss</a>
                    </nav>
                </div>
            </div>

            <div class="mt-10 flex flex-col gap-2 border-t border-slate-800 pt-6 text-xs text-slate-500 sm:flex-row sm:items-center sm:justify-between">
                <p>&copy; {{ date('Y') }} Blåsbo Transport AB</p>
                <p>Org.nr 556512-6397</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>

</html>