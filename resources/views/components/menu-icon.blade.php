@props([
    'name' => null,
])

@switch($name)
	@case('website')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<rect x="3" y="4" width="18" height="16" rx="2" />
			<path d="M3 9h18" />
		</svg>
	@break

	@case('app')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<rect x="3" y="3" width="7" height="7" rx="1.5" />
			<rect x="14" y="3" width="7" height="7" rx="1.5" />
			<rect x="3" y="14" width="7" height="7" rx="1.5" />
			<rect x="14" y="14" width="7" height="7" rx="1.5" />
		</svg>
	@break

	@case('code')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'stroke-linejoin' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<path d="M8 8l-4 4 4 4M16 8l4 4-4 4M14 5l-4 14" />
		</svg>
	@break

	@case('api')
		<span {{ $attributes->class(['inline-flex h-5 items-center justify-center font-mono text-[10px] font-bold']) }}>
			API
		</span>
	@break

	@case('maintenance')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'stroke-linejoin' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<path d="M14.7 6.3a5 5 0 0 0-6.4 6.4L3 18l3 3 5.3-5.3a5 5 0 0 0 6.4-6.4L14 13l-3-3 3.7-3.7z" />
		</svg>
	@break

	@case('seo')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'stroke-linejoin' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<circle cx="10.5" cy="10.5" r="6.5" />
			<path d="m16 16 5 5M8 12l2-2 2 1 2-3" />
		</svg>
	@break

	@case('shop')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'stroke-linejoin' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<path d="M3 9l2-5h14l2 5v2a3 3 0 0 1-6 0 3 3 0 0 1-6 0 3 3 0 0 1-6 0V9z" />
			<path d="M5 14v6h14v-6M9 20v-5h6v5" />
		</svg>
	@break

	@case('database')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<ellipse cx="12" cy="5" rx="8" ry="3" />
			<path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5" />
			<path d="M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3" />
		</svg>
	@break

	@case('server')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<rect x="3" y="3" width="18" height="8" rx="2" />
			<rect x="3" y="13" width="18" height="8" rx="2" />
			<path d="M7 7h.01M7 17h.01M11 7h6M11 17h6" />
		</svg>
	@break

	@case('security')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'stroke-linejoin' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z" />
			<path d="m9 12 2 2 4-4" />
		</svg>
	@break

	@case('mobile')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<rect x="6" y="2" width="12" height="20" rx="2.5" />
			<path d="M10 5h4M11 19h2" />
		</svg>
	@break

	@case('design')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<path d="M4 4h16v16H4zM4 10h16M10 10v10" />
			<path d="M7 7h.01M10 7h.01M13 7h.01" />
		</svg>
	@break

	@case('integration')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'stroke-linejoin' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<rect x="2" y="8" width="7" height="8" rx="1.5" />
			<rect x="15" y="8" width="7" height="8" rx="1.5" />
			<path d="M9 12h6M12 9v6" />
		</svg>
	@break

	@case('performance')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'stroke-linejoin' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<path d="M5 17a9 9 0 1 1 14 0" />
			<path d="m12 13 5-6M9 20h6M12 20v-2" />
			<circle cx="12" cy="13" r="1" />
		</svg>
	@break

	@case('consulting')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'stroke-linejoin' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<path d="M4 4h16v13H9l-5 4V4z" />
			<path d="M9 9a3 3 0 0 1 6 0c0 2-3 2-3 4M12 16h.01" />
		</svg>
	@break

	@case('cloud')
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'stroke-linejoin' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<path d="M7 18a5 5 0 0 1-1-9.9A7 7 0 0 1 19 10a4 4 0 0 1-1 8H7z" />
		</svg>
	@break

	@default
		<svg {{ $attributes->class(['h-5 w-5'])->merge([
		    'fill' => 'none',
		    'stroke' => 'currentColor',
		    'stroke-width' => '1.7',
		    'stroke-linecap' => 'round',
		    'stroke-linejoin' => 'round',
		    'viewBox' => '0 0 24 24',
		]) }}>
			<path d="M10 13a5 5 0 0 0 7.07 0l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
			<path d="M14 11a5 5 0 0 0-7.07 0l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
		</svg>
@endswitch
