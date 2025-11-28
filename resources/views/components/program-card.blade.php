@props([
    'title',
    'description',
    'features' => [],
    'iconClass' => 'bg-primary/10 text-primary',
    'iconMarkup' => null,
])

<section {{ $attributes->class('rounded-3xl border border-slate-200 bg-white p-8 shadow-sm') }}>
  <div class="flex h-12 w-12 items-center justify-center rounded-full {{ $iconClass }}">
    {!! $iconMarkup !!}
  </div>
  <h3 class="mt-6 text-lg font-semibold text-slate-900">{{ $title }}</h3>
  <p class="mt-3 text-sm text-slate-600">{{ $description }}</p>
  @if (filled($features))
    <ul class="mt-4 space-y-2 text-sm text-slate-500">
      @foreach ($features as $feature)
        <li>• {{ $feature }}</li>
      @endforeach
    </ul>
  @endif
</section>
