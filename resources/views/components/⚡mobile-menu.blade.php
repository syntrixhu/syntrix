<?php

use App\Models\MenuItem;
use Livewire\Component;
use Livewire\Attributes\Computed;

new class extends Component {
    #[Computed]
    public function mainmenus()
    {
        return MenuItem::navigationTree();
    }
};

?>

<div class="border-t border-slate-100 bg-white lg:hidden" x-cloak x-show="mobileOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4">
	<div class="mx-auto max-w-7xl px-5 pb-7 pt-4 sm:px-6">

		<nav class="divide-y divide-slate-100" aria-label="Mobil navigáció">

			@foreach ($this->mainmenus as $mainmenu)
				@if ($mainmenu->activeChildren->isNotEmpty())
					{{-- Lenyíló menüpont --}}
					<div wire:key="mobile-menu-{{ $mainmenu->id }}" x-data="{ open: false }">
						<button class="flex w-full items-center justify-between py-4 text-lg font-medium tracking-tight text-slate-900 transition hover:text-slate-600" type="button" @click="open = !open" :aria-expanded="open.toString()">
							<span>{{ $mainmenu->name }}</span>

							<svg class="h-4 w-4 text-slate-400 transition-transform duration-200" :class="open ? 'rotate-180' : ''" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
							</svg>
						</button>

						{{-- Almenüpontok --}}
						<div class="pb-3" x-cloak x-show="open" x-collapse>
							<div class="space-y-1 border-l border-slate-200 pl-3">

								@foreach ($mainmenu->activeChildren as $child)
									<a class="group flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600 transition-colors hover:bg-slate-50 hover:text-slate-950" href="{{ $child->url }}" wire:key="mobile-child-{{ $child->id }}" @click="mobileOpen = false; open = false">
										<span class="h-1.5 w-1.5 shrink-0 rounded-full bg-slate-400 transition-colors group-hover:bg-slate-700"></span>

										<span>
											{{ $child->name }}
										</span>

										<svg class="ml-auto h-4 w-4 text-slate-300 opacity-0 transition-opacity group-hover:opacity-100" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24">
											<path d="M5 12h14m-6-6 6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</a>
								@endforeach

							</div>
						</div>
					</div>
				@else
					{{-- Normál főmenüpont --}}
					<a class="group flex items-center justify-between py-4 text-lg font-medium tracking-tight text-slate-900 transition-colors hover:text-slate-600" href="{{ $mainmenu->url }}" wire:key="mobile-menu-{{ $mainmenu->id }}" @click="mobileOpen = false">
						<span>{{ $mainmenu->name }}</span>

						<svg class="h-4 w-4 text-slate-300 transition-transform group-hover:translate-x-1 group-hover:text-slate-500" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4-4a1 1 0 01-1.414 0z" />
						</svg>
					</a>
				@endif
			@endforeach

		</nav>

		{{-- Mobile CTA --}}
		<a class="mt-6 flex items-center justify-between rounded-2xl bg-slate-950 px-5 py-4 text-sm font-semibold text-white transition-colors hover:bg-slate-800" href="/#kapcsolat" @click="mobileOpen = false">
			<span>Indítsunk egy projektet</span>

			<span class="font-mono text-slate-300">
				→
			</span>
		</a>

	</div>
</div>
