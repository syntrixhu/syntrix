<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	@php
		$metaTitle = $title ?? config('app.name');
		$metaDescription = $description ?? config('app.name');
		$metaUrl = $canonicalUrl ?? request()->url();
	@endphp
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ $metaTitle }}</title>

	<meta name="description" content="{{ $metaDescription }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ $metaUrl }}">
	<meta property="og:title" content="{{ $metaTitle }}">
	<meta property="og:description" content="{{ $metaDescription }}">
	<meta property="og:site_name" content="{{ config('app.name') }}">

	<meta name="twitter:card" content="{{ !empty($image) ? 'summary_large_image' : 'summary' }}">
	<meta name="twitter:url" content="{{ $metaUrl }}">
	<meta name="twitter:title" content="{{ $metaTitle }}">
	<meta name="twitter:description" content="{{ $metaDescription }}">
	@if (!empty($image))
		<meta property="og:image" content="{{ $image }}">
		<meta name="twitter:image" content="{{ $image }}">
	@endif
	@if (!empty($twitterSite))
		<meta name="twitter:site" content="{{ $twitterSite }}">
	@endif
	@if (!empty($twitterCreator))
		<meta name="twitter:creator" content="{{ $twitterCreator }}">
	@endif
	@if (config('services.facebook.app_id'))
		<meta property="fb:app_id" content="{{ config('services.facebook.app_id') }}">
	@endif
	@if (config('services.google.site_verification'))
		<meta name="google-site-verification" content="{{ config('services.google.site_verification') }}">
	@endif

	<link href="/favicon.ico" rel="icon" sizes="any">
	<link type="image/svg+xml" href="/favicon.svg" rel="icon">
	<link href="/apple-touch-icon.png" rel="apple-touch-icon">
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	<link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
	@livewireStyles
</head>

