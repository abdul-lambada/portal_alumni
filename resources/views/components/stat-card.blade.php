@props(['label', 'value', 'description'])

<article {{ $attributes->class('rounded-3xl border border-white/10 bg-white/5 p-6') }}>
  <p class="text-xs uppercase tracking-[0.35em] text-white/60">{{ $label }}</p>
  <p class="mt-4 text-4xl font-semibold">{{ $value }}</p>
  <p class="mt-2 text-sm text-white/70">{{ $description }}</p>
</article>
