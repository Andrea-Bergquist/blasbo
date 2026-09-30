@extends('layouts.master')

@section('title', 'Blåsbo Transport AB – Transporter, lokaler och service')
@section('description', 'Blåsbo Transport AB i Västerås erbjuder transporter, lokaler, lager och service för företag.')

@section('content')

{{-- Hero --}}
<section id="hem" class="relative isolate overflow-hidden bg-slate-950">
    <div class="absolute inset-0">
        <img src="{{ asset('img/transportation.gif') }}" alt="" class="h-full w-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/90 to-slate-900/50"></div>
    </div>

    <div class="relative mx-auto grid min-h-[620px] max-w-7xl items-center gap-12 px-6 py-24 lg:grid-cols-2 lg:px-8">
        <div class="max-w-2xl">
            <span class="inline-flex items-center rounded-full border border-white/15 bg-white/10 px-4 py-2 text-sm font-medium text-blue-100 backdrop-blur">
                Transport • Fastigheter • Service
            </span>

            <h1 class="mt-6 text-4xl font-black tracking-tight text-white sm:text-5xl lg:text-6xl">
                Vi får jobbet
                <span class="text-blue-400"> gjort.</span>
            </h1>

            <p class="mt-6 max-w-xl text-lg leading-8 text-slate-300">
                Blåsbo Transport AB har arbetat med transporter sedan början av 90-talet.
                Idag hjälper vi företag med transporter, lokaler, lager och praktiska servicetjänster.
            </p>

            <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                <a href="#kontakt" class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-6 py-3.5 font-semibold text-white shadow-lg shadow-blue-950/30 transition hover:bg-blue-500">
                    Be om offert
                    <span class="ml-2">→</span>
                </a>
                <a href="#tjanster" class="inline-flex items-center justify-center rounded-xl border border-white/20 bg-white/5 px-6 py-3.5 font-semibold text-white backdrop-blur transition hover:bg-white/10">
                    Se våra tjänster
                </a>
            </div>
        </div>

        <div class="hidden lg:block">
            <div class="ml-auto max-w-md overflow-hidden rounded-3xl border border-white/10 bg-white/10 p-1 shadow-2xl backdrop-blur">
                <img src="{{ asset('img/btab.png') }}" alt="Blåsbo Transport AB" class="h-72 w-full object-cover rounded-3xl bg-white p-1">
            </div>
        </div>
    </div>
</section>

{{-- Intro --}}
<section class="bg-white">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[1fr_1.5fr] lg:items-center">
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-blue-700">Blåsbo Transport AB</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                    En partner för vardagens praktiska behov
                </h2>
            </div>
            <div class="text-lg leading-8 text-slate-600">
                <p>
                    Vi arbetar inom två områden: transporter och fastigheter. Oavsett om ni behöver
                    hjälp med en transport, söker lokal eller behöver praktisk service vill vi göra
                    det enkelt att få jobbet gjort.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- About --}}
<section id="om-oss" class="scroll-mt-24 bg-slate-50">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 py-20 lg:grid-cols-2 lg:items-center lg:px-8">
        <div class="overflow-hidden rounded-3xl bg-white shadow-xl shadow-slate-200/60">
            <img src="{{ asset('img/about.jpg') }}" alt="Om Blåsbo Transport AB" class="aspect-[4/3] w-full object-cover">
        </div>

        <div>
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-blue-700">Om oss</p>
            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                Erfarenhet sedan början av 90-talet
            </h2>
            <div class="mt-6 space-y-5 leading-7 text-slate-600">
                <p>
                    Vi började med en grusbil och växte successivt till en verksamhet med flera lastbilar
                    och uppdrag för bland annat ICA och Posten. Med tiden har fastigheter blivit en större
                    del av verksamheten, samtidigt som transportdelen finns kvar.
                </p>
                <p>
                    För oss handlar ett bra samarbete om långsiktighet, god arbetsmiljö och att båda parter
                    ska kunna utvecklas. Vi vill vara en flexibel partner som löser det som behöver lösas.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Services --}}
<section id="tjanster" class="scroll-mt-24 bg-white">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-blue-700">Våra tjänster</p>
            <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                Flexibla lösningar för företag
            </h2>
            <p class="mt-5 text-lg leading-8 text-slate-600">
                Från transporter och lager till lokaler och praktisk service – kontakta oss så ser vi vad vi kan hjälpa er med.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            <article class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-2xl">🚚</div>
                <h3 class="mt-6 text-xl font-bold text-slate-950">Transporter</h3>
                <p class="mt-3 leading-6 text-slate-600">
                    Transporter av bland annat grus, varor och tempererade produkter.
                </p>
            </article>

            <article class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-2xl">🏢</div>
                <h3 class="mt-6 text-xl font-bold text-slate-950">Lokaler</h3>
                <p class="mt-3 leading-6 text-slate-600">
                    Kontor, butikslokaler, lager och garage för företag som behöver plats.
                </p>
            </article>

            <article class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-2xl">📦</div>
                <h3 class="mt-6 text-xl font-bold text-slate-950">Lager & magasinering</h3>
                <p class="mt-3 leading-6 text-slate-600">
                    Lagerytor och magasinering när ni behöver extra utrymme.
                </p>
            </article>

            <article class="group rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-2xl">🔧</div>
                <h3 class="mt-6 text-xl font-bold text-slate-950">Service</h3>
                <p class="mt-3 leading-6 text-slate-600">
                    Påfyllning av varor, vaktmästeri, städning och flytt av möbler.
                </p>
            </article>
        </div>
    </div>