<body class="bg-white text-slate-900 antialiased">

	<div class="min-h-screen" id="app">
		<header class="sticky left-0 top-0 z-50" x-data="{ mobileOpen: false }">
			<div class="absolute top-0 z-50 w-full bg-white/90 backdrop-blur-md">
				<div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
					<div class="flex h-[82px] items-center justify-between">
						<a class="group flex items-center gap-3.5" href="/">
							<div class="relative flex h-10 w-10 items-center justify-center">
								<div class="absolute inset-0 rounded-[13px] bg-slate-950 transition duration-300 group-hover:rotate-3 group-hover:bg-blue-600">
								</div>
								<span class="relative font-mono text-[13px] font-bold tracking-tight text-white">
									&lt;/&gt;
								</span>
							</div>
							<div class="leading-none">
								<span class="block text-[16px] font-bold tracking-[-0.02em] text-slate-950">
									WebStudio
								</span>

								<span class="mt-1.5 block text-[9px] font-semibold uppercase tracking-[0.22em] text-slate-400">
									Digital Engineering
								</span>
							</div>
						</a>
						<livewire:main-menu />
						<div class="flex items-center gap-3">
							<a class="group hidden items-center gap-3 rounded-full bg-slate-950 py-2.5 pl-5 pr-3.5 text-[13px] font-semibold text-white transition-all duration-300 hover:bg-blue-600 hover:shadow-lg hover:shadow-blue-600/20 lg:inline-flex" href="#kapcsolat">
								<span>
									Projekt indítása
								</span>
								<span class="flex h-7 w-7 items-center justify-center rounded-full bg-white/10 transition duration-300 group-hover:bg-white/20">
									<svg class="h-3.5 w-3.5 transition-transform duration-300 group-hover:translate-x-0.5" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M3 10a1 1 0 011-1h10.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L14.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
									</svg>
								</span>
							</a>
							<button class="group flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white transition duration-300 hover:border-slate-300 hover:bg-slate-50 lg:hidden" type="button" aria-label="Menü" @click="mobileOpen = !mobileOpen" :aria-expanded="mobileOpen">
								<div class="flex w-5 flex-col gap-1.5">
									<span class="block h-px w-5 bg-slate-900 transition duration-300" :class="mobileOpen ? 'translate-y-[4px] rotate-45' : ''"></span>
									<span class="block h-px w-3.5 self-end bg-slate-900 transition duration-300" :class="mobileOpen ? 'w-5 -translate-y-[3px] -rotate-45' : ''"></span>
								</div>
							</button>
						</div>
					</div>
				</div>
				{{-- Mobile menu --}}
				<livewire:mobile-menu />
			</div>
		</header>

		{{-- Page content --}}
		<main>
			{{ $slot }}
		</main>

		@php
			use App\Models\MenuItem;

			$footerMenus = MenuItem::navigationTree();

			$servicesMenu = $footerMenus->first(fn($menu) => $menu->name === 'Szolgáltatások');

			$footerServices = $servicesMenu ? $servicesMenu->activeChildren : collect();

			$footerNavigation = $footerMenus->filter(fn($menu) => $menu->id !== $servicesMenu?->id);
		@endphp
		{{-- Footer --}}
		<footer class="relative overflow-hidden border-t border-slate-800 bg-[#080b12] text-white">
			{{-- Decorative background --}}
			<div class="pointer-events-none absolute inset-0">

				<div class="absolute -left-32 -top-32 h-96 w-96 rounded-full bg-blue-600/10 blur-3xl"></div>

				<div class="absolute -bottom-40 right-0 h-96 w-96 rounded-full bg-violet-600/10 blur-3xl"></div>

				<div class="absolute inset-0 opacity-[0.035]" style="
                background-image:
                    linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px);
                background-size: 32px 32px;
            ">
				</div>

			</div>

			<div class="relative mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">

				{{-- Main footer --}}
				<div class="grid gap-12 py-16 md:grid-cols-2 lg:grid-cols-4 lg:py-20">

					{{-- Brand --}}
					<div class="lg:col-span-2">

						<a class="group inline-flex items-center gap-3" href="/">

							<div class="flex h-11 w-11 items-center justify-center rounded-xl border border-blue-400/20 bg-blue-500/10 text-blue-400 transition duration-300 group-hover:border-blue-400/40 group-hover:bg-blue-500/15">
								<span class="font-mono text-lg font-bold">
									&lt;/&gt;
								</span>
							</div>

							<div class="leading-none">

								<span class="block text-base font-bold tracking-tight text-white">
									WebStudio
								</span>

								<span class="mt-1 block text-[10px] font-medium uppercase tracking-[0.2em] text-slate-500">
									Software & Web Development
								</span>

							</div>

						</a>

						<h2 class="mt-7 max-w-xl text-2xl font-semibold tracking-tight text-white sm:text-3xl">
							Digitális megoldások.
							<span class="text-slate-500">
								Tiszta kód.
							</span>
						</h2>

						<p class="mt-5 max-w-lg text-sm leading-7 text-slate-400" data-aos="fade-in">
							Modern weboldalak, webalkalmazások és egyedi digitális
							megoldások fejlesztése. Stabil technológia, átgondolt
							felhasználói élmény és hosszú távon karbantartható kód.
						</p>

						{{-- Code decoration --}}
						<div class="mt-7 inline-flex items-center rounded-xl border border-slate-800 bg-slate-900/70 px-4 py-3 font-mono text-xs shadow-xl shadow-black/10">

							<span class="text-violet-400">const</span>

							<span class="ml-2 text-slate-300">
								future
							</span>

							<span class="mx-2 text-slate-600">
								=
							</span>

							<span class="text-blue-400">
								await
							</span>

							<span class="ml-2 text-emerald-400">
								buildSomethingGreat()
							</span>

							<span class="ml-1 text-slate-500">
								;
							</span>

						</div>

					</div>

					{{-- Services --}}
					<div>

						<h3 class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-500">
							Szolgáltatások
						</h3>

						<ul class="mt-5 space-y-3">

							@foreach ($footerServices as $service)
								<li>
									<a class="group flex items-center gap-2 text-sm text-slate-400 transition-colors hover:text-white" href="{{ $service->url }}">
										<span class="font-mono text-blue-500 opacity-0 transition-opacity group-hover:opacity-100">
											→
										</span>

										<span>
											{{ $service->name }}
										</span>
									</a>
								</li>
							@endforeach

						</ul>

					</div>


					{{-- Navigation --}}
					<div>

						<h3 class="text-xs font-semibold uppercase tracking-[0.18em] text-slate-500">
							Navigáció
						</h3>

						<ul class="mt-5 space-y-3">

							@foreach ($footerNavigation as $menu)
								<li>
									<a class="text-sm text-slate-400 transition-colors hover:text-white" href="{{ $menu->url }}">
										{{ $menu->name }}
									</a>
								</li>
							@endforeach

						</ul>

					</div>


				</div>

				{{-- Contact CTA --}}
				<div class="mb-10 flex flex-col gap-6 rounded-2xl border border-slate-800 bg-slate-900/60 p-6 backdrop-blur-sm sm:flex-row sm:items-center sm:justify-between sm:p-7">

					<div>

						<div class="flex items-center gap-2">

							<span class="h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_12px_rgba(52,211,153,.7)]"></span>

							<span class="text-xs font-medium uppercase tracking-[0.16em] text-emerald-400">
								Elérhető új projektekhez
							</span>

						</div>

						<p class="mt-2 text-sm text-slate-400">
							Van egy ötleted? Beszéljük át, hogyan lehet belőle működő digitális termék.
						</p>

					</div>

					<a class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-semibold text-slate-950 transition duration-300 hover:-translate-y-0.5 hover:bg-slate-100 hover:shadow-xl" href="#kapcsolat">

						Projekt indítása

						<svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M3 10a1 1 0 011-1h10.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L14.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
						</svg>

					</a>

				</div>

				{{-- Bottom bar --}}
				<div class="flex flex-col gap-4 border-t border-slate-800 py-6 text-xs sm:flex-row sm:items-center sm:justify-between">

					<div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-slate-500">

						<span>
							© {{ date('Y') }} WebStudio
						</span>

						<span class="hidden text-slate-700 sm:inline">
							/
						</span>

						<span>
							Minden jog fenntartva.
						</span>

					</div>

					<div class="flex items-center gap-4">

						<span class="font-mono text-slate-600">
							Laravel
						</span>

						<span class="text-slate-700">
							•
						</span>

						<span class="font-mono text-slate-600">
							Livewire
						</span>

						<span class="text-slate-700">
							•
						</span>

						<span class="font-mono text-slate-600">
							Tailwind CSS
						</span>

					</div>

				</div>

			</div>

		</footer>

	</div>
	@livewireScripts
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>
