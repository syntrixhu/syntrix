<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div class="mx-auto grid max-w-7xl gap-14 px-5 sm:px-6 lg:grid-cols-2 lg:items-center lg:gap-20 lg:px-8">

	<div>
		<p class="font-mono text-xs font-semibold uppercase tracking-[0.2em] text-blue-400">
			// A szemlélet
		</p>

		<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-[-0.035em] sm:text-4xl lg:text-5xl">
			A jó kód a háttérben dolgozik.
			<span class="text-slate-500">Az eredmény látszik.</span>
		</h2>

		<p class="mt-6 text-sm leading-8 text-slate-400 sm:text-base">
			A fejlesztés számomra nem pusztán a funkciók megvalósításáról szól.
			Fontos a felhasználói élmény, a logikus felépítés,
			a teljesítmény és az, hogy a kész rendszer később is továbbfejleszthető legyen.
		</p>

		<a class="group mt-8 inline-flex items-center gap-3 text-sm font-semibold text-white transition hover:text-blue-400" href="#kapcsolat">
			Ismerjük meg egymást

			<span class="transition-transform group-hover:translate-x-1">→</span>
		</a>
	</div>


	{{-- Principles --}}
	<div class="space-y-4">

		<div class="flex gap-5 rounded-2xl border border-white/10 bg-white/[0.035] p-5 sm:p-6">
			<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-500/10 font-mono text-sm text-blue-400">
				01
			</div>
			<div>
				<h3 class="font-semibold text-white">Átgondolt felépítés</h3>
				<p class="mt-2 text-sm leading-6 text-slate-400">
					Jól strukturált, érthető és karbantartható kód, felesleges bonyolítás nélkül.
				</p>
			</div>
		</div>

		<div class="flex gap-5 rounded-2xl border border-white/10 bg-white/[0.035] p-5 sm:p-6">
			<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-indigo-500/10 font-mono text-sm text-indigo-400">
				02
			</div>
			<div>
				<h3 class="font-semibold text-white">Felhasználóközpontú megoldások</h3>
				<p class="mt-2 text-sm leading-6 text-slate-400">
					Reszponzív felületek és logikus működés mobilon, tableten és asztali gépen.
				</p>
			</div>
		</div>

		<div class="flex gap-5 rounded-2xl border border-white/10 bg-white/[0.035] p-5 sm:p-6">
			<div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-violet-500/10 font-mono text-sm text-violet-400">
				03
			</div>
			<div>
				<h3 class="font-semibold text-white">Hosszú távú gondolkodás</h3>
				<p class="mt-2 text-sm leading-6 text-slate-400">
					Olyan technológiai alapok, amelyekre később is biztonságosan lehet építeni.
				</p>
			</div>
		</div>

	</div>

</div>