</section>

{{-- Image / CTA --}}
<section class="bg-slate-950">
    <div class="mx-auto grid max-w-7xl lg:grid-cols-2">
        <div class="order-2 flex items-center px-6 py-16 lg:order-1 lg:px-12">
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-blue-400">Har ni ett uppdrag?</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Berätta vad ni behöver hjälp med.
                </h2>
                <p class="mt-5 max-w-xl leading-7 text-slate-300">
                    Inget uppdrag är för stort eller för litet. Beskriv vad ni behöver så återkommer vi.
                </p>
                <a href="#kontakt" class="mt-8 inline-flex rounded-xl bg-white px-6 py-3.5 font-semibold text-slate-950 transition hover:bg-slate-100">
                    Kontakta oss →
                </a>
            </div>
        </div>
        <div class="order-1 min-h-[360px] lg:order-2">
            <img src="{{ asset('img/services.jpeg') }}" alt="Blåsbo Transport AB – våra tjänster" class="h-full w-full object-cover">
        </div>
    </div>
</section>

{{-- Contact --}}
<section id="kontakt" class="scroll-mt-24 bg-slate-50">
    <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.2em] text-blue-700">Kontakta oss</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-950 sm:text-4xl">
                    Låt oss prata om ert behov
                </h2>
                <p class="mt-5 leading-7 text-slate-600">
                    Skicka en förfrågan via formuläret så återkommer vi. Du kan också ringa eller mejla oss direkt.
                </p>

                <div class="mt-8 space-y-5">
                    <div>
                        <p class="text-sm font-semibold text-slate-500">Telefon</p>
                        <a href="tel:+46705900061" class="mt-1 block text-lg font-semibold text-slate-950 hover:text-blue-700">070-590 00 61</a>
                    </div>

                    <div>
                        <p class="text-sm font-semibold text-slate-500">Adress</p>
                        <p class="mt-1 text-lg font-semibold text-slate-950">Friledningsgatan 3b<br>721 37 Västerås</p>
                    </div>
                </div>
            </div>

            <div class="rounded-3xl bg-white p-6 shadow-xl shadow-slate-200/70 sm:p-8">
                @if(session('check'))
                <div class="bg-emerald-600 px-6 py-4 text-center text-sm font-semibold text-white">
                    {{ session('check') }}
                </div>
                @endif
                <form method="POST" action="{{ route('contact.store') }}#kontakt" class="space-y-6">
                    @csrf

                    {{-- Honeypot: riktiga besökare ska aldrig fylla i detta fält. --}}
                    <div class="absolute -left-[9999px] h-px w-px overflow-hidden" aria-hidden="true">
                        <label for="website">Lämna detta fält tomt</label>
                        <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="grid gap-6 sm:grid-cols-2">
                        <div>
                            <label for="name" class="text-sm font-semibold text-slate-800">Namn *</label>
                            <input id="name" name="name" value="{{ old('name') }}" required
                                class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition placeholder:text-slate-400 focus:border-blue-600 focus:ring-4 focus:ring-blue-100"
                                placeholder="Ditt namn">
                            @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="email" class="text-sm font-semibold text-slate-800">E-post *</label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required
                                class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition placeholder:text-slate-400 focus:border-blue-600 focus:ring-4 focus:ring-blue-100"
                                placeholder="namn@foretag.se">
                            @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label for="phone" class="text-sm font-semibold text-slate-800">Telefon</label>
                        <input id="phone" name="phone" value="{{ old('phone') }}"
                            class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition placeholder:text-slate-400 focus:border-blue-600 focus:ring-4 focus:ring-blue-100"
                            placeholder="070-000 00 00">
                        @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="message" class="text-sm font-semibold text-slate-800">Meddelande *</label>
                        <textarea id="message" name="message" rows="6" required
                            class="mt-2 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition placeholder:text-slate-400 focus:border-blue-600 focus:ring-4 focus:ring-blue-100"
                            placeholder="Berätta gärna vad ni behöver hjälp med...">{{ old('message') }}</textarea>
                        @error('message') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    {{-- Cloudflare Turnstile: lägg widgeten här --}}
                    <div class="min-h-16 rounded-lg border border-dashed border-slate-200 bg-white p-3">
                        <span class="text-xs text-slate-300">
                            <div class="cf-turnstile"
                                data-sitekey="{{ config('services.turnstile.site_key') }}"
                                data-size="flexible">
                            </div>
                        </span>
                    </div>
                    @error('cf-turnstile-response')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                    <button type="submit"
                        class="inline-flex w-full items-center justify-center rounded-xl bg-blue-700 px-6 py-3.5 font-semibold text-white shadow-lg shadow-blue-700/20 transition hover:bg-blue-800 sm:w-auto">
                        Skicka förfrågan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection