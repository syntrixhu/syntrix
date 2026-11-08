<?php

use Livewire\Component;

new class extends Component {
    public array $services = [
        [
            'title' => 'Weboldal-fejlesztés',
            'description' => 'Egyedi megjelenésű, gyors és reszponzív weboldalak, amelyek professzionálisan mutatják be a vállalkozásodat.',
            'icon' => 'code',
            'counter' => '01',
            'tags' => ['UI / UX', 'Responsive'],
            'preferences' => ['Egyedi, márkához illő design', 'Gyors betöltés, SEO-barát kód', 'Mobilra és tabletre optimalizálva'],
            'link' => '/weboldal-fejlesztes',
        ],
        [
            'title' => 'Webalkalmazás-fejlesztés',
            'description' => 'Egyedi webalkalmazások, amelyek automatizálják a folyamatokat, növelik a hatékonyságot és javítják a felhasználói élményt.',
            'icon' => 'server',
            'counter' => '02',
            'tags' => ['Laravel', 'Livewire'],
            'preferences' => ['Automatizált folyamatok', 'Hatékony adatkezelés', 'Felhasználóbarát felület'],
            'link' => 'webalkalmazas-fejlesztes',
        ],
        [
            'title' => 'E-kereskedelem',
            'description' => 'Teljesen testreszabott e-kereskedelmi megoldások, amelyek növelik az értékesítést és javítják a vásárlói élményt.',
            'icon' => 'shopping-cart',
            'counter' => '03',
            'tags' => ['Shopify', 'WooCommerce'],
            'preferences' => ['Webshop integráció', 'Biztonságos fizetési megoldások', 'Könnyen kezelhető admin felület'],
            'link' => 'e-kereskedelem',
        ],
        [
            'title' => 'Weboldal karbantartás',
            'description' => 'Rendszeres frissítések, biztonsági mentések és teljesítmény-optimalizálás, hogy weboldalad mindig naprakész és biztonságos legyen.',
            'icon' => 'wrench',
            'counter' => '04',
            'tags' => ['Maintenance', 'Security'],
            'preferences' => ['Rendszeres frissítések', 'Biztonsági mentések', 'Teljesítmény-optimalizálás'],
            'link' => 'weboldal-karbantartas',
        ],
        [
            'title' => 'Mobil Alkalmazás',
            'description' => 'Natív és cross-platform mobil alkalmazások fejlesztése, amelyek növelik a felhasználói elköteleződést és javítják a felhasználói élményt.',
            'icon' => 'server',
            'counter' => '05',
            'tags' => ['Android', 'iOS'],
            'preferences' => ['Natív mobil alkalmazások', 'Cross-platform megoldások', 'Felhasználóbarát felület'],
            'link' => 'mobil-alkalmazas',
        ],
        [
            'title' => 'API Integráció',
            'description' => 'Külső szolgáltatások és rendszerek integrálása az API-kon keresztül, hogy a weboldalad vagy alkalmazásod zökkenőmentesen működjön más platformokkal.',
            'icon' => 'code',
            'counter' => '06',
            'tags' => ['REST', 'GraphQL'],
            'preferences' => ['Külső szolgáltatások integrálása', 'Adatcsere más rendszerekkel', 'Zökkenőmentes működés'],
            'link' => 'api-integracio',
        ],
    ];
};
?>

