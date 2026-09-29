<header
    x-data="{ open: false }"
    class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/95 backdrop-blur"
>
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8" aria-label="Huvudnavigation">
        <a href="{{ url('/') }}" class="flex items-center gap-3" @click="open = false">
            <img
                src="{{ asset('img/Logo.png') }}"
                alt="Blåsbo Transport AB"
                class="h-12 w-auto object-contain"
            >
        </a>

        <button
            type="button"
            class="inline-flex items-center justify-center rounded-xl p-2 text-slate-700 transition hover:bg-slate-100 md:hidden"
            @click="open = !open"
            :aria-expanded="open"
            aria-controls="mobile-menu"
            aria-label="Öppna meny"
        >
            <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg x-show="open" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M6 18 18 6M6 6l12 12"/>
            </svg>
        </button>

        <div class="hidden items-center gap-8 md:flex">
            <a href="#hem" class="text-sm font-medium text-slate-700 transition hover:text-blue-700">Hem</a>
            <a href="#om-oss" class="text-sm font-medium text-slate-700 transition hover:text-blue-700">Om oss</a>
            <a href="#tjanster" class="text-sm font-medium text-slate-700 transition hover:text-blue-700">Våra tjänster</a>
            <a href="#kontakt" class="rounded-xl bg-blue-700 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-800">
                Kontakta oss
            </a>
        </div>
    </nav>

    <div
        id="mobile-menu"
        x-show="open"
        x-cloak
        x-transition
        @click.outside="open = false"
        class="border-t border-slate-200 bg-white md:hidden"
    >
        <div class="mx-auto flex max-w-7xl flex-col px-6 py-4">
            <a @click="open = false" href="#hem" class="border-b border-slate-100 py-3 font-medium">Hem</a>
            <a @click="open = false" href="#om-oss" class="border-b border-slate-100 py-3 font-medium">Om oss</a>
            <a @click="open = false" href="#tjanster" class="border-b border-slate-100 py-3 font-medium">Våra tjänster</a>
            <a @click="open = false" href="#kontakt" class="py-3 font-semibold text-blue-700">Kontakta oss</a>
        </div>
    </div>
</header>
