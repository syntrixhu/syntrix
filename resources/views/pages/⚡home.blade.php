<?php

use Livewire\Component;

new class extends Component {};
?>

<div class="overflow-hidden bg-white text-slate-900">

	{{-- HERO --}}
	<section class="relative isolate" id="home">

		{{-- Background decoration --}}
		<div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
			<div class="absolute -right-40 top-0 h-[500px] w-[500px] rounded-full bg-blue-100/60 blur-[120px]"></div>
			<div class="absolute -left-40 top-60 h-[400px] w-[400px] rounded-full bg-violet-100/40 blur-[120px]"></div>

			<div class="absolute inset-0 opacity-[0.035]" style="background-image: linear-gradient(#64748b 1px, transparent 1px), linear-gradient(90deg, #64748b 1px, transparent 1px); background-size: 48px 48px;"></div>
		</div>

		<div class="mx-auto grid max-w-7xl items-center gap-14 px-5 pb-24 pt-16 sm:px-6 sm:pb-28 sm:pt-20 lg:grid-cols-2 lg:gap-16 lg:px-8 lg:pb-32 lg:pt-24">

			{{-- Hero text --}}
			<div class="max-w-2xl" data-aos="zoom-in" data-aos-delay="100">

				<h1 class="mt-8 text-4xl font-semibold leading-[1.12] tracking-[-0.045em] text-slate-950 sm:text-5xl md:text-6xl lg:text-[64px]">
					Nem csak egy weboldal.
					<span class="mt-2 block bg-gradient-to-r from-blue-600 via-indigo-600 to-violet-600 bg-clip-text text-transparent">
						Egy működő megoldás.
					</span>
				</h1>
				<p class="mt-7 max-w-xl text-base leading-8 text-slate-600 sm:text-lg">
					Modern weboldalakat és egyedi webalkalmazásokat fejlesztek, amelyek nemcsak jól néznek ki, hanem valódi célokat szolgálnak. Átgondolt tervezés, tiszta kód és megbízható technológia.
				</p>
				<div class="mt-9 flex flex-col gap-3 sm:flex-row">
					<a class="group inline-flex min-h-14 items-center justify-center gap-3 rounded-xl bg-slate-950 px-6 py-4 text-sm font-semibold text-white shadow-lg shadow-slate-950/10 transition duration-300 hover:bg-blue-600 hover:shadow-xl hover:shadow-blue-600/20" href="#kapcsolat">
						Beszéljünk a projektedről
						<svg class="h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M3 10a1 1 0 011-1h10.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L14.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
						</svg>
					</a>
					<a class="inline-flex min-h-14 items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white/80 px-6 py-4 text-sm font-semibold text-slate-700 transition hover:border-slate-300 hover:bg-white hover:text-slate-950" href="#referenciak">
						Referenciák megtekintése
						<svg class="h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M3 10a1 1 0 011-1h10.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L14.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
						</svg>
					</a>
				</div>

				{{-- Technologies --}}
				<div class="mt-12 border-t border-slate-200/80 pt-6">
					<p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-slate-400">
						Modern technológiai alapok
					</p>
					<div class="mt-4 flex flex-wrap items-center gap-x-6 gap-y-3 font-mono text-sm font-medium text-slate-500">
						<span>Laravel</span>
						<span>Livewire</span>
						<span>PHP</span>
						<span>Tailwind CSS</span>
					</div>
				</div>
			</div>
			{{-- Code preview --}}
			<div class="relative mx-auto w-full max-w-xl lg:ml-auto">
				{{-- Glow --}}
				<div class="absolute -inset-5 rounded-[32px] bg-gradient-to-br from-blue-500/15 via-indigo-500/10 to-violet-500/15 blur-2xl"></div>
				<div class="relative overflow-hidden rounded-2xl border border-slate-800 bg-[#0b1020] shadow-2xl shadow-slate-900/20">
					{{-- Window header --}}
					<div class="flex items-center justify-between border-b border-white/10 px-5 py-4">
						<div class="flex items-center gap-2">
							<span class="h-2.5 w-2.5 rounded-full bg-rose-400"></span>
							<span class="h-2.5 w-2.5 rounded-full bg-amber-300"></span>
							<span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
						</div>
						<div class="font-mono text-[11px] text-slate-500">
							project.blade.php
						</div>
						<div class="font-mono text-xs text-slate-600">
							PHP
						</div>
					</div>
					{{-- Code --}}
					<div class="overflow-x-auto p-5 font-mono text-[11px] leading-[2.2] sm:p-7 sm:text-[13px]">
						<div class="flex min-w-max gap-5">
							<div class="select-none text-right text-slate-600">
								01<br />02<br />03<br />04<br />05<br />06<br />07<br />08<br />09<br />10<br />11<br />12
							</div>
							<div>
								<div>
									<span class="text-violet-400">class</span>
									<span class="text-blue-300"> WebProject</span>
								</div>
								<div class="text-slate-500">{'{'}</div>
								<div class="pl-5">
									<span class="text-violet-400">public function</span>
									<span class="text-amber-200"> build</span><span class="text-slate-300">()</span>
								</div>
								<div class="pl-5 text-slate-500">{'{'}</div>

								<div class="pl-10">
									<span class="text-violet-300">return</span>
									<span class="text-emerald-300"> response</span><span class="text-slate-300">([</span>
								</div>

								<div class="pl-14">
									<span class="text-slate-300">'design'</span>
									<span class="text-slate-500"> =&gt; </span>
									<span class="text-amber-200">'modern'</span><span class="text-slate-300">,</span>
								</div>

								<div class="pl-14">
									<span class="text-slate-300">'performance'</span>
									<span class="text-slate-500"> =&gt; </span>
									<span class="text-emerald-300">true</span><span class="text-slate-300">,</span>
								</div>

								<div class="pl-14">
									<span class="text-slate-300">'responsive'</span>
									<span class="text-slate-500"> =&gt; </span>
									<span class="text-emerald-300">true</span><span class="text-slate-300">,</span>
								</div>

								<div class="pl-14">
									<span class="text-slate-300">'quality'</span>
									<span class="text-slate-500"> =&gt; </span>
									<span class="text-amber-200">'high'</span>
								</div>

								<div class="pl-10 text-slate-300">]);</div>

								<div class="pl-5 text-slate-500">{'}'}</div>

								<div class="text-slate-500">{'}'}</div>

								<div class="mt-2 text-slate-500">
									// Built for real-world results.
								</div>
							</div>
						</div>

					</div>
					{{-- Bottom status --}}
					<div class="flex items-center justify-between border-t border-white/10 bg-white/[0.025] px-5 py-3.5">
						<div class="flex items-center gap-2 text-[11px] text-slate-500">
							<span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
							Clean code. Thoughtful design.
						</div>
						<span class="font-mono text-[10px] text-slate-600">
							v1.0.0
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="border-t border-slate-100 bg-slate-50/70 py-24 sm:py-28" id="szolgaltatasok">
		<livewire:home.services />
	</section>

	<section class="py-24 sm:py-28" id="referenciak">
		<livewire:home.feature-project />
	</section>

	<section class="border-y border-slate-800 bg-[#080b12] py-24 text-white sm:py-28" id="rolunk">
		<livewire:home.about />
	</section>


	{{-- PROCESS --}}
	<section class="py-24 sm:py-28">

		<div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
			<div class="mx-auto max-w-2xl text-center">
				<p class="font-mono text-xs font-semibold uppercase tracking-[0.2em] text-blue-600">
					// Munkafolyamat
				</p>
				<h2 class="mt-4 text-3xl font-semibold tracking-[-0.035em] text-slate-950 sm:text-4xl">
					Átlátható folyamat. Kiszámítható haladás.
				</h2>
				<p class="mt-4 text-sm leading-7 text-slate-600">
					A kezdeti ötlettől az átadásig minden lépésnek megvan a maga szerepe.
				</p>
			</div>
			<div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
				<div class="relative border-t border-slate-200 pt-6">
					<span class="font-mono text-sm text-blue-600">01 / FELMÉRÉS</span>
					<h3 class="mt-4 text-lg font-semibold text-slate-950">Megismerjük a célt</h3>
					<p class="mt-3 text-sm leading-7 text-slate-600">
						Átbeszéljük az elképzeléseket, az igényeket és a szükséges funkciókat.
					</p>
				</div>

				<div class="relative border-t border-slate-200 pt-6">
					<span class="font-mono text-sm text-blue-600">02 / TERVEZÉS</span>
					<h3 class="mt-4 text-lg font-semibold text-slate-950">Megtervezzük</h3>
					<p class="mt-3 text-sm leading-7 text-slate-600">
						Kialakítjuk a felépítést, a megjelenést és a működés logikáját.
					</p>
				</div>

				<div class="relative border-t border-slate-200 pt-6">
					<span class="font-mono text-sm text-blue-600">03 / FEJLESZTÉS</span>
					<h3 class="mt-4 text-lg font-semibold text-slate-950">Életre keltjük</h3>
					<p class="mt-3 text-sm leading-7 text-slate-600">
						Megvalósítjuk a funkciókat, majd ellenőrizzük a működést és a megjelenést.
					</p>
				</div>

				<div class="relative border-t border-slate-200 pt-6">
					<span class="font-mono text-sm text-blue-600">04 / ÁTADÁS</span>
					<h3 class="mt-4 text-lg font-semibold text-slate-950">Elindítjuk</h3>
					<p class="mt-3 text-sm leading-7 text-slate-600">
						Az ellenőrzött projektet átadjuk, és egyeztetünk a további lehetőségekről.
					</p>
				</div>
			</div>
		</div>
	</section>

	{{-- CONTACT CTA --}}
	<section class="px-5 pb-24 sm:px-6 sm:pb-28 lg:px-8" id="kapcsolat">

		<div class="relative mx-auto max-w-7xl overflow-hidden rounded-3xl bg-[#080b12] px-6 py-14 sm:px-12 sm:py-16 lg:px-16 lg:py-20">

			{{-- Decorative lights --}}
			<div class="pointer-events-none absolute -right-20 -top-40 h-96 w-96 rounded-full bg-blue-600/20 blur-[100px]"></div>
			<div class="pointer-events-none absolute -bottom-40 left-1/4 h-80 w-80 rounded-full bg-violet-600/15 blur-[100px]"></div>

			<div class="relative flex flex-col gap-9 lg:flex-row lg:items-center lg:justify-between">

				<div class="max-w-2xl">

					<p class="font-mono text-xs font-semibold uppercase tracking-[0.2em] text-blue-400">
						// Következő lépés
					</p>

					<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-[-0.035em] text-white sm:text-4xl lg:text-5xl">
						Van egy ötleted?
						<span class="text-slate-500">Valósítsuk meg.</span>
					</h2>

					<p class="mt-5 max-w-xl text-sm leading-7 text-slate-400 sm:text-base">
						Mesélj az elképzelésedről, és nézzük meg,
						milyen digitális megoldás illene leginkább a projektedhez.
					</p>

				</div>


				<a class="group inline-flex shrink-0 items-center justify-center gap-3 rounded-xl bg-white px-6 py-4 text-sm font-semibold text-slate-950 transition duration-300 hover:-translate-y-0.5 hover:bg-blue-50 hover:shadow-xl hover:shadow-blue-500/10" href="mailto:hello@example.com">
					Kapcsolatfelvétel

					<svg class="h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd" d="M3 10a1 1 0 011-1h10.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L14.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
					</svg>
				</a>

			</div>

		</div>

	</section>

</div>