<div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
	<div class="flex w-full flex-col gap-5 text-center">
		<div class="w-full text-center" data-aos="fade-up" data-aos-delay="100">
			<p class="font-mono text-xs font-semibold uppercase tracking-[0.2em] text-blue-600">
				// Szolgáltatások
			</p>
			<h2 class="mt-4 text-3xl font-semibold tracking-[-0.035em] text-slate-950 sm:text-4xl lg:text-5xl">
				Az ötlettől a működő
				<span class="text-slate-400">megoldásig.</span>
			</h2>
			<p class="text-sm leading-7 text-slate-600">
				Minden projekt más. A megoldást a céljaidhoz, a felhasználóidhoz és a vállalkozásod igényeihez igazítom.
			</p>
		</div>
	</div>
	<div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
		@foreach ($services as $service)
			<article class="rounded-4xl bg-linear-to-b group relative flex h-full flex-col overflow-hidden border border-slate-200 from-slate-100 via-slate-100 to-slate-200/80 p-8 shadow-sm transition duration-500 hover:-translate-y-2 hover:border-blue-300/70 hover:shadow-2xl hover:shadow-blue-900/15 sm:p-9">
				<div class="bg-linear-to-r absolute inset-x-0 top-0 h-1 origin-left scale-x-0 from-blue-500 via-sky-400 to-indigo-500 transition duration-500 group-hover:scale-x-100"></div>
				<div class="pointer-events-none absolute inset-0 bg-[linear-gradient(to_right,#0f172a0d_1px,transparent_1px),linear-gradient(to_bottom,#0f172a0d_1px,transparent_1px)] bg-[size:28px_28px] [mask-image:radial-gradient(ellipse_at_top_right,black,transparent_70%)]"></div>
				<div class="pointer-events-none absolute -right-20 -top-20 h-56 w-56 rounded-full bg-blue-500/15 blur-3xl transition duration-500 group-hover:bg-blue-500/30"></div>
				<div class="pointer-events-none absolute -bottom-24 -left-16 h-48 w-48 rounded-full bg-white/80 blur-2xl"></div>
				<span class="pointer-events-none absolute -bottom-8 -right-3 select-none font-mono text-[9rem] font-black leading-none text-slate-900/[0.04] transition duration-500 group-hover:text-blue-600/[0.07]">{{ $service['counter'] }}</span>
				<div class="relative flex items-start justify-between">
					<div class="relative">
						<div class="absolute inset-0 rounded-2xl bg-blue-500/40 blur-xl transition duration-500 group-hover:bg-blue-500/60"></div>
						<div class="relative flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 via-blue-600 to-indigo-700 text-white shadow-lg shadow-blue-600/30 ring-1 ring-white/30 transition duration-500 group-hover:-rotate-6 group-hover:scale-110">
							<svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
								<rect x="3" y="4" width="18" height="16" rx="2" />
								<path stroke-linecap="round" d="M3 9h18M8 4v5" />
							</svg>
						</div>
					</div>
				</div>
				<h3 class="relative mt-8 text-2xl font-semibold tracking-tight text-slate-950">
					{{ $service['title'] }}
				</h3>
				<p class="relative mt-3 text-sm leading-7 text-slate-600">
					{{ $service['description'] }}
				</p>
				<ul class="relative mt-6 space-y-3 text-sm text-slate-700">
					@foreach ($service['preferences'] as $preference)
						<li class="flex items-center gap-3">
							<span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-600 transition duration-300 group-hover:bg-blue-600 group-hover:text-white">
								<svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
									<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
								</svg>
							</span>
							{{ $preference }}
						</li>
					@endforeach
				</ul>
				<div class="relative mt-6 flex flex-wrap gap-2">
					@foreach ($service['tags'] as $tag)
						<span class="rounded-full bg-white/80 px-3 py-1.5 font-mono text-[10px] font-medium uppercase tracking-wider text-slate-600 ring-1 ring-slate-200 backdrop-blur">
							{{ $tag }}
						</span>
					@endforeach
				</div>
				<div class="relative mt-auto pt-8">
					<div class="mb-6 h-px w-full bg-gradient-to-r from-transparent via-slate-300 to-transparent"></div>
					<a class="group/btn relative inline-flex w-full items-center justify-between overflow-hidden rounded-2xl bg-slate-900 py-2 pl-6 pr-2 text-sm font-semibold text-white shadow-lg shadow-slate-900/20 transition duration-300 hover:shadow-xl hover:shadow-blue-600/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-100" href="{{ $service['link'] }}">
						<span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-blue-600 to-indigo-600 transition duration-500 group-hover/btn:translate-x-0"></span>
						<span class="relative">Tovább olvasom
						</span>
						<span class="relative flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 transition duration-300 group-hover/btn:bg-white group-hover/btn:text-blue-600">
							<svg class="h-4 w-4 transition-transform duration-300 group-hover/btn:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6" />
							</svg>
						</span>
					</a>
				</div>
			</article>
		@endforeach
	</div>
</div>
