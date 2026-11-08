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

<nav class="hidden items-center gap-8 lg:flex">

	@foreach ($this->mainmenus as $mainmenu)
		@if ($mainmenu->activeChildren->isNotEmpty())
			<div class="relative" wire:key="desktop-menu-{{ $mainmenu->id }}" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" @keydown.escape.window="open = false">
				<button class="group flex items-center gap-1.5 py-2 text-[13px] font-medium text-slate-500 transition-colors hover:text-slate-950" type="button" aria-haspopup="true" @click="open = !open" :aria-expanded="open.toString()">
					{{ $mainmenu->name }}

					<svg class="h-3.5 w-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
					</svg>
				</button>

				<div class="absolute left-1/2 top-full z-50 w-[380px] -translate-x-1/2 pt-4" x-cloak x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2">
					<div class="overflow-hidden rounded-2xl border border-slate-200 bg-white p-2 shadow-xl shadow-slate-900/10">

						<div class="flex flex-col gap-1">

							@foreach ($mainmenu->activeChildren as $child)
								<a class="group flex items-center gap-4 rounded-xl px-3 py-2 transition-colors hover:bg-slate-50" href="{{ $child->url }}" wire:key="desktop-child-{{ $child->id }}" @click="open = false">
									{{-- Szürke ikon --}}
									<div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl border border-slate-200 bg-slate-100 text-slate-500 transition-colors group-hover:bg-slate-200 group-hover:text-slate-800">


										<x-menu-icon class="h-5 w-5" :name="$child->icon" />


									</div>

									<div class="min-w-0 flex-1">
										<h3 class="text-xs font-semibold text-slate-900">
											{{ $child->name }}
										</h3>

										@if ($child->description)
											<p class="mt-1 text-xs leading-5 text-slate-500">
												{{ $child->description }}
											</p>
										@endif
									</div>
								</a>
							@endforeach

						</div>

						<div class="mt-2 border-t border-slate-100 px-4 py-3">
							<p class="text-xs text-slate-500">
								Nem tudod, mire van szükséged?
							</p>

							<a class="mt-1 inline-flex text-xs font-semibold text-slate-900 hover:text-slate-600" href="/#kapcsolat" @click="open = false">
								Beszéljük át →
							</a>
						</div>

					</div>
				</div>
			</div>
		@else
			<a class="group relative py-2 text-[13px] font-medium text-slate-500 transition-colors hover:text-slate-950" href="{{ $mainmenu->url }}" wire:key="desktop-menu-{{ $mainmenu->id }}">
				{{ $mainmenu->name }}

				<span class="absolute -bottom-0.5 left-0 h-px w-0 bg-slate-950 transition-all duration-300 group-hover:w-full"></span>
			</a>
		@endif
	@endforeach

</nav>
