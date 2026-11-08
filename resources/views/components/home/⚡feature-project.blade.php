<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
	<div class="flex flex-col gap-5 md:flex-row md:items-end md:justify-between">
		<div>
			<p class="font-mono text-xs font-semibold uppercase tracking-[0.2em] text-blue-600">
				// Kiemelt munkák
			</p>
			<h2 class="mt-4 text-3xl font-semibold tracking-[-0.035em] text-slate-950 sm:text-4xl">
				Ötletekből digitális termékek.
			</h2>
		</div>
		<p class="max-w-md text-sm leading-7 text-slate-600">
			Néhány projekt, amely bemutatja a tervezés, a fejlesztés és a funkcionalitás találkozását.
		</p>
	</div>
	{{-- Replace these demo cards with real projects --}}
	<div class="mt-12 grid gap-6 md:grid-cols-2">
		{{-- Project 1 --}}
		<article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-slate-900/[0.06]">
			<div class="relative flex aspect-[16/10] items-center justify-center overflow-hidden bg-gradient-to-br from-slate-100 via-blue-50 to-indigo-100 p-6 sm:p-10">
				<div class="absolute left-8 top-8 font-mono text-[10px] uppercase tracking-[0.2em] text-slate-400">
					Project / 001
				</div>
				{{-- Mock browser --}}
				<div class="w-full max-w-md overflow-hidden rounded-xl border border-white/80 bg-white shadow-2xl shadow-indigo-900/10 transition duration-500 group-hover:-translate-y-2">
					<div class="flex h-8 items-center gap-1.5 border-b border-slate-100 px-3">
						<span class="h-2 w-2 rounded-full bg-rose-300"></span>
						<span class="h-2 w-2 rounded-full bg-amber-300"></span>
						<span class="h-2 w-2 rounded-full bg-emerald-300"></span>
						<div class="ml-3 h-3 w-28 rounded-full bg-slate-100"></div>
					</div>
					<div class="grid grid-cols-[1fr_0.8fr] gap-3 p-5 sm:p-7">
						<div class="py-2">
							<div class="h-2 w-12 rounded bg-blue-200"></div>
							<div class="mt-4 h-4 w-full rounded bg-slate-800"></div>
							<div class="mt-2 h-4 w-4/5 rounded bg-slate-800"></div>
							<div class="mt-4 h-2 w-full rounded bg-slate-100"></div>
							<div class="mt-2 h-2 w-3/4 rounded bg-slate-100"></div>
							<div class="mt-5 h-7 w-24 rounded-lg bg-blue-600"></div>
						</div>

						<div class="flex items-end rounded-lg bg-gradient-to-br from-blue-200 to-indigo-300 p-3">
							<div class="h-20 w-full rounded-lg border border-white/60 bg-white/50"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="flex flex-col gap-4 p-6 sm:flex-row sm:items-center sm:justify-between sm:p-7">
				<div>
					<div class="flex flex-wrap gap-2">
						<span class="font-mono text-[10px] text-blue-600">WEB DEVELOPMENT</span>
						<span class="font-mono text-[10px] text-slate-400">/</span>
						<span class="font-mono text-[10px] text-slate-500">UI / UX</span>
					</div>
					<h3 class="mt-2 text-lg font-semibold text-slate-950">
						Üzleti weboldal
					</h3>
					<p class="mt-1 text-sm text-slate-500">
						Modern online jelenlét vállalkozásoknak.
					</p>
				</div>
				<span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-slate-200 text-slate-500 transition group-hover:border-blue-600 group-hover:bg-blue-600 group-hover:text-white">
					<svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd" d="M3 10a1 1 0 011-1h10.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L14.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
					</svg>
				</span>
			</div>
		</article>
		{{-- Project 2 --}}
		<article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-slate-900/[0.06]">
			<div class="relative flex aspect-[16/10] items-center justify-center overflow-hidden bg-gradient-to-br from-slate-100 via-violet-50 to-fuchsia-100 p-6 sm:p-10">
				<div class="absolute left-8 top-8 font-mono text-[10px] uppercase tracking-[0.2em] text-slate-400">
					Project / 002
				</div>
				{{-- Dashboard mockup --}}
				<div class="flex w-full max-w-md overflow-hidden rounded-xl border border-white/80 bg-white shadow-2xl shadow-violet-900/10 transition duration-500 group-hover:-translate-y-2">

					<div class="hidden w-14 flex-col items-center gap-5 bg-[#0b1020] py-5 sm:flex">
						<div class="flex h-7 w-7 items-center justify-center rounded-lg bg-violet-500 font-mono text-[10px] text-white">&lt;/&gt;</div>
						<div class="h-5 w-5 rounded-md bg-white/10"></div>
						<div class="h-5 w-5 rounded-md bg-violet-400/40"></div>
						<div class="h-5 w-5 rounded-md bg-white/10"></div>
					</div>

					<div class="min-w-0 flex-1 p-4 sm:p-5">
						<div class="flex items-center justify-between">
							<div class="h-3 w-24 rounded bg-slate-800"></div>
							<div class="h-6 w-6 rounded-full bg-violet-100"></div>
						</div>

						<div class="mt-5 grid grid-cols-3 gap-2">
							<div class="rounded-lg border border-slate-100 p-2">
								<div class="h-1.5 w-8 rounded bg-slate-200"></div>
								<div class="mt-3 h-3 w-10 rounded bg-violet-400"></div>
							</div>
							<div class="rounded-lg border border-slate-100 p-2">
								<div class="h-1.5 w-8 rounded bg-slate-200"></div>
								<div class="mt-3 h-3 w-10 rounded bg-blue-400"></div>
							</div>
							<div class="rounded-lg border border-slate-100 p-2">
								<div class="h-1.5 w-8 rounded bg-slate-200"></div>
								<div class="mt-3 h-3 w-10 rounded bg-emerald-400"></div>
							</div>
						</div>

						<div class="mt-4 rounded-lg border border-slate-100 p-3">
							<div class="h-2 w-20 rounded bg-slate-200"></div>
							<div class="mt-4 flex h-14 items-end gap-2">
								<div class="h-5 flex-1 rounded-t bg-violet-200"></div>
								<div class="h-9 flex-1 rounded-t bg-violet-300"></div>
								<div class="h-7 flex-1 rounded-t bg-violet-200"></div>
								<div class="h-12 flex-1 rounded-t bg-violet-500"></div>
								<div class="h-8 flex-1 rounded-t bg-violet-300"></div>
								<div class="h-10 flex-1 rounded-t bg-violet-400"></div>
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="flex flex-col gap-4 p-6 sm:flex-row sm:items-center sm:justify-between sm:p-7">

				<div>
					<div class="flex flex-wrap gap-2">
						<span class="font-mono text-[10px] text-violet-600">WEB APPLICATION</span>
						<span class="font-mono text-[10px] text-slate-400">/</span>
						<span class="font-mono text-[10px] text-slate-500">LARAVEL</span>
					</div>

					<h3 class="mt-2 text-lg font-semibold text-slate-950">
						Egyedi adminisztrációs rendszer
					</h3>

					<p class="mt-1 text-sm text-slate-500">
						Átlátható felület és üzleti folyamatok.
					</p>
				</div>

				<span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-slate-200 text-slate-500 transition group-hover:border-violet-600 group-hover:bg-violet-600 group-hover:text-white">
					<svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd" d="M3 10a1 1 0 011-1h10.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L14.586 11H4a1 1 0 01-1-1z" clip-rule="evenodd" />
					</svg>
				</span>

			</div>

		</article>

	</div>
</div>
